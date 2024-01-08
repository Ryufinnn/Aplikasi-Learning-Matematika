<?php
include "../Library/Koneksi.php";
include "../Library/tanggal.php";
error_reporting(0);
session_start();
?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
	<title>Mathematic Zone :: Administrator</title>
	
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script src="js/jquery-1.5.2.min.js" type="text/javascript"></script>
	<script src="js/hideshow.js" type="text/javascript"></script>
	<script src="js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/jquery.equalHeight.js"></script>
	<script type="text/javascript">
	$(document).ready(function() 
    	{ 
      	  $(".tablesorter").tablesorter(); 
   	 } 
	);
	$(document).ready(function() {

	//When page loads...
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content

	//On Click Event
	$("ul.tabs li").click(function() {

		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content

		var activeTab = $(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active ID content
		return false;
	});

});
    </script>
    <script type="text/javascript">
    $(function(){
        $('.column').equalHeight();
    });
</script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
</head>

<body>

	<header id="header">
		<hgroup>
			<h1 class="site_title"><a href="admin.php">Welcome Admin</a></h1>
			<h2 class="section_title">Dashboard</h2><div class="btn_view_site"><a href="../logout.php">LOGOUT</a></div>
		</hgroup>
	</header> <!-- end of header bar -->
	<section id="secondary_bar">
		<div class="user">
			<p>Admin user</p>
			<!-- <a class="logout_user" href="#" title="Logout">Logout</a> -->
		</div>
		<div class="breadcrumbs_container">
			<article class="breadcrumbs"><a href="#">Website Admin</a></article>
		</div>
	</section><!-- end of secondary bar -->
	<aside class="column">
		<hr/>
		<article class="module width_full">
			<header><h3>Upload File</h3></header>
	<form enctype="multipart/form-data" method="POST" >
			<?php
			include "../Library/konversi.php";
			include "../Library/Koneksi.php";
			
			if($_POST['submit']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$sumber			= $_POST['sumber'];
				$keterangan		= $_POST['keterangan'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasisimpan = '../files/'.$nama.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasisimpan);
						$in = mysql_query("INSERT INTO download VALUES(NULL, '$nama', '$sumber', '$tgl', '$keterangan', '$file_ext', '$file_size', '$lokasisimpan')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload file!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
				}
			}
			?>
	<div class="module_content">
		<fieldset>
			<label>Nama File</label>
			<input type="text" name="nama" size="100" required>
		</fieldset>
		<fieldset>
			<label>Pilih File</label>
			<input type="file" name="file" required> 
		</fieldset>
		<fieldset>
			<label>Sumber</label>
			<input type="text" name="sumber" size="100" required>
		</fieldset>
		<fieldset>
			<label>Keterangan</label>
			<textarea name="keterangan" rows=3 cols=50></textarea>
		</fieldset>

<div class="clear"></div>
<footer>
	<div class="submit_link">
		<input type="submit" class="alt_btm" name="submit" value="Simpan" />
		<input type="button" value="Batal" onClick=self.history.back()>
	</div>
</footer>
	</form>
				
	</div>
</article>
<br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
	
	</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>
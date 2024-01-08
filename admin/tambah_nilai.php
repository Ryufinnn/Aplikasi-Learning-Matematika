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
			<header><h3>Add New Nilai</h3></header>
	<form enctype="multipart/form-data" method="POST" action="aksi.php?act=nilai&donilai=input">
	<div class="module_content">
					<fieldset style="width:48%; float:left; margin-right: 3%;">
						<label>Judul Tugas</label>
						<select name="judul" style="width:92%;">
								<?php 
							$query = mysql_query("SELECT * FROM tugas");
							while ($t = mysql_fetch_array($query)){ ?>
								<option value="<?php echo $t['ID_soal']; ?>"><?php echo $t['Nama_file']; ?></option>
						<?php } ?>
						</select>
					</fieldset>
					<fieldset style="width:48%; float:left; margin-right: 3%;">
						<label>Nama Siswa</label>
						<select name="nama" style="width:92%;">
								<?php 
							$query = mysql_query("SELECT * FROM siswa");
							while ($t = mysql_fetch_array($query)){ ?>
								<option value="<?php echo $t['No_induk']; ?>"><?php echo $t['Nama']; ?></option>
						<?php } ?>
						</select>
					</fieldset>
					<fieldset style="width:48%; float:left; margin-right: 3%;">
						<label>Nilai</label>
						<input type="text" name="txtnilai" size="9" required>
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
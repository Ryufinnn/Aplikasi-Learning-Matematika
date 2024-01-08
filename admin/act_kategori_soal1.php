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
<?php
	switch($_GET['docatsoal']){
	default: ?>
	<h4 class="alert_info">Daftar Kategori soal</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>	
		<tr><th class="header">No</th><th class="header">Nama Kategori</th><th class="header">Aksi</th></tr></thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT *FROM kategori_soal ORDER BY ID_kategori DESC");
		$no = 1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['Nama_kategori']; ?></td>
			<td><a href="?act=kategori_soal&docatsoal=editkategorisoal&id=<?php echo $r['ID_kategori']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=kategori_soal&docatsoal=hapus&id=<?php echo $r['ID_kategori']; ?>"><img src="images/icn_trash.png" /></a>
			</td>
		</tr>
		<?php $no++; } ?>
		</tbody>
	</table>
	</div>
	</article><br class="clear" />
			<input class="button" type="button" value="Tambah Kategori" onClick=location.href="?act=kategori_soal&docatsoal=addkategorisoal">
            <input class="button" type="button" align="right" value="Kembali" onClick=location.href="admin.php">
<br class="clear" />
	<?php break; ?>
	
 <?php case "addkategorisoal": ?>
	<h4 class="alert_info">Tambah Kategori</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=kategori_soal&docatsoal=input">
			<tr>
				<td>Nama Kategori</td>
				<td><input type="text" name="nama_kategori"></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="submit" value="Simpan" />
					<input type="button" value="Batal" onClick=self.history.back() />
				</td>
			</tr>
		</table>
	</form>
	</div>
	</article>
	<?php break; ?>
	
<?php case "editkategorisoal":
	$edit = mysql_query("SELECT * FROM kategori_soal WHERE ID_kategori='$_GET[id]'");
	$r = mysql_fetch_array($edit);
	?>
	<h4 class="alert_info">Tambah Kategori</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Kategori</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=kategori_soal&docatsoal=update">
		<input type="hidden" name="id" value="<?php echo $r['ID_kategori']; ?>">
			<tr>
				<td>Edit Kategori</td>
				<td><input type="text" name="nama_kategori" value="<?php echo $r['Nama_kategori']; ?>" /></td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" value="Update" />
					<input type="button" value="Batal" onClick=self.history.back() />
				</td>
			</tr>
		</table>
	</form>
	</div>
	</article>
     <br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="act_kategori_soal1.php">
<?php break; } ?>
</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>
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
	switch($_GET['do']){
	default:
?>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Materi</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr><th class="header">No</th><th class="header">Judul Materi</th><th class="header">aksi</th></thead>
			<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM materi ORDER BY ID_materi DESC");
		$no =  1;
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $no; ?></td>
			<td><?php echo $r['Judul']; ?></td>
			<td><a href="?act=materi&do=editartikel&idmateri=<?php echo $r['ID_materi']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=materi&do=hapus&idmateri=<?php echo $r['ID_materi']; ?>"><img src="images/icn_trash.png" /></a>
			</td></tr>
		<?php $no++; } ?>
		</tbody>
		</table>
		</div>
		</article>
<br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
	<?php break; ?>

<?php 	case "editartikel": 
		$edit = mysql_query("SELECT * FROM materi WHERE ID_materi='$_GET[idmateri]'");
		$d = mysql_fetch_array($edit);
		?>
		<article class="module width_full">
			<header><h3>Post New Course</h3></header>
	<form method="POST" enctype="multipart/form-data" action="aksi.php?act=materi&do=update">
		<input type="hidden" name="idmateri" value="<?php echo $d['ID_materi']; ?>">
			<div class="module_content">
		<fieldset>
			<label>Judul Materi</label>
			<input type="text" name="nama_artikel" value="<?php echo $d['Judul']; ?>">
		</fieldset>
		<fieldset>
			<textarea rows="12" id="isi" name="isi"><?php echo $d['Isi']; ?></textarea>
		<script type="text/javascript">
			//<![CDATA[
			CKEDITOR.replace( 'isi',
			{
			fullPage : true,
			extraPlugins : 'docprops'
			});
			//]]>
		</script>
		</fieldset>
		<fieldset style="width:48%; float:left; margin-right: 3%;"> <!-- to make two field float next to one another, adjust values accordingly -->
		<label>Category</label>
		<select name="cat" style="width:92%;">
				<?php 
			$query = mysql_query("SELECT * FROM category");
			while ($t = mysql_fetch_array($query)){ ?>
				<option value="<?php echo $t['id']; ?>"><?php echo $t['category']; ?></option>
		<?php } ?>
		</select>
		</fieldset>
		<label>Gambar</label>
		<fieldset style="width:48%; float:left;">
		<img width="100" src="./foto/<?php echo $d['gambar']; ?>" />
		<input type="file" name="fgambar" style="width:92%;">
		</fieldset>
<div class="clear"></div>
<footer>
	<div class="submit_link">
		<input type="submit" class="alt_btm" name="submit" value="Simpan" />
		<input type="button" value="Batal" onClick=self.history.back() />
	</div>
</footer>
	</form>
				
	</div>
</article>
<br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="act_artikel.php">
	<?php break; } ?>
    
	</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>		
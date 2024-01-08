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
<link rel="stylesheet" href="kalender/calendar.css" type="text/css">
<script type="text/javascript" src="kalender/calendar.js"></script>
<script type="text/javascript" src="kalender/calendar2.js"></script>
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
	switch($_GET['dosiswa']){
	default:
?>

	
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar Siswa</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>
			<tr><th class="header">No Induk Siswa</th><th class="header">Nama Siswa</th><th class="header">Jenis Kelamin</th><th class="header">Tempat Lahir</th><th class="header">Tanggal Lahir</th><th class="header">Kelas</th><th class="header">aksi</th></thead>
			<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM siswa ORDER BY No_induk");
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $r['No_induk']; ?></td>
			<td><?php echo $r['Nama']; ?></td>
			<td><?php echo $r['Jekel']; ?></td>
			<td><?php echo $r['Tempat']; ?></td>
			<td><?php echo $r['Tgl']; ?></td>
			<td><?php echo $r['Kelas']; ?></td>
			<td><a href="?act=siswa&dosiswa=editsiswa&id=<?php echo $r['No_induk']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=siswa&dosiswa=hapus&id=<?php echo $r['No_induk']; ?>"><img src="images/icn_trash.png" /></a>
			</td></tr>
			<?php } ?>
		</tbody>
		</table>
		</div>
		</article>
		<br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
	<?php break; ?>

<?php 	case "editsiswa": 
		$edit = mysql_query("SELECT * FROM siswa WHERE No_induk='$_GET[id]'");
		$d = mysql_fetch_array($edit);
		?>
		<article class="module width_full">
			<header><h3>Update Siswa</h3></header>
	<form method="POST" enctype="multipart/form-data" action="aksi.php?act=siswa&dosiswa=update">
		<div class="module_content">
			<fieldset>
				<label>No_induk</label>
				<input onfocus=this.value="" type="text" name="id" value="<?php echo $d['No_induk']; ?>">
			</fieldset>
			<fieldset>
				<label>Nama Siswa</label>
				<input type="text" name="nama" value="<?php echo $d['Nama']; ?>">
			</fieldset>
			<fieldset>
				<td><div class="tabtxt">Jenis Kelamin</div></td>
				 <td><select name="jk" id="jk">
				<option value="L">L</option>
				<option value="P">P</option>
				</select>
					&nbsp;
				<label for="jk"></label></td>
			</fieldset>
			<fieldset>
				<td>Tempat/Tanggal Lahir</td>
				<td><label for="tmp_lahir"></label>
				<input type="text" name="tmp_lahir" id="tmp_lahir" />
					/
				<input name="tgl" style="width:80px" type="textfield" id="tgl" class="tfield" readonly="readonly" />
				<a href="JavaScript:;" onclick="return showCalendar('tgl', 'dd-mm-y');"><img border="0" src="../Image/ico_calendar.gif" align="top" /></a></td>
			</fieldset>
			<fieldset>
				<label>Kelas</label>
				<input type="text" name="kls" value="<?php echo $d['Kelas']; ?>">
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
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
	<?php break; } ?>

	</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>	
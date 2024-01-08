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
	switch($_GET['doadmin']){
	default: ?>
	
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Daftar User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
		<thead>	
		<tr><th class="header">ID User</th><th class="header">Username</th><th class="header">Password</th><th class="header">Role</th><th class="header">Aksi</th></tr></thead>
		<tbody>
	<?php
		$sql = mysql_query("SELECT * FROM user ORDER BY No_ID DESC");
		while ($r=mysql_fetch_array($sql)){ ?>
		<tr><td><?php echo $r['No_ID']; ?></td>
			<td><?php echo $r['Username']; ?></td>
			<td><?php echo $r['Password']; ?></td>
			<td><?php echo $r['Level']; ?></td>
			<td><a href="?act=admin&doadmin=editadmin&id=<?php echo $r['No_ID']; ?>"><img src="images/icn_edit.png" /></a>
				<a href="aksi.php?act=admin&doadmin=hapus&id=<?php echo $r['No_ID']; ?>"><img src="images/icn_trash.png" /></a>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	</div>
	</article><br class="clear" />
			<input class="button" type="button" value="Tambah" onClick=location.href="?act=admin&doadmin=addadmin">
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
<br class="clear" />
	<?php break; ?>
	
 <?php case "addadmin": ?>
<h4 class="alert_info">Tambah Data User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Entry Data User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=admin&doadmin=input">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" size=25 maxlength=25></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" size=25 maxlength=25></td>
			</tr>
				<td>Role</td>
				
				<td><?php echo "<input type='radio' name='rlevel' value='admin'>Admin"; ?>
				<?php echo "<input type='radio' name='rlevel' value='siswa'>Siswa"; ?></td>
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
	
<?php case "editadmin":
	$edit = mysql_query("SELECT * FROM user WHERE No_ID='$_GET[id]'");
	$r = mysql_fetch_array($edit);
	?>
	<h4 class="alert_info">Update Data User</h4>
		<article class="module width_3_quarter">
		<header><h3 class="tabs_involved">Entry Data User</h3></header>
		<div id="tab1" class="tab_content" style="display: block;">
		<table class="tablesorter" cellspacing="0">
	<form method="POST" action="aksi.php?act=admin&doadmin=update">
		<input type="hidden" name="id" value="<?php echo $r['No_ID']; ?>">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" value="<?php echo $r['Username']; ?>" /></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" value="<?php echo $r['Password']; ?>" /></td>
			</tr>
			<tr>
				<td>Role</td>
				<td><?php echo "<input type='radio' name='rlevel' value='admin'>Admin"; ?>
				<?php echo "<input type='radio' name='rlevel' value='siswa'>Siswa"; ?></td>
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
<?php break; } ?>
</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>
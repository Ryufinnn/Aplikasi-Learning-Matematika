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


		<article class="module width_full">
			<header><h3>Add New User</h3></header>
	<form enctype="multipart/form-data" method="POST" action="aksi.php?act=siswa&dosiswa=input">
	<div>
		<div style="float:left;">
			<table class="detail-siswa" >
					<tr><td>No Induk Siswa</td><td><input type="text" name="txtnosiswa" size=25 maxlength=25></td></tr>
					<tr><td>Nama Siswa</td><td><input type="text" name="txtnama" size=25 maxlength=25></td></tr>
					<tr>
					  <td><div class="tabtxt">Jenis Kelamin</div></td>
					  <td><select name="jk" id="jk">
						<option value="L">L</option>
						<option value="P">P</option>
					  </select>
						&nbsp;
					  <label for="jk"></label></td>
					</tr>
					<tr>
					  <td>Tempat/Tanggal Lahir</td>
					  <td><label for="tmp_lahir"></label>
						<input type="text" name="tmp_lahir" id="tmp_lahir" />
						/
						<input name="tgl" style="width:80px" type="textfield" id="tgl" class="tfield" readonly="readonly" />
						<a href="JavaScript:;" onclick="return showCalendar('tgl', 'dd-mm-y');"><img border="0" src="../Image/ico_calendar.gif" align="top" /></a></td>
					</tr>
					<tr><td>Kelas</td><td><input type="text" name="txtkls" size=25 maxlength=25></td></tr>
				<tr></tr>
				<tr>
				<td></td>
				<td>
				<input type="submit" name="save" value="SIMPAN">
				<input type="reset" name="cancel" value="BATAL" onClick=self.history.back()>
				</td>
				</tr>
				<br>
				<br>
				
			</table>
			</form>
		</div>
		<div style="clear:both;"></div>
	</div>
<br>
<br>
<br class="clear" />
			<input class="button" type="button" value="Kembali" onClick=location.href="admin.php">
	
    
	</aside><!-- end of sidebar -->
	
	
	</body>
</html>
<?php
?>	

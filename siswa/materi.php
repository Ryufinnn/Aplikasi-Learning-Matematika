<?php
	include "Library/Koneksi.php";
	error_reporting(0);
	session_start();
	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./math_icon.ico" >
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="Style/style.css">
	<title> Math Zone </title>
	<div class="container">
	<div class="jumbotron">
		<h1>Mathematic Mobile Learning</h1>
		<p>Zona Belajar Matematika</p>
	</div>
	<nav>
		<ul class="menu">
			<li><a href="siswa.php">Home</a></li>
			<li><a href="materi.php">Materi</a></li>
			<li><a href="tugas.php">Tugas</a></li>
            <li><a href="upload.php">Upload Tugas</a></li>
            <li><a href="nilai.php">Nilai</a></li>
			<li><a href="download.php">Download</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
</div>
<!--Menu Kanan-->
<div id="menu-kanan">

</div>
<div id="content_menu">

<object id="FlashID" classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="280" height="100">
  <param name="movie" value="jambak.swf" />
  <param name="quality" value="high" />
  <param name="wmode" value="opaque" />
  <param name="swfversion" value="6.0.65.0" />
  <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don’t want users to see the prompt. -->
  <param name="expressinstall" value="Scripts/expressInstall.swf" />
  <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
  <!--[if !IE]>-->
  <object type="application/x-shockwave-flash" data="jambak.swf" width="190" height="90">
    <!--<![endif]-->
    <param name="quality" value="high" />
    <param name="wmode" value="opaque" />
    <param name="swfversion" value="6.0.65.0" />
    <param name="expressinstall" value="Scripts/expressInstall.swf" />
    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
    <div>
      <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
      <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
    </div>
      <!--[if !IE]>-->
    </object>
    <!--<![endif]-->
  </object>
</div> 
</head>


<body>
	<br>
	<div class="container">
	<h2>Category</h2>
	<p> Lihat berdasarkan kategori materi.</p>
		<div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Kategori
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		<?php
		$sqlcat = mysql_query("SELECT * FROM category");
		while($querycat = mysql_fetch_array($sqlcat)){ ?>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="detail_materi.php?page=artikel&id=<?php echo $querycat['id']; ?>"><?php echo $querycat['category']; ?></a></li>
		<?php } ?>
        </ul>
		</div>
	</div>
	<br><br>
	<div class="container">
			<?php 
			$sql = mysql_query("SELECT * FROM materi ORDER BY ID_materi DESC");
			while ($r=mysql_fetch_array($sql)){
			$konten = substr($r['Isi'],0,400);
			?>
			<a href="detail_materi.php?page=isi&id=<?php echo $r['ID_materi']; ?>">
			<h3><?php echo $r['Judul']; ?></h3>
			</a>
			<p><?php echo $konten; ?></p>
			<a href="detail_materi.php?page=isi&id=<?php echo $r['ID_materi']; ?>">Read More</a>
			<?php } ?>
	</div>
	<div class="container">
	<div class="row">
	</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="panel-footer">
<p align="center">Copyright &copy; <a href="#">Eve Adara</a>, <?php echo date('Y'); ?>.</p>
</div>
</body>
</html>
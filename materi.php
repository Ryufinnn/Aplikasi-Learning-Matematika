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
	<link rel="shortcut icon" href="./favicon.ico" >
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="Style/style.css">
	<title> Belajar Kimia </title>
	<div class="container">
	<div class="jumbotron">
		<h1>Chemist Learn</h1>
		<p>Tempatnya Belajar Kimia</p>
	</div>
	<nav>
		<ul class="menu">
			<li><a href="index.html">Home</a></li>
			<li><a href="materi.php">Materi</a></li>
			<li><a href="latihan.php">Latihan</a></li>
			<li><a href="download.php">Download</a></li>
		</ul>
	</nav>
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
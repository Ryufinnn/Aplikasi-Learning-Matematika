 <?php
include "../Library/Koneksi.php";
include "../Library/tanggal.php";
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
	<script src="./js/jquery-2.0.2.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
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
<br><br>
<div class="row">
  <div class="col-md-4">
    <h2>About</h2>
    <p>Website ini berisi konten-konten untuk belajar matematika.</p>
    <p>Memudahkan untuk belajar matematika dengan materi belajar yang lebih lengkap untuk semua pokok bahasan.</p>
	<p>Fitur latihan untuk melatih pemahaman dalam bidang ilmu matematika.</p>
  </div>
  <div class="col-md-4">
    
  </div>
  <div class="col-md-4">
    <h2>Contact</h2>
	<p align="center"><img src="Image/foto.jpg"></p>
	<p align="center">Fandi Septian</p>
    <p align="center">Contact admin fandi.septian@gmail.com</p>
	<p align="center">State Indonesia, west sumatra, padang.</p>
  </div>
</div>
</div>
<br>
<br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="panel-footer">
<p align="center">Copyright &copy; <a href="#">Eve Adara</a>, <?php echo date('Y'); ?>.</p>
</div>
</body>
</html>
<?php error_reporting(0); ?>
 <!DOCTYPE html/>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="shortcut icon" href="./math_icon.ico" />
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="Style/style.css"/>
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
</head>
<body>
<div class="container">
    <h2>DAFTAR NILAI</h2>
	<table class="table table-striped">
      <thead>
        <tr>
          <th align="center">Judul Tugas</th>
		  <th align="center">View</th>
        </tr>
      </thead>
      <tbody>
        <?php
				include "Library/Koneksi.php";
				$sql = $mysqli->query("SELECT * FROM tugas ORDER BY ID_soal DESC");
				if($sql->num_rows > 0){
					while($data = $sql->fetch_assoc()){
					$kode= $data['ID_soal'];
					?>
						<tr>
						<td><?php echo $data['Nama_file'];?></td>
						<td><a href="detail_nilai.php?kode=<?php echo $kode;?>"><img src='Image/btn_view.png'/></a></td>
					<?php
                    }
				}else{
					echo '
					<tr bgcolor="#fff">
						<td align="center" colspan="4" align="center">Tidak ada data!</td>
					</tr>
					';
				}
				?>
      </tbody>
    </table>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="panel-footer">
<p align="center">Copyright &copy; <a href="#">Eve Adara</a>, <?php echo date('Y'); ?>.</p>
</div>
</body>
</html>
	<?php error_reporting(0); ?>	
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
</head>

<body>
<div class="container">
			<?php
			include "Library/konversi.php";
			include "Library/Koneksi.php";
			
			if($_POST['submit']){
				$allowed_ext	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= strtolower(end(explode('.', $file_name)));
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$nama			= $_POST['nama'];
				$tgl			= date("Y-m-d");
				
				if(in_array($file_ext, $allowed_ext) === true){
					if($file_size < 1044070){
						$lokasisimpan = '../jawaban/'.$nama.'.'.$file_ext;						
						move_uploaded_file($file_tmp, $lokasisimpan);
						$in=$mysqli->query("INSERT INTO download_tugas(Nama_file,Tanggal,Type_file,Ukuran_file,Nama_folder) VALUES('$nama', '$tgl', '$file_ext', '$file_size', '$lokasisimpan')");
						if($in){
							echo '<div class="ok">SUCCESS: Tugas berhasil di Upload!</div>';
						}else{
							echo '<div class="error">ERROR: Gagal upload tugas!</div>';
						}
					}else{
						echo '<div class="error">ERROR: Besar ukuran tugas (file size) maksimal 1 Mb!</div>';
					}
				}else{
					echo '<div class="error">ERROR: Ekstensi tugas tidak di izinkan!</div>';
				}
			}
			?>
            <article class="module width_full">
			<header><h3>Upload Tugas</h3></header>
	<form enctype="multipart/form-data" method="POST" >
	<div class="module_content">
		<fieldset>
			<label>Nama File</label>
			<input type="text" name="nama" size="100" required>
		</fieldset>
		<fieldset>
			<label>Pilih File</label>
			<input type="file" name="file" required> 
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
</div>
</body>
</html>

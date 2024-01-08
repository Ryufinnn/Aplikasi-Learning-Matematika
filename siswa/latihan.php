<?php
include "./Library/Koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="./favicon.ico" >
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
			<li><a href="latihan.php">Tugas</a></li>
            <li><a href="upload.php">Upload Tugas</a></li>
            <li><a href="nilai.php">Nilai</a></li>
			<li><a href="download.php">Download</a></li>
			<li><a href="../logout.php">Logout</a></li>
		</ul>
	</nav>
</div>
</head>

<script type="text/javascript">
var counter = 300;
function countDown()
{
if(counter>=0)
{
document.getElementById("timer").innerHTML = counter;
}
else
{
selesai();
return;
}
counter -= 1;

var counter2 = setTimeout("countDown()",1000);
return;
}
function selesai(timeoutPeriod) {
	document.getElementById("soal").submit();
}
</script>

<body onLoad="countDown();">
	<br>
<div class="container">
	<h2>Category</h2>
	<p> Lihat berdasarkan kategori soal.</p>
		<div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Kategori
        <span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		<?php
		$sqlcat = mysql_query("SELECT * FROM kategori_soal");
		while($querycat = mysql_fetch_array($sqlcat)){ ?>
		<li role="presentation"><a role="menuitem" tabindex="-1" href="latihan.php?page=latihan&id=<?php echo $querycat['ID_kategori']; ?>">
		<?php echo $querycat['Nama_kategori']; ?></a></li>
		<?php } ?>
        </ul>
		</div>
	<br>

	<?php 
	$id = $_GET['id'];
	$page = $_GET['page'];
	?>
	<?php
	$jml = 10;
	if($page == 'latihan')
	{
		if($_POST['user']=="jawab")
		{
			for($i=1; $i<=$jml; $i++)
			{
				$ns = $_POST["s_".$i.""];
				$jb = $_POST["j_".$i.""];
				$jwb = mysql_query("select * from latihan where ID_soal='".$ns."' and JBenar='".$jb."'");
				if(mysql_num_rows($jwb)==0)
				{
					$nilai[$i] = 0;
					if($jb)
						echo 'Jawaban Soal No. '.$i.' - '.$jb.' : <font color="red"><b>Salah</b></font><br>';
					else
						echo 'Tidak menjawab soal nomor '.$i.'<br>';
						echo '<br>';
				}
				else
				{
					$nilai[$i] = 1;
					if($jb)
						echo 'Jawaban Soal No. '.$i.' - '.$jb.' : <font color="#7CFC00"><b>Benar</b></font><br>';
						echo '<br>';
				}
				
			}
			// Rekap nilai
			$nbenar = array_sum($nilai);
			$nsalah = $jml-$nbenar;
			$ntotal = number_format($nbenar/$jml*100,1);
			if($nbenar>0)
			{
				echo '<div style="background-color:#F5DEB3; border-radius:15px; color:black; margin:10px; padding:10px;">';
				echo '<br>Skor Anda<br>';
				echo '- Jawaban benar : '.$nbenar.' soal<br>';
				echo '- Jawaban salah : '.$nsalah.' soal<br>';
					if($ntotal>=90)
						$k = '<font color="#008000">Anda Jenius</font>';
					elseif($ntotal>=80 && $ntotal<90)
						$k = '<font color="#008000">Anda Pintar</font>';
					elseif($ntotal>=70 && $ntotal<80)
						$k = '<font color="#7CFC00">Sedang</font>';
					elseif($ntotal>=60 && $ntotal<70)
						$k = '<font color="#0000FF">Ayo belajar lebih giat lagi! :)</font>';
					else
						$k = '<font color="#0000FF">Anda harus berusaha dengan lebih keras dan tekun. Ayo! lebih semangat lagi belajar. sering latihan juga ya :)</font>';
				// hasil nilai

				echo '- Nilai Total : '.$ntotal.' dari 100. <h3 align="center"><b>'.$k.'</b></h3><br>';
				echo '</div>';
				echo '<br>';
				echo '<br>';
			}

		}
		else
		{
			$sqlkategori = mysql_fetch_array(mysql_query("SELECT  Nama_kategori FROM kategori_soal WHERE ID_kategori='$_GET[id]'"));
			echo "<h3 color='#000'><u>Kategori $sqlkategori[Nama_kategori]</u></h3>"; 
			echo "<br>";
			$cek=mysql_num_rows(mysql_query("SELECT * FROM latihan where ID_kategori='$_GET[id]'"));
			if($cek>0)
			{
				echo '<form id="soal" form method="POST" action="">
				<input type="hidden" name="user" value="jawab">';
				echo '<h4 align="center">Soal akan selesai dalam <span style="color:#DC143C" id="timer"></span> detik.</h4 >';
				echo '<ol>';
				$sqllatihan = mysql_query("SELECT * FROM latihan where ID_kategori='$_GET[id]' ORDER BY RAND() LIMIT $jml ");
				$no = 1;
				while($querylatihan=mysql_fetch_array($sqllatihan))
				{
					echo '<div style="background-color:#FFC0CB; border-radius:15px; color:black; margin:10px; padding:10px;">';
					echo '<input type="hidden" name="s_'.$no.'" value="'.$querylatihan[ID_soal].'">';
					echo '<li>'.$querylatihan[Soal].'<br>';
					// pilihan 
					echo '<br><input type="radio" name="j_'.$no.'" value="'.$querylatihan[J1].'">'. $querylatihan[J1].' </br>';
					echo '<br><input type="radio" name="j_'.$no.'" value="'.$querylatihan[J2].'">'. $querylatihan[J2].' </br>';
					echo '<br><input type="radio" name="j_'.$no.'" value="'.$querylatihan[J3].'">'. $querylatihan[J3].' </br>';
					echo '<br><input type="radio" name="j_'.$no.'" value="'.$querylatihan[J4].'">'. $querylatihan[J4].' </br>';
					echo '<br><input type="radio" name="j_'.$no.'" value="'.$querylatihan[J5].'">'. $querylatihan[J5].' </br>';
					echo '</li>';
					$no++;
					echo '</div>';
				}
				echo '</ol>';
				echo '<input class="btn btn-info btn-lg" type="submit" name="submit" value="Jawab Soal" />';
				echo"</form>";
			}else{
			echo"Soal Tidak Ada";
			}
		}
	}
	?>
<br>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<div class="panel-footer">
<p align="center">Copyright &copy; <a href="#">Eve Adara</a>, <?php echo date('Y'); ?>.</p>
</div>
</body>
</html>
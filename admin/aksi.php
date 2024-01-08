<?php
session_start();
error_reporting(0);
include "../Library/Koneksi.php";
//include "../Library/konversi.php";

$act=$_GET['act'];
$action=$_GET['action'];
$addquestion=$_GET['addquestion'];
$do=$_GET['do'];
$doadmin=$_GET['doadmin'];
$docatsoal=$_GET['docatsoal'];
$dodownload=$_GET['dodownload'];
$dosiswa=$_GET['dosiswa'];
$domateri=$_GET['domateri'];
$doquestion=$_GET['doquestion'];
$donilai=$_GET['donilai'];


//----------------------------------Hapus--------------------------------------//

// Menghapus data materi
if (isset($act) AND $do=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE ID_materi ='$_GET[idmateri]'");
  header('location:admin.php?act=materi');
}

// Menghapus data kategori materi
elseif (isset($act) AND $domateri=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE id ='$_GET[id]'");
  header('location:admin.php?act=category');
}

// Menghapus data kategori soal
elseif (isset($act) AND $docatsoal=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE ID_kategori ='$_GET[id]'");
  header('location:admin.php?act=kategori_soal');
}

// Menghapus data soal
elseif (isset($act) AND $doquestion=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE ID_soal ='$_GET[id]'");
  header('location:admin.php?act=latihan');
}

// Menghapus data siswa
if (isset($act) AND $dosiswa=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE No_induk ='$_GET[id]'");
  header('location:admin.php?act=siswa');
}

// Menghapus data admin
elseif (isset($act) AND $doadmin=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE No_ID ='$_GET[id]'");
  header('location:admin.php?act=admin');
}

// Menghapus data file upload
elseif (isset($act) AND $dodownload=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE ID ='$_GET[id]'");
  header('location:admin.php?act=edit_file');
}

// Menghapus data nilai
elseif (isset($act) AND $donilai=='hapus'){
  mysql_query("DELETE FROM ".$act." WHERE id_nilai ='$_GET[id]'");
  header('location:admin.php?act=nilai');
}

//----------------------------------add&edit------------------------------------------//

//Add Category
elseif ($act=='category' AND $do=='input'){
	$insert = mysql_query("INSERT INTO category (id,category) VALUES ('','$_POST[nama_kategori]')");
	if($insert == FALSE){
		echo "<p>Kategori gagal ditambahkan, alasannya:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
//Category Update
elseif ($act=='category' AND $do=='update'){
	$update = mysql_query("UPDATE category SET category = '$_POST[nama_kategori]' WHERE id = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>Update gagal dilakukan karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
	
//Add Artikel
elseif ($act=='materi' AND $do=='input'){
$tgl_sekarang = date("Ymd");
	$insert = mysql_query("INSERT INTO materi (Judul,
												Isi,
												id_kategori,
												Tanggal)
										VALUES ('$_POST[nama_artikel]',
												'$_POST[isi]',
												'$_POST[cat]',
												'$tgl_sekarang')");
	if ($insert == FALSE){
		echo "<p>Insert Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
}
//edit artikel
elseif ($act=='materi' AND $do=='update'){
$tgl_sekarang = date("Ymd");
	$update = mysql_query("UPDATE materi SET 	Judul = '$_POST[nama_artikel]',
												Isi = '$_POST[isi]',
												id_kategori = '$_POST[cat]',
												Tanggal = '$tgl_sekarang'
										WHERE ID_materi ='$_POST[idmateri]'");
	if ($update==FALSE){
		echo "<p>Update Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
	
//Add Category soal
elseif ($act=='kategori_soal' AND $docatsoal=='input'){
	$insert = mysql_query("INSERT INTO kategori_soal (ID_kategori,Nama_kategori) VALUES ('','$_POST[nama_kategori]')");
	if($insert == FALSE){
		echo "<p>Kategori gagal ditambahkan, alasannya:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
//Category soal Update 
elseif ($act=='kategori_soal' AND $docatsoal=='update'){
	$update = mysql_query("UPDATE kategori_soal SET Nama_kategori = '$_POST[nama_kategori]' WHERE ID_kategori = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>Update gagal dilakukan karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}

//Add question
elseif ($act=='latihan' AND $addquestion=='input'){
	$insert = mysql_query("INSERT INTO tugas (Soal,
												J1,
												J2,
												J3,
												J4,
												J5,
												Benar,
												ID_kategori)
										VALUES ('$_POST[txtsoal]',
												'$_POST[txtjawaban1]',
												'$_POST[txtjawaban2]',
												'$_POST[txtjawaban3]',
												'$_POST[txtjawaban4]',
												'$_POST[txtjawaban5]',
												'$_POST[txtjawabanbenar]',
												'$_POST[cat]')");
	if ($insert == FALSE){
		echo "<p>Insert Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
}

//edit question
elseif ($act=='latihan' AND $doquestion=='update'){
	$update = mysql_query("UPDATE tugas SET 	Soal 	= '$_POST[txtsoal]',
												J1 		= '$_POST[txtjawaban1]',
												J2 		= '$_POST[txtjawaban2]',
												J3		= '$_POST[txtjawaban3]',
												J4 		= '$_POST[txtjawaban4]',
												J5		= '$_POST[txtjawaban5]',
												Benar 	= '$_POST[txtjawabanbenar]',
												ID_kategori = '$_POST[cat]',WHERE ID_soal ='$_POST[id]'");
	if ($update==FALSE){
		echo "<p>Update Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
}
	
//Add Siswa
elseif ($act=='siswa' AND $dosiswa=='input'){
	$insert = mysql_query("INSERT INTO siswa (No_induk,
												Nama,
												Jekel,
												Tempat,
												Tgl,
												Kelas)
										VALUES ('$_POST[txtnosiswa]',
												'$_POST[txtnama]',
												'$_POST[jk]',
												'$_POST[tmp_lahir]',
												'$_POST[tgl]',
												'$_POST[txtkls]')");
	if ($insert == FALSE){
		echo "<p>Insert Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
	
//Update Siswa
elseif ($act=='siswa' AND $dosiswa=='update'){
	$update = mysql_query("UPDATE siswa SET 	No_induk ='$_POST[id]',
												Nama ='$_POST[nama]',
												Jekel ='$_POST[jekel]',
												Tempat ='$_POST[tmp]',
												Tgl ='$_POST[tgl]',
												Kelas ='$_POST[kelas]' WHERE No_induk ='$_POST[id]'");
	if ($update==FALSE){
		echo "<p>Update Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	$insert = mysql_query("INSERT INTO siswa (No_induk,
												Nama,
												Jekel,
												Tempat,
												Tgl,
												Kelas)
										VALUES ('$_POST[txtnosiswa]',
												'$_POST[txtnama]',
												'$_POST[jk]',
												'$_POST[tmp_lahir]',
												'$_POST[tgl]',
												'$_POST[txtkls]')");
	if ($insert == FALSE){
		echo "<p>Insert Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}

//Add admin
elseif ($act=='admin' AND $doadmin=='input'){
	$insert = mysql_query("INSERT INTO user (No_ID,Username,Password,Level) VALUES ('','$_POST[username]','$_POST[password]','$_POST[rlevel]')");
	if($insert == FALSE){
		echo "<p>Data Admin gagal ditambahkan, alasannya:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}
	
//Admin Update
elseif ($act=='admin' AND $doadmin=='update'){
	$update = mysql_query("UPDATE user SET Username = '$_POST[username]', Password= '$_POST[password]', Level= '$_POST[rlevel]' WHERE No_ID = '$_POST[id]'");
	if($update ==FALSE){
		echo "<p>Update gagal dilakukan karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}

//Add Nilai
elseif ($act=='nilai' AND $donilai=='input'){
	$insert = mysql_query("INSERT INTO nilai (id_nilai,
												ID_soal,
												No_induk,
												nilai)
										VALUES ('',
												'$_POST[judul]',
												'$_POST[nama]',
												'$_POST[txtnilai]')");
	if ($insert == FALSE){
		echo "<p>Insert Gagal karena:".(mysql_error())."</p>";
		}
	header('location:admin.php?act='.$act);
	}	
?>


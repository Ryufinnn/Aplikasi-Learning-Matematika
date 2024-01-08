<?php
include "./Library/Koneksi.php";

session_start();

// terima data dari form login
$username = $_POST['Username'];
$password = $_POST['Password'];

// untuk mencegah sql injection
// kita gunakan mysql_real_escape_string
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

// cek data yang dikirim, apakah kosong atau tidak
if (empty($username) && empty($password)) {
	// kalau username dan password kosong
	header('location:index.html?error=1');
	break;
} else if (empty($username)) {
	// kalau username saja yang kosong
	header('location:index.html?error=2');
	break;
} else if (empty($password)) {
	// kalau password saja yang kosong
	header('location:index.html?error=3');
	break;
}

$query = mysql_query("select * from user where Username='$username' and Password='$password'");

$data = mysql_fetch_array($query);

if (mysql_num_rows($query) == 1) {
	// kalau username dan password sudah terdaftar di data/base
	// buat session dengan nama username dengan isi nama user yang login
	
		$_SESSION['Username'] = $data['Username'];
		$_SESSION['Level'] = $data['Level'];
		$_SESSION['id'] = $data['No_ID'];
		
		if($data['Level']=="admin"){
		header("location:./admin/admin.php");
		
		}else if($data['Level']=="siswa"){
		header("location:./siswa/siswa.php");
		
		}else{
		header("location:login.php");
		
	}
	}
	
?>
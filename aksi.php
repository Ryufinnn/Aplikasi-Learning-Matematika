<?php
include "./Library/Koneksi.php";

$username = $_POST['username'];
$passbaru = $_POST['passbaru'];

$query = mysql_query("update user set Password ='$passbaru' where Username='$username'");
header('location:login.php');
?>
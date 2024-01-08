<?php
session_start();
//hapus session yang sudah dibuat
session_destroy();

//redirect ke halaman login
//header('location:index.php');

echo "<script>window.alert('Kamu telah berhasil keluar');
        window.location=('index.html')</script>";
?>
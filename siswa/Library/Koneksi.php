<?php error_reporting(0);?>
<?php
$hostname	= "localhost";
$user		= "root";
$password	= "";
$db_name	= "mtk";

//koneksi ke server database
$conn	= mysql_connect("$hostname","$user","$password");

//Memilih Database pada Server Database
$nmdb	= mysql_select_db("$db_name");

//fungsi untuk mengkonversi size file
//function formatBytes($bytes, $precision = 2) { 
  //  $units = array('B', 'KB', 'MB', 'GB', 'TB'); 

    //$bytes = max($bytes, 0); 
    //$pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    //$pow = min($pow, count($units) - 1); 

    //$bytes /= pow(1024, $pow); 

    //return round($bytes, $precision) . ' ' . $units[$pow]; 
//}

?>
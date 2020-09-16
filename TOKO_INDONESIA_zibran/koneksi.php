<?php 
$host = "localhost";
$user = "root";
$pw = "";
$db = "tokoindonesia";

$koneksi = mysqli_connect($host, $user, $pw) or die("gagal");
mysqli_select_db($koneksi, $db) or die("gagal terkoneksi");
 ?>
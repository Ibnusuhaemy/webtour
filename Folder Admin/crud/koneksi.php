<?php
//koneksi database
$host="localhost";
$user="root";
$pass="";
$db="db_webtour";

$koneksi_db = mysqli_connect($host,$user,$pass,$db);

if($koneksi_db){
//   echo "Koneksi berhasil";
}else{
  echo "Koneksi gagal";
}
?>
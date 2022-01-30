<?php

$server="localhost";
$user="root";
$password="";
$database="supermarket";


$koneksi=mysqli_connect($server,$user,$password,$database);

if ($koneksi) {
    echo "Terhubung!";
}else{
    echo "Koneksi Gagal";
}
  
?>
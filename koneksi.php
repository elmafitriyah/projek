<?php
$databaseHost = "localhost";
$databaseName = "project";
$databaseUsername = "root";
$databasePassword = "";

$mysqli = mysqli_connect($databaseHost,$databaseUsername,$databasePassword,$databaseName);

if ($mysqli) { 
    echo "Koneksi Berhasil"; 
   } else { 
    echo "Gagal Koneksi Database"; 
   } 
?>

<?php

try {
$host = "localhost";
$dbname = "dbovertime";
$dbuser = "fikri2";
$dbpass = "fikri34";
$dbport = '5555';


  $dbh = new PDO("pgsql:host=$host;dbname=$dbname;port=$dbport",$dbuser,$dbpass);
  $dbh->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

} catch (PDOException $e) {
  // tampilkan pesan kesalahan jika koneksi gagal
  print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
  die();
}

 ?>

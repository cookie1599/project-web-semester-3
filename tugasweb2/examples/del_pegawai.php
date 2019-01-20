<?php
require_once "class_pegawai.php";
$obj_seminar = new pegawai();
// tangkap request id
$_id = $_GET['id'];
// hapus
$obj_seminar->hapus($_id);
// redirect page ke daftar_seminar.php
header('Location:checkpegawai.php');
?>

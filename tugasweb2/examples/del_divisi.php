<?php
require_once "class_divisi.php";
$obj_seminar = new divisi();
// tangkap request id
$_id = $_GET['id'];
// hapus
$obj_seminar->hapus($_id);
// redirect page ke daftar_seminar.php
header('Location:checkdivisi.php');
?>

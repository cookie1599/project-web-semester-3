<?php
require_once "class_jatahcuti.php";
$obj_seminar = new cuti();
// tangkap request id
$_id = $_GET['id'];
// hapus
$obj_seminar->hapus($_id);
// redirect page ke daftar_seminar.php
header('Location:checkcuti.php');
?>

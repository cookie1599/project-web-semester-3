<?php
require_once "class_overtime.php";
$obj_seminar = new overtime();
// tangkap request id
$_id = $_GET['id'];
// hapus
$obj_seminar->hapus($_id);
// redirect page ke daftar_seminar.php
header('Location:checkdata.php');
?>

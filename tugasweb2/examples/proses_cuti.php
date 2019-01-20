<?php
    include_once 'class_jatahcuti.php';
    $obj_seminar = new cuti();

    $id = $_POST['id'];
    $tahun = $_POST['tahun'];
    $jumlah = $_POST['jumlah'];
    $nip = $_POST['nip'];


    $data = [];
    $data[] = $tahun;// ? ke 2
    $data[] = $jumlah;// ? ke 3
    $data[] =  $nip;// ? ke 4



    $_proses = $_POST['proses3'];

    if($_proses == "Simpan"){
        // $data[] = "0";// ? ke 8
        $obj_seminar->simpan($data);
    }else if($_proses == "Update"){
        // $data[] = $_POST['idedit']; // ke 9
        $data[] = $id;
        $obj_seminar->update($data);

    }
header("Location:checkcuti.php");
?>

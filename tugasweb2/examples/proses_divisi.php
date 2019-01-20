<?php
    include_once 'class_divisi.php';
    $obj_seminar = new divisi();

    $id = $_POST['id'];
    $kode = $_POST['kode'];
    $nama = $_POST['nama'];
    $manager = $_POST['manager'];


    $data = [];
    $data[] = $kode;// ? ke 2
    $data[] = $nama;// ? ke 3
    $data[] =  $manager;// ? ke 4



    $_proses = $_POST['proses3'];

    if($_proses == "Simpan"){
        // $data[] = "0";// ? ke 8
        $obj_seminar->simpan($data);
    }else if($_proses == "Update"){
        // $data[] = $_POST['idedit']; // ke 9
        $data[] = $id;
        $obj_seminar->update($data);

    }
header("Location:checkdivisi.php");
?>

<?php
    include_once 'class_overtime.php';
    $obj_seminar = new overtime();

    $tgl_mulai = $_POST['tgl1'];
    $tgl_akhir = $_POST['tgl2'];
    $jmulai = $_POST['jam1'];
    $jakhir = $_POST['jam2'];
    $keterangan = $_POST['keterangan'];
    $nip = $_POST['nip'];

    $data = [];
    $data[] = $tgl_mulai;// ? ke 2
    $data[] = $tgl_akhir;// ? ke 3
    $data[] =  $jmulai;// ? ke 4
    $data[] = $jakhir;// ? ke 5
    $data[] = $keterangan;// ? ke 6
    $data[] = $nip;// ? ke 7


    $_proses = $_POST['proses3'];

    if($_proses == "Simpan"){
        $data[] = "0";// ? ke 8
        $obj_seminar->simpan($data);
    }else if($_proses == "Update"){
        // $data[] = $_POST['idedit']; // ke 9
        $obj_seminar->update($data);

    }
header("Location:checkdata.php?nip=$nip");
?>

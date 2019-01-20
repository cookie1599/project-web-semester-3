<?php
    include_once 'class_pegawai.php';
    $obj_seminar = new pegawai();
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $tmp_lahir = $_POST['tmp_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $telpon = $_POST['telpon'];
    $alamat = $_POST['alamat'];
    $divisi_id = $_POST['divisi_id'];

    $_proses = $_POST['proses3'];

    if($_proses == "Simpan"){
      $data = [];
      $data[] = $nip;// ? ke 7
      $data[] = $nama;// ? ke 2
      $data[] = $gender;// ? ke 3
      $data[] =  $tmp_lahir;// ? ke 4
      $data[] = $tgl_lahir;// ? ke 5
      $data[] = $telpon;// ? ke 6
      $data[] = $alamat;// ? ke 5
      $data[] = $divisi_id;// ? ke 6
      $obj_seminar->simpan($data);
    }else if($_proses == "Update"){
        // $data[] = $_POST['idedit']; // ke 9
        $data = [];
        $data[] = $nama;// ? ke 2
        $data[] = $gender;// ? ke 3
        $data[] =  $tmp_lahir;// ? ke 4
        $data[] = $tgl_lahir;// ? ke 5
        $data[] = $telpon;// ? ke 6
        $data[] = $alamat;// ? ke 5
        $data[] = $divisi_id;// ? ke 6
        $data[] = $nip;
        $obj_seminar->update($data);

    }
header("Location:checkpegawai.php");
?>

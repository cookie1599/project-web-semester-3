<?php
include_once 'class_DAO.php';

class pegawai {
  private $dbh;


  public function __construct() {
    $this->dbh=DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from pegawai";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
  //
  public function simpan($data) {
    $sql = "insert into pegawai
            values(?,?,?,?,?,?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function update($data) {
    $sql = "update pegawai set nama=?,gender=?,tmp_lahir=?,tgl_lahir=?,telpon=?,alamat=?,divisi_id=?
             where nip=?";
            // ,status=?,tema_id=? where id=?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function hapus($id) {
    $sql = "delete from pegawai where nip = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
  }

  public function findByID($id){
    $sql = "select * from pegawai where nip = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute(array($id));
    $row = $st->fetch();
    return $row;
  }


}


// select b.nip, a.tanggal_mulai, a.tanggal_akhir, a.jam_mulai,
// a.jam_akhir, a.keterangan,a.status from overtime a inner join divisi b on b.nip=a.pegawai_nip
// where pegawai_nip=?;

 ?>

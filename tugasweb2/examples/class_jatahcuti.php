<?php
include_once 'class_DAO.php';

class cuti {
  private $dbh;


  public function __construct() {
    $this->dbh=DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from jatah_cuti";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
  //
  public function simpan($data) {
    $sql = "insert into jatah_cuti (tahun,jumlah,nip) values (?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function update($data) {
    $sql = "update jatah_cuti set tahun=?,jumlah=?,nip=?
             where id=?";
            // ,status=?,tema_id=? where id=?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function hapus($id) {
    $sql = "delete from jatah_cuti where id = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
  }

  public function findByID($id){
    $sql = "select * from jatah_cuti where id = ?";
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

<?php
include_once 'class_DAO.php';

class overtime {
  private $dbh;
  private $tblName = "overtime";

  public function __construct() {
    $this->dbh=DAO::getInstance();
  }

  public function getALL() {
    $sql= "select b.nip,b.nama,c.nama as divisi, c.manager, a.tanggal_mulai, a.tanggal_akhir, a.jam_mulai,
    a.jam_akhir, a.keterangan,a.status from overtime a inner join pegawai b on b.nip=a.pegawai_nip
    inner join divisi c on c.id= b.divisi_id";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
  //
  public function simpan($data) {
    $sql = "insert into overtime (tanggal_mulai,tanggal_akhir,jam_mulai,jam_akhir,keterangan,pegawai_nip,status)
            values(?,?,?,?,?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function update($data) {
    $sql = "update overtime set tanggal_mulai=?,tanggal_akhir=?,jam_mulai=?,jam_akhir=?,keterangan=?
             where pegawai_nip=?";
            // ,status=?,tema_id=? where id=?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function hapus($id) {
    $sql = "delete from overtime where pegawai_nip = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
  }

  public function findByID($id){
    $sql = "select * from overtime where pegawai_nip = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute(array($id));
    $row = $st->fetch();
    return $row;
  }

  public function findByID2($id){
    $sql = "select b.nip,b.nama,c.nama as divisi, c.manager, a.tanggal_mulai, a.tanggal_akhir, a.jam_mulai,
    a.jam_akhir, a.keterangan,a.status from overtime a inner join pegawai b on b.nip=a.pegawai_nip
    inner join divisi c on c.id= b.divisi_id
    where pegawai_nip=?";
    $st = $this->dbh->prepare($sql);
    $st->execute(array($id));
    $row = $st->fetch();
    return $row;
  }


  public function update2($data) {
  $sql = "update overtime set status=?
           where pegawai_nip=?";
          // ,status=?,tema_id=? where id=?";
  $st = $this->dbh->prepare($sql);
  $st->execute($data);
}
}


// select b.nip, a.tanggal_mulai, a.tanggal_akhir, a.jam_mulai,
// a.jam_akhir, a.keterangan,a.status from overtime a inner join divisi b on b.nip=a.pegawai_nip
// where pegawai_nip=?;

 ?>

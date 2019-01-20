<?php
include_once 'class_DAO.php';

class divisi {
  private $dbh;
  private $tblName = "overtime";

  public function __construct() {
    $this->dbh=DAO::getInstance();
  }

  public function getALL() {
    $sql= "select * from divisi";
    $rs = $this->dbh->query($sql);
    return $rs;
  }
  //
  public function simpan($data) {
    $sql = "insert into divisi (kode,nama,manager)
            values(?,?,?)";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function update($data) {
    $sql = "update divisi set kode=?,nama=?,manager=?
             where id=?";
            // ,status=?,tema_id=? where id=?";
    $st = $this->dbh->prepare($sql);
    $st->execute($data);
  }
  //
  public function hapus($id) {
    $sql = "delete from divisi where id = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute([$id]);
  }

  public function findByID($id){
    $sql = "select * from divisi where id = ?";
    $st = $this->dbh->prepare($sql);
    $st->execute(array($id));
    $row = $st->fetch();
    return $row;
  }




}


 ?>

<?php

class DAO {
  //member variabel
  protected static $dbh;
  private $tableName;
  private $koneksi;


  public function __construct() {
    //$this->tablename = $tbl;
    //$this->koneksi->$dbh;

    try{
        $host = 'localhost';
        $dbname = 'overtime';
        $dbuser = 'postgres';
        $dbpass = 'saoalo234';
        $dbport = '5432';

        self::$dbh = new PDO("pgsql:host=$host;dbname=$dbname;port=$dbport",$dbuser,$dbpass);
        self::$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }


  }

  public static function getInstance() {
    if(!self::$dbh) {
      new DAO();
    }
    return self::$dbh;

  }

  public function __destruct() {
    $dbh = NULL;
  }

}








 ?>

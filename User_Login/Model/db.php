<?php
class My_db{
  const DB_HOST = "localhost";
  const DB_USER = "root";
  const DB_PASS = "hkytuntun12";
  const DB_table = "studysample";
  private $connection;

  protected function open_db_conn(){
    $this->connection = new mysqli(self::DB_HOST,self::DB_USER,self::DB_PASS,self::DB_table) or die("Connect fail %s\n". $conn -> error);
  }

  protected function close_db_conn(){
    $this->connection ->close();
  }
}
?>

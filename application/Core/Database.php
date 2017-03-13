<?php
//nhan 2 kieu lenh chinh
//giao tiep voi db
class Database
{
  private $db;
  function __construct()
  {
    $this->db=new PDO("mysql:host=localhost;dbname=mvctut","root","");
  }
  function QueryResult($sql)
  {
    $query=$this->db->prepare($sql);
    $query->execute();
    return $query;
  }
  function ExeQuery($sql)
  {

  }
}
 ?>

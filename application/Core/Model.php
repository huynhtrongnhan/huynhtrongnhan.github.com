<?php
//cac kieu lenh
class Model
{
  private $db;
  function __construct()
  {
    $this->db=new Database();
  }
  function SelectAll()
  {
    $classname=get_class($this);
    $sql="SELECT * FROM $classname";
    $q=$this->db->QueryResult($sql);
    return $q->fetchAll(PDO::FETCH_CLASS);
    // var_dump($q);
  }
  function GetById($id=1)
  {
    $classname=get_class($this);
    $sql="SELECT * FROM $classname WHERE Id=$id";
    $q=$this->db->QueryResult($sql);
    return $q->fetchAll(PDO::FETCH_CLASS);
    // var_dump($q);
  }
  function Update($obj)
  {

  }
  function Delete($id)
  {

  }
}
 ?>

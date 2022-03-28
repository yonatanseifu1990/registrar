<?php
require_once 'DbConnection.php';
class Alltablevalue {
public $db = "registrar";
public $table ="collegpe";
public $data;

    function __construct($db)
    {
        $this->db = $db;
    }

    function Getallvalue($table){
    $this->table = $table;
    $data =  $this->db->mysqli_query("SELECT * FROM $this->table");
    if($data->num_rows > 0)
    {
    $row = $connect->fetch_assoc();
    return $this->$row;
    echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['name']} <br> ".
         "EMP SALARY : {$row['phone']} <br> ".
         "--------------------------------<br>";

        }
  else { return false;}
    }
}

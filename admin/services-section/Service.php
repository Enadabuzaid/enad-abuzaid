<?php 
require '../../config/Db.php';

class Service extends DbConnection
{
    public function selectData( $where = 1){
    // $array = array();
    $sql = "SELECT * FROM `services`"." WHERE " .$where;
    $result = $this->conn->query($sql) or die($this->conn->error);

    while($row = $result->fetch_assoc())  
    {  
      $array[] = $row;  
    }  
    return $array;  
  }
  
}

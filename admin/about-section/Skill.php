<?php 
require '../config/Db.php';

Class Skill extends DbConnection{
  public function selectData( $where = 1){
    // $array = array();
    $sql = "SELECT * FROM `skills`"." WHERE " .$where;
    $result = $this->conn->query($sql) or die($this->conn->error);

    while($row = $result->fetch_assoc())  
    {  
      $array[] = $row;  
    }  
    return $array;  
  }

  public function insertData(array $data){
    $sql = "INSERT INTO `skills` (`skill_id`,`skill_name`,`skill_progress`,`skill_icon`,`skill_status` ) 
    VALUES (NULL,'{$data['skill_name']}' , '{$data['skill_progress']}','{$data['skill_icon']}' , '{$data['skill_status']}')";

    if($this->conn->query($sql)){
      return true;
    } else {
      return "error ". $this->conn->error;
    }
  }
}
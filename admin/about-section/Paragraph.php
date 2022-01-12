<?php 

require '../config/Db.php';
// $database = new DbConnection;
// $connection = $database->conn;


Class Paragraph extends DbConnection{
  public function insertData(array $data){
    $sql = "INSERT INTO `about_section_paragraphs` (`paragraph_id`,`paragraph_body`,`paragraph_status` ) 
    VALUES (NULL,'{$data['paragraph_body']}' , '{$data['paragraph_status']}')";

    if($this->conn->query($sql)){
      return true;
    } else {
      return "error ". $this->conn->error;
    }
  }

  public function selectData( $where = 1){
    $array = array();
    $sql = "SELECT * FROM `about_section_paragraphs`"." WHERE " .$where;
    $result = $this->conn->query($sql) or die($this->conn->error);

    while($row = $result->fetch_assoc())  
    {  
      $array[] = $row;  
    }  
    return $array;  
  }
}
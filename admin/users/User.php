<?php 
require '../config/Db.php';
// $database = new DbConnection;
// $connection = $database->conn;


Class User extends DbConnection{
  public function insertData(array $user ,$conn){
    $sql = "INSERT INTO `users` (`user_id`,`user_name` , `user_email` , `user_password`, `user_type` , `user_phone`) 
    VALUES (NULL,'{$user['name']}' , '{$user['email']}' , '{$user['password']}', '{$user['type']}' ,'{$user['phone']}')";

    if($conn->query($sql)){
      return true;
    } else {
      return "error ". $conn->error;
    }
  }

  public function selectData( $where = 1){
    $array = array();
    $sql = "SELECT * FROM `users`"." WHERE " .$where;
    $result = $this->conn->query($sql) or die($this->conn->error);

    while($row = $result->fetch_assoc())  
    {  
      $array[] = $row;  
    }  
    return $array;  
  }
}
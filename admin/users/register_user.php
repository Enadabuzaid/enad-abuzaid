<?php 
  require '../../config/Db.php';
  require '../../config/Validation.php';
  require 'User.php'; 

	$database = new DbConnection;
  $user = new User;
  $valid = new Validation;

  $connection = $database->conn;

    
 
    // check first name 
    if(isset($_POST['first_name'])){
       $first_name = $_POST['first_name'];
       $valid->minCharacter($first_name , 3);
       $valid->maxCharacter($first_name , 12);
    } else{
      $valid->varEmpty($first_name);
    }

    //check last name
    if(isset($_POST['last_name'])){
      $last_name = $_POST['last_name'];
      $valid->minCharacter($last_name , 3);
      $valid->maxCharacter($last_name , 12);
   } else{
     $valid->varEmpty($last_name);
   }

  // check password 
  if(isset($_POST['password'])){
    $password=$_POST['password'];
  }else{
    $valid->varEmpty($password);
  }
      

  
  
   $name = $first_name." ".$last_name;
   $email = $_POST['email'];
   $password = md5($_POST['password']);
   $phone = $_POST['phone'];

  $info = [
    "name" => $name ,
    "email" => $email,
    "password" => $password,
    "type" => 1, // admin
    "phone" => $phone
  ];
  // print_r($info);
  if($user->insertData($info , $connection)){
    echo "data insert succssfully .. ";
  }
?>
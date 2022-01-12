<?php 
class Validation{
 
  public function varEmpty($var){
    if(empty($var)){
      echo "Faild input : {$var} can not be empty";
    }
    return TRUE;
  }

  public function minCharacter($var , $num_char){
    if(strlen($var) < $num_char){
      echo "Faild input : {$var} is too short must be greater : {$num_char}";
    }
    return TRUE;
  }

  public function maxCharacter($var , $num_char){
    if(strlen($var) > $num_char){
      echo "Faild input : {$var} is too larg must be less : {$num_char}";
    }
    return TRUE;
  }
}
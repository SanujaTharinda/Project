<?php

class Validator{


  public static function validateAuthentication($loginDatabase, $userName, $userPassword){

        $storedPassword = $loginDatabase->getItem("userdetails", "email", $userName, "password");

        if($storedPassword == $userPassword)
            return true;

        echo $storedPassword;

        return false;


  }














}















 ?>

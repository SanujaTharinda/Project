<?php
include 'User.php';



class EmployeeUser extends User{
    public function __construct($username,$password){
        parent::__construct($username, $password);
    }


    public function check(){
        echo "Checking";
    }



}


<?php


include  'EmployeeDatabase.php';

abstract class User{
    private $username;
    private $password;
    private $employeeDatabase;
    
    
    public function __construct($username,$password){
        echo "Creating user;";
        $this->username = $username;
        $this->password = $password;
        $this->employeeDatabase = EmployeeDatabase::defaultConstruct();

    }

    public function check(){
        echo "Checking";
    }

    public function viewMinorStaffDetails($location){
        $_SESSION['database'] = $this->employeeDatabase;
        header("location: $location");


    }
    
    
    
    
    
}




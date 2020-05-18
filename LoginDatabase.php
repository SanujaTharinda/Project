<?php

include 'Database.php';



class LoginDatabase extends Database{


    public function __construct($serverName, $userName, $databasePass, $dbName){
        echo "Inside Login";
        parent::__construct($serverName, $userName, $databasePass, $dbName);

    }

    public static function defaultConstruct(){
        return new self("localhost",'root','1234','login');

    }

}





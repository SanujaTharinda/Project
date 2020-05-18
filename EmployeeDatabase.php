<?php

include "Database.php";


class EmployeeDatabase extends Database{

    public function __construct($serverName, $userName, $databasePass, $dbName){
        parent::__construct($serverName, $userName, $databasePass, $dbName);

    }

    public static function defaultConstruct(){
        return new self("localhost",'root','1234','employeedatabase');

    }
    





}


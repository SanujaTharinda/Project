<?php

class Database{
    private $serverName;
    private $userName;
    private $databasePass;
    private $dbName;
    private $pdoConnection;


    public function __construct($serverName, $userName, $databasePass, $dbName){

        $this->serverName = $serverName;
        $this->userName = $userName;
        $this->databasePass = $databasePass;
        $this->dbName = $dbName;
        $dsn = 'mysql:host='.$this->serverName.';dbname='.$this->dbName.';';
        $this->pdoConnection = new PDO($dsn,$this->userName,$this->databasePass);
        $this->pdoConnection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);


    }


    public function getItem($tableName, $columnName,$keyItem, $targetColumnName){
      $sql =  "SELECT
                    $targetColumnName
               FROM
                    $tableName
               WHERE $columnName = '$keyItem'";
      $result = $this->pdoConnection->query($sql) or die($this->pdoConnection->error);
      $row = $result->fetch();
      return $row[$targetColumnName];

    }

    public function getTable($tableName){
        $sql = "SELECT * FROM $tableName ";
        $sth = $this->pdoConnection->prepare('SELECT id, full_name,nic,address,telephone,gender,firstday,registered_day,permenent_day,carrier,reg FROM employee');

        $sth->execute(array());

        return $sth->fetchAll();



    }

    private function query($sql){
        return $this->pdoConnection->query($sql) or die($this->pdoConnection->error);
    }

    public function editDatabase(){



    }

    public function removeDatabase(){



    }











}






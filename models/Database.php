<?php

class DB{    
    public $serverName = 'localhost';
    public $username = 'root';
    public $password = '';
    public $dbname = 'blog';
    public $connection;

    public function __construct() {
        $this->connection = new PDO("mysql:host=".$this->serverName.";dbname=".$this->dbname, 
                    $this->username, $this->password);
    }


    public function gA($sql){
        $stm = $this->connection->query($sql);
        $stm->execute();
        return $stm->fetchAll();
    }


    public function gF($sql){
        $stm = $this->connection->query($sql);
        return $stm->fetch();
    }
}

$DB = new DB();
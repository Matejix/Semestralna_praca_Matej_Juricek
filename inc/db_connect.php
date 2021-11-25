<?php
class Database
{
    private $connection = null;

    public function __construct(){
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "zoozu";
        $this->connection = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $this->connection -> error);
        $this->connection->set_charset("utf8");
        return true;
    }
    
    public function __destruct(){
        if(!is_null($this->connection)){
            $this->connection->close();
        }
    }

    public function getConnection(){
        return $this->connection;
    }
}

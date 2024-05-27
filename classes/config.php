<?php 

class Dbh {

    private $host = 'localhost';
    private $db = 'artDoors';
    private $user = 'root';
    private $pass = '';
    
    protected function connect(){
        $dsn = "mysql:host=".$this->host.";dbname=".$this->db;

        $pdo = new PDO($dsn, $this->user, $this->pass, [PDO::ATTR_ERRMODE, PDO::FETCH_ASSOC]);

        return $pdo;
        

    }
}
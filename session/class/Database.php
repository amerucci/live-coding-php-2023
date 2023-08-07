<?php

abstract class Database{
    private $host = 'localhost';
    private $username = 'root';
    private $password = 'root';
    private $dbname = 'live_session';
    protected $pdo;
 


    public function __construct()
    {
        try {
            $bdd = new PDO("mysql:host=$this->host;dbname=$this->dbname;charset=utf8", $this->username, $this->password);
            $this->pdo = $bdd ;
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }  
    }






 }

?>
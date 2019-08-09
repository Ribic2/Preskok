<?php
namespace Preskok;

class pdo_connect{
    public $host = "160.153.133.165";
    public $db = "preskok";
    public $username = "preskok";
    public $password = "Preskok2019";

    static $pdo; 
  
    public function __construct(){
      try{
        if(!self::$pdo instanceof PDO)
          $this->createInstance();
          
        return $this->getInstance();
      }
      catch(PDOException $e){
        echo $e;
      }
    }

    public function createInstance(){
      self::$pdo = new \PDO("mysql:host=".$this->host.";dbname=".$this->db, $this->username, $this->password);
    }

    public function getInstance(){
      return self::$pdo;
    }
}

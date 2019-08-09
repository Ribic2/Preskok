<?php
namespace Preskok;

class connect_to_database{
    public $host = "160.153.133.165";
    public $db = "Preskok";
    public $username = "preskok";
    public $password = "Preskok2019";

    public function __construct(){
      try{
        $pdo = new pdo("mysql:host=".$this->host.";dbname=".$this->db.",".$this->username.",".$this->password);
        return $pdo;
      }
      catch(PDOException $e){
        echo $e;
      }
    }
}

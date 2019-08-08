<?php
namespace Preskok;

class connect_to_database{
    private $host = "160.153.133.165";
    private $db = "Preskok";
    Private $username = "preskok";
    private $password = "Preskok2019";

    public function _constructor(){
       new pdo("mysql:host=".$this->host.";dbname=".$this->db.",".$this->username.",".$this->password);
    }
    public function test(){
      echo "test";
    }
}

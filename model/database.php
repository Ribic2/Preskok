<?php namespace database;
use PDO;
class test
{
    public function returndb()
    {
        try
        {
            $dsn="mysql:host=160.153.133.165;dbname=preskok;charset=utf8mb4";
            $options=
            [
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];
            $pdo=new PDO($dsn,"preskok","Preskok2019");
        }
        catch(Exception $e)
        {
            error_log($e->getMessage());
            echo($e->getMessage());
        }
        return $pdo;
    }
}
<?php
require "vendor/autoload.php";

$ip="160.153.133.165";
$user="preskok";
$pass="Preskok2019";
$base="preskok";

try
{
    $options=
    [
    PDO::ATTR_EMULATE_PREPARES   => false,
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $dsn="mysql:host=$ip;dbase=$base;charset=utf8mb4";
    $db=new PDO($dsn,$user,$pass,$options);
    $sql=$db->prepare("insert into login values('user2','pass');");
    $sql->execute();
    $sql=null;
}
catch(Exception $e)
{
    error_log($e->getMessage());
    exit($e->getMessage());
}
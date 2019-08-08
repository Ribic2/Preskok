<?php
require "vendor/autoload.php";

include 'model/database.php';

$pdo=\database\test::returndb();

//$pdo->query("insert into login values('cancer','pass');");

$result=$pdo->query("select * from login");

$row=$result->fetchAll();
echo $row[0][1];

//echo(row['username']."<br>".row['password']);
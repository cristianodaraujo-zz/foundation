<?php

$config['database'] = "mysql";
$config['host'] = "localhost";
$config['dbname'] = "site_simples";
$config['user'] = "root";
$config['password'] = "root";


try {
    $connection = new \PDO($config['database'].":host=".$config['host'].";dbname=".$config['dbname'],$config['user'],$config['password']);
}
catch (\PDOException $error) {
    die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
}
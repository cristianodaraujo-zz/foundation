<?php

require_once 'clientes.php';

try {
    $conexao = new \PDO("mysql:host=localhost;dbname=pdo","root","root");
}
catch (\PDOException $error) {
    die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
}

$cliente = new Clientes($conexao);

$cliente->setNome("Almir")
        ->setEmail("almir@gmail.com");

//$result = $cliente->inserir();
//echo $result;

foreach($cliente->listar("id desc") as $nomes) {
    echo $nomes['nome'] . "<br />";
}

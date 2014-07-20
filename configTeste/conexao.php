<pre>
<?php

/*
 * Host
 * User
 * Password
 * Nome
 * Tipo
 */
$config['database'] = "mysql";
$config['host'] = "localhost";
$config['dbname'] = "pdo";
$config['user'] = "root";
$config['password'] = "root";


try {
    $conexao = new \PDO($config['database'].":host=".$config['host'].";dbname=".$config['dbname'],$config['user'],$config['password']);

    //$query = "Insert into clientes(nome, email) values('João', 'joao@gmail.com');Insert into clientes(nome, email) values('Mario', 'mario@gmail.com');";
    //$query = "Select * from clientes";

    //$resultado = $conexao->exec($query);
    //$resultado = $conexao->query($query);

    //print_r($resultado);
}
catch (\PDOException $error) {
    die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
}

$sql = "Select * from clientes";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":id", $_GET['id'], PDO::PARAM_INT);
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($clientes);

foreach($conexao->query($sql) as $cliente) {
    echo $cliente['nome'] . "<br />";
}

echo "<br />";

foreach($clientes as $cliente) {
    echo $cliente['nome']. " - " . $cliente['email'] . "<br />";
}
?>
</pre>
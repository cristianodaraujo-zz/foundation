<?php

// Realiza a conexão com o banco de dados
function connection() {
    $config = array(
        'database' => "mysql",
        'host' => "localhost",
        'dbname' => "site_simples",
        'user' => "root",
        'password' => "root",
        'utf8' => [\PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8' ]
    );
    try {
        $connection = new \PDO(
            $config['database'].":host=".$config['host'].";dbname=".$config['dbname'],
            $config['user'],
            $config['password'],
            $config['utf8']
        );
        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $connection;
}

// Realiza o registro das tabelas
function registering($table, $registerContents) {
    $connection = connection();
    $areas = count($registerContents);

    try {
        $register = $connection->prepare("insert into {$table} ( pages, content_title, content_main ) values (?,?,?)");
        for($count = 0; $count < $areas; $count++):
            $register->bindValue($count+1, $registerContents[$count]);
        endfor;
        $register->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}

// Realiza o registro das tabelas
function registeringAdmin($table, $registerContents) {
    $connection = connection();
    $areas = count($registerContents);

    try {
        $register = $connection->prepare("insert into {$table} (login, email, senha) values (?, ?, ?)");
        for($count = 0; $count < $areas; $count++):
            $register->bindValue($count+1, $registerContents[$count]);
        endfor;
        $register->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}

// Realiza a listagem das tabelas
function listing($table) {
    $connection = connection();

    try {
        $list = $connection->prepare("select * from $table");
        $list->execute();
        $contents = $list->fetchAll(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $error) {
        echo $exc->getTraceAsString();
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $contents;
}

// Realiaza a listagem das tabelas pelo id
function listingId($table, $id) {
    $connection = connection();

    try {
        $listId = $connection->prepare("select * from {$table} where id = :id");
        $listId->bindValue(":id", $id);
        $listId->execute();
        $contents = $listId->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $error) {
        echo $exc->getTraceAsString();
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $contents;
}

// Realiza a atualização das tabelas
function update($table, $contentsUpdate, $id) {
    $connection = connection();

    try {
        $update = $connection->prepare("update {$table} set conteudo = ? where id = ?");
        $update->bindValue(1, $contentsUpdate['conteudo']);
        $update->bindValue(2, $id);
        $update->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}

// É responsável por deletar as tabelas pelo id
function deleting($table, $id) {
    $connection = connection();

    try {
        $delete = $connection->prepare("delete from {$table} where id = :id");
        $delete->bindValue(":id", $id);
        $delete->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}

// Realiza a listagem das páginas
function listingPages($table, $pages) {
    $connection = connection();

    try {
        $listId = $connection->prepare("select * from {$table} where pages = :pages");
        $listId->bindValue(":pages", $pages);
        $listId->execute();
        $contents = $listId->fetch(\PDO::FETCH_ASSOC);
    }
    catch (\PDOException $error) {
        echo $exc->getTraceAsString();
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $contents;
}
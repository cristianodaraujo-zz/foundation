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
function update() {
    if(isset($_POST['alterar'])){
        $id = addslashes(trim($_POST['id']));
        $pagina = addslashes(trim($_POST['pages']));
        $titulo = addslashes(trim($_POST['titulo']));
        $contPrinc = addslashes(trim($_POST['principal']));
        $conteudo = addslashes(trim( $_POST['editor1']));

        try {
            $connection = connection();

            $update = $connection->prepare("update pages set pages = :pages, content_title = :content_title, "
                . "content_main = :content_main, content_main = :content_main where id = :id");
            $update->bindValue(":pages", $pagina);
            $update->bindValue(":content_title", $titulo);
            $update->bindValue(":content_main", $contPrinc);
            $update->bindValue(":content_main", $conteudo);
            $update->bindValue(":id", $id);
            $update->execute();
        }
        catch (\PDOException $error) {
            die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
        }
    }
    else {
        echo "ERROR: Erro ao alterar!";
    }
}

// Realiza o registro das tabelas
function registering($table, $registerContents) {
    $connection = connection();
    $areas = count($registerContents);

    try {
        $register = $connection->prepare("insert into {$table} (nome, email, senha) values (?, ?, ?)");
        for($count = 0; $count < $areas; $count++):
            $register->bindValue($count+1, $registerContents[$count]);
        endfor;
        $register->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}

// função para cryptografia de senha
function passCrypt($senha) {
    $senhaCrypt = password_hash($senha, PASSWORD_DEFAULT);
    return $senhaCrypt;
}

// função para pegar senha
function password() {
    $dados = listing('admin');
    foreach ($dados as $key => $value) {
        return $value['senha'];
    }
}

// Função logar no painel administrativo
function logarsistema($user) {
    $connection = connection();

    try {
        $login = $connection->prepare("select * from admin where login = :login");
        $login->bindValue(":login", $user);
        $login->execute();

        return ($login->rowCount() == 1) ? true : false;
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
}
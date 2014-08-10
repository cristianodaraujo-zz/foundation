<?php
error_reporting(0);
require_once("./config/config.php");

// Realiza a inicialização do banco de dados
function startDatabase() {
    $config = array(
        'database' => "mysql",
        'host' => "localhost",
        'user' => "root",
        'password' => "root",
        'utf8' => [\PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8']
    );
    $database = 'site_simples';
    $table = 'pages';

    try {
        $connection = new \PDO(
            $config['database'].":host=".$config['host'].";dbname=".$database,
            $config['user'],
            $config['password'],
            $config['utf8']
        );

        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $connection->query("create database if not exists $database");
        $connection->query("use $database");

        $sql ="create table if not exists $table (
            id int auto_increment not null primary key,
            pages varchar(255) not null,
            content_title varchar(255) not null,
            content_main text);";
        $connection->exec($sql);
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $connection;
}
startDatabase();

// Realiaza a adição de conteudo para as páginas
$registerContents = array(
    'home',
    'Página inicial',
    'Conteúdo da páginal inicial do site'
);
registering('pages', $registerContents);

$registerContents = array(
    'empresa',
    'Página da Empresa',
    'Conteúdo sobre a empresa'
);
registering('pages',$registerContents);

$registerContents = array(
    'produtos',
    'Página de Produtos',
    'Conteúdo referente aos produtos'
);
registering('pages',$registerContents);

$registerContents = array(
    'servicos',
    'Página de Serviços',
    'Conteúdo referente aos nossos serviços'
);
registering('pages',$registerContents);

$registerContents = array(
    '404',
    'Página de erro 404',
    'ERROR: Página não encontrada!'
);
registering('pages',$registerContents);


function criarDbAdmin() {
    $configAdmin = array (
        'database' => "mysql",
        'host' => "localhost",
        'user' => "root",
        'password' => "root",
        'utf8' => [\PDO::MYSQL_ATTR_INIT_COMMAND => 'set names utf8']
    );
    $database = 'site_simples';
    $table = 'admin';

    try {
        $connection = new \PDO(
            $configAdmin['database'].":host=".$configAdmin['host'].";dbname=".$database,
            $configAdmin['user'],
            $configAdmin['password'],
            $configAdmin['utf8']
        );

        $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $connection->query("create database if not exists $database");
        $connection->query("use $database");
        $sql ="create table if not exists $table(
            id int auto_increment not null primary key,
            login varchar(255) not null,
            email varchar(255) not null,
            senha varchar(255) not null);";
        $connection->exec($sql);
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }
    return $connection;
}
//função para pegar a senha digitada e cadastrar no banco de dados cryptografada
function passCrypt($senha) {
    $senhaCrypt = password_hash($senha, PASSWORD_DEFAULT);
    return $senhaCrypt;
}

criarDbAdmin();
$registerContents = array('admin','admin@admin.com', passCrypt('admin'));
registeringAdmin('admin',$registerContents);
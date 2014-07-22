<?php

require_once("config.php");

/*
 * Tabela: páginas
 * Id: Autoincrement
 * Nome: varchar
 * Conteudo: text
 */

$sql = "truncate table pages";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina home
$sql = "Insert into pages(slug, content) values ('home', 'Pagina inicial');";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina empresa
$sql = "Insert into pages(slug, content) values ('empresa', 'Conteudo da empresa');";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina produtos
$sql = "Insert into pages(slug, content) values ('produtos', 'Conteudo de produtos');";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina servicos
$sql = "Insert into pages(slug, content) values ('servicos', 'Conteudo de servicos');";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina contato
$sql = "Insert into pages(slug, content) values ('contato', '');";
$stmt = $connection->prepare($sql);
$stmt->execute();

// Pagina 404
$sql = "Insert into pages(slug, content) values ('404', 'Erro 404');";
$stmt = $connection->prepare($sql);
$stmt->execute();
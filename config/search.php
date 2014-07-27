<?php

// Realiza a busca nos conteudos das páginas
function search() {
    $connection = connection();
    $consult = addslashes(trim($_GET['consulta']));

    try {
        $query = $connection->prepare("select * from pages where content_title like :busca or content_main like :busca");
        $query->bindValue(":busca","%{$consult}%");
        $query->execute();
    }
    catch (\PDOException $error) {
        die("Código de erro: " . $error->getCode() . ": " . $error->getMessage());
    }

    if($query->rowCount() > 0) {
        echo "<p>Retornou ".$query->rowCount()." resultados com a palavra <b>".$consult."</b></p>";
        $results = $query->fetchAll(\PDO::FETCH_ASSOC);
        echo "<ul>";
        foreach ($results as $result):
            echo "<li><a href={$result['pages']}>".strip_tags($result['content_title'])."</a></li>";
        endforeach;
        echo "</ul>";
    }
    else {
        echo "<p>Não retornou nenhum resultado com a palavra <b>".$consult."</b></p>";
    }
    return $query;
}


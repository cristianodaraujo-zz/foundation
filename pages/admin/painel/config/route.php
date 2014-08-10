<?php

function route() {
    $route = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $path = explode("/", $route['path']);
    $pagina = $path[3];
    $elements = array('alterarPages', 'listarPages', 'admin', 'index');
    if(($pagina !== "") and (array_search($pagina, $elements) !== false)) {
        if($pagina == 'listarPages') {
            require_once('pages/listarPages.php');
        }
        elseif($pagina == 'alterarPages') {
            require_once('pages/alterarPages.php');
        }
        elseif($path[2] == 'index') {
            require_once('../../painel/index.php');
        }
    }
    else {
        header("HTTP/1.0 404 Not Found");
    }
    return $route;
};
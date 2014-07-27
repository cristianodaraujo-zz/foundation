<?php

// Seta a página correta na url
function getRoutes() {
    $route = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $path = explode("/", $route['path']);
    $path = ($path[1] == null ? 'index' : $path[1]);
    $elements = array('home', 'produtos', 'empresa', 'servicos', 'contato', 'email', '404', 'busca');
    if(($path !== "") and (array_search($path, $elements) !== false)) {
        if($path == 'contato') {
            require_once('pages/contato.php');
        }
        elseif($path == 'email') {
            require_once('pages/email.php');
        }
        elseif($path == 'busca') {
            require_once('pages/busca.php');
        }
        else {
            $route = listingPages('pages', $path);
        }
    }
    elseif(($path === "index") and (array_search($path, $elements) === false)) {
        $route = listingPages('pages', 'home' );
    }
    else {
        $route = listingPages('pages', '404' );
    }
    return $route;
};
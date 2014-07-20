<?php
/**
 * Created by PhpStorm.
 * User: cristiano
 * Date: 20/07/14
 * Time: 11:03
 * Função: Rotas
 */
require_once("../config/config.php");

function getRoutes() {
    $route = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    $path = explode("/html/", $route['path']);
    $path = ($path[1] == null ? 'index' : $path[1]);
    $elements = array('home', 'produtos', 'empresa', 'servicos', 'contato', 'email', '404');
    if(($path !== "") and (array_search($path, $elements) !== false)) {
        //require_once("elements/" . $path .".php");
        //return $page = pages('pages', $elements);
        $route =  $path;
    }
    elseif(($path === "index") and (array_search($path, $elements) === false)) {
        //require_once("elements/home.php");
        $route = "home";
    }
    else {
        //require_once("elements/404.php");
        $route = "404";
    }
    return $route;
};
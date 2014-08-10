<?php

// Seta a página correta na url
//function getRoutesAdmin() {
//    $route = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
//    $path = explode("/", $route['path']);
//    $path = ($path[2] == 'admin' ? 'login' : $path[3]);
//    $elements = array('home', 'produtos', 'servicos', '404', 'admin', 'login');
//    if(($path !== "") and (array_search($path, $elements) !== false)) {
//        $route = listingPages('pages', $path);
//    }
//    elseif(($path === "index") and (array_search($path, $elements) === false)) {
//        $route = listingPages('pages', 'home' );
//    }
//    else {
//        $route = listingPages('pages', '404' );
//    }
//    return $route;
//};
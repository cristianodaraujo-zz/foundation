<?php error_reporting(0); ?>

    <?php require_once("header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("menu.php"); ?>
<!-- End Menu -->

<!-- Begin Content -->
<div id="content" class="container">
    <?php
        function get() {
            $rota = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
            $path = explode("/html/", $rota['path']);
            $path = ($path[1] == NULL ? 'index' : $path[1]);
            $elements = array('home', 'produtos', 'empresa', 'servicos', 'contato', 'email');
            if(($path !== "") and (array_search($path, $elements) !== false)) {
                require_once("elements/" . $path .".php");
            }
            elseif(($path === "index") and array_search($path, $elements) === false) {
                require_once("elements/home.php");
            }
            else {
                require_once("elements/404.php");
            }
        };
        get();
    ?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("footer.php"); ?>


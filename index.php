
    <?php require_once("pages/header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("pages/menu.php"); ?>
<!-- End Menu -->

<!-- Begin Content -->
<div id="content" class="container">
    <?php
        error_reporting(0);
        require_once('config/config.php');
        require_once('config/routes.php');
        require_once('config/search.php');
        $pagina = getRoutes();
    ?>
    <?php require_once 'pages/conteudo.php';?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("pages/footer.php"); ?>
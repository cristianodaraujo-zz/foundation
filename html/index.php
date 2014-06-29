<?php error_reporting(0); ?>

    <?php require_once("header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("menu.php"); ?>
<!-- End Menu -->

<!-- Begin Content -->
<div id="content" class="container">
    <?php
        $page = $_GET["page"];
        $elements = array('home', 'produtos', 'empresa', 'servicos', 'contato', 'email');
        if(($page !== "") and (array_search($page, $elements) !== false)):
    ?>
        <?php require_once("elements/".$page.".php"); ?>
    <?php else: ?>
        <?php require_once("elements/home.php"); ?>
    <?php endif; ?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("footer.php"); ?>


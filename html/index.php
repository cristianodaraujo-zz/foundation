<?php error_reporting(0); ?>
<?php //require_once("../config/config.php"); ?>
<?php require_once("../config/fixtures.php"); ?>
<?php require_once("../functions/routes.php"); ?>

    <?php require_once("header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("menu.php"); ?>
<!-- End Menu -->

<!-- Begin Content -->
<div id="content" class="container">
    <?php require_once("elements/".getRoutes($route).".php"); ?>

</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("footer.php"); ?>


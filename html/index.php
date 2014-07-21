<?php error_reporting(0); ?>
<?php require_once("../config/config.php"); ?>
<?php require_once("../config/fixtures.php"); ?>
<?php require_once("../functions/routes.php"); ?>

    <?php require_once("header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("menu.php"); ?>
<!-- End Menu -->
<?php

//require_once("../config/config.php");

$sql = "select * from pages where slug = :slug;";
$connection->prepare($sql);
$stmt->bindValue("slug", getRoutes($route));
$stmt->execute();

$content = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!-- Begin Content -->
<div id="content" class="container">
    <?php //require_once("elements/".getRoutes($route).".php");
        echo $content['content'];
    ?>

</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("footer.php"); ?>


<?php
error_reporting(0);
//require_once("../config/config.php");
//require_once("../config/fixtures.php");
require_once("../functions/routes.php");

$sql = "select * from pages where slug = :slug;";
$stmt = $connection->prepare($sql);
$stmt->bindValue("slug", getRoutes($route));
$stmt->execute();

$content = $stmt->fetch(PDO::FETCH_ASSOC);

?>

    <?php require_once("header.php"); ?>
<!--  End Header  -->

<!-- Begin Menu -->
    <?php require_once("menu.php"); ?>
<!-- End Menu -->

<!-- Begin Content -->
<div id="content" class="container">
    <?php if($content['slug'] !== 'contato'): ?>
        <h2><?php echo $content['slug']; ?></h2>
        <p><?php echo $content['content']; ?></p>
    <?php else: ?>
        <?php require_once('elements/' . getRoutes($route) . '.php'); ?>
    <?php endif; ?>
</div>
<!-- End Content -->

<!-- Begin Footer -->
    <?php require_once("footer.php"); ?>


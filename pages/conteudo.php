<?php
$pagina = getRoutes();
?>
<?php //if(!$pagina['pages'] != 'contato'): ?>
<div class="col-12 col-sm-12 col-lg-12">
    <h2 class="class="text-justify"><?php echo $pagina['content_title']; ?></h2>
    <p class="text-muted">
        <?php echo $pagina['content_main'];?>
    </p>
</div>
<?php //else: ?>
    <?php //require_once('contato.php'); ?>
<?php //endif; ?>



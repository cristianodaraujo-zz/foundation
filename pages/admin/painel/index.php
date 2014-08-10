<?php

session_start();
require_once 'config/config.php';
require_once 'config/route.php';

if(!($_SESSION['loginUser'])){
    header('Location: ../index.php');
    die();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Admin</title>
    <!--  META TAGS  -->
    <meta http-equiv="Content-Type" content="text/html, charset=utf-8" />
    <!--  CSS  -->
    <link rel="stylesheet" href="./css/bootstrap.css" type="text/css" />
</head>
<body>
<div id="body-container">
    <div id="body-content">
        <section class="page container">
            <div class="row">
                <div class="page-header col-md-12">
                    <div class="col-md-10">
                        <h1>Administração</h1>
                    </div>
                    <div class="col-md-2">
                        <a href="logoff.php"><button class="btn btn-warning" type="submit" name="alterar" >SAIR | DESLOGAR</button>
                    </div>
                </div>
                <div class="col-md-3">
                    <ul class="nav list-group">
                        <li class="list-group-item active">Paginas</a></li>
                        <li><a href="../index.php">Listar</a></li>
                    </ul>
                </div>
                <?php $pagina = route();?>
            </div>
        </section>
    </div>
</div>
<div id="footer" class="container">
    <div class="col-12 col-sm-12 col-lg-12">
        <br /><br />
        <p class="text-warning text-center">Todos os direitos reservados - <?php echo date("Y"); ?></p>
    </div>
</div>
<!-- End Footer -->
<!--  JS  -->
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script src="ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.replace('editor1');
</script>
</body>
</html>
<?php

session_start();
require_once('painel/config/config.php');

if(!empty($_SESSION['loginUser'])){
    header('Location: painel/');
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
                        <a href="../home" class="btn btn-warning">Voltar</a>
                    </div>
                </div>
                <div class="col-md-6 col-md-offset-3">
                    <?php
                    if (isset($_POST['logar'])) {
                        $login = $_POST['login'];
                        $senha = $_POST['senha'];


                        if(!$login || !$senha){
                            echo '<div class="alert alert-danger">Todos os campos devem ser preenchidos!</div>';
                        }else{
                            $verificSenha = password_verify($senha, password());
                            if(($verificSenha == true) && logarsistema($login)){
                                $_SESSION['loginUser'] = $login;
                                header('Location: '.$_SERVER['PHP_SELF']);
                            }else{
                                echo '<div class="alert alert-danger">Usuário ou senha inválida!</div>';
                            }
                        }
                    }
                    ?>
                    <form action="" name="formAdmin" method="post">
                        <div class="form-group">
                            <label>Usuário</label>
                            <input type="text" name="login" class="form-control" placeholder="Usuário">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="senha" class="form-control" placeholder="Password">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success" type="submit" name="logar">Logar</button>
                        </div>
                    </form>
                    <!--/form-->
                </div>
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
</body>
</html>
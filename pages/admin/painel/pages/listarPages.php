<?php

//lista páginas existentes
$pages = listing('pages');
?>
<div class="col-md-9">
    <div class="box">
        <div class="box-header list-group-item active">
            <?php
            if(isset($_GET['id'])){
                $idDaPagina = $_GET['id'];
                deleting('pages', $idDaPagina);
                echo "<h3>Página deletada com sucesso!</h3>";
                $refresh = '<meta http-equiv="refresh" content="1; index.php" />';
                exit ($refresh);
            }
            ?>
        </div>
        <div class=" box-table">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>PÁGINAS</th>
                    <th>TÍTULOS</th>
                    <th>CONTENT</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($pages as $value) {
                    ?>
                    <tr>
                        <td><?php echo $value['id'] ;?></td>
                        <td><?php echo $value['pages'] ;?></td>
                        <td><?php echo $value['content_title'] ;?></td>
                        <td><?php echo $value['content_main'] ;?></td>
                        <td><a href="alterarPages?id=<?php echo $value['id'] ;?>"><button class="btn btn-info" type="submit" name="alterar" >Alterar</button></a></td>
                        <td><a href="index.php?id=<?php echo $value['id'] ;?>"><button class="btn btn-danger" type="submit" name="deletar">Deletar</button></a></td>
                    </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
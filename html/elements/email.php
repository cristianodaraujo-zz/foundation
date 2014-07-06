<div class="col-lg-8">
    <h4 class="text-success">Dados enviados com sucesso, abaixo seguem os dados que você enviou </h4>
    <p class="text-justify"><b>Nome: </b><?php echo $_REQUEST["name"]; ?></p>
    <p class="text-justify"><b>Email: </b><?php echo $_REQUEST["mail"]; ?></p>
    <p class="text-justify"><b>Assunto: </b><?php echo $_REQUEST["subject"]; ?></p>
    <p class="text-justify"><b>Mensagem: </b><?php echo $_REQUEST["message"]; ?></p>
    <p class="text-danger">
        Deseja mandar outra mensagem? <b><a href="contato" >Cliqui aqui</a> para voltar ao formulário</b>
    </p>
</div>
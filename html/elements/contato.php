<form action="?page=email" method="post" class="form-horizontal">
    <div class="col-lg-6">
        <div class="form-group">
            <label for="idName" class="control-label">Nome: </label>
            <input type="text" name="name" id="idName" class="form-control" />

            <label for="idMail" class="control-label">Email: </label>
            <input type="text" name="mail" id="idMail" class="form-control" />
        </div>
        <div class="form-group">
            <label for="idSubject" class="control-label">Escolha o assunto de sua mensagem</label>
            <select id="idSubject" name="subject" class="form-control input-sm">
                <option value="">Escolha: </option>
                <option>Elogio</option>
                <option>Sugestão</option>
                <option>Crítica</option>
            </select>
        </div>
        <div class="form-group">
            <textarea name="message" id="idMessage" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name="submit" value="Enviar" class="btn btn-default" />
        </div>
    </div>
</form>
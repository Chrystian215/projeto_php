<?php include "header.php";?>

<form class="form-horizontal">
    <div class="form-group">
      <label for="Nome" class="col-sm-2 control-label white"> Nome</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" id="Nome" placeholder="Nome Completo">
    </div>

<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label white"> E-mail</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>

  <div class="form-group">
    <label for="Senha" class="col-sm-2 control-label white"> Senha</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label class="white">
          <input type="checkbox"> Check Box
        </label>
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
    <button type="button" class="btn btn-primary" > Entrar </button>
    </div>
  </div>
</form>

<input type="text" class="form-control" placeholder="Digite sua Opnião">
  </div>
  <div class="col-sm-offset-2 col-sm-10">
  <button type="button" class="btn btn-success"> Enviar </button>
</form>

<?php require_once "footer.php";?>
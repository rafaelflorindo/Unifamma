<?php
  //require("verificarLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
    </nav>


    <div class="container">
      <!-- Conteúdo aqui -->
      <h1>Formulário de Login</h1>
      <div class="row">
        <div class="col">
          <?php
          if ( !isset( $_GET ) || empty( $_GET ) ) {
        	   //$erro = 'Nada foi postado.';
          }else{
            $mensagem = $_GET["mensagem"];
            if($mensagem == "sucesso"){
              ?>
              <div class="alert alert-success" role="alert">
                Logado
              </div>
              <?php
            }elseif($mensagem == "erroUsuario") {
              ?>
              <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao logar no sistema. <br>Usuário Inválido!!!
              </div>
              <?php
            }elseif($mensagem == "erroCampos") {
              ?>
              <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao logar no sistema!!!<br>Campos não preenchidos!!!
              </div>
              <?php
            }elseif($mensagem == "erroPOST") {
              ?>
              <div class="alert alert-danger" role="alert">
                Ocorreu um erro ao logar no sistema!!!<br>Os dados não foram enviados!!!
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <hr>
        </div>
      </div>
      <div class="row">
        <div class="col-8">
          <h3>Seja bem-vindo à xxxxx.</h3>
        </div>
        <div class="col-4">
          <form action="controller/logar.php" method="post">
            <div class="row">
              <div class="col-12">
                <input type="text" id="usuario" name="usuario" class="form-control" placeholder="Usuário">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                &nbsp;
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <input type="password" id="senha" name="senha" class="form-control" placeholder="Senha">
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                &nbsp;
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                &nbsp;
              </div>
              <div class="col-5">
                <button type="submit" class="btn btn-primary">Iniciar sessão</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>

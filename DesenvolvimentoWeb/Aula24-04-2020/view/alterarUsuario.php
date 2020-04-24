<?php
  require_once("../controller/verificarLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link href="../bootstrap-4.4.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="apple-touch-icon" href="/docs/4.4/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/4.4/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/4.4/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="/docs/4.4/assets/img/favicons/favicon.ico">


  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Expand at lg</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuario</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="formularioCadastro.php">Cadastro</a>
              <a class="dropdown-item" href="relatorioTelaUsuario.php">Relatório</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produto</a>
            <div class="dropdown-menu" aria-labelledby="dropdown05">
              <a class="dropdown-item" href="formularioCadastro.php">Cadastro</a>
              <a class="dropdown-item" href="relatorioTelaUsuario.php">Relatório</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ProximaVersao.php">Próximas versões</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../controller/deslogar.php">Sair</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-md-0">
          <input class="form-control" type="text" placeholder="Search">
        </form>
      </div>
    </nav>

    <div class="container">
      <!-- Conteúdo aqui -->
      <h3>Formulário de Alteração de Usuário</h3>
      <div class="row">
        <div class="col">
          <?php
          if ( !isset( $_GET ) || empty( $_GET ) ) {
        	   //$erro = 'Nada foi postado.';
          }else{
            if(!$_GET["id"]){
              if ($_GET["mensagem"]){
                $mensagem = $_GET["mensagem"];
                if($mensagem=="sucesso"){
                  ?>
                  <div class="alert alert-success" role="alert">
                    Usuário Alterado com sucesso!!!
                </div>
                <?php
                }elseif($mensagem=="erro") {
                ?>
                <div class="alert alert-danger" role="alert">
                  Ocorreu um erro ao alterar o Usuário!!!
                </div>
                <?php
                }
              }
          }elseif($_GET["id"]){
            $id = $_GET["id"];//2
            $tipo = "unico";
            include("../controller/relatorio.php");

            foreach ($retorno as $value){
              ?>
              <form action="../controller/alterarLogin.php" method="post">
                <div class="row">
                  <div class="col-4">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" value='<?=$value["nome"];?>' class="form-control" placeholder="Nome">
                  </div>
                  <div class="col-4">
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" value=<?=$value["email"];?> class="form-control" placeholder="email">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    &nbsp;
                  </div>
                </div>
                <div class="row">
                  <div class="col-3">
                    <label for="login">Login:</label>
                    <input type="text" id="login" name="login" value=<?=$value["login"];?> class="form-control" placeholder="login">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    &nbsp;
                  </div>
                </div>
                <div class="row">
                  <div class="col-12">
                    <input type="hidden" name="id" value=<?=$value["id"];?>>
                    <button type="submit" class="btn btn-primary">Alterar</button>
                    <button type="reset" class="btn btn-primary">Limpar</button>
                  </div>
                </div>
              </form>
            <?php
          }
        }
      }

 ?>  </div>
 <div class="row">
   <div class="col">
     &nbsp;
   </div>
 </div>
<footer class="bd-footer text-muted">

    <a class="navbar-brand" href="#"><br>Usuário Autenticado: <?=$_SESSION["nomeUsuario"];?>
    <br>E-mail: <?=$_SESSION["emailUsuario"];?>
  </a>
<p>&copy; Company 2017-2019</p>
</footer>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
    </html>

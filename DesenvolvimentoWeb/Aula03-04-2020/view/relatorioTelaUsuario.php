<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title></title>
    <link rel="stylesheet" href="../bootstrap-4.1.3-dist/css/bootstrap.min.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(Página atual)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="formularioCadastro.php">Cadastro Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cadastro Produto</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="relatorioTelaUsuario.php">Relatorio Geral Usuário</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">x</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col">
      &nbsp;
    </div>
  </div>
  <div class="row">
    <div class="col">
      <h1>Relatório de Usuários</h1>
      <br>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div class="table-responsive">
         <table class="table">
           <th>ID</th>
           <th>NOME</th>
           <th>LOGIN</th>
           <th>E-MAIL</th>
           <th>Data Cadastro</th>
           <th>ALTERAÇÃO</th>
           <th colspan="2">AÇÃO</th>

           <?php
            $tipo = "usuario";
            include("../controller/relatorio.php");
            //print_r($retorno);

            foreach ($retorno as $value) {
              $id = $value["id"];
              ?>
              <tr>
                <td><?=$value["id"];?></td>
                <td><?=$value["nome"];?></td>
                <td><?=$value["login"];?></td>
                <td><?=$value["email"];?></td>
                <td>
                <?php
                  $dataCadastro = new DateTime($value["dataCadastro"]);
                  echo $dataCadastro->format("d/m/Y H:i:s") . ' ';
                ?>
                </td>
                <td>
                <?php
                  $dataAlteracao = new DateTime($value["dataAlteracao"]);
                  echo $dataAlteracao->format("d/m/Y H:i:s") . ' ';
                ?>
                </td>
                <td><?php echo "<a href=alterarUsuario.php?id=$id>
                    [ALTERAR]
                  </a>";?>
                </td>
                <td><?php echo "<a href=../controller/excluirLogin.php?id=$id>
                    [EXCLUIR]
                  </a>";?>
                </td>
              </tr>
              <?php
            }
            ?>
         </table>
         <?php
            echo "Foram encontrados " . count($retorno) . " registros";
          ?>
        </div>
    </div>
  </div>
  <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
  </html>

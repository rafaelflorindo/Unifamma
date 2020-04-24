<?php
  if (isset($_GET)){
    if (!empty($_GET["id"])
    ){
        $id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_STRING);
        include("../model/Usuario.php");
        $excluirUsuario = new Usuario();
        $i = $excluirUsuario->deleteUsuario($id);
        if ($i){
            header('location: ../view/relatorioTelaUsuario.php?mensagem=sucesso');
        }else{
          header('location: ../view/relatorioTelaUsuario.php?mensagem=erro');
        }
      }else{
          header('location: ../view/relatorioTelaUsuario.php?mensagem=erro');
      }
  }else{
      header('location: ../view/formularioCadastro.php?mensagem=erro');
  }
?>

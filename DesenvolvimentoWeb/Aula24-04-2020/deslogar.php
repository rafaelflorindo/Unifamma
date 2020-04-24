<?php
include("model/Autenticar.php");
$autenticarUsuario = new Autenticar();
$sair = $autenticarUsuario->deslogar();
if ($sair){
  echo "Base fechada";
  session_start();
  $_SESSION = array();
  session_destroy();
  header('location: index.php');
}else{
  echo "Erro ao fechar a Base";
  exit;
  //header('location: ../view/formularioLogin.php?mensagem=erroUsuario');
}
?>

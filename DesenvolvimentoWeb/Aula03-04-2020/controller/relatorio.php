<?php
  include ("../model/Usuario.php");
  $objRelatorio = new Usuario();

  if ($tipo=="usuario"){
    $retorno = $objRelatorio->relatorioSimples();
    return $retorno;
  }elseif ($tipo=="unico") {
    $retorno = $objRelatorio->relatorioUnico($id);
    return $retorno;
  }
?>

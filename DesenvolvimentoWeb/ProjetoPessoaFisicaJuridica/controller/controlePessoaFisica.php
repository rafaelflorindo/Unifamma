<?php
$nome = $_POST["nome"];

include("../model/Fisica.php");
include("../model/Cidade.php");
include("../model/Endereco.php");

$cidade = new Cidade("Maringá", "PR");
$endereco = new Endereco("Brasil", "Centro", "Av.", $cidade);

$objPessoaFisica = new Fisica(
                        "123.456.789-78", 
                        "5.897.456-87",
                        $nome,
                        "rafaelflorindo@hotmail.com",
                        "98401-4320", 
                        $endereco, 
                        78
                        );
echo "<pre>";
print_r($objPessoaFisica);
echo "</pre>";

<?php
include("../model/Juridica.php");
include("../model/Cidade.php");
include("../model/Endereco.php");

$cidade = new Cidade("Maringá", "PR");
$endereco = new Endereco("Brasil", "Centro", "Av.", $cidade);

$objPessoaJuridica = new Juridica(
                        "123.456.789/0001", 
                        "589745687",
                        "TecInfo",
                        "Rafael A. Florindo",
                        "rafaelflorindo@hotmail.com",
                        "98401-4320", 
                        $endereco, 
                        78
                        );
echo "<pre>";
print_r($objPessoaJuridica);
echo "</pre>";
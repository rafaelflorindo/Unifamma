<?php
include("../model/Juridica.php");

$objPessoaJuridica = new Juridica(
                        "123.456.789/0001", 
                        "589745687",
                        "TecInfo",
                        "Rafael A. Florindo",
                        "rafaelflorindo@hotmail.com",
                        "98401-4320"
                        );

var_dump($objPessoaJuridica);
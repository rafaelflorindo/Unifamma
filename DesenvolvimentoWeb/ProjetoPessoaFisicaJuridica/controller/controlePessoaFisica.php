<?php
include("../model/Fisica.php");
$objPessoaFisica = new Fisica(
                        "123.456.789-78", 
                        "5.897.456-87",
                        "Rafael Alves Florindo",
                        "rafaelflorindo@hotmail.com",
                        "98401-4320"
                        );

var_dump($objPessoaFisica);


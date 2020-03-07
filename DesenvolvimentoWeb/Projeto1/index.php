<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include("classes/Pessoa.php");
            $nome = "Rafael";
            $email = "rafaelflorindo@hotmail.com";
            $telefone = "98401-4320";
            $cidade = "Maringá";
            
            $pessoa1 = new Pessoa($nome, $email, $telefone, $cidade);
            $pessoa1->setNome("Arthur");
            $pessoa1->imprimir();
            
            $pessoa2 = new Pessoa("Ricardo", "ricardo@ricardo", "98874-5787", "Sarandi");
            $pessoa2->imprimir();
            ?>
    </body>
</html>

<?php
//print_r($_POST);
include("../classes/Noticias.php");
$noticia1 = new Noticias(
        $_POST["titulo"], 
        $_POST["descricao"], 
        $_POST["data"], 
        $_POST["autor"], 
        $_POST["link"]
        );

$arrayNoticias = array();

/*$qtd = count($arrayNoticias);
$qtd++;
$arrayNoticias[$qtd] = new Noticias(
        $_POST["titulo"], 
        $_POST["descricao"], 
        $_POST["data"], 
        $_POST["autor"], 
        $_POST["link"]
        );
*/

array_push($arrayNoticias, $noticia1);
array_push($arrayNoticias, new Noticias(
        $_POST["titulo"], 
        $_POST["descricao"], 
        $_POST["data"], 
        $_POST["autor"], 
        $_POST["link"]
        ));
//var_dump($arrayNoticias);
//return $arrayNoticias;

foreach($arrayNoticias as $valor){
    echo "<h1>{$valor->getTitulo()}</h1>";    
    echo "<br><b>{$valor->getAutor()}</b>";
    echo "<br><span>{$valor->getData()}</span>";
    echo "<p>{$valor->getDescricao()}</p>";
    echo "<a href={$valor->getLink()}>Ver mais</a>";
}


?>
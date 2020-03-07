<?php

class Noticias {
    private $titulo, $descricao, $data, $autor, $link;
    
    function __construct($titulo, $descricao, $data, $autor, $link) {
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->data = $data;
        $this->autor = $autor;
        $this->link = $link;
    }
    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getData() {
        return $this->data;
    }

    function getAutor() {
        return $this->autor;
    }

    function getLink() {
        return $this->link;
    }


}

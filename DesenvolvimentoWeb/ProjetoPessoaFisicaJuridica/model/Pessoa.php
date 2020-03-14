<?php
abstract class Pessoa {
    protected $nome, $email, $telefone, $numero;
    protected $endereco;
    public function __construct($nome, $email, $telefone, $endereco, $numero) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->numero = $numero;
        $this->endereco = $endereco;
    }
    
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function getNumero() {
        return $this->numero;
    }
    public function getEndereco() {
        return $this->endereco;
    }



}

<?php
class Pessoa {
    private $nome, $email, $telefone, $cidade;
    
    function __construct($nome, $email, $telefone, $cidade) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
        $this->cidade = $cidade;
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

    public function getCidade() {
        return $this->cidade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function imprimir(){
        echo "<h1>Dados da Pessoa</h1>";
        echo "<br>Nome: " . $this->getNome();
        echo "<br>Email: " . $this->getEmail();
        echo "<br>Telefone: " . $this->getTelefone();
        echo "<br>Cidade: " . $this->getCidade();
    }
}

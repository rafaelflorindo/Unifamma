<?php
class Endereco {
    private $endereco, $bairro, $logradouro;
    private $cidade;//armazenar a referencia da classe enderedo
    
    public function getEndereco() {
        return $this->endereco;
    }
    public function getBairro() {
        return $this->bairro;
    }
    public function getLogradouro() {
        return $this->logradouro;
    }
    public function getCidade() {
        return $this->cidade;
    }
    
    public function __construct($endereco, $bairro, $logradouro, $cidade) {
        $this->endereco = $endereco;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->cidade = $cidade;
    }


}

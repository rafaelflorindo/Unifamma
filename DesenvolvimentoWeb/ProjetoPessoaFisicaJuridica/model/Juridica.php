<?php
include("Pessoa.php");
class Juridica extends Pessoa{
    private $CNPJ;
    private $inscricaoEstadual;
    private $razaoSocial;
    
    public function __construct($CNPJ, $inscricaoEstadual, $razaoSocial, $nome, $email, $telefone, $endereco, $numero) {
        parent::__construct($nome, $email, $telefone, $endereco, $numero);
        $this->CNPJ = $CNPJ;
        $this->inscricaoEstadual = $inscricaoEstadual;
        $this->razaoSocial = $razaoSocial;
    }
    public function getCNPJ() {
        return $this->CNPJ;
    }
    public function getInscricaoEstadual() {
        return $this->inscricaoEstadual;
    }
    public function getRazaoSocial() {
        return $this->razaoSocial;
    }
}

<?php
include("Pessoa.php");
class Fisica extends Pessoa{
    private $CPF, $RG;
    
    public function __construct($CPF, $RG, $nome, $email, $telefone) {
        parent::__construct($nome, $email, $telefone);
        $this->CPF = $CPF;
        $this->RG = $RG;
    }

    public function getCPF() {
        return $this->CPF;
    }
    public function getRG() {
        return $this->RG;
    }

    

    //put your code here
}

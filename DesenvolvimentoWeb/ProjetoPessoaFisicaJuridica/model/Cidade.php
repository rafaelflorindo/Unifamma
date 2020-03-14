<?php
class Cidade {
    private $cidade, $uf;
    
    function __construct($cidade, $uf) {
        $this->cidade = $cidade;
        $this->uf = $uf;
    }
    public function getCidade() {
        return $this->cidade;
    }
    public function getUf() {
        return $this->uf;
    }
}

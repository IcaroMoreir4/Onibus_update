<?php

class Passageiro {
    private $passageiro_id;
    private $nome;
    private $CPF;
    private $telefone;

    public function __construct($passageiro_id, $nome, $CPF, $telefone) {
        $this->passageiro_id = $passageiro_id;
        $this->nome = $nome;
        $this->CPF = $CPF;
        $this->telefone = $telefone;
    }

    public function getPassageiroID() {
        return $this->passageiro_id;
    }
    public function setPassageiroID($p) {
        $this->passageiro_id = $p;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($n) {
        $this->nome = $n;
    }

    public function getCpf() {
        return $this->CPF;
    }
    public function setCpf($c) {
        $this->CPF = $c;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($t) {
        $this->telefone = $t;
    }
}


?>
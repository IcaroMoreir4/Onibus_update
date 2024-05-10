<?php

class Passageiro {
    private $passageiro_id;
    private $nome;
    private $cpf;
    private $telefone;

    public function __construct($passageiro_id, $nome, $cpf, $telefone) {
        $this->passageiro_id = $passageiro_id;
        $this->nome = $nome;
        $this->cpf = $cpf;
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
        return $this->cpf;
    }
    public function setCpf($c) {
        $this->cpf = $c;
    }

    public function getTelefone() {
        return $this->telefone;
    }
    public function setTelefone($t) {
        $this->telefone = $t;
    }
}


?>
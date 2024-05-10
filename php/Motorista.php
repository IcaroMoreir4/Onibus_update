<?php

class Motorista {
    private $motorista_id;
    private $nome;
    private $cpf;
    private $telefone;

    public function __construct($motorista_id, $nome, $cpf, $telefone) {
        $this->motorista_id = $motorista_id;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->telefone = $telefone;
    }

    public function getMotoristaID() {
        return $this->motorista_id;
    }
    public function setMotoristaID($m) {
        $this->motorista_id = $m;
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
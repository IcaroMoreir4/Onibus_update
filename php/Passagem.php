<?php

class Passagem {
    private $passagem_id;
    private $data_compra;
    private $valor;
    private $viagem_id; // ID da viagem associada à passagem
    private $passageiro_id; // ID do passageiro associado à passagem

    public function __construct($passagem_id, $data_compra, $valor, $viagem_id, $passageiro_id) {
        $this->passagem_id = $passagem_id;
        $this->data_compra = $data_compra;
        $this->valor = $valor;
        $this->viagem_id = $viagem_id;
        $this->passageiro_id = $passageiro_id;
    }

    public function getPassagemID() {
        return $this->passagem_id;
    }
    public function setPassagemID($p) {
        $this->passagem_id = $p;
    }

    public function getDataCompra() {
        return $this->data_compra;
    }
    public function setDataCompra($d) {
        $this->data_compra = $d;
    }

    public function getValor() {
        return $this->valor;
    }
    public function setValor($v) {
        $this->valor = $v;
    }

    public function getViagemID() {
        return $this->viagem_id;
    }
    public function setViagemID($v) {
        $this->viagem_id = $v;
    }

    public function getPassageiroID() {
        return $this->passageiro_id;
    }
    public function setPassageiroID($p) {
        $this->passageiro_id = $p;
    }
}


?>
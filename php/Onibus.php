<?php

class Onibus {
    private $onibus_id;
    private $placa;
    private $modelo;
    private $capacidade;

    public function __construct($onibus_id, $placa, $modelo, $capacidade) {
        $this->onibus_id = $onibus_id;
        $this->placa = $placa;
        $this->modelo = $modelo;
        $this->capacidade = $capacidade;
    }

    public function getOnibusID() {
        return $this->onibus_id;
    }
    public function setOnibusID($o) {
        $this->onibus_id = $o;
    }

    public function getPlaca() {
        return $this->placa;
    }
    public function setPlaca($p) {
        $this->placa = $p;
    }

    public function getModelo() {
        return $this->modelo;
    }
    public function setModelo($m) {
        $this->modelo = $m;
    }

    public function getCapacidade() {
        return $this->capacidade;
    }
    public function setCapacidade($c) {
        $this->capacidade = $c;
    }
}

?>
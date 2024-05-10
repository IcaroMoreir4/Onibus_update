<?php

class Viagem {
    private $viagem_id;
    private $data_viagem;
    private $hora_inicio;
    private $hora_termino;
    private $onibus_id; // ID do ônibus associado à viagem
    private $motorista_id; // ID do motorista associado à viagem

    public function __construct($viagem_id, $data_viagem, $hora_inicio, $hora_termino, $onibus_id, $motorista_id) {
        $this->viagem_id = $viagem_id;
        $this->data_viagem = $data_viagem;
        $this->hora_inicio = $hora_inicio;
        $this->hora_termino = $hora_termino;
        $this->onibus_id = $onibus_id;
        $this->motorista_id = $motorista_id;
    }

    public function getViagemID() {
        return $this->viagem_id;
    }
    public function setViagemID($v) {
        $this->viagem_id = $v;
    }

    public function getDataViagem() {
        return $this->data_viagem;
    }
    public function setDataViagem($d) {
        $this->data_viagem = $d;
    }

    public function getHoraInicio() {
        return $this->hora_inicio;
    }
    public function setHoraInicio($h) {
        $this->hora_inicio = $h;
    }

    public function getHoraTermino() {
        return $this->hora_termino;
    }
    public function setHoraTermino($t) {
        $this->hora_termino = $t;
    }

    public function getOnibusID() {
        return $this->onibus_id;
    }
    public function setOnibusID($o) {
        $this->onibus_id = $o;
    }

    public function getMotoristaID() {
        return $this->motorista_id;
    }
    public function setMotoristaID($m) {
        $this->motorista_id = $m;
    }
}

?>
<?php

class ViagemDAO{
    public function create (Viagem $viagem){
        $sql = 'INSERT INTO viagem (viagem_id, data_viagem, hora_inicio, hora_termino, onibus_id, motorista_id) VALUES (?,?,?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $viagem->getViagemID());
        $stmt->bindValue(2, $viagem->getDataViagem());
        $stmt->bindValue(3, $viagem->getHoraInicio());
        $stmt->bindValue(4, $viagem->getHoraTermino());
        $stmt->bindValue(5, $viagem->getOnibusID());
        $stmt->bindValue(6, $viagem->getMotoristaID());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM viagem';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Viagem $viagem) {
        $sql = 'UPDATE viagem SET data_viagem = ?, hora_inicio = ?, hora_termino = ?, onius_id = ?, motorista_id = ? WHERE viagem_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $viagem->getDataViagem());
        $stmt->bindValue(2, $viagem->getHoraInicio());
        $stmt->bindValue(3, $viagem->getHoraTermino());
        $stmt->bindValue(4, $viagem->getOnibusID());
        $stmt->bindValue(5, $viagem->getMotoristaID());
        $stmt->bindValue(6, $viagem->getViagemID());

        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM viagem WHERE viagem_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
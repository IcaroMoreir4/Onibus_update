<?php

class OnibusDAO{

    public function create (Onibus $onibus){
        $sql = 'INSERT INTO onibus (onibus_id, placa, modelo, capacidade) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $onibus->getOnibusID());
        $stmt->bindValue(2, $onibus->getPlaca());
        $stmt->bindValue(3, $onibus->getModelo());
        $stmt->bindValue(4, $onibus->getCapacidade());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM onibus';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    
    public function update(Onibus $onibus) {
        $sql = 'UPDATE onibus SET placa = ?, modelo = ?, capacidade = ? WHERE onibus_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $onibus->getPlaca());
        $stmt->bindValue(2, $onibus->getModelo());
        $stmt->bindValue(3, $onibus->getCapacidade());
        $stmt->bindValue(4, $onibus->getOnibusID());

        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM onibus WHERE onibus_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
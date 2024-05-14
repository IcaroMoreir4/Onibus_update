<?php

class PassagemDAO{
    
    public function create (Passagem $passagem){
        $sql = 'INSERT INTO passagem (data_compra, valor, viagem_id, passageiro_id) VALUES (?, ?, ?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passagem->getDataCompra());
        $stmt->bindValue(2, $passagem->getValor());
        $stmt->bindValue(3, $passagem->getViagemID());
        $stmt->bindValue(4, $passagem->getPassageiroID());
    
        $result = $stmt->execute();
        
        if ($result) {
            return true;
        } else {
            echo "Erro ao criar passagem: " . $stmt->errorInfo()[2];
            return false;
        }
    }
    

    public function read(){
        $sql = 'SELECT * FROM passagem';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    
    public function update(Passagem $passagem) {
        $sql = 'UPDATE passagem SET data_compra = ?, valor = ?, viagem_id = ?, passageiro_id = ? WHERE passagem_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $passagem->getDataCompra());
        $stmt->bindValue(2, $passagem->getValor());
        $stmt->bindValue(3, $passagem->getViagemID());
        $stmt->bindValue(4, $passagem->getPassageiroID());
        $stmt->bindValue(5, $passagem->getPassagemID());

        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM passagem WHERE passagem_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
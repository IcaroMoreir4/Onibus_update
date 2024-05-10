<?php

class MotoristaDAO{

    public function create (Motorista $motorista){
        $sql = 'INSERT INTO motorista (motorista_id, nome, cpf, telefone) VALUES (?,?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $motorista->getMotoristaID());
        $stmt->bindValue(2, $motorista->getNome());
        $stmt->bindValue(3, $motorista->getCpf());
        $stmt->bindValue(4, $motorista->getTelefone());

        $stmt->execute();
    }

    public function read(){
        $sql = 'SELECT * FROM motorista';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    
    public function update(Motorista $motorista) {
        $sql = 'UPDATE motorista SET nome = ?, cpf = ?, telefone = ? WHERE motorista_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $motorista->getNome());
        $stmt->bindValue(2, $motorista->getCpf());
        $stmt->bindValue(3, $motorista->getTelefone());
        $stmt->bindValue(4, $motorista->getMotoristaID());


        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM motorista WHERE motorista_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
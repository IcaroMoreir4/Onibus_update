<?php

class PassageiroDAO{

    public function create(Passageiro $passageiro) {
        $sql = 'INSERT INTO passageiro (nome, CPF, telefone) VALUES (?, ?, ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $passageiro->getNome());
        $stmt->bindValue(2, $passageiro->getCpf());
        $stmt->bindValue(3, $passageiro->getTelefone());
    
        $stmt->execute();
    
        return Conexao::getConn()->lastInsertId(); // Retorna o ID inserido
    }    

    public function read(){
        $sql = 'SELECT * FROM passageiro';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
    
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    
    public function update(Passageiro $passageiro) {
        $sql = 'UPDATE passageiro SET nome = ?, CPF = ?, telefone = ? WHERE passageiro_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
    
        $stmt->bindValue(1, $passageiro->getNome());
        $stmt->bindValue(2, $passageiro->getCpf());
        $stmt->bindValue(3, $passageiro->getTelefone());
        $stmt->bindValue(4, $passageiro->getPassageiroID());

        $stmt->execute();
    }
    
    public function delete($id) {
        $sql = 'DELETE FROM passageiro WHERE passageiro_id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $id);

        $stmt->execute();
    }

}

?>
<?php
require_once 'bd/Conexao.php';

function buscarPassagensPorPassageiro($passageiro_id) {
    try {
        $conn = Conexao::getConn();
        $sql = "SELECT passageiro.nome, passagem.valor, passagem.data_compra, passageiro.CPF 
                FROM passagem 
                INNER JOIN passageiro ON passagem.passageiro_id = passageiro.passageiro_id 
                WHERE passageiro.passageiro_id = :passageiro_id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':passageiro_id', $passageiro_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        echo 'Erro: ' . $e->getMessage();
        return [];
    }
}
?>

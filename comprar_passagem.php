<?php

require_once 'php/Passageiro.php';
require_once 'php/Passagem.php';
require_once 'bd/PassageiroDAO.php';
require_once 'bd/PassagemDAO.php';
require_once 'bd/Conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["CPF"];
    $telefone = $_POST["telefone"];
    $data_compra = $_POST['data_compra'];
    $opcaoValor = $_POST["opcaoValor"];

    $valorPassagem = ($opcaoValor === "a-b") ? 10 : (($opcaoValor === "a-c") ? 20 : 0);

    $conn = Conexao::getConn();

    $passageiro = new Passageiro('', $nome, $cpf, $telefone);

    $passageiroDAO = new PassageiroDAO();
    $passageiroId = $passageiroDAO->create($passageiro);

    if ($passageiroId) {
        $passagem = new Passagem('', $data_compra, $valorPassagem, null, $passageiroId);

        $passagemDAO = new PassagemDAO();
        $passagemId = $passagemDAO->create($passagem);

        if ($passagemId) {
            header("Location: comprada.php?id=$passageiroId");
            exit();
        } else {
            header("Location: erro.php");
            exit();
        }
    } else {
        header("Location: erro.php");
        exit();
    }
}

?>

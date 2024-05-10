<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!empty($_POST['nome']) && !empty($_POST['cpf']) && !empty($_POST['telefone']) && !empty($_POST['viagem'])) {

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];

        $viagem = $_POST['viagem'];
        $valor = 0; 
        if ($viagem == 'a-b') {
            $valor = 10; 
        } elseif ($viagem == 'a-c') {
            $valor = 20; 
        }

        $passagem = new Passagem(null, date('Y-m-d'), $valor, $viagem_id, $passageiro_id);
        $passagemDAO = new PassagemDAO();
        $passagemDAO->create($passagem);

        header("Location: ../comprada.html");
        exit;
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}
?>

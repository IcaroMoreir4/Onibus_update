<?php

require_once 'Passageiro.php';
require_once 'Passagem.php';
require_once 'bd/PassagemDAO.php';
require_once 'bd/PassageiroDAO.php';
require_once 'bd/Conexao.php';


// Verifique se os dados do formulário foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verifique se todos os campos estão preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['CPF']) && !empty($_POST['telefone']) && !empty($_POST['viagem'])) {
        // Crie uma instância de Passageiro com os dados do formulário
        $passageiro = new Passageiro('', $_POST['nome'], $_POST['CPF'], $_POST['telefone']);
        
        // Crie uma instância do DAO de Passageiro e crie o passageiro no banco de dados
        // Crie uma instância do DAO de Passageiro e crie o passageiro no banco de dados
        $passageiroDAO = new PassageiroDAO();
        $passageiro = $passageiroDAO->create($passageiro); // Obtenha o ID do passageiro recém-criado

        // Obtenha o ID do passageiro recém-criado
        $passageiro = Conexao::getConn()->lastInsertId();

        // Crie uma instância de Passagem associada ao passageiro e salve no banco de dados
        $viagem = $_POST['viagem'];
        $valor = ($viagem == 'a-b') ? 10 : 20; // Valor baseado na viagem

        $passagem = new Passagem('', date('Y-m-d'), $valor, $viagem_id, $passageiro_id);
        $passagemDAO = new PassagemDAO();
        $passagemDAO->create($passagem);

        // Redirecione para a página de passagem comprada
        header("Location: ../comprada.html");
        exit;
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}

?>

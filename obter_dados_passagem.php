<?php
require_once 'bd/PassagemDAO.php';
require_once 'bd/PassageiroDAO.php';

// Verifica se o ID da passagem foi enviado via GET
if (isset($_GET['id'])) {
    $passagemId = $_GET['id'];

    // Cria uma instância do PassagemDAO
    $passagemDAO = new PassagemDAO();
    $passagem = $passagemDAO->readPassagemById($passagemId);

    // Verifica se a passagem foi encontrada
    if ($passagem) {
        // Obtém o ID do passageiro associado à passagem
        $passageiroId = $passagem['passageiro_id'];

        // Cria uma instância do PassageiroDAO
        $passageiroDAO = new PassageiroDAO();
        $passageiro = $passageiroDAO->readPassageiroById($passageiroId);

        // Verifica se o passageiro foi encontrado
        if ($passageiro) {
            // Monta os dados em um array para retornar em JSON
            $data = array(
                'nome_passageiro' => $passageiro['nome'],
                'data_compra' => $passagem['data_compra'],
                'valor_passagem' => $passagem['valor']
            );

            // Responde com os dados em formato JSON
            header('Content-Type: application/json');
            echo json_encode($data);
        } else {
            // Se o passageiro não foi encontrado, retorna um erro em JSON
            header('Content-Type: application/json');
            echo json_encode(array('error' => 'Passageiro não encontrado'));
        }
    } else {
        // Se a passagem não foi encontrada, retorna um erro em JSON
        header('Content-Type: application/json');
        echo json_encode(array('error' => 'Passagem não encontrada'));
    }
} else {
    // Se o ID da passagem não foi enviado, retorna um erro em JSON
    header('Content-Type: application/json');
    echo json_encode(array('error' => 'ID da passagem não fornecido'));
}
?>

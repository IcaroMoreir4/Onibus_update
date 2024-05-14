<?php
require_once 'bd/Conexao.php';
require_once 'obter_dados_passagem.php';

if (isset($_GET['id'])) {
    $passageiroId = $_GET['id'];

    $dados = buscarPassagensPorPassageiro($passageiroId);

    if (!$dados) {
        echo "Dados da passagem não encontrados.";
        exit;
    }
} else {
    echo "ID do passageiro não fornecido.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Passagem</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="body-passagem">
    <div class="passagem-info">
        <h1>Detalhes da Passagem</h1>
        <div>
            <p><strong>Nome:</strong> <span id="nomePassageiro"><?php echo htmlspecialchars($dados['nome']); ?></span></p>
            <p><strong>Data:</strong> <span id="dataCompra"><?php echo htmlspecialchars($dados['data_compra']); ?></span></p>
            <p><strong>Valor:</strong> <span id="valorPassagem"><?php echo htmlspecialchars($dados['valor']); ?></span></p>
            <p><strong>CPF:</strong> <span id="cpfPassageiro"><?php echo htmlspecialchars($dados['CPF']); ?></span></p>
        </div>
        <button class="print-button" onclick="window.print()">Imprimir</button>
    </div>
</body>
</html>

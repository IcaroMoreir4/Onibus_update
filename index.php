<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra de Passagem</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body class="body-index">
    <div class="passagem-bg">
        <h1>Compra de Passagem</h1>
        <form class="compra_form" id="compraForm" action="comprar_passagem.php" method="POST">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
            <label for="CPF">CPF</label>
            <input type="text" id="CPF" name="CPF" required>
            <label for="telefone">Telefone</label>
            <input type="text" id="telefone" name="telefone" required>
            <label for="data_compra">Data de Compra</label>
            <input type="date" id="data_compra" name="data_compra" required>
            <label for="opcaoValor">Viagem</label>
            <select id="opcaoValor" name="opcaoValor" required>
                <option value="a-b">De A para B (R$10,00)</option>
                <option value="a-c">De A para C (R$20,00)</option>
            </select>
            <button type="submit" id="comprarButton">Comprar Passagem</button>
        </form>
    </div>
</body>
</html>
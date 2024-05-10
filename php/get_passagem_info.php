<?php

require_once('./Passagem.php');

echo "<p>Informações da Passagem:</p>";
echo "<p>Data da Compra: " . $passagemInfo['data_compra'] . "</p>";
echo "<p>Valor: R$ " . $passagemInfo['valor'] . "</p>";
echo "<p>Viagem: " . $passagemInfo['viagem'] . "</p>";

?>

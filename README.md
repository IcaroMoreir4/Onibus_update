# Sistema de Companhia de Ônibus

Este é um projeto de um sistema de compra de passagens de ônibus desenvolvido como parte da matéria de Desenvolvimento Web BackEnd na universidade UniFAP, ministrada pelo Professor Jhon. O projeto foi desenvolvido por Ícaro Moreira.

## Funcionalidades

- Cadastro de passageiros.
- Compra de passagens.
- Visualização dos detalhes da passagem comprada.
- Impressão das passagens compradas.

## Configuração do Banco de Dados

O projeto utiliza MySQL como banco de dados.

## Uso

### Página Inicial

A página inicial (`index.php`) contém um formulário para a compra de passagens. O formulário coleta informações do passageiro como nome, CPF, telefone, data da compra e a opção de viagem.

### Compra de Passagem

O formulário envia os dados para o script `comprar_passagem.php`, que processa a compra da passagem, cria um registro do passageiro e da passagem no banco de dados, e redireciona para a página de detalhes da passagem (`comprada.php`).

### Visualização da Passagem

A página `comprada.php` exibe os detalhes da passagem comprada, incluindo o nome do passageiro, data da compra, valor e CPF. Também há um botão para imprimir a passagem.

## Estilos

Os estilos CSS estão definidos no arquivo `style.css`, incluindo estilos para os formulários e para a exibição dos detalhes da passagem.

## Contribuições

Contribuições são bem-vindas. Sinta-se à vontade para fazer um fork do repositório e enviar pull requests.

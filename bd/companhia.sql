SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `motorista` (
  `motorista_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `onibus` (
  `onibus_id` int(11) NOT NULL,
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `capacidade` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `passageiro` (
  `passageiro_id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `passagem` (
  `passagem_id` int(11) NOT NULL,
  `data_compra` date DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `viagem_id` int(11) DEFAULT NULL,
  `passageiro_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `motorista`
  ADD PRIMARY KEY (`motorista_id`),
  ADD UNIQUE KEY `CPF` (`CPF`);

ALTER TABLE `onibus`
  ADD PRIMARY KEY (`onibus_id`);

ALTER TABLE `passageiro`
  ADD PRIMARY KEY (`passageiro_id`),
  ADD UNIQUE KEY `CPF` (`CPF`);

ALTER TABLE `passagem`
  ADD PRIMARY KEY (`passagem_id`),
  ADD KEY `viagem_id` (`viagem_id`),
  ADD KEY `passageiro_id` (`passageiro_id`);

ALTER TABLE `motorista`
  MODIFY `motorista_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `onibus`
  MODIFY `onibus_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `passageiro`
  MODIFY `passageiro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

ALTER TABLE `passagem`
  MODIFY `passagem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `passagem`
  ADD CONSTRAINT `passagem_ibfk_1` FOREIGN KEY (`viagem_id`) REFERENCES `viagem` (`viagem_id`),
  ADD CONSTRAINT `passagem_ibfk_2` FOREIGN KEY (`passageiro_id`) REFERENCES `passageiro` (`passageiro_id`);
COMMIT;

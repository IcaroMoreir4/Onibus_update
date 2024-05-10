SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `motorista` (
  `motorista_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`motorista_id`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `onibus` (
  `onibus_id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(8) NOT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `capacidade` int(20) DEFAULT NULL,
  PRIMARY KEY (`onibus_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `passageiro` (
  `passageiro_id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `CPF` varchar(14) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  PRIMARY KEY (`passageiro_id`),
  UNIQUE KEY `CPF` (`CPF`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `viagem` (
  `viagem_id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `hora_inicio` time DEFAULT NULL,
  `hora_termino` time DEFAULT NULL,
  `onibus_id` int(11) DEFAULT NULL,
  `motorista_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`viagem_id`),
  KEY `onibus_id` (`onibus_id`),
  KEY `motorista_id` (`motorista_id`),
  CONSTRAINT `viagem_ibfk_1` FOREIGN KEY (`onibus_id`) REFERENCES `onibus` (`onibus_id`),
  CONSTRAINT `viagem_ibfk_2` FOREIGN KEY (`motorista_id`) REFERENCES `motorista` (`motorista_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `passagem` (
  `passagem_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_compra` date DEFAULT NULL,
  `valor` int(11) DEFAULT NULL,
  `viagem_id` int(11) DEFAULT NULL,
  `passageiro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`passagem_id`),
  KEY `viagem_id` (`viagem_id`),
  KEY `passageiro_id` (`passageiro_id`),
  CONSTRAINT `passagem_ibfk_1` FOREIGN KEY (`viagem_id`) REFERENCES `viagem` (`viagem_id`),
  CONSTRAINT `passagem_ibfk_2` FOREIGN KEY (`passageiro_id`) REFERENCES `passageiro` (`passageiro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

COMMIT;

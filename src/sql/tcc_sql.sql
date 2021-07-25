-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para restaurante
CREATE DATABASE IF NOT EXISTS `restaurante` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `restaurante`;

-- Copiando estrutura para tabela restaurante.caixa
CREATE TABLE IF NOT EXISTS `caixa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `sabor` varchar(60) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `valor` decimal(10,2) DEFAULT NULL,
  `base` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `qntd` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela restaurante.caixa: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `caixa` DISABLE KEYS */;
/*!40000 ALTER TABLE `caixa` ENABLE KEYS */;

-- Copiando estrutura para tabela restaurante.cozinha
CREATE TABLE IF NOT EXISTS `cozinha` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `sabor` varchar(60) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `base` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `qntd` int(30) DEFAULT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela restaurante.cozinha: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `cozinha` DISABLE KEYS */;
/*!40000 ALTER TABLE `cozinha` ENABLE KEYS */;

-- Copiando estrutura para tabela restaurante.funcionarios
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `user` varchar(50) DEFAULT NULL,
  `id` varchar(50) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Copiando dados para a tabela restaurante.funcionarios: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
INSERT INTO `funcionarios` (`user`, `id`, `senha`) VALUES
	('cozinha', 'Cozinha', '123'),
	('caixa', 'Caixa', '123'),
	('garcom', 'Garcom', '123'),
	('gerente', 'Gerencia', '123');
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;

-- Copiando estrutura para tabela restaurante.garcom
CREATE TABLE IF NOT EXISTS `garcom` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `sabor` varchar(60) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `base` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela restaurante.garcom: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `garcom` DISABLE KEYS */;
/*!40000 ALTER TABLE `garcom` ENABLE KEYS */;

-- Copiando estrutura para tabela restaurante.pedidos
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `sabor` varchar(60) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `valor` decimal(10,2) DEFAULT NULL,
  `base` varchar(50) COLLATE utf8_bin DEFAULT 'Nenhum' COMMENT 'Nenhum',
  `qntd` int(30) DEFAULT NULL,
  `hora` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Copiando dados para a tabela restaurante.pedidos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `pedidos` DISABLE KEYS */;
/*!40000 ALTER TABLE `pedidos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

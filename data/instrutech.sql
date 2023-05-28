-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/05/2023 às 20:23
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `instrutech`
--
CREATE DATABASE IF NOT EXISTS instrutech;
USE instrutech;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` int(11) AUTO_INCREMENT NOT NULL,
  `nome` varchar(70) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `num` varchar(25) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`idcliente`),
  `senha` varchar(255) NOT NULL,
  created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE IF NOT EXISTS `funcionario` (
  `idfuncionario` int(11) AUTO_INCREMENT NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(8) NOT NULL,
  PRIMARY KEY (`idfuncionario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) AUTO_INCREMENT NOT NULL,
  `data` date NOT NULL,
  `valortotal` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idcliente` (`idcliente`),
  KEY `idfuncionario` (`idfuncionario`),
  KEY `idproduto` (`idproduto`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`),
  CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) AUTO_INCREMENT NOT NULL,
  `foto` longtext NOT NULL,
  `nome` varchar(35) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `marca` varchar(35) NOT NULL,
  `valor` int(11) NOT NULL,
  `estado` enum('novo','usado') NOT NULL,
  `tipo` enum('venda','aluguel') NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- CREATE OR REPLACE TABLE login(
--     id int PRIMARY KEY AUTO_INCREMENT,
--     email varchar(250) NOT NULL unique,
--     senha varchar(255) NOT NULL,
--     created_at TIMESTAMP NOT NULL default CURRENT_TIMESTAMP
-- ) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- INSERT INTO login(email, senha) VALUES ('admin@instrutech.com', md5('admin@123'));

INSERT INTO cliente (nome, cep, endereco, num, bairro, cidade, estado, email, senha) 
            VALUES ('Marcus Vinicius', 123456789,  "Rua B. de Jaceguai", 0, "Ponta d'Areia", 'Niterói', 'RJ', 'mv@email.com', md5(12345678));
INSERT INTO cliente (nome, cep, endereco, num, bairro, cidade, estado, email, senha) 
            VALUES ('Gabigol', 987654321,  "Rua da Artilharia", 9, "Leblon", 'Rio de Janeiro', 'RJ', 'lilgabi@mengo.com', md5(12345678));
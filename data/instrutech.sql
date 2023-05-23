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

CREATE OR REPLACE TABLE `cliente` (
  `idcliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `endereco` varchar(40) NOT NULL,
  `num` varchar(25) NOT NULL,
  `bairro` varchar(25) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE OR REPLACE TABLE `funcionario` (
  `idfuncionario` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `cargo` varchar(25) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE OR REPLACE TABLE `pedido` (
  `idpedido` int(11) NOT NULL,
  `data` date NOT NULL,
  `valortotal` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idfuncionario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE OR REPLACE TABLE `produto` (
  `idproduto` int(11) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `marca` varchar(35) NOT NULL,
  `valor` int(11) NOT NULL,
  `nome` varchar(35) NOT NULL,
  `estado` enum('novo','usado') NOT NULL,
  `tipo` enum('venda','aluguel') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`idcliente`);

--
-- Índices de tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`idfuncionario`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`idpedido`),
  ADD KEY `idcliente` (`idcliente`),
  ADD KEY `idfuncionario` (`idfuncionario`),
  ADD KEY `idproduto` (`idproduto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idproduto`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  ADD CONSTRAINT `pedido_ibfk_2` FOREIGN KEY (`idfuncionario`) REFERENCES `funcionario` (`idfuncionario`),
  ADD CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

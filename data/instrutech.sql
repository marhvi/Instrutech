-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/05/2023 às 20:23
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.0.28

DROP DATABASE instrutech;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

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
  `estado` enum('AC', 'AL', 'AP', 'AM', 'BA', 'CE', 'DF', 'ES', 'GO', 'MA', 'MT', 'MS', 'MG', 'PA', 'PB', 'PR', 'PE', 'PI', 'RJ', 'RN', 'RS', 'RO', 'RR', 'SC', 'SP', 'SE', 'TO') NOT NULL,
  `email` varchar(20) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `privilegio` enum('compra', 'venda', 'admin') NOT NULL DEFAULT 'compra',
  created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) AUTO_INCREMENT NOT NULL,
  `foto` longtext NOT NULL,
  `nome` varchar(35) NOT NULL,
  `descricao` varchar(255)  NOT NULL,
  `marca` varchar(35) NOT NULL,
  `valor` int(11) NOT NULL,
  `estado` enum('novo','usado') NOT NULL,
  `tipo` enum('venda','aluguel') NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE IF NOT EXISTS `pedido` (
  `idpedido` int(11) AUTO_INCREMENT NOT NULL,
  `datapedido` date NOT NULL,
  `valortotal` int(11) NOT NULL,
  `idproduto` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  PRIMARY KEY (`idpedido`),
  KEY `idcliente` (`idcliente`),
  KEY `idproduto` (`idproduto`),
  CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `cliente` (`idcliente`),
  CONSTRAINT `pedido_ibfk_3` FOREIGN KEY (`idproduto`) REFERENCES `produto` (`idproduto`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

DELETE FROM `cliente`;
DELETE FROM `produto`;

ALTER TABLE `cliente` AUTO_INCREMENT = 1;

INSERT INTO cliente ( nome, cep, endereco, num, bairro, cidade, estado, email, senha, privilegio) 
            VALUES ('Marcus Vinicius', 123456789,  "Rua B. de Jaceguai", 0, "Ponta d'Areia", 'Niteroi', 'RJ', 'mv@email.com', md5(12345678), 'admin');
INSERT INTO cliente (nome, cep, endereco, num, bairro, cidade, estado, email, senha, privilegio) 
            VALUES ('Gabigol', 987654321,  "Rua da Artilharia", 9, "Leblon", 'Rio de Janeiro', 'RJ', 'lilgabi@mengo.com', md5(12345678), 'compra');

ALTER TABLE `produto` AUTO_INCREMENT = 1;

INSERT INTO produto (foto, nome, descricao, marca, valor, estado, tipo) 
VALUES 
('https://www.gov.br/funai/pt-br/assuntos/noticias/2022-02/cultura-saiba-mais-sobre-o-maraca-instrumento-musical-indigena/chocalhos_karaja.jpg/@@images/d7d6f961-6174-4b85-8cb1-e361a98f2dee.jpeg', 'Chocalho Maraca', "O maracá é um dos instrumentos musicais indígenas mais conhecidos, sendo seu nome muitas vezes utilizado como uma designação genérica para chocalhos. Consiste numa cabaça seca e oca com pequenas pedras, caroços ou sementes em seu interior, colocada na extremidade de um bastão, normalmente feito de madeira.", "Funai", "1000", 'usado', 'venda'), 
('https://media.istockphoto.com/id/520688715/pt/foto/saxofone-alto-vista-lateral-em-fundo-branco.jpg?s=1024x1024&w=is&k=20&c=DeSHOTVRZRN47Dli7ZHySDn0iaPlRssbzF2u1rxFsTs=', "Saxofone", "O saxofone é um instrumento de sopro da família das madeiras que, curiosamente, ao contrário de todos os outros instrumentos desta família, nunca foi construído com este material. Fabricado em metal, possui um longo tubo com uma curvatura e se utiliza de uma palheta simples. Não faz parte dos instrumentos da orquestra, mas por possuir um som potente, foi adotado em bandas militares e em grupos populares, especialmente os de jazz.", "Yamaha", '750', 'novo', 'aluguel');
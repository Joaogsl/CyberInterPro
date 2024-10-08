-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Nov-2022 às 14:25
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26
drop database cyberinterpro;
create database cyberinterpro;
use cyberinterpro;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cyberinterpro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbcertificado`
--

DROP TABLE IF EXISTS `tbcertificado`;
CREATE TABLE IF NOT EXISTS `tbcertificado` (
  `certificadoid` int(11) NOT NULL AUTO_INCREMENT,
  `padrao` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` char(9) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_emissao` date DEFAULT NULL,
  `data_validade` date DEFAULT NULL,
  `certificadopdf` mediumblob,
  PRIMARY KEY (`certificadoid`,`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbcertificado`
--

INSERT INTO `tbcertificado` (`certificadoid`, `padrao`, `nome`, `cpf`, `senha`, `data_emissao`, `data_validade`, `certificadopdf`) VALUES
(1, 'Fisico', 'Danilo', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1', '2022-07-03', '2025-07-03', NULL),
(2, 'Juridico', 'Cyberinterpro', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1', '2022-10-13', '2025-10-13', NULL),
(3, 'Fisico', 'Joao', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1', '2022-11-21', '2025-11-21', NULL),
(4, 'Fisico', 'Nicolly', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1', '2022-11-24', '2025-11-24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

DROP TABLE IF EXISTS `tbusuario`;
CREATE TABLE IF NOT EXISTS `tbusuario` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(45) NOT NULL,
  `email` varchar(60) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`userid`, `usuario`, `email`, `telefone`, `cpf`, `senha`) VALUES
(1, 'danilo', 'danilo@gmail.com', '11963122166', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1'),
(6, 'Joao', 'joao.silva@gmail.com', '11963122165', '12345678', '61bd60c60d9fb60cc8fc7767669d40a1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

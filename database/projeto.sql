-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 03-Out-2021 às 17:39
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE IF NOT EXISTS `projeto` (
  `ID` int(5) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(55) NOT NULL,
  `DESCRICAO` text NOT NULL,
  `PRECO` varchar(55) NOT NULL,
  `DATA_CADASTRO` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `projeto`
--

INSERT INTO `projeto` (`ID`, `NOME`, `DESCRICAO`, `PRECO`, `DATA_CADASTRO`) VALUES
(9, 'smarthpone', '1.999,88', 'Smartphone Motorola', '2021-10-03 13:00:00'),
(10, 'smarthpone', '1.999,88', 'Smartphone Motorola', '2021-10-03 13:00:00'),
(11, 'smarthpone', '1.999,88', 'Smartphone Motorola', '2021-10-03 13:00:00'),
(12, 'smarthpone', '1.999,88', '', '2021-10-03 13:05:00'),
(13, 'smarthpone', '1.999,88', '', '2021-10-03 13:05:00'),
(14, 'smarthpone', '1.999,88', 'Smartphone Sansung', '2021-10-03 13:05:00'),
(15, 'smarthpone', '2.333,12', 'Smartphone Sansung Galaxy S3', '2021-10-03 13:08:00'),
(16, 'smarthpone', '2.333,12', 'Smartphone Sansung Galaxy S35', '2021-10-03 13:08:00'),
(17, 'Computador Dell', '3.000,00', 'Desktop Dell com Intel Core 5 6GB de RAM', '2021-10-03 14:34:00'),
(18, 'Computador Dell', '3.000,00', 'Desktop Dell com Intel Core 7 6GB de RAM com SSD', '2021-10-03 14:35:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

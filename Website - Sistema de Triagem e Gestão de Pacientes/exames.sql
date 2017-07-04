-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2016 às 09:24
-- Versão do servidor: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `triafct`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `exames`
--

CREATE TABLE `exames` (
  `nif` int(11) NOT NULL,
  `sintomas` text NOT NULL,
  `infopaciente` text NOT NULL,
  `causas` text NOT NULL,
  `med` text NOT NULL,
  `medcom` text NOT NULL,
  `consultemp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `exames`
--

INSERT INTO `exames` (`nif`, `sintomas`, `infopaciente`, `causas`, `med`, `medcom`, `consultemp`) VALUES
(434343, 'reerrere', 'rereee', 'rereer', 'eer', 'errre', '2016-12-14 00:00:00'),
(144, 'assasasssa', 'sasassasas', 'asassasasas', '44', 'asasasass', '2016-12-15 03:32:59'),
(144, 'assasasssa', 'sasassasas', 'asassasasas', '44', 'asasasass', '2016-12-15 03:33:08'),
(144, 'assasasssa', 'sasassasas', 'asassasasas', 'ssaasaas', 'asasasass', '2016-12-15 03:33:36'),
(144, 'qwwqqw', 'wwqwqwqw', 'qwwqwqwqw', 'wqqwqwqw', 'wqwqqww', '2016-12-15 03:33:46'),
(144, 'qwwqqw', 'wwqwqwqw', 'qwwqwqwqw', 'wqqwqwqw', 'wqwqqww', '2016-12-15 03:35:02'),
(434343, 'asdasda', 'asdasda', 'asdasd', 'asdasd', 'asdasd', '2016-12-11 00:00:00'),
(434343, 'asdasd', 'asdasdaa', 'asdasdasasasdasdas', 'asdasd', 'asdas', '2016-12-01 00:00:00'),
(234234234, 'dasds', 'asdas', 'asdas', 'asdas', 'asdas', '2016-12-01 00:00:00'),
(234234234, 'dadas', 'asdasdaa', 'dada', 'adasas', 'asdasd', '2016-12-02 00:00:00'),
(232694427, 'asdasdas', 'asdasd', 'asdasda', 'asdasdasd', 'asdasdasda', '2016-12-14 00:00:00'),
(232694427, 'asdasd', 'dasdasd', 'dasdasd', 'dasdas', 'dasdasd', '2016-12-15 05:12:23'),
(258456951, 'qwwqwqqw', 'wqwqwqwqwq', 'qwwqqwqwqwq', 'qwqwqwwqqw', 'wqqwqwqwqwqw', '2016-12-15 05:52:17'),
(12131231, 'ewadasdasdasdasdasd', 'dadasdadadasd', 'dasdasdasdasd', 'dadasdasdasdas', 'dasdasdadadas', '2016-12-15 06:07:02'),
(232694427, 'asdasdasdas', 'adasdasdasda', 'dasdasdasda', 'adadasdasdas', 'dadasdadasdas', '2016-12-15 06:36:04');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

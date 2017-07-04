-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15-Dez-2016 às 09:25
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
-- Estrutura da tabela `utilizadores`
--

CREATE TABLE `utilizadores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `morada` varchar(400) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `privilegio` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`id`, `nome`, `morada`, `contacto`, `username`, `password`, `privilegio`) VALUES
(28, ' tiago', ' rua das couves', ' 252698745', ' tdoliveira', ' vfqxewu', 3),
(29, '       Tiago Oliveira', 'dasd', 'asdas', 'asdas', 'asdas', 2),
(34, '       Tiago Oliveira', 'asdasd', 'asdasd', 'asdasd', 'asdas', 4),
(35, '       Tiago Oliveira', 'asdasd', 'asdasd', 'asdasd', 'asdas', 4),
(37, 'asdasd', 'asdasda', 'asdasd', 'asdasd', 'asdadsa', 2),
(40, '1', '1', '1', 'enf', 'enf', 2),
(41, '  3', '  3', '  3', '  med', '  med', 3),
(42, '    ricardo', '    1', '    1', 'admin', 'admin', 4),
(44, ' 2', ' 2', '   25333333', ' 2', ' 2', 2),
(45, '  3', '  3', '  3', '  3', '  3', 4),
(47, 'dsadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2),
(48, 'dsadasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 2),
(50, 'Tiago', 'daskdasjkl', 'askldaskd', 'id2', 'id2', 2),
(51, 'ricardo', 'adjasdklas', 'asdklasdklasd', 'id3', 'id3', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `utilizadores`
--
ALTER TABLE `utilizadores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `utilizadores`
--
ALTER TABLE `utilizadores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

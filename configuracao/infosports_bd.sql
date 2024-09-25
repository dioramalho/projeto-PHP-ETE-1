-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2024 às 00:56
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infosports_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `imc_tb`
--

CREATE TABLE `imc_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `peso` int(11) NOT NULL,
  `altura` float NOT NULL,
  `imc` float NOT NULL,
  `classificacao` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `imc_tb`
--

INSERT INTO `imc_tb` (`id`, `nome`, `email`, `peso`, `altura`, `imc`, `classificacao`, `dataRegistro`) VALUES
(1, 'Diogo Ramalho', 'dioramalho@gmail.com', 146, 1.87, 41.75, 'Obesidade grau 3 ou morbida', '2024-09-24 20:35:57'),
(2, 'Ronald', 'ronald@gmail.com', 80, 1.74, 26.42, 'Sobre Peso', '2024-09-24 21:07:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imc_tb`
--
ALTER TABLE `imc_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imc_tb`
--
ALTER TABLE `imc_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

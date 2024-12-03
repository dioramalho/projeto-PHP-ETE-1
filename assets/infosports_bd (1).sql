-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Dez-2024 às 00:58
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
-- Estrutura da tabela `categoria_tb`
--

CREATE TABLE `categoria_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categoria_tb`
--

INSERT INTO `categoria_tb` (`id`, `nome`, `dataRegistro`) VALUES
(1, 'Esportes', '2024-11-11 00:00:00'),
(2, 'Geral', '2024-11-11 19:51:07'),
(3, 'Politica', '2024-11-11 21:05:52');

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato_tb`
--

CREATE TABLE `contato_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `sobrenome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `mensagem` text NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `contato_tb`
--

INSERT INTO `contato_tb` (`id`, `nome`, `sobrenome`, `email`, `telefone`, `mensagem`, `dataRegistro`) VALUES
(4, 'Diogo', 'Ramalho', 'dioramalho@gmail.com', '12345678912', 'bbb', '2024-09-27 21:01:44'),
(5, 'Diogo', 'Ramalho', 'dioramalho@gmail.com', '12345678912', 'bbb', '2024-09-30 19:30:14'),
(6, 'Diogo', 'Ramalho', 'dioramalho@gmail.com', '12345678912', 'bbb', '2024-09-30 19:31:02'),
(7, 'LA LA LA', 'aaa', 'ronald@gmail.com', '12345678912', 'adasdasd', '2024-11-25 20:08:44');

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
(3, 'Diogo', 'dioramalho@gmail.com', 145, 1.87, 41.47, 'Obesidade grau 3 ou morbida', '2024-09-27 21:00:06');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia_tb`
--

CREATE TABLE `noticia_tb` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descricao` longtext NOT NULL,
  `img` varchar(255) NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia_tb`
--

INSERT INTO `noticia_tb` (`id`, `titulo`, `descricao`, `img`, `categoria_id`, `dataRegistro`) VALUES
(1, 'tenis', 'descricao', 'boxe.jpg', 1, '2024-10-10 20:07:33'),
(2, 'Box total', 'descricao asdasdas lajbdljasbdjlasbd slbdjljasbljasbd alskdblsbdlsd', 'boxe.jpg', 1, '2024-10-10 20:07:33'),
(3, 'judo muito bom', 'descricao box asdasdas lajbdljasbdjlasbd slbdjljasbljasbd alskdblsbdlsd', 'boxe.jpg', 1, '2024-10-10 20:07:33'),
(4, 'teste titulo4 box', 'descricao box asdasdas lajbdljasbdjlasbd slbdjljasbljasbd alskdblsbdlsd', 'boxe.jpg', 1, '2024-10-10 20:07:33'),
(5, 'teste titulo', 'descricao de praia praia asdasdas lajbdljasbdjlasbd slbdjljasbljasbd alskdblsbdlsd', 'boxe.jpg', 1, '2024-10-10 20:07:33'),
(6, 'noticia teste 2', 'aaaaaaaaaaaa', '2024111906:25-35pm26217', 0, '2024-11-19 18:25:35'),
(7, 'teste titulo 2', 'casa aaaaaaaaaaaaaaaaa', '2024111906:33-08pm18670', 0, '2024-11-19 18:33:08'),
(8, 'teste titulo 3', 'livro ooooooooooooooo', '2024111906:36-17pm18631', 0, '2024-11-19 18:36:17'),
(9, 'cccc', 'cccccccccc', '2024111906:38-24pm21702', 0, '2024-11-19 18:38:24'),
(10, 'aaaaa2', 'aaaaa', '81G7GJsELbL._AC_UF1000,1000_QL80_.jpg', 0, '2024-11-19 18:46:51'),
(11, 'zzzz', 'zzzz', '2024111906:54-32pm17433', 0, '2024-11-19 18:54:32'),
(12, 'xxxxx', 'aaaaxxx', '2024111907:02-29pm8150', 0, '2024-11-19 19:02:29'),
(13, 'xxxxx', 'aaaaxxx', '2024111907:03-43pm1530', 0, '2024-11-19 19:03:43'),
(14, 'zzzxxx', 'tttttt', '2024111907:04-14pm29271', 0, '2024-11-19 19:04:14'),
(15, 'bla bla', 'assads', 'napoleon-hill-livros.jpg', 0, '2024-11-19 19:40:05'),
(16, 'aaaaaaaqqq', 'qqqqqqqq', 'Uma meta é um sonho com um prazo. (4).png', 0, '2024-11-19 20:41:16'),
(17, 'ytttt', 'yyyy', '2.png', 0, '2024-11-19 20:57:43'),
(18, 'aaaaaaaaaaaaaaa', 'aaaaaabbb', 'Captura de tela 2024-10-30 195544.png', 0, '2024-11-25 20:09:19');

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro_tb`
--

CREATE TABLE `registro_tb` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` longtext NOT NULL,
  `dataRegistro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registro_tb`
--

INSERT INTO `registro_tb` (`id`, `nome`, `email`, `telefone`, `login`, `senha`, `dataRegistro`) VALUES
(8, 'Ronald', 'ronald@gmail.com', '12345678912', '', '', '2024-09-27 21:01:01'),
(11, 'José', 'jose@ete.com', '12345678912', 'jj', 'MTIzNDU2', '2024-09-30 19:56:42'),
(12, 'José', 'jose@ete.com', '12345678912', 'jj', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-09-30 20:12:50'),
(14, 'Ronald', 'ronald@gmail.com', '12345678912', 'rr', '7c4a8d09ca3762af61e59520943dc26494f8941b', '2024-09-30 20:13:57'),
(16, 'Diogo Novo', 'diogo.novo@gmail.com.br', '12345678912', 'dioramalho', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-10-10 19:38:57'),
(17, 'LA LA LA', 'lala@gmail.com', '11111111111', 'la', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-11-25 20:08:01'),
(18, 'jjjjj', 'jj@gmail.com', '12345678912', 'jj', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-11-25 20:41:22'),
(19, 'AVAVAV', 'avav@gmail.com', '12345678912', 'av', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-11-26 20:32:13'),
(20, 'azazazaz', 'AZ@gmeil.com', '12345678912', 'az', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '2024-11-26 20:43:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria_tb`
--
ALTER TABLE `categoria_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato_tb`
--
ALTER TABLE `contato_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `imc_tb`
--
ALTER TABLE `imc_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticia_tb`
--
ALTER TABLE `noticia_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registro_tb`
--
ALTER TABLE `registro_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categoria_tb`
--
ALTER TABLE `categoria_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contato_tb`
--
ALTER TABLE `contato_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `imc_tb`
--
ALTER TABLE `imc_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `noticia_tb`
--
ALTER TABLE `noticia_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `registro_tb`
--
ALTER TABLE `registro_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

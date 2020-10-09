-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Out-2020 às 03:53
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petshop`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `hora` varchar(40) NOT NULL,
  `servico` varchar(200) NOT NULL,
  `animal` varchar(200) NOT NULL,
  `anotacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id`, `data`, `hora`, `servico`, `animal`, `anotacao`) VALUES
(13, '2020-10-15', '11:00', 'Banho', 'Nevaska', '\"\"'),
(14, '2020-10-08', '08:00', 'Tosa', 'Morgana', '\"\"');

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

CREATE TABLE `animais` (
  `id` int(11) NOT NULL,
  `cliente` varchar(200) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `especie` varchar(100) NOT NULL,
  `raca` varchar(100) NOT NULL,
  `porte` varchar(20) NOT NULL,
  `nascimento` date NOT NULL,
  `castrado` varchar(20) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `imagem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animais`
--

INSERT INTO `animais` (`id`, `cliente`, `nome`, `especie`, `raca`, `porte`, `nascimento`, `castrado`, `sexo`, `imagem`) VALUES
(58, 'Andre Pereira', 'Nevaska', 'felino', 'Siames', 'pequeno', '2020-10-28', 'nao', 'femea', 'download.jpg'),
(59, 'Aluno', 'Morgana', 'Ave', 'nao', 'pequeno', '2020-10-13', 'nao', 'femea', 'download (1).jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `nascimento`, `sexo`, `telefone`, `email`, `senha`) VALUES
(24, 'Andre Pereira', '1991-12-30', 'Masculino', '87878787', 'andre@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(25, 'Aluno', '2020-10-06', 'Masculino', '8708808', 'aluno@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE `servicos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `duracao` int(11) NOT NULL,
  `valor` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `descricao`, `duracao`, `valor`) VALUES
(5, 'Tosa', 40, 40),
(6, 'Banho', 60, 30);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `animais`
--
ALTER TABLE `animais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `animais`
--
ALTER TABLE `animais`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06-Out-2020 às 20:57
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cardapio`
--

CREATE TABLE `cardapio` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `preco` double NOT NULL,
  `ingredientes` varchar(500) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cardapio`
--

INSERT INTO `cardapio` (`id`, `nome`, `preco`, `ingredientes`, `tipo`, `data_criacao`) VALUES
(1, 'mussarela', 20, 'Massa,mussarela,tomate', 'pizza', '2020-10-04 02:45:45'),
(2, 'calabresa', 15, 'massa,calabresa,tomate,cebola', 'pizza', '2020-10-04 03:12:17'),
(3, 'frango c/ catupiri', 20, 'massa,frango,catupiri,azeitona', 'pizza', '2020-10-04 03:14:01'),
(5, 'x-bacon', 20, '', 'hamburguer', '2020-10-04 05:01:07'),
(6, 'x-tudo', 25, 'pão,hamburguer,carne,salada,maionese,ovo', 'hamburguer', '2020-10-04 05:02:20'),
(7, 'batata frita', 10, 'batata', 'pocao', '2020-10-04 13:16:39'),
(8, 'camarao', 50, 'camarao', 'pocao', '2020-10-04 13:19:15'),
(9, 'portuguesa', 25, '', 'pizza', '2020-10-04 13:22:24'),
(10, 'x-calabresa', 15, 'pão,calabresa,maionese', 'hamburguer', '2020-10-04 13:25:22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `id_usuario`, `status`, `data_criacao`) VALUES
(2, 1, 'Entregue', '2020-10-05 18:56:55'),
(3, 1, 'Entregue', '2020-10-05 21:54:43'),
(5, 22, 'Entregue', '2020-10-06 00:03:15'),
(14, 1, 'Cancelado', '2020-10-06 17:04:57'),
(16, 1, 'Entregue', '2020-10-06 18:10:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_cardapio`
--

CREATE TABLE `pedido_cardapio` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_cardapio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedido_cardapio`
--

INSERT INTO `pedido_cardapio` (`id`, `id_pedido`, `id_cardapio`) VALUES
(18, 2, 1),
(19, 3, 1),
(20, 3, 2),
(22, 5, 8),
(23, 5, 3),
(50, 14, 7),
(55, 16, 7),
(56, 16, 8),
(57, 16, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `email` varchar(120) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `rua` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp(),
  `tipo` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `sobrenome`, `email`, `cidade`, `bairro`, `rua`, `numero`, `login`, `senha`, `data_criacao`, `tipo`, `status`) VALUES
(1, 'Flavio', 'Cordeiro', 'flavio@gmail.com', 'afogados', 'granja', 'centro', 123, 'flavio123', '202cb962ac59075b964b07152d234b70', '2020-09-29 00:07:08', 'usuario', 'ativo'),
(2, 'marcos', 'vinicius', 'marcos1@gmail.com', 'tabira', 'centro', 'granja', 123, 'marcos123', '202cb962ac59075b964b07152d234b70', '2020-10-01 20:04:18', 'funcionario', 'ativo'),
(19, 'jose', 'fernando', 'joseFernando@hotmail.com', 'tabira', 'centro', '2', 123, 'jose', '202cb962ac59075b964b07152d234b70', '2020-10-04 01:57:16', 'usuario', 'ativo'),
(22, 'roberta', 'paula', 'roberta@hotmail.com', 'tabira', 'centro', '2', 123, 'roberta123', '202cb962ac59075b964b07152d234b70', '2020-10-04 17:36:28', 'usuario', 'ativo');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cardapio`
--
ALTER TABLE `cardapio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_usuario` (`id_usuario`);

--
-- Índices para tabela `pedido_cardapio`
--
ALTER TABLE `pedido_cardapio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pedido` (`id_pedido`),
  ADD KEY `fk_cardapio` (`id_cardapio`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cardapio`
--
ALTER TABLE `cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `pedido_cardapio`
--
ALTER TABLE `pedido_cardapio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `fk_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`);

--
-- Limitadores para a tabela `pedido_cardapio`
--
ALTER TABLE `pedido_cardapio`
  ADD CONSTRAINT `fk_cardapio` FOREIGN KEY (`id_cardapio`) REFERENCES `cardapio` (`id`),
  ADD CONSTRAINT `fk_pedido` FOREIGN KEY (`id_pedido`) REFERENCES `pedido` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

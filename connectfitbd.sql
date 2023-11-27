-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/10/2023 às 14:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `connectfitbd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `academia`
--

CREATE TABLE `academia` (
  `nomeAcademia` varchar(80) NOT NULL,
  `emailAcademia` varchar(80) NOT NULL,
  `senhaAcademia` varchar(24) NOT NULL,
  `telAcademia` bigint(11) NOT NULL,
  `cnpj` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `academia`
--

INSERT INTO `academia` (`nomeAcademia`, `emailAcademia`, `senhaAcademia`, `telAcademia`, `cnpj`) VALUES
('Connect Fit', 'connectfit@gmail.com', 'connect', 31982839090, '00.343.485-0001/98');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nomeUsuario` varchar(80) NOT NULL,
  `emailUsuario` varchar(80) NOT NULL,
  `senhaUsuario` varchar(24) NOT NULL,
  `telUsuario` bigint(11) NOT NULL,
  `idUsuario` int(100) NOT NULL,
  `idadeUsuario` int(3) NOT NULL,
  `pesoUsuario` float NOT NULL,
  `tipoFicha` varchar(10) NOT NULL,
  `alturaUsuario` float NOT NULL,
  `imcUsuario` float NOT NULL,
  `perGUsuario` varchar(10) NOT NULL,
  `masGUsuario` float NOT NULL,
  `massaUsuario` float NOT NULL,
  `massaLivreUsuario` float NOT NULL,
  `idadeMetUsuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nomeUsuario`, `emailUsuario`, `senhaUsuario`, `telUsuario`, `idUsuario`, `idadeUsuario`, `pesoUsuario`, `tipoFicha`, `alturaUsuario`, `imcUsuario`, `perGUsuario`, `masGUsuario`, `massaUsuario`, `massaLivreUsuario`, `idadeMetUsuario`) VALUES
('Antonio Avelar', 'antoniothiagoavelar@gmail.com', '123456', 31992940026, 21, 33, 92.5, 'ABCDE', 176, 21, '22', 20, 25, 21, 50),
('Heitor Avelar', 'heitorpereiraavelar@gmail.com', '12345', 31982908030, 23, 18, 57, 'ABCDE', 175, 20, '11', 20, 0, 32, 18);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `academia`
--
ALTER TABLE `academia`
  ADD PRIMARY KEY (`cnpj`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUsuario` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

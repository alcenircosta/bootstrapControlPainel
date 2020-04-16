-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Abr-2020 às 15:40
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_bootstrap`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_equipe`
--

CREATE TABLE `tb_equipe` (
  `id` int(11) NOT NULL,
  `nome_membro` varchar(255) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_equipe`
--

INSERT INTO `tb_equipe` (`id`, `nome_membro`, `descricao`) VALUES
(1, 'Desenvolvedor 1', 'Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.'),
(2, 'Desenvolvedor 2', 'Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.'),
(3, 'Design 1', 'Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.'),
(4, 'Programador', 'Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `id` int(11) NOT NULL,
  `sobre` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_sobre`
--

INSERT INTO `tb_sobre` (`id`, `sobre`) VALUES
(8, '<div class=\"center\">Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.Laborum pariatur dolore consectetur consectetur mollit culpa voluptate ex qui minim deserunt amet velit tempor consectetur velit eiusmod qui velit in tempor dolore ut proident duis cupidatat nostrud laborum tempor et ullamco nisi non qui commodo fugiat.</div>');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_equipe`
--
ALTER TABLE `tb_equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

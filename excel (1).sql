-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Nov-2020 às 11:18
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `excel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `fb` varchar(220) NOT NULL,
  `ins` varchar(220) NOT NULL,
  `cpf` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `rg` varchar(220) NOT NULL,
  `dtnasc` varchar(220) NOT NULL,
  `contato1` varchar(220) NOT NULL,
  `contato2` varchar(220) NOT NULL,
  `rua` varchar(220) NOT NULL,
  `numero` varchar(220) NOT NULL,
  `bairro` varchar(220) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `estado` varchar(220) NOT NULL,
  `indicacao` varchar(220) NOT NULL,
  `cep` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `comp` varchar(255) NOT NULL,
  `arquivo` varchar(255) NOT NULL,
  `contato3` varchar(255) NOT NULL,
  `obs` varchar(255) NOT NULL,
  `recados1` varchar(255) NOT NULL,
  `telefone1` varchar(255) NOT NULL,
  `portador` varchar(255) NOT NULL,
  `telefone2` varchar(255) NOT NULL,
  `escritorio` varchar(255) NOT NULL,
  `bnc` varchar(255) NOT NULL,
  `nomefavorecido` varchar(255) NOT NULL,
  `cpfavorecido` varchar(255) NOT NULL,
  `conta` varchar(255) NOT NULL,
  `agencia` varchar(255) NOT NULL,
  `operacao` varchar(255) NOT NULL,
  `cnpj` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `fb`, `ins`, `cpf`, `email`, `rg`, `dtnasc`, `contato1`, `contato2`, `rua`, `numero`, `bairro`, `cidade`, `estado`, `indicacao`, `cep`, `created`, `modified`, `comp`, `arquivo`, `contato3`, `obs`, `recados1`, `telefone1`, `portador`, `telefone2`, `escritorio`, `bnc`, `nomefavorecido`, `cpfavorecido`, `conta`, `agencia`, `operacao`, `cnpj`) VALUES
(102, 'ROBERTO PEREIRA LIMA', 'https://www.facebook.com/lima.junior.925/', 'https://www.instagram.com/joaojocross/', '10845193481', 'roberto@jocross.com.br', '9086571', '20/05/1996', '81995959', '81995959', 'Rua Rio Bahia', '25', 'Paratibe', '', 'PE', 'beto', '53413010', '2020-11-11 10:34:19', NULL, 'casa', '3757bbe0a10faae76fb1eec357a81a68', '81995959', 'fdafda', 'ROBERTO PE', '81996697770', 'ROBERTO PE', '81996697770', 'dfafda', 'dfaad', 'ROBERTO PEREIRA LIMA', '10845193481', 'fda', 'fda', 'fda', '81995959'),
(103, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-11 12:48:42', NULL, '', 'f2f02adfa7779639d8e25d57c3681699', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `login`, `senha`) VALUES
(2, 'roberto pereira', 'roberto', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarioss`
--

CREATE TABLE `usuarioss` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `telefone` varchar(220) NOT NULL,
  `cidade` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarioss`
--

INSERT INTO `usuarioss` (`id`, `nome`, `email`, `telefone`, `cidade`, `created`, `modified`) VALUES
(1, 'ROBERTO PEREIRA LIMA', 'robertojunior20171@gmail.com', '81996697770', 'Paulista', '2020-09-15 08:55:27', 0),
(2, 'tonynho', 'roberto@jofdejoafjoad.com.br', '81996697770', 'Paulista', '2020-09-15 08:56:40', 0),
(3, 'tonynho', 'roberto@jofdejoafjoad.com.br', '81996697770', 'Paulista', '2020-09-15 09:07:53', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `senha` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`id`, `nome`, `login`, `senha`) VALUES
(1, 'roberto', 'roberto', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `imagem` (`id`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarioss`
--
ALTER TABLE `usuarioss`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarioss`
--
ALTER TABLE `usuarioss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

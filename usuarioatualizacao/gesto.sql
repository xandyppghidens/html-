-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/06/2025 às 21:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gesto`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `recebecontato`
--

CREATE TABLE `recebecontato` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao1`
--

CREATE TABLE `sessao1` (
  `descricao` text DEFAULT NULL,
  `id` int(255) NOT NULL,
  `imagem1` varchar(255) DEFAULT NULL,
  `imagem2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao1`
--

INSERT INTO `sessao1` (`descricao`, `id`, `imagem1`, `imagem2`) VALUES
('Somos uma plataforma com o intuito de tornar mais inclusiva a linguagem informal e cotidiana através de expressões rápidas como Gifs e figurinhas compartilháveis por meios de comunicação.', 1, 'logo.png', 'OIP.webp');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao2`
--

CREATE TABLE `sessao2` (
  `imagem` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao2`
--

INSERT INTO `sessao2` (`imagem`, `id`) VALUES
('OIP.webp', 1),
('OIP.webp', 2),
('OIP.webp', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao2titulo`
--

CREATE TABLE `sessao2titulo` (
  `titulo` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao2titulo`
--

INSERT INTO `sessao2titulo` (`titulo`, `id`) VALUES
('Exemplo', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao3`
--

CREATE TABLE `sessao3` (
  `imagem` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao3`
--

INSERT INTO `sessao3` (`imagem`, `id`) VALUES
('OIP.webp', 1),
('OIP.webp', 3),
('OIP.webp', 4);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao3titulo`
--

CREATE TABLE `sessao3titulo` (
  `titulo` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao3titulo`
--

INSERT INTO `sessao3titulo` (`titulo`, `id`) VALUES
('Exemplo', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao4`
--

CREATE TABLE `sessao4` (
  `imagem` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao4`
--

INSERT INTO `sessao4` (`imagem`, `id`) VALUES
('OIP.webp', 1),
('OIP.webp', 2),
('OIP.webp', 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao4titulo`
--

CREATE TABLE `sessao4titulo` (
  `titulo` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao4titulo`
--

INSERT INTO `sessao4titulo` (`titulo`, `id`) VALUES
('Exemplo', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao5`
--

CREATE TABLE `sessao5` (
  `imagem` varchar(255) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao5`
--

INSERT INTO `sessao5` (`imagem`, `texto`, `link`, `id`) VALUES
('undefined.png', 'A plataforma Gesto+ foi criada desenvolvida como projeto integrador pela turma 028.2025.0108 – Técnico em Informática do Senac MG, unidade de Araxá. O objetivo é tornar a Libras mais inclusiva como uma linguagem informal e cotidiana através de expressões ', 'Exemplo', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `usuario` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nivel` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `visitante`
--

CREATE TABLE `visitante` (
  `visitantes` varchar(255) DEFAULT NULL,
  `datas` varchar(255) DEFAULT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `recebecontato`
--
ALTER TABLE `recebecontato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao1`
--
ALTER TABLE `sessao1`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao2`
--
ALTER TABLE `sessao2`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao2titulo`
--
ALTER TABLE `sessao2titulo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao3`
--
ALTER TABLE `sessao3`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao3titulo`
--
ALTER TABLE `sessao3titulo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao4`
--
ALTER TABLE `sessao4`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao4titulo`
--
ALTER TABLE `sessao4titulo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao5`
--
ALTER TABLE `sessao5`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `visitante`
--
ALTER TABLE `visitante`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `recebecontato`
--
ALTER TABLE `recebecontato`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `sessao1`
--
ALTER TABLE `sessao1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sessao2`
--
ALTER TABLE `sessao2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sessao2titulo`
--
ALTER TABLE `sessao2titulo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `sessao3`
--
ALTER TABLE `sessao3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `sessao3titulo`
--
ALTER TABLE `sessao3titulo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sessao4`
--
ALTER TABLE `sessao4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sessao4titulo`
--
ALTER TABLE `sessao4titulo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `sessao5`
--
ALTER TABLE `sessao5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `visitante`
--
ALTER TABLE `visitante`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

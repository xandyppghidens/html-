-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/09/2024 às 20:48
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
-- Banco de dados: `joguinhos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `contato`
--

CREATE TABLE `contato` (
  `id` int(10) NOT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `assunto` varchar(200) DEFAULT NULL,
  `mensagem` varchar(4000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contato`
--

INSERT INTO `contato` (`id`, `nome`, `email`, `assunto`, `mensagem`) VALUES
(1, 'Alexandre', 'alexandresinho1212@gmail.com', 'sla', 'Quero banho e tosa '),
(3, 'Bruno', 'ff@mail.com', 'free fire', '  sid from ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `footer`
--

CREATE TABLE `footer` (
  `id` int(10) NOT NULL,
  `icon` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `footer`
--

INSERT INTO `footer` (`id`, `icon`) VALUES
(1, 'fa-brands fa-facebook-f'),
(2, 'fa-brands fa-twitter'),
(3, 'fa-brands fa-google-plus-g'),
(4, 'fa-brands fa-linkedin'),
(5, 'fa-brands fa-youtube'),
(6, 'fa-brands fa-square-instagram');

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `nivel` varchar(300) DEFAULT NULL,
  `senha` varchar(300) DEFAULT NULL,
  `usuario` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `login`
--

INSERT INTO `login` (`id`, `nivel`, `senha`, `usuario`) VALUES
(2, 'Editor', '$2y$10$WUz1qQzRYeG5NvDtmOHmlus8aqfwYEf28bqmvzwggMQpmhsgCimha', 'editar'),
(6, 'Adm', '$2y$10$CA5avcgJGIwy.4KT71FP/ezfi2k2JlAvG72RpKBBKQpB0/qhirao.', 'alexandre'),
(7, 'Adm', '$2y$10$NtjoSa9mRnQcd3od6pxijeQNfP8XyGJD/R9p5pVJsBvOfw.iOqJ7i', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao1`
--

CREATE TABLE `sessao1` (
  `id` int(10) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao1`
--

INSERT INTO `sessao1` (`id`, `imagem`, `descricao`) VALUES
(5, 'jogos.jpg', 'A melhor empresa que fornece tudo o que você precisa para com assuntos com os melhores jogos e consoles com preços imperdíveis');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao2`
--

CREATE TABLE `sessao2` (
  `id` int(10) NOT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `preco` varchar(200) DEFAULT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao2`
--

INSERT INTO `sessao2` (`id`, `icon`, `titulo`, `preco`, `descricao`) VALUES
(7, 'plays.jpg', 'Tudo atualizado com os melhores jogos', 'R$300,00', 'A Playstation tem os melhores consoles com jogos imperdíveis e temos também a total parceria com as empresas de jogos do mundo.'),
(8, 'plays.jpg', 'Novidades dos jogos', 'R$300,00', 'Sempre temos novidades imperdíveis de jogos veja os catálogos e adquira rápido o seu jogo dos sonhos com os melhores preços , damos descontos também.'),
(9, 'plays.jpg', 'Atualizações ', 'R$300,00', 'Damos suporte técnico e atualizações frequentes dos jogos atualizados. ');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao3`
--

CREATE TABLE `sessao3` (
  `id` int(10) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao3`
--

INSERT INTO `sessao3` (`id`, `imagem`) VALUES
(1, 'p1.jpg'),
(2, 'p2.jpg'),
(3, 'p3.jpg'),
(4, 'p4.jpg'),
(5, 'p5.jpg'),
(6, 'p6.jpg'),
(7, 'p7.jpg'),
(8, 'p8.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao4`
--

CREATE TABLE `sessao4` (
  `id` int(10) NOT NULL,
  `paragrafo` text DEFAULT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `cargo` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao4`
--

INSERT INTO `sessao4` (`id`, `paragrafo`, `imagem`, `nome`, `cargo`) VALUES
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad qui, eum numquam eius, blanditiis suscipit voluptas aliquid asperiores sit aliquam ipsam quod hic nisi non. Possimus adipisci dicta explicabo!', 'php.jpg', 'João Paulo', 'Dentista'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad qui, eum numquam eius, blanditiis suscipit voluptas aliquid asperiores sit aliquam ipsam quod hic nisi non. Possimus adipisci dicta explicabo!', 'ff.jpg', 'Carlos Eduardo', 'Frentista'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem ad qui, eum numquam eius, blanditiis suscipit voluptas aliquid asperiores sit aliquam ipsam quod hic nisi non. Possimus adipisci dicta explicabo!', 'sid.jpg', 'Sid From', 'Secretario');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sessao5`
--

CREATE TABLE `sessao5` (
  `id` int(10) NOT NULL,
  `icon` varchar(200) DEFAULT NULL,
  `informacao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `sessao5`
--

INSERT INTO `sessao5` (`id`, `icon`, `informacao`) VALUES
(1, 'casa.png', 'Endereço: R. Vasconcelo MG'),
(2, 'email.png', '(34) 3662-2121'),
(3, 'telefone.png', 'jogosconsolesgamesbrasil@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
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
-- Índices de tabela `sessao3`
--
ALTER TABLE `sessao3`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao4`
--
ALTER TABLE `sessao4`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sessao5`
--
ALTER TABLE `sessao5`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `sessao1`
--
ALTER TABLE `sessao1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `sessao2`
--
ALTER TABLE `sessao2`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sessao3`
--
ALTER TABLE `sessao3`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `sessao4`
--
ALTER TABLE `sessao4`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `sessao5`
--
ALTER TABLE `sessao5`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

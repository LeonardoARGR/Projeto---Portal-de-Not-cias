-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/11/2024 às 02:41
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
-- Banco de dados: `portal_bd`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `imagem`
--

CREATE TABLE `imagem` (
  `id` int(3) NOT NULL,
  `caminho` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(5) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `conteudo` longtext NOT NULL,
  `id_imagem` int(3) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `id_autor` int(3) NOT NULL,
  `id_revisor` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `conteudo`, `id_imagem`, `status`, `id_autor`, `id_revisor`) VALUES
(1, 'Universidade lança programa de incentivo a pesquisas climáticas', 'A Universidade Federal de Santa Clara (UFSC) lançou um programa para incentivar pesquisas relacionadas às mudanças climáticas. O projeto, intitulado Clima 2030, busca financiar iniciativas acadêmicas que apresentem soluções práticas para os impactos do aquecimento global. A ação é uma resposta ao crescente interesse científico na área e ao aumento dos eventos climáticos extremos no Brasil.\nDe acordo com o professor Eduardo Soares, coordenador do programa, a ideia é conectar a pesquisa acadêmica com problemas reais enfrentados pela sociedade. “Precisamos de estudos que saiam do papel e tenham aplicação prática. Seja na agricultura, na gestão de desastres naturais ou no desenvolvimento de novas tecnologias, o objetivo é causar impacto positivo”, afirmou ele durante a cerimônia de lançamento.\nO programa já conta com um orçamento inicial de R$ 10 milhões, proveniente de parcerias entre a universidade e empresas privadas. Entre os projetos aprovados na primeira rodada estão um sistema de monitoramento de secas no Nordeste e um estudo sobre o impacto do desmatamento na biodiversidade da Amazônia.\nEstudantes interessados em participar podem se inscrever até o final deste mês. As melhores ideias receberão bolsas de pesquisa e apoio técnico para implementação. A expectativa é de que os primeiros resultados concretos sejam apresentados ao público em 2025.', NULL, 'Em espera', 2, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(3) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `id_imagem` int(3) DEFAULT NULL,
  `tipo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`, `id_imagem`, `tipo`) VALUES
(1, 'João Silva', 'joao.silva@example.com', '1234', NULL, 'leitor'),
(2, 'Maria Santos', 'maria.santos@example.com', '1234', NULL, 'autor'),
(3, 'Carlos Pereira', 'carlos.pereira@example.com', '1234', NULL, 'revisor'),
(4, 'Leonardo Aragão Gris', 'leoaragaogris@outlook.com', '1234', NULL, 'leitor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `imagem`
--
ALTER TABLE `imagem`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `imagem`
--
ALTER TABLE `imagem`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

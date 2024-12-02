-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02/12/2024 às 03:03
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

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

--
-- Despejando dados para a tabela `imagem`
--

INSERT INTO `imagem` (`id`, `caminho`) VALUES
(1, 'src/img_674b9cba1fa44.jpg'),
(2, 'src/img_674ce8d7bf9db.jpg'),
(3, 'src/img_674ce8dd3055c.jpg'),
(6, 'src/img_674ce97ade612.jpg'),
(7, 'src/img_674cf00c83c34.jpg'),
(8, 'src/img_674cf1ab9be04.jpg'),
(9, 'src/img_674cf1bfa047e.jpg'),
(10, 'src/img_674cf6099c704.jpg'),
(11, 'src/img_674cf645c22d5.jpg'),
(12, 'src/img_674cf67a88a0c.jpg'),
(13, 'src/img_674cf6825a418.jpg'),
(14, 'src/img_674cf711e0bdb.jpg'),
(15, 'src/img_674cfb451f370.jpg'),
(16, 'src/img_674d0c15b8b16.jpg'),
(17, 'src/img_674d0dff6ee1e.jpg'),
(18, 'src/img_674d0e74b00fc.jpg');

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
(1, 'Universidade lança programa de incentivo a pesquisas climáticas', 'A Universidade Federal de Santa Clara (UFSC) lançou um programa para incentivar pesquisas relacionadas às mudanças climáticas. O projeto, intitulado Clima 2030, busca financiar iniciativas acadêmicas que apresentem soluções práticas para os impactos do aquecimento global. A ação é uma resposta ao crescente interesse científico na área e ao aumento dos eventos climáticos extremos no Brasil.\nDe acordo com o professor Eduardo Soares, coordenador do programa, a ideia é conectar a pesquisa acadêmica com problemas reais enfrentados pela sociedade. “Precisamos de estudos que saiam do papel e tenham aplicação prática. Seja na agricultura, na gestão de desastres naturais ou no desenvolvimento de novas tecnologias, o objetivo é causar impacto positivo”, afirmou ele durante a cerimônia de lançamento.\nO programa já conta com um orçamento inicial de R$ 10 milhões, proveniente de parcerias entre a universidade e empresas privadas. Entre os projetos aprovados na primeira rodada estão um sistema de monitoramento de secas no Nordeste e um estudo sobre o impacto do desmatamento na biodiversidade da Amazônia.\nEstudantes interessados em participar podem se inscrever até o final deste mês. As melhores ideias receberão bolsas de pesquisa e apoio técnico para implementação. A expectativa é de que os primeiros resultados concretos sejam apresentados ao público em 2025.', 0, 'Aprovada', 2, 3),
(3, 'Explorando o Espaço: Os Novos Limites da Exploração Espacial', 'A exploração espacial passou de uma conquista de um único país para um esforço colaborativo global. Desde as missões de Marte até as futuras viagens para a lua, a corrida espacial está mais emocionante do que nunca. Com avanços tecnológicos e colaborações internacionais, o setor espacial está se tornando um verdadeiro motor de inovação e descoberta.\r\nNos últimos anos, missões como a do rover Perseverance da NASA em Marte têm mostrado o potencial da exploração interplanetária. Com o objetivo de procurar sinais de vida antiga e preparar o caminho para futuras missões humanas, o Perseverance tem enviado dados cruciais sobre a superfície marciana, incluindo imagens de alta resolução e amostras que poderão ser analisadas no futuro.\r\nAlém disso, novas agências e empresas privadas estão aumentando a competição e a cooperação no setor espacial. Empresas como SpaceX e Blue Origin têm liderado o desenvolvimento de foguetes reutilizáveis e veículos espaciais que prometem reduzir os custos de viagens para o espaço e abrir portas para o turismo espacial e a exploração comercial de recursos celestiais.\r\nA exploração lunar também está ganhando força com o programa Artemis da NASA, que visa levar a primeira mulher e o próximo homem à superfície lunar. Este projeto ambiciona estabelecer uma presença sustentável na Lua, funcionando como um trampolim para futuras expedições a Marte e além. Com a colaboração de agências como a ESA (Agência Espacial Europeia) e a JAXA (Agência Espacial Japonesa), a missão se torna um exemplo de como o trabalho conjunto pode superar desafios enormes.\r\nPor outro lado, a exploração espacial enfrenta obstáculos significativos. As longas viagens e a exposição à radiação espacial continuam sendo questões preocupantes para a saúde dos astronautas. Pesquisadores estão desenvolvendo novas tecnologias para proteção e suporte à vida, incluindo sistemas de inteligência artificial que monitoram a saúde e o bem-estar das tripulações durante as missões.\r\nNo entanto, a exploração espacial também traz oportunidades para a inovação tecnológica que impacta a vida na Terra. Avanços em áreas como telecomunicações, sistemas de energia renovável e desenvolvimento de materiais leves são impulsionados pelo desafio de criar soluções para as condições extremas do espaço. Esses avanços podem ter aplicações diretas em setores como saúde, agricultura e infraestrutura.\r\nPor fim, as próximas décadas prometem ser um período empolgante para a exploração do espaço. Com a ambição de explorar asteroides, desenvolver habitats espaciais permanentes e talvez até encontrar sinais de vida extraterrestre, a humanidade está apenas começando a desbravar os vastos horizontes do universo.', 0, 'Aprovada', 2, 0),
(18, 'Cientistas Descobrem Nova Espécie de Planta na Amazônia', 'Pesquisadores brasileiros anunciaram a descoberta de uma nova espécie de planta na Floresta Amazônica. A planta, chamada Florae Mirabilis, foi encontrada em uma área de difícil acesso no coração da maior floresta tropical do mundo. Com características únicas, ela possui flores vibrantes de coloração azul e um perfume característico que atrai insetos polinizadores.\r\nDe acordo com a equipe de botânicos, a planta possui propriedades medicinais que ainda estão sendo investigadas. \"Esse achado ressalta a importância de preservarmos a biodiversidade da Amazônia. Cada espécie tem um papel crucial no ecossistema e potencial para impactar positivamente a ciência e a medicina\", afirmou o professor João Batista, líder da expedição.\r\nA descoberta foi realizada durante uma expedição que durou três semanas. Os cientistas enfrentaram diversos desafios, incluindo longas caminhadas por terrenos acidentados e chuvas torrenciais. \"Estar na Amazônia é sempre uma experiência desafiadora, mas recompensadora. Cada descoberta como essa nos motiva a continuar protegendo este patrimônio natural\", disse a pesquisadora Ana Costa.\r\nA Florae Mirabilis será analisada em laboratório, onde os cientistas esperam identificar possíveis aplicações práticas. Estudos preliminares sugerem que os compostos químicos presentes na planta podem ter propriedades anti-inflamatórias e antioxidantes. Além disso, sua estrutura genética única pode oferecer pistas sobre como as plantas se adaptam a ambientes extremos.\r\nEssa descoberta também reacendeu o debate sobre a importância de políticas públicas para a conservação da Amazônia. Ambientalistas destacam que o desmatamento e as mudanças climáticas ameaçam diretamente a sobrevivência de espécies ainda não catalogadas. \"Estamos correndo contra o tempo para documentar e proteger a incrível riqueza natural da floresta\", alertou a ativista Mariana Silva.', 14, 'Aprovada', 2, 0),
(20, 'Robôs Agricultores: A Revolução da Agricultura Sustentável em Tempos de Crise Climática', 'Em um mundo onde as mudanças climáticas estão tornando as colheitas mais imprevisíveis e desafiadoras, a tecnologia tem se tornado uma aliada essencial para a agricultura moderna. Recentemente, uma startup de tecnologia agrícola, a VerdeTech Solutions, lançou uma linha de robôs autônomos projetados para realizar tarefas de cultivo e monitoramento em grandes plantações com eficiência e precisão sem precedentes.\r\nOs robôs, chamados de AgriBots, são equipados com sensores avançados de umidade e temperatura, câmeras de alta resolução e inteligência artificial capaz de detectar doenças nas plantas e otimizar o uso de fertilizantes e pesticidas. Com isso, os agricultores conseguem economizar recursos e reduzir o impacto ambiental de suas práticas.\r\n“Nosso objetivo é oferecer uma solução que ajude os agricultores a serem mais produtivos e sustentáveis ao mesmo tempo”, disse Helena Costa, cofundadora da VerdeTech Solutions. A tecnologia tem sido testada em várias fazendas do interior de São Paulo, e os resultados são promissores: aumento da produtividade em até 20% e redução do uso de químicos em 30%, o que representa um avanço significativo para as práticas agrícolas locais.\r\nAlém da eficiência em campo, a empresa oferece uma plataforma em nuvem onde os dados coletados pelos AgriBots são analisados e fornecem insights para o planejamento da colheita e a gestão de riscos climáticos. “Com essa tecnologia, os agricultores podem tomar decisões informadas sobre quando plantar, irrigar e aplicar produtos, o que é fundamental para a resiliência em tempos de clima instável”, explicou Costa.\r\nPorém, a introdução dos AgriBots não vem sem desafios. As preocupações com a perda de empregos agrícolas e a questão do acesso desigual à tecnologia têm sido levantadas. Organizações como a Associação dos Agricultores Pequenos defendem políticas públicas que garantam que os pequenos produtores também possam se beneficiar dessa inovação. “A tecnologia deve ser uma ferramenta de inclusão, não de exclusão”, afirmou Marta Silva, representante da associação.\r\nApesar das preocupações, a VerdeTech Solutions afirmou que está comprometida em oferecer programas de treinamento e financiamento acessível para pequenos e médios produtores. A empresa também está trabalhando com o governo para explorar subsídios que ajudem a integrar a tecnologia de forma justa em todas as camadas da agricultura.\r\nA revolução dos robôs agrícolas está apenas começando, e o mundo observa com expectativa os próximos capítulos dessa transformação que promete redefinir a maneira como alimentamos uma população global crescente em um planeta cada vez mais desafiado pelas mudanças climáticas.', 18, 'Aprovada', 6, 0);

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
(1, 'João Silva', 'joao.silva@example.com', '1234', 0, 'leitor'),
(2, 'Maria Santos', 'maria.santos@example.com', '1234', 0, 'autor'),
(3, 'Carlos Pereira dos Santos', 'carlospereira@hotmail.com', '1234', 15, 'revisor'),
(4, 'Leonardo Aragão Gris', 'leoaragaogris@outlook.com', '1234', 16, 'revisor'),
(6, 'Thais Oliveira', 'thais.oliveira@outlook.com', '12345', 17, 'autor');

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
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

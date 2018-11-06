-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Nov-2018 às 02:18
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `complete-blog-php`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `views`, `image`, `body`, `published`, `created_at`, `updated_at`) VALUES
(16, 1, 'PHP', 'php', 0, 'php.png', '&lt;p&gt;PHP &amp;eacute; uma linguagem interpretada livre, usada originalmente apenas para o desenvolvimento de aplica&amp;ccedil;&amp;otilde;es presentes e atuantes no lado do servidor, capazes de gerar conte&amp;uacute;do din&amp;acirc;mico na World Wide Web.&lt;/p&gt;\r\n\r\n&lt;p&gt;PHP &amp;eacute; uma linguagem de programa&amp;ccedil;&amp;atilde;o amplamente utilizada por desenvolvedores ao redor de todo o mundo para a constru&amp;ccedil;&amp;atilde;o de uma s&amp;eacute;rie de aplica&amp;ccedil;&amp;otilde;es, a exemplo de websites din&amp;acirc;micos, pois permite a intera&amp;ccedil;&amp;atilde;o com o usu&amp;aacute;rio por meio de links, formul&amp;aacute;rios e par&amp;acirc;metros de URL.&lt;/p&gt;\r\n\r\n&lt;p&gt;PHP Tools, FI, Kit de Constru&amp;ccedil;&amp;atilde;o, e PHP/FI. O PHP como &amp;eacute; conhecido hoje, &amp;eacute; na verdade o sucessor para um produto chamado PHP/FI. Criado em 1994 por Rasmus Lerdof, a primeira encarna&amp;ccedil;&amp;atilde;o do PHP foi um simples conjunto de bin&amp;aacute;rios Common Gateway Interface (CGI) escrito em linguagem de programa&amp;ccedil;&amp;atilde;o C.&lt;/p&gt;\r\n', 1, '2018-11-03 19:30:10', '2018-11-03 19:30:10'),
(17, 1, 'SQL', 'sql', 0, 'SQL.png', '&lt;p&gt;Structured Query Language, ou Linguagem de Consulta Estruturada ou SQL, &amp;eacute; a linguagem de pesquisa declarativa padr&amp;atilde;o para banco de dados relacional. Muitas das caracter&amp;iacute;sticas originais do SQL foram inspiradas na &amp;aacute;lgebra relacional.&lt;/p&gt;\r\n\r\n&lt;p&gt;J&amp;aacute; um sistema de gerenciamento de banco de dados (SGBD) &amp;eacute; um software que possui recursos capazes de manipular as informa&amp;ccedil;&amp;otilde;es do banco de dados e interagir com o usu&amp;aacute;rio. Exemplos de SGBDs s&amp;atilde;o: Oracle, SQL Server, DB2, PostgreSQL, MySQL, o pr&amp;oacute;prio Access ou Paradox, entre outros.&lt;/p&gt;\r\n\r\n&lt;p&gt;O Microsoft SQL Server &amp;eacute; um sistema gerenciador de Banco de dados relacional (SGBD) desenvolvido pela Microsoft. ... Suas linguagens de consulta prim&amp;aacute;rias s&amp;atilde;o Transact-SQL (T-SQL) e ANSI SQL.&lt;/p&gt;\r\n\r\n&lt;p&gt;SQL &amp;eacute; sigla inglesa de &amp;ldquo;Structured Query Language&amp;rdquo; que significa, em Portugu&amp;ecirc;s, Linguagem de Consulta Estruturada, uma linguagem padr&amp;atilde;o de gerenciamento de dados que interage com os principais bancos de dados baseados no modelo relacional.&lt;/p&gt;\r\n', 1, '2018-11-03 19:33:13', '2018-11-03 19:33:13'),
(18, 1, 'GITHUB', 'github', 0, 'github.png', '&lt;p&gt;GitHub &amp;eacute; uma plataforma de hospedagem de c&amp;oacute;digo-fonte com controle de vers&amp;atilde;o usando o Git. Ele permite que programadores, utilit&amp;aacute;rios ou qualquer usu&amp;aacute;rio cadastrado na plataforma contribuam em projetos privados e/ou Open Source de qualquer lugar do mundo&lt;/p&gt;\r\n\r\n&lt;p&gt;Antes de conhecer melhor os recursos do GitHub, vamos entender o que &amp;eacute; Git. O Git &amp;eacute; um sistema de controle de vers&amp;atilde;o distribu&amp;iacute;do. Inicialmente, ele foi desenvolvido pelo Linus Torvalds, e assim usado no desenvolvimento do Kernel do Linux. O invento deve-se ao fato que Torvalds estava em busca de algo relativamente r&amp;aacute;pido para conseguir lidar com uma s&amp;eacute;rie constante de atividades ligadas ao Linux. Sem sucesso em algo que pudesse ser &amp;uacute;til, desenvolveu o Git. Conforme a Git Wiki, Git &amp;eacute; uma g&amp;iacute;ria para &amp;quot;cabe&amp;ccedil;a-dura, que se acha sempre certo, briguento&amp;quot;.&lt;/p&gt;\r\n', 1, '2018-11-03 19:36:22', '2018-11-03 19:36:22'),
(19, 1, 'JAVA', 'java', 0, 'JAVA.jpg', '&lt;p&gt;Java &amp;eacute; uma linguagem de programa&amp;ccedil;&amp;atilde;o orientada a objeto desenvolvida para permitir que desenvolvedores criem uma plataforma continua. Java difere de outros paradigmas de programa&amp;ccedil;&amp;atilde;o&amp;mdash;como funcional, logico e etc.&amp;mdash;uma vez que desenvolvedores podem realizar updates ou continuar um projeto j&amp;aacute; finalizado, ao inv&amp;eacute;s de recome&amp;ccedil;ar do zero. O objeto mantem seu c&amp;oacute;digo organizado e f&amp;aacute;cil de ser modificado quando necess&amp;aacute;rio.&lt;/p&gt;\r\n\r\n&lt;p&gt;Por exemplo, uma revendedora de carros tem muitos autom&amp;oacute;veis no p&amp;aacute;tio, cada carro &amp;eacute; um objeto, possuindo caracter&amp;iacute;sticas pr&amp;oacute;prias chamadas de classes, que n&amp;atilde;o modelo, motor, cor, e assim por diante. O cliente seleciona uma pickup vernelha, mas tamb&amp;eacute;m quer adicionar um sistema de som est&amp;eacute;reo. O novo pick-up recebe todos os aspectos do objeto &amp;ldquo;pickup&amp;rdquo; e o programador tem a simples tarefa de modificar a classe &amp;ldquo;est&amp;eacute;reo&amp;rdquo; ao inv&amp;eacute;s de construir todo o objeto &amp;ldquo;novo carro&amp;rdquo;. &amp;Eacute; isto que torna o Java ideal para celulares, celulares, f&amp;oacute;runs web, consoles de game e qualquer outro software que requer modifica&amp;ccedil;&amp;otilde;es e atualiza&amp;ccedil;&amp;otilde;es constantes.&lt;/p&gt;\r\n\r\n&lt;p&gt;Programas cirando em Java s&amp;atilde;o port&amp;aacute;teis pois s&amp;atilde;o montados em bytecode, e pode ser executado em qualquer server que possua a Java Virtual Machine (JVM) instalada, diferentemente de C++ objetos criados em Java n&amp;atilde;o necessitam refer&amp;ecirc;ncia de dados externos. O Java, gra&amp;ccedil;as a este recurso ir&amp;aacute; continuar rodando mesmo se o sistema operacional ou outro programa externo falhar.&lt;/p&gt;\r\n\r\n&lt;p&gt;N&amp;atilde;o confunda Java com Javascript, este &amp;uacute;ltimo &amp;eacute; uma linguagem de interpreta&amp;ccedil;&amp;atilde;o como o Visual Basic da Microsoft, em sua maioria usado para pequenos programas como aqueles que causam o aparecimento de janelas pop-up no browser. Javascritpt n&amp;atilde;o possui portabilidade, diferente de Java; Javascript &amp;eacute; usado com HTML.&lt;/p&gt;\r\n\r\n&lt;p&gt;Java &amp;eacute; a segunda linguagem de programa&amp;ccedil;&amp;atilde;o mais popular do mundo, apenas atr&amp;aacute;s de C, e &amp;agrave; frente de C++ e Objective C. o download e atualiza&amp;ccedil;&amp;atilde;o da IDEA s&amp;atilde;o gratuitos. Requisitos b&amp;aacute;sicos: Windows XP ou posterior, Mac OS X 10.7.3 ou posterior, Java tamb&amp;eacute;m trabalha roda na maioria dos sistemas Linux.&lt;/p&gt;\r\n', 1, '2018-11-03 19:42:36', '2018-11-03 19:42:36');

-- --------------------------------------------------------

--
-- Estrutura da tabela `post_topic`
--

CREATE TABLE `post_topic` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `topic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `post_topic`
--

INSERT INTO `post_topic` (`id`, `post_id`, `topic_id`) VALUES
(0, 16, 1),
(0, 17, 1),
(0, 18, 2),
(0, 19, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Extraindo dados da tabela `topics`
--

INSERT INTO `topics` (`id`, `name`, `slug`) VALUES
(0, 'Linguagem', 'linguagem'),
(1, 'Tecnologia', 'tecnologia'),
(2, 'Novidades', 'novidades');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('Author','Admin') DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', 'Admin', '21232f297a57a5a743894a0e4a801fc3', '2018-01-08 14:52:58', '2018-01-08 14:52:58'),
(5, 'leandro', 'leandro@leandro.com', 'Author', '3f3ce8d94f88d42322e7204f702c138f', '2018-10-27 17:27:11', '2018-10-27 17:27:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_topic`
--
ALTER TABLE `post_topic`
  ADD UNIQUE KEY `post_id` (`post_id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `post_topic`
--
ALTER TABLE `post_topic`
  ADD CONSTRAINT `post_topic_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `post_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

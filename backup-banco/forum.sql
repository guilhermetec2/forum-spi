-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 01-Jul-2017 às 00:15
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `forum`
--
CREATE DATABASE IF NOT EXISTS `forum` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `forum`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(30) DEFAULT NULL,
  `descricao_categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`, `descricao_categoria`) VALUES
(1, '1º Semestre', 'Foruns do primeiro semetre'),
(2, '2º Semestre', 'Foruns do segundo semetre'),
(3, '3º Semestre', 'Foruns do terceiro semetre'),
(4, '4º Semestre', 'Foruns do quarto semetre'),
(5, '5º Semestre', 'Foruns do quinto semetre'),
(6, '6º Semestre', 'Foruns do sexto semetre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `nome_forum` varchar(30) DEFAULT NULL,
  `descricao_forum` varchar(30) DEFAULT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Extraindo dados da tabela `forum`
--

INSERT INTO `forum` (`id_forum`, `nome_forum`, `descricao_forum`, `id_categoria`) VALUES
(1, 'Algoritmos de Programação I', '', 1),
(2, 'Laboratório de Programação I', '', 1),
(3, 'User Experience', '', 1),
(4, 'Fundamentos de Internet', '', 1),
(5, 'Fundamentos de Design para Web', '', 1),
(6, 'Desenvolvimento de Interfaces ', '', 1),
(7, 'Banco de Dados I', '', 2),
(8, 'Algoritmos de Programação II', '', 2),
(9, 'Programação para Internet I', '', 2),
(10, 'Sistemas de Informação e Proce', '', 2),
(11, 'Desenvolvimento Web para Dispo', '', 2),
(12, 'Comunicação e Expressão', '', 3),
(13, 'Engenharia de Software I', '', 3),
(14, 'Banco de Dados II', '', 3),
(15, 'Programação para Internet II', '', 3),
(16, 'Frameworks e APIs', '', 3),
(17, 'Engenharia de Software II', '', 4),
(18, 'Gerência de Projetos', '', 4),
(19, 'Projeto de Desenvolvimento', '', 4),
(20, 'Métricas e Marketing Digital', '', 4),
(21, 'Programação para Internet III', '', 4),
(42, 'Qualidade de Software', '', 5),
(43, 'Trabalho de Conclusão de Curso', '', 5),
(44, 'Tópicos Avançados', '', 5),
(45, 'Engenharia de Software III', '', 5),
(46, 'Programação para Internet IV', '', 5),
(47, 'Segurança de Sistemas', '', 6),
(48, 'Empreendedorismo', '', 6),
(49, 'Lingua Brasileira de Sinais', '', 6),
(50, 'Trabalho de Conclusão de Curso', '', 6),
(51, 'Gestão de TI', '', 6),
(52, 'Desenvolvimento de Componentes', '', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE IF NOT EXISTS `mensagem` (
  `id_mensagem` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(2000) NOT NULL,
  `data` date DEFAULT NULL,
  `remetente` int(11) NOT NULL,
  `destinatario` int(11) NOT NULL,
  PRIMARY KEY (`id_mensagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id_post` int(11) NOT NULL AUTO_INCREMENT,
  `texto` varchar(5000) NOT NULL,
  `data_postagem` date DEFAULT NULL,
  `hora_postagem` time DEFAULT NULL,
  `tipo_postagem` varchar(20) DEFAULT NULL,
  `id_topico` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `post`
--

INSERT INTO `post` (`id_post`, `texto`, `data_postagem`, `hora_postagem`, `tipo_postagem`, `id_topico`, `id_usuario`) VALUES
(1, 'tewojofsjdflgfdlçmdflçvdfvf', '2017-06-28', '22:02:25', 'pergunta', 4, 1),
(2, 'teste', '2017-06-28', '22:15:57', 'pergunta', 6, 1),
(3, 'trtsgdfdsfdbf', '2017-06-28', '22:22:36', 'pergunta', 7, 1),
(4, 'dsfsdsdsf', '2017-06-28', '22:24:00', 'pergunta', 8, 1),
(5, 'tek~lkdlavmmdvodsmvfovmdfovmdiov', '2017-06-28', '22:24:15', 'pergunta', 9, 1),
(6, 'Como faço para instanciar um objeto em java?', '2017-06-29', '20:46:20', 'pergunta', 10, 1),
(7, 'çfdkfskdflçk\r\nsfk\r\ndskf\r\ndslfkds\r\nfkldsflkdsfçlksdflçkdsfçdsklfkdsfdsf\r\ndsfkdsfkads\r\n', '2017-06-29', '22:08:03', 'pergunta', 11, 1),
(8, 'amflmkf akldmfl adfm aldsf lmkasdflmasd lmkdsçfdsf', '2017-06-29', '22:16:02', 'pergunta', 11, 1),
(9, 'odasofdjs kdsfçs çaldsfçl ksdfçkds~ç', '2017-06-29', '22:26:01', 'resposta', 11, 3),
(10, 'ljkfdsljadsfklçj asdfljksd adslkfdsflk jadslfkj dsaklfj d', '2017-06-29', '22:38:13', 'resposta', 11, 2),
(11, 'fsdfdsdsfds', '2017-06-29', '22:58:58', 'pergunta', 12, 4),
(12, 'dslfkj lkadsf ljksadf klsjadfljdslf s', '2017-06-29', '22:59:37', 'resposta', 12, 1),
(13, 'kdsçlfdsçlfk çkdsfçks adfkdsfçk sdfdsfk dsçfk~çdsf ', '2017-06-29', '22:59:58', 'resposta', 12, 1),
(14, 'dsfsadffdsfdfs', '2017-06-29', '23:00:22', 'pergunta', 13, 1),
(15, 'Ala huakbar!!!', '2017-06-30', '13:28:21', 'pergunta', 11, 1),
(16, 'jdsaçgjssj jsdl jsdlfjgsj lkdsf ', '2017-06-30', '13:35:08', 'pergunta', 14, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `seguidor`
--

CREATE TABLE IF NOT EXISTS `seguidor` (
  `id_seguidor` int(11) NOT NULL AUTO_INCREMENT,
  `user_seguido` int(11) NOT NULL,
  `user_seguidor` int(11) NOT NULL,
  `data_inicio` date DEFAULT NULL,
  PRIMARY KEY (`id_seguidor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `topico`
--

CREATE TABLE IF NOT EXISTS `topico` (
  `id_topico` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(250) DEFAULT NULL,
  `data_criacao` date DEFAULT NULL,
  `hora_criacao` time NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_forum` int(11) NOT NULL,
  PRIMARY KEY (`id_topico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `topico`
--

INSERT INTO `topico` (`id_topico`, `titulo`, `data_criacao`, `hora_criacao`, `id_usuario`, `id_forum`) VALUES
(1, 'Como fazer a aps2', '0000-00-00', '00:00:00', 1, 1),
(2, 'Teste', '2017-06-28', '21:59:06', 1, 1),
(3, 'teste2', '2017-06-28', '22:00:13', 1, 1),
(4, 'Teste3', '2017-06-28', '22:02:25', 1, 1),
(5, NULL, '2017-06-28', '22:02:26', 1, 1),
(6, 'teste5', '2017-06-28', '22:15:57', 1, 0),
(7, 'Teste5', '2017-06-28', '22:22:36', 1, 0),
(8, 'Teste', '2017-06-28', '22:24:00', 1, 1),
(9, 'Teste8', '2017-06-28', '22:24:15', 1, 1),
(10, 'Como faço para instanciar um objeto em java?', '2017-06-29', '20:46:20', 1, 1),
(11, 'Mais um testes', '2017-06-29', '22:08:03', 1, 1),
(12, 'Novo teste', '2017-06-29', '22:58:58', 4, 1),
(13, 'Novo topico de teste', '2017-06-29', '23:00:22', 1, 8),
(14, 'Mais um teste', '2017-06-30', '13:35:08', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome_usuario` varchar(20) NOT NULL,
  `tipo_usuario` varchar(30) NOT NULL,
  `matricula` bigint(12) NOT NULL,
  `nivel` varchar(6) NOT NULL,
  `senha` varchar(12) NOT NULL,
  `data_inscricao` date NOT NULL,
  `foto_perfil` varchar(200) NOT NULL,
  `tema_perfil` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `tipo_usuario`, `matricula`, `nivel`, `senha`, `data_inscricao`, `foto_perfil`, `tema_perfil`) VALUES
(1, 'Guilherme', 'aluno', 0, 'admin', '1234', '0000-00-00', '/imagens/perfil.jpg', 'w3-theme-lime'),
(2, 'João', 'Aluno', 123134325, 'membro', 'teste', '0000-00-00', 'padrao.jpg', 'w3-theme-dark-grey.css'),
(3, 'Maria', 'Aluno', 12389023, 'membro', 'teste', '2017-06-27', 'padrao.jpg', 'w3-theme-dark-grey.css'),
(4, 'William', 'Aluno(a)', 968590657, 'membro', 'teste', '2017-06-29', 'padrao.jpg', 'w3-theme-dark-grey.css');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

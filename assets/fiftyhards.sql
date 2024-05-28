-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 28/05/2024 às 09:39
-- Versão do servidor: 8.0.35
-- Versão do PHP: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fiftyhards`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_prod` int NOT NULL AUTO_INCREMENT,
  `marca_prod` varchar(50) NOT NULL,
  `titulo_prod` varchar(80) NOT NULL,
  `imagem_prod` varchar(200) NOT NULL,
  `descricao_prod` varchar(800) DEFAULT NULL,
  `valor_prod` float NOT NULL,
  PRIMARY KEY (`id_prod`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_prod`, `marca_prod`, `titulo_prod`, `imagem_prod`, `descricao_prod`, `valor_prod`) VALUES
(1, 'HYPERX', 'HEADSET GAMER HYPERX CLOUD III, SOM SURROUND 7.1', 'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/7/2/727a8aa2.jpg', 'sem descrição', 265.99),
(2, 'DUEX', 'MONITOR GAMER DUEX DX270QGP165, 27 POL.1MS 165HZ', 'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/d/x/dx270qgp165024526.jpg', NULL, 1687.89),
(3, 'SMART', 'FONTE THERMALTAKE SMART 700W 80PLUS WHITE, SPD-0700P', 'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/s/p/spd-0700p3.jpg', NULL, 299.99),
(4, 'PCYES', 'MOUSE GAMER PCYES GAIUS, RGB, 12400DPI, 7 BOTOES', 'https://media.pichau.com.br/media/catalog/product/cache/2f958555330323e505eba7ce930bdf27/p/m/pmggbv4.jpg', NULL, 99.89);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_user` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome_user` varchar(25) NOT NULL,
  `sobrenome_user` varchar(25) NOT NULL,
  `cpf_user` varchar(11) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `senha_user` varchar(100) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id_user`, `nome_user`, `sobrenome_user`, `cpf_user`, `email_user`, `senha_user`) VALUES
(1, 'Maxwel', 'Alves', '86536564561', 'maxweladr@gmail.com', 'belinha11'),
(2, 'Maxwel', 'Alves', '86536564561', 'maxweladr@gmail.com', 'belinha11'),
(98, 'Maxwel', 'Alves', '54695865849', 'maxwel@gmail.com', '12345678'),
(99, 'Maxwel', 'Alves', '125464989', 'tester@teste.com', 'teste1234'),
(100, 'Maxwel', 'Alves', '649845656', 'maxw@gmail.com', '12345678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

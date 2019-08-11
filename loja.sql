-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09-Ago-2019 às 22:17
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `codCategoria` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`codCategoria`, `nome`) VALUES
(1, 'LIMPEZA'),
(2, 'COSMÉTICO'),
(3, 'SAÚDE'),
(4, 'COMIDA');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` char(12) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `endereco`, `email`) VALUES
('1', 'Maria', 'Rua das flores', 'maria@maria.com.br'),
('2', 'José', 'Rua montevideo', 'jose@jose.com.br'),
('3', 'Italo', 'Rua Vinhatico', 'italo@italo.com.br'),
('4', 'Francisco', 'Rua montevideo', 'francisco@francisco.com.br'),
('5', 'Tiago', 'Rua 13 de maio', 'tiago@tiago.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item`
--

CREATE TABLE `item` (
  `codPedido` int(11) NOT NULL,
  `codProduto` int(11) NOT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item`
--

INSERT INTO `item` (`codPedido`, `codProduto`, `quantidade`) VALUES
(10, 1, 1),
(10, 2, 2),
(10, 3, 3),
(10, 5, 2),
(11, 4, 1),
(12, 5, 2),
(13, 2, 1),
(13, 3, 3),
(14, 1, 4),
(14, 5, 8);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `codPedido` int(11) NOT NULL,
  `cpfCliente` char(12) DEFAULT NULL,
  `dataPedido` date DEFAULT NULL,
  `statusPedido` char(1) DEFAULT NULL,
  `enderEntrega` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`codPedido`, `cpfCliente`, `dataPedido`, `statusPedido`, `enderEntrega`) VALUES
(10, '1', '2016-01-02', 'A', 'Rua montevideo'),
(11, '2', '2017-01-02', 'E', 'Rua das flores'),
(12, '3', '2016-10-02', 'R', 'Rua Vinhatico'),
(13, '4', '2016-12-02', 'C', 'Rua 13 de maio'),
(14, '5', '2016-11-20', 'A', 'Rua Vinhatico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codProduto` int(11) NOT NULL,
  `codCategoria` int(11) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` double DEFAULT NULL,
  `precoDesconto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codProduto`, `codCategoria`, `nome`, `preco`, `precoDesconto`) VALUES
(1, 1, 'VANISH', 2.5, 2.1),
(2, 1, 'BATOM', 5.5, 4.9),
(3, 3, 'TYLENOL', 8.3, 7.5),
(4, 4, 'ARROZ', 12, 11.3),
(5, 2, 'LÁPIS DE OLHO', 4.3, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`codCategoria`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`codPedido`,`codProduto`),
  ADD KEY `codProduto` (`codProduto`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`codPedido`),
  ADD KEY `cpfCliente` (`cpfCliente`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codProduto`),
  ADD KEY `codCategoria` (`codCategoria`);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`codPedido`) REFERENCES `pedido` (`codPedido`),
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`codProduto`) REFERENCES `produto` (`codProduto`);

--
-- Limitadores para a tabela `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`cpfCliente`) REFERENCES `cliente` (`cpf`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`codCategoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

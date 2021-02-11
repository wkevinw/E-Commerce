-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Fev-2021 às 20:29
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loja_aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `subtitulo` varchar(100) NOT NULL,
  `informacao` varchar(120) NOT NULL,
  `imagem` text NOT NULL,
  `link` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `banners`
--

INSERT INTO `banners` (`id`, `titulo`, `subtitulo`, `informacao`, `imagem`, `link`) VALUES
(1, 'black friday', 'Eletronicos', 'Novos lançamentos', 'slide41.jpg', 'http://localhost/loja_aula/produtos'),
(2, 'black friday', 'Eletronicos', 'Novos lançamentos', 'banner1.png', 'http://localhost/loja_aula/produtos'),
(3, 'black friday', 'Eletronicos', 'Novos lançamentos', 'slide33.jpg', 'http://localhost/loja_aula/produtos'),
(5, 'black friday', 'Eletronicos', 'Novos lançamentos', 'banner01.jpg', 'http://localhost/loja_aula/produtos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cabecalho` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `cabecalho`) VALUES
(1, 'celular', 0),
(2, 'smartphone', 0),
(3, 'notebooks', 0),
(4, 'Games & Consoles', 0),
(6, 'Perifericos', 0),
(7, 'HardWare', 0),
(8, 'Monitores', 0),
(9, 'Acessorios', 0),
(10, 'Jogos', 0),
(12, 'PLAYSTATION 5', 1),
(13, 'XBOX', 1),
(15, 'NINTEDO', 1),
(16, 'PC GAMER', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` text NOT NULL,
  `cpf` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `email`, `senha`, `cpf`) VALUES
(1, 'wanderson', 'kevin_ra@hotmail.com', '4297f44b13955235245b2497399d7a93', '000000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `mini_banners`
--

CREATE TABLE `mini_banners` (
  `id` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(50) NOT NULL,
  `link` text NOT NULL,
  `imagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mini_banners`
--

INSERT INTO `mini_banners` (`id`, `titulo`, `subtitulo`, `link`, `imagem`) VALUES
(1, 'PC Gamer', 'Nova Coleção', 'http://localhost/loja_aula/produtos', 'banner41.jpg'),
(2, 'PC Gamer', 'Nova Coleção', 'http://localhost/loja_aula/produtos', 'banner41.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `data_compra` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(10) NOT NULL,
  `valor_frete` decimal(10,2) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos_produtos`
--

CREATE TABLE `pedidos_produtos` (
  `id` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_total` decimal(10,2) NOT NULL,
  `preco_unitario` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `descricao` text NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `qtd_vendidos` int(11) NOT NULL,
  `destaques` tinyint(1) NOT NULL,
  `imagens` text NOT NULL,
  `id_categorias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `titulo`, `descricao`, `preco`, `qtd_vendidos`, `destaques`, `imagens`, `id_categorias`) VALUES
(1, 'Relogio smart', 'grande e prova de agua', '1000.00', 12, 1, 'produto.jpg', 1),
(2, 'Relogio smart', 'grande e prova de agua', '1000.00', 5, 1, 'produto.jpg', 1),
(3, 'iphone s8', '6gb ram 128gb', '7100.00', 12, 1, 'produto.jpg', 1),
(4, 'iphone s8', '6gb ram 128gb', '8507.00', 4, 1, 'produto.jpg', 1),
(5, 'monitor lcd', '15,5', '420.00', 8, 1, 'produto.jpg', 1),
(6, 'Relogio smart', 'grande e prova de agua', '1000.00', 12, 1, 'produto.jpg', 1),
(7, 'iphone s8', '6gb ram 128gb', '8507.00', 4, 1, 'produto.jpg', 1),
(8, 'Relogio smart', 'grande e prova de agua', '1000.00', 5, 1, 'produto.jpg', 1),
(9, 'Relogio smart', 'grande e prova de agua', '1000.00', 5, 1, 'produto.jpg', 1),
(10, 'Relogio smart', 'grande e prova de agua', '1000.00', 5, 1, 'produto.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini_banners`
--
ALTER TABLE `mini_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chave_categoria` (`id_categorias`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mini_banners`
--
ALTER TABLE `mini_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `pedidos_produtos`
--
ALTER TABLE `pedidos_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `chave_categoria` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

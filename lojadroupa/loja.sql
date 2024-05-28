-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20/03/2024 às 21:27
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
-- Banco de dados: `loja`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cargo`
--

CREATE TABLE `tb_cargo` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_cargo`
--

INSERT INTO `tb_cargo` (`id`, `nome`) VALUES
(1, 'Gerente'),
(2, 'Vendedor'),
(3, 'Atendente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_carrinho`
--

CREATE TABLE `tb_carrinho` (
  `id` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `produto` int(11) NOT NULL,
  `valortotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `id` int(11) NOT NULL,
  `cep` varchar(60) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `sexo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`id`, `cep`, `telefone`, `nome`, `cpf`, `sexo`) VALUES
(96, '', '', 'TESTE EXCLUIR', '', ''),
(97, '', '', 'TESTE EDITAR', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_fornecedor`
--

CREATE TABLE `tb_fornecedor` (
  `id` int(11) NOT NULL,
  `nome_fornecedor` varchar(45) NOT NULL,
  `cnpj` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_fornecedor`
--

INSERT INTO `tb_fornecedor` (`id`, `nome_fornecedor`, `cnpj`) VALUES
(12, 'TESTE EDITAR', 520240),
(13, 'TESTE EXCLUIR', 520240);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_funcionario`
--

CREATE TABLE `tb_funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `cargo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_funcionario`
--

INSERT INTO `tb_funcionario` (`id`, `nome`, `cpf`, `sexo`, `cargo`) VALUES
(89, 'TESTE EXCLUIR', 0, '', ''),
(90, 'TESTE EDITAR', 0, '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_itemvenda`
--

CREATE TABLE `tb_itemvenda` (
  `produto` int(11) NOT NULL,
  `venda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_produto`
--

CREATE TABLE `tb_produto` (
  `id` int(11) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `marca` varchar(110) NOT NULL,
  `fornece` varchar(110) NOT NULL,
  `nome` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_produto`
--

INSERT INTO `tb_produto` (`id`, `valor`, `quantidade`, `marca`, `fornece`, `nome`) VALUES
(26, 0, 0, '', '', 'TESTE EXCLUIR'),
(27, 0, 0, '', '', 'TESTE EDITAR');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_venda`
--

CREATE TABLE `tb_venda` (
  `id` int(11) NOT NULL,
  `data` date NOT NULL,
  `total` float NOT NULL,
  `cliente` varchar(110) NOT NULL,
  `funcionario` int(11) NOT NULL,
  `quantidade` varchar(100) NOT NULL,
  `produto` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_venda`
--

INSERT INTO `tb_venda` (`id`, `data`, `total`, `cliente`, `funcionario`, `quantidade`, `produto`, `cpf`) VALUES
(3, '0000-00-00', 0, 'TESTE EXCLUIR', 0, '', '', ''),
(4, '0000-00-00', 0, 'TESTE EDITAR', 0, '', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkidcliente` (`cliente`),
  ADD KEY `fkidproduto` (`produto`);

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_itemvenda`
--
ALTER TABLE `tb_itemvenda`
  ADD KEY `fkid` (`produto`),
  ADD KEY `fk` (`venda`);

--
-- Índices de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cargo`
--
ALTER TABLE `tb_cargo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de tabela `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tb_funcionario`
--
ALTER TABLE `tb_funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT de tabela `tb_produto`
--
ALTER TABLE `tb_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `tb_venda`
--
ALTER TABLE `tb_venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `tb_carrinho`
--
ALTER TABLE `tb_carrinho`
  ADD CONSTRAINT `fkidcliente` FOREIGN KEY (`cliente`) REFERENCES `tb_cliente` (`id`),
  ADD CONSTRAINT `fkidproduto` FOREIGN KEY (`produto`) REFERENCES `tb_produto` (`id`);

--
-- Restrições para tabelas `tb_itemvenda`
--
ALTER TABLE `tb_itemvenda`
  ADD CONSTRAINT `fkid` FOREIGN KEY (`produto`) REFERENCES `tb_produto` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2021 às 17:37
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdlojagames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `codCli` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeCli` varchar(50) NOT NULL,
  `cpfCli` char(14) NOT NULL,
  `foneCli` char(12) NOT NULL,
  `datanasCli` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbclientes`
--

INSERT INTO `tbclientes` (`codCli`, `codUsuFK`, `nomeCli`, `cpfCli`, `foneCli`, `datanasCli`) VALUES
(1, 1, 'Guilherme', '11994568444', '11555854556', '2021-10-22'),
(2, 1, 'Guilherme', '11994568444', '11555854556', '2021-10-22'),
(3, 1, 'Gustavo', '11994568444', '11555854556', '2021-12-09'),
(4, 2, 'Silvio', '5454', '39877', '1999-03-12'),
(5, 5, 'Yago', '11994568444', '39877', '2021-12-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbfuncionarios`
--

CREATE TABLE `tbfuncionarios` (
  `codFun` int(4) NOT NULL,
  `codUsuFK` int(4) NOT NULL,
  `nomeFun` varchar(50) NOT NULL,
  `funcaoFun` varchar(10) NOT NULL,
  `foneFun` char(12) NOT NULL,
  `datanasFun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbfuncionarios`
--

INSERT INTO `tbfuncionarios` (`codFun`, `codUsuFK`, `nomeFun`, `funcaoFun`, `foneFun`, `datanasFun`) VALUES
(4, 6, 'guilherme', 'trabalhar', '1234567890', '0000-00-00'),
(6, 6, 'guilherme', 'trabalhar', '1234567890', '0000-00-00'),
(10, 9, 'guilherme', 'trabalhar', '1234567890', '2021-11-17'),
(13, 1, 'Gui', 'trabalhar', '2315335413', '2021-11-18'),
(14, 1, 'Gui', 'trabalhar', '2315335413', '2021-12-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbjogos`
--

CREATE TABLE `tbjogos` (
  `codJog` int(4) NOT NULL,
  `nomeJog` varchar(30) NOT NULL,
  `tamanhoJog` varchar(10) NOT NULL,
  `precoJog` decimal(6,2) NOT NULL,
  `requisitosJog` varchar(500) NOT NULL,
  `consoleJog` varchar(100) NOT NULL,
  `classificacaoJog` varchar(10) NOT NULL,
  `avaliacaoJog` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbjogos`
--

INSERT INTO `tbjogos` (`codJog`, `nomeJog`, `tamanhoJog`, `precoJog`, `requisitosJog`, `consoleJog`, `classificacaoJog`, `avaliacaoJog`) VALUES
(1, 'Call of Duty Black Ops 2', '16 GB', '54.36', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou AMD Phenom X3 8750 2.4 GHz. Memória RAM: 2 GB para sistemas 32-bits ou 4 GB para sistemas 64-bits. Placa de vídeo: NVIDIA GeForce 8800GT 512 MB ou ATI R', 'xbox,Playstation e p', '18 anos', 5),
(2, 'Call of Duty Black Ops 2', '16 GB', '54.36', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou AMD Phenom X3 8750 2.4 GHz. Memória RAM: 2 GB para sistemas 32-bits ou 4 GB para sistemas 64-bits. Placa de vídeo: NVIDIA GeForce 8800GT 512 MB ou ATI Radeon HD 3870 512 MB.', 'xbox,Playstation e p', '18 anos', 5),
(3, 'Call of Duty Black Ops 2', '16 GB', '54.36', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou AMD Phenom X3 8750 2.4 GHz. Memória RAM: 2 GB para sistemas 32-bits ou 4 GB para sistemas 64-bits. Placa de vídeo: NVIDIA GeForce 8800GT 512 MB ou ATI Radeon HD 3870 512 MB.', 'xbox,Playstation e pc.', '18 anos', 5),
(4, 'mario car', '123', '60.00', '1gb', 'nitendo ', 'livre', 5),
(5, 'Sonic', '56,00', '56.00', 'Processador: Intel Core 2 Duo E8200 2.66 GHz ou A', 'PC', '5', 5),
(6, 'Mario vida', '89km', '30.00', 'Pc com ram 15mb', 'pc, swict', 'livre', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbpedidos`
--

CREATE TABLE `tbpedidos` (
  `codPed` int(4) NOT NULL,
  `codCliFK` int(4) NOT NULL,
  `codFunFK` int(4) NOT NULL,
  `codJogFK` int(4) NOT NULL,
  `qtdJogoPed` int(6) NOT NULL,
  `totalJogoPed` decimal(6,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbpedidos`
--

INSERT INTO `tbpedidos` (`codPed`, `codCliFK`, `codFunFK`, `codJogFK`, `qtdJogoPed`, `totalJogoPed`) VALUES
(14, 1, 4, 1, 1, '0.00'),
(15, 1, 4, 1, 1, '0.00'),
(16, 5, 4, 5, 1, '0.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `codUsu` int(4) NOT NULL,
  `emailUsu` varchar(60) NOT NULL,
  `senhaUsu` varchar(60) NOT NULL,
  `pinUsu` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbusuarios`
--

INSERT INTO `tbusuarios` (`codUsu`, `emailUsu`, `senhaUsu`, `pinUsu`) VALUES
(1, 'Guigomes4330@gmail.com', '$2y$08$yjrwj8jP9JirLE0OnNujqOM8dRgiJvw23S/ZVsGZfXThiMmD4BTGW', 1234),
(2, 'silvioflorentino@uol.com.br', '$2y$08$4yUrEmTbnBtg3ohRqKdV1uHkw2M0pR4rjdeKKW/GyxkHGm6xHo3ry', 123),
(3, 'Guigomes4330@gmail.com', '$2y$08$fTQz3knpjWUvw7pIhWHyRO.iN4YJn5hW9yaCV1Q9CnTTh1Z7I0NZG', 1234),
(4, 'g@', '$2y$08$t9BqfNRzPDZduU5ZX63.d.xMl/O4b7b22VzRp8ziErCqwGXuoCIpy', 1234),
(5, 'Guigomes4330@gmail.com', '$2y$08$udK2uXPY68hK8pP6BXEb..1hA6aYoQCp2a.fSXvNdxz5HFefGpUje', 1234),
(6, 'guilherme@hotmail.com', '$2y$08$qWa9DHMUHNMlon.ccgiMFe7JACOM9/I0AS6oVo4DbQLLwFcna6AbW', 1234),
(7, 'guilherme@hotmail.com', '$2y$08$.Epo3Q9X.TyJDZJwN5VjneXfpyr0ZMfJ.O8vzz9fePqD090/5HzJ.', 1234),
(8, '', '$2y$08$TpFqwkSMks66I2HxGbTyyePItNy4qT71FOAb570KNRiZlZr/6Ba1m', 0),
(9, 'gui@hotmil.com', '$2y$08$od9AwYFSgHAersg6vt.lUuaqkoWf0sBVmkQgCfPvYjE4foSLFUvbK', 123),
(10, 'g@hotmail.com', '$2y$08$e6D/EpVmMbqiffEG8MTHGunyxZsPmIyYRASlRaLnL2dHx68hVn7w2', 123),
(11, '', '$2y$08$QalTOfmGbGyyT7.cjmUP7eZWGX1UHynKhFsP48ux0ZQwhoYgmHYPG', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`codCli`),
  ADD KEY `relacaoCodUsu_CodUsuFK` (`codUsuFK`);

--
-- Índices para tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD PRIMARY KEY (`codFun`),
  ADD KEY `relacaoCodUsu_CodUsuFK2` (`codUsuFK`);

--
-- Índices para tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  ADD PRIMARY KEY (`codJog`);

--
-- Índices para tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD PRIMARY KEY (`codPed`),
  ADD KEY `relacaoCodCli_CodCliFk` (`codCliFK`),
  ADD KEY `relacaoCodFun_CodFunFK` (`codFunFK`),
  ADD KEY `relacaoCodJog_CodJogFK` (`codJogFK`);

--
-- Índices para tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`codUsu`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `codCli` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  MODIFY `codFun` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `tbjogos`
--
ALTER TABLE `tbjogos`
  MODIFY `codJog` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  MODIFY `codPed` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `codUsu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD CONSTRAINT `relacaoCodUsu_CodUsuFK` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuarios` (`codUsu`);

--
-- Limitadores para a tabela `tbfuncionarios`
--
ALTER TABLE `tbfuncionarios`
  ADD CONSTRAINT `relacaoCodUsu_CodUsuFK2` FOREIGN KEY (`codUsuFK`) REFERENCES `tbusuarios` (`codUsu`);

--
-- Limitadores para a tabela `tbpedidos`
--
ALTER TABLE `tbpedidos`
  ADD CONSTRAINT `relacaoCodCli_CodCliFk` FOREIGN KEY (`codCliFK`) REFERENCES `tbclientes` (`codCli`),
  ADD CONSTRAINT `relacaoCodFun_CodFunFK` FOREIGN KEY (`codFunFK`) REFERENCES `tbfuncionarios` (`codFun`),
  ADD CONSTRAINT `relacaoCodJog_CodJogFK` FOREIGN KEY (`codJogFK`) REFERENCES `tbjogos` (`codJog`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

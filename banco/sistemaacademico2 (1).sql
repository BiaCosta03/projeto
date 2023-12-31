-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03/01/2024 às 19:08
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
-- Banco de dados: `sistemaacademico2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `idAdmin` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `matrícula` varchar(11) NOT NULL,
  `senha` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`idAdmin`, `nome`, `matrícula`, `senha`) VALUES
(1, 'admin', '2023003', '12345');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aluno`
--

CREATE TABLE `aluno` (
  `idAluno` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `matrícula` varchar(15) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `aluno`
--

INSERT INTO `aluno` (`idAluno`, `nome`, `matrícula`, `senha`, `cpf`, `telefone`, `data_nascimento`) VALUES
(2, 'Beatriz Oliveira Costa', '20191194010009', '1234', '170.250.587-50', '84-8165-3171', '2004-01-01'),
(3, 'Beatriz Oliveira Costa', '20191194010009', '1234', '170.250.587-50', '84-8165-3171', '2004-01-01'),
(4, 'vivi', '20211194010004', '123', '234.876.456-00', '84-8165-3171', '2005-01-27'),
(5, 'Mikael de Oliveira Costa', '201911940021', '5678', '150.220.584-57', '84-9165-3171', '2001-08-18');

-- --------------------------------------------------------

--
-- Estrutura para tabela `disciplinas`
--

CREATE TABLE `disciplinas` (
  `idDisciplinas` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `disciplinas`
--

INSERT INTO `disciplinas` (`idDisciplinas`, `nome`) VALUES
(1, 'Português');

-- --------------------------------------------------------

--
-- Estrutura para tabela `historico_boletins`
--

CREATE TABLE `historico_boletins` (
  `idHistorico_Boletins` int(11) NOT NULL,
  `nota1Bim` double DEFAULT NULL,
  `nota2Bim` double DEFAULT NULL,
  `nota3Bim` double DEFAULT NULL,
  `nota4Bim` double DEFAULT NULL,
  `provaFinal` double DEFAULT NULL,
  `mediaFinal` double DEFAULT NULL,
  `resultado` varchar(45) DEFAULT NULL,
  `Mat_Alunos_Turmas_idMat_Alunos_Turmas` int(11) NOT NULL,
  `Turma_Disc_Professor_idTurma_Disc_Professor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `historico_boletins`
--

INSERT INTO `historico_boletins` (`idHistorico_Boletins`, `nota1Bim`, `nota2Bim`, `nota3Bim`, `nota4Bim`, `provaFinal`, `mediaFinal`, `resultado`, `Mat_Alunos_Turmas_idMat_Alunos_Turmas`, `Turma_Disc_Professor_idTurma_Disc_Professor`) VALUES
(36, 60, 60, 60, 60, 0, 60, 'Aprovado', 14, 3);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mat_alunos_turmas`
--

CREATE TABLE `mat_alunos_turmas` (
  `idMat_Alunos_Turmas` int(11) NOT NULL,
  `Aluno_idAluno` int(11) NOT NULL,
  `Turmas_idTurmas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `mat_alunos_turmas`
--

INSERT INTO `mat_alunos_turmas` (`idMat_Alunos_Turmas`, `Aluno_idAluno`, `Turmas_idTurmas`) VALUES
(14, 2, 1),
(16, 3, 7),
(19, 2, 9),
(22, 2, 9),
(23, 2, 9),
(24, 3, 7);

-- --------------------------------------------------------

--
-- Estrutura para tabela `professores`
--

CREATE TABLE `professores` (
  `idProfessores` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `matrícula` varchar(11) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `professores`
--

INSERT INTO `professores` (`idProfessores`, `nome`, `matrícula`, `senha`, `cpf`, `telefone`) VALUES
(1, 'José Alfredo da Silva', '201911940', '1457325', '170.270.597-51', '84-9121-9312');

-- --------------------------------------------------------

--
-- Estrutura para tabela `turmas`
--

CREATE TABLE `turmas` (
  `idTurmas` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `Turnos_idTurnos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `turmas`
--

INSERT INTO `turmas` (`idTurmas`, `nome`, `Turnos_idTurnos`) VALUES
(1, '7anoB2019', 1),
(2, '6anoA2020', 2),
(4, '9anoA2024', 1),
(6, '8anob2019', 1),
(7, '7anoA2020', 1),
(9, '2anoB2020', 1),
(10, '7anoB2024', 2),
(11, '8anoA2005', 1),
(12, '9anoc2020', 3),
(14, '6anoB2024', 2),
(15, 'hgtyhu', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turma_disc_professor`
--

CREATE TABLE `turma_disc_professor` (
  `idTurma_Disc_Professor` int(11) NOT NULL,
  `Turmas_idTurmas` int(11) NOT NULL,
  `Disciplinas_idDisciplinas` int(11) NOT NULL,
  `Professores_idProfessores` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `turma_disc_professor`
--

INSERT INTO `turma_disc_professor` (`idTurma_Disc_Professor`, `Turmas_idTurmas`, `Disciplinas_idDisciplinas`, `Professores_idProfessores`) VALUES
(3, 7, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `turnos`
--

CREATE TABLE `turnos` (
  `idTurnos` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `turnos`
--

INSERT INTO `turnos` (`idTurnos`, `nome`) VALUES
(1, 'matutino'),
(2, 'vespertino'),
(3, 'noturno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `matricula` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `matricula`, `senha`, `username`) VALUES
(1, '2023003', '12345', 'admin'),
(2, '20191194010028', '15779', 'aluno'),
(3, '202300113', '54321', 'professor');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Índices de tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`idAluno`);

--
-- Índices de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  ADD PRIMARY KEY (`idDisciplinas`);

--
-- Índices de tabela `historico_boletins`
--
ALTER TABLE `historico_boletins`
  ADD PRIMARY KEY (`idHistorico_Boletins`),
  ADD KEY `fk_Historico_Boletins_Mat_Alunos_Turmas1_idx` (`Mat_Alunos_Turmas_idMat_Alunos_Turmas`),
  ADD KEY `fk_Historico_Boletins_Turma_Disc_Professor1_idx` (`Turma_Disc_Professor_idTurma_Disc_Professor`);

--
-- Índices de tabela `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  ADD PRIMARY KEY (`idMat_Alunos_Turmas`),
  ADD KEY `fk_Mat_Alunos_Turmas_Aluno_idx` (`Aluno_idAluno`),
  ADD KEY `fk_Mat_Alunos_Turmas_Turmas1_idx` (`Turmas_idTurmas`);

--
-- Índices de tabela `professores`
--
ALTER TABLE `professores`
  ADD PRIMARY KEY (`idProfessores`);

--
-- Índices de tabela `turmas`
--
ALTER TABLE `turmas`
  ADD PRIMARY KEY (`idTurmas`),
  ADD KEY `fk_Turmas_Turnos1_idx` (`Turnos_idTurnos`);

--
-- Índices de tabela `turma_disc_professor`
--
ALTER TABLE `turma_disc_professor`
  ADD PRIMARY KEY (`idTurma_Disc_Professor`),
  ADD KEY `fk_Turma_Disc_Professor_Turmas1_idx` (`Turmas_idTurmas`),
  ADD KEY `fk_Turma_Disc_Professor_Disciplinas1_idx` (`Disciplinas_idDisciplinas`),
  ADD KEY `fk_Turma_Disc_Professor_Professores1_idx` (`Professores_idProfessores`);

--
-- Índices de tabela `turnos`
--
ALTER TABLE `turnos`
  ADD PRIMARY KEY (`idTurnos`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `idAluno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `disciplinas`
--
ALTER TABLE `disciplinas`
  MODIFY `idDisciplinas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `historico_boletins`
--
ALTER TABLE `historico_boletins`
  MODIFY `idHistorico_Boletins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  MODIFY `idMat_Alunos_Turmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `professores`
--
ALTER TABLE `professores`
  MODIFY `idProfessores` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `turmas`
--
ALTER TABLE `turmas`
  MODIFY `idTurmas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `turma_disc_professor`
--
ALTER TABLE `turma_disc_professor`
  MODIFY `idTurma_Disc_Professor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `turnos`
--
ALTER TABLE `turnos`
  MODIFY `idTurnos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `historico_boletins`
--
ALTER TABLE `historico_boletins`
  ADD CONSTRAINT `fk_Historico_Boletins_Mat_Alunos_Turmas1` FOREIGN KEY (`Mat_Alunos_Turmas_idMat_Alunos_Turmas`) REFERENCES `mat_alunos_turmas` (`idMat_Alunos_Turmas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Historico_Boletins_Turma_Disc_Professor1` FOREIGN KEY (`Turma_Disc_Professor_idTurma_Disc_Professor`) REFERENCES `turma_disc_professor` (`idTurma_Disc_Professor`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  ADD CONSTRAINT `fk_Mat_Alunos_Turmas_Aluno` FOREIGN KEY (`Aluno_idAluno`) REFERENCES `aluno` (`idAluno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Mat_Alunos_Turmas_Turmas1` FOREIGN KEY (`Turmas_idTurmas`) REFERENCES `turmas` (`idTurmas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `turmas`
--
ALTER TABLE `turmas`
  ADD CONSTRAINT `fk_Turmas_Turnos1` FOREIGN KEY (`Turnos_idTurnos`) REFERENCES `turnos` (`idTurnos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Restrições para tabelas `turma_disc_professor`
--
ALTER TABLE `turma_disc_professor`
  ADD CONSTRAINT `fk_Turma_Disc_Professor_Disciplinas1` FOREIGN KEY (`Disciplinas_idDisciplinas`) REFERENCES `disciplinas` (`idDisciplinas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Turma_Disc_Professor_Professores1` FOREIGN KEY (`Professores_idProfessores`) REFERENCES `professores` (`idProfessores`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_Turma_Disc_Professor_Turmas1` FOREIGN KEY (`Turmas_idTurmas`) REFERENCES `turmas` (`idTurmas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Nov-2023 às 19:49
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistemaacademico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `idMatricula` int(8) NOT NULL,
  `nome` text NOT NULL,
  `senha` varchar(6) NOT NULL,
  `tefone` int(11) NOT NULL,
  `cpf` int(11) NOT NULL,
  `codCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alunos`
--

CREATE TABLE `alunos` (
  `matricula` int(15) NOT NULL,
  `nome` text NOT NULL,
  `senha` varchar(8) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `dataNascimento` date NOT NULL,
  `codCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `boletim`
--

CREATE TABLE `boletim` (
  `id` int(11) NOT NULL,
  `cod_Disciplina_idProfessor` int(11) NOT NULL,
  `cod_Turmas_disciplina_idAlunos` int(11) NOT NULL,
  `nota1` decimal(13,2) NOT NULL,
  `nota2` decimal(13,2) NOT NULL,
  `nota3` decimal(13,2) NOT NULL,
  `nota4` decimal(13,2) NOT NULL,
  `ProvaFinal` decimal(13,2) NOT NULL,
  `MediaFinal` decimal(13,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mat_alunos_turmas`
--

CREATE TABLE `mat_alunos_turmas` (
  `idMatricula` int(11) NOT NULL,
  `cod_Alunos` int(11) NOT NULL,
  `cod_turma` int(11) NOT NULL,
  `cod_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mat_professor_turmas`
--

CREATE TABLE `mat_professor_turmas` (
  `idMatricula` int(11) NOT NULL,
  `cod_Professor` int(11) NOT NULL,
  `cod_Turmas` int(11) NOT NULL,
  `cod_disciplina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `matricula` int(8) NOT NULL,
  `nome` text NOT NULL,
  `senha` varchar(6) NOT NULL,
  `cpf` int(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `codCategoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `dataInicio` date NOT NULL,
  `codTurno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turno`
--

CREATE TABLE `turno` (
  `idNome` int(11) NOT NULL,
  `nome` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `Adm_Categoria` (`codCategoria`);

--
-- Índices para tabela `alunos`
--
ALTER TABLE `alunos`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `Aluno_Categoria` (`codCategoria`);

--
-- Índices para tabela `boletim`
--
ALTER TABLE `boletim`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `Aluno_idAluno` (`cod_Alunos`),
  ADD KEY `Turma_idTurma` (`cod_turma`),
  ADD KEY `disciplina_idDisciplina` (`cod_disciplina`);

--
-- Índices para tabela `mat_professor_turmas`
--
ALTER TABLE `mat_professor_turmas`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `disciplina_id_disciplina` (`cod_disciplina`),
  ADD KEY `professor_id_professor` (`cod_Professor`),
  ADD KEY `turma_id_turma` (`cod_Turmas`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`matricula`),
  ADD KEY `Professor_Categoria` (`codCategoria`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Turma_turno` (`codTurno`);

--
-- Índices para tabela `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`idNome`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `idMatricula` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `alunos`
--
ALTER TABLE `alunos`
  MODIFY `matricula` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `boletim`
--
ALTER TABLE `boletim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `mat_professor_turmas`
--
ALTER TABLE `mat_professor_turmas`
  MODIFY `idMatricula` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `matricula` int(8) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `turno`
--
ALTER TABLE `turno`
  MODIFY `idNome` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `adm`
--
ALTER TABLE `adm`
  ADD CONSTRAINT `Adm_Categoria` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `alunos`
--
ALTER TABLE `alunos`
  ADD CONSTRAINT `Aluno_Categoria` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `mat_alunos_turmas`
--
ALTER TABLE `mat_alunos_turmas`
  ADD CONSTRAINT `Aluno_idAluno` FOREIGN KEY (`cod_Alunos`) REFERENCES `alunos` (`matricula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `Turma_idTurma` FOREIGN KEY (`cod_turma`) REFERENCES `turma` (`id`),
  ADD CONSTRAINT `disciplina_idDisciplina` FOREIGN KEY (`cod_disciplina`) REFERENCES `disciplina` (`id`);

--
-- Limitadores para a tabela `mat_professor_turmas`
--
ALTER TABLE `mat_professor_turmas`
  ADD CONSTRAINT `disciplina_id_disciplina` FOREIGN KEY (`cod_disciplina`) REFERENCES `disciplina` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `professor_id_professor` FOREIGN KEY (`cod_Professor`) REFERENCES `professor` (`matricula`) ON UPDATE CASCADE,
  ADD CONSTRAINT `turma_id_turma` FOREIGN KEY (`cod_Turmas`) REFERENCES `turma` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `professor`
--
ALTER TABLE `professor`
  ADD CONSTRAINT `Professor_Categoria` FOREIGN KEY (`codCategoria`) REFERENCES `categoria` (`id`) ON UPDATE CASCADE;

--
-- Limitadores para a tabela `turma`
--
ALTER TABLE `turma`
  ADD CONSTRAINT `Turma_turno` FOREIGN KEY (`codTurno`) REFERENCES `turno` (`idNome`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- MySQL Script generated by MySQL Workbench
-- Tue Dec 12 10:23:53 2023
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sistemaacademico
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `sistemaacademico` ;

-- -----------------------------------------------------
-- Schema sistemaacademico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sistemaacademico` DEFAULT CHARACTER SET utf8 ;
USE `sistemaacademico` ;

-- -----------------------------------------------------
-- Table `sistemaacademico`.`Professores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Professores` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Professores` (
  `idProfessores` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `cpf` INT NOT NULL,
  `telefone` INT NOT NULL,
  `Categoria_idCategoria` INT NOT NULL,
  PRIMARY KEY (`idProfessores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Disciplinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Disciplinas` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Disciplinas` (
  `idDisciplinas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDisciplinas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`turmas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`turmas` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`turmas` (
  `idturmas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `alunosMatriculados` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idturmas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Disciplinas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Disciplinas` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Disciplinas` (
  `idDisciplinas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDisciplinas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Aluno`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Aluno` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Aluno` (
  `idAluno` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `cpf` INT NOT NULL,
  `telefone` INT NOT NULL,
  `data_nascimento` DATE NOT NULL,
  `Categoria_idCategoria` INT NOT NULL,
  PRIMARY KEY (`idAluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Turnos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Turnos` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Turnos` (
  `idTurnos` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idTurnos`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Turmas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Turmas` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Turmas` (
  `idTurmas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `Turnos_idTurnos` INT NOT NULL,
  PRIMARY KEY (`idTurmas`),
  INDEX `fk_Turmas_Turnos1_idx` (`Turnos_idTurnos` ASC) VISIBLE,
  CONSTRAINT `fk_Turmas_Turnos1`
    FOREIGN KEY (`Turnos_idTurnos`)
    REFERENCES `sistemaacademico`.`Turnos` (`idTurnos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Mat_Alunos_Turmas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Mat_Alunos_Turmas` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Mat_Alunos_Turmas` (
  `idMat_Alunos_Turmas` INT NOT NULL AUTO_INCREMENT,
  `Aluno_idAluno` INT NOT NULL,
  `Turmas_idTurmas` INT NOT NULL,
  PRIMARY KEY (`idMat_Alunos_Turmas`),
  INDEX `fk_Mat_Alunos_Turmas_Aluno_idx` (`Aluno_idAluno` ASC) VISIBLE,
  INDEX `fk_Mat_Alunos_Turmas_Turmas1_idx` (`Turmas_idTurmas` ASC) VISIBLE,
  CONSTRAINT `fk_Mat_Alunos_Turmas_Aluno`
    FOREIGN KEY (`Aluno_idAluno`)
    REFERENCES `sistemaacademico`.`Aluno` (`idAluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Mat_Alunos_Turmas_Turmas1`
    FOREIGN KEY (`Turmas_idTurmas`)
    REFERENCES `sistemaacademico`.`Turmas` (`idTurmas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Professores`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Professores` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Professores` (
  `idProfessores` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `senha` VARCHAR(45) NOT NULL,
  `cpf` INT NOT NULL,
  `telefone` INT NOT NULL,
  `Categoria_idCategoria` INT NOT NULL,
  PRIMARY KEY (`idProfessores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Turma_Disc_Professor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Turma_Disc_Professor` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Turma_Disc_Professor` (
  `idTurma_Disc_Professor` INT NOT NULL AUTO_INCREMENT,
  `Turmas_idTurmas` INT NOT NULL,
  `Disciplinas_idDisciplinas` INT NOT NULL,
  `Professores_idProfessores` INT NOT NULL,
  PRIMARY KEY (`idTurma_Disc_Professor`),
  INDEX `fk_Turma_Disc_Professor_Turmas1_idx` (`Turmas_idTurmas` ASC) VISIBLE,
  INDEX `fk_Turma_Disc_Professor_Disciplinas1_idx` (`Disciplinas_idDisciplinas` ASC) VISIBLE,
  INDEX `fk_Turma_Disc_Professor_Professores1_idx` (`Professores_idProfessores` ASC) VISIBLE,
  CONSTRAINT `fk_Turma_Disc_Professor_Turmas1`
    FOREIGN KEY (`Turmas_idTurmas`)
    REFERENCES `sistemaacademico`.`Turmas` (`idTurmas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Turma_Disc_Professor_Disciplinas1`
    FOREIGN KEY (`Disciplinas_idDisciplinas`)
    REFERENCES `sistemaacademico`.`Disciplinas` (`idDisciplinas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Turma_Disc_Professor_Professores1`
    FOREIGN KEY (`Professores_idProfessores`)
    REFERENCES `sistemaacademico`.`Professores` (`idProfessores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Historico_Boletins`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Historico_Boletins` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Historico_Boletins` (
  `idHistorico_Boletins` INT NOT NULL AUTO_INCREMENT,
  `nota1Bim` DOUBLE NULL,
  `nota2Bim` DOUBLE NULL,
  `nota3Bim` DOUBLE NULL,
  `nota4Bim` DOUBLE NULL,
  `provaFinal` DOUBLE NULL,
  `mediaFinal` DOUBLE NULL,
  `Mat_Alunos_Turmas_idMat_Alunos_Turmas` INT NOT NULL,
  `Turma_Disc_Professor_idTurma_Disc_Professor` INT NOT NULL,
  PRIMARY KEY (`idHistorico_Boletins`),
  INDEX `fk_Historico_Boletins_Mat_Alunos_Turmas1_idx` (`Mat_Alunos_Turmas_idMat_Alunos_Turmas` ASC) VISIBLE,
  INDEX `fk_Historico_Boletins_Turma_Disc_Professor1_idx` (`Turma_Disc_Professor_idTurma_Disc_Professor` ASC) VISIBLE,
  CONSTRAINT `fk_Historico_Boletins_Mat_Alunos_Turmas1`
    FOREIGN KEY (`Mat_Alunos_Turmas_idMat_Alunos_Turmas`)
    REFERENCES `sistemaacademico`.`Mat_Alunos_Turmas` (`idMat_Alunos_Turmas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Historico_Boletins_Turma_Disc_Professor1`
    FOREIGN KEY (`Turma_Disc_Professor_idTurma_Disc_Professor`)
    REFERENCES `sistemaacademico`.`Turma_Disc_Professor` (`idTurma_Disc_Professor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sistemaacademico`.`Admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sistemaacademico`.`Admin` ;

CREATE TABLE IF NOT EXISTS `sistemaacademico`.`Admin` (
  `idAdmin` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idAdmin`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

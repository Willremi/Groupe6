-- MySQL Script generated by MySQL Workbench
-- Fri Jun 12 09:42:16 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema retroSerie
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `retroSerie` ;

-- -----------------------------------------------------
-- Schema retroSerie
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `retroSerie` DEFAULT CHARACTER SET utf8 ;
USE `retroSerie` ;

-- -----------------------------------------------------
-- Table `retroSerie`.`role`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `retroSerie`.`role` ;

CREATE TABLE IF NOT EXISTS `retroSerie`.`role` (
  `idRole` INT NOT NULL AUTO_INCREMENT,
  `nomRole` VARCHAR(125) NOT NULL,
  PRIMARY KEY (`idRole`),
  UNIQUE INDEX `idRole_UNIQUE` (`idRole` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `retroSerie`.`commentaire`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `retroSerie`.`commentaire` ;

CREATE TABLE IF NOT EXISTS `retroSerie`.`commentaire` (
  `idCommentaire` INT NOT NULL AUTO_INCREMENT,
  `textComment` LONGTEXT NULL,
  PRIMARY KEY (`idCommentaire`),
  UNIQUE INDEX `idCommentaire_UNIQUE` (`idCommentaire` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `retroSerie`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `retroSerie`.`user` ;

CREATE TABLE IF NOT EXISTS `retroSerie`.`user` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `nomUser` VARCHAR(255) NOT NULL,
  `prenomUser` VARCHAR(255) NOT NULL,
  `pseudoUser` VARCHAR(125) NOT NULL,
  `mailUser` VARCHAR(125) NOT NULL,
  `mpdUser` VARCHAR(255) NOT NULL,
  `numRue` VARCHAR(125) NULL,
  `nomRue1` VARCHAR(255) NOT NULL,
  `nomRue2` VARCHAR(255) NULL,
  `cpVille` VARCHAR(125) NOT NULL,
  `nomVille` VARCHAR(255) NOT NULL,
  `role_idRole` INT NOT NULL,
  `commentaire_idCommentaire` INT NOT NULL,
  PRIMARY KEY (`idUser`),
  UNIQUE INDEX `idUser_UNIQUE` (`idUser` ASC),
  INDEX `fk_user_role_idx` (`role_idRole` ASC),
  INDEX `fk_user_commentaire1_idx` (`commentaire_idCommentaire` ASC),
  CONSTRAINT `fk_user_role`
    FOREIGN KEY (`role_idRole`)
    REFERENCES `retroSerie`.`role` (`idRole`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_user_commentaire1`
    FOREIGN KEY (`commentaire_idCommentaire`)
    REFERENCES `retroSerie`.`commentaire` (`idCommentaire`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
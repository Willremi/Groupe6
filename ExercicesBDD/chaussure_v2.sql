-- MySQL Script generated by MySQL Workbench
-- Wed Apr  1 17:23:55 2020
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema chaussure
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `chaussure` ;

-- -----------------------------------------------------
-- Schema chaussure
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `chaussure` DEFAULT CHARACTER SET utf8 ;
USE `chaussure` ;

-- -----------------------------------------------------
-- Table `chaussure`.`commande`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`commande` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`commande` (
  `idCommande` INT NOT NULL AUTO_INCREMENT,
  `qteCommande` INT UNSIGNED NOT NULL,
  `dateCommande` DATETIME NOT NULL,
  PRIMARY KEY (`idCommande`),
  UNIQUE INDEX `idCommande_UNIQUE` (`idCommande` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`entrepot`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`entrepot` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`entrepot` (
  `idEntrepot` INT NOT NULL AUTO_INCREMENT,
  `nomEntrepot` VARCHAR(255) NOT NULL,
  `quantite` INT UNSIGNED NULL,
  `statutEntrepot` TINYINT(1) NOT NULL,
  `commande_idCommande` INT NOT NULL,
  PRIMARY KEY (`idEntrepot`, `commande_idCommande`),
  UNIQUE INDEX `idFournisseur_UNIQUE` (`idEntrepot` ASC),
  INDEX `fk_entrepot_commande1_idx` (`commande_idCommande` ASC),
  CONSTRAINT `fk_entrepot_commande1`
    FOREIGN KEY (`commande_idCommande`)
    REFERENCES `chaussure`.`commande` (`idCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`cat`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`cat` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`cat` (
  `idCat` INT NOT NULL AUTO_INCREMENT,
  `nomCat` VARCHAR(255) NOT NULL,
  `statutCat` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idCat`),
  UNIQUE INDEX `idTypeProd_UNIQUE` (`idCat` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`genre`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`genre` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`genre` (
  `idGenre` INT NOT NULL AUTO_INCREMENT,
  `nomGenre` VARCHAR(125) NOT NULL,
  PRIMARY KEY (`idGenre`),
  UNIQUE INDEX `idGenreProd_UNIQUE` (`idGenre` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`couleur`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`couleur` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`couleur` (
  `idCouleur` INT NOT NULL,
  `nomCouleur` VARCHAR(125) NOT NULL,
  `statutCouleur` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idCouleur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`tva`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`tva` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`tva` (
  `idTva` INT NOT NULL AUTO_INCREMENT,
  `nomTva` VARCHAR(255) NOT NULL,
  `statutTva` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idTva`),
  UNIQUE INDEX `idTva_UNIQUE` (`idTva` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`materiel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`materiel` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`materiel` (
  `idMateriel` INT NOT NULL AUTO_INCREMENT,
  `nomMat` VARCHAR(255) NOT NULL,
  `statutMat` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idMateriel`),
  UNIQUE INDEX `idMateriel_UNIQUE` (`idMateriel` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`taille`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`taille` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`taille` (
  `idTaille` INT NOT NULL AUTO_INCREMENT,
  `nomTaille` VARCHAR(125) NOT NULL,
  `statutTail` TINYINT(1) NOT NULL,
  PRIMARY KEY (`idTaille`),
  UNIQUE INDEX `idTaille_UNIQUE` (`idTaille` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`produit`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`produit` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`produit` (
  `idProduit` INT NOT NULL AUTO_INCREMENT,
  `nomProd` VARCHAR(255) NOT NULL,
  `descProd` VARCHAR(255) NULL,
  `prixHTProd` DECIMAL(3,2) UNSIGNED NOT NULL,
  `refProd` VARCHAR(125) NOT NULL,
  `vipProd` VARCHAR(255) NULL,
  `noteProd` LONGTEXT NULL,
  `statutProd` TINYINT(1) NULL,
  `entrepot_idEntrepot` INT NOT NULL,
  `cat_idCat` INT NOT NULL,
  `genre_idGenre` INT NOT NULL,
  `couleur_idCouleur` INT NOT NULL,
  `tva_idTva` INT NOT NULL,
  `materiel_idMateriel` INT NOT NULL,
  `taille_idTaille` INT NOT NULL,
  `commande_idCommande` INT NOT NULL,
  PRIMARY KEY (`idProduit`, `entrepot_idEntrepot`, `cat_idCat`, `genre_idGenre`, `couleur_idCouleur`, `tva_idTva`, `materiel_idMateriel`, `taille_idTaille`, `commande_idCommande`),
  UNIQUE INDEX `idProduit_UNIQUE` (`idProduit` ASC),
  INDEX `fk_produit_entrepot1_idx` (`entrepot_idEntrepot` ASC),
  INDEX `fk_produit_cat1_idx` (`cat_idCat` ASC),
  INDEX `fk_produit_genre1_idx` (`genre_idGenre` ASC),
  INDEX `fk_produit_couleur1_idx` (`couleur_idCouleur` ASC),
  INDEX `fk_produit_tva1_idx` (`tva_idTva` ASC),
  INDEX `fk_produit_materiel1_idx` (`materiel_idMateriel` ASC),
  INDEX `fk_produit_taille1_idx` (`taille_idTaille` ASC),
  INDEX `fk_produit_commande1_idx` (`commande_idCommande` ASC),
  CONSTRAINT `fk_produit_entrepot1`
    FOREIGN KEY (`entrepot_idEntrepot`)
    REFERENCES `chaussure`.`entrepot` (`idEntrepot`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_cat1`
    FOREIGN KEY (`cat_idCat`)
    REFERENCES `chaussure`.`cat` (`idCat`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_genre1`
    FOREIGN KEY (`genre_idGenre`)
    REFERENCES `chaussure`.`genre` (`idGenre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_couleur1`
    FOREIGN KEY (`couleur_idCouleur`)
    REFERENCES `chaussure`.`couleur` (`idCouleur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_tva1`
    FOREIGN KEY (`tva_idTva`)
    REFERENCES `chaussure`.`tva` (`idTva`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_materiel1`
    FOREIGN KEY (`materiel_idMateriel`)
    REFERENCES `chaussure`.`materiel` (`idMateriel`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_taille1`
    FOREIGN KEY (`taille_idTaille`)
    REFERENCES `chaussure`.`taille` (`idTaille`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_produit_commande1`
    FOREIGN KEY (`commande_idCommande`)
    REFERENCES `chaussure`.`commande` (`idCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`regiondept`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`regiondept` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`regiondept` (
  `idRegionDept` INT NOT NULL AUTO_INCREMENT,
  `numDep` VARCHAR(100) NULL,
  `nomDep` VARCHAR(255) NULL,
  `nomRegion` VARCHAR(125) NOT NULL,
  PRIMARY KEY (`idRegionDept`),
  UNIQUE INDEX `idPays_UNIQUE` (`idRegionDept` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`ville`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`ville` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`ville` (
  `idAdress` INT NOT NULL AUTO_INCREMENT,
  `cpVille` VARCHAR(125) NOT NULL,
  `nomVille` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idAdress`),
  UNIQUE INDEX `idAdress_UNIQUE` (`idAdress` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`typeUser`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`typeUser` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`typeUser` (
  `idTypeUser` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idTypeUser`),
  UNIQUE INDEX `idClient_UNIQUE` (`idTypeUser` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`utilisateur`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`utilisateur` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`utilisateur` (
  `idUser` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(125) NOT NULL,
  `prenom` VARCHAR(125) NOT NULL,
  `numRue` VARCHAR(125) NULL,
  `nomRue` VARCHAR(255) NULL,
  `mail` VARCHAR(255) NOT NULL,
  `phone` VARCHAR(100) NULL,
  `statut` TINYINT(1) NOT NULL,
  `typeUser_idTypeUser` INT NOT NULL,
  `ville_idAdress` INT NOT NULL,
  `regiondept_idRegionDept` INT NOT NULL,
  `commande_idCommande` INT NOT NULL,
  PRIMARY KEY (`idUser`, `typeUser_idTypeUser`, `ville_idAdress`, `regiondept_idRegionDept`, `commande_idCommande`),
  UNIQUE INDEX `idUser_UNIQUE` (`idUser` ASC),
  INDEX `fk_utilisateur_typeUser_idx` (`typeUser_idTypeUser` ASC),
  INDEX `fk_utilisateur_ville1_idx` (`ville_idAdress` ASC),
  INDEX `fk_utilisateur_regiondept1_idx` (`regiondept_idRegionDept` ASC),
  INDEX `fk_utilisateur_commande1_idx` (`commande_idCommande` ASC),
  CONSTRAINT `fk_utilisateur_typeUser`
    FOREIGN KEY (`typeUser_idTypeUser`)
    REFERENCES `chaussure`.`typeUser` (`idTypeUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_ville1`
    FOREIGN KEY (`ville_idAdress`)
    REFERENCES `chaussure`.`ville` (`idAdress`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_regiondept1`
    FOREIGN KEY (`regiondept_idRegionDept`)
    REFERENCES `chaussure`.`regiondept` (`idRegionDept`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_commande1`
    FOREIGN KEY (`commande_idCommande`)
    REFERENCES `chaussure`.`commande` (`idCommande`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`banque`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`banque` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`banque` (
  `idbanque` INT NOT NULL AUTO_INCREMENT,
  `nomBanque` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idbanque`),
  UNIQUE INDEX `idbanque_UNIQUE` (`idbanque` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `chaussure`.`tabBU`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`tabBU` ;

CREATE TABLE IF NOT EXISTS `chaussure`.`tabBU` (
  `utilisateur_idUser` INT NOT NULL,
  `banque_idbanque` INT NOT NULL,
  PRIMARY KEY (`utilisateur_idUser`, `banque_idbanque`),
  INDEX `fk_utilisateur_has_banque_banque1_idx` (`banque_idbanque` ASC),
  INDEX `fk_utilisateur_has_banque_utilisateur1_idx` (`utilisateur_idUser` ASC),
  CONSTRAINT `fk_utilisateur_has_banque_utilisateur1`
    FOREIGN KEY (`utilisateur_idUser`)
    REFERENCES `chaussure`.`utilisateur` (`idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_utilisateur_has_banque_banque1`
    FOREIGN KEY (`banque_idbanque`)
    REFERENCES `chaussure`.`banque` (`idbanque`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `chaussure` ;

-- -----------------------------------------------------
-- Placeholder table for view `chaussure`.`view1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `chaussure`.`view1` (`id` INT);

-- -----------------------------------------------------
-- View `chaussure`.`view1`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `chaussure`.`view1`;
DROP VIEW IF EXISTS `chaussure`.`view1` ;
USE `chaussure`;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
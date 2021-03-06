-- MySQL Script generated by MySQL Workbench
-- mar. 25 févr. 2020 16:46:13 WAT
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema projet_tutore
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `projet_tutore` ;

-- -----------------------------------------------------
-- Schema projet_tutore
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `projet_tutore` ;
USE `projet_tutore` ;

-- -----------------------------------------------------
-- Table `projet_tutore`.`Administrateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet_tutore`.`Administrateurs` (
  `id_admin` INT NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_admin`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projet_tutore`.`projets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet_tutore`.`projets` (
  `id_projet` INT NOT NULL,
  `date_debut_inscription` DATE NOT NULL,
  `date_fin_inscription` DATE NOT NULL,
  `date_debut_projet` DATE NOT NULL,
  `date_fin_projet` DATE NOT NULL,
  `annee_scolaire` VARCHAR(45) NOT NULL,
  `admin_id` INT NOT NULL,
  PRIMARY KEY (`id_projet`),
  CONSTRAINT `fk_projets_Administrateurs`
    FOREIGN KEY (`admin_id`)
    REFERENCES `projet_tutore`.`Administrateurs` (`id_admin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;




-- -----------------------------------------------------
-- Table `projet_tutore`.`Speecialites`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet_tutore`.`Speecialites` (
  `code_specialite` VARCHAR(45) NOT NULL,
  `lib_specialite` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`code_specialite`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projet_tutore`.`Etudiants`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet_tutore`.`Etudiants` (
  `id_etu` INT NOT NULL,
  `nom` VARCHAR(100) NOT NULL,
  `prenom` VARCHAR(100) NOT NULL,
  `sexe` VARCHAR(45) NULL,
  `note` INT NOT NULL,
  `specialite_etu` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_etu`),
  CONSTRAINT `fk_Etudiants_Speecialites1`
    FOREIGN KEY (`specialite_etu`)
    REFERENCES `projet_tutore`.`Speecialites` (`code_specialite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `projet_tutore`.`Groupes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `projet_tutore`.`Groupes` (
  `id_grp` INT NOT NULL,
  `theme` VARCHAR(100) NOT NULL,
  `detail_theme` TEXT(191) NOT NULL,
  `cahier_de_charge` VARCHAR(45) NOT NULL,
  `theme_deja_valide` TINYINT NOT NULL DEFAULT 0,
  `document_final` VARCHAR(45) NULL,
  `responsable` INT NOT NULL,
  PRIMARY KEY (`id_grp`),
  CONSTRAINT `fk_Groupes_Etudiants1`
    FOREIGN KEY (`responsable`)
    REFERENCES `projet_tutore`.`Etudiants` (`id_etu`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

ALTER TABLE Etudiants
ADD grp_id INT NOT NULL;

ALTER TABLE Etudiants  
ADD CONSTRAINT `fk_Etudiants_Groupe` 
    FOREIGN KEY (`grp_id`) REFERENCES `Groupes` (`id_grp`) ON DELETE CASCADE;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

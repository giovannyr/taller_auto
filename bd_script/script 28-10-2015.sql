-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema taller_mec
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `taller_mec` ;

-- -----------------------------------------------------
-- Schema taller_mec
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `taller_mec` DEFAULT CHARACTER SET utf8 ;
USE `taller_mec` ;

-- -----------------------------------------------------
-- Table `taller_mec`.`cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`cliente` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`cliente` (
  `cedula` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(250) NULL DEFAULT NULL,
  `correo` VARCHAR(45) NULL DEFAULT NULL,
  `celular` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  `direccion` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`cedula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`inventario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`inventario` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`inventario` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `producto` VARCHAR(250) NULL DEFAULT NULL,
  `existencias` INT(11) NULL DEFAULT NULL,
  `precio` VARCHAR(50) NULL DEFAULT NULL,
  `unidad_venta` VARCHAR(200) NULL DEFAULT NULL COMMENT 'se aplicac a lubricantes y otros insumos que se puedan medir por mililitros, galon, etc',
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`mecanico`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`mecanico` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`mecanico` (
  `cedula` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(250) NULL DEFAULT NULL,
  `correo` VARCHAR(100) NULL DEFAULT NULL,
  `celular` VARCHAR(45) NULL DEFAULT NULL,
  `telefono` VARCHAR(45) NULL DEFAULT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  PRIMARY KEY (`cedula`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`vehiculo`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`vehiculo` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`vehiculo` (
  `placa` VARCHAR(45) NOT NULL,
  `marca` VARCHAR(100) NULL DEFAULT NULL,
  `modelo` VARCHAR(100) NULL DEFAULT NULL,
  `cedula_cliente` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`placa`),
  INDEX `fk_vh_cl_idx` (`cedula_cliente` ASC),
  CONSTRAINT `fk_vh_cl`
    FOREIGN KEY (`cedula_cliente`)
    REFERENCES `taller_mec`.`cliente` (`cedula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`lista_servicios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`lista_servicios` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`lista_servicios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `servicio` VARCHAR(150) NULL,
  `costo` VARCHAR(100) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `taller_mec`.`servicio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`servicio` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`servicio` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `precio` VARCHAR(100) NULL DEFAULT NULL,
  `fecha` DATE NULL DEFAULT NULL,
  `placa_vehiculo` VARCHAR(45) NULL DEFAULT NULL,
  `cc_mecanico` VARCHAR(45) NULL DEFAULT NULL,
  `lista_servicios_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fkv_idx` (`placa_vehiculo` ASC),
  INDEX `fkm_idx` (`cc_mecanico` ASC),
  INDEX `fk_servicio_lista_servicios2_idx` (`lista_servicios_id` ASC),
  CONSTRAINT `fkm`
    FOREIGN KEY (`cc_mecanico`)
    REFERENCES `taller_mec`.`mecanico` (`cedula`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fkv`
    FOREIGN KEY (`placa_vehiculo`)
    REFERENCES `taller_mec`.`vehiculo` (`placa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_servicio_lista_servicios2`
    FOREIGN KEY (`lista_servicios_id`)
    REFERENCES `taller_mec`.`lista_servicios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`inventario_servicio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`inventario_servicio` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`inventario_servicio` (
  `inventario_id` INT(11) NOT NULL,
  `servicio_id` INT(11) NOT NULL,
  PRIMARY KEY (`inventario_id`, `servicio_id`),
  INDEX `fk_inventario_has_servicio_servicio2_idx` (`servicio_id` ASC),
  INDEX `fk_inventario_has_servicio_inventario2_idx` (`inventario_id` ASC),
  CONSTRAINT `fk_inventario_has_servicio_inventario2`
    FOREIGN KEY (`inventario_id`)
    REFERENCES `taller_mec`.`inventario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventario_has_servicio_servicio2`
    FOREIGN KEY (`servicio_id`)
    REFERENCES `taller_mec`.`servicio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `taller_mec`.`inventario_servicio`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `taller_mec`.`inventario_servicio` ;

CREATE TABLE IF NOT EXISTS `taller_mec`.`inventario_servicio` (
  `inventario_id` INT(11) NOT NULL,
  `servicio_id` INT(11) NOT NULL,
  PRIMARY KEY (`inventario_id`, `servicio_id`),
  INDEX `fk_inventario_has_servicio_servicio2_idx` (`servicio_id` ASC),
  INDEX `fk_inventario_has_servicio_inventario2_idx` (`inventario_id` ASC),
  CONSTRAINT `fk_inventario_has_servicio_inventario2`
    FOREIGN KEY (`inventario_id`)
    REFERENCES `taller_mec`.`inventario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_inventario_has_servicio_servicio2`
    FOREIGN KEY (`servicio_id`)
    REFERENCES `taller_mec`.`servicio` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`carrera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`carrera` (
  `id_Carrera` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrecarrera` VARCHAR(45) NULL DEFAULT NULL,
  `modalidad` VARCHAR(45) NULL DEFAULT NULL,
  `activocarrera` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_Carrera`),
  UNIQUE INDEX `nombre` (`nombrecarrera` ASC))
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`rol` (
  `id_rol` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` VARCHAR(50) NULL DEFAULT NULL,
  `activorol` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_rol`))
ENGINE = INNODB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`persona`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`persona` (
  `id_persona` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL DEFAULT NULL,
  `papellido` VARCHAR(50) NULL DEFAULT NULL,
  `sapellido` VARCHAR(50) NULL DEFAULT NULL,
  `ci` VARCHAR(10) NULL DEFAULT NULL,
  `telefono` INT(11) NULL DEFAULT NULL,
  `direccion` VARCHAR(100) NULL DEFAULT NULL,
  `email` VARCHAR(255) NULL DEFAULT NULL,
  `rol` INT(11) NULL DEFAULT NULL,
  `activo` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE INDEX `email` (`email` ASC),
  INDEX `rol` (`rol` ASC),
  CONSTRAINT `persona_ibfk_1`
    FOREIGN KEY (`rol`)
    REFERENCES `mydb`.`rol` (`id_rol`))
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(50) NULL DEFAULT NULL,
  `clave` VARCHAR(50) NULL DEFAULT NULL,
  `persona_id_persona` INT(11) NOT NULL,
  `activousuario` TINYINT(4) NULL DEFAULT NULL,
  `fechacreacion` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id_usuario`, `persona_id_persona`),
  INDEX `fk_usuario_persona1_idx` (`persona_id_persona` ASC),
  CONSTRAINT `fk_usuario_persona1`
    FOREIGN KEY (`persona_id_persona`)
    REFERENCES `mydb`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`cuenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cuenta` (
  `usuario_id_usuario` INT(11) NOT NULL,
  `usuario_persona_id_persona` INT(11) NOT NULL,
  `rol_id_rol` INT(11) NOT NULL,
  INDEX `fk_cuenta_usuario1_idx` (`usuario_id_usuario` ASC, `usuario_persona_id_persona` ASC),
  INDEX `fk_cuenta_rol1_idx` (`rol_id_rol` ASC),
  CONSTRAINT `fk_cuenta_rol1`
    FOREIGN KEY (`rol_id_rol`)
    REFERENCES `mydb`.`rol` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuenta_usuario1`
    FOREIGN KEY (`usuario_id_usuario` , `usuario_persona_id_persona`)
    REFERENCES `mydb`.`usuario` (`id_usuario` , `persona_id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`curso` (
  `id_Curso` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrecurso` VARCHAR(45) NULL DEFAULT NULL,
  `activocurso` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_Curso`))
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`estudiante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estudiante` (
  `id_estudiante` INT NOT NULL AUTO_INCREMENT,
  `activoestudiante` TINYINT NULL,
  `persona_id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_estudiante`, `persona_id_persona`),
  INDEX `fk_estudiante_persona1_idx` (`persona_id_persona` ASC),
  CONSTRAINT `fk_estudiante_persona1`
    FOREIGN KEY (`persona_id_persona`)
    REFERENCES `mydb`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `mydb`.`cursado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`cursado` (
  `Curso_id_Curso` INT(11) NOT NULL,
  `estudiante_id_estudiante` INT NOT NULL,
  `estudiante_persona_id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`Curso_id_Curso`, `estudiante_id_estudiante`, `estudiante_persona_id_persona`),
  INDEX `fk_cursado_estudiante1_idx` (`estudiante_id_estudiante` ASC, `estudiante_persona_id_persona` ASC),
  CONSTRAINT `fk_Cursado_Curso1`
    FOREIGN KEY (`Curso_id_Curso`)
    REFERENCES `mydb`.`curso` (`id_Curso`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursado_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` , `estudiante_persona_id_persona`)
    REFERENCES `mydb`.`estudiante` (`id_estudiante` , `persona_id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`empleado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`empleado` (
  `persona_id_persona` INT(11) NOT NULL,
  `cargo` VARCHAR(45) NULL DEFAULT NULL,
  `activoempleado` TINYINT(4) NOT NULL,
  PRIMARY KEY (`persona_id_persona`),
  CONSTRAINT `fk_Empleado_persona1`
    FOREIGN KEY (`persona_id_persona`)
    REFERENCES `mydb`.`persona` (`id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`estudia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`estudia` (
  `Carrera_id_Carrera` INT(11) NOT NULL,
  `estudiante_id_estudiante` INT NOT NULL,
  `estudiante_persona_id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`Carrera_id_Carrera`, `estudiante_id_estudiante`, `estudiante_persona_id_persona`),
  INDEX `fk_estudia_estudiante1_idx` (`estudiante_id_estudiante` ASC, `estudiante_persona_id_persona` ASC),
  CONSTRAINT `fk_Estudia_Carrera1`
    FOREIGN KEY (`Carrera_id_Carrera`)
    REFERENCES `mydb`.`carrera` (`id_Carrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudia_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` , `estudiante_persona_id_persona`)
    REFERENCES `mydb`.`estudiante` (`id_estudiante` , `persona_id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`funcionalidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`funcionalidad` (
  `id_funcionalidad` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrefuncionalidad` VARCHAR(50) NULL DEFAULT NULL,
  PRIMARY KEY (`id_funcionalidad`))
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`requisito_plantilla`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`requisito_plantilla` (
  `id_Requisitoplantilla` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrerequisitoplatilla` VARCHAR(45) NULL DEFAULT NULL,
  `activorequisitoplantilla` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_Requisitoplantilla`))
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`tramite_plantilla`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tramite_plantilla` (
  `idTramite_plantilla` INT(11) NOT NULL AUTO_INCREMENT,
  `nombretramite` VARCHAR(100) NULL DEFAULT NULL,
  `activotramite` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`idTramite_plantilla`))
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`necesita`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`necesita` (
  `Requisito_plantilla_id_Requisitoplantilla` INT(11) NOT NULL,
  `Tramite_plantilla_idTramite_plantilla` INT(11) NOT NULL,
  PRIMARY KEY (`Requisito_plantilla_id_Requisitoplantilla`, `Tramite_plantilla_idTramite_plantilla`),
  INDEX `fk_Necesita_Tramite_plantilla1_idx` (`Tramite_plantilla_idTramite_plantilla` ASC),
  CONSTRAINT `fk_Necesita_Requisito_plantilla1`
    FOREIGN KEY (`Requisito_plantilla_id_Requisitoplantilla`)
    REFERENCES `mydb`.`requisito_plantilla` (`id_Requisitoplantilla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Necesita_Tramite_plantilla1`
    FOREIGN KEY (`Tramite_plantilla_idTramite_plantilla`)
    REFERENCES `mydb`.`tramite_plantilla` (`idTramite_plantilla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`tramite`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tramite` (
  `id_tramite` INT(11) NOT NULL AUTO_INCREMENT,
  `condicion` VARCHAR(50) NOT NULL,
  `Tramite_plantilla_idTramite_plantilla` INT(11) NOT NULL,
  `estudiante_id_estudiante` INT NOT NULL,
  `estudiante_persona_id_persona` INT(11) NOT NULL,
  `activotramiteiniciado` TINYINT(4) NULL DEFAULT NULL,
  PRIMARY KEY (`id_tramite`),
  INDEX `fk_Tramite_Tramite_plantilla1_idx` (`Tramite_plantilla_idTramite_plantilla` ASC),
  INDEX `fk_tramite_estudiante1_idx` (`estudiante_id_estudiante` ASC, `estudiante_persona_id_persona` ASC),
  CONSTRAINT `fk_Tramite_Tramite_plantilla1`
    FOREIGN KEY (`Tramite_plantilla_idTramite_plantilla`)
    REFERENCES `mydb`.`tramite_plantilla` (`idTramite_plantilla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tramite_estudiante1`
    FOREIGN KEY (`estudiante_id_estudiante` , `estudiante_persona_id_persona`)
    REFERENCES `mydb`.`estudiante` (`id_estudiante` , `persona_id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`paso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`paso` (
  `id_Paso` INT(11) NOT NULL AUTO_INCREMENT,
  `fecha_re` DATE NULL DEFAULT NULL,
  `fecha_des` DATE NULL DEFAULT NULL,
  `numeropaso` INT(11) NULL DEFAULT NULL,
  `Tramite_id_tramite` INT(11) NOT NULL,
  `Empleado_persona_id_persona` INT(11) NOT NULL,
  PRIMARY KEY (`id_Paso`),
  INDEX `fk_Paso_Tramite1_idx` (`Tramite_id_tramite` ASC),
  INDEX `fk_Paso_Empleado1_idx` (`Empleado_persona_id_persona` ASC),
  CONSTRAINT `fk_Paso_Empleado1`
    FOREIGN KEY (`Empleado_persona_id_persona`)
    REFERENCES `mydb`.`empleado` (`persona_id_persona`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Paso_Tramite1`
    FOREIGN KEY (`Tramite_id_tramite`)
    REFERENCES `mydb`.`tramite` (`id_tramite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`paso_plantilla`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`paso_plantilla` (
  `id_Pasoplantilla` INT(11) NOT NULL AUTO_INCREMENT,
  `numeropasoplantilla` INT(11) NULL DEFAULT NULL,
  `duracion` INT(11) NULL DEFAULT NULL,
  `nombrepasoplantilla` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`id_Pasoplantilla`))
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`privilegios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`privilegios` (
  `rol_id_rol` INT(11) NOT NULL,
  `funcionalidad_id_funcionalidad` INT(11) NOT NULL,
  INDEX `fk_privilegios_rol1_idx` (`rol_id_rol` ASC),
  INDEX `fk_privilegios_funcionalidad1_idx` (`funcionalidad_id_funcionalidad` ASC),
  CONSTRAINT `fk_privilegios_funcionalidad1`
    FOREIGN KEY (`funcionalidad_id_funcionalidad`)
    REFERENCES `mydb`.`funcionalidad` (`id_funcionalidad`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_privilegios_rol1`
    FOREIGN KEY (`rol_id_rol`)
    REFERENCES `mydb`.`rol` (`id_rol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `mydb`.`procede`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`procede` (
  `paso_plantilla_id_Pasoplantilla` INT(11) NOT NULL,
  `tramite_plantilla_idTramite_plantilla` INT(11) NOT NULL,
  PRIMARY KEY (`paso_plantilla_id_Pasoplantilla`, `tramite_plantilla_idTramite_plantilla`),
  INDEX `fk_procede_tramite_plantilla1_idx` (`tramite_plantilla_idTramite_plantilla` ASC),
  CONSTRAINT `fk_procede_paso_plantilla1`
    FOREIGN KEY (`paso_plantilla_id_Pasoplantilla`)
    REFERENCES `mydb`.`paso_plantilla` (`id_Pasoplantilla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procede_tramite_plantilla1`
    FOREIGN KEY (`tramite_plantilla_idTramite_plantilla`)
    REFERENCES `mydb`.`tramite_plantilla` (`idTramite_plantilla`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`requisito`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`requisito` (
  `id_Requisito` INT(11) NOT NULL AUTO_INCREMENT,
  `nombrerequisito` VARCHAR(45) NULL DEFAULT NULL,
  `valor` VARCHAR(45) NULL DEFAULT NULL,
  `Tramite_id_tramite` INT(11) NOT NULL,
  PRIMARY KEY (`id_Requisito`),
  INDEX `fk_Requisito_Tramite1_idx` (`Tramite_id_tramite` ASC),
  CONSTRAINT `fk_Requisito_Tramite1`
    FOREIGN KEY (`Tramite_id_tramite`)
    REFERENCES `mydb`.`tramite` (`id_tramite`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB
DEFAULT CHARACTER SET = utf8;
INSERT  INTO `funcionalidad`(`id_funcionalidad`,`nombrefuncionalidad`) VALUES 
(1,'crear/editar'),
(2,'visualizar'),
(3,'todo');
INSERT  INTO `persona`(`id_persona`,`nombre`,`papellido`,`sapellido`,`ci`,`telefono`,`direccion`,`email`,`rol`,`activo`) VALUES 
(1,'admin','admin','admin','admin',0,'admin','admin@admin.com',1,1);
INSERT  INTO `privilegios`(`rol_id_rol`,`funcionalidad_id_funcionalidad`) VALUES 
(2,1),
(3,2),
(1,3);
INSERT  INTO `rol`(`id_rol`,`nombrerol`,`activorol`) VALUES 
(1,'administrador',1),
(2,'personal',1),
(3,'estudiante',1);
INSERT  INTO `usuario`(`id_usuario`,`usuario`,`clave`,`persona_id_persona`,`activousuario`,`fechacreacion`) VALUES 
(1,'admin@admin.com','21232f297a57a5a743894a0e4a801fc3',1,1,'2018-09-11 12:47:59');


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

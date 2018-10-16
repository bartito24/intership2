/*
SQLyog Community v13.1.0 (64 bit)
MySQL - 5.7.19 : Database - mydb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`mydb` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `mydb`;

/*Table structure for table `carrera` */

DROP TABLE IF EXISTS `carrera`;

CREATE TABLE `carrera` (
  `id_Carrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecarrera` varchar(45) DEFAULT NULL,
  `modalidad` varchar(45) DEFAULT NULL,
  `activocarrera` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_Carrera`),
  UNIQUE KEY `nombre` (`nombrecarrera`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `carrera` */

insert  into `carrera`(`id_Carrera`,`nombrecarrera`,`modalidad`,`activocarrera`) values 
(1,'Sistemas','semestral',1);

/*Table structure for table `cuenta` */

DROP TABLE IF EXISTS `cuenta`;

CREATE TABLE `cuenta` (
  `usuario_id_usuario` int(11) NOT NULL,
  `usuario_persona_id_persona` int(11) NOT NULL,
  `rol_id_rol` int(11) NOT NULL,
  KEY `fk_cuenta_usuario1_idx` (`usuario_id_usuario`,`usuario_persona_id_persona`),
  KEY `fk_cuenta_rol1_idx` (`rol_id_rol`),
  CONSTRAINT `fk_cuenta_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cuenta_usuario1` FOREIGN KEY (`usuario_id_usuario`, `usuario_persona_id_persona`) REFERENCES `usuario` (`id_usuario`, `persona_id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `cuenta` */

/*Table structure for table `cursado` */

DROP TABLE IF EXISTS `cursado`;

CREATE TABLE `cursado` (
  `Curso_id_Curso` int(11) NOT NULL,
  `estudiante_id_estudiante` int(11) NOT NULL,
  `estudiante_persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`Curso_id_Curso`,`estudiante_id_estudiante`,`estudiante_persona_id_persona`),
  KEY `fk_cursado_estudiante1_idx` (`estudiante_id_estudiante`,`estudiante_persona_id_persona`),
  CONSTRAINT `fk_Cursado_Curso1` FOREIGN KEY (`Curso_id_Curso`) REFERENCES `curso` (`id_Curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cursado_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`, `estudiante_persona_id_persona`) REFERENCES `estudiante` (`id_estudiante`, `persona_id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cursado` */

/*Table structure for table `curso` */

DROP TABLE IF EXISTS `curso`;

CREATE TABLE `curso` (
  `id_Curso` int(11) NOT NULL AUTO_INCREMENT,
  `nombrecurso` varchar(45) DEFAULT NULL,
  `activocurso` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_Curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `curso` */

/*Table structure for table `empleado` */

DROP TABLE IF EXISTS `empleado`;

CREATE TABLE `empleado` (
  `persona_id_persona` int(11) NOT NULL,
  `cargo` varchar(45) DEFAULT NULL,
  `activoempleado` tinyint(4) NOT NULL,
  PRIMARY KEY (`persona_id_persona`),
  CONSTRAINT `fk_Empleado_persona1` FOREIGN KEY (`persona_id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `empleado` */

/*Table structure for table `empresa` */

DROP TABLE IF EXISTS `empresa`;

CREATE TABLE `empresa` (
  `id_empresa` int(11) NOT NULL AUTO_INCREMENT,
  `nombreempresa` varchar(25) DEFAULT NULL,
  `direccionempresa` varchar(45) DEFAULT NULL,
  `telefonoempresa` int(10) DEFAULT NULL,
  `activoempresa` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_empresa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `empresa` */

insert  into `empresa`(`id_empresa`,`nombreempresa`,`direccionempresa`,`telefonoempresa`,`activoempresa`) values 
(1,'Comteco','La paz',522,1);

/*Table structure for table `estudia` */

DROP TABLE IF EXISTS `estudia`;

CREATE TABLE `estudia` (
  `Carrera_id_Carrera` int(11) NOT NULL,
  `estudiante_id_estudiante` int(11) NOT NULL,
  `estudiante_persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`Carrera_id_Carrera`,`estudiante_id_estudiante`,`estudiante_persona_id_persona`),
  KEY `fk_estudia_estudiante1_idx` (`estudiante_id_estudiante`,`estudiante_persona_id_persona`),
  CONSTRAINT `fk_Estudia_Carrera1` FOREIGN KEY (`Carrera_id_Carrera`) REFERENCES `carrera` (`id_Carrera`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_estudia_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`, `estudiante_persona_id_persona`) REFERENCES `estudiante` (`id_estudiante`, `persona_id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `estudia` */

/*Table structure for table `estudiante` */

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `id_estudiante` int(11) NOT NULL AUTO_INCREMENT,
  `activoestudiante` tinyint(4) DEFAULT NULL,
  `persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_estudiante`,`persona_id_persona`),
  KEY `fk_estudiante_persona1_idx` (`persona_id_persona`),
  CONSTRAINT `fk_estudiante_persona1` FOREIGN KEY (`persona_id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `estudiante` */

insert  into `estudiante`(`id_estudiante`,`activoestudiante`,`persona_id_persona`) values 
(1,1,2);

/*Table structure for table `funcionalidad` */

DROP TABLE IF EXISTS `funcionalidad`;

CREATE TABLE `funcionalidad` (
  `id_funcionalidad` int(11) NOT NULL AUTO_INCREMENT,
  `nombrefuncionalidad` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_funcionalidad`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `funcionalidad` */

insert  into `funcionalidad`(`id_funcionalidad`,`nombrefuncionalidad`) values 
(1,'crear/editar'),
(2,'visualizar'),
(3,'todo');

/*Table structure for table `necesita` */

DROP TABLE IF EXISTS `necesita`;

CREATE TABLE `necesita` (
  `Requisito_plantilla_id_Requisitoplantilla` int(11) NOT NULL,
  `Tramite_plantilla_idTramite_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`Requisito_plantilla_id_Requisitoplantilla`,`Tramite_plantilla_idTramite_plantilla`),
  KEY `fk_Necesita_Tramite_plantilla1_idx` (`Tramite_plantilla_idTramite_plantilla`),
  CONSTRAINT `fk_Necesita_Requisito_plantilla1` FOREIGN KEY (`Requisito_plantilla_id_Requisitoplantilla`) REFERENCES `requisito_plantilla` (`id_Requisitoplantilla`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Necesita_Tramite_plantilla1` FOREIGN KEY (`Tramite_plantilla_idTramite_plantilla`) REFERENCES `tramite_plantilla` (`idTramite_plantilla`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `necesita` */

/*Table structure for table `paso` */

DROP TABLE IF EXISTS `paso`;

CREATE TABLE `paso` (
  `id_Paso` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_re` date DEFAULT NULL,
  `fecha_des` date DEFAULT NULL,
  `numeropaso` int(11) DEFAULT NULL,
  `Tramite_id_tramite` int(11) NOT NULL,
  `Empleado_persona_id_persona` int(11) NOT NULL,
  PRIMARY KEY (`id_Paso`),
  KEY `fk_Paso_Tramite1_idx` (`Tramite_id_tramite`),
  KEY `fk_Paso_Empleado1_idx` (`Empleado_persona_id_persona`),
  CONSTRAINT `fk_Paso_Empleado1` FOREIGN KEY (`Empleado_persona_id_persona`) REFERENCES `empleado` (`persona_id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_Paso_Tramite1` FOREIGN KEY (`Tramite_id_tramite`) REFERENCES `tramite` (`id_tramite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `paso` */

/*Table structure for table `paso_plantilla` */

DROP TABLE IF EXISTS `paso_plantilla`;

CREATE TABLE `paso_plantilla` (
  `id_Pasoplantilla` int(11) NOT NULL AUTO_INCREMENT,
  `numeropasoplantilla` int(11) DEFAULT NULL,
  `duracion` int(11) DEFAULT NULL,
  `nombrepasoplantilla` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_Pasoplantilla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `paso_plantilla` */

/*Table structure for table `persona` */

DROP TABLE IF EXISTS `persona`;

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  `papellido` varchar(50) DEFAULT NULL,
  `sapellido` varchar(50) DEFAULT NULL,
  `ci` varchar(10) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `rol` int(11) DEFAULT NULL,
  `activo` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_persona`),
  UNIQUE KEY `email` (`email`),
  KEY `rol` (`rol`),
  CONSTRAINT `persona_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `persona` */

insert  into `persona`(`id_persona`,`nombre`,`papellido`,`sapellido`,`ci`,`telefono`,`direccion`,`email`,`rol`,`activo`) values 
(1,'admin','admin','admin','admin',0,'admin','admin@gmail.com',1,1),
(2,'Roy Franco','Cayo','BartolomÃ©','14393413',68141732,'00591','bartito24@gmail.com',3,1);

/*Table structure for table `privilegios` */

DROP TABLE IF EXISTS `privilegios`;

CREATE TABLE `privilegios` (
  `rol_id_rol` int(11) NOT NULL,
  `funcionalidad_id_funcionalidad` int(11) NOT NULL,
  KEY `fk_privilegios_rol1_idx` (`rol_id_rol`),
  KEY `fk_privilegios_funcionalidad1_idx` (`funcionalidad_id_funcionalidad`),
  CONSTRAINT `fk_privilegios_funcionalidad1` FOREIGN KEY (`funcionalidad_id_funcionalidad`) REFERENCES `funcionalidad` (`id_funcionalidad`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_privilegios_rol1` FOREIGN KEY (`rol_id_rol`) REFERENCES `rol` (`id_rol`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `privilegios` */

insert  into `privilegios`(`rol_id_rol`,`funcionalidad_id_funcionalidad`) values 
(2,1),
(3,2),
(1,3);

/*Table structure for table `procede` */

DROP TABLE IF EXISTS `procede`;

CREATE TABLE `procede` (
  `paso_plantilla_id_Pasoplantilla` int(11) NOT NULL,
  `tramite_plantilla_idTramite_plantilla` int(11) NOT NULL,
  PRIMARY KEY (`paso_plantilla_id_Pasoplantilla`,`tramite_plantilla_idTramite_plantilla`),
  KEY `fk_procede_tramite_plantilla1_idx` (`tramite_plantilla_idTramite_plantilla`),
  CONSTRAINT `fk_procede_paso_plantilla1` FOREIGN KEY (`paso_plantilla_id_Pasoplantilla`) REFERENCES `paso_plantilla` (`id_Pasoplantilla`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_procede_tramite_plantilla1` FOREIGN KEY (`tramite_plantilla_idTramite_plantilla`) REFERENCES `tramite_plantilla` (`idTramite_plantilla`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `procede` */

/*Table structure for table `requisito` */

DROP TABLE IF EXISTS `requisito`;

CREATE TABLE `requisito` (
  `id_Requisito` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerequisito` varchar(45) DEFAULT NULL,
  `valor` varchar(45) DEFAULT NULL,
  `Tramite_id_tramite` int(11) NOT NULL,
  PRIMARY KEY (`id_Requisito`),
  KEY `fk_Requisito_Tramite1_idx` (`Tramite_id_tramite`),
  CONSTRAINT `fk_Requisito_Tramite1` FOREIGN KEY (`Tramite_id_tramite`) REFERENCES `tramite` (`id_tramite`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `requisito` */

/*Table structure for table `requisito_plantilla` */

DROP TABLE IF EXISTS `requisito_plantilla`;

CREATE TABLE `requisito_plantilla` (
  `id_Requisitoplantilla` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerequisitoplatilla` varchar(45) DEFAULT NULL,
  `activorequisitoplantilla` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_Requisitoplantilla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `requisito_plantilla` */

/*Table structure for table `rol` */

DROP TABLE IF EXISTS `rol`;

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `nombrerol` varchar(50) DEFAULT NULL,
  `activorol` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `rol` */

insert  into `rol`(`id_rol`,`nombrerol`,`activorol`) values 
(1,'administrador',1),
(2,'Registros',1),
(3,'Estudiante',1),
(4,'Tutor',NULL);

/*Table structure for table `tramite` */

DROP TABLE IF EXISTS `tramite`;

CREATE TABLE `tramite` (
  `id_tramite` int(11) NOT NULL AUTO_INCREMENT,
  `condicion` varchar(50) NOT NULL,
  `Tramite_plantilla_idTramite_plantilla` int(11) NOT NULL,
  `estudiante_id_estudiante` int(11) NOT NULL,
  `estudiante_persona_id_persona` int(11) NOT NULL,
  `activotramiteiniciado` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`id_tramite`),
  KEY `fk_Tramite_Tramite_plantilla1_idx` (`Tramite_plantilla_idTramite_plantilla`),
  KEY `fk_tramite_estudiante1_idx` (`estudiante_id_estudiante`,`estudiante_persona_id_persona`),
  CONSTRAINT `fk_Tramite_Tramite_plantilla1` FOREIGN KEY (`Tramite_plantilla_idTramite_plantilla`) REFERENCES `tramite_plantilla` (`idTramite_plantilla`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_tramite_estudiante1` FOREIGN KEY (`estudiante_id_estudiante`, `estudiante_persona_id_persona`) REFERENCES `estudiante` (`id_estudiante`, `persona_id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tramite` */

/*Table structure for table `tramite_plantilla` */

DROP TABLE IF EXISTS `tramite_plantilla`;

CREATE TABLE `tramite_plantilla` (
  `idTramite_plantilla` int(11) NOT NULL AUTO_INCREMENT,
  `nombretramite` varchar(100) DEFAULT NULL,
  `activotramite` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`idTramite_plantilla`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tramite_plantilla` */

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) DEFAULT NULL,
  `clave` varchar(50) DEFAULT NULL,
  `persona_id_persona` int(11) NOT NULL,
  `activousuario` tinyint(4) DEFAULT NULL,
  `fechacreacion` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`,`persona_id_persona`),
  KEY `fk_usuario_persona1_idx` (`persona_id_persona`),
  CONSTRAINT `fk_usuario_persona1` FOREIGN KEY (`persona_id_persona`) REFERENCES `persona` (`id_persona`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id_usuario`,`usuario`,`clave`,`persona_id_persona`,`activousuario`,`fechacreacion`) values 
(1,'admin@gmail.com','21232f297a57a5a743894a0e4a801fc3',1,1,'2018-09-11 12:47:59'),
(2,'bartito24@gmail.com','81dc9bdb52d04dc20036dbd8313ed055',2,1,'2018-09-18 23:49:32');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

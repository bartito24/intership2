-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.19 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando datos para la tabla mydb.area: ~0 rows (aproximadamente)
DELETE FROM `area`;
/*!40000 ALTER TABLE `area` DISABLE KEYS */;
/*!40000 ALTER TABLE `area` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.carrera: ~0 rows (aproximadamente)
DELETE FROM `carrera`;
/*!40000 ALTER TABLE `carrera` DISABLE KEYS */;
/*!40000 ALTER TABLE `carrera` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.cuenta: ~0 rows (aproximadamente)
DELETE FROM `cuenta`;
/*!40000 ALTER TABLE `cuenta` DISABLE KEYS */;
/*!40000 ALTER TABLE `cuenta` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.cursado: ~0 rows (aproximadamente)
DELETE FROM `cursado`;
/*!40000 ALTER TABLE `cursado` DISABLE KEYS */;
/*!40000 ALTER TABLE `cursado` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.curso: ~0 rows (aproximadamente)
DELETE FROM `curso`;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.empleado: ~0 rows (aproximadamente)
DELETE FROM `empleado`;
/*!40000 ALTER TABLE `empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleado` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.estudia: ~0 rows (aproximadamente)
DELETE FROM `estudia`;
/*!40000 ALTER TABLE `estudia` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudia` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.estudiante: ~0 rows (aproximadamente)
DELETE FROM `estudiante`;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.funcionalidad: ~0 rows (aproximadamente)
DELETE FROM `funcionalidad`;
/*!40000 ALTER TABLE `funcionalidad` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionalidad` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.necesita: ~0 rows (aproximadamente)
DELETE FROM `necesita`;
/*!40000 ALTER TABLE `necesita` DISABLE KEYS */;
/*!40000 ALTER TABLE `necesita` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.paso: ~0 rows (aproximadamente)
DELETE FROM `paso`;
/*!40000 ALTER TABLE `paso` DISABLE KEYS */;
/*!40000 ALTER TABLE `paso` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.paso_plantilla: ~0 rows (aproximadamente)
DELETE FROM `paso_plantilla`;
/*!40000 ALTER TABLE `paso_plantilla` DISABLE KEYS */;
/*!40000 ALTER TABLE `paso_plantilla` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.persona: ~6 rows (aproximadamente)
DELETE FROM `persona`;
/*!40000 ALTER TABLE `persona` DISABLE KEYS */;
INSERT INTO `persona` (`id_persona`, `nombre`, `papellido`, `sapellido`, `ci`, `telefono`, `direccion`) VALUES
	(1, 'alejandro', 'wills', 'mercado', '123123', 324234, 'calle camiri'),
	(2, 'prueba', 'prueba', 'prueba', '123123dad', 2342455, 'calalcacaca'),
	(3, 'alejandro', 'willsass', 'asdasd', '12312', 23124332, 'ADSFADFASF'),
	(4, 'otro', 'otro', 'otro', '1334234', 234254, 'aksdfnasdf4afdsf'),
	(5, 'asdasdasd', 'dasfsdfsdf', 'dfgdfgdfgdfg', '2342342342', 245234234, 'fdsfsdfsdfsdf'),
	(6, 'carlos', 'bustamante', 'gomes', '21233123', 123123123, 'nos e');
/*!40000 ALTER TABLE `persona` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.privilegios: ~0 rows (aproximadamente)
DELETE FROM `privilegios`;
/*!40000 ALTER TABLE `privilegios` DISABLE KEYS */;
/*!40000 ALTER TABLE `privilegios` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.requisito: ~0 rows (aproximadamente)
DELETE FROM `requisito`;
/*!40000 ALTER TABLE `requisito` DISABLE KEYS */;
/*!40000 ALTER TABLE `requisito` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.requisito_plantilla: ~0 rows (aproximadamente)
DELETE FROM `requisito_plantilla`;
/*!40000 ALTER TABLE `requisito_plantilla` DISABLE KEYS */;
INSERT INTO `requisito_plantilla` (`id_Requisitoplantilla`, `nombre`) VALUES
	(1, 'carnet de identidad');
/*!40000 ALTER TABLE `requisito_plantilla` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.rol: ~0 rows (aproximadamente)
DELETE FROM `rol`;
/*!40000 ALTER TABLE `rol` DISABLE KEYS */;
/*!40000 ALTER TABLE `rol` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.tramite: ~0 rows (aproximadamente)
DELETE FROM `tramite`;
/*!40000 ALTER TABLE `tramite` DISABLE KEYS */;
/*!40000 ALTER TABLE `tramite` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.tramite_plantilla: ~2 rows (aproximadamente)
DELETE FROM `tramite_plantilla`;
/*!40000 ALTER TABLE `tramite_plantilla` DISABLE KEYS */;
INSERT INTO `tramite_plantilla` (`idTramite_plantilla`, `nombre`) VALUES
	(1, 'carnet de identidad'),
	(2, 'carnet de identidad'),
	(3, 'carnet de identidad');
/*!40000 ALTER TABLE `tramite_plantilla` ENABLE KEYS */;

-- Volcando datos para la tabla mydb.usuario: ~0 rows (aproximadamente)
DELETE FROM `usuario`;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`id_usuario`, `usuario`, `contraseña`, `persona_id_persona`) VALUES
	(1, 'prueba', 'prueba', 2),
	(2, 'prueba', 'prueba', 1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

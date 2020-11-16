-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.14-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura para tabla daw2.proyecto
CREATE TABLE IF NOT EXISTS `proyecto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_6FD202B93397707A` (`categoria_id`),
  CONSTRAINT `FK_6FD202B93397707A` FOREIGN KEY (`categoria_id`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla daw2.proyecto: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `proyecto` DISABLE KEYS */;
INSERT IGNORE INTO `proyecto` (`id`, `nombre`, `descripcion`, `imagen`, `categoria_id`) VALUES
	(1, 'Proyecto 1', 'Proyecto 1', 'services-1.jpg', 4),
	(2, 'Proyecto 2', 'Proyecto 2', 'services-2.jpg', 4),
	(3, 'Proyecto 3', 'Proyecto 3', 'services-3.jpg', 4),
	(4, 'Proyecto 4', 'Proyecto 4', 'services-4.jpg', 4),
	(5, 'Proyecto 5', 'Proyecto 5', 'services-1.jpg', 4),
	(6, 'Proyecto 6', 'Proyecto 6', 'services-2.jpg', 5),
	(7, 'Proyecto 7', 'Proyecto 7', 'services-3.jpg', 5),
	(8, 'Proyecto 8', 'Proyecto 8', 'services-4.jpg', 5),
	(9, 'Proyecto 9', 'Proyecto 9', 'services-1.jpg', 5),
	(10, 'Proyecto 10', 'Proyecto 10', 'services-2.jpg', 5),
	(11, 'Proyecto 11', 'Proyecto 11', 'services-3.jpgg', 5),
	(12, 'Proyecto 9', 'Proyecto 9', 'services-1.jpg', 6),
	(13, 'Proyecto 10', 'Proyecto 10', 'services-2.jpg', 6),
	(14, 'Proyecto 11', 'Proyecto 11', 'services-3.jpgg', 6),
	(15, 'Proyecto 6', 'Proyecto 6', 'services-2.jpg', 6),
	(16, 'Proyecto 7', 'Proyecto 7', 'services-3.jpg', 6),
	(17, 'Proyecto 8', 'Proyecto 8', 'services-4.jpg', 6);
/*!40000 ALTER TABLE `proyecto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

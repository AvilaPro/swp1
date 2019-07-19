-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 09-07-2019 a las 10:32:16
-- Versión del servidor: 5.7.26
-- Versión de PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_services`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `api_key`
--

DROP TABLE IF EXISTS `api_key`;
CREATE TABLE IF NOT EXISTS `api_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `api_key`
--

INSERT INTO `api_key` (`id`, `token`, `fecha_creacion`) VALUES
(1, '123456', '2019-07-09 10:18:40'),
(2, 'zaCELgL0imfnc8mVLWwsAawjYr4Rx-Af50DDqtlx', '2019-07-09 10:18:40'),
(3, 'root', '2019-07-09 10:18:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

DROP TABLE IF EXISTS `cuenta`;
CREATE TABLE IF NOT EXISTS `cuenta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id`, `nombre`, `username`, `password`) VALUES
(1, 'admin', 'root', 'Secret0'),
(2, 'Personal', 'person', '123456'),
(3, 'Reporte', 'ReportesFinancieros', '123456789'),
(4, 'ReporteM', 'ReportesMensuales', '123456789123'),
(5, 'ReporteMs', 'ReportesMensualessd', '123456789123'),
(6, 'ReporteMs', 'ReportesMensualessd', '123456789123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

DROP TABLE IF EXISTS `factura`;
CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_cliente` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `cedula_cliente` int(11) NOT NULL,
  `monto` double NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `nombre_cliente`, `cedula_cliente`, `monto`, `fecha_registro`) VALUES
(1, 'Miguel', 3432423, 4000, '2019-07-08 04:00:00'),
(2, 'Jose', 35467856, 45000, '2019-07-08 22:49:30'),
(3, 'Alberto', 12564537, 56700, '2019-07-08 22:49:46');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

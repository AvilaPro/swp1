-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2019 a las 02:23:36
-- Versión del servidor: 5.7.17
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `services`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `api_key`
--

CREATE TABLE `api_key` (
  `id` int(11) NOT NULL,
  `token` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `api_key`
--

INSERT INTO `api_key` (`id`, `token`, `fecha_creacion`) VALUES
(4, '123456', '2019-07-14 04:00:00'),
(5, '654321', '2019-07-28 04:00:00'),
(6, '323271', '2019-07-18 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pasajero`
--

CREATE TABLE `pasajero` (
  `id` int(11) NOT NULL COMMENT 'Identificador',
  `nombre` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_salida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Fecha de salida del vuelo',
  `fecha_llegada` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Fecha de llegada del vuelo',
  `destino` text COLLATE utf8_spanish_ci NOT NULL COMMENT 'Destino del pasajero. ej; Paris. Madrid. Caracas. etc.'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pasajero`
--

INSERT INTO `pasajero` (`id`, `nombre`, `apellido`, `fecha_salida`, `fecha_llegada`, `destino`) VALUES
(1, 'Yosiko', 'moMóco', '2019-07-12 04:00:00', '2019-07-14 04:00:00', 'Tu corazón'),
(2, 'Elberg', 'alarga', '2019-07-01 04:00:00', '2019-07-31 04:00:00', 'Entrepiernas '),
(3, 'Eusebia', 'Tetas Planas', '2019-07-17 04:00:00', '2019-07-31 04:00:00', 'Peoresnada - Chile'),
(4, 'Dolores', 'DeLano', '2019-07-11 04:00:00', '2019-07-31 04:00:00', 'Kagar - Alemania'),
(5, 'Cyndi', 'Entes', '2019-07-24 04:00:00', '2019-08-19 04:00:00', 'Dildo - Canadá'),
(6, 'Elvio', 'lado', '2019-07-10 04:00:00', '2019-07-31 04:00:00', 'Caracas'),
(7, 'Olga ', 'Disima de Loyo', '2019-07-11 04:00:00', '2019-07-27 04:00:00', 'Perú'),
(8, 'Zampa ', 'Teste', '2019-07-26 04:00:00', '2019-07-31 04:00:00', 'Colombia'),
(9, 'Miren', 'Amiano', '2019-07-15 04:00:00', '2019-07-30 04:00:00', 'Chile'),
(10, 'Al-Sakad ', 'Meted', '2019-08-15 04:00:00', '2020-02-24 04:00:00', 'Japón '),
(11, 'Miguel', 'Mendoza', '2019-07-31 04:00:00', '2030-03-29 04:00:00', 'España'),
(12, 'Zoyla', 'Becerra', '2019-07-25 04:00:00', '2019-07-01 04:00:00', 'Al pasado'),
(13, 'Jorge', 'Nitales', '2019-07-01 04:00:00', '2019-07-25 04:00:00', 'Miami'),
(14, 'Teyeno ', 'Tuoyo', '2019-07-24 04:00:00', '2019-07-01 04:00:00', 'China'),
(15, 'Al-Bajad ', 'Mamad', '2019-07-16 04:00:00', '2019-07-31 04:00:00', 'Dubai');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `api_key`
--
ALTER TABLE `api_key`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `api_key`
--
ALTER TABLE `api_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `pasajero`
--
ALTER TABLE `pasajero`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador', AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

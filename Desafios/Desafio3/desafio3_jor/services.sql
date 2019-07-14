-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:33062
-- Tiempo de generación: 12-07-2019 a las 16:23:15
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

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
(4, '123abc', '2019-07-12 13:05:35'),
(5, '1122334455', '2019-07-12 13:05:35'),
(6, '1234567890', '2019-07-12 13:05:35');

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
(1, 'Jorge', 'Guanipa', '2019-07-26 00:15:00', '2019-07-26 11:00:00', 'Madrid'),
(2, 'Carlos', 'Albornoz', '2019-07-22 14:15:00', '2019-07-23 03:15:00', 'Paris'),
(3, 'Eduardo', 'Mejias', '2019-08-02 16:15:00', '2019-08-03 03:15:00', 'Amsterdam'),
(4, 'Jose', 'Rodriguez', '2019-08-03 14:20:00', '2019-08-03 15:15:00', 'Caracas'),
(5, 'Maria', 'Perez', '2019-08-05 12:15:00', '2019-08-05 15:45:00', 'Cucuta'),
(6, 'Ana', 'Camacaro', '2019-08-05 15:15:00', '2019-08-05 16:45:00', 'Maracaibo'),
(7, 'Juan', 'Gutierrez', '2019-08-08 13:15:00', '2019-08-08 05:45:00', 'Ciudad de Panama'),
(8, 'Freddy', 'Castillo', '2019-08-09 10:15:00', '2019-08-09 15:30:00', 'Quito'),
(9, 'Albert', 'Mora', '2019-08-11 14:20:00', '2019-08-11 20:45:00', 'Buenos Aires'),
(10, 'Alejandra', 'Aponte', '2019-08-12 12:20:00', '2019-08-12 18:45:00', 'Santiago de Chile'),
(11, 'Isabella', 'Gonzalez', '2019-08-14 19:20:00', '2019-08-15 08:45:00', 'Londres'),
(12, 'Cesar', 'Guerrero', '2019-08-16 15:20:00', '2019-08-16 22:45:00', 'Bogota'),
(13, 'Luisa', 'Rios', '2019-08-19 14:20:00', '2019-08-11 20:45:00', 'Lima'),
(14, 'Franklin', 'Blanco', '2019-08-28 09:30:00', '2019-08-28 17:45:00', 'Mexico DC'),
(15, 'Orlando', 'Camacho', '2019-08-30 12:20:00', '2019-08-11 17:45:00', 'Miami'),
(16, 'Vivian', 'Martinez', '2019-08-30 17:20:00', '2019-08-31 02:45:00', 'Rio de Janeiro');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Identificador', AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

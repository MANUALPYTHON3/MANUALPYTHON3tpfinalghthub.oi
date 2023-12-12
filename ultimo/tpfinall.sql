-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 12-12-2023 a las 04:44:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tpfinall`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arg`
--
-- Creación: 12-12-2023 a las 03:36:13
--

CREATE TABLE `arg` (
  `nombre_arg` varchar(20) NOT NULL,
  `descripcion_arg` varchar(200) NOT NULL,
  `precio_fruta` int(200) NOT NULL,
  `id_arg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `euro`
--
-- Creación: 12-12-2023 a las 03:38:29
--

CREATE TABLE `euro` (
  `nombre_euro` varchar(20) NOT NULL,
  `descripcion_euro` varchar(100) NOT NULL,
  `precio_euro` int(200) NOT NULL,
  `id_euro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frutas`
--
-- Creación: 11-12-2023 a las 12:37:03
-- Última actualización: 11-12-2023 a las 14:17:36
--

CREATE TABLE `frutas` (
  `nombre_fruta` varchar(20) NOT NULL,
  `descripcion_fruta` varchar(100) NOT NULL,
  `precio_fruta` int(255) NOT NULL,
  `id_fruta` int(11) NOT NULL,
  `imagen_fruta` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `frutas`
--

INSERT INTO `frutas` (`nombre_fruta`, `descripcion_fruta`, `precio_fruta`, `id_fruta`, `imagen_fruta`) VALUES
('uva', 'rico', 300, 1, NULL),
('lucio', 'rtrty', 243, 2, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `japon`
--
-- Creación: 12-12-2023 a las 03:37:21
--

CREATE TABLE `japon` (
  `nombre_japon` varchar(20) NOT NULL,
  `descripcion_japon` varchar(100) NOT NULL,
  `precio_japon` int(200) NOT NULL,
  `id_japon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `arg`
--
ALTER TABLE `arg`
  ADD PRIMARY KEY (`id_arg`);

--
-- Indices de la tabla `euro`
--
ALTER TABLE `euro`
  ADD PRIMARY KEY (`id_euro`);

--
-- Indices de la tabla `frutas`
--
ALTER TABLE `frutas`
  ADD PRIMARY KEY (`id_fruta`);

--
-- Indices de la tabla `japon`
--
ALTER TABLE `japon`
  ADD PRIMARY KEY (`id_japon`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `arg`
--
ALTER TABLE `arg`
  MODIFY `id_arg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `euro`
--
ALTER TABLE `euro`
  MODIFY `id_euro` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `frutas`
--
ALTER TABLE `frutas`
  MODIFY `id_fruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `japon`
--
ALTER TABLE `japon`
  MODIFY `id_japon` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

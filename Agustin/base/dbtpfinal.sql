-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 20-10-2022 a las 18:42:48
-- Versión del servidor: 5.7.33
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbtpfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablaautos`
--

CREATE TABLE `tablaautos` (
  `id` int(100) NOT NULL,
  `patente` varchar(10) NOT NULL,
  `marca` varchar(10) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `anio` varchar(4) NOT NULL,
  `color` varchar(10) NOT NULL,
  `pathImagen` varchar(100) DEFAULT NULL,
  `usuario` varchar(10) DEFAULT NULL,
  `precio` decimal(20,2) NOT NULL,
  `existe` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tablaautos`
--

INSERT INTO `tablaautos` (`id`, `patente`, `marca`, `modelo`, `anio`, `color`, `pathImagen`, `usuario`, `precio`, `existe`) VALUES
(1, 'jqc238', 'Peugeot', '307', '2012', 'Blanco', NULL, NULL, '1400.00', 1),
(2, 'aiq900', 'Volkswagen', 'Pointer', '1995', 'Rojo', NULL, NULL, '300.00', 1),
(3, 'abc123', 'Subaru', 'BRZ', '2012', 'Azul', NULL, NULL, '3000.00', 1),
(4, '', '', '', '', '', NULL, NULL, '0.00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tablausuarios`
--

CREATE TABLE `tablausuarios` (
  `id` int(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `nombre` varchar(10) NOT NULL,
  `apellido` varchar(10) NOT NULL,
  `dni` int(20) NOT NULL,
  `idauto` int(100) DEFAULT NULL,
  `isadmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tablausuarios`
--

INSERT INTO `tablausuarios` (`id`, `username`, `pass`, `nombre`, `apellido`, `dni`, `idauto`, `isadmin`) VALUES
(1, 'ezekun', 'cd0169ba10ecd65c31b3058120ccac1b', 'Ezequiel', 'Romero', 50000000, NULL, 0),
(2, 'elidalpino', '719ee20e407cdaac6d7f43e784201f49', 'Eliana', 'Dalpino', 39393939, NULL, 0),
(3, 'jmarquez', 'd7d35cc51fff9843c90fb2bdf175c7a0', 'Juan', 'Marquez', 12345678, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tablaautos`
--
ALTER TABLE `tablaautos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tablausuarios`
--
ALTER TABLE `tablausuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tablaautos`
--
ALTER TABLE `tablaautos`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tablausuarios`
--
ALTER TABLE `tablausuarios`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

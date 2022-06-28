-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2022 a las 16:37:58
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `id_rango` int(10) UNSIGNED NOT NULL,
  `rango` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `Oficial/Suboficial` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`id_rango`, `rango`, `division`, `Oficial/Suboficial`) VALUES
(1, 'Voluntario de segunda «en comisión»', 'Ejercito', 'Suboficial'),
(2, 'Voluntario de segunda', 'Ejercito', 'Suboficial'),
(3, 'Voluntario de primera', 'Ejercito', 'Suboficial'),
(4, 'Cabo', 'Ejercito', 'Suboficial'),
(5, 'Cabo primero', 'Ejercito', 'Suboficial'),
(6, 'Sargento', 'Ejercito', 'Suboficial'),
(7, 'Sargento primero', 'Ejercito', 'Suboficial'),
(8, 'Sargento ayudante', 'Ejercito', 'Suboficial'),
(9, 'Suboficial principal', 'Ejercito', 'Suboficial'),
(10, 'Subofical mayor', 'Ejercito', 'Suboficial'),
(11, 'Subteniente', 'Ejercito', 'Oficial'),
(12, 'Teniente', 'Ejercito', 'Oficial'),
(13, 'Teniente primero', 'Ejercito', 'Oficial'),
(14, 'Capitán', 'Ejercito', 'Oficial'),
(15, 'Mayor', 'Ejercito', 'Oficial'),
(16, 'Teniente Coronel', 'Ejercito', 'Oficial'),
(17, 'Coronel', 'Ejercito', 'Oficial'),
(18, 'Coronel mayor', 'Ejercito', 'Oficial'),
(19, 'General de brigada', 'Ejercito', 'Oficial'),
(20, 'General de división', 'Ejercito', 'Oficial'),
(21, 'Teniente general', 'Ejercito', 'Oficial'),
(22, 'Marinero de segunda', 'Armada', 'Suboficial'),
(23, 'Marinero de primera', 'Armada', 'Suboficial');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`id_rango`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `id_rango` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

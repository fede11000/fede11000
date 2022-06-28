-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2022 a las 16:07:12
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `armas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos-aereos`
--

CREATE TABLE `vehiculos-aereos` (
  `id_aereos` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `velocidad` varchar(50) NOT NULL,
  `capacidad` varchar(70) NOT NULL,
  `descripcion` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos-aereos`
--

INSERT INTO `vehiculos-aereos` (`id_aereos`, `nombre`, `tipo`, `velocidad`, `capacidad`, `descripcion`) VALUES
(1, 'Lockheed martin A4AR fightinghawk', 'combate aereo', '1080 km/h', '2 personas', 'El Lockheed Martin A-4AR Fightinghawk (en español, Halcón luchador) es un cazabombardero estadounidense  creado para la Fuerza Aérea Argentina en 1995. Deriva del McDonnell Douglas A-4M Skyhawk Del Cuerpo de Marines de los Estados Unidos, re-fabricado y modernizado. Aglutina las virtudes del benemérito A-4 con la moderna aviónica del F-16 Fighting Falcon.Actualmente la Fuerza Aérea Argentina opera con 6 unidades.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_de_armas`
--

CREATE TABLE `venta_de_armas` (
  `id_arma` int(10) UNSIGNED NOT NULL,
  `tipo_arma` varchar(20) NOT NULL,
  `name_arma` varchar(20) NOT NULL,
  `nacioanlidad` varchar(20) NOT NULL,
  `precio_arma` int(15) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_de_armas`
--

INSERT INTO `venta_de_armas` (`id_arma`, `tipo_arma`, `name_arma`, `nacioanlidad`, `precio_arma`) VALUES
(1, 'pistolita', 'fmk-3', 'argentina', 12000),
(2, 'pistola', 'tokarev', 'unión sovietica', 20000),
(3, 'fusil de asalto', 'ak-47', 'unión sovietica', 56000),
(4, 'rifle francotirador', 'm40', 'estadounidense', 80000000);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vehiculos-aereos`
--
ALTER TABLE `vehiculos-aereos`
  ADD PRIMARY KEY (`id_aereos`);

--
-- Indices de la tabla `venta_de_armas`
--
ALTER TABLE `venta_de_armas`
  ADD PRIMARY KEY (`id_arma`),
  ADD UNIQUE KEY `precio_arma` (`precio_arma`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vehiculos-aereos`
--
ALTER TABLE `vehiculos-aereos`
  MODIFY `id_aereos` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `venta_de_armas`
--
ALTER TABLE `venta_de_armas`
  MODIFY `id_arma` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

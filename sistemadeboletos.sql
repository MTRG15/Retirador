-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 21-10-2017 a las 04:12:09
-- Versión del servidor: 5.7.19
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemadeboletos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `cedula` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `cedula`, `direccion`, `sexo`, `telefono`, `email`, `usuario`, `password`) VALUES
(1, 'Gerifruncio Maizeno', 'De La Consolacion', 123456, 'Junto a Merceria Paquita', 'none', '08001235555', 'malindranio@gmail.com', 'p3tr0m1n0', 'chanchan'),
(2, 'Jose', 'Perez', 2567382, 'Hell', 'otro', '041666666', 'elcorreo@hotmail.com', 'jose', 'epa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

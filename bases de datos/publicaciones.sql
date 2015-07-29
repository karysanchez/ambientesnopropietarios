-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-07-2015 a las 15:44:31
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `publicaciones`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasicos`
--

CREATE TABLE IF NOT EXISTS `clasicos` (
  `id` int(10) unsigned NOT NULL,
  `autor` varchar(128) DEFAULT NULL,
  `titulo` varchar(128) DEFAULT NULL,
  `tipo` varchar(16) DEFAULT NULL,
  `anio` char(4) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clasicos`
--

INSERT INTO `clasicos` (`id`, `autor`, `titulo`, `tipo`, `anio`) VALUES
(2, 'Jane\r\nAusten', 'Pride and Prejudice', 'Fiction', '1811'),
(3, 'Charles\r\nDarwin', 'The Origin of Species', 'Non-Fiction', '1856'),
(4, 'Charles\r\nDickens', 'The Old Curiosity Shop', 'Fiction', '1841'),
(5, '', '', '', ''),
(6, 'Luis', 'Calamidades', 'Horror', '1995'),
(7, 'Carlos', 'Corre corre', 'Fiction', '1587'),
(8, '', '', '', ''),
(9, 'Jose', 'Cronicas de muerte', 'Horror', '1995');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clasicos`
--
ALTER TABLE `clasicos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clasicos`
--
ALTER TABLE `clasicos`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-07-2015 a las 19:17:14
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `criadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acciones`
--

CREATE TABLE IF NOT EXISTS `acciones` (
  `codAccPerfil` int(10) unsigned NOT NULL,
  `nomAccPerfil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `accionporperfil`
--

CREATE TABLE IF NOT EXISTS `accionporperfil` (
  `codAccPerfil` int(11) NOT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `codCliente` int(10) unsigned NOT NULL,
  `ciCliente` int(11) NOT NULL,
  `nomCliente` varchar(50) CHARACTER SET ucs2 NOT NULL,
  `apellcliente` varchar(50) NOT NULL,
  `direccCliente` varchar(50) NOT NULL,
  `telefCliente` int(10) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compragastos`
--

CREATE TABLE IF NOT EXISTS `compragastos` (
  `codCompra` int(10) unsigned NOT NULL,
  `nomProductoGastos` varchar(50) NOT NULL,
  `cantidadCompra` int(11) NOT NULL,
  `precioCompra` decimal(10,0) NOT NULL,
  `cantidadStock` int(11) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfiles`
--

CREATE TABLE IF NOT EXISTS `perfiles` (
  `codPerfil` int(10) unsigned NOT NULL,
  `nomPerfil` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfiles`
--

INSERT INTO `perfiles` (`codPerfil`, `nomPerfil`) VALUES
(1, 'administrador'),
(2, 'vendedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productopollo`
--

CREATE TABLE IF NOT EXISTS `productopollo` (
  `codProductoPollo` int(10) unsigned NOT NULL,
  `cantidadStockPollo` int(11) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `codUsuario` int(10) unsigned NOT NULL,
  `ciUsuario` int(10) NOT NULL,
  `nomUsuario` varchar(50) NOT NULL,
  `apellUsuario` varchar(50) NOT NULL,
  `telfUsuario` int(10) NOT NULL,
  `direccUsuario` varchar(50) NOT NULL,
  `contrasenaUsuario` varchar(50) NOT NULL,
  `codPerfil` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codUsuario`, `ciUsuario`, `nomUsuario`, `apellUsuario`, `telfUsuario`, `direccUsuario`, `contrasenaUsuario`, `codPerfil`) VALUES
(1, 1726816497, 'karina', 'sanchez', 983850167, 'santa barbara alta', 'karina25', 1),
(2, 1726526495, 'gloria', 'taco', 984561286, 'calderon', 'gloria25', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `codVenta` int(10) unsigned NOT NULL,
  `codProductoPollo` int(11) NOT NULL,
  `codCliente` int(11) NOT NULL,
  `descuento` decimal(10,0) NOT NULL,
  `pesoPollo` decimal(10,0) NOT NULL,
  `cantCompraPollo` int(11) NOT NULL,
  `totalVenta` decimal(10,0) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acciones`
--
ALTER TABLE `acciones`
  ADD PRIMARY KEY (`codAccPerfil`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codCliente`);

--
-- Indices de la tabla `compragastos`
--
ALTER TABLE `compragastos`
  ADD PRIMARY KEY (`codCompra`);

--
-- Indices de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  ADD PRIMARY KEY (`codPerfil`);

--
-- Indices de la tabla `productopollo`
--
ALTER TABLE `productopollo`
  ADD PRIMARY KEY (`codProductoPollo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codUsuario`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`codVenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acciones`
--
ALTER TABLE `acciones`
  MODIFY `codAccPerfil` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codCliente` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `compragastos`
--
ALTER TABLE `compragastos`
  MODIFY `codCompra` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `perfiles`
--
ALTER TABLE `perfiles`
  MODIFY `codPerfil` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `productopollo`
--
ALTER TABLE `productopollo`
  MODIFY `codProductoPollo` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `codUsuario` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

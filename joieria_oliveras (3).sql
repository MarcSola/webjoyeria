-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-12-2015 a las 01:36:23
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `joieria_oliveras`
--
CREATE DATABASE IF NOT EXISTS `joieria_oliveras` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `joieria_oliveras`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_productos`
--

DROP TABLE IF EXISTS `descripcion_productos`;
CREATE TABLE IF NOT EXISTS `descripcion_productos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_producto` int(10) NOT NULL,
  `sexo` varchar(100) NOT NULL,
  `descripcion_producto` varchar(10000) NOT NULL,
  `tipo_reloj` varchar(200) NOT NULL,
  `medidas` varchar(200) NOT NULL,
  `impermeabilidad` varchar(200) NOT NULL,
  `caja` varchar(200) NOT NULL,
  `fondo` varchar(200) NOT NULL,
  `correa` varchar(200) NOT NULL,
  `funciones` varchar(300) NOT NULL,
  `pvp` decimal(10,2) NOT NULL,
  `movimiento` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `descripcion_productos`
--

INSERT INTO `descripcion_productos` (`id`, `id_producto`, `sexo`, `descripcion_producto`, `tipo_reloj`, `medidas`, `impermeabilidad`, `caja`, `fondo`, `correa`, `funciones`, `pvp`, `movimiento`) VALUES
(1, 1, 'hombre', 'Reloj analógico multifunción', 'Reloj hombre', '47.5 x 47.5 x 14 mm.', '10 ATM', 'Acero chapado negro con bisel chapado rosa', 'A rosca', 'Acero chapado negro con cierre de seguridad con doble muelle', 'Horas, minutos, segundos, calendario, semanario, 0-24h', '169.00', 'Cuarzo'),
(2, 2, 'mujer', 'Reloj analógico', 'Reloj hombre', '51 x 46 x 13 mm.', '5 ATM', 'Aluminio con bisel negro', 'A rosca', 'Caucho', 'Horas, minutos, segundos, calendario', '109.00', 'Cuarzo'),
(3, 3, 'hombre', 'Reloj analógico', 'Reloj hombre', '54 x 45 x 13 mm.', '10 ATM', 'Acero', 'A rosca', 'Caucho', 'Horas, minutos, segundos y calendario', '109.00', 'Cuarzo'),
(4, 6, 'hombre', 'Reloj analógico', 'Reloj hombre', '51 x 46 x 13 mm.', '10 ATM', 'Acero', 'A rosca', 'Caucho', 'Horas, minutos, segundos, calendario', '109.00', 'Cuarzo'),
(5, 10, 'hombre', 'Reloj analógico multifunción', 'Reloj hombre', '47.5 x 47.5 x 14 mm.', '10 ATM', 'Acero con bisel negro o acero chapado negro con bisel acero', 'A rosca', 'Silicona', 'Horas, minutos, segundos, calendario, semanario, 0-24h', '149.00', 'Cuarzo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf32 NOT NULL,
  `estado del producto` int(1) NOT NULL DEFAULT '1',
  `familia` varchar(150) NOT NULL,
  `trademark_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `estado del producto`, `familia`, `trademark_id`, `created_at`, `updated_at`) VALUES
(1, '40-2780-0-0', 1, 'relojes', 2, '2015-12-27 17:54:03', '2015-12-27 17:54:03'),
(2, '40-2653-0-1', 1, 'relojes', 2, '2015-12-27 18:47:28', '2015-12-27 18:47:28'),
(3, '40-2656-0-1', 1, 'relojes', 2, '2015-12-27 19:59:27', '2015-12-27 19:59:27'),
(6, '40-2655-0-1', 1, 'relojes', 2, '2015-12-27 20:26:51', '2015-12-27 20:26:51'),
(10, '40-2781-0-3', 1, 'relojes', 2, '2015-12-27 21:43:42', '2015-12-27 21:43:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_imagenes`
--

DROP TABLE IF EXISTS `productos_imagenes`;
CREATE TABLE IF NOT EXISTS `productos_imagenes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(300) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `url` varchar(300) NOT NULL,
  `color` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `productos_imagenes`
--

INSERT INTO `productos_imagenes` (`id`, `nombre_imagen`, `producto_id`, `url`, `color`, `created_at`, `updated_at`) VALUES
(1, '40-2780-0-0', 1, '40-2780-0-0.jpg', '', '2015-12-27 17:59:47', '2015-12-27 17:59:47'),
(2, '40-2653-0-1', 2, '40-2653-0-1.jpg', 'negro', '2015-12-27 18:48:35', '2015-12-27 18:48:35'),
(3, '40-2656-0-1', 3, '40-2656-0-1.jpg', '', '2015-12-27 19:59:58', '2015-12-27 19:59:58'),
(4, '40-2653-0-3', 2, '40-2653-0-3.jpg', 'amarillo', '2015-12-27 20:19:44', '2015-12-27 20:19:44'),
(5, '40-2653-0-4', 2, '40-2653-0-4.jpg', 'rosa', '2015-12-27 20:19:44', '2015-12-27 20:19:44'),
(6, '40-2655-0-1', 6, '40-2655-0-1.jpg', 'blanco', '2015-12-27 20:28:21', '2015-12-27 20:28:21'),
(7, '40-2655-0-2', 6, '40-2655-0-2.jpg', 'gris', '2015-12-27 20:28:21', '2015-12-27 20:28:21'),
(8, '40-2655-0-3', 6, '40-2655-0-3.jpg', 'negro', '2015-12-27 20:57:12', '2015-12-27 20:57:12'),
(9, '40-2653-0-2', 2, '40-2653-0-2.jpg', 'azul', '2015-12-27 20:57:12', '2015-12-27 20:57:12'),
(10, '40-2781-0-3', 10, '40-2781-0-3.jpg', '', '2015-12-27 21:44:40', '2015-12-27 21:44:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trademark`
--

DROP TABLE IF EXISTS `trademark`;
CREATE TABLE IF NOT EXISTS `trademark` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `color` varchar(50) DEFAULT 'white',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `trademark`
--

INSERT INTO `trademark` (`id`, `nombre`, `logo`, `color`, `created_at`, `updated_at`) VALUES
(2, 'potens', '/potens/logo.jpg', 'white', '2015-09-27 03:56:21', '2015-09-27 03:56:21'),
(4, 'nowley', '/nowley/logo.jpg', 'white', '2015-09-27 03:58:32', '2015-09-27 03:58:32'),
(5, 'citizen', '/citizen/logo.png', 'white', '2015-09-27 03:58:32', '2015-09-27 03:58:32'),
(6, 'sector', '/sector/logo.png', 'white', '2015-09-27 03:59:00', '2015-09-27 03:59:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

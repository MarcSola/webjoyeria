-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-12-2015 a las 18:54:49
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `descripcion_productos`
--

INSERT INTO `descripcion_productos` (`id`, `id_producto`, `descripcion_producto`, `tipo_reloj`, `medidas`, `impermeabilidad`, `caja`, `fondo`, `correa`, `funciones`, `pvp`, `movimiento`) VALUES
(1, 1, 'Reloj analógico multifunción', 'Reloj hombre', '47.5 x 47.5 x 14 mm.', '10 ATM', 'Acero chapado negro con bisel chapado rosa', 'A rosca', 'Acero chapado negro con cierre de seguridad con doble muelle', 'Horas, minutos, segundos, calendario, semanario, 0-24h', '169.00', 'Cuarzo'),
(2, 2, 'Reloj analógico', 'Reloj hombre', '51 x 46 x 13 mm.', '5 ATM', 'Aluminio con bisel negro', 'A rosca', 'Caucho', 'Horas, minutos, segundos, calendario', '109.00', 'Cuarzo');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `estado del producto`, `familia`, `trademark_id`, `created_at`, `updated_at`) VALUES
(1, '40-2780-0-0', 1, 'relojes', 2, '2015-12-27 17:54:03', '2015-12-27 17:54:03'),
(2, '40-2653-0-1', 1, 'relojes', 2, '2015-12-27 18:47:28', '2015-12-27 18:47:28');

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
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `productos_imagenes`
--

INSERT INTO `productos_imagenes` (`id`, `nombre_imagen`, `producto_id`, `url`, `created_at`, `updated_at`) VALUES
(1, '40-2780-0-0', 1, '40-2780-0-0.jpg', '2015-12-27 17:59:47', '2015-12-27 17:59:47'),
(2, '40-2653-0-1', 2, '40-2653-0-1.jpg', '2015-12-27 18:48:35', '2015-12-27 18:48:35');

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

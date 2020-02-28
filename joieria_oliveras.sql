-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-02-2017 a las 18:02:30
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_anillos`
--

CREATE TABLE IF NOT EXISTS `descripcion_anillos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `id_producto` int(5) NOT NULL,
  `referencia` varchar(100) DEFAULT NULL,
  `descripcion` text,
  `metal` varchar(100) DEFAULT NULL,
  `acabado_superficial` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `forma_piedras` varchar(100) DEFAULT NULL,
  `grupo_productos` varchar(100) DEFAULT NULL,
  `numero_piedras` varchar(100) DEFAULT NULL,
  `peso_diamantes` varchar(100) DEFAULT NULL,
  `tipo_forma_diamante` varchar(100) DEFAULT NULL,
  `tipo_piedras` varchar(100) DEFAULT NULL,
  `anchura_alianza` varchar(100) DEFAULT NULL,
  `espesor` varchar(100) DEFAULT NULL,
  `forma_alianza` varchar(100) DEFAULT NULL,
  `tipo_interior` varchar(100) DEFAULT NULL,
  `pvp` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `descripcion_anillos`
--

INSERT INTO `descripcion_anillos` (`id`, `id_producto`, `referencia`, `descripcion`, `metal`, `acabado_superficial`, `color`, `forma_piedras`, `grupo_productos`, `numero_piedras`, `peso_diamantes`, `tipo_forma_diamante`, `tipo_piedras`, `anchura_alianza`, `espesor`, `forma_alianza`, `tipo_interior`, `pvp`) VALUES
(1, 12, '18-74A0001/7', '<b>Anillo de compromiso</b> de 4 garras, con brazo abierto ganándole así más presencia en tamaño, montado en oro amarillo de 18 quilates con un diamante de 3 mm y talla brillante de 0.10 ct. Color H y pureza SI. Se acompaña en todos los anillos de diamantes el certificado de autenticidad de diamante. Acabado brillo y está disponible también en 9 k y en oro blanco para ambos quilatajes (si bien en blanco la referencia cambia).', 'Oro 18k', NULL, 'Amarillo', 'Brillante (redondo)', 'Brillantería argyor', '1 piedra', '0.10 ct', 'Sortija solitario', 'Diamante', NULL, NULL, NULL, NULL, '471.00'),
(2, 13, '18-74B0014/7', '<b>Anillo de compromiso</b> con un diamante de 3 mm y 0.10ct fabricada en oro blanco de 18 quilates , esta moderna sortija de compromiso de líneas actuales está también disponible en oro amarillo y en 9 quilates, el diamante es de color H, pureza SI y además incorpora certificado de autenticidad del diamante como todos nuestros anillos de compromiso Argyor. Original diseño y cuidado acabado.', 'Oro 18k', NULL, 'Blanco', 'Brillante (redondo)', 'Brillantería argyor', '1 piedra', '0.10 ct', 'Sortija solitario', 'Diamante', NULL, NULL, NULL, NULL, '424.00'),
(3, 14, '18-554B2494/7', '<b>Alianza de oro blanco</b> y diamantes Argyor, realizado en 18 quilates. Esta joya tiene un acabado combinado mate satinado y brillo, y forma plana. Los 2 diamantes son de talla brillante y 0,015 ct (total de 0,03 quilates), color H y pureza SI.', 'Oro 18k', 'Satinado/scotch', 'Blanco', 'Brillante (redondo)', NULL, '2 piedras', '0.03 ct', NULL, 'Diamante', '4.00 mm', 'Inferior a 1.0mm', 'Plana con ranuras', 'Plano', '333.00'),
(4, 15, '18-5150210R/7', '<b>Alianza de boda de oro bicolor</b> de Argyor, realizada íntegramente en oro amarillo y cuya característica principal es su apariencia de 2 colores, gracias al baño de rodio aplicado a las 2 bandas rebajadas, mientras que las 3 bandas exteriores son del color dorado original del metal. El acabado es brillante en toda la pieza. Su otra característica más destacada es el interior levemente bombeado para una mayor comodidad. Disponible en oro de 9 quilates.', 'Oro 18k', 'Pulido/brillo', 'Amarillo/blanco', NULL, 'Alianzas argyor', 'Sin piedras', NULL, NULL, NULL, '5.00 mm', 'Entre 1.20 y 1.40mm', 'Plana con ranuras', 'Confort', '374.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `descripcion_productos`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `descripcion_productos`
--

INSERT INTO `descripcion_productos` (`id`, `id_producto`, `sexo`, `descripcion_producto`, `tipo_reloj`, `medidas`, `impermeabilidad`, `caja`, `fondo`, `correa`, `funciones`, `pvp`, `movimiento`) VALUES
(1, 1, 'hombre', 'Reloj analógico multifunción', 'Reloj hombre', '47.5 x 47.5 x 14 mm.', '10 ATM', 'Acero chapado negro con bisel chapado rosa', 'A rosca', 'Acero chapado negro con cierre de seguridad con doble muelle', 'Horas, minutos, segundos, calendario, semanario, 0-24h', '169.00', 'Cuarzo'),
(2, 2, 'mujer', 'Reloj analógico', 'Reloj hombre', '51 x 46 x 13 mm.', '5 ATM', 'Aluminio con bisel negro', 'A rosca', 'Caucho', 'Horas, minutos, segundos, calendario', '109.00', 'Cuarzo'),
(3, 3, 'hombre', 'Reloj analógico', 'Reloj hombre', '54 x 45 x 13 mm.', '10 ATM', 'Acero', 'A rosca', 'Caucho', 'Horas, minutos, segundos y calendario', '109.00', 'Cuarzo'),
(4, 6, 'hombre', 'Reloj analógico', 'Reloj hombre', '51 x 46 x 13 mm.', '10 ATM', 'Acero', 'A rosca', 'Caucho', 'Horas, minutos, segundos, calendario', '109.00', 'Cuarzo'),
(5, 10, 'hombre', 'Reloj analógico multifunción', 'Reloj hombre', '47.5 x 47.5 x 14 mm.', '10 ATM', 'Acero con bisel negro o acero chapado negro con bisel acero', 'A rosca', 'Silicona', 'Horas, minutos, segundos, calendario, semanario, 0-24h', '149.00', 'Cuarzo'),
(6, 0, 'hombre', 'Reloj analógico', 'Reloj hombre', '54,7X48,5M', '10 ATM', 'Acero', 'A rosca', 'Pulsera en piel', 'Sólo tiempo', '129.00', 'Cuarzo'),
(7, 11, 'hombre', 'Reloj analógico', 'Reloj hombre', '54,7X48,5M', '10 ATM', 'Acero', 'A rosca', 'Pulsera en piel', 'Sólo tiempo', '129.00', 'Cuarzo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) CHARACTER SET utf32 NOT NULL,
  `estado del producto` int(1) NOT NULL DEFAULT '1',
  `familia` varchar(150) NOT NULL,
  `subfamilia` varchar(100) DEFAULT NULL,
  `trademark_id` int(5) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `estado del producto`, `familia`, `subfamilia`, `trademark_id`, `created_at`, `updated_at`) VALUES
(1, '40-2780-0-0', 1, 'relojes', NULL, 2, '2015-12-27 17:54:03', '2015-12-27 17:54:03'),
(2, '40-2653-0-1', 1, 'relojes', NULL, 2, '2015-12-27 18:47:28', '2015-12-27 18:47:28'),
(3, '40-2656-0-1', 1, 'relojes', NULL, 2, '2015-12-27 19:59:27', '2015-12-27 19:59:27'),
(6, '40-2655-0-1', 1, 'relojes', NULL, 2, '2015-12-27 20:26:51', '2015-12-27 20:26:51'),
(10, '40-2781-0-3', 1, 'relojes', NULL, 2, '2015-12-27 21:43:42', '2015-12-27 21:43:42'),
(11, 'R3251180004_1', 1, 'relojes', NULL, 6, '2016-07-18 01:14:40', '2016-07-18 01:14:40'),
(12, 'ANILLO DE COMPROMISO 1 DIAMANTE TALLA BRILLANTE 0.10CT (74A0001)', 1, 'anillos de compromiso', 'anillos de compromiso oro amarillo', 7, '2016-09-18 11:57:05', '2016-09-18 11:57:05'),
(13, 'ANILLO DE COMPROMISO CON 1 DIAMANTE 0.10CT (74B0014)', 1, 'anillos de compromiso', 'anillos de compromiso oro blanco', 7, '2016-09-18 11:57:05', '2016-09-18 11:57:05'),
(14, 'ANILLO DE ORO BLANCO Y DIAMANTES SATINADO-BRILLO 4 MM (554B2494)', 1, 'alianzas', 'anillos de oro', 7, '2016-09-18 15:02:13', '2016-09-18 15:02:13'),
(15, 'ALIANZA DE BODA ORO BICOLOR 5MM CONFORT (5150210R)', 1, 'alianzas', 'anillos de oro', 7, '2016-09-18 15:02:13', '2016-09-18 15:02:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_imagenes`
--

CREATE TABLE IF NOT EXISTS `productos_imagenes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nombre_imagen` varchar(300) NOT NULL,
  `producto_id` int(10) NOT NULL,
  `url` varchar(300) NOT NULL,
  `color` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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
(10, '40-2781-0-3', 10, '40-2781-0-3.jpg', '', '2015-12-27 21:44:40', '2015-12-27 21:44:40'),
(11, 'R3251180004_1', 11, 'R3251180004_1.png', 'negro', '2016-07-18 01:10:17', '2016-07-18 01:10:17'),
(12, 'R3251180009_1', 11, 'R3251180009_1.png', 'marron', '2016-07-18 01:10:17', '2016-07-18 01:10:17'),
(13, '74a0001_001', 12, '74a0001_001.jpg', '', '2016-09-18 12:24:47', '2016-09-18 12:24:47'),
(14, '74b0014_001', 13, '74b0014_001.jpg', '', '2016-09-18 12:24:47', '2016-09-18 12:24:47'),
(16, '554b2494_001', 14, '554b2494_001.jpg', '', '2016-09-18 15:23:24', '2016-09-18 15:23:24'),
(17, '554b2494_002', 14, '554b2494_002.jpg', '', '2016-09-18 15:23:24', '2016-09-18 15:23:24'),
(18, '554b2494_003', 14, '554b2494_003.jpg', '', '2016-09-18 15:23:24', '2016-09-18 15:23:24'),
(19, '5150210r_001', 15, '5150210r_001.jpg', '', '2016-09-18 15:23:24', '2016-09-18 15:23:24'),
(20, '5150210r_002', 15, '5150210r_002.jpg', '', '2016-09-18 15:23:24', '2016-09-18 15:23:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trademark`
--

CREATE TABLE IF NOT EXISTS `trademark` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `color` varchar(50) DEFAULT 'white',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `trademark`
--

INSERT INTO `trademark` (`id`, `nombre`, `logo`, `color`, `created_at`, `updated_at`) VALUES
(2, 'potens', '/potens/logo.jpg', 'white', '2015-09-27 03:56:21', '2015-09-27 03:56:21'),
(4, 'nowley', '/nowley/logo.jpg', 'white', '2015-09-27 03:58:32', '2015-09-27 03:58:32'),
(5, 'citizen', '/citizen/logo.png', 'white', '2015-09-27 03:58:32', '2015-09-27 03:58:32'),
(6, 'sector', '/sector/logo.png', 'white', '2015-09-27 03:59:00', '2015-09-27 03:59:00'),
(7, 'argyor', 'logo_argyor.jpg', 'white', '2016-09-18 11:52:09', '2016-09-18 11:52:09');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-11-2018 a las 15:10:58
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_motel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquileres`
--

DROP TABLE IF EXISTS `alquileres`;
CREATE TABLE IF NOT EXISTS `alquileres` (
  `id_alquiler` int(11) NOT NULL AUTO_INCREMENT,
  `habitacion` int(11) NOT NULL,
  `cliente` int(11) NOT NULL,
  `valor_hora` int(11) NOT NULL,
  `ingreso` datetime NOT NULL,
  `salida` datetime DEFAULT NULL,
  `vendedor` int(11) NOT NULL,
  PRIMARY KEY (`id_alquiler`),
  KEY `fk_habitaciones_has_clientes_clientes1_idx` (`cliente`),
  KEY `fk_habitaciones_has_clientes_habitaciones_idx` (`habitacion`),
  KEY `fk_alquileres_usuarios1_idx` (`vendedor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `alquileres`
--

INSERT INTO `alquileres` (`id_alquiler`, `habitacion`, `cliente`, `valor_hora`, `ingreso`, `salida`, `vendedor`) VALUES
(1, 1, 1, 50000, '2018-11-05 03:09:09', '2018-11-05 04:11:11', 3),
(2, 2, 2, 20000, '2018-11-09 05:12:15', '2018-11-07 06:12:14', 2),
(3, 3, 3, 20000, '2018-11-12 07:17:17', '2018-11-13 14:37:37', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
CREATE TABLE IF NOT EXISTS `habitaciones` (
  `id_habitacion` int(11) NOT NULL AUTO_INCREMENT,
  `numero` varchar(45) NOT NULL,
  `tipo` enum('Basica','Premium') NOT NULL,
  `valor_noche` int(11) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`id_habitacion`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id_habitacion`, `numero`, `tipo`, `valor_noche`, `estado`) VALUES
(1, '111', 'Premium', 50000, 'Activo'),
(2, '222', 'Basica', 20000, 'Activo'),
(3, '333', 'Basica', 20000, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `marca`, `cantidad`, `precio`, `estado`) VALUES
(1, 'Vino', 'Latour ', 50, 50000, 'Activo'),
(11, 'Cerveza', 'Corona', 200, 20000, 'Activo'),
(12, 'Cerveza', 'Latour ', 70, 40000, 'Activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

DROP TABLE IF EXISTS `servicios`;
CREATE TABLE IF NOT EXISTS `servicios` (
  `id_servicio` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `solicitud` datetime NOT NULL,
  `alquiler` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id_servicio`),
  KEY `fk_servicios_productos1_idx` (`producto`),
  KEY `fk_servicios_alquileres1_idx` (`alquiler`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id_servicio`, `producto`, `precio`, `solicitud`, `alquiler`, `cantidad`) VALUES
(1, 11, 5000, '2018-11-07 04:11:14', 1, 1),
(2, 12, 50, '2018-11-05 06:16:26', 2, 2),
(3, 1, 5000, '2018-11-05 04:09:09', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombres` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `perfil` enum('Administrador','Vendedor') NOT NULL,
  `documento` varchar(20) NOT NULL,
  `contrasena` text NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombres`, `apellidos`, `perfil`, `documento`, `contrasena`) VALUES
(1, 'Luis', 'Lozano', 'Administrador', '1057741440', '123'),
(2, 'Manuel', 'Fonseca', 'Vendedor', '10577488801', '321'),
(3, 'Juliana', 'Torres', 'Vendedor', '1044747158', '1234');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(6) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `servicio` enum('Publico','Particular') NOT NULL,
  `registro` date NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`id_cliente`, `placa`, `marca`, `servicio`, `registro`) VALUES
(1, 'b3e', 'Renol', 'Particular', '2018-11-04'),
(2, 'hyr', 'Chevrolet', 'Particular', '2018-11-05'),
(3, 'rk3', 'Renol', 'Particular', '2018-11-15');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquileres`
--
ALTER TABLE `alquileres`
  ADD CONSTRAINT `fk_alquileres_usuarios1` FOREIGN KEY (`vendedor`) REFERENCES `usuarios` (`id_usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_habitaciones_has_clientes_clientes1` FOREIGN KEY (`cliente`) REFERENCES `vehiculos` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_habitaciones_has_clientes_habitaciones` FOREIGN KEY (`habitacion`) REFERENCES `habitaciones` (`id_habitacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_servicios_alquileres1` FOREIGN KEY (`alquiler`) REFERENCES `alquileres` (`id_alquiler`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_servicios_productos1` FOREIGN KEY (`producto`) REFERENCES `productos` (`id_producto`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

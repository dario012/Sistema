-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2024 a las 01:14:40
-- Versión del servidor: 5.7.40
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `empleado1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos1`
--

DROP TABLE IF EXISTS `datos1`;
CREATE TABLE IF NOT EXISTS `datos1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `Primer_Nombre` varchar(20) NOT NULL,
  `Primer_Apellido` varchar(20) NOT NULL,
  `Segundo_Apellido` varchar(20) NOT NULL,
  `Otros_Nombre` varchar(50) NOT NULL,
  `Tipos_identificacion` varchar(20) NOT NULL,
  `Numero_identificacion` varchar(20) NOT NULL,
  `Pais_Empleo` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Area` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `datos1`
--

INSERT INTO `datos1` (`id`, `Primer_Nombre`, `Primer_Apellido`, `Segundo_Apellido`, `Otros_Nombre`, `Tipos_identificacion`, `Numero_identificacion`, `Pais_Empleo`, `Email`, `Fecha_Ingreso`, `Area`) VALUES
(1, 'luis', 'cruz', 'pedro', 'rober', '17270606', '500042', 'Colombia', 'deliplanta@gmail.com', '2024-05-15', 'Administracion'),
(2, 'luis', 'cruz', 'pedro', 'rober', '17270606', '500042', 'Colombia', 'deliplanta@gmail.com', '2024-05-03', 'Administracion');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

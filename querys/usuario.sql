-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2025 a las 05:12:51
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `portapptebien`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` int NOT NULL,
  `password` varchar(16) NOT NULL,
  `permiso` int NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `password`, `permiso`, `nombre`) VALUES
(17107688, '123', 0, 'Milton Soto'),
(19283746, 'clave123', 1, 'Andrea Muñoz'),
(20495837, 'pass456', 0, 'Carlos Pérez'),
(18765432, 'miClave789', 1, 'Lucía Ramírez'),
(22334455, 'admin2025', 2, 'Juan Torres'),
(23456789, 'test1234', 0, 'Patricia Gómez'),
(19876543, 'abc123', 0, 'Sofía Herrera'),
(21098765, 'qwerty', 1, 'Luis Castillo'),
(20011223, 'usuario12', 0, 'Mariana Díaz'),
(19880077, 'contraseña', 2, 'Daniel Ríos'),
(21234567, 'login321', 1, 'Claudia Figueroa'),
(20998877, 'clave321', 0, 'Esteban Ruiz'),
(22110088, 'pwd890', 1, 'Gabriela Silva'),
(20775643, '123abc', 0, 'Fernando López'),
(21777799, 's3gur0', 1, 'Valentina Campos'),
(23001122, 'myp@ss', 0, 'Ignacio Vidal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-05-2025 a las 20:04:18
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
-- Estructura de tabla para la tabla `apoderados`
--

DROP TABLE IF EXISTS `apoderados`;
CREATE TABLE IF NOT EXISTS `apoderados` (
  `rut` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `correo` varchar(300) CHARACTER SET utf8mb3 COLLATE utf8mb3_spanish_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `apoderados`
--

INSERT INTO `apoderados` (`rut`, `nombre`, `apellido_materno`, `apellido_paterno`, `correo`) VALUES
(18934765, 'Marcela', 'Contreras', 'Salazar', 'matias.villarroelgu@correoaiep.cl'),
(20123456, 'Carlos', 'Ramírez', 'Figueroa', 'fernanda.reyespon@correoaiep.cl'),
(17654321, 'Ana', 'Pérez', 'Gutiérrez', 'sthefano.campos@correoaiep.cl'),
(19234567, 'Javier', 'Muñoz', 'Araya', 'matias.villarroelgu@correoaiep.cl'),
(20345678, 'Valeria', 'González', 'Rojas', 'fernanda.reyespon@correoaiep.cl'),
(17432109, 'Pedro', 'Morales', 'Campos', 'sthefano.campos@correoaiep.cl'),
(19567890, 'Daniela', 'Reyes', 'Navarro', 'matias.villarroelgu@correoaiep.cl'),
(18345678, 'José', 'Fernández', 'Cáceres', 'fernanda.reyespon@correoaiep.cl'),
(18654321, 'Camila', 'Vera', 'Mendoza', 'sthefano.campos@correoaiep.cl'),
(17890123, 'Rodrigo', 'Soto', 'Ibarra', 'matias.villarroelgu@correoaiep.cl'),
(16543210, 'Sofía', 'Martínez', 'Paredes', 'fernanda.reyespon@correoaiep.cl'),
(17678901, 'Eduardo', 'Rojas', 'Molina', 'sthefano.campos@correoaiep.cl'),
(18901234, 'Carla', 'Gómez', 'López', 'matias.villarroelgu@correoaiep.cl'),
(19345678, 'José Luis', 'Salazar', 'Herrera', 'fernanda.reyespon@correoaiep.cl'),
(19876543, 'Silvia', 'Díaz', 'Cordero', 'sthefano.campos@correoaiep.cl'),
(18234756, 'Ricardo', 'Sánchez', 'Cabrera', 'matias.villarroelgu@correoaiep.cl'),
(17456289, 'Laura', 'Jiménez', 'Ríos', 'fernanda.reyespon@correoaiep.cl'),
(16198723, 'Víctor', 'Alvarez', 'Pino', 'sthefano.campos@correoaiep.cl'),
(17432865, 'María José', 'Morales', 'Zúñiga', 'matias.villarroelgu@correoaiep.cl'),
(16985672, 'Felipe', 'Ramírez', 'Vargas', 'fernanda.reyespon@correoaiep.cl'),
(18392674, 'Lucía', 'Méndez', 'Fuentes', 'sthefano.campos@correoaiep.cl'),
(17625108, 'Manuel', 'Vega', 'Ortiz', 'matias.villarroelgu@correoaiep.cl'),
(19843256, 'Natalia', 'Serrano', 'González', 'fernanda.reyespon@correoaiep.cl'),
(17580329, 'Juan Pablo', 'Castro', 'Lagos', 'sthefano.campos@correoaiep.cl'),
(18127654, 'Viviana', 'Pinto', 'Ríos', 'matias.villarroelgu@correoaiep.cl'),
(19432765, 'Fernando', 'González', 'Castro', 'fernanda.reyespon@correoaiep.cl'),
(17895673, 'Joaquín', 'Valdés', 'Bravo', 'sthefano.campos@correoaiep.cl'),
(17654298, 'Raúl', 'Paredes', 'Moreno', 'matias.villarroelgu@correoaiep.cl'),
(18543210, 'Marta', 'Vera', 'Cáceres', 'fernanda.reyespon@correoaiep.cl'),
(19453678, 'Felipe', 'González', 'Castillo', 'sthefano.campos@correoaiep.cl'),
(17987645, 'Ignacio', 'Soto', 'Escobar', 'matias.villarroelgu@correoaiep.cl'),
(17234567, 'Eugenia', 'Castro', 'Montes', 'fernanda.reyespon@correoaiep.cl'),
(18375612, 'Ricardo', 'Cordero', 'Villalobos', 'sthefano.campos@correoaiep.cl'),
(16123489, 'Cristina', 'Ramírez', 'Leiva', 'matias.villarroelgu@correoaiep.cl'),
(19346572, 'Álvaro', 'Navarro', 'González', 'fernanda.reyespon@correoaiep.cl'),
(17854321, 'Claudia', 'Muñoz', 'Álvarez', 'sthefano.campos@correoaiep.cl'),
(17451234, 'Raquel', 'Salazar', 'Fuentes', 'matias.villarroelgu@correoaiep.cl'),
(16598764, 'Francisco', 'Vera', 'Soto', 'fernanda.reyespon@correoaiep.cl'),
(18945673, 'Felipe', 'Ibarra', 'Fuentes', 'sthefano.campos@correoaiep.cl'),
(19876512, 'Carolina', 'Reyes', 'Gutiérrez', 'matias.villarroelgu@correoaiep.cl');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

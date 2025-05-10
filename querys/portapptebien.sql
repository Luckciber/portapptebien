-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-05-2025 a las 01:07:53
-- Versión del servidor: 9.1.0
-- Versión de PHP: 8.3.14

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
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `rut` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  `curso_id` int NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`rut`, `nombre`, `apellido_paterno`, `apellido_materno`, `curso_id`) VALUES
(12345678, 'Carla', 'Rogers', 'Newton', 1),
(45080212, 'Ann', 'Scott', 'Reilly', 2),
(99874711, 'Alex', 'Richards', 'King', 3),
(16926808, 'Patrick', 'Simmons', 'Vaughn', 4),
(24710914, 'Dawn', 'Robinson', 'Stewart', 5),
(11604058, 'Brian', 'Carter', 'Taylor', 6),
(20307036, 'Eva', 'Wilson', 'Miller', 7),
(32208459, 'Zachary', 'Moore', 'Garcia', 8),
(55101901, 'Erin', 'Martinez', 'Jackson', 1),
(70824611, 'John', 'Anderson', 'Davis', 2),
(17426301, 'Megan', 'Harris', 'Martinez', 3),
(51482477, 'Timothy', 'Roberts', 'Williams', 4),
(67313582, 'Grace', 'Gonzalez', 'Brown', 5),
(32926771, 'Samantha', 'White', 'Thomas', 6),
(95127548, 'Joseph', 'Lee', 'Young', 7),
(85431579, 'Anna', 'Perez', 'King', 8),
(75869320, 'Michael', 'Garcia', 'Clark', 1),
(10234658, 'Olivia', 'Lopez', 'Adams', 2),
(21890267, 'Lucas', 'Hill', 'Baker', 3),
(67213108, 'Sophia', 'Nelson', 'Campbell', 4),
(12395672, 'James', 'King', 'Mitchell', 5),
(98706543, 'Benjamin', 'Baker', 'Roberts', 6),
(36482940, 'Ava', 'Scott', 'Evans', 7),
(46105879, 'David', 'Morris', 'Green', 8),
(39429076, 'Emily', 'Gonzalez', 'Harris', 1),
(54681239, 'Christopher', 'Nelson', 'Perez', 2),
(84567291, 'Alexander', 'Young', 'Collins', 3),
(75213890, 'Lily', 'Ramirez', 'Hall', 4),
(97234618, 'Charlotte', 'Lopez', 'Allen', 5),
(30382459, 'Matthew', 'Allen', 'Carter', 6),
(56429071, 'Isabella', 'Hughes', 'Roberts', 7),
(91827364, 'Daniel', 'Parker', 'White', 8),
(74218960, 'Hannah', 'Moore', 'Young', 1),
(12954687, 'William', 'Adams', 'King', 2),
(35749021, 'Grace', 'Evans', 'Davis', 3),
(28409513, 'Lucas', 'Perez', 'Walker', 4),
(96845670, 'Mia', 'Lopez', 'Morris', 5),
(73912984, 'Oliver', 'Bennett', 'Mitchell', 6),
(84750632, 'Chloe', 'Martin', 'Hughes', 7),
(65230418, 'Zoe', 'Clark', 'Miller', 8),
(94385162, 'Henry', 'Lee', 'Harrison', 1),
(75184932, 'Ryan', 'Walker', 'Evans', 2),
(80392756, 'Charlotte', 'Davis', 'Nelson', 3),
(39458671, 'Jacob', 'Gonzalez', 'Moore', 4),
(57382904, 'Isla', 'Robinson', 'Parker', 5),
(19123984, 'Jack', 'Allen', 'Taylor', 6),
(12387642, 'Noah', 'Davis', 'Miller', 7),
(74367209, 'Levi', 'Martin', 'White', 8),
(36172856, 'Mason', 'Roberts', 'Clark', 1),
(18692054, 'Amelia', 'Parker', 'Harris', 2),
(68434527, 'Liam', 'Carter', 'Roberts', 3),
(29372465, 'Charlotte', 'Adams', 'Scott', 4),
(84165109, 'Mila', 'Miller', 'Perez', 5),
(24615980, 'Zach', 'Walker', 'Martinez', 6),
(37284712, 'Lily', 'Lopez', 'Morris', 7),
(64582971, 'Gabriel', 'Moore', 'Parker', 8),
(93281765, 'Katherine', 'White', 'King', 1),
(28475914, 'Samuel', 'Hughes', 'Walker', 2),
(86405879, 'Ethan', 'Baker', 'Brown', 3),
(57261430, 'Leah', 'Walker', 'Parker', 4),
(49386712, 'Victoria', 'Davis', 'Gonzalez', 5),
(30468271, 'Wyatt', 'Nelson', 'Moore', 6),
(26173849, 'Sarah', 'Johnson', 'Williams', 7),
(10294856, 'Charlie', 'Parker', 'Roberts', 8),
(45163827, 'Cameron', 'Davis', 'Lopez', 1),
(54938062, 'Ruby', 'Garcia', 'Mitchell', 2),
(27213480, 'Sebastian', 'Moore', 'Taylor', 3),
(49583821, 'Daniel', 'Walker', 'Lopez', 4),
(20314980, 'Owen', 'Roberts', 'Miller', 5),
(81796253, 'Zoe', 'Taylor', 'Nelson', 6),
(64853270, 'Tessa', 'Lopez', 'Adams', 7),
(11926847, 'Isaac', 'Young', 'Baker', 8),
(12983152, 'Cora', 'Davis', 'Harris', 1),
(31864927, 'Finn', 'Hughes', 'Parker', 2),
(94201650, 'Maya', 'Miller', 'Moore', 3),
(71025489, 'Ella', 'Parker', 'Johnson', 4),
(64124573, 'Jonathan', 'Parker', 'Morris', 5),
(82967401, 'Gianna', 'Brown', 'Lopez', 6),
(55142908, 'Oliver', 'Gonzalez', 'Evans', 7),
(13904721, 'Ava', 'Hughes', 'Brown', 8),
(85174962, 'Luca', 'Morris', 'Roberts', 1),
(98426513, 'Harper', 'Moore', 'Lee', 2),
(17362948, 'Nora', 'Davis', 'Young', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anotaciones`
--

DROP TABLE IF EXISTS `anotaciones`;
CREATE TABLE IF NOT EXISTS `anotaciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `anotacion` text NOT NULL,
  `es_positiva` tinyint(1) NOT NULL,
  `fecha_creacion` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int NOT NULL,
  `id_alumno` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_usuario` (`id_usuario`),
  KEY `id_alumno` (`id_alumno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `apoderados`
--

DROP TABLE IF EXISTS `apoderados`;
CREATE TABLE IF NOT EXISTS `apoderados` (
  `rut` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `apellido_paterno` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `apoderados`
--

INSERT INTO `apoderados` (`rut`, `nombre`, `apellido_materno`, `apellido_paterno`) VALUES
(18934765, 'Marcela', 'Contreras', 'Salazar'),
(20123456, 'Carlos', 'Ramírez', 'Figueroa'),
(17654321, 'Ana', 'Pérez', 'Gutiérrez'),
(19234567, 'Javier', 'Muñoz', 'Araya'),
(20345678, 'Valeria', 'González', 'Rojas'),
(17432109, 'Pedro', 'Morales', 'Campos'),
(19567890, 'Daniela', 'Reyes', 'Navarro'),
(18345678, 'José', 'Fernández', 'Cáceres'),
(18654321, 'Camila', 'Vera', 'Mendoza'),
(17890123, 'Rodrigo', 'Soto', 'Ibarra'),
(16543210, 'Sofía', 'Martínez', 'Paredes'),
(17678901, 'Eduardo', 'Rojas', 'Molina'),
(18901234, 'Carla', 'Gómez', 'López'),
(19345678, 'José Luis', 'Salazar', 'Herrera'),
(19876543, 'Silvia', 'Díaz', 'Cordero'),
(18234756, 'Ricardo', 'Sánchez', 'Cabrera'),
(17456289, 'Laura', 'Jiménez', 'Ríos'),
(16198723, 'Víctor', 'Alvarez', 'Pino'),
(17432865, 'María José', 'Morales', 'Zúñiga'),
(16985672, 'Felipe', 'Ramírez', 'Vargas'),
(18392674, 'Lucía', 'Méndez', 'Fuentes'),
(17625108, 'Manuel', 'Vega', 'Ortiz'),
(19843256, 'Natalia', 'Serrano', 'González'),
(17580329, 'Juan Pablo', 'Castro', 'Lagos'),
(18127654, 'Viviana', 'Pinto', 'Ríos'),
(19432765, 'Fernando', 'González', 'Castro'),
(17895673, 'Joaquín', 'Valdés', 'Bravo'),
(17654298, 'Raúl', 'Paredes', 'Moreno'),
(18543210, 'Marta', 'Vera', 'Cáceres'),
(19453678, 'Felipe', 'González', 'Castillo'),
(17987645, 'Ignacio', 'Soto', 'Escobar'),
(17234567, 'Eugenia', 'Castro', 'Montes'),
(18375612, 'Ricardo', 'Cordero', 'Villalobos'),
(16123489, 'Cristina', 'Ramírez', 'Leiva'),
(19346572, 'Álvaro', 'Navarro', 'González'),
(17854321, 'Claudia', 'Muñoz', 'Álvarez'),
(17451234, 'Raquel', 'Salazar', 'Fuentes'),
(16598764, 'Francisco', 'Vera', 'Soto'),
(18945673, 'Felipe', 'Ibarra', 'Fuentes'),
(19876512, 'Carolina', 'Reyes', 'Gutiérrez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citaciones`
--

DROP TABLE IF EXISTS `citaciones`;
CREATE TABLE IF NOT EXISTS `citaciones` (
  `id_citacion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `fecha_creacion` date DEFAULT NULL,
  `rut_alumno` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  `rut_apoderado` int DEFAULT NULL,
  `fecha_citacion` date NOT NULL,
  `motivo` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_cursos` int NOT NULL,
  `descripcion` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_cursos`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_cursos`, `descripcion`) VALUES
(1, '1°basico'),
(2, '2°basico'),
(3, '3°basico'),
(4, '4°basico'),
(5, '5°basico'),
(6, '6°basico'),
(7, '7°basico'),
(8, '8°basico');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` int NOT NULL,
  `password` varchar(16) NOT NULL,
  `permiso` int NOT NULL,
  PRIMARY KEY (`permiso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `password`, `permiso`) VALUES
(17107688, 'administrador', 0),
(123123, '123123', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-04-2025 a las 04:11:45
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
-- Estructura de tabla para la tabla `alumnos`
--

DROP TABLE IF EXISTS `alumnos`;
CREATE TABLE IF NOT EXISTS `alumnos` (
  `rut` int NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(50) NOT NULL,
  `apellido_materno` varchar(50) NOT NULL,
  PRIMARY KEY (`rut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`rut`, `nombre`, `apellido_paterno`, `apellido_materno`) VALUES
(61859747, 'Carla', 'Rogers', 'Newton'),
(45080212, 'Ann', 'Scott', 'Reilly'),
(99874711, 'Alex', 'Richards', 'King'),
(16926808, 'Patrick', 'Simmons', 'Vaughn'),
(24710914, 'Dawn', 'Robinson', 'Stewart'),
(11604058, 'Brian', 'Carter', 'Taylor'),
(20307036, 'Eva', 'Wilson', 'Miller'),
(32208459, 'Zachary', 'Moore', 'Garcia'),
(55101901, 'Erin', 'Martinez', 'Jackson'),
(70824611, 'John', 'Anderson', 'Davis'),
(17426301, 'Megan', 'Harris', 'Martinez'),
(51482477, 'Timothy', 'Roberts', 'Williams'),
(67313582, 'Grace', 'Gonzalez', 'Brown'),
(32926771, 'Samantha', 'White', 'Thomas'),
(95127548, 'Joseph', 'Lee', 'Young'),
(85431579, 'Anna', 'Perez', 'King'),
(75869320, 'Michael', 'Garcia', 'Clark'),
(10234658, 'Olivia', 'Lopez', 'Adams'),
(21890267, 'Lucas', 'Hill', 'Baker'),
(67213108, 'Sophia', 'Nelson', 'Campbell'),
(12395672, 'James', 'King', 'Mitchell'),
(98706543, 'Benjamin', 'Baker', 'Roberts'),
(36482940, 'Ava', 'Scott', 'Evans'),
(46105879, 'David', 'Morris', 'Green'),
(39429076, 'Emily', 'Gonzalez', 'Harris'),
(54681239, 'Christopher', 'Nelson', 'Perez'),
(84567291, 'Alexander', 'Young', 'Collins'),
(75213890, 'Lily', 'Ramirez', 'Hall'),
(97234618, 'Charlotte', 'Lopez', 'Allen'),
(30382459, 'Matthew', 'Allen', 'Carter'),
(56429071, 'Isabella', 'Hughes', 'Roberts'),
(91827364, 'Daniel', 'Parker', 'White'),
(74218960, 'Hannah', 'Moore', 'Young'),
(12954687, 'William', 'Adams', 'King'),
(35749021, 'Grace', 'Evans', 'Davis'),
(28409513, 'Lucas', 'Perez', 'Walker'),
(96845670, 'Mia', 'Lopez', 'Morris'),
(73912984, 'Oliver', 'Bennett', 'Mitchell'),
(84750632, 'Chloe', 'Martin', 'Hughes'),
(65230418, 'Zoe', 'Clark', 'Miller'),
(94385162, 'Henry', 'Lee', 'Harrison'),
(75184932, 'Ryan', 'Walker', 'Evans'),
(80392756, 'Charlotte', 'Davis', 'Nelson'),
(39458671, 'Jacob', 'Gonzalez', 'Moore'),
(57382904, 'Isla', 'Robinson', 'Parker'),
(19123984, 'Jack', 'Allen', 'Taylor'),
(12387642, 'Noah', 'Davis', 'Miller'),
(74367209, 'Levi', 'Martin', 'White'),
(36172856, 'Mason', 'Roberts', 'Clark'),
(18692054, 'Amelia', 'Parker', 'Harris'),
(68434527, 'Liam', 'Carter', 'Roberts'),
(29372465, 'Charlotte', 'Adams', 'Scott'),
(84165109, 'Mila', 'Miller', 'Perez'),
(24615980, 'Zach', 'Walker', 'Martinez'),
(37284712, 'Lily', 'Lopez', 'Morris'),
(64582971, 'Gabriel', 'Moore', 'Parker'),
(93281765, 'Katherine', 'White', 'King'),
(28475914, 'Samuel', 'Hughes', 'Walker'),
(86405879, 'Ethan', 'Baker', 'Brown'),
(57261430, 'Leah', 'Walker', 'Parker'),
(49386712, 'Victoria', 'Davis', 'Gonzalez'),
(30468271, 'Wyatt', 'Nelson', 'Moore'),
(26173849, 'Sarah', 'Johnson', 'Williams'),
(10294856, 'Charlie', 'Parker', 'Roberts'),
(45163827, 'Cameron', 'Davis', 'Lopez'),
(54938062, 'Ruby', 'Garcia', 'Mitchell'),
(27213480, 'Sebastian', 'Moore', 'Taylor'),
(49583821, 'Daniel', 'Walker', 'Lopez'),
(20314980, 'Owen', 'Roberts', 'Miller'),
(81796253, 'Zoe', 'Taylor', 'Nelson'),
(64853270, 'Tessa', 'Lopez', 'Adams'),
(11926847, 'Isaac', 'Young', 'Baker'),
(12983152, 'Cora', 'Davis', 'Harris'),
(31864927, 'Finn', 'Hughes', 'Parker'),
(94201650, 'Maya', 'Miller', 'Moore'),
(71025489, 'Ella', 'Parker', 'Johnson'),
(64124573, 'Jonathan', 'Parker', 'Morris'),
(82967401, 'Gianna', 'Brown', 'Lopez'),
(55142908, 'Oliver', 'Gonzalez', 'Evans'),
(13904721, 'Ava', 'Hughes', 'Brown'),
(85174962, 'Luca', 'Morris', 'Roberts'),
(98426513, 'Harper', 'Moore', 'Lee'),
(17362948, 'Nora', 'Davis', 'Young');

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
-- Estructura de tabla para la tabla `matriculas`
--

DROP TABLE IF EXISTS `matriculas`;
CREATE TABLE IF NOT EXISTS `matriculas` (
  `matricula_corr` int NOT NULL AUTO_INCREMENT,
  `rut_alumno` int NOT NULL,
  `curso_corr` int NOT NULL,
  PRIMARY KEY (`matricula_corr`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario` int NOT NULL,
  `password` varchar(16) NOT NULL,
  `permiso` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuario`, `password`, `permiso`) VALUES
(17107688, 'administrador', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Tabla anotaciones
--

DROP TABLE IF EXISTS `anotaciones`;
CREATE TABLE anotaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,  
    anotacion TEXT NOT NULL,             
    es_positiva BOOLEAN NOT NULL,       
    fecha_creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP, 
    id_usuario INT NOT NULL, 
    id_alumno INT NOT NULL, 
    FOREIGN KEY (id_usuario) REFERENCES usuario(usuario), 
    FOREIGN KEY (id_alumno) REFERENCES alumnos(rut) 
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-05-2025 a las 23:54:59
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
  `motivo` varchar(150) NOT NULL,
  `estado` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `citaciones`
--

INSERT INTO `citaciones` (`id_citacion`, `fecha_creacion`, `rut_alumno`, `id_usuario`, `rut_apoderado`, `fecha_citacion`, `motivo`, `estado`) VALUES
('CT0001', '2024-03-10', 12345678, 17107688, 19876543, '2024-03-15', 'Bajo rendimiento académico', 2),
('CT0002', '2024-04-05', 45080212, 17107688, 17456289, '2024-04-10', 'Problemas de conducta', 4),
('CT0003', '2024-05-01', 99874711, 17107688, 18392674, '2024-05-07', 'Inasistencias reiteradas', 3),
('CT0004', '2024-02-18', 16926808, 17107688, 18654321, '2024-02-25', 'Rendimiento bajo en matemáticas', 1),
('CT0005', '2024-06-12', 24710914, 17107688, 17432109, '2024-06-17', 'Incumplimiento del reglamento', 2),
('CT0006', '2024-03-20', 11604058, 17107688, 18345678, '2024-03-25', 'Conflictos con compañeros', 1),
('CT0007', '2024-04-14', 20307036, 17107688, 19843256, '2024-04-20', 'Falta de tareas entregadas', 3),
('CT0008', '2024-05-09', 32208459, 17107688, 17654298, '2024-05-14', 'Conducta inapropiada en clases', 4),
('CT0009', '2024-01-30', 55101901, 17107688, 17234567, '2024-02-04', 'Inasistencias sin justificación', 2),
('CT0010', '2024-02-22', 70824611, 17107688, 19345678, '2024-02-28', 'Retrasos frecuentes', 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

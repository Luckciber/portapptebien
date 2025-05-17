-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-05-2025 a las 14:26:58
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
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `anotaciones`
--

INSERT INTO `anotaciones` (`id`, `anotacion`, `es_positiva`, `fecha_creacion`, `id_usuario`, `id_alumno`) VALUES
(1, 'sdfasdfasdfa', 1, '0000-00-00 00:00:00', 12345678, 12345678),
(2, 'Alumno mostró buena conducta en clase.', 1, '2024-11-05 03:00:00', 19283746, 21890267),
(3, 'Alumno interrumpió la clase repetidamente.', 0, '2024-11-10 03:00:00', 19880077, 10234658),
(4, 'Participó activamente en la actividad grupal.', 1, '2024-11-18 03:00:00', 20495837, 54681239),
(5, 'No entregó la tarea a tiempo.', 0, '2024-11-22 03:00:00', 23001122, 94385162),
(6, 'Ayudó a sus compañeros durante el trabajo en clase.', 1, '2024-12-01 03:00:00', 22334455, 49583821),
(7, 'Se distrajo constantemente con el celular.', 0, '2024-12-07 03:00:00', 22110088, 24615980),
(8, 'Excelente comportamiento durante la visita guiada.', 1, '2024-12-12 03:00:00', 18765432, 13904721),
(9, 'Faltó a clases sin justificar.', 0, '2024-12-15 03:00:00', 19876543, 32926771),
(10, 'Mostró liderazgo en el trabajo en equipo.', 1, '2024-12-20 03:00:00', 19283746, 85431579),
(11, 'Contestó al profesor de manera inapropiada.', 0, '2024-12-23 03:00:00', 21777799, 30382459),
(12, 'Buena actitud frente a nuevos desafíos.', 1, '2025-01-05 03:00:00', 20775643, 36482940),
(13, 'Se negó a trabajar en grupo.', 0, '2025-01-10 03:00:00', 21234567, 29372465),
(14, 'Participación destacada en clase.', 1, '2025-01-15 03:00:00', 21098765, 85174962),
(15, 'Mostró desinterés durante toda la jornada.', 0, '2025-01-20 03:00:00', 23001122, 18692054),
(16, 'Actitud positiva y colaborativa.', 1, '2025-01-27 03:00:00', 23456789, 12954687),
(17, 'Interrumpió constantemente durante la clase.', 0, '2025-02-01 03:00:00', 19880077, 91827364),
(18, 'Realizó preguntas interesantes sobre el tema.', 1, '2025-02-04 03:00:00', 19283746, 71827364),
(19, 'No respetó el turno de palabra.', 0, '2025-02-10 03:00:00', 20998877, 84652971),
(20, 'Fue amable y respetuoso con sus compañeros.', 1, '2025-02-15 03:00:00', 20495837, 12983152),
(21, 'No trajo el material requerido.', 0, '2025-02-18 03:00:00', 19876543, 81796253),
(22, 'Cumplió con todas las tareas asignadas.', 1, '2025-02-21 03:00:00', 21098765, 84750632),
(23, 'Tuvo una conducta disruptiva durante el recreo.', 0, '2025-03-01 03:00:00', 21777799, 13904721),
(24, 'Contribuyó con ideas originales.', 1, '2025-03-03 03:00:00', 19880077, 18692054),
(25, 'Molestó a otros compañeros.', 0, '2025-03-07 03:00:00', 22110088, 10294856),
(26, 'Ayudó a mantener el orden en el aula.', 1, '2025-03-12 03:00:00', 20775643, 75869320),
(27, 'Falta de respeto hacia un docente.', 0, '2025-03-15 03:00:00', 19283746, 56429071),
(28, 'Demostró interés por aprender.', 1, '2025-03-18 03:00:00', 19876543, 49583821),
(29, 'No cumplió con las normas de convivencia.', 0, '2025-03-20 03:00:00', 21777799, 82967401),
(30, 'Participación sobresaliente en debate.', 1, '2025-03-22 03:00:00', 20495837, 98706543),
(31, 'Se negó a colaborar en grupo.', 0, '2025-03-25 03:00:00', 22334455, 86405879),
(32, 'Se mostró entusiasta en clase.', 1, '2025-04-01 03:00:00', 20998877, 20314980),
(33, 'Interrumpió la clase constantemente.', 0, '2025-04-05 03:00:00', 23456789, 28409513),
(34, 'Trabajó de manera autónoma y eficiente.', 1, '2025-04-08 04:00:00', 23001122, 85174962),
(35, 'No acató las instrucciones del docente.', 0, '2025-04-10 04:00:00', 19283746, 95127548),
(36, 'Participó activamente en clase.', 1, '2025-04-13 04:00:00', 19876543, 71827364),
(37, 'Mostró falta de respeto hacia un compañero.', 0, '2025-04-15 04:00:00', 22334455, 17362948),
(38, 'Muy buen desempeño en evaluación oral.', 1, '2025-04-18 04:00:00', 20775643, 93281765),
(39, 'No entregó tarea por segunda vez.', 0, '2025-04-20 04:00:00', 19880077, 94385162),
(40, 'Completó todas sus actividades a tiempo.', 1, '2025-04-22 04:00:00', 20998877, 28475914),
(41, 'Dificultad para seguir instrucciones.', 0, '2025-04-24 04:00:00', 23456789, 95127548),
(42, 'Excelente presentación de proyecto.', 1, '2025-04-26 04:00:00', 20495837, 94720650),
(43, 'No respetó el espacio de sus compañeros.', 0, '2025-04-28 04:00:00', 21234567, 64245373),
(44, 'Mostró iniciativa para resolver problemas.', 1, '2025-04-30 04:00:00', 21777799, 20307036),
(45, 'Se comportó de forma agresiva.', 0, '2025-05-01 04:00:00', 19876543, 32926771),
(46, 'Buen trabajo en equipo.', 1, '2025-05-03 04:00:00', 19283746, 49583821),
(47, 'No participó en la actividad grupal.', 0, '2025-05-05 04:00:00', 21098765, 12983152),
(48, 'Buena disposición para aprender.', 1, '2025-05-07 04:00:00', 23001122, 84165109),
(49, 'Hizo comentarios inapropiados.', 0, '2025-05-10 04:00:00', 22334455, 12387642),
(50, 'Se destacó por su compromiso.', 1, '2025-05-13 04:00:00', 20495837, 13904721),
(51, 'Interrumpió a sus compañeros.', 0, '2025-05-15 04:00:00', 19880077, 30468271),
(52, 'Mostró empatía y respeto.', 1, '2025-05-17 04:00:00', 19283746, 84652971),
(53, 'Alumno mostró buena conducta en clase.', 1, '2024-11-05 03:00:00', 19283746, 21890267),
(54, 'Alumno interrumpió la clase repetidamente.', 0, '2024-11-10 03:00:00', 19880077, 10234658),
(55, 'Participó activamente en la actividad grupal.', 1, '2024-11-18 03:00:00', 20495837, 54681239),
(56, 'No entregó la tarea a tiempo.', 0, '2024-11-22 03:00:00', 23001122, 94385162),
(57, 'Ayudó a sus compañeros durante el trabajo en clase.', 1, '2024-12-01 03:00:00', 22334455, 49583821),
(58, 'Se distrajo constantemente con el celular.', 0, '2024-12-07 03:00:00', 22110088, 24615980),
(59, 'Excelente comportamiento durante la visita guiada.', 1, '2024-12-12 03:00:00', 18765432, 13904721),
(60, 'Faltó a clases sin justificar.', 0, '2024-12-15 03:00:00', 19876543, 32926771),
(61, 'Mostró liderazgo en el trabajo en equipo.', 1, '2024-12-20 03:00:00', 19283746, 85431579),
(62, 'Contestó al profesor de manera inapropiada.', 0, '2024-12-23 03:00:00', 21777799, 30382459),
(63, 'Buena actitud frente a nuevos desafíos.', 1, '2025-01-05 03:00:00', 20775643, 36482940),
(64, 'Se negó a trabajar en grupo.', 0, '2025-01-10 03:00:00', 21234567, 29372465),
(65, 'Participación destacada en clase.', 1, '2025-01-15 03:00:00', 21098765, 85174962),
(66, 'Mostró desinterés durante toda la jornada.', 0, '2025-01-20 03:00:00', 23001122, 18692054),
(67, 'Actitud positiva y colaborativa.', 1, '2025-01-27 03:00:00', 23456789, 12954687),
(68, 'Interrumpió constantemente durante la clase.', 0, '2025-02-01 03:00:00', 19880077, 91827364),
(69, 'Realizó preguntas interesantes sobre el tema.', 1, '2025-02-04 03:00:00', 19283746, 71827364),
(70, 'No respetó el turno de palabra.', 0, '2025-02-10 03:00:00', 20998877, 84652971),
(71, 'Fue amable y respetuoso con sus compañeros.', 1, '2025-02-15 03:00:00', 20495837, 12983152),
(72, 'No trajo el material requerido.', 0, '2025-02-18 03:00:00', 19876543, 81796253),
(73, 'Cumplió con todas las tareas asignadas.', 1, '2025-02-21 03:00:00', 21098765, 84750632),
(74, 'Tuvo una conducta disruptiva durante el recreo.', 0, '2025-03-01 03:00:00', 21777799, 13904721),
(75, 'Contribuyó con ideas originales.', 1, '2025-03-03 03:00:00', 19880077, 18692054),
(76, 'Molestó a otros compañeros.', 0, '2025-03-07 03:00:00', 22110088, 10294856),
(77, 'Ayudó a mantener el orden en el aula.', 1, '2025-03-12 03:00:00', 20775643, 75869320),
(78, 'Falta de respeto hacia un docente.', 0, '2025-03-15 03:00:00', 19283746, 56429071),
(79, 'Demostró interés por aprender.', 1, '2025-03-18 03:00:00', 19876543, 49583821),
(80, 'No cumplió con las normas de convivencia.', 0, '2025-03-20 03:00:00', 21777799, 82967401),
(81, 'Participación sobresaliente en debate.', 1, '2025-03-22 03:00:00', 20495837, 98706543),
(82, 'Se negó a colaborar en grupo.', 0, '2025-03-25 03:00:00', 22334455, 86405879),
(83, 'Se mostró entusiasta en clase.', 1, '2025-04-01 03:00:00', 20998877, 20314980),
(84, 'Interrumpió la clase constantemente.', 0, '2025-04-05 03:00:00', 23456789, 28409513),
(85, 'Trabajó de manera autónoma y eficiente.', 1, '2025-04-08 04:00:00', 23001122, 85174962),
(86, 'No acató las instrucciones del docente.', 0, '2025-04-10 04:00:00', 19283746, 95127548),
(87, 'Participó activamente en clase.', 1, '2025-04-13 04:00:00', 19876543, 71827364),
(88, 'Mostró falta de respeto hacia un compañero.', 0, '2025-04-15 04:00:00', 22334455, 17362948),
(89, 'Muy buen desempeño en evaluación oral.', 1, '2025-04-18 04:00:00', 20775643, 93281765),
(90, 'No entregó tarea por segunda vez.', 0, '2025-04-20 04:00:00', 19880077, 94385162),
(91, 'Completó todas sus actividades a tiempo.', 1, '2025-04-22 04:00:00', 20998877, 28475914),
(92, 'Dificultad para seguir instrucciones.', 0, '2025-04-24 04:00:00', 23456789, 95127548),
(93, 'Excelente presentación de proyecto.', 1, '2025-04-26 04:00:00', 20495837, 94720650),
(94, 'No respetó el espacio de sus compañeros.', 0, '2025-04-28 04:00:00', 21234567, 64245373),
(95, 'Mostró iniciativa para resolver problemas.', 1, '2025-04-30 04:00:00', 21777799, 20307036),
(96, 'Se comportó de forma agresiva.', 0, '2025-05-01 04:00:00', 19876543, 32926771),
(97, 'Buen trabajo en equipo.', 1, '2025-05-03 04:00:00', 19283746, 49583821),
(98, 'No participó en la actividad grupal.', 0, '2025-05-05 04:00:00', 21098765, 12983152),
(99, 'Buena disposición para aprender.', 1, '2025-05-07 04:00:00', 23001122, 84165109),
(100, 'Hizo comentarios inapropiados.', 0, '2025-05-10 04:00:00', 22334455, 12387642),
(101, 'Se destacó por su compromiso.', 1, '2025-05-13 04:00:00', 20495837, 13904721),
(102, 'Interrumpió a sus compañeros.', 0, '2025-05-15 04:00:00', 19880077, 30468271),
(103, 'Mostró empatía y respeto.', 1, '2025-05-17 04:00:00', 19283746, 84652971);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

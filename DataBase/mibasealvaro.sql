-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-10-2021 a las 06:49:54
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mibasealvaro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sigla` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paralelo` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`ci`, `sigla`, `paralelo`) VALUES
('123321', 'INF-324', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

CREATE TABLE `materia` (
  `sigla` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `descrip` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`sigla`, `descrip`, `tipo`) VALUES
('INF-272', 'TALLER DE BASE DE DATOS', 'TRONCAL'),
('INF-324', 'PROGRAMACION MULTIMEDIAL', 'OPTATIVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `sigla` varchar(20) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `paralelo` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `nota1` int(11) DEFAULT NULL,
  `nota2` int(11) DEFAULT NULL,
  `nota3` int(11) DEFAULT NULL,
  `notafin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `nota`
--

INSERT INTO `nota` (`ci`, `sigla`, `paralelo`, `nota1`, `nota2`, `nota3`, `notafin`) VALUES
('123', 'INF-324', 'A', 80, 80, 80, 80),
('147', 'INF-324', 'A', 70, 70, 70, 70),
('148', 'INF-324', 'A', 50, 50, 50, 50),
('149', 'INF-324', 'A', 60, 60, 60, 60),
('150', 'INF-324', 'A', 70, 70, 70, 70),
('151', 'INF-324', 'A', 90, 90, 90, 90),
('152', 'INF-324', 'A', 70, 70, 70, 70),
('153', 'INF-324', 'A', 55, 55, 55, 55),
('154', 'INF-324', 'A', 65, 65, 65, 65);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `fechanac` date DEFAULT NULL,
  `departamento` varchar(2) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ci`, `nombre`, `apellido`, `fechanac`, `departamento`) VALUES
('123', 'alvaro', 'muruchi', '1998-12-28', 'lp'),
('123321', 'Poly', 'Rojas', '1970-03-21', 'LP'),
('147', 'Rodolfo', 'Aguirre', '1998-02-04', 'SC'),
('148', 'fernanda', 'Choque', '1997-09-12', 'SC'),
('149', 'Yamil', 'Gutierrez', '1998-12-04', 'SC'),
('150', 'Milenka', 'Fernandez', '1990-07-12', 'SC'),
('151', 'Renzo', 'Bustios', '1998-02-04', 'LP'),
('152', 'Hilary', 'Ticona', '1997-09-12', 'LP'),
('153', 'Gudnar', 'Padilla', '1998-12-04', 'LP'),
('154', 'Carla', 'Castillo', '1990-07-12', 'LP'),
('666', 'naranja', 'banana', '1923-05-06', 'OR'),
('777', 'coco', 'mandarina', '1980-07-07', 'PD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ci` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `passwordu` varchar(30) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ci`, `usuario`, `passwordu`) VALUES
('123', 'Estudiante', '123456'),
('123321', 'Docente', '963'),
('147', 'Estudiante', '147741'),
('148', 'Estudiante', '148841'),
('149', 'Estudiante', '149941'),
('150', 'Estudiante', '150051'),
('151', 'Estudiante', '151151'),
('152', 'Estudiante', '152251'),
('153', 'Estudiante', '153351'),
('154', 'Estudiante', '154451'),
('456', 'Estudiante', '789456'),
('666', 'Estudiante', '1923'),
('777', 'Docente', '1707'),
('789', 'Docente', '789123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`sigla`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD KEY `ci` (`ci`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ci`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `nota`
--
ALTER TABLE `nota`
  ADD CONSTRAINT `nota_ibfk_1` FOREIGN KEY (`ci`) REFERENCES `persona` (`ci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

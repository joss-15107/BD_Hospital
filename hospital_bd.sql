-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3307
-- Tiempo de generación: 08-07-2026 a las 05:03:45
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hospital_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `edad` int(10) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `diagnostico` varchar(120) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `nombre`, `apellido`, `edad`, `sexo`, `telefono`, `direccion`, `diagnostico`, `fecha`) VALUES
(1, 'Josue', 'Urbina Huerta', 19, 'Masculino', '5636824890', 'Ameca, Estado de México', 'Infección en el estomago', '2026-07-06'),
(2, 'Agustin', 'Castro Perez', 19, 'Masculino', '5636824890', 'Ozumba, México', 'Infección en la garganta', '2026-07-05'),
(4, 'Lesly Liseth', 'Arenas Monte Negro', 19, 'Femenino', '5546632526', 'Ecatzingo, Estado de México', 'Dolor de cabeza y migraña', '2026-05-15'),
(5, 'Emmanuel', 'Alcantara Romero', 20, 'Masculino', '5563262335', 'Tepetlixpa, Estado de México', 'Infección respiratoria', '2026-03-14'),
(6, 'Roberto', 'Avila Lopez', 17, 'Masculino', '5563262526', 'Chalco, Estado de México', 'Dolor de estomago', '2026-08-30'),
(7, 'Angel', 'Bautista Machuca', 21, 'Masculino', '5584865223', 'Nepantla, Estado de México', 'Infección en el estomago', '2026-02-24'),
(8, 'Rosa Maria', 'Martínez Sanchez', 23, 'Femenino', '5548522364', 'Chimal, Estado de México', 'Dolor de rodilla', '2026-09-17'),
(9, 'Martha', 'Ramirez Diaz', 18, 'Femenino', '5548863632', 'Tlalama, Estado de México', 'Dolor de abdomen', '2026-06-07'),
(10, 'Victor', 'Nava Sanchez', 17, 'Masculino', '5623236325', 'Ameca, estado de México', 'Estres y Migraña', '2026-05-27'),
(11, 'Karen', 'Estrada Muñoz', 19, 'Femenino', '5625845996', 'Atlautla, Estado de México', 'Dolor de cuerpo', '2026-08-30'),
(12, 'Victor Uriel', 'Rojas Perez', 20, 'Masculino', ' 526325255', 'Ozumba, Estado de México', 'Fiebre y mareo', '2026-09-19'),
(13, 'Miguel ', 'Robles Santos', 18, 'Masculino', '5652232624', 'Tepetlixpa, Estado de Mexico', 'Cuerpo cortado', '2026-07-03'),
(14, 'Rocio', 'Montes Huerta', 25, 'Femenino', '5565236265', 'Ixtapaluca, Estado de México', 'Infección en el estomago', '2026-04-23'),
(15, 'Erika', 'Lopez Sandoval', 22, 'Femenino', '5563262335', 'Chimal, Estado de México', 'Infección respiratoria', '2026-09-18'),
(16, 'Anna Paola', 'Ramires Cruz', 25, 'Femenino', '5663295452', 'Ecatzingo, Estado de México', 'Mareo y nauseas', '2026-01-06'),
(17, 'Leonel ', 'Santos Pineda', 30, 'Masculino', '5542232625', 'Tepetlixpa, Estado de México', 'Sobre carga muscular', '2026-04-05'),
(18, 'Fernanda', 'Sanchez Padilla', 29, 'Femenino', '5548869556', 'Nepantla, Estado de México', 'Dolor de espalda', '2026-07-25'),
(19, 'Hector', 'Muños de la Rosa', 18, 'Masculino', '5521124556', 'Ozumba, Estado de México', 'Dolor de garganta', '2026-06-29'),
(21, 'Monica', 'Toledano Huerta', 18, 'Femenino', '5548897556', 'Tlalmanalco, Estado de México', 'Cuerpo cortado', '2026-06-25'),
(22, 'Jorge', 'Mendoza Lopez', 24, 'Masculino', '5632188963', 'Tepetlixpa, Estado de México', 'Infección en la garganta', '2026-07-28'),
(23, 'Roberto', 'Lopez Perez', 22, 'Masculino', '5563262623', 'Tepecoculco, Estado de México', 'Cuerpo cortado', '2026-08-15'),
(24, 'Guadalupe', 'Arriaga Montez', 27, 'Femenino', '5658595652', 'Ixtapaluca, Estado de México', 'Fiebre y mareo', '2026-02-02'),
(25, 'Karen', 'Rueda Estrada', 27, 'Femenino', '5689845226', 'Ozumba, Estado de México', 'Cuerpo cortado', '2026-06-03'),
(26, 'Juan', 'Lopez RIvera', 30, 'Masculino', '5548892326', 'Ameca, Estado de México', 'Nauseas y vomito', '2026-03-23'),
(27, 'Carlos', 'Mendoza Lopez', 27, 'Otro', '5842262326', 'Nepantla, Estado de México', 'Dolor de estomago', '2026-07-05');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-01-2024 a las 12:11:30
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(255) NOT NULL,
  `paciente` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `observacion` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  `rol` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `fecha`, `hora`, `paciente`, `doctor`, `especialidad`, `observacion`, `estado`, `rol`) VALUES
(1, '2024-01-16', '9:00:am', 'karelys vera', 'lenin hidalgo', 'medicina general', 'cita', 'pendiente', '2024-01-16'),
(2, '2024-01-15', '13:00', 'nicole  vera', 'jose perez', 'medicina general', 'chequeo general', 'atentido', '2024-01-31'),
(5, '2024-01-15', '10:00', 'nicole  vera', 'adrian porras', 'ginecologo', 'chequeo completo', 'atendido', '2024-01-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

DROP TABLE IF EXISTS `contactos`;
CREATE TABLE `contactos` (
  `id` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombres`, `apellidos`, `cedula`, `correo`, `telefono`, `direccion`, `fecha`) VALUES
(1, 'lenin orlando', 'hidalgo almeida', '18093568', 'leni@gmail.com', '04126001614', 'caracas', '2024-01-13'),
(5, 'karelys coromoto', 'villegas vera', '17921240', '', '04242173924', 'caucagua', '2024-01-13'),
(7, 'nicole vera', 'villegas vera', '15662244', '', '04126001615', 'caucagua', '2024-01-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

DROP TABLE IF EXISTS `doctores`;
CREATE TABLE `doctores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `especialidad` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `rol` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`id`, `nombre`, `especialidad`, `telefono`, `sexo`, `fecha`, `rol`) VALUES
(3, 'karelys vera', 'pediatra', '04242173924', 'femenino', '2024-01-14', '1990-01-08'),
(5, 'nicole vera', 'fisioterapeuta', '0412600331', 'femenino', '2024-01-14', '1988-03-15'),
(6, 'carlos perez', 'medicina general', '04126001614', 'masculino', '2024-01-15', '1989-11-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE `especialidades` (
  `id` int(11) NOT NULL,
  `especialidades` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`id`, `especialidades`, `fecha`) VALUES
(1, 'medicina general', '2024-01-15'),
(2, 'gastrologo', '2024-01-16'),
(4, 'pediatra', '2024-01-15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

DROP TABLE IF EXISTS `horario`;
CREATE TABLE `horario` (
  `id` int(11) NOT NULL,
  `dias` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `horario`
--

INSERT INTO `horario` (`id`, `dias`, `doctor`, `fecha`) VALUES
(1, 'lunes y viernes', 'karelys vera', '2024-01-15'),
(2, 'Martes, Jueves', 'lenin hidalgo', '2024-01-16'),
(4, 'viernes y sabado', 'nicole vera', '2024-01-16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `validar`
--

DROP TABLE IF EXISTS `validar`;
CREATE TABLE `validar` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `validar`
--

INSERT INTO `validar` (`id`, `usuario`, `password`) VALUES
(6, 'lenin orlando', 'ac7659bfea7807d259391f99cabc2fb9');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `validar`
--
ALTER TABLE `validar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `doctores`
--
ALTER TABLE `doctores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `validar`
--
ALTER TABLE `validar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

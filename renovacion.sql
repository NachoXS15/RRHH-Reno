-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-04-2024 a las 17:48:20
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rrhh_dp`
--

CREATE TABLE `rrhh_dp` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `dni` decimal(13,0) NOT NULL,
  `nacimiento` date NOT NULL,
  `telefono` decimal(14,0) NOT NULL,
  `hijos` int(11) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `observaciones` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `rrhh_dp`
--

INSERT INTO `rrhh_dp` (`id`, `nombre_completo`, `dni`, `nacimiento`, `telefono`, `hijos`, `domicilio`, `observaciones`) VALUES
(1, 'Ignacio Pantoja', 44008496, '2002-05-03', 3804800454, 0, 'Guaranies 1174', 'Perteneciente al equipo de Maxi'),
(3, 'Maximiliano Elias Guia Roja', 39298276, '1996-01-15', 3804482823, 0, 'Barrio Legislativo', 'un capo'),
(7, 'Cristian Pugea', 123123123, '2024-04-10', 38041231231, 1, 'Barrio Hospital', 'el + kapito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rrhh_dp`
--
ALTER TABLE `rrhh_dp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rrhh_dp`
--
ALTER TABLE `rrhh_dp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

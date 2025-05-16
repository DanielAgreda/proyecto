-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 15-05-2025 a las 15:38:14
-- Versión del servidor: 11.7.2-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `software2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclista`
--

CREATE TABLE `ciclista` (
  `id_ciclista` int(11) NOT NULL,
  `nombres` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `equipo` varchar(250) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `pais` varchar(250) DEFAULT NULL,
  `referencia` varchar(250) DEFAULT NULL,
  `tipo_carrera` varchar(250) DEFAULT NULL,
  `nombre_carrera` varchar(250) DEFAULT NULL,
  `pais_carrera` varchar(250) DEFAULT NULL,
  `imagen` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ciclista`
--

INSERT INTO `ciclista` (`id_ciclista`, `nombres`, `apellidos`, `email`, `equipo`, `telefono`, `fecha_nacimiento`, `pais`, `referencia`, `tipo_carrera`, `nombre_carrera`, `pais_carrera`, `imagen`) VALUES
(1, 'Egan', 'Bernal', 'egan@gmail.com', 'Movistar', 2147483647, '1982-12-06', 'Colombia', 'a', 'pavimento', 'giro', 'Italia', ''),
(2, 'Jahiro', 'B', 'jahiro@gmail.com', NULL, 2147483647, '2000-08-12', 'Colombia', 'c', 'ciclocross', 'tour', 'Francia', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `titulo` varchar(250) DEFAULT NULL,
  `descripcion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `Cargo` varchar(250) DEFAULT NULL,
  `Equipo` varchar(250) DEFAULT NULL,
  `nombre` varchar(250) DEFAULT NULL,
  `apellidos` varchar(250) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `sexo` varchar(250) DEFAULT NULL,
  `telefono` int(10) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `pais` varchar(250) DEFAULT NULL,
  `ciudad` varchar(250) DEFAULT NULL,
  `direccion` varchar(250) DEFAULT NULL,
  `contrasenia` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `Cargo`, `Equipo`, `nombre`, `apellidos`, `fecha_nacimiento`, `sexo`, `telefono`, `email`, `pais`, `ciudad`, `direccion`, `contrasenia`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin@gmail.com', NULL, NULL, NULL, 'admin123'),
(2, 'administrador', 'Movistar', 'Daniel', 'Agreda', '2025-03-04', 'masculino', 2147483647, 'usuario@gmail.com', 'Colombia', 'Bogota', 'CLL 64F 73-83', 'usuario123'),
(4, '', 'Ineos Grenadiers', 'usuario2', 'apellido2', '2025-11-06', 'masculino', 2147483647, 'egan@gmail.com', 'Ecuador', 'Pekin', 'calle45# 73-54', 'Jahiro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciclista`
--
ALTER TABLE `ciclista`
  ADD PRIMARY KEY (`id_ciclista`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ciclista`
--
ALTER TABLE `ciclista`
  MODIFY `id_ciclista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

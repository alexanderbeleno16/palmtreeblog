-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 02:38:18
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `palmtreeblog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `contacto_id` int(11) NOT NULL,
  `contacto_nombre` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto_correo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contacto_asunto` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entradas`
--

CREATE TABLE `entradas` (
  `entrada_id` int(11) NOT NULL,
  `entrada_titulo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrada_imagen` varchar(700) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrada_descripcion` varchar(999) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entrada_fecha` datetime DEFAULT NULL,
  `autor` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persona_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `entradas`
--

INSERT INTO `entradas` (`entrada_id`, `entrada_titulo`, `entrada_imagen`, `entrada_descripcion`, `entrada_fecha`, `autor`, `persona_id`) VALUES
(29, 'Barranquilla, city. ', '../../public/img/entrada_multimedia/paisaje_2.jpg', 'Barranquilla, city. Barranquilla, city. Barranquilla, city. Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, ', '2021-07-13 18:51:00', 'Alexander JB Mackenzie', 16),
(31, 'miami beach ', '../../public/img/entrada_multimedia/paisaje.jpg', 'Barranquilla, city. Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.Barranquilla, city.', '2021-07-13 18:57:39', 'Alexander JB Mackenzie', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `login_usuario` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_contrasena` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`login_id`, `login_usuario`, `login_contrasena`) VALUES
(1, 'alex', 'alex123'),
(2, 'toti', 'toti123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `persona_id` int(11) NOT NULL,
  `persona_nombre` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persona_apellido` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `persona_correo` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `login_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`persona_id`, `persona_nombre`, `persona_apellido`, `persona_correo`, `login_id`) VALUES
(16, 'Alexander', 'JB Mackenzie', 'as@asa.com', 1),
(17, 'jostin', 'DBM', 'as@asa.com', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`contacto_id`);

--
-- Indices de la tabla `entradas`
--
ALTER TABLE `entradas`
  ADD PRIMARY KEY (`entrada_id`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`persona_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `contacto_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `entradas`
--
ALTER TABLE `entradas`
  MODIFY `entrada_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `persona_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

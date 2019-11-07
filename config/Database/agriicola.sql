-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-11-2019 a las 20:47:56
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agriicola`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agroquimicos`
--

CREATE TABLE `agroquimicos` (
  `id_cultivo` int(11) NOT NULL,
  `id_agroquimico` int(11) NOT NULL,
  `aplicacion` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `nombre_comercial` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `dosis` int(11) NOT NULL,
  `tiempo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_causa` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `frecuencia` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `existencia` int(11) NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `agroquimicos`
--

INSERT INTO `agroquimicos` (`id_cultivo`, `id_agroquimico`, `aplicacion`, `nombre_comercial`, `precio`, `moneda`, `cantidad`, `unidad`, `dosis`, `tiempo`, `tipo_causa`, `frecuencia`, `fecha_inicio`, `fecha_fin`, `existencia`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(27, 10, 'enfermedad', 'Ambroxol xD', 10, 'pesos', 7, 'ml', 7, 'semana', 'micro', 'Diario', '2019-11-06', '2019-11-14', 4, 'activo', '2019-11-06', NULL),
(30, 11, 'enfermedad', 'asdasd', 5, 'pesos', 6, 'ml', 5, 'semana', 'micro', 'Diario', '2019-11-06', '2019-11-20', 5, 'activo', '2019-11-06', NULL),
(31, 12, 'nutriente', 'Nutriplant', 2400, 'pesos', 4, 'l', 8, 'dias', 'macro', 'Cada 2 dias', '2019-11-22', '2019-11-22', 3, 'activo', '2019-11-07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corte`
--

CREATE TABLE `corte` (
  `id_cultivo` int(11) NOT NULL,
  `id_corte` int(11) NOT NULL,
  `cliente` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_corte` date NOT NULL,
  `peso` int(11) NOT NULL,
  `unidad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `mercado` varchar(45) CHARACTER SET latin1 NOT NULL,
  `calidad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(45) CHARACTER SET latin1 NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cultivos`
--

CREATE TABLE `cultivos` (
  `id_u` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `nombre_predio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `hectareas` double NOT NULL,
  `tipo_especie` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `subespecie` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `variedad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `estado` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `municipio` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `localidad` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_suelo` enum('artificial','natural') COLLATE utf8_spanish_ci NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cultivos`
--

INSERT INTO `cultivos` (`id_u`, `id_cultivo`, `nombre_predio`, `hectareas`, `tipo_especie`, `subespecie`, `variedad`, `fecha_inicio`, `estado`, `municipio`, `localidad`, `tipo_suelo`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(6, 19, 'Maiz', 4, 'Granos', 'Alcachofa', 'Maiz Blanco', '2019-10-25', 'Michoacan de Ocampo', 'Tlalpujahua', 'Tlalpujahua', 'artificial', 'activo', '2019-10-25', NULL),
(6, 27, 'Predio uno chido', 4, 'Frutales', 'Acelga', 'Aclega chica', '2019-11-07', 'Michoacan', 'Hidalgo', 'Mangana', 'artificial', 'eliminado', '2019-11-06', '2019-11-06'),
(6, 30, 'asd', 11, 'Frutales', 'Acelga', 'asd', '2019-11-06', 'asd', 'asd', 'asd', 'natural', 'activo', '2019-11-06', NULL),
(6, 31, 'Maiz', 1, 'Frutales', 'Acelga', '', '2019-11-15', 'Micj', 'as', 'da', 'artificial', 'activo', '2019-11-07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id_u` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `color` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `text_color` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `id_cultivo` int(11) NOT NULL,
  `id_gasto` int(11) NOT NULL,
  `concepto` varchar(45) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(45) CHARACTER SET latin1 NOT NULL,
  `frecuencia` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_gasto` date NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos_generales`
--

CREATE TABLE `gastos_generales` (
  `id_gasto_general` int(11) NOT NULL,
  `concepto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `catidad` int(11) NOT NULL,
  `moneda` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_gasto` date NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL,
  `id_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profiles`
--

CREATE TABLE `profiles` (
  `id_profile` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `rol` enum('agronomo','agricultor') COLLATE utf8_spanish_ci NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `acceso` varchar(255) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo_artificial`
--

CREATE TABLE `suelo_artificial` (
  `id_cultivo` int(11) NOT NULL,
  `id_suelo_artificial` int(11) NOT NULL,
  `sustrato` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `infraestructura` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `riego` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suelo_artificial`
--

INSERT INTO `suelo_artificial` (`id_cultivo`, `id_suelo_artificial`, `sustrato`, `infraestructura`, `riego`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(27, 6, 'Roca volcánica', 'Invernadero', 'Aspersiòn', 'activo', '2019-11-06', NULL),
(31, 7, 'Arcilla expandida', 'Invernadero', 'AspersiÃ²n', 'activo', '2019-11-07', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suelo_natural`
--

CREATE TABLE `suelo_natural` (
  `id_cultivo` int(11) NOT NULL,
  `id_suelo_natural` int(11) NOT NULL,
  `tipo_suelo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `infraestructura` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `riego` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `ph` int(11) NOT NULL,
  `salinidad` int(11) NOT NULL,
  `conduc_elec` int(11) NOT NULL,
  `materia_organica` int(11) NOT NULL,
  `zinc` int(11) NOT NULL,
  `nitratos` int(11) NOT NULL,
  `fosforo` int(11) NOT NULL,
  `potasio` int(11) NOT NULL,
  `manganeso` int(11) NOT NULL,
  `calcio` int(11) NOT NULL,
  `cobre` int(11) NOT NULL,
  `oxido_azufre` int(11) NOT NULL,
  `boro` int(11) NOT NULL,
  `magnesio` int(11) NOT NULL,
  `oxigeno` int(11) NOT NULL,
  `estatus` enum('activo','finalizado','eliminado') COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `suelo_natural`
--

INSERT INTO `suelo_natural` (`id_cultivo`, `id_suelo_natural`, `tipo_suelo`, `infraestructura`, `riego`, `ph`, `salinidad`, `conduc_elec`, `materia_organica`, `zinc`, `nitratos`, `fosforo`, `potasio`, `manganeso`, `calcio`, `cobre`, `oxido_azufre`, `boro`, `magnesio`, `oxigeno`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(30, 4, 'Arenosos', 'Invernadero', 'AspersiÃ²n', 12, 12, 10, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'activo', '2019-11-06', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `nombre` varchar(45) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(45) CHARACTER SET latin1 NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `correo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `acceso` varchar(45) CHARACTER SET latin1 NOT NULL,
  `empresa` varchar(45) CHARACTER SET latin1 NOT NULL,
  `tipo_usuario` enum('admin','user') CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`) VALUES
(3, 'Abraham', 'Ayala Padilla', 7861191310, 'tonayan@arpan.com', '8cb2237d0679ca88db6464eac60da96345513964', 'ARPAN', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-10-25', NULL),
(4, 'alex_guzman_luna@hotmail.com', 'Guzman Luna', 7861420889, 'alex@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'IDDEN', 'user', 'Hidalgo', 'Michoacan', '2019-10-25', NULL),
(5, 'Ivan', 'Suarez', 7861134498, 'ivan.suap@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'HYPERION', 'user', 'Hidalgo', 'Michoacan', '2019-11-06', NULL),
(6, 'Eduardo', 'Hernandez', 7861125421, 'lalohh68@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'tics', 'user', 'Morelia', 'Michoacan', '2019-11-07', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD PRIMARY KEY (`id_agroquimico`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indices de la tabla `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id_corte`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indices de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  ADD PRIMARY KEY (`id_cultivo`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_cultivo` (`id_cultivo`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indices de la tabla `gastos_generales`
--
ALTER TABLE `gastos_generales`
  ADD PRIMARY KEY (`id_gasto_general`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_u` (`id_u`);

--
-- Indices de la tabla `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  ADD PRIMARY KEY (`id_suelo_artificial`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indices de la tabla `suelo_natural`
--
ALTER TABLE `suelo_natural`
  ADD PRIMARY KEY (`id_suelo_natural`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agroquimicos`
--
ALTER TABLE `agroquimicos`
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gastos_generales`
--
ALTER TABLE `gastos_generales`
  MODIFY `id_gasto_general` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo_artificial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo_natural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD CONSTRAINT `agroquimicos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cultivos`
--
ALTER TABLE `cultivos`
  ADD CONSTRAINT `cultivos_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `gastos_generales`
--
ALTER TABLE `gastos_generales`
  ADD CONSTRAINT `gastos_generales_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  ADD CONSTRAINT `suelo_artifical_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `suelo_natural`
--
ALTER TABLE `suelo_natural`
  ADD CONSTRAINT `suelo_natural_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

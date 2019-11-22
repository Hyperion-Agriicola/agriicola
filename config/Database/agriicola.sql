-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 22-11-2019 a las 00:37:12
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.11

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
  `unidad_dosis` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
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

INSERT INTO `agroquimicos` (`id_cultivo`, `id_agroquimico`, `aplicacion`, `nombre_comercial`, `precio`, `moneda`, `cantidad`, `unidad`, `dosis`, `unidad_dosis`, `tipo_causa`, `frecuencia`, `fecha_inicio`, `fecha_fin`, `existencia`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(33, 14, 'Nutriente', 'Abono de crecimiento', 4, 'pesos', 7, 'ml', 6, 'semana', 'micro', 'Diario', '2019-11-11', '2019-11-20', 6, 'eliminado', '2019-11-11', NULL),
(34, 15, 'Plaga', 'lc3', 800, 'pesos', 70, 'ml', 2, 'dias', 'AraÃ±a roja', 'Cada 2 dias', '2019-11-20', '2019-11-29', 3, 'activo', '2019-11-11', NULL),
(35, 16, 'Nutriente', 'Abono', 5, 'pesos', 2, 'ml', 3, 'semana', '', 'Diario', '2019-11-16', '2019-11-17', 4, 'eliminado', '2019-11-16', '2019-11-20'),
(36, 17, 'Nutriente', 'Nombresito de nutriente', 15, 'pesos', 10, 'ml', 8, 'semana', 'micro', 'Diario', '2019-11-16', '2019-11-19', 4, 'activo', '2019-11-16', NULL),
(37, 18, 'Nutriente', 'Abono', 5, 'pesos', 7, 'Kg', 4, 'semana', 'micro', 'Diario', '2019-11-20', '2019-11-28', 4, 'activo', '2019-11-18', NULL),
(37, 19, 'Nutriente', 'Segundo abono', 500, 'Pesos', 10, 'ml', 10, 'Semana', 'micro', 'Diario', '2019-11-18', '2019-11-19', 2, 'activo', '2019-11-18', NULL),
(37, 20, 'Nutriente', 'Abono', 9, 'pesos', 9, 'ml', 4, 'semana', 'macro', 'Diario', '2019-11-18', '2019-11-19', 5, 'activo', '2019-11-18', '2019-11-18'),
(38, 21, 'Nutriente', 'Abono', 700, 'pesos', 20, 'Kg', 1, 'semana', 'macro', 'Diario', '2019-11-19', '2019-11-20', 8, 'eliminado', '2019-11-19', NULL),
(39, 22, 'Nutriente', 'Abono', 3, 'pesos', 2, 'l', 3, 'dias', 'macro', 'Cada 13 dias', '2019-11-22', '2019-11-29', 6, 'activo', '2019-11-19', NULL),
(37, 23, 'Plaga', 'Tengo piojos :c', 3, 'pesos', 4, 'ml', 2, 'semana', '', 'Diario', '2019-11-20', '2019-11-21', 2, 'eliminado', '2019-11-20', '2019-11-20'),
(37, 24, '', 'Toy enfermo :c', 3, 'pesos', 2, 'ml', 2, 'semana', '', 'Diario', '2019-11-21', '2019-11-22', 2, 'eliminado', '2019-11-20', '2019-11-20'),
(35, 25, 'Enfermedad', 'Terminator', 5, 'pesos', 4, 'ml', 3, 'semana', '', 'Diario', '2019-11-20', '2019-11-21', 4, 'eliminado', '2019-11-20', '2019-11-20'),
(36, 26, 'Nutriente', 'Ab', 6, 'pesos', 5, 'ml', 3, 'semana', 'micro', 'Diario', '2019-11-20', '2019-11-21', 3, 'activo', '2019-11-20', '2019-11-20'),
(36, 27, 'Enfermedad', 'Terminator 2', 5, 'pesos', 4, 'ml', 3, 'semana', 'Cercosporosis', 'Diario', '2019-11-20', '2019-11-21', 3, 'activo', '2019-11-20', '2019-11-20'),
(36, 28, 'Plaga', 'Antipiojos', 4, 'pesos', 1, 'l', 3, 'semana', 'Mosquita', 'Diario', '2019-11-20', '2019-11-22', 4, 'activo', '2019-11-20', '2019-11-20'),
(37, 29, 'Nutriente', 'ABono 2', 12, 'pesos', 6, '', 10, 'g', 'micro', 'Diario', '2019-11-21', '2019-11-22', 5, 'activo', '2019-11-21', NULL),
(40, 30, 'Nutriente', 'Abono', 5, 'dolar', 3, 'l', 2, 'ml', 'macro', 'Diario', '2019-11-21', '2019-11-22', 3, 'activo', '2019-11-21', '2019-11-21'),
(41, 31, 'Plaga', 'Foley', 250, 'pesos', 1, 'l', 200, 'ml', 'PulgÃ³n', 'Cada 3 dias', '2019-11-28', '2019-12-27', 2, 'activo', '2019-11-21', NULL);

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

--
-- Volcado de datos para la tabla `corte`
--

INSERT INTO `corte` (`id_cultivo`, `id_corte`, `cliente`, `fecha_corte`, `peso`, `unidad`, `mercado`, `calidad`, `precio`, `moneda`, `estatus`, `fecha_registro`) VALUES
(37, 1, 'Ivan', '2019-11-20', 700, 'kg', 'Nacional', 'primera', 10000, 'pesos', 'activo', '2019-11-20'),
(37, 2, 'XD', '2019-11-20', 4, 'g', 'Nacional', 'primera', 6, 'pesos', 'activo', '2019-11-20');

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
(7, 33, 'Predio Pro', 5, 'Granos', 'Maiz', 'Maiz negro', '2019-11-11', 'Michoacan de Ocampo', 'Hidalgo', 'Mangana', 'artificial', 'activo', '2019-11-11', NULL),
(8, 34, 'Predio Agua Blanca', 80, 'Frutales', 'Aguacate', 'azul', '2019-11-11', 'Michoacan de Ocampo', 'LÃ¡zaro CÃ¡rdenas', 'LÃ¡zaro CÃ¡rdenas', 'natural', 'activo', '2019-11-11', NULL),
(10, 35, 'La Joya', 12, 'Granos', 'Arroz', 'Grande', '2019-11-16', 'MichoacÃ¡n de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'eliminado', '2019-11-16', '2019-11-18'),
(10, 36, 'Segundo Predio', 10, 'Frutales', 'Aguacate', 'Haz', '2019-11-16', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-16', '2019-11-18'),
(10, 37, 'Jujodesu', 100, 'Frutales', 'Acelga', 'Sin Variedad', '2019-11-21', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-18', NULL),
(11, 38, 'Predio 1', 6, 'Granos', 'Maiz', 'Maiz Blanco', '2019-11-19', 'Michoacan de Ocampo', 'Hidalgo', 'Ciudad Hidalgo', 'natural', 'eliminado', '2019-11-19', NULL),
(11, 39, 'Tomates Locos', 1, 'Hortalizas', 'Jitomate', 'Rojo', '2019-11-20', 'Michoacan de Ocampo', 'Hidalgo', 'Ciudad Hidalgo', 'artificial', 'activo', '2019-11-19', NULL),
(10, 40, 'San Geronimo', 19, 'Frutales', 'Aguacate', 'Szsss', '2019-11-21', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-21', NULL),
(12, 41, 'Predio Uno', 3, 'Hortalizas', 'Calabaza', 'Suchini', '2019-11-07', 'Michoacan de Ocampo', 'Tuxpan', 'Tuxpan', 'natural', 'activo', '2019-11-21', NULL);

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

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id_u`, `id_cultivo`, `id_evento`, `titulo`, `descripcion`, `inicio`, `fin`, `color`, `text_color`, `fecha_registro`, `fecha_modif`) VALUES
(10, 37, 1, 'asd', 'asd', '2019-11-18 00:00:00', '2019-11-19 00:00:00', '#4caf50', '#FFFFFF', '2019-11-18', NULL);

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

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`id_cultivo`, `id_gasto`, `concepto`, `precio`, `moneda`, `frecuencia`, `fecha_gasto`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(37, 1, 'Nurientes', 27, 'Pesos', 'Semanal', '2019-11-21', 'activo', '2019-11-20', NULL);

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

--
-- Volcado de datos para la tabla `gastos_generales`
--

INSERT INTO `gastos_generales` (`id_gasto_general`, `concepto`, `catidad`, `moneda`, `fecha_gasto`, `fecha_registro`, `fecha_modif`, `id_u`) VALUES
(1, 'Nomina', 10000, 'Pesos', '2019-11-21', '2019-11-20', NULL, 10),
(2, 'Nomina 2', 13, 'Euro', '2019-11-21', '2019-11-20', NULL, 10);

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
(33, 8, 'De origen naturales', 'Invernaderos de alta tecnologia', 'AutomÃ¡tico', 'eliminado', '2019-11-11', NULL),
(35, 9, 'Arcilla expandida', 'Invernadero', 'AspersiÃ²n', 'eliminado', '2019-11-16', NULL),
(36, 10, 'Arcilla expandida', 'Macro tuneles', 'NebulizaciÃ³n', 'activo', '2019-11-16', '2019-11-18'),
(39, 11, 'Grava', 'Malla de sombra', 'Goteo', 'activo', '2019-11-19', NULL);

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
(34, 6, 'Arenosos', 'Macro tuneles', 'Rodado', 4, 2, 3, 62, 55, 38, 26, 60, 60, 26, 17, 73, 65, 21, 17, 'activo', '2019-11-11', NULL),
(37, 7, 'Arenosos', 'Invernaderos de alta tecnologia', 'AutomÃ¡tico', 12, 4, 6, 40, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'activo', '2019-11-18', '2019-11-18'),
(38, 8, 'Arcillosos', 'Invernadero', 'AspersiÃ²n', 14, 4, 3, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'eliminado', '2019-11-19', NULL),
(40, 9, 'Arcilloso limoso', 'Sin infraestructura', 'Sin riego', 7, 5, 6, 43, 4, 74, 6, 39, 4, 39, 9, 80, 50, 50, 11, 'activo', '2019-11-21', NULL),
(41, 10, 'Franco limoso', 'Macrotuneles', 'Goteo', 7, 5, 3, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'activo', '2019-11-21', NULL);

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
  `fecha_modif` date DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tokenExp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`, `token`, `tokenExp`) VALUES
(5, 'Ivan', 'Suarez', 7861134498, 'ivan.suap@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'HYPERION', 'user', 'Hidalgo', 'Michoacan', '2019-11-06', NULL, '', '0000-00-00 00:00:00'),
(6, 'Eduardo', 'Hernandez', 7861125421, 'lalohh68@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'tics', 'user', 'Morelia', 'Michoacan', '2019-11-07', NULL, '', '0000-00-00 00:00:00'),
(7, 'Abraham', 'Ayala Padilla', 7861191310, 'dev.abxy@gmail.com', 'a23cceabef4dec1f5cb71c7a1a3f6073dac756bd', 'ARPAN', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-11-11', '2019-11-11', '50fe2fbf139a9bb14df0f59a85964988', '2019-11-16 17:29:08'),
(8, 'MARICELA', 'ALVAREZ SANCHEZ', 4432454567, 'MALVAREZ@ITSCH.EDU.MX', '1ba06515413d507858e0071c591356d1ec652af9', 'ITSCH', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-11', NULL, '', '0000-00-00 00:00:00'),
(9, 'Lil', 'Pepe', 7861234569, 'lil@agriicola.com', 'a23cceabef4dec1f5cb71c7a1a3f6073dac756bd', 'ARPAN', 'user', 'Morelia', 'Michoacan', '2019-11-11', '2019-11-16', '27939345b942f4517f765a0327dc4933', '2019-11-16 09:25:35'),
(10, 'Prueba', 'Prueba', 7875462626, 'prueba@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'PRUEBACORP', 'user', 'Morelia', 'Michoacan', '2019-11-16', NULL, NULL, NULL),
(11, 'Prueba Innmortal', 'Apellido', 7861456789, 'innmortal@agriicola.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'INNMORTAL', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-11-19', NULL, NULL, NULL),
(12, 'Test', 'Test', 4531236578, 'test@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'TEST', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-21', NULL, NULL, NULL);

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
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gastos_generales`
--
ALTER TABLE `gastos_generales`
  MODIFY `id_gasto_general` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo_artificial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo_natural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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

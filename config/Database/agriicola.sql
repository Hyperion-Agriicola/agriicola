-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 17, 2019 at 12:14 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriicola`
--

-- --------------------------------------------------------

--
-- Table structure for table `agroquimicos`
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
-- Dumping data for table `agroquimicos`
--

INSERT INTO `agroquimicos` (`id_cultivo`, `id_agroquimico`, `aplicacion`, `nombre_comercial`, `precio`, `moneda`, `cantidad`, `unidad`, `dosis`, `tiempo`, `tipo_causa`, `frecuencia`, `fecha_inicio`, `fecha_fin`, `existencia`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(33, 14, 'Nutriente', 'Abono de crecimiento', 4, 'pesos', 7, 'ml', 6, 'semana', 'micro', 'Diario', '2019-11-11', '2019-11-20', 6, 'eliminado', '2019-11-11', NULL),
(34, 15, 'Plaga', 'lc3', 800, 'pesos', 70, 'ml', 2, 'dias', 'AraÃ±a roja', 'Cada 2 dias', '2019-11-20', '2019-11-29', 3, 'activo', '2019-11-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `corte`
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
-- Table structure for table `cultivos`
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
-- Dumping data for table `cultivos`
--

INSERT INTO `cultivos` (`id_u`, `id_cultivo`, `nombre_predio`, `hectareas`, `tipo_especie`, `subespecie`, `variedad`, `fecha_inicio`, `estado`, `municipio`, `localidad`, `tipo_suelo`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(7, 33, 'Predio Pro', 5, 'Granos', 'Maiz', 'Maiz negro', '2019-11-11', 'Michoacan de Ocampo', 'Hidalgo', 'Mangana', 'artificial', 'activo', '2019-11-11', NULL),
(8, 34, 'Predio Agua Blanca', 80, 'Frutales', 'Aguacate', 'azul', '2019-11-11', 'Michoacan de Ocampo', 'LÃ¡zaro CÃ¡rdenas', 'LÃ¡zaro CÃ¡rdenas', 'natural', 'activo', '2019-11-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
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
-- Table structure for table `gastos`
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
-- Table structure for table `gastos_generales`
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
-- Table structure for table `profiles`
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
-- Table structure for table `suelo_artificial`
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
-- Dumping data for table `suelo_artificial`
--

INSERT INTO `suelo_artificial` (`id_cultivo`, `id_suelo_artificial`, `sustrato`, `infraestructura`, `riego`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(33, 8, 'De origen naturales', 'Invernaderos de alta tecnologia', 'AutomÃ¡tico', 'eliminado', '2019-11-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suelo_natural`
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
-- Dumping data for table `suelo_natural`
--

INSERT INTO `suelo_natural` (`id_cultivo`, `id_suelo_natural`, `tipo_suelo`, `infraestructura`, `riego`, `ph`, `salinidad`, `conduc_elec`, `materia_organica`, `zinc`, `nitratos`, `fosforo`, `potasio`, `manganeso`, `calcio`, `cobre`, `oxido_azufre`, `boro`, `magnesio`, `oxigeno`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(34, 6, 'Arenosos', 'Macro tuneles', 'Rodado', 4, 2, 3, 62, 55, 38, 26, 60, 60, 26, 17, 73, 65, 21, 17, 'activo', '2019-11-11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
  `token` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tokenExp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`, `token`, `tokenExp`) VALUES
(5, 'Ivan', 'Suarez', 7861134498, 'ivan.suap@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'HYPERION', 'user', 'Hidalgo', 'Michoacan', '2019-11-06', NULL, '', '0000-00-00 00:00:00'),
(6, 'Eduardo', 'Hernandez', 7861125421, 'lalohh68@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'tics', 'user', 'Morelia', 'Michoacan', '2019-11-07', NULL, '', '0000-00-00 00:00:00'),
(7, 'Abraham', 'Ayala Padilla', 7861191310, 'dev.abxy@gmail.com', 'a23cceabef4dec1f5cb71c7a1a3f6073dac756bd', 'ARPAN', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-11-11', '2019-11-11', '50fe2fbf139a9bb14df0f59a85964988', '2019-11-16 17:29:08'),
(8, 'MARICELA', 'ALVAREZ SANCHEZ', 4432454567, 'MALVAREZ@ITSCH.EDU.MX', '1ba06515413d507858e0071c591356d1ec652af9', 'ITSCH', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-11', NULL, '', '0000-00-00 00:00:00'),
(9, 'Lil', 'Pepe', 7861234569, 'lil@agriicola.com', 'a23cceabef4dec1f5cb71c7a1a3f6073dac756bd', 'ARPAN', 'user', 'Morelia', 'Michoacan', '2019-11-11', '2019-11-16', '27939345b942f4517f765a0327dc4933', '2019-11-16 09:25:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD PRIMARY KEY (`id_agroquimico`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indexes for table `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id_corte`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indexes for table `cultivos`
--
ALTER TABLE `cultivos`
  ADD PRIMARY KEY (`id_cultivo`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id_evento`),
  ADD KEY `id_cultivo` (`id_cultivo`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indexes for table `gastos_generales`
--
ALTER TABLE `gastos_generales`
  ADD PRIMARY KEY (`id_gasto_general`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id_profile`),
  ADD KEY `id_u` (`id_u`);

--
-- Indexes for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  ADD PRIMARY KEY (`id_suelo_artificial`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indexes for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  ADD PRIMARY KEY (`id_suelo_natural`),
  ADD KEY `id_cultivo` (`id_cultivo`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agroquimicos`
--
ALTER TABLE `agroquimicos`
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gastos_generales`
--
ALTER TABLE `gastos_generales`
  MODIFY `id_gasto_general` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo_artificial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo_natural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD CONSTRAINT `agroquimicos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `corte`
--
ALTER TABLE `corte`
  ADD CONSTRAINT `corte_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cultivos`
--
ALTER TABLE `cultivos`
  ADD CONSTRAINT `cultivos_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `eventos`
--
ALTER TABLE `eventos`
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `eventos_ibfk_2` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gastos_generales`
--
ALTER TABLE `gastos_generales`
  ADD CONSTRAINT `gastos_generales_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_ibfk_1` FOREIGN KEY (`id_u`) REFERENCES `users` (`id_u`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  ADD CONSTRAINT `suelo_artifical_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  ADD CONSTRAINT `suelo_natural_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 25, 2019 at 03:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

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
  `aplicacion` varchar(45) CHARACTER SET latin1 NOT NULL,
  `nombre_comercial` varchar(45) CHARACTER SET latin1 NOT NULL,
  `precio` int(11) NOT NULL,
  `moneda` varchar(45) CHARACTER SET latin1 NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `dosis` int(11) NOT NULL,
  `tiempo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `tipo_causa` varchar(45) CHARACTER SET latin1 NOT NULL,
  `frecuencia` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `existencia` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cultivos`
--

CREATE TABLE `cultivos` (
  `id_u` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `nombre_predio` varchar(45) CHARACTER SET latin1 NOT NULL,
  `hectareas` double NOT NULL,
  `tipo_especie` varchar(45) CHARACTER SET latin1 NOT NULL,
  `subespecie` varchar(45) CHARACTER SET latin1 NOT NULL,
  `variedad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_inicio` date NOT NULL,
  `estado` varchar(45) CHARACTER SET latin1 NOT NULL,
  `municipio` varchar(45) CHARACTER SET latin1 NOT NULL,
  `localidad` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `cultivos`
--

INSERT INTO `cultivos` (`id_u`, `id_cultivo`, `nombre_predio`, `hectareas`, `tipo_especie`, `subespecie`, `variedad`, `fecha_inicio`, `estado`, `municipio`, `localidad`, `fecha_registro`, `fecha_modif`) VALUES
(3, 19, 'Maiz', 4, 'Granos', 'Alcachofa', 'Maiz Blanco', '2019-10-25', 'Michoacan de Ocampo', 'Tlalpujahua', 'Tlalpujahua', '2019-10-25', NULL);

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
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suelo_artificial`
--

CREATE TABLE `suelo_artificial` (
  `id_cultivo` int(11) NOT NULL,
  `id_suelo_artificial` int(11) NOT NULL,
  `sustrato` varchar(45) CHARACTER SET latin1 NOT NULL,
  `infraestructura` varchar(45) CHARACTER SET latin1 NOT NULL,
  `riego` varchar(45) CHARACTER SET latin1 NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `suelo_natural`
--

CREATE TABLE `suelo_natural` (
  `id_cultivo` int(11) NOT NULL,
  `id_suelo_natural` int(11) NOT NULL,
  `tipo_suelo` varchar(45) CHARACTER SET latin1 NOT NULL,
  `infraestructura` varchar(45) CHARACTER SET latin1 NOT NULL,
  `riego` varchar(45) CHARACTER SET latin1 NOT NULL,
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
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
  `fecha_modif` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`) VALUES
(3, 'Abraham', 'Ayala Padilla', 7861191310, 'tonayan@arpan.com', '8cb2237d0679ca88db6464eac60da96345513964', 'ARPAN', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-10-25', NULL);

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
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_cultivo` (`id_cultivo`);

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
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo_artificial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo_natural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `gastos`
--
ALTER TABLE `gastos`
  ADD CONSTRAINT `gastos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

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

-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 14, 2019 at 05:01 PM
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
-- Database: `id11250301_agriicola`
--

-- --------------------------------------------------------

--
-- Table structure for table `agroquimicos`
--

CREATE TABLE `agroquimicos` (
  `id_agroquimico` int(11) NOT NULL,
  `id_cultivo` int(11) NOT NULL,
  `origen` varchar(45) NOT NULL,
  `nombre_comercial` varchar(45) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `frecuencia` varchar(45) NOT NULL,
  `periodo_inicio` date NOT NULL,
  `periodo_fin` date NOT NULL,
  `precio` double NOT NULL,
  `moneda` varchar(45) NOT NULL,
  `dosis` int(11) NOT NULL,
  `tiempo` varchar(45) NOT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `existencia` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `fecha_registro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `corte`
--

CREATE TABLE `corte` (
  `id_corte` int(11) NOT NULL,
  `cliente` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `peso` double NOT NULL,
  `unidad` varchar(45) NOT NULL,
  `mercado` varchar(45) NOT NULL,
  `calidad` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `moneda` varchar(45) NOT NULL,
  `id cultivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cultivos`
--

CREATE TABLE `cultivos` (
  `id_cultivo` int(11) NOT NULL,
  `nombre_predio` varchar(45) NOT NULL,
  `tipo_especie` varchar(45) NOT NULL,
  `variedad` varchar(45) NOT NULL,
  `hectareas` double NOT NULL,
  `subespecie` varchar(45) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `detalles` text NOT NULL,
  `id_u` int(11) NOT NULL,
  `id_suelo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gastos`
--

CREATE TABLE `gastos` (
  `id_gasto` int(11) NOT NULL,
  `concepto` varchar(45) NOT NULL,
  `frecuencia` varchar(45) NOT NULL,
  `precio` double NOT NULL,
  `moneda` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `id_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suelo_artificial`
--

CREATE TABLE `suelo_artificial` (
  `id_suelo` int(11) NOT NULL,
  `sustrato` varchar(45) NOT NULL,
  `riego` varchar(45) NOT NULL,
  `infrestructura` varchar(45) NOT NULL,
  `fecha_suelo` date NOT NULL,
  `id_u` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suelo_artificial`
--

INSERT INTO `suelo_artificial` (`id_suelo`, `sustrato`, `riego`, `infrestructura`, `fecha_suelo`, `id_u`) VALUES
(1, 'Lana', 'Gota', 'Invernadero', '2019-10-14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `suelo_natural`
--

CREATE TABLE `suelo_natural` (
  `id_suelo` int(11) NOT NULL,
  `tipo_suelo` varchar(45) NOT NULL,
  `salinidad` int(11) NOT NULL,
  `riego` varchar(45) NOT NULL,
  `infraestructura` varchar(45) NOT NULL,
  `ph` int(11) NOT NULL,
  `conductividad_elec` int(11) NOT NULL,
  `id_u` int(11) NOT NULL,
  `materia_organica` int(11) NOT NULL,
  `nitratos` int(11) NOT NULL,
  `potasio` int(11) NOT NULL,
  `calcio` int(11) NOT NULL,
  `oxido_de_azufre` int(11) NOT NULL,
  `magnesio` int(11) NOT NULL,
  `zinc` int(11) NOT NULL,
  `fosforo` int(11) NOT NULL,
  `manganeso` int(11) NOT NULL,
  `cobre` int(11) NOT NULL,
  `boro` int(11) NOT NULL,
  `oxigeno` int(11) NOT NULL,
  `fecha_suelo` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `suelo_natural`
--

INSERT INTO `suelo_natural` (`id_suelo`, `tipo_suelo`, `salinidad`, `riego`, `infraestructura`, `ph`, `conductividad_elec`, `id_u`, `materia_organica`, `nitratos`, `potasio`, `calcio`, `oxido_de_azufre`, `magnesio`, `zinc`, `fosforo`, `manganeso`, `cobre`, `boro`, `oxigeno`, `fecha_suelo`) VALUES
(1, 'Arenoso', 14, 'Gota', 'Invernadero', 3, 4, 1, 45, 65, 37, 50, 83, 62, 62, 43, 70, 63, 70, 59, '2019-10-14'),
(2, 'Arenoso', 14, 'Gota', 'Invernadero', 3, 4, 1, 45, 65, 37, 50, 83, 62, 62, 43, 70, 63, 70, 59, '2019-10-14'),
(3, 'Arenoso', 14, 'Gota', 'Invernadero', 3, 4, 1, 45, 65, 37, 50, 83, 62, 62, 43, 70, 63, 70, 59, '2019-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `ubicacion`
--

CREATE TABLE `ubicacion` (
  `latitud` varchar(255) NOT NULL,
  `longitud` varchar(255) NOT NULL,
  `id_cultivo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `nombre` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `apellido` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `acceso` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `empresa` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `fecha_registro`) VALUES
(8, 'Juanito', 'Alcachofa Perez', 7861191310, 'juan@agriicola.com', '8cb2237d0679ca88db6464eac60da96345513964', 'ITSCH', '2019-10-13 23:24:28'),
(9, 'Ivan', 'Suarez', 7861134498, 'ivan@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'HYPERION', '2019-10-14 14:40:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agroquimicos`
--
ALTER TABLE `agroquimicos`
  ADD PRIMARY KEY (`id_agroquimico`);

--
-- Indexes for table `corte`
--
ALTER TABLE `corte`
  ADD PRIMARY KEY (`id_corte`);

--
-- Indexes for table `cultivos`
--
ALTER TABLE `cultivos`
  ADD PRIMARY KEY (`id_cultivo`);

--
-- Indexes for table `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id_gasto`);

--
-- Indexes for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  ADD PRIMARY KEY (`id_suelo`);

--
-- Indexes for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  ADD PRIMARY KEY (`id_suelo`);

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
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

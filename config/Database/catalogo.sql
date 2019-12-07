-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 08, 2019 at 12:00 AM
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
-- Database: `catalogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `enfermedades`
--

CREATE TABLE `enfermedades` (
  `id_enfermedad` int(11) NOT NULL,
  `nom_enfermedad` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enfermedades`
--

INSERT INTO `enfermedades` (`id_enfermedad`, `nom_enfermedad`) VALUES
(32, 'Alternarosis'),
(31, 'Antracnosis'),
(2, 'Bacteria'),
(29, 'Bacteria podredumbre humeda'),
(37, 'Carbon de la cebola'),
(36, 'Cercosporosis'),
(7, 'Chancro bacteriano'),
(34, 'Esclerotinosis'),
(4, 'Grasa de la judia'),
(35, 'Hernia de la col'),
(1, 'Hongo'),
(25, 'Hongo de Alternaria'),
(26, 'Hongo de Botritis'),
(27, 'Hongo de Fusarosarosis'),
(22, 'Hongo de Mildiu'),
(21, 'Hongo de Oidio'),
(24, 'Hongo de Roya'),
(28, 'Hongo de Traqueomicosis'),
(23, 'Hongo negrilla'),
(6, 'Mancha angular de las Cucurbitáceas'),
(5, 'Mancha negra de tomate '),
(10, 'Marchitamiento bacteriano'),
(12, 'Mosaico de la sandia'),
(9, 'Podredumbre blanda '),
(8, 'Podredumbre parda de la patata'),
(11, 'Podredumbres blandas'),
(33, 'Vericilum'),
(38, 'Viruela del fresal'),
(3, 'Virus'),
(30, 'virus del bronceado'),
(13, 'Virus del bronceado del tomate'),
(19, 'Virus del cribado del melón'),
(18, 'Virus del mosaico amarillo del calabacín'),
(20, 'Virus del mosaico de la calabaza'),
(16, 'Virus del mosaico del tomate'),
(17, 'Virus del moteado suave del pimiento'),
(15, 'Virus del rizado amarillo del tomate'),
(14, 'Virus y de la patata');

-- --------------------------------------------------------

--
-- Table structure for table `especie`
--

CREATE TABLE `especie` (
  `id_especie` int(11) NOT NULL,
  `nom_especie` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especie`
--

INSERT INTO `especie` (`id_especie`, `nom_especie`) VALUES
(3, 'Frutales'),
(1, 'Granos'),
(2, 'Hortalizas');

-- --------------------------------------------------------

--
-- Table structure for table `infraestructura`
--

CREATE TABLE `infraestructura` (
  `id_infraestructura` int(11) NOT NULL,
  `nom_infraestructura` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infraestructura`
--

INSERT INTO `infraestructura` (`id_infraestructura`, `nom_infraestructura`) VALUES
(1, 'Invernadero'),
(7, 'Invernaderos de alta tecnologia'),
(4, 'Invernaderos para plantulas'),
(6, 'Macro tuneles'),
(3, 'Macrotunel'),
(2, 'Malla de sombra'),
(5, 'Malla sombra');

-- --------------------------------------------------------

--
-- Table structure for table `plagas`
--

CREATE TABLE `plagas` (
  `id_plaga` int(11) NOT NULL,
  `nom_plaga` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plagas`
--

INSERT INTO `plagas` (`id_plaga`, `nom_plaga`) VALUES
(5, 'Araña roja'),
(2, 'Gusanito'),
(4, 'Mosca blanca'),
(1, 'Mosquita'),
(7, 'Nematodos'),
(3, 'Pulgon'),
(6, 'Trips');

-- --------------------------------------------------------

--
-- Table structure for table `riego`
--

CREATE TABLE `riego` (
  `id_riego` int(11) NOT NULL,
  `nom_riego` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `riego`
--

INSERT INTO `riego` (`id_riego`, `nom_riego`) VALUES
(3, 'Aspersiòn'),
(6, 'Automático'),
(8, 'Fertirrigación XILEMA'),
(2, 'Goteo'),
(5, 'Hidropónico'),
(4, 'Microaspersiòn'),
(7, 'Nebulización'),
(1, 'Rodado');

-- --------------------------------------------------------

--
-- Table structure for table `subespecie`
--

CREATE TABLE `subespecie` (
  `id_subespecie` int(11) NOT NULL,
  `nom_subespecie` varchar(45) NOT NULL,
  `id_especie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subespecie`
--

INSERT INTO `subespecie` (`id_subespecie`, `nom_subespecie`, `id_especie`) VALUES
(1, 'Maiz', 1),
(2, 'Trigo', 1),
(3, 'Cebada', 1),
(4, 'Tef', 1),
(5, 'Soya', 1),
(6, 'Sorgo', 1),
(7, 'Arroz', 1),
(8, 'Quinua', 1),
(9, 'Mijo', 1),
(10, 'Cacahuate', 1),
(11, 'Judia', 1),
(12, 'Lenteja', 1),
(13, 'Garbanzo', 1),
(14, 'Frijol', 1),
(15, 'Alfalfa', 1),
(16, 'Medicago', 1),
(17, 'Haba', 1),
(18, 'Veza', 1),
(19, 'Acelga', 2),
(20, 'Achicoria', 2),
(21, 'Ajo', 2),
(22, 'Alcachofa', 2),
(23, 'Apio', 2),
(24, 'Berenjena', 2),
(25, 'Berro', 2),
(26, 'Boniato', 2),
(27, 'Brécol', 2),
(28, 'Brócoli', 2),
(29, 'Calabacin ', 2),
(30, 'Calabaza', 2),
(31, 'Cardo', 2),
(32, 'Cebolla', 2),
(33, 'Cebollota', 2),
(34, 'Col', 2),
(35, 'Col de Bruselas', 2),
(36, 'Coloflor', 2),
(37, 'Colinabo', 2),
(38, 'Champiñon', 2),
(39, 'Chirivia', 2),
(40, 'Envidia', 2),
(41, 'Escarola', 2),
(42, 'Esparrago', 2),
(43, 'Espinaca', 2),
(44, 'Guindilla', 2),
(45, 'Guisante', 2),
(46, 'Hinojo', 2),
(47, 'Judia verde', 2),
(48, 'Lechuga', 2),
(49, 'Lombarda', 2),
(50, 'Mandioca', 2),
(51, 'Nabo', 2),
(52, 'Patata', 2),
(53, 'Pepino', 2),
(54, 'Perejil', 2),
(55, 'Pimiento', 2),
(56, 'Puerro', 2),
(57, 'Rabano', 2),
(58, 'Rabanitoremalacha', 2),
(59, 'Repollo', 2),
(60, 'Seta', 2),
(61, 'Zanahoria', 2),
(67, 'Aguacate', 3),
(68, 'Naranja', 3),
(69, 'Limon', 3),
(70, 'Lima', 3),
(71, 'Nispero', 3),
(72, 'Jitomate', 3),
(73, 'Tomate', 3),
(74, 'Fresa', 3),
(75, 'Zarzamora', 3),
(76, 'Mora azul', 3),
(77, 'Guayabo', 3),
(78, 'Peral', 3),
(79, 'Manzana', 3),
(80, 'Toronja', 3),
(81, 'Platano', 3),
(82, 'Mango', 3),
(83, 'Tamarindo', 3),
(84, 'Arandano', 3),
(85, 'Granada', 3),
(86, 'Papaya', 3),
(87, 'Yaca', 3),
(88, 'Lichi', 3),
(89, 'Cerezo', 3),
(90, 'Nectarina', 3),
(91, 'Anacardo', 3),
(92, 'Anon', 3),
(93, 'Rambutan', 3),
(94, 'Guindo', 3),
(95, 'Higuera', 3),
(96, 'Fruta de estrella', 3),
(97, 'Chico zapote', 3),
(98, 'Nogal', 3),
(99, 'Albaricoque', 3),
(100, 'Pecan', 3),
(101, 'Castaño', 3);

-- --------------------------------------------------------

--
-- Table structure for table `sustrato_suelo`
--

CREATE TABLE `sustrato_suelo` (
  `id_sustrato_suelo` int(11) NOT NULL,
  `nombre_sustrato` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sustrato_suelo`
--

INSERT INTO `sustrato_suelo` (`id_sustrato_suelo`, `nombre_sustrato`) VALUES
(1, 'Arena granítica o silícea '),
(2, 'Grava'),
(3, 'Roca volcánica'),
(4, 'Perlita'),
(5, 'Arcilla expandida'),
(6, 'Lana de roca'),
(7, 'Turbas rubias y negras'),
(8, 'Corteza de pino '),
(9, 'Vermiculita'),
(10, 'Materiales igno-celulosicos'),
(11, 'De origen naturales'),
(12, 'De síntesis '),
(13, 'Transformados o tratados '),
(14, 'Residuos y subproductos industriales '),
(15, 'De origen natural');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_suelo`
--

CREATE TABLE `tipo_suelo` (
  `id_tipo_suelo` int(11) NOT NULL,
  `nom_tipo_suelo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipo_suelo`
--

INSERT INTO `tipo_suelo` (`id_tipo_suelo`, `nom_tipo_suelo`) VALUES
(4, 'Arcillosos'),
(8, 'Arenosos'),
(1, 'Calizos'),
(6, 'De turba'),
(3, 'Humiferos o de tierra negra'),
(2, 'Limosos'),
(5, 'Pedregosos'),
(7, 'Salinos');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enfermedades`
--
ALTER TABLE `enfermedades`
  ADD PRIMARY KEY (`id_enfermedad`),
  ADD UNIQUE KEY `nom_enfermedad` (`nom_enfermedad`);

--
-- Indexes for table `especie`
--
ALTER TABLE `especie`
  ADD PRIMARY KEY (`id_especie`),
  ADD UNIQUE KEY `nom_especie` (`nom_especie`);

--
-- Indexes for table `infraestructura`
--
ALTER TABLE `infraestructura`
  ADD PRIMARY KEY (`id_infraestructura`),
  ADD UNIQUE KEY `nom_infraestructura` (`nom_infraestructura`);

--
-- Indexes for table `plagas`
--
ALTER TABLE `plagas`
  ADD PRIMARY KEY (`id_plaga`),
  ADD UNIQUE KEY `nom_plaga` (`nom_plaga`);

--
-- Indexes for table `riego`
--
ALTER TABLE `riego`
  ADD PRIMARY KEY (`id_riego`),
  ADD UNIQUE KEY `nom_riego` (`nom_riego`);

--
-- Indexes for table `subespecie`
--
ALTER TABLE `subespecie`
  ADD PRIMARY KEY (`id_subespecie`),
  ADD UNIQUE KEY `nom_subespecie` (`nom_subespecie`);

--
-- Indexes for table `sustrato_suelo`
--
ALTER TABLE `sustrato_suelo`
  ADD PRIMARY KEY (`id_sustrato_suelo`);

--
-- Indexes for table `tipo_suelo`
--
ALTER TABLE `tipo_suelo`
  ADD PRIMARY KEY (`id_tipo_suelo`),
  ADD UNIQUE KEY `nom_tipo_suelo` (`nom_tipo_suelo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

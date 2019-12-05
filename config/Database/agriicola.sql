-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 06, 2019 at 12:15 AM
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
-- Dumping data for table `agroquimicos`
--

INSERT INTO `agroquimicos` (`id_cultivo`, `id_agroquimico`, `aplicacion`, `nombre_comercial`, `precio`, `moneda`, `cantidad`, `unidad`, `dosis`, `unidad_dosis`, `tipo_causa`, `frecuencia`, `fecha_inicio`, `fecha_fin`, `existencia`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(33, 14, 'Nutriente', 'Abono de crecimiento', 4, 'pesos', 7, 'ml', 6, 'semana', 'micro', 'Diario', '2019-11-11', '2019-11-20', 6, 'eliminado', '2019-11-11', NULL),
(34, 15, 'Plaga', 'lc3', 800, 'pesos', 70, 'ml', 2, 'dias', 'AraÃ±a roja', 'Cada 2 dias', '2019-11-20', '2019-11-29', 3, 'activo', '2019-11-11', NULL),
(35, 16, 'Nutriente', 'Abono', 5, 'pesos', 2, 'ml', 3, 'semana', '', 'Diario', '2019-11-16', '2019-11-17', 4, 'eliminado', '2019-11-16', '2019-11-20'),
(36, 17, 'Nutriente', 'Nombresito de nutriente', 15, 'pesos', 10, 'ml', 8, 'semana', 'micro', 'Diario', '2019-11-16', '2019-11-19', 4, 'eliminado', '2019-11-16', NULL),
(37, 18, 'Nutriente', 'Abono', 5, 'pesos', 7, 'Kg', 4, 'semana', 'micro', 'Diario', '2019-11-30', '2019-11-28', 4, 'eliminado', '2019-11-18', NULL),
(37, 19, 'Nutriente', '', 500, '', 10, 'ml', 10, '', 'micro', 'Diario', '2019-11-30', '2019-11-19', 2, 'eliminado', '2019-11-18', '2019-11-22'),
(37, 20, 'Nutriente', '', 9, 'pesos', 9, 'ml', 4, '', 'macro', 'Diario', '2019-11-30', '2019-11-19', 5, 'eliminado', '2019-11-18', '2019-11-22'),
(38, 21, 'Nutriente', 'Abono', 700, 'pesos', 20, 'Kg', 1, 'semana', 'macro', 'Diario', '2019-11-19', '2019-11-20', 8, 'eliminado', '2019-11-19', NULL),
(39, 22, 'Nutriente', 'Abono', 3, 'pesos', 2, 'l', 3, 'dias', 'macro', 'Cada 13 dias', '2019-11-22', '2019-11-29', 6, 'activo', '2019-11-19', NULL),
(37, 23, 'Plaga', 'Tengo piojos :c', 3, 'pesos', 4, 'ml', 2, 'semana', '', 'Diario', '2019-11-30', '2019-11-21', 2, 'eliminado', '2019-11-20', '2019-11-20'),
(37, 24, '', 'Toy enfermo :c', 3, 'pesos', 2, 'ml', 2, 'semana', '', 'Diario', '2019-11-30', '2019-11-22', 2, 'eliminado', '2019-11-20', '2019-11-20'),
(35, 25, 'Enfermedad', 'Terminator', 5, 'pesos', 4, 'ml', 3, 'semana', '', 'Diario', '2019-11-20', '2019-11-21', 4, 'eliminado', '2019-11-20', '2019-11-20'),
(36, 26, 'Nutriente', 'Ab', 6, 'pesos', 5, 'ml', 3, 'semana', 'micro', 'Diario', '2019-11-20', '2019-11-21', 3, 'eliminado', '2019-11-20', '2019-11-20'),
(36, 27, 'Enfermedad', 'Terminator 2', 5, 'pesos', 4, 'ml', 3, 'semana', 'Cercosporosis', 'Diario', '2019-11-20', '2019-11-21', 3, 'eliminado', '2019-11-20', '2019-11-20'),
(36, 28, 'Plaga', 'Antipiojos', 4, 'pesos', 1, 'l', 3, 'semana', 'Mosquita', 'Diario', '2019-11-20', '2019-11-22', 4, 'eliminado', '2019-11-20', '2019-11-20'),
(37, 29, 'Nutriente', '', 12, 'pesos', 6, '', 10, 'g', 'micro', 'Diario', '2019-11-30', '2019-11-22', 5, 'eliminado', '2019-11-21', '2019-11-22'),
(40, 30, 'Nutriente', 'Abono', 5, 'dolar', 3, 'l', 2, 'ml', 'macro', 'Diario', '2019-11-21', '2019-11-22', 3, 'eliminado', '2019-11-21', '2019-11-21'),
(41, 31, 'Plaga', 'Foley', 250, 'pesos', 1, 'l', 200, 'ml', 'PulgÃ³n', 'Cada 3 dias', '2019-11-28', '2019-12-27', 2, 'activo', '2019-11-21', NULL),
(41, 32, 'Nutriente', '', 250, 'pesos', 1, '', 200, 'ml', 'micro', 'Diario', '2019-11-21', '2019-11-22', 2, 'eliminado', '2019-11-21', '2019-11-21'),
(37, 33, 'Enfermedad', 'Foley', 100, 'pesos', 10, '', 12, 'ml', 'Hernia de la col', 'Cada 10 dias', '2019-11-30', '2019-12-27', 12, 'eliminado', '2019-11-22', NULL),
(37, 34, 'Plaga', 'Insecticida', 200, 'pesos', 10, '', 100, 'ml', 'PulgÃ³n', 'Cada 2 dias', '2019-11-30', '2019-11-24', 10, 'eliminado', '2019-11-24', NULL),
(37, 35, 'Plaga', 'Insecticida', 100, 'pesos', 5, 'l', 100, 'ml', 'AraÃ±a roja', 'Cada 5 dias', '2019-11-30', '2019-12-31', 1, 'eliminado', '2019-11-24', NULL),
(37, 36, 'Nutriente', 'Abono', 450, 'pesos', 20, 'kg', 100, 'g', 'micro', 'Cada 1 dias', '2019-11-30', '2019-11-23', 2, 'eliminado', '2019-11-24', NULL),
(37, 37, 'Nutriente', 'Abono', 200, 'pesos', 10, 'Kg', 200, 'g', 'micro', 'Cada 2 dias', '2019-11-30', '2019-12-31', 2, 'eliminado', '2019-11-24', NULL),
(40, 38, 'Enfermedad', 'Fuley', 500, 'pesos', 20, 'l', 10, 'ml', 'Grasa de la judia', 'Cada 2 dias', '2019-11-15', '2019-11-30', 2, 'eliminado', '2019-11-24', NULL),
(40, 39, 'Plaga', 'Insecticida', 100, 'pesos', 1, 'l', 20, 'ml', 'AraÃ±a roja', 'Cada 1 dias', '2019-11-24', '2019-11-29', 1, 'eliminado', '2019-11-24', NULL),
(42, 40, 'Nutriente', 'Abono', 200, 'pesos', 10, 'l', 100, 'ml', 'micro', 'Diario', '2019-11-27', '2019-11-28', 12, 'activo', '2019-11-26', NULL),
(42, 41, 'Enfermedad', 'Enfermito', 500, 'pesos', 10, 'Kg', 10, 'g', 'Esclerotinosis', 'Cada 1 dias', '2019-11-26', '2019-11-28', 4, 'eliminado', '2019-11-26', NULL),
(43, 42, 'Nutriente', 'Crecimax', 300, 'pesos', 20, 'Kg', 100, 'g', 'macro', 'Cada 3 dias', '2019-11-26', '2019-12-20', 1, 'eliminado', '2019-11-26', NULL),
(44, 43, 'Nutriente', 'El Abono De Siempre', 100, 'pesos', 10, 'Kg', 100, 'g', 'micro', 'Diario', '2019-11-27', '2019-12-07', 1, 'activo', '2019-11-27', NULL),
(42, 44, 'Nutriente', 'Hola', 5, 'pesos', 3, 'Kg', 3, 'g', 'micro', 'Diario', '2019-11-27', '2019-11-29', 2, 'activo', '2019-11-27', '2019-11-28'),
(42, 45, 'Enfermedad', 'Enfermito', 200, 'pesos', 7, 'l', 40, 'ml', 'Grasa de la judia', 'Cada 1 dias', '2019-11-27', '2019-11-15', 1, 'activo', '2019-11-27', NULL),
(42, 46, 'Plaga', 'Raid', 100, 'pesos', 2, 'l', 10, 'ml', 'Larva', 'Cada 1 dias', '2019-11-18', '2019-11-20', 1, 'eliminado', '2019-11-27', NULL),
(42, 47, 'Plaga', 'XD', 3, 'pesos', 5, 'ml', 4, 'ml', 'AraÃ±a roja', 'Cada 1 dias', '2019-11-18', '2019-11-20', 3, 'eliminado', '2019-11-27', NULL),
(42, 48, 'Plaga', 'XD', 3, 'pesos', 4, 'ml', 3, 'ml', 'AraÃ±a roja', 'Cada 1 dias', '2019-11-27', '2019-11-20', 3, 'activo', '2019-11-27', NULL),
(42, 49, 'Nutriente', 'Abono Pro', 500, 'pesos', 20, 'Kg', 200, 'g', 'micro', 'Cada 4 dias', '2019-11-27', '2019-11-16', 2, 'activo', '2019-11-27', NULL),
(45, 50, 'Nutriente', 'Abono', 300, 'pesos', 20, 'Kg', 200, 'g', 'micro', 'Diario', '2019-11-19', '2019-11-29', 1, 'activo', '2019-11-27', NULL),
(48, 51, 'Enfermedad', 'Loquesea', 100, 'pesos', 10, 'l', 200, 'ml', 'Esclerotinosis', 'Cada 2 dias', '2019-11-28', '2019-11-30', 2, 'eliminado', '2019-11-28', NULL),
(52, 52, 'Plaga', 'Dfsss', 4, 'pesos', 3, 'ml', 2, 'ml', 'AraÃ±a roja', 'Diario', '2019-11-28', '2019-11-30', 1, 'eliminado', '2019-11-28', NULL),
(43, 53, 'Enfermedad', 'XD', 5, 'pesos', 4, 'ml', 3, 'ml', 'Alternariosis', 'Diario', '2019-11-29', '2019-11-30', 1, 'eliminado', '2019-11-29', '2019-11-29'),
(43, 54, 'Plaga', 'Insecticidad Potente', 500, 'pesos', 10, 'Kg', 100, 'g', 'Larva', 'Cada 3 dias', '2019-11-29', '2019-12-19', 1, 'eliminado', '2019-11-30', NULL),
(53, 55, 'Nutriente', 'Abono Para Crecimiento', 299, 'pesos', 20, 'Kg', 1, 'Kg', 'macro', 'Cada 2 dias', '2019-11-30', '2020-01-09', 1, 'activo', '2019-11-30', NULL),
(53, 56, 'Nutriente', 'Abono', 3, 'pesos', 4, 'Kg', 4, 'g', 'micro', 'Cada 1 dias', '2019-12-02', '2019-12-05', 3, 'eliminado', '2019-12-02', NULL),
(53, 57, 'Nutriente', 'Abono', 18, 'pesos', 13, 'ml', 10, 'ml', 'micro', 'Cada 8 dias', '2019-12-02', '2019-12-06', 1, 'eliminado', '2019-12-02', NULL),
(53, 58, 'Nutriente', 'Ab', 13, 'pesos', 8, 'ml', 8, 'ml', 'micro', 'Diario', '2019-12-02', '2019-12-05', 2, 'activo', '2019-12-02', '2019-12-03'),
(53, 59, 'Enfermedad', 'XD', 4, 'pesos', 4, 'ml', 3, 'ml', 'Alternariosis', 'Cada 1 dias', '2019-12-11', '2019-12-13', 2, 'activo', '2019-12-02', NULL),
(53, 60, 'Plaga', 'Insecticida', 50, 'pesos', 7, 'ml', 7, 'ml', 'AraÃ±a roja', 'Diario', '2019-12-11', '2019-12-13', 4, 'activo', '2019-12-02', '2019-12-03'),
(53, 61, 'Enfermedad', 'Curatodo', 100, 'pesos', 8, 'ml', 7, 'ml', 'Alternariosis', 'Diario', '2019-12-04', '2019-12-14', 2, 'activo', '2019-12-03', '2019-12-03');

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

--
-- Dumping data for table `corte`
--

INSERT INTO `corte` (`id_cultivo`, `id_corte`, `cliente`, `fecha_corte`, `peso`, `unidad`, `mercado`, `calidad`, `precio`, `moneda`, `estatus`, `fecha_registro`) VALUES
(37, 1, 'Ivan', '2019-11-20', 700, 'kg', 'Nacional', 'primera', 10000, 'pesos', 'activo', '2019-11-20'),
(37, 2, 'XD', '2019-11-20', 4, 'g', 'Nacional', 'primera', 6, 'pesos', 'activo', '2019-11-20'),
(53, 3, 'Ivan Suarez', '2019-12-03', 3, 'ton', 'Nacional', 'primera', 700000, 'pesos', 'activo', '2019-12-03'),
(53, 4, 'Jessica Villegas', '2019-12-20', 2, 'ton', 'Internacional', 'segunda', 50000, 'dÃ³lares', 'activo', '2019-12-03');

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
(8, 34, 'Predio Agua Blanca', 80, 'Frutales', 'Aguacate', 'azul', '2019-11-11', 'Michoacan de Ocampo', 'LÃ¡zaro CÃ¡rdenas', 'LÃ¡zaro CÃ¡rdenas', 'natural', 'activo', '2019-11-11', NULL),
(10, 35, 'La Joya', 12, 'Granos', 'Arroz', 'Grande', '2019-11-16', 'MichoacÃ¡n de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-16', '2019-11-18'),
(10, 36, 'Segundo Predio', 10, 'Frutales', 'Aguacate', 'Haz', '2019-11-16', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-16', '2019-11-18'),
(10, 37, 'Jujodesu', 100, 'Frutales', 'Acelga', 'Sin Variedad', '2019-11-30', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-18', NULL),
(11, 38, 'Predio 1', 6, 'Granos', 'Maiz', 'Maiz Blanco', '2019-11-19', 'Michoacan de Ocampo', 'Hidalgo', 'Ciudad Hidalgo', 'natural', 'activo', '2019-11-19', NULL),
(11, 39, 'Tomates Locos', 1, 'Hortalizas', 'Jitomate', 'Rojo', '2019-11-20', 'Michoacan de Ocampo', 'Hidalgo', 'Ciudad Hidalgo', 'artificial', 'activo', '2019-11-19', NULL),
(10, 40, 'San Geronimo', 19, 'Frutales', 'Aguacate', 'Szsss', '2019-11-21', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-21', '2019-11-22'),
(12, 41, 'Predio Uno', 3, 'Hortalizas', 'Calabaza', 'Suchini', '2019-11-07', 'Michoacan de Ocampo', 'Tuxpan', 'Tuxpan', 'natural', 'activo', '2019-11-21', NULL),
(13, 42, 'San Pablo', 10, 'Granos', 'MaÃ­z', 'Negro', '2019-11-27', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-26', NULL),
(10, 43, 'Benito Juarez', 12, 'Granos', 'Alfalfa', 'Sxd', '2019-11-26', 'Tlaxcala', 'Huixtla', 'Huixtla', 'artificial', 'activo', '2019-11-26', NULL),
(13, 44, 'Julito', 1, 'Hortalizas', 'Acelga', 'Acelga Chida', '2019-11-27', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-27', NULL),
(13, 45, 'El Predion', 10, 'Frutales', 'Aguacate', 'Haz', '2019-11-27', 'Michoacan de Ocampo', 'Uruapan', 'Uruapan', 'natural', 'activo', '2019-11-27', NULL),
(10, 46, 'Lailto', 10, '', '', 'Sin Espina', '2019-11-28', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-28', NULL),
(10, 47, 'Lalito', 10, '2', '150', 'Espinudo', '2019-11-28', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-28', NULL),
(10, 48, 'Lalito2', 10, 'Granos', 'Maï¿½z', 'Negro', '2019-11-28', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'artificial', 'activo', '2019-11-28', NULL),
(10, 49, 'Predio 12', 4, 'Frutales', 'Almendro', 'Xd', '2019-11-28', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-28', NULL),
(10, 50, 'Xd', 1, 'Granos', 'MaÃ­z', 'Xd', '2019-11-28', 'Michoacan de Ocampo', 'Hid', 'sdsd', 'natural', 'activo', '2019-11-28', NULL),
(10, 51, 'Xd', 12, 'Granos', 'Ma?z', 'Xd', '2019-11-28', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-28', NULL),
(10, 52, 'Sdfsddd', 1, 'Granos', 'MaÃ­z', 'Xd', '2019-11-28', 'Campeche', 'PabellÃ³n de Arteaga', 'PabellÃ³n de Arteaga', 'natural', 'activo', '2019-11-28', NULL),
(10, 53, 'Predio Para Desarrollo', 10, 'Granos', 'MaÃ­z', 'Blanco', '2019-11-29', 'Michoacan de Ocampo', 'Hidalgo', 'Hidalgo', 'natural', 'activo', '2019-11-30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `eventos`
--

CREATE TABLE `eventos` (
  `id_cultivo` int(11) NOT NULL,
  `id_evento` int(11) NOT NULL,
  `titulo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `inicio` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `color` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `text_color` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL,
  `icon` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `eventos`
--

INSERT INTO `eventos` (`id_cultivo`, `id_evento`, `titulo`, `descripcion`, `inicio`, `fin`, `color`, `text_color`, `fecha_registro`, `fecha_modif`, `icon`) VALUES
(44, 45, 'Evento de Juli', 'Evento bien chido', '2019-11-04 00:00:00', '2019-11-06 01:00:00', '#303f9f', '#FFFFFF', '2019-11-27', NULL, NULL),
(45, 69, 'Abono : Micronutriente', '200 g diario', '2019-11-19 00:00:00', '2019-11-29 00:00:00', '#6D4C41', '#fff', '2019-11-27', NULL, NULL),
(44, 72, 'Evento Rosa', 'XD', '2019-11-12 00:00:00', '2019-11-14 00:00:00', '#ff0080', '#FFFFFF', '2019-11-28', '2019-11-28', NULL),
(44, 73, 'XD', 'XDSSS', '2019-11-15 00:00:00', '2019-11-16 00:00:00', '#303f9f', '#FFFFFF', '2019-11-28', NULL, NULL),
(42, 83, 'Evento', 'XD', '2019-11-05 00:00:00', '2019-11-07 00:00:00', '#303f9f', '#FFFFFF', '2019-11-28', '2019-11-28', NULL),
(53, 102, 'Abono de creci : Micronutriente', '8 ml cada 1 dias', '2019-12-19 00:00:00', '2019-12-22 00:00:00', '#6d4c41', '#FFFFFF', '2019-12-02', '2019-12-03', 'fa-seedling'),
(53, 103, 'Icono de prueba', 'XD', '2019-12-16 00:00:00', '2019-12-18 00:00:00', '#400080', '#FFFFFF', '2019-12-02', '2019-12-02', 'fa-calendar-day'),
(53, 104, 'XD : Alternariosi', '3 ml cada 1 dias', '2019-12-10 00:00:00', '2019-12-12 00:00:00', '#ed9105', '#FFFFFF', '2019-12-02', '2019-12-03', 'fa-prescription-bottle-alt'),
(53, 105, 'Insecticida : AraÃ±a rojas', '7 ml cada 1 dias', '2019-12-11 00:00:00', '2019-12-15 00:00:00', '#e53935', '#FFFFFF', '2019-12-02', '2019-12-03', 'fa-bug'),
(53, 110, 'XD', 'XD', '2019-12-24 00:00:00', '2019-12-29 00:00:00', '#303f9f', '#FFFFFF', '2019-12-02', '2019-12-02', 'fa-calendar-day'),
(53, 111, 'Curatodo : Alternariosis', '7 ml cada 1 dias', '2019-12-04 00:00:00', '2019-12-14 00:00:00', '#F57C00', '#fff', '2019-12-03', NULL, 'prescription-bottle-alt'),
(33, 112, 'Titulo', '', '2019-12-10 00:00:00', '2019-12-10 23:59:00', '#73fdff', '#FFFFFF', '2019-12-05', '2019-12-05', 'fa-calendar-day');

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

--
-- Dumping data for table `gastos`
--

INSERT INTO `gastos` (`id_cultivo`, `id_gasto`, `concepto`, `precio`, `moneda`, `frecuencia`, `fecha_gasto`, `estatus`, `fecha_registro`, `fecha_modif`) VALUES
(37, 1, 'Nurientes', 27, 'Pesos', 'Semanal', '2019-11-21', 'eliminado', '2019-11-20', NULL),
(53, 2, 'Riego', 500, 'Dolares', 'Quincenal', '2019-12-11', 'activo', '2019-12-03', NULL),
(53, 3, 'Renta de predio', 200000, 'Pesos', 'Anual', '2019-12-27', 'activo', '2019-12-03', NULL),
(53, 4, 'Fertilizante', 10000, 'Pesos', 'Mensual', '2019-12-28', 'activo', '2019-12-03', NULL),
(53, 5, 'XD', 1000000, 'Pesos', 'Semanal', '2019-12-31', 'activo', '2019-12-03', NULL),
(53, 6, 'XDC', 500000, 'Pesos', 'Semanal', '2019-12-29', 'activo', '2019-12-03', NULL);

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

--
-- Dumping data for table `gastos_generales`
--

INSERT INTO `gastos_generales` (`id_gasto_general`, `concepto`, `catidad`, `moneda`, `fecha_gasto`, `fecha_registro`, `fecha_modif`, `id_u`) VALUES
(1, 'Nomina', 10000, 'Pesos', '2019-11-21', '2019-11-20', NULL, 10),
(2, 'Nomina 2', 13, 'Euro', '2019-11-21', '2019-11-20', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `help_center`
--

CREATE TABLE `help_center` (
  `id` int(11) NOT NULL,
  `correo` varchar(45) COLLATE utf8_spanish_ci NOT NULL,
  `comentario` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `help_center`
--

INSERT INTO `help_center` (`id`, `correo`, `comentario`, `fecha`) VALUES
(1, 'dev.abxy@gmail.com', 'esta es una prueba de mensaje', '2019-12-04');

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
(33, 8, 'De origen naturales', 'Invernaderos de alta tecnologia', 'AutomÃ¡tico', 'eliminado', '2019-11-11', NULL),
(35, 9, 'Arcilla expandida', 'Invernadero', 'AspersiÃ²n', 'eliminado', '2019-11-16', NULL),
(36, 10, 'Arcilla expandida', 'Macro tuneles', 'NebulizaciÃ³n', 'eliminado', '2019-11-16', '2019-11-18'),
(39, 11, 'Grava', 'Malla de sombra', 'Goteo', 'activo', '2019-11-19', NULL),
(42, 12, 'Grava', 'Sin infraestructura', 'Sin riego', 'activo', '2019-11-26', NULL),
(43, 13, 'Arcilla expandida', 'A cielo abierto', 'AspersiÃ³n', 'eliminado', '2019-11-26', NULL),
(44, 14, 'Arcilla expandida', 'A cielo abierto', 'Rodado', 'activo', '2019-11-27', NULL),
(48, 15, 'Arcilla expandida', 'A cielo abierto', 'AspersiÃ³n', 'eliminado', '2019-11-28', NULL);

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
(34, 6, 'Arenosos', 'Macro tuneles', 'Rodado', 4, 2, 3, 62, 55, 38, 26, 60, 60, 26, 17, 73, 65, 21, 17, 'activo', '2019-11-11', NULL),
(37, 7, 'Arenosos', 'Invernaderos de alta tecnologia', 'AutomÃ¡tico', 12, 4, 6, 40, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'eliminado', '2019-11-18', '2019-11-18'),
(38, 8, 'Arcillosos', 'Invernadero', 'AspersiÃ²n', 14, 4, 3, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'eliminado', '2019-11-19', NULL),
(40, 9, 'Arcilloso limoso', 'Sin infraestructura', 'Sin riego', 7, 5, 6, 43, 4, 74, 6, 39, 4, 39, 9, 80, 50, 50, 11, 'eliminado', '2019-11-21', NULL),
(41, 10, 'Franco limoso', 'Macrotuneles', 'Goteo', 7, 5, 3, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'activo', '2019-11-21', NULL),
(45, 11, 'Arenoso', 'A cielo abierto', 'Sin riego', 9, 3, 4, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'activo', '2019-11-27', NULL),
(52, 12, 'Acolchado', 'A cielo abierto', 'AspersiÃ³n', 11, 3, 3, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 50, 'eliminado', '2019-11-28', NULL),
(53, 13, 'Arcilloso limoso', 'A cielo abierto', 'Rodado', 7, 3, 3, 28, 42, 41, 37, 45, 57, 54, 33, 44, 40, 55, 64, 'activo', '2019-11-30', NULL);

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
  `tipo_usuario` enum('superadmin','admin','user') CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` char(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_registro` date NOT NULL,
  `fecha_modif` date DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tokenExp` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `nombre`, `apellido`, `telefono`, `correo`, `acceso`, `empresa`, `tipo_usuario`, `ciudad`, `estado`, `fecha_registro`, `fecha_modif`, `token`, `tokenExp`) VALUES
(5, 'Ivan', 'Suarez', 7861134498, 'ivan.suap@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'HYPERION', 'user', 'Hidalgo', 'Michoacan', '2019-11-06', NULL, '', '0000-00-00 00:00:00'),
(6, 'Eduardo', 'Hernandez', 7861125421, 'lalohh68@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'tics', 'user', 'Morelia', 'Michoacan', '2019-11-07', NULL, '', '0000-00-00 00:00:00'),
(7, 'Abraham', 'Ayala Padilla', 7861191310, 'dev.abxy@gmail.com', 'da28f1274e1c592383a1cbf9a02e105f5de9b472', 'ARPAN', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-11-11', '2019-12-04', 'fca48e3096a802484c6b639ed881ed35', '2019-12-04 22:37:21'),
(8, 'MARICELA', 'ALVAREZ SANCHEZ', 4432454567, 'MALVAREZ@ITSCH.EDU.MX', '1ba06515413d507858e0071c591356d1ec652af9', 'ITSCH', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-11', NULL, '', '0000-00-00 00:00:00'),
(9, 'Lil', 'Pepe', 7861234569, 'lil@agriicola.com', 'a23cceabef4dec1f5cb71c7a1a3f6073dac756bd', 'ARPAN', 'user', 'Morelia', 'Michoacan', '2019-11-11', '2019-11-16', '27939345b942f4517f765a0327dc4933', '2019-11-16 09:25:35'),
(10, 'Test', 'Prueba', 7875462626, 'prueba@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'PRUEBACORP', 'user', 'Morelia', 'Michoacan', '2019-11-16', '2019-11-26', NULL, NULL),
(11, 'Prueba Innmortal', 'Apellido', 7861456789, 'innmortal@agriicola.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'INNMORTAL', 'user', 'Morelia', 'Michoacan de Ocampo', '2019-11-19', NULL, NULL, NULL),
(12, 'Test', 'Test', 4531236578, 'test@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'TEST', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-21', NULL, NULL, NULL),
(13, 'German ', 'Suarez', 5523151995, 'german@gmail.com', 'f5a88633f84d974671d09fce75a5d2758eaf00fd', 'FORD', 'user', 'Hidalgo', 'Michoacan de Ocampo', '2019-11-22', NULL, NULL, NULL);

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
  ADD KEY `id_cultivo` (`id_cultivo`);

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
-- Indexes for table `help_center`
--
ALTER TABLE `help_center`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id_agroquimico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `corte`
--
ALTER TABLE `corte`
  MODIFY `id_corte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cultivos`
--
ALTER TABLE `cultivos`
  MODIFY `id_cultivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id_evento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id_gasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gastos_generales`
--
ALTER TABLE `gastos_generales`
  MODIFY `id_gasto_general` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `help_center`
--
ALTER TABLE `help_center`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id_profile` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suelo_artificial`
--
ALTER TABLE `suelo_artificial`
  MODIFY `id_suelo_artificial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `suelo_natural`
--
ALTER TABLE `suelo_natural`
  MODIFY `id_suelo_natural` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `eventos_ibfk_1` FOREIGN KEY (`id_cultivo`) REFERENCES `cultivos` (`id_cultivo`) ON DELETE CASCADE ON UPDATE CASCADE;

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

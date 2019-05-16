-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 06:02 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pruebab1`
--

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

CREATE TABLE `producto` (
  `id` int(10) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `tipo_producto` varchar(50) DEFAULT NULL,
  `cantidad` int(10) DEFAULT NULL,
  `precio` int(10) DEFAULT NULL,
  `id_tienda` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `nombre`, `tipo_producto`, `cantidad`, `precio`, `id_tienda`) VALUES
(0, '123', 'pera', 'Alimentos', 0, 0, NULL),
(0, '123', 'manzana', 'Alimentos', 10, 5, NULL),
(0, '555', 'zandia', 'Alimentos', 1, 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tienda`
--

CREATE TABLE `tienda` (
  `ID` int(10) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tienda`
--

INSERT INTO `tienda` (`ID`, `nombres`, `direccion`, `username`, `password`) VALUES
(0, 'uno', 'El condado', 'condado', '9cb2942f7893c56f69debdc58e0af62e'),
(0, 'jose', 'La Tola', 'jose', '662eaa47199461d01a623884080934ab');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

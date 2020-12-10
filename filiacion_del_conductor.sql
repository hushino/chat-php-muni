-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 03:19 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filiacion_del_conductor`
--

-- --------------------------------------------------------

--
-- Table structure for table `filiacion`
--

CREATE TABLE `filiacion` (
  `id` int(11) NOT NULL,
  `titular` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `nacionalidad` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `fechadenacimiento` date DEFAULT NULL,
  `domicilio` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `licencia` int(11) DEFAULT NULL,
  `gruposanguinio` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `rh` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `disp` int(11) DEFAULT NULL,
  `expediente` int(11) DEFAULT NULL,
  `letra` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `anio` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `foto` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `cat` varchar(255) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `filiacion`
--

INSERT INTO `filiacion` (`id`, `titular`, `nacionalidad`, `fechadenacimiento`, `domicilio`, `licencia`, `gruposanguinio`, `rh`, `disp`, `expediente`, `letra`, `anio`, `fecha`, `foto`, `cat`) VALUES
(1, 'Imperio Maximo', 'Argentina', '2020-12-04', 'Domicilio', 53656, '+0', 'RH+', 47454, 96547, 'Letra', 0, '2020-12-22', 'images/app.png', 'CAT');

-- --------------------------------------------------------

--
-- Table structure for table `renovacion`
--

CREATE TABLE `renovacion` (
  `id` int(11) NOT NULL,
  `renovo` date DEFAULT NULL,
  `rec` int(11) DEFAULT NULL,
  `titularid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `renovacion`
--

INSERT INTO `renovacion` (`id`, `renovo`, `rec`, `titularid`) VALUES
(5, '2020-12-07', 7, 1),
(6, '2020-12-10', 435, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nombre`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filiacion`
--
ALTER TABLE `filiacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renovacion`
--
ALTER TABLE `renovacion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filiacion`
--
ALTER TABLE `filiacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `renovacion`
--
ALTER TABLE `renovacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

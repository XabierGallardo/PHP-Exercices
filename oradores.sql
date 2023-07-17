-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: sql108.infinityfree.com
-- Xerado en: 16 de Xullo de 2023 ás 22:14
-- Versión do servidor: 10.4.17-MariaDB
-- Versión do PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `if0_34628593_materos2023`
--

-- --------------------------------------------------------

--
-- Estrutura da táboa `oradores`
--

CREATE TABLE `oradores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `edad` tinyint(2) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `encuentro` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tema` varchar(40) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- A extraer os datos da táboa `oradores`
--

INSERT INTO `oradores` (`id`, `nombre`, `apellido`, `edad`, `fecha`, `encuentro`, `tema`) VALUES
(1, 'Alejandrina', 'Arreguez', 25, '2023-11-14 21:48:50', 'Parana', 'Historia'),
(2, 'Myriam', 'Suarez', 38, '2023-07-21 04:00:00', 'Iguazu', 'Arte'),
(3, 'Marcos', 'Fernandez', 45, '2023-07-21 04:00:00', 'Uruguay', 'Cooperativas'),
(9, 'Alejandra', 'Gonzalez', 37, '2023-07-31 04:00:00', 'Parana', 'Literatura'),
(12, 'Johnny', 'Melavo', 18, '2023-08-18 04:00:00', 'Uruguay', 'Historia'),
(20, 'Andres', 'Fernandez', 34, '2023-07-12 04:00:00', 'Parana', 'Historia'),
(21, 'Carlos', 'Macanudingston', 34, '2023-07-26 04:00:00', 'IguazÃº', 'Literatura');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oradores`
--
ALTER TABLE `oradores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oradores`
--
ALTER TABLE `oradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

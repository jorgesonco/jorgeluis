-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 05:35 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id_area` int(8) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id_area`, `area`) VALUES
(1, 'desarrollo'),
(2, 'diseño');

-- --------------------------------------------------------

--
-- Table structure for table `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `h_entrada` time NOT NULL,
  `h_salida` time NOT NULL,
  `id_pasante_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gestion`
--

CREATE TABLE `gestion` (
  `id_gestion` int(8) NOT NULL,
  `gestion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gestion`
--

INSERT INTO `gestion` (`id_gestion`, `gestion`) VALUES
(1, 'I-2021'),
(2, 'II-2021');

-- --------------------------------------------------------

--
-- Table structure for table `pasante`
--

CREATE TABLE `pasante` (
  `id_pasante` int(11) NOT NULL,
  `cedula` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `paterno` varchar(50) NOT NULL,
  `materno` varchar(50) NOT NULL,
  `ru` int(50) NOT NULL,
  `celular` int(50) NOT NULL,
  `id_gestion_fk` int(8) NOT NULL,
  `id_area_fk` int(8) NOT NULL,
  `id_turno_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasante`
--

INSERT INTO `pasante` (`id_pasante`, `cedula`, `nombre`, `paterno`, `materno`, `ru`, `celular`, `id_gestion_fk`, `id_area_fk`, `id_turno_fk`) VALUES
(23, '444', '444', '444', '444', 444, 444, 1, 1, 1),
(27, '8888888888888888', '88888888888', '8888888888888', '8888888888', 8888888, 88888888, 2, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `turno`
--

CREATE TABLE `turno` (
  `id_turno` int(11) NOT NULL,
  `turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `turno`
--

INSERT INTO `turno` (`id_turno`, `turno`) VALUES
(1, 'mañana'),
(2, 'tarde'),
(3, 'tarde');

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `id_rol_fk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_pasante`
-- (See below for the actual view)
--
CREATE TABLE `view_pasante` (
`id_pasante` int(11)
,`cedula` varchar(50)
,`nombre` varchar(50)
,`paterno` varchar(50)
,`materno` varchar(50)
,`ru` int(50)
,`celular` int(50)
,`id_gestion_fk` int(8)
,`id_area_fk` int(8)
,`id_turno_fk` int(8)
,`id_area` int(8)
,`area` varchar(100)
,`id_gestion` int(8)
,`gestion` varchar(30)
,`id_turno` int(11)
,`turno` varchar(50)
);

-- --------------------------------------------------------

--
-- Structure for view `view_pasante`
--
DROP TABLE IF EXISTS `view_pasante`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_pasante`  AS SELECT `pasante`.`id_pasante` AS `id_pasante`, `pasante`.`cedula` AS `cedula`, `pasante`.`nombre` AS `nombre`, `pasante`.`paterno` AS `paterno`, `pasante`.`materno` AS `materno`, `pasante`.`ru` AS `ru`, `pasante`.`celular` AS `celular`, `pasante`.`id_gestion_fk` AS `id_gestion_fk`, `pasante`.`id_area_fk` AS `id_area_fk`, `pasante`.`id_turno_fk` AS `id_turno_fk`, `area`.`id_area` AS `id_area`, `area`.`area` AS `area`, `gestion`.`id_gestion` AS `id_gestion`, `gestion`.`gestion` AS `gestion`, `turno`.`id_turno` AS `id_turno`, `turno`.`turno` AS `turno` FROM (((`pasante` join `area` on(`pasante`.`id_area_fk` = `area`.`id_area`)) join `gestion` on(`pasante`.`id_gestion_fk` = `gestion`.`id_gestion`)) join `turno` on(`pasante`.`id_turno_fk` = `turno`.`id_turno`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indexes for table `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`),
  ADD KEY `id_pasante_fk` (`id_pasante_fk`);

--
-- Indexes for table `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id_gestion`);

--
-- Indexes for table `pasante`
--
ALTER TABLE `pasante`
  ADD PRIMARY KEY (`id_pasante`),
  ADD KEY `id_gestion_fk` (`id_gestion_fk`),
  ADD KEY `id_area_fk` (`id_area_fk`),
  ADD KEY `id_turno_fk` (`id_turno_fk`);

--
-- Indexes for table `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indexes for table `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_rol_fk` (`id_rol_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id_area` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id_gestion` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pasante`
--
ALTER TABLE `pasante`
  MODIFY `id_pasante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `asistencia_ibfk_1` FOREIGN KEY (`id_pasante_fk`) REFERENCES `pasante` (`id_pasante`);

--
-- Constraints for table `pasante`
--
ALTER TABLE `pasante`
  ADD CONSTRAINT `pasante_ibfk_1` FOREIGN KEY (`id_gestion_fk`) REFERENCES `gestion` (`id_gestion`),
  ADD CONSTRAINT `pasante_ibfk_2` FOREIGN KEY (`id_area_fk`) REFERENCES `area` (`id_area`),
  ADD CONSTRAINT `pasante_ibfk_3` FOREIGN KEY (`id_turno_fk`) REFERENCES `turno` (`id_turno`);

--
-- Constraints for table `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_rol_fk`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

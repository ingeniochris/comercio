-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-06-2021 a las 01:10:55
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tienda`
--
CREATE DATABASE IF NOT EXISTS `tienda` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tienda`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `precio` varchar(50) NOT NULL,
  `idProveedor` varchar(20) NOT NULL,
  `img` varchar(300) NOT NULL,
  `cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `descripcion`, `precio`, `idProveedor`, `img`, `cantidad`) VALUES
('1', 'Audifonos Inalambricos Razer', 'Audifonos inalambricos bluetooth 5.1 virtual', '3800', '2', 'audifonosrazer.jpeg', 3),
('2', 'Teclado Gaming Razer', 'Teclado gamer con iluminacion RGB', '2000', '2', 'tecladorazer.jpeg', 3),
('3', 'Mouse Gamer Logitech', 'Mouse Gamer logitech con 7200dpi', '1200', '1', 'mouselog.jpeg', 4),
('4', 'Control PS4 Dualshock 4', 'Control dualshock 4 inalambrico para PS4', '1600', '4', 'dualshock.jpeg', 5),
('5', 'Control PS5 Dualsense', 'Control de Ps5', '1800', '4', 'dualsense.jpeg', 6),
('6', 'Audifonos inalambricos PS5 Pulse 3D', 'Audifonos inalambricos para PS5', '2800', '4', 'pulse.jpeg', 5);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

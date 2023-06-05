-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-04-2023 a las 04:53:39
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `encuesta_producto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `r_encuesta`
--

CREATE TABLE `r_encuesta` (
  `id` int(11) NOT NULL,
  `mayorEdad` varchar(2) NOT NULL,
  `Sabor` varchar(9) NOT NULL,
  `Calidad` varchar(9) NOT NULL,
  `Presentacion` varchar(9) NOT NULL,
  `Recomendacion` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `r_encuesta`
--

INSERT INTO `r_encuesta` (`id`, `mayorEdad`, `Sabor`, `Calidad`, `Presentacion`, `Recomendacion`) VALUES
(1, 'Si', 'Excelente', 'Muy bien', 'Muy bien', 'Si'),
(2, 'Si', 'Malo', 'Excelente', 'Bien', 'No'),
(3, 'Si', 'Excelente', 'Muy bien', 'Excelente', 'No'),
(4, 'Si', 'Malo', 'Muy bien', 'Malo', 'No'),
(5, 'Si', 'Excelente', 'Bien', 'Malo', 'No'),
(6, 'No', 'Bien', 'Muy bien', 'Bien', 'No'),
(7, 'Si', 'Regular', 'Muy bien', 'Muy bien', 'No'),
(8, 'No', 'Muy bien', 'Bien', 'Muy bien', 'No'),
(9, 'Si', 'Regular', 'Bien', 'Muy bien', 'No'),
(10, 'Si', 'Bien', 'Bien', 'Muy bien', 'Si'),
(11, 'No', 'Regular', 'Malo', 'Muy bien', 'No'),
(12, 'Si', 'Bien', 'Bien', 'Excelente', 'Si'),
(13, 'Si', 'Bien', 'Bien', 'Bien', 'Si'),
(14, 'Si', 'Muy bien', 'Regular', 'Bien', 'No'),
(15, 'Si', 'Excelente', 'Malo', 'Malo', 'No'),
(16, 'Si', 'Excelente', 'Excelente', 'Regular', 'No'),
(17, 'Si', 'Regular', 'Excelente', 'Excelente', 'Si'),
(18, 'Si', 'Regular', 'Muy bien', 'Regular', 'Si'),
(19, 'Si', 'Excelente', 'Excelente', 'Regular', 'Si'),
(20, 'Si', 'Excelente', 'Malo', 'Excelente', 'Si'),
(21, 'No', 'Malo', 'Malo', 'Bien', 'Si'),
(22, 'No', 'Bien', 'Bien', 'Bien', 'Si'),
(23, 'Si', 'Bien', 'Bien', 'Muy bien', 'Si'),
(24, 'No', 'Muy bien', 'Malo', 'Regular', 'Si'),
(25, 'No', 'Muy bien', 'Excelente', 'Regular', 'No'),
(26, 'No', 'Excelente', 'Regular', 'Muy bien', 'No'),
(27, 'Si', 'Malo', 'Malo', 'Regular', 'Si'),
(28, 'Si', 'Regular', 'Regular', 'Malo', 'Si'),
(29, 'No', 'Bien', 'Regular', 'Muy bien', 'No'),
(30, 'Si', 'Muy bien', 'Muy bien', 'Regular', 'Si'),
(31, 'Si', 'Malo', 'Excelente', 'Malo', 'Si'),
(32, 'No', 'Muy bien', 'Excelente', 'Muy bien', 'Si'),
(33, 'No', 'Bien', 'Malo', 'Regular', 'Si'),
(34, 'Si', 'Regular', 'Excelente', 'Muy bien', 'No'),
(35, 'Si', 'Bien', 'Malo', 'Regular', 'Si'),
(36, 'Si', 'Bien', 'Muy bien', 'Regular', 'Si'),
(37, 'No', 'Malo', 'Excelente', 'Excelente', 'No'),
(38, 'Si', 'Excelente', 'Muy bien', 'Excelente', 'Si'),
(39, 'No', 'Bien', 'Excelente', 'Bien', 'No'),
(40, 'Si', 'Malo', 'Excelente', 'Muy bien', 'No'),
(41, 'No', 'Muy bien', 'Excelente', 'Bien', 'Si'),
(42, 'Si', 'Bien', 'Muy bien', 'Regular', 'No'),
(43, 'Si', 'Muy bien', 'Muy bien', 'Excelente', 'Si'),
(44, 'Si', 'Muy bien', 'Bien', 'Regular', 'Si'),
(45, 'Si', 'Muy bien', 'Malo', 'Regular', 'No'),
(46, 'No', 'Muy bien', 'Regular', 'Malo', 'Si'),
(47, 'Si', 'Regular', 'Malo', 'Excelente', 'Si'),
(48, 'No', 'Muy bien', 'Regular', 'Malo', 'Si'),
(49, 'Si', 'Malo', 'Muy bien', 'Excelente', 'No'),
(50, 'Si', 'Excelente', 'Muy bien', 'Muy bien', 'No'),
(51, 'Si', 'Muy bien', 'Muy bien', 'Muy bien', 'Si');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `r_encuesta`
--
ALTER TABLE `r_encuesta`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `r_encuesta`
--
ALTER TABLE `r_encuesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

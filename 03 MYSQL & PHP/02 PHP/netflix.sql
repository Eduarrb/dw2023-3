-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-01-2024 a las 04:33:22
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `netflix`
--
CREATE DATABASE IF NOT EXISTS `netflix` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `netflix`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actores`
--

DROP TABLE IF EXISTS `actores`;
CREATE TABLE `actores` (
  `act_id` int(10) UNSIGNED NOT NULL,
  `act_nombres` varchar(100) NOT NULL,
  `act_apellidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `actores`
--

INSERT INTO `actores` (`act_id`, `act_nombres`, `act_apellidos`) VALUES
(1, 'Kilian', 'Murphy'),
(2, 'Matt', 'Daemon'),
(3, 'Keanu', 'Reeves'),
(4, 'Carrie-Anne', 'Moss'),
(5, 'Leonardo', 'Dicaprio'),
(6, 'Kate', 'Winslet'),
(7, 'Silvester', 'Stallone'),
(8, 'Talia', 'Shire'),
(9, 'Jack', 'Nicolson'),
(10, 'Shelly', 'Duvall'),
(11, 'Ian', 'Mackellen'),
(12, 'Elijah', 'Wood'),
(13, 'Salma', 'Hayek'),
(14, 'Brad', 'Pitt'),
(15, 'Robert', 'De Niro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directores`
--

DROP TABLE IF EXISTS `directores`;
CREATE TABLE `directores` (
  `dire_id` int(10) UNSIGNED NOT NULL,
  `dire_nombres` varchar(100) NOT NULL,
  `dire_apellidos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `directores`
--

INSERT INTO `directores` (`dire_id`, `dire_nombres`, `dire_apellidos`) VALUES
(1, 'Christopher', 'Nolan'),
(2, 'Lana', 'Wachowsky'),
(3, 'James', 'Cameron'),
(4, 'Stanly', 'Cubric'),
(5, 'Peter', 'Jackson'),
(6, 'Ridley', 'Scott');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

DROP TABLE IF EXISTS `peliculas`;
CREATE TABLE `peliculas` (
  `peli_id` int(10) UNSIGNED NOT NULL,
  `peli_dire_id` int(10) UNSIGNED DEFAULT NULL,
  `peli_nombre` varchar(50) NOT NULL,
  `peli_img` text DEFAULT NULL,
  `peli_genero` varchar(50) NOT NULL,
  `peli_fechaEstreno` date NOT NULL,
  `peli_restricciones` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`peli_id`, `peli_dire_id`, `peli_nombre`, `peli_img`, `peli_genero`, `peli_fechaEstreno`, `peli_restricciones`) VALUES
(2, 2, 'Matrix', 'https://pics.filmaffinity.com/Matrix-155050517-large.jpg', 'Ciencia Ficción', '1999-12-24', 'PG-13'),
(4, 1, 'Interstellarrrrrrrrrrrrrrrrrrrrr', 'https://www.mubis.es/media/releases/13302/269957/interstellar-blu-ray-l_cover.jpg', 'ciencia ficcion', '2014-11-06', 'PG'),
(7, 4, 'El Resplandor', NULL, 'Suspenso', '1980-05-05', 'PG-13'),
(9, 5, 'El señor de los anillos: La comunidad del anillo', NULL, 'Ciencia ficción', '2004-11-11', 'PG'),
(10, NULL, '007: Golden Eye', NULL, 'Acción', '1995-12-24', 'PG-13'),
(12, 3, 'Terminator', 'https://m.media-amazon.com/images/I/71WMJOlGQBL._AC_UF894,1000_QL80_.jpg', 'Ciencia Ficción', '1984-10-26', 'PG-16'),
(23, 3, 'Avatar', 'https://lumiere-a.akamaihd.net/v1/images/p_avatar_de27b20f.jpeg', 'Ciencia Ficción', '2009-12-18', 'PG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

DROP TABLE IF EXISTS `personajes`;
CREATE TABLE `personajes` (
  `per_act_id` int(11) NOT NULL,
  `per_peli_id` int(11) NOT NULL,
  `per_nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`per_act_id`, `per_peli_id`, `per_nombre`) VALUES
(1, 1, 'Openhaimer'),
(2, 1, 'Gen. Leslie Groves'),
(3, 2, 'Neo'),
(4, 2, 'Trinity'),
(5, 3, 'Jack'),
(6, 3, 'Rose'),
(7, 5, 'Rocky'),
(8, 5, 'MaryAnn'),
(9, 7, 'Jack Torrance'),
(10, 7, 'Wendy Torrance'),
(11, 9, 'Gandalf'),
(12, 9, 'Frodo'),
(0, 0, 'Spiderman'),
(0, 0, 'CApitan America'),
(0, 0, 'Simba');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actores`
--
ALTER TABLE `actores`
  ADD PRIMARY KEY (`act_id`);

--
-- Indices de la tabla `directores`
--
ALTER TABLE `directores`
  ADD PRIMARY KEY (`dire_id`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`peli_id`),
  ADD KEY `fk_direId` (`peli_dire_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actores`
--
ALTER TABLE `actores`
  MODIFY `act_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `directores`
--
ALTER TABLE `directores`
  MODIFY `dire_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `peli_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `fk_direId` FOREIGN KEY (`peli_dire_id`) REFERENCES `directores` (`dire_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

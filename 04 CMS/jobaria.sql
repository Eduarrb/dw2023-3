-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2024 a las 04:27:05
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
-- Base de datos: `jobaria`
--
CREATE DATABASE IF NOT EXISTS `jobaria` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `jobaria`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE `comentarios` (
  `com_id` int(10) UNSIGNED NOT NULL,
  `com_user_id` int(10) UNSIGNED NOT NULL,
  `com_prod_id` int(10) UNSIGNED NOT NULL,
  `com_mensaje` text NOT NULL,
  `com_puntaje` int(11) NOT NULL,
  `com_fecha` date NOT NULL,
  `com_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`com_id`, `com_user_id`, `com_prod_id`, `com_mensaje`, `com_puntaje`, `com_fecha`, `com_status`) VALUES
(1, 1, 2, 'Excelente producto, 100% recomendado y la entrega fue rapida', 4, '2024-01-17', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `prod_id` int(10) UNSIGNED NOT NULL,
  `prod_nombre` varchar(100) NOT NULL,
  `prod_descri` text NOT NULL,
  `prod_precio` decimal(10,2) NOT NULL,
  `prod_canti` int(11) NOT NULL,
  `prod_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`prod_id`, `prod_nombre`, `prod_descri`, `prod_precio`, `prod_canti`, `prod_img`) VALUES
(1, 'Mando Xbox Series X', 'Mando para la consola xbox series x y pc', 288.90, 5, 'd190dc0dfa430fdb1be858b69cdb0e11.jpg'),
(2, 'Camara vigilancia HP', 'Camara web para interiores', 150.50, 7, 'fadb96133f02cf38451e3af2ffdde738.jpg'),
(3, 'Smart Watch S3', 'Smart watch con giroscopio', 545.00, 10, 'a1d3b96c8d7dd4f4c1f2fea929adde96.jpg'),
(4, 'Cámara Semi Profesional Sony Alpha 7', 'Cámara semi profesional de 34 mega pixeles y lente de 3.5 pulagdas', 1350.80, 5, '4c47a3cc3d22c2c72abb5826d2aaa481.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_nombres` varchar(100) NOT NULL,
  `user_apellidos` varchar(100) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_img` text DEFAULT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_token` text DEFAULT NULL,
  `user_status` tinyint(1) DEFAULT 0 COMMENT 'status 0: usuario no activo, status 1: usuario activo',
  `user_rol` varchar(50) NOT NULL DEFAULT 'suscriptor'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `user_nombres`, `user_apellidos`, `user_email`, `user_img`, `user_pass`, `user_token`, `user_status`, `user_rol`) VALUES
(1, 'Eduardo', 'Arroyo', 'eduardo@gmail.com', NULL, '$2y$12$jV/0fq.GOx2v38Mni.uAi.KgyxoGCySFvAwDLVGelScQK86yMbqnq', '', 1, 'admin'),
(2, 'John', 'Smith', 'john@gmail.com', NULL, '$2y$12$Ek.Imj5lAnzIjM3tM0L85eqeIB8OpPIwEh282GIJE.ofP6t/GmqZq', '', 1, 'suscriptor'),
(3, 'Sofia', 'Salas', 'sofia@gmail.com', NULL, '$2y$12$yTuwXba4xJltBsn9WHAFH.HSNYOwzIoG7GVV5U.B/lQRWu26DDExy', 'd41d8cd98f00b204e9800998ecf8427e', 0, 'suscriptor'),
(4, 'Carla', 'Rosales', 'carla@gmail.com', NULL, '$2y$12$YDEWkCQvtT0Bdmk3uVQWGOfpzJMRUUdb5S.obzPuYUQMJi728ybtK', '', 1, 'suscriptor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `fk_userId` (`com_user_id`),
  ADD KEY `fk_prdoId` (`com_prod_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `com_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `prod_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `fk_prdoId` FOREIGN KEY (`com_prod_id`) REFERENCES `productos` (`prod_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_userId` FOREIGN KEY (`com_user_id`) REFERENCES `usuarios` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

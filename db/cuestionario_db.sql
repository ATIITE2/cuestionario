-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2023 a las 13:28:33
-- Versión del servidor: 8.1.0
-- Versión de PHP: 8.3.0-dev

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuestionario_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE `respuestas` (
  `id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `country` varchar(2) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `daily_budget` int NOT NULL,
  `agree_term` tinyint(1) NOT NULL,
  `room_type` int NOT NULL,
  `room_description` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas1`
--

CREATE TABLE `respuestas1` (
  `id` int NOT NULL,
  `usuario_id` int NOT NULL,
  `discap_permanente` tinyint(1) NOT NULL,
  `disc_fisica` tinyint(1) DEFAULT NULL,
  `disc_mental` tinyint(1) DEFAULT NULL,
  `disc_intelectual` tinyint(1) DEFAULT NULL,
  `disc_sensorial` tinyint(1) DEFAULT NULL,
  `vinculo_persona_disc` int DEFAULT NULL,
  `nombre_asoc_agrup` varchar(100) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `barreras_retos` varchar(300) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `incl_personas` tinyint(1) NOT NULL,
  `foros_event` tinyint(1) NOT NULL,
  `capacitar_pcd` tinyint(1) NOT NULL,
  `sensib_disc` tinyint(1) NOT NULL,
  `otra_propuesta` tinyint(1) NOT NULL,
  `otra_prop_txt` varchar(300) COLLATE utf8mb4_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombres` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ap_paterno` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ap_materno` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` int NOT NULL,
  `otro_genero` varchar(200) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `municipio` int NOT NULL,
  `telefono` varchar(10) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `respuestas1`
--
ALTER TABLE `respuestas1`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestas`
--
ALTER TABLE `respuestas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `respuestas1`
--
ALTER TABLE `respuestas1`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

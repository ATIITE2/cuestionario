-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-09-2023 a las 12:28:58
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
  `discap_permanente` tinyint(1) NOT NULL,
  `disc_fisica` tinyint(1) DEFAULT NULL,
  `disc_mental` tinyint(1) DEFAULT NULL,
  `disc_intelectual` tinyint(1) DEFAULT NULL,
  `disc_sensorial` tinyint(1) DEFAULT NULL,
  `vinculo_persona_disc` int DEFAULT NULL,
  `nombre_asoc_agrup` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `barreras_retos` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `incl_personas` tinyint(1) NOT NULL,
  `foros_event` tinyint(1) NOT NULL,
  `capacitar_pcd` tinyint(1) NOT NULL,
  `sensib_disc` tinyint(1) NOT NULL,
  `otra_propuesta` tinyint(1) NOT NULL,
  `otra_prop_txt` varchar(300) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `integrar_consejos` tinyint(1) NOT NULL,
  `porque_sn_integrar` varchar(300) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `acred_disc` tinyint(1) NOT NULL,
  `porque_sn_acreditar` varchar(300) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cred_sedif` tinyint(1) DEFAULT NULL,
  `cred_sesa` tinyint(1) DEFAULT NULL,
  `dict_medico` tinyint(1) DEFAULT NULL,
  `const_medica` tinyint(1) DEFAULT NULL,
  `otro_doc_prop` tinyint(1) DEFAULT NULL,
  `otro_doc_txt` varchar(300) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `acred_disc_perm` tinyint(1) NOT NULL,
  `porque_sn_acreditar_perm` varchar(300) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `cred_sedif2` tinyint(1) DEFAULT NULL,
  `cred_sesa2` tinyint(1) DEFAULT NULL,
  `dict_medico2` tinyint(1) DEFAULT NULL,
  `const_medica2` tinyint(1) DEFAULT NULL,
  `otro_doc_prop2` tinyint(1) DEFAULT NULL,
  `otro_doc_txt2` varchar(300) COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `comentarios_add` varchar(300) COLLATE utf8mb4_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nombres` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ap_paterno` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `ap_materno` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `genero` int NOT NULL,
  `otro_genero` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `municipio` varchar(200) COLLATE utf8mb4_spanish2_ci NOT NULL,
  `telefono` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL
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
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

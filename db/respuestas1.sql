-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2023 a las 00:37:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

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
-- Estructura de tabla para la tabla `respuestas1`
--

CREATE TABLE `respuestas1` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `discap_permanente` tinyint(1) NOT NULL,
  `disc_fisica` tinyint(1) DEFAULT NULL,
  `disc_mental` tinyint(1) DEFAULT NULL,
  `disc_intelectual` tinyint(1) DEFAULT NULL,
  `disc_sensorial` tinyint(1) DEFAULT NULL,
  `vinculo_persona_disc` int(11) DEFAULT NULL,
  `nombre_asoc_agrup` varchar(100) DEFAULT NULL,
  `barreras_retos` varchar(300) DEFAULT NULL,
  `incl_personas` tinyint(1) NOT NULL,
  `foros_event` tinyint(1) NOT NULL,
  `capacitar_pcd` tinyint(1) NOT NULL,
  `sensib_disc` tinyint(1) NOT NULL,
  `otra_propuesta` tinyint(1) NOT NULL,
  `otra_prop_txt` varchar(300) DEFAULT NULL,
  `integrar_consejos` tinyint(1) NOT NULL,
  `porque_sn_integrar` varchar(300) NOT NULL,
  `acred_disc` tinyint(1) NOT NULL,
  `porque_sn_acreditar` varchar(300) NOT NULL,
  `cred_sedif` tinyint(1) DEFAULT NULL,
  `cred_sesa` tinyint(1) DEFAULT NULL,
  `dict_medico` tinyint(1) DEFAULT NULL,
  `const_medica` tinyint(1) DEFAULT NULL,
  `otro_doc_prop` tinyint(1) DEFAULT NULL,
  `otro_doc_txt` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `respuestas1`
--
ALTER TABLE `respuestas1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `respuestas1`
--
ALTER TABLE `respuestas1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

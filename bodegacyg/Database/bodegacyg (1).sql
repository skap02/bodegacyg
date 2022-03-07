-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-03-2022 a las 14:26:52
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodegacyg`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` char(36) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `codigo`, `nombre`, `created_at`, `updated_at`, `deleted_at`) VALUES
('4c155d03-ec13-4ae1-be9c-bca0fe1581ff', 'Cat1', 'Lacteos', '2022-02-25 10:41:59', '2022-02-25 10:42:00', NULL),
('6e56c9c0-9844-11ec-8492-5fbfcd2c5793', 'Cat2', 'Limpieza', '2022-02-28 08:13:41', '2022-02-28 08:13:41', NULL),
('fc231840-9844-11ec-afba-e960b83de921', 'Cat3', 'Licores', '2022-02-28 08:17:39', '2022-02-28 08:17:39', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` char(36) NOT NULL,
  `codigo` varchar(20) DEFAULT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `stock` varchar(6) DEFAULT NULL,
  `categorias_id` char(36) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `codigo`, `nombre`, `precio`, `stock`, `categorias_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0857eaa0-9838-11ec-a5cf-4fb793c96095', 'P015', 'Atún', 4.5, NULL, NULL, '2022-02-28 06:44:56', '2022-02-28 06:44:56', NULL),
('37111380-926f-11ec-b868-3fd531627803', 'P003', 'Fideos', 2.5, NULL, '4c155d03-ec13-4ae1-be9c-bca0fe1581ff', '2022-02-20 22:04:50', '2022-02-20 22:04:50', NULL),
('3cdc9790-924a-11ec-a981-fd7fb65bbc3e', 'P001', 'Pasta dentrifica', 2.5, NULL, '', '2022-02-20 17:40:08', '2022-02-20 22:08:36', NULL),
('5b54fde0-92a0-11ec-bf1a-199ff06be446', 'P005', 'Gaseosa', 5.5, NULL, '', '2022-02-21 03:56:36', '2022-02-21 03:56:36', NULL),
('6eaae0d0-926f-11ec-8a20-6f944ee0347e', 'P004', 'Detergente', 4.5, NULL, '', '2022-02-20 22:06:23', '2022-02-20 22:06:23', NULL),
('7c0237a0-9848-11ec-a201-af67fce5c58d', 'P008', 'Ace', 2.5, '40', NULL, '2022-02-28 08:42:42', '2022-02-28 08:42:42', NULL),
('99e91ba0-9250-11ec-b65e-b9aacf8aa826', 'P002', 'Leche', 3.5, NULL, '4c155d03-ec13-4ae1-be9c-bca0fe1581ff', '2022-02-20 18:25:41', '2022-02-20 18:25:41', NULL),
('dd44bb0c-3a87-4852-8b69-c682ce37d6d2', 'P006', 'Mantequilla', 2.5, '50', '', '2022-02-25 11:11:34', '2022-02-25 11:11:34', NULL),
('ee19a210-9842-11ec-8d2a-2b7d722202f4', 'P007', 'Vino', 15.5, '6', NULL, '2022-02-28 08:02:57', '2022-02-28 08:02:57', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

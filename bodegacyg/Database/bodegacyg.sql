-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-02-2022 a las 04:47:52
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.9

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
('58f9aa10-9848-11ec-848e-a3fcfbfbf28f', 'cat4', 'menestras', '2022-02-28 08:41:43', '2022-02-28 08:41:43', NULL),
('6cc95290-9848-11ec-b829-f9fae8d3106c', 'cat5', 'mascotas', '2022-02-28 08:42:17', '2022-02-28 08:42:17', NULL),
('86eb4e90-9848-11ec-adf2-1f26e505669d', 'cat6', 'higiene', '2022-02-28 08:43:01', '2022-02-28 08:43:01', NULL);

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
('0857eaa0-9838-11ec-a5cf-4fb793c96095', 'P015', 'Atún', 4.5, '35', NULL, '2022-02-28 06:44:56', '2022-02-28 06:44:56', NULL),
('08d9fbb0-9838-11ec-90df-4999600f0bae', 'P008', 'alcohol', 8, '25', NULL, '2022-02-28 06:44:57', '2022-02-28 06:44:57', NULL),
('0f7611c0-9849-11ec-9e03-6d7b671add3e', 'p021', 'lentejas', 3, '50', NULL, '2022-02-28 08:46:50', '2022-02-28 08:46:50', NULL),
('1b945620-9849-11ec-a73a-d7ee36269dc4', 'P022', 'pallar', 2.5, '50', NULL, '2022-02-28 08:47:10', '2022-02-28 08:47:10', NULL),
('37111380-926f-11ec-b868-3fd531627803', 'P003', 'Fideos', 2.5, '20', '4c155d03-ec13-4ae1-be9c-bca0fe1581ff', '2022-02-20 22:04:50', '2022-02-20 22:04:50', NULL),
('3cdc9790-924a-11ec-a981-fd7fb65bbc3e', 'P001', 'Pasta dentrifica', 2.5, '10', '', '2022-02-20 17:40:08', '2022-02-20 22:08:36', NULL),
('5b54fde0-92a0-11ec-bf1a-199ff06be446', 'P005', 'Gaseosa', 5.5, '15', '', '2022-02-21 03:56:36', '2022-02-21 03:56:36', NULL),
('6eaae0d0-926f-11ec-8a20-6f944ee0347e', 'P004', 'Detergente', 4.5, '10', '', '2022-02-20 22:06:23', '2022-02-20 22:06:23', NULL),
('971a12c0-9848-11ec-88b7-6d8eacd39008', 'P013', 'DOGCHOW', 8, '125', NULL, '2022-02-28 08:43:28', '2022-02-28 08:43:28', NULL),
('99e91ba0-9250-11ec-b65e-b9aacf8aa826', 'P002', 'Leche', 3.5, '100', '4c155d03-ec13-4ae1-be9c-bca0fe1581ff', '2022-02-20 18:25:41', '2022-02-20 18:25:41', NULL),
('a6989560-983d-11ec-9df7-4357c6515e22', 'P007', 'ace', 5, '10', NULL, '2022-02-28 07:25:09', '2022-02-28 07:25:09', NULL),
('aa4356a0-9848-11ec-971a-9da4aee3da89', 'P016', 'CARNASA', 25, '5', NULL, '2022-02-28 08:44:00', '2022-02-28 08:44:00', NULL),
('d07aecd0-9848-11ec-b660-d9c655c2236c', 'P017', 'PROPLAN', 250, '5', NULL, '2022-02-28 08:45:04', '2022-02-28 08:45:04', NULL),
('da456f30-9847-11ec-8811-f9fe16870107', 'P009', 'leche GLORIA', 5, '23', NULL, '2022-02-28 08:38:11', '2022-02-28 08:38:11', NULL),
('da456f30-9847-11ec-b106-4966885b8666', 'P010', 'leche IDEAL', 5, '23', NULL, '2022-02-28 08:38:11', '2022-02-28 08:38:11', NULL),
('da457140-9847-11ec-9596-e3f25eda4831', 'P011', 'leche PURA VIDA', 5, '23', NULL, '2022-02-28 08:38:11', '2022-02-28 08:38:11', NULL),
('dab07d50-9847-11ec-af59-950037ee90e6', 'P012', 'COCOA', 1, '50', NULL, '2022-02-28 08:38:12', '2022-02-28 08:38:12', NULL),
('dd44bb0c-3a87-4852-8b69-c682ce37d6d2', 'P006', 'Mantequilla', 2.5, '50', '', '2022-02-25 11:11:34', '2022-02-25 11:11:34', NULL),
('e1d03f40-9848-11ec-b5c3-2fae3d160bbb', 'P018', 'Pantene', 1, '50', NULL, '2022-02-28 08:45:33', '2022-02-28 08:45:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contrasena` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

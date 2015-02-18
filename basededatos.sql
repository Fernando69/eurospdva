-- phpMyAdmin SQL Dump
-- version 4.3.9
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2015 a las 23:43:30
-- Versión del servidor: 10.0.15-MariaDB
-- Versión de PHP: 5.6.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `basededatos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_11_155001_create_users_table', 1),
('2015_01_11_155001_create_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `user_level` enum('administrador','moderador','usuario') COLLATE utf8_spanish_ci NOT NULL,
  `user_type` enum('alumno','representante','personal','otro') COLLATE utf8_spanish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `user_level`, `user_type`, `name`, `last_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'hsilencee@gmail.com', '$2y$10$nLJA4lO8gOLBbksmr43HIuzOOpopRVM.WssRobC1tiOJpQ/92KGPS', 'administrador', 'alumno', 'Cristian', 'Pontes', 'QjAAngcHnvYVzVZiUtsCKNyH3EINmKbItlHTSielbCHVF9wQZos6Vjt8K7nK', '2015-01-12 13:48:20', '2015-02-18 06:33:27'),
(5, 'walterwhite@gmail.com', '$2y$10$mmFnmo8z98isFK2C.sLEmOEXyzYzVKJVtnGlr.cIhzeSzi9xESCkW', 'moderador', 'representante', 'Walter', 'White', 'wVW7i0kRbKLg8rZQp2G5TrdC2aTxlCHbYmJ3whC3FQLeoFsd2IgyDJJAmNMu', '2015-01-12 14:49:15', '2015-02-13 14:48:27'),
(6, 'jessepickman@gmail.com', '$2y$10$ejAn9hY11PuGwrDE8JKKl.DJ7AudTQVWoN26q8TEh.64jKc/ydZ6u', 'usuario', 'otro', 'Jesse', 'Pickman', 'vRSeS6V1zDS8DZlGdy7RAFLRqaGMp1cqwQ9pxeStCTNpRIDSi41ovCiViHgq', '2015-01-12 14:52:52', '2015-02-18 10:07:26');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

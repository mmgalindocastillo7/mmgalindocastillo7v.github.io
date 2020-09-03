-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2020 a las 05:55:24
-- Versión del servidor: 10.1.9-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_registro_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `correo_electronico` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre_completo`, `password`, `correo_electronico`, `telefono`) VALUES
(1, 'test', '11', 'hola@gmail.com', '89898989'),
(3, 'luisa', '567', 'luisa@gmail.com', '126263764775945m'),
(4, 'Jose Lopez ', '1mmm', 'jose@gmail.com', '37287y438579375'),
(7, 'fraci pineda', '9876', 'fraci@gmail.com', '73907093903'),
(8, 'diana ', '987', 'diana@gmail.com', '126263764775945m'),
(11, 'emy', '567', 'emi@gmail.com', '31572534'),
(12, 'Maria Mercedes Galindo', '876', 'mgalindocastillo6@gmail.com', '3041133475'),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', ''),
(26, '', '', '', ''),
(27, '', '', '', ''),
(31, 'diana ', '567', 'diana@gmail.com', '32011302'),
(32, 'Jose Lopez ', '0987', 'jose@gmail.com', '456789'),
(33, 'Jose Lopez ', '098', 'jose@gmail.com', '456789'),
(34, 'Jose Lopez ', '098', 'jose@gmail.com', '456789'),
(36, 'Maria Mercedes Galindo', '123', 'mgalindocastillo6@gmail.com', '126263764775945m'),
(37, 'Raquel Galindo', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9', 'raque@gmail.com', '876654322'),
(38, 'Maria Mercedes Galindo', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9', 'mgalindocastillo6@gmail.com', '3041133475'),
(39, 'Maria Mercedes Galindo', 'e16d6b316f3bef1794c548b7a98b969a6aacb02f6ae5138efc1c443ae6643a6a77d92a0e33e382d6cbb7758f9ab25ab0f975', 'mgalindocastillo6@gmail.com', '126263764775945m'),
(40, 'Sandra Sanches', 'fd310f958e98041f3a71e40a0824a151656622f519151a75924cf8dfce90d25c122545e89dcb3daf57b793e2d8bd3e739393', 'sandra@hotmail.com', '320765431');

--
-- Índices para tablas volcadas
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

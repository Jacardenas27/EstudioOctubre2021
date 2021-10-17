-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2021 a las 03:12:41
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estudiooctubre2021`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatares`
--

CREATE TABLE `avatares` (
  `idAvatar` int(11) NOT NULL,
  `nombreAvatar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `avatares`
--

INSERT INTO `avatares` (`idAvatar`, `nombreAvatar`) VALUES
(1, '001-antelope.svg'),
(2, '002-bat.svg'),
(3, '003-bear.svg'),
(4, '004-beaver.svg'),
(5, '005-bison.svg'),
(6, '006-black panther.svg'),
(7, '007-wild boar.svg'),
(8, '008-buffalo.svg'),
(9, '009-bug.svg'),
(10, '010-bull.svg'),
(11, '011-bulldog.svg'),
(12, '012-camel.svg'),
(13, '013-cat.svg'),
(14, '014-cow.svg'),
(15, '015-crocodile.svg'),
(16, '016-dragon.svg'),
(17, '017-elephant.svg'),
(18, '018-fox.svg'),
(19, '019-frog.svg'),
(20, '020-german shepherd.svg'),
(21, '021-giraffe.svg'),
(22, '022-goat.svg'),
(23, '023-gorilla.svg'),
(24, '024-hawk.svg'),
(25, '025-hedgehog.svg'),
(26, '026-hippo.svg'),
(27, '027-horse.svg'),
(28, '028-husky.svg'),
(29, '029-hyena.svg'),
(30, '030-kangaroo.svg'),
(31, '031-koala.svg'),
(32, '032-sloth.svg'),
(33, '033-leopard.svg'),
(34, '034-lion.svg'),
(35, '035-cat.svg'),
(36, '036-mandrill.svg'),
(37, '037-monkey.svg'),
(38, '038-walrus.svg'),
(39, '039-mouse.svg'),
(40, '040-octopus.svg'),
(41, '041-ostrich.svg'),
(42, '042-owl.svg'),
(43, '043-panda.svg'),
(44, '044-parrot.svg'),
(45, '045-penguin.svg'),
(46, '046-pig.svg'),
(47, '047-puma.svg'),
(48, '048-rabbit.svg'),
(49, '049-racoon.svg'),
(50, '050-reindeer.svg'),
(51, '051-rhino.svg'),
(52, '052-shark.svg'),
(53, '053-sheep.svg'),
(54, '054-snake.svg'),
(55, '055-squirrel.svg'),
(56, '056-tiger.svg'),
(57, '057-unicorn.svg'),
(58, '058-whale.svg'),
(59, '059-wolf.svg'),
(60, '060-zebra.svg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `administrador` tinyint(1) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nombres`, `apellidos`, `fechaNacimiento`, `correo`, `contrasena`, `administrador`, `estado`) VALUES
(1, 'Administrador', 'del Sistema', '2000-01-01', 'administrador@administrador.com', 'contrasena', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatares`
--
ALTER TABLE `avatares`
  ADD PRIMARY KEY (`idAvatar`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `avatares`
--
ALTER TABLE `avatares`
  MODIFY `idAvatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

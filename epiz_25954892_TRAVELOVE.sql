-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-06-2020 a las 09:58:04
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `epiz_25954892_travelove`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(15) NOT NULL,
  `apellido_m` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(10) NOT NULL,
  `puesto` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `direccion`, `telefono`, `puesto`) VALUES
(1, 'Ernesto', 'Amaya', 'Rocha', 'ernestoar23@gmail.com', 'Fracc. Benito Juarez #124', 6181413614, 'Gerente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `idgen` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf32_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_spanish2_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`idgen`, `nombre`) VALUES
(1, 'HOMBRE'),
(2, 'MUJER');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hoteles`
--

CREATE TABLE `hoteles` (
  `id_hotel` int(11) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `telefono` bigint(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `hoteles`
--

INSERT INTO `hoteles` (`id_hotel`, `nombre`, `direccion`, `descripcion`, `telefono`) VALUES
(1, 'Holiday Inn', 'Av. Playa Gaviotas 220, Zona Dorada, 82110 Mazatlá', 'Hotel de lujo 4 estrellas', 6663390500),
(2, 'Don pelayo', 'mazatlan malecon 376', 'hotel rico rico', 6694582452);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservaciones`
--

CREATE TABLE `reservaciones` (
  `id_reserv` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `destino1` varchar(40) NOT NULL,
  `fecha_ida1` date NOT NULL,
  `fecha_regreso1` date NOT NULL,
  `costo1` decimal(10,2) NOT NULL,
  `hotel1` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `num_asientos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(15) NOT NULL,
  `apellido_m` varchar(15) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `fecha_nac` int(11) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `fecha_registros` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `apellido_p`, `apellido_m`, `genero`, `correo`, `contrasenia`, `fecha_nac`, `telefono`, `tipo`, `fecha_registros`) VALUES
(1, 'Ernesto', 'jkh', 'jhhuju', '', 'ernestoar23@gmail.com', '2234567', 20200626, '6181413614', 'usuario', '0000-00-00 00:00:00'),
(2, 'Misael', 'jkh', 'Rocha', '', 'misa.viam@gmail.com', '12345abcd', 20200630, '612368900', 'admin', '2020-06-20 16:36:21'),
(3, 'Ernesto', 'Tapia', 'Vazquez', '', 'tapialoco@gmail.com', 'tapia123', 20011201, '6187894563', 'admin', '2020-06-20 19:12:40'),
(4, 'P', 'P', 'P', '2', 'P', 'P', 18, '', '', '2020-06-22 01:25:23'),
(5, 'm', 'm', 'm', '1', 'm', 'm', 4, '6888', 'usuario', '2020-06-22 01:29:11'),
(6, 'L', 'L', 'L', '', 'L', '', 0, '', NULL, '2020-06-22 01:32:51'),
(7, 'Y', 'Y', 'Y', '', 'Y', 'Y', 0, '', NULL, '2020-06-22 01:33:56'),
(8, 'T', 'T', 'T', '', 'T', 'T', 18, '', NULL, '2020-06-22 01:34:40'),
(9, 'B', 'B', 'B', '1', 'B', 'B', 18, '', NULL, '2020-06-22 01:35:33'),
(10, 'J', 'J', 'J', '2', 'J', 'J', 18, '68', NULL, '2020-06-22 01:38:57'),
(11, 'K', 'K', 'K', '2', 'K', 'K', 23, '69', NULL, '2020-06-22 01:39:13'),
(12, 'o', 'o', 'o', '1', 'o', 'o', 59, '8', NULL, '2020-06-22 01:41:41'),
(13, 'n', 'n', 'n', '1', 'n', 'n', 21, 'n', 'usuario', '2020-06-22 01:43:17'),
(14, 'F', 'F', 'F', '1', 'F', 'F', 23, '69', 'usuario', '2020-06-22 01:44:33'),
(15, 'K', 'K', 'K', '1', 'K', 'K', 20, '6848', 'usuario', '2020-06-22 02:56:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `id_viaje` int(11) NOT NULL,
  `destino` varchar(40) NOT NULL,
  `fecha_ida` date NOT NULL,
  `fecha_regreso` date NOT NULL,
  `descripcion` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `nom_hotel` varchar(40) NOT NULL,
  `asientos_disponibles` int(11) NOT NULL,
  `encargado1` int(11) NOT NULL,
  `encargado2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`idgen`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `nombre_2` (`nombre`);

--
-- Indices de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD PRIMARY KEY (`id_reserv`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `destino1` (`destino1`),
  ADD KEY `fecha_ida1` (`fecha_ida1`,`fecha_regreso1`),
  ADD KEY `costo1` (`costo1`,`hotel1`),
  ADD KEY `hotel1` (`hotel1`),
  ADD KEY `fecha_regreso1` (`fecha_regreso1`),
  ADD KEY `fecha_regreso1_2` (`fecha_regreso1`);

--
-- Indices de la tabla `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`),
  ADD KEY `num_asientos` (`num_asientos`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`id_viaje`),
  ADD KEY `encargado1` (`encargado1`),
  ADD KEY `encargado2` (`encargado2`),
  ADD KEY `nom_hotel` (`nom_hotel`),
  ADD KEY `destino` (`destino`,`fecha_ida`,`fecha_regreso`,`precio`),
  ADD KEY `asientos_disponibles` (`asientos_disponibles`),
  ADD KEY `fecha_ida` (`fecha_ida`),
  ADD KEY `precio` (`precio`),
  ADD KEY `fecha_regreso` (`fecha_regreso`),
  ADD KEY `nom_hotel_2` (`nom_hotel`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `idgen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  MODIFY `id_reserv` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transporte`
--
ALTER TABLE `transporte`
  MODIFY `id_transporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `id_viaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

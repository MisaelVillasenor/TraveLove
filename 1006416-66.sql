-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-07-2020 a las 17:11:49
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `1006416-66`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `direccion`, `telefono`, `puesto`) VALUES
(1, 'Miguel', 'Amaya', 'Hernandez', 'miguelh@gmail.com', 'Av. Playa Gaviotas 220, Zona Dorada, 82110', 6182348976, 'Gerente'),
(2, 'Angel', 'Palacios', 'Rivera', 'palaciosa@gmail.com', 'Los Pinos, #224, fracc.Las Alamedas', 618784589, 'Staff'),
(3, 'Pablo', 'Cortez', 'Gonzalez', 'g_paco@gmail.com', 'c. Naranjo, #144, Frac. Las nubes', 6181275644, 'Staff'),
(4, 'David', 'Estrada', 'Rivera', 'E_rivera@gmail.com', 'c. Hojuelas, #124, fracc. Los arbolitos', 6182349087, 'Staff'),
(5, 'Diana', 'Martinez', 'Savedra', 'dianita99@gmail.com', 'c. ortencias, #422, fracc. Del sol', 6181908734, 'Staff');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `num_asientos` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido_p` varchar(15) NOT NULL,
  `apellido_m` varchar(15) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `contrasenia` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` bigint(11) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nombre`, `apellido_p`, `apellido_m`, `correo`, `contrasenia`, `edad`, `telefono`, `tipo`) VALUES
(1, 'Ernesto', 'Amaya', 'Rocha', 'ernestoar23@gmail.com', '12345abcd', 20010123, 6181413614, 'admin'),
(2, 'Keren', 'Corral', 'Salas', 'karo.salas38@gmail.com', 'karitosalas23', 20001226, 6183041146, 'usuario'),
(3, 'Misael', 'Villaseñor', 'Amaya', 'misa.viam@gmail.com', 'misaelito443', 20010404, 6181821754, NULL),
(4, 'Ana', 'Lara', 'Chairez', 'ana_lc21@gmail.com', 'analaurisdidi', 20010221, 6181645122, NULL),
(7, 'Ernesto', 'Rocha', 'gamero', 'dsa@gmail.com', 'neto123', 18, 6181410741, 'usuario');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  ADD PRIMARY KEY (`id_hotel`),
  ADD KEY `nombre` (`nombre`);

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
  ADD KEY `fecha_regreso` (`fecha_regreso`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `hoteles`
--
ALTER TABLE `hoteles`
  MODIFY `id_hotel` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `id_viaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `reservaciones`
--
ALTER TABLE `reservaciones`
  ADD CONSTRAINT `reservaciones_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_user`),
  ADD CONSTRAINT `reservaciones_ibfk_2` FOREIGN KEY (`destino1`) REFERENCES `viajes` (`destino`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_3` FOREIGN KEY (`hotel1`) REFERENCES `viajes` (`nom_hotel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_4` FOREIGN KEY (`fecha_ida1`) REFERENCES `viajes` (`fecha_ida`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_5` FOREIGN KEY (`costo1`) REFERENCES `viajes` (`precio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reservaciones_ibfk_6` FOREIGN KEY (`fecha_regreso1`) REFERENCES `viajes` (`fecha_regreso`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `encargado1` FOREIGN KEY (`encargado1`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `encargado2` FOREIGN KEY (`encargado2`) REFERENCES `empleados` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`nom_hotel`) REFERENCES `hoteles` (`nombre`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `viajes_ibfk_2` FOREIGN KEY (`asientos_disponibles`) REFERENCES `transporte` (`num_asientos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

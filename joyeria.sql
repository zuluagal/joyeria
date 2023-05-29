-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-05-2023 a las 04:33:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `joyeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `Id_cliente` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telefono` int(11) NOT NULL,
  `Id_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cliente`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `Id_detalle` int(10) NOT NULL,
  `Cantidad` int(10) NOT NULL,
  `Subtotal` int(10) NOT NULL,
  `Id_facutra` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle`
--

--INSERT INTO `detalle` (`Id_detalle`, `Cantidad`, `Subtotal`, `Id_facutra`) VALUES
--(321, 120, 1221000, 32333);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `Id_factura` int(10) NOT NULL,
  `Fecha_Compra` date NOT NULL,
  `Fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `factura`
--

--INSERT INTO `factura` (`Id_factura`, `Fecha_Compra`, `Fecha_vencimiento`) VALUES
--(321, '2023-05-09', '2024-05-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `joyeria`
--

CREATE TABLE `joyeria` (
  `Id_joyeria` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `joyeria`
--

--INSERT INTO `joyeria` (`Id_joyeria`, `Nombre`) VALUES
--(212, 'GoldenWord');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `usuarios` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `NombreUsuario` varchar(20) NOT NULL,
  `Clave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_producto` int(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Descripcion` varchar(70) NOT NULL,
  `Cantidad_disponible` int(10) NOT NULL,
  `Id_joyeria` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

--INSERT INTO `productos` (`Id_producto`, `Nombre`, `Descripcion`, `Cantidad_disponible`, `Id_joyeria`) VALUES
--(121, 'Anillo ', 'Anillo de oro de 20 kilates con esmeralda incrustada de la mejor calid', 260, 212);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `Id_proveedor` int(11) NOT NULL,
  `Cantidad_producto` int(11) NOT NULL,
  `Id_producto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

--INSERT INTO `proveedor` (`Id_proveedor`, `Cantidad_producto`, `Id_producto`) VALUES
--(344, 323, 121);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`Id_cliente`);
  --ADD KEY `Id_producto` (`Id_producto`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`Id_detalle`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`Id_factura`);

--
-- Indices de la tabla `joyeria`
--
ALTER TABLE `joyeria`
  ADD PRIMARY KEY (`Id_joyeria`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_producto`);
 -- ADD KEY `Id_joyeria` (`Id_joyeria`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`Id_proveedor`);
--  ADD KEY `Id_producto` (`Id_producto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `Id_cliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `Id_detalle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `Id_factura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=322;

--
-- AUTO_INCREMENT de la tabla `joyeria`
--
ALTER TABLE `joyeria`
  MODIFY `Id_joyeria` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_producto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `Id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=345;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cliente`
--
--ALTER TABLE `cliente`
  --ADD CONSTRAINT `cliente_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`);

--
-- Filtros para la tabla `detalle`
--
--ALTER TABLE `detalle`
  --ADD CONSTRAINT `detalle_ibfk_1` FOREIGN KEY (`Id_detalle`) REFERENCES `factura` (`Id_factura`);

--
-- Filtros para la tabla `factura`
--
--ALTER TABLE `factura`
 -- ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`Id_factura`) REFERENCES `cliente` (`Id_cliente`);

--
-- Filtros para la tabla `login`
--
--ALTER TABLE `login`
 -- ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cliente` (`Id_cliente`);

--
-- Filtros para la tabla `productos`
--
--ALTER TABLE `productos`
 -- ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Id_joyeria`) REFERENCES `joyeria` (`Id_joyeria`);

--
-- Filtros para la tabla `proveedor`
--
--ALTER TABLE `proveedor`
 -- ADD CONSTRAINT `proveedor_ibfk_1` FOREIGN KEY (`Id_producto`) REFERENCES `productos` (`Id_producto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

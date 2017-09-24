-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2017 a las 17:03:05
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `oscartita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes_problemas`
--

CREATE TABLE `clientes_problemas` (
  `id` int(11) NOT NULL COMMENT 'id del servicio que solicita el cliente',
  `nombres` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'nombre del cliente que solicita el servicio',
  `apellidos` varchar(30) COLLATE utf8_unicode_ci NOT NULL COMMENT 'apellido del cliente que solicita el servicio',
  `contactos` varchar(60) COLLATE utf8_unicode_ci NOT NULL COMMENT 'numero telefonico del cliente que solicita el servicio',
  `correos` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'correo electronico del cliente que solicita el servicio',
  `marca_modelo` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'la marca, modelo y año del vehiculo del cliente',
  `observaciones` varchar(200) COLLATE utf8_unicode_ci NOT NULL COMMENT 'observaciones del cliente',
  `servicios` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'servicios que solicita el cliente',
  `fecha` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'fecha de la solicitud',
  `estado` int(11) NOT NULL COMMENT 'estado de la solicitud'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clientes_problemas`
--

INSERT INTO `clientes_problemas` (`id`, `nombres`, `apellidos`, `contactos`, `correos`, `marca_modelo`, `observaciones`, `servicios`, `fecha`, `estado`) VALUES
(35, 'Ernesto', 'Escobar', '04168191352', 'escobarmernestoe@hotmail.com', 'jeep, cherokkeee, 2013', 'problemas al arrancar', ' Alternador Escaner Mecanica', '23/09/2017', 0),
(36, 'Fanny', 'Marquez', '04168744552', 'marmontfann@gmail.com', 'Hyundai, elantra del 2002', 'problemas con la correa', ' Mecanica', '23/09/2017', 1),
(37, 'Paola', 'Ponte', '04145784585', 'paolaponte@gmail.com', 'Ford, fiesta 2013', 'Cambio de frenos', ' Mecanica', '23/09/2017', 1),
(38, 'Marlo', 'Montilla', '04165248789', 'marlo.montilla@gmail.com', 'jeep, cherokkeee, 2013', 'problemas al arrancar', ' Alternador', '23/09/2017', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes_problemas`
--
ALTER TABLE `clientes_problemas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes_problemas`
--
ALTER TABLE `clientes_problemas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id del servicio que solicita el cliente', AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

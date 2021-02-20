-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2021 a las 13:50:47
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `employees`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employees`
--

CREATE TABLE `employees` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastName` varchar(50) DEFAULT '""',
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) DEFAULT '""',
  `age` int(50) NOT NULL,
  `streetAddress` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(3) NOT NULL,
  `PC` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `avatar` varchar(100) DEFAULT '"..\\/assets\\/images\\/no-user.png"'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `employees`
--

INSERT INTO `employees` (`id`, `name`, `lastName`, `email`, `gender`, `age`, `streetAddress`, `city`, `state`, `PC`, `phoneNumber`, `avatar`) VALUES
(1, 'Rack', 'Leiff', 'jackon@network.com', 'man', 24, '126', 'San Jose', 'CA', '394221', '7383627627', '\"..\\/assets\\/images\\/no-user.png\"'),
(2, 'John', 'Doe', 'jhondoe@foo.com', 'man', 34, '89', 'New York', 'WA', '09889', '1283645645', '\"..\\/assets\\/images\\/no-user.png\"'),
(3, 'Leila', 'Mills', 'mills@leila.com', 'woman', 29, '55', 'San Diego', 'CA', '098765', '9983632461', '\"..\\/assets\\/images\\/no-user.png\"'),
(4, 'Richard', 'Desmond', 'dismond@foo.com', 'man', 30, '90', 'Salt lake city', 'UT', '457320', '90876987654', '\"..\\/assets\\/images\\/no-user.png\"'),
(5, 'Susan', 'Smith', 'susansmith@baz.com', 'woman', 28, '43', 'Luisville', 'KNT', '445321', '224355488976', '\"..\\/assets\\/images\\/no-user.png\"'),
(6, 'Brad', 'Simpson', 'brad@foo.com', 'man', 40, '128', 'Atlanta', 'GEO', '394221', '6854634522', '\"..\\/assets\\/images\\/no-user.png\"'),
(7, 'Neil', 'Walker', 'walkerneil@baz.com', 'man', 42, '1', 'Nashville', 'TN', '90143', '45372788192', '\"..\\/assets\\/images\\/no-user.png\"'),
(8, 'Robert', 'Thomson', 'jackon@network.com', 'man', 24, '126', 'New Orleans', 'LU', '63281', '91232876454', '\"..\\/assets\\/images\\/no-user.png\"');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

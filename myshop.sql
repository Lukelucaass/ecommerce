-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2023 a las 09:32:40
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `myshop`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_prod` int(11) NOT NULL,
  `nombre_prod` varchar(255) NOT NULL,
  `img_prod` varchar(40) DEFAULT NULL,
  `precio_prod` decimal(10,2) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_prod`, `nombre_prod`, `img_prod`, `precio_prod`, `fecha_creacion`) VALUES
(1, 'Camiseta clásica de algodón', 'camiseta2.jfif', '35000.00', '2023-09-19 02:27:50'),
(2, 'Pantalones vaqueros ajustados', 'denim.jpg', '75000.00', '2023-09-19 02:27:50'),
(3, 'Sudadera con capucha', 'sudadera.jfif', '55000.00', '2023-09-19 02:27:50'),
(4, 'Chaqueta de cuero sintético', 'chaqueta.jfif', '90000.00', '2023-09-19 02:27:50'),
(5, 'Vestido de verano estampado', 'vestido-verano.jfif', '60000.00', '2023-09-19 02:27:50'),
(6, 'Camisa cuadros manga larga', 'camisa-cuadros.jfif', '45000.00', '2023-09-19 02:27:50'),
(7, 'Zapatillas deportivas', 'zapatos.jpg', '80000.00', '2023-09-19 02:27:50'),
(8, 'Blusa elegante de seda', 'blusa-seda.jfif', '70000.00', '2023-09-19 02:27:50'),
(9, 'Pantalones cortos de mezclilla', 'pantalon-corto.jfif', '40000.00', '2023-09-19 02:27:50'),
(10, 'Abrigo de lana clásico', 'abrigo.jfif', '120000.00', '2023-09-19 02:27:50'),
(11, 'Traje de baño', 'traje-baño.jfif', '50000.00', '2023-09-19 02:27:50'),
(12, 'Camiseta polo de estilo casual', 'polo.jfif', '30000.00', '2023-09-19 02:27:50'),
(13, 'Falda plisada de estilo retro', 'falda.jfif', '65000.00', '2023-09-19 02:27:50'),
(14, 'Cinturón de cuero genuino', 'cinturon.jfif', '25000.00', '2023-09-19 02:27:50'),
(15, 'Chaleco acolchado de invierno', 'chaleco.jfif', '85000.00', '2023-09-19 02:27:50'),
(16, 'Sombrero fedora', 'fedora.jfif', '20000.00', '2023-09-19 02:27:50'),
(17, 'Calcetines de colores variados ', 'calcetines.jfif', '15000.00', '2023-09-19 02:27:50'),
(18, 'Chaqueta bomber de moda', 'bomber.jfif', '70000.00', '2023-09-19 02:27:50'),
(19, 'Camiseta sin mangas deportiva', 'sport2.jfif', '35000.00', '2023-09-19 02:27:50'),
(20, 'Jeans de corte recto ', 'jeans.jfif', '60000.00', '2023-09-19 02:27:50');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_prod`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_prod` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

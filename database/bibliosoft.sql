-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2021 a las 06:56:48
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bibliosoft`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `nombre`) VALUES
(1, 'comic'),
(2, 'autografia'),
(3, 'cientificos'),
(4, 'autoayuda'),
(5, 'cuentos'),
(6, 'deporte'),
(7, 'humor'),
(8, 'novelas de culto'),
(9, 'novela historica'),
(10, 'novela de no ficcion'),
(11, 'novela de ficcion'),
(12, 'novela romantica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `nombre` varchar(150) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `autor` varchar(100) NOT NULL,
  `categoria` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`nombre`, `id_libro`, `autor`, `categoria`, `descripcion`, `imagen`) VALUES
('el señor de los anillos', 1, 'j. r. r. tolkien', 11, 'La novela narra el viaje del protagonista principal, Frodo Bolsón, hobbit de la Comarca, para destruir el Anillo Único y la consiguiente guerra que provocará el enemigo para recuperarlo, ya que es la ', 'images/anillo.jpg'),
('harry potter y la piedra filosofal', 2, 'j. k. rowling', 11, 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y el insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vid', 'images/harry.jpg'),
('el codigo da vinci', 3, 'dan brown', 11, 'El Código da Vinci es una novela de suspenso escrita por Dan Brown, esta obra aumentó el interés sobre la especulación del santo grial además cuestionó el papel que se le dio a María Magdalena en el c', 'images/davinci.jpg'),
('la biblia', 4, 'armando j. levoratti', 4, 'libro del pueblo de dios', 'images/biblia.jpg'),
('crepusculo', 5, 'stephenie meyer', 12, 'esta es la historia de Bella, una chica que luego de enamorarse descubre un mundo de vampiros completamente desconocido.', 'images/crepusculo.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `contraseña` varchar(150) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `numeroadministrador` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `contraseña`, `usuario`, `numeroadministrador`) VALUES
(1, '$2y$10$NhRtPAwZkOZUs7XasbyF9Og9QjVl843YifHmqX/o9.wRfqoJebHQG', 'admin@admin', 1),
(2, '$2y$10$LUKgcY8LVNPosjzilDtauOQStjRI0gcV3bz7rRiIpJ/BSBeSaG752', 'noadmin@noadmin', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`id_libro`),
  ADD KEY `libro_categoria` (`categoria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libro_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

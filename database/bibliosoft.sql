-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-07-2021 a las 07:07:45
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
(2, 'Autobiografía'),
(3, 'cientificos'),
(4, 'autoayuda'),
(5, 'cuentos'),
(6, 'deporte'),
(8, 'novelas de culto'),
(10, 'novela de no ficcion'),
(11, 'novela de ficcion'),
(12, 'novela romantica'),
(13, 'libros de historia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id_comentario` int(11) NOT NULL,
  `comentario` varchar(200) NOT NULL,
  `calificacion` int(5) NOT NULL,
  `idlibro` int(11) NOT NULL,
  `usuario` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id_comentario`, `comentario`, `calificacion`, `idlibro`, `usuario`) VALUES
(1, 'AGUANTE SMEAGOL!', 5, 1, 5),
(2, 'prueba', 2, 1, 4);

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
  `imagen` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`nombre`, `id_libro`, `autor`, `categoria`, `descripcion`, `imagen`) VALUES
('el señor de los anillos', 1, 'j. r. r. tolkien', 11, 'La novela narra el viaje del protagonista principal, Frodo Bolsón, hobbit de la Comarca, para destruir el Anillo Único y la consiguiente guerra que provocará el enemigo para recuperarlo, ya que es la ', 'images/anillo.jpg'),
('Harry Potter y la Piedra Filosofal', 2, 'JK Rowling', 11, 'Harry Potter se ha quedado huérfano y vive en casa de sus abominables tíos y el insoportable primo Dudley. Harry se siente muy triste y solo, hasta que un buen día recibe una carta que cambiará su vid', 'images/harry.jpg'),
('el codigo da vinci', 3, 'dan brown', 11, 'El Código da Vinci es una novela de suspenso escrita por Dan Brown, esta obra aumentó el interés sobre la especulación del santo grial además cuestionó el papel que se le dio a María Magdalena en el c', 'images/davinci.jpg'),
('la biblia', 4, 'armando j. levoratti', 4, 'libro del pueblo de dios', 'images/biblia.jpg'),
('crepusculo', 5, 'stephenie meyer', 12, 'esta es la historia de Bella, una chica que luego de enamorarse descubre un mundo de vampiros completamente desconocido.', 'images/crepusculo.jpg'),
('Una Tierra Prometida', 6, 'Obama, Barack', 2, 'Autobiografía de Barack Obama', 'images/obama.jpg'),
('El Gen Egoísta', 7, 'Richard Dawkins', 3, 'Las bases biológicas de nuestra conducta', 'images/gen.jpg'),
('The Amazing Spider-man #1', 8, 'Stan Lee', 1, 'De manera extraoficial han revelado que este cómic podría ser el más vendido del siglo XXI, con casi 600.000 ejemplares, superando así a \"The Amazing Spider-man #583\" del año 2009 donde aparecía el Pr', 'images/spiderman.jpg'),
('Cuentos de la Selva', 9, 'Horacio Quiroga', 5, 'La selva es el escenario y personaje omnipresente de estos cuentos. La selva misionera, con su violencia natural incontenible, frente al hombre, aliado a veces, destructor las más, de esa naturaleza s', 'images/selva.jpg'),
('La Final de nuestras vidas', 10, 'Andres Burgo', 6, 'La final de nuestras vidas es un libro a la altura de lo que hubo en juego entre los dos equipos más grandes de la Argentina durante la edición 2018 de la Copa Libertadores de América.', 'images/final.jpg'),
('A Sangre Fría', 12, 'Truman Capote', 10, 'El pueblo de Holcomb está en las elevadas llanuras trigueras del oeste de Kansas, una zona solitaria que otros habitantes de Kansas llaman `allá`...\" A partir de esta localización precisa, Truman Capo', 'images/sangre.jpg'),
('Los Detectives Salvajes', 13, 'Roberto Bolaño', 8, 'Entre la narrativa detectivesca, la novela de carretera, el relato biográfico y la crónica, Los detectives salvajes está considerada por la crítica y el público internacionales como una de las mejores', 'images/detective.jpg'),
('Autos para pintar', 16, 'Gonzalo Pérez Iriarte', 6, 'Dibujos de autos para pintar', 'images/auto.jpg'),
('Warframe', 18, 'Digital Extreme', 4, 'prueba editar con imagen', 'images/60ee70eca5863.jpg');

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
(2, '$2y$10$LUKgcY8LVNPosjzilDtauOQStjRI0gcV3bz7rRiIpJ/BSBeSaG752', 'noadmin@noadmin', 0),
(4, '$2y$10$0pe4.8KsZKd42uObyF5cGeSc5RJ9N/DC9tUz6fXGdo57rIuWUxtTW', 'lucasexe91@hotmail.com', 0),
(5, '$2y$10$DtMo9hmhhLiJU075PgHzbu9u6.7yXjUQm0piPWOMSnoAUecX63i7q', 'lu@1', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `comentario-libro` (`idlibro`),
  ADD KEY `comentario-usuario` (`usuario`);

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
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `id_libro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentario-libro` FOREIGN KEY (`idlibro`) REFERENCES `libros` (`id_libro`),
  ADD CONSTRAINT `comentario-usuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `libro_categoria` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 28-06-2019 a las 07:43:01
-- Versión del servidor: 5.7.25
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `sodimac`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `osb`
--

CREATE TABLE `osb` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `sku` varchar(10) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `osb`
--

INSERT INTO `osb` (`id`, `marca`, `descripcion`, `sku`, `precio`) VALUES
(1, 'Lousiana Pacific', 'OSB multiplac 8 mm 1,22 x 2,44 m', '46005-2', 6790),
(2, 'Masisa', 'Cierre perimetral 8 mm 1.22x2.44 m', '301004-X', 6990),
(3, 'Lousiana Pacific', 'Tablero OSB estructural 9.5 x 1220 x 2440 mm', '5276-0', 8490),
(4, 'Lousiana Pacific', 'Tablero OSB estructural 11 x 1220 x 2440 mm', '19987-7', 9150),
(9, 'Lousiana Pacific', '11.1 mm x 122x244 cm OSB estructural térmico', '118476-8', 11990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paneles`
--

CREATE TABLE `paneles` (
  `id` int(11) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `descripcion` varchar(30) NOT NULL,
  `sku` varchar(30) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `paneles`
--

INSERT INTO `paneles` (`id`, `marca`, `descripcion`, `sku`, `precio`) VALUES
(1, 'Sippa', 'Panel SIP 72HWRAP', '367436-3', 44990),
(2, 'Sippa', 'Panel SIP 72OSB', '367466-5', 49990),
(3, 'Sippa', 'Panel SIP 92HWRAP', '367425-8', 51990),
(4, 'Sippa', 'Panel SIP 70OSB', '367465-7', 44990),
(5, 'Sippa', 'Panel SIP 75OSB', '367461-4', 46990);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terciado`
--

CREATE TABLE `terciado` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `sku` varchar(100) NOT NULL,
  `precio` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `terciado`
--

INSERT INTO `terciado` (`id`, `marca`, `descripcion`, `sku`, `precio`) VALUES
(1, 'Genérico', '9mm 1.22x2.44m Terciado ranurado W', '90317-5', 11490),
(2, 'Genérico', '18mm 1.20x2.40 m Terciado estructural pino', '65083-8', 15790),
(3, 'Genérico', '12mm 1.22x2.44m Terciado ranurado T1', '54061-7', 17),
(4, 'Genérico', '12mm 1.2x2.4 m Terciado estructural pino', '65075-7', 13),
(5, 'Genérico', '9mm 1.22x2.44 m Terciado estructural pino', '65052-8', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `textos`
--

CREATE TABLE `textos` (
  `id` int(11) NOT NULL,
  `osb` varchar(500) NOT NULL,
  `terciado` varchar(500) NOT NULL,
  `paneles` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `textos`
--

INSERT INTO `textos` (`id`, `osb`, `terciado`, `paneles`) VALUES
(1, 'Los tableros OSB o de fibras orientadas (del inglés: oriented strand board) son tableros formados por sucesivas capas de virutas de varios centímetros, donde cada capa es prensada con las virutas orientadas en la misma dirección, y se van uniendo las capas, al igual que con los tableros contrachapados, de forma perpendicular para conseguir una mayor estabilidad y resistencia, lo que los convierte en muchos ámbitos en una alternativa a la madera maciza.', 'Es un tablero conformado en un 100% por láminas de madera, su interior está compuesto por resinas que se adhieren entre sí a las láminas con sus vetas entrecruzadas, lo que ofrece resistencias mayores que en su estado natural.', ' es un panel estructural y térmico formado por dos placas de madera OSB y un núcleo de poliestireno expandido (EPS) de alta densidad de fabricación propia. TERMOSIP® combina la rigidez de la madera con la ligereza y aislación del poliestireno en un sólo producto de altas prestaciones estructurales y térmicas.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `osb`
--
ALTER TABLE `osb`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paneles`
--
ALTER TABLE `paneles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `terciado`
--
ALTER TABLE `terciado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `textos`
--
ALTER TABLE `textos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `osb`
--
ALTER TABLE `osb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `paneles`
--
ALTER TABLE `paneles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `terciado`
--
ALTER TABLE `terciado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `textos`
--
ALTER TABLE `textos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

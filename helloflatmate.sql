-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-04-2019 a las 12:47:58
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `helloflatmate`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `nombrecliente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cama`
--

CREATE TABLE `cama` (
  `id` int(11) NOT NULL,
  `tipocama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cama`
--

INSERT INTO `cama` (`id`, `tipocama`) VALUES
(1, 'cama doble');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casavacacional`
--

CREATE TABLE `casavacacional` (
  `id` int(11) NOT NULL,
  `casadireccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `casaprecio` int(11) NOT NULL,
  `cantbannos` int(11) NOT NULL,
  `canthabitaciones` int(11) NOT NULL,
  `patio` tinyint(1) NOT NULL,
  `balcon` tinyint(1) NOT NULL,
  `canthuesped` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zona_id` int(11) DEFAULT NULL,
  `centrosalud_id` int(11) DEFAULT NULL,
  `supermercado_id` int(11) DEFAULT NULL,
  `universidad_id` int(11) DEFAULT NULL,
  `servicios_id` int(11) DEFAULT NULL,
  `nombrepromocion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `casavacacional`
--

INSERT INTO `casavacacional` (`id`, `casadireccion`, `casaprecio`, `cantbannos`, `canthabitaciones`, `patio`, `balcon`, `canthuesped`, `descripcion`, `zona_id`, `centrosalud_id`, `supermercado_id`, `universidad_id`, `servicios_id`, `nombrepromocion`) VALUES
(1, 'calle 25 entre e y f', 280, 3, 4, 1, 1, 8, 'la casa mejor del vedado', 1, 1, 1, 1, 1, 'la casa expectacular');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centrosalud`
--

CREATE TABLE `centrosalud` (
  `id` int(11) NOT NULL,
  `nombrecentro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `centrosalud`
--

INSERT INTO `centrosalud` (`id`, `nombrecentro`) VALUES
(1, 'hospital valencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contrasena` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellidos`, `correo`, `contrasena`) VALUES
(1, 'Sergio', 'Alonso', 'sergio@mes.gob.cu', '12345');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `asunto` tinyint(1) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitaciones`
--

CREATE TABLE `habitaciones` (
  `id` int(11) NOT NULL,
  `cantcamas` int(11) NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disponible` tinyint(1) NOT NULL,
  `cama_id` int(11) DEFAULT NULL,
  `servicios_id` int(11) DEFAULT NULL,
  `nombrepromocion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `habitaciones`
--

INSERT INTO `habitaciones` (`id`, `cantcamas`, `descripcion`, `disponible`, `cama_id`, `servicios_id`, `nombrepromocion`) VALUES
(1, 1, 'la mejor habitacion en el cento', 1, 1, 1, 'la Mejor Habitacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20190422181601', '2019-04-25 23:39:52'),
('20190423212520', '2019-04-25 23:39:54'),
('20190424143042', '2019-04-25 23:39:59'),
('20190424160716', '2019-04-25 23:40:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `piso`
--

CREATE TABLE `piso` (
  `id` int(11) NOT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `canthabitaciones` int(11) NOT NULL,
  `cantbannos` int(11) NOT NULL,
  `pisopatio` tinyint(1) NOT NULL,
  `pisobalcon` tinyint(1) NOT NULL,
  `chicas` tinyint(1) NOT NULL,
  `pisocanthuesped` int(11) NOT NULL,
  `zona_id` int(11) DEFAULT NULL,
  `habitaciones_id` int(11) DEFAULT NULL,
  `centrosalud_id` int(11) DEFAULT NULL,
  `supermercado_id` int(11) DEFAULT NULL,
  `universidad_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(11) NOT NULL,
  `fechainicio` date NOT NULL,
  `fechafin` date NOT NULL,
  `pasaporte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sexo` tinyint(1) NOT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cliente_id` int(11) DEFAULT NULL,
  `casavacacional_id` int(11) DEFAULT NULL,
  `habitaciones_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `fechainicio`, `fechafin`, `pasaporte`, `sexo`, `telefono`, `descripcion`, `cliente_id`, `casavacacional_id`, `habitaciones_id`) VALUES
(1, '2022-08-04', '2022-08-08', 'ef4578', 1, '78326023', 'el cliente salvaje', 1, 1, NULL),
(2, '2014-01-01', '2014-01-01', 'ef4578', 0, '78326023', 'el cliente salvaje', 1, NULL, 1),
(3, '2017-04-18', '2020-05-04', '00000', 1, '78326023', 'Espero una buena bienvenida', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicioadicional`
--

CREATE TABLE `servicioadicional` (
  `id` int(11) NOT NULL,
  `nombreservicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `servicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`id`, `servicio`) VALUES
(1, 'wifi');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supermercado`
--

CREATE TABLE `supermercado` (
  `id` int(11) NOT NULL,
  `nombresuper` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `supermercado`
--

INSERT INTO `supermercado` (`id`, `nombresuper`) VALUES
(1, 'super nacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `universidad`
--

CREATE TABLE `universidad` (
  `id` int(11) NOT NULL,
  `nombreuniversidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `universidad`
--

INSERT INTO `universidad` (`id`, `nombreuniversidad`) VALUES
(1, 'Universidad tecnologica'),
(3, 'universidad catolica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id` int(11) NOT NULL,
  `nombrezona` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id`, `nombrezona`) VALUES
(1, 'centro'),
(2, 'centro');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cama`
--
ALTER TABLE `cama`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casavacacional`
--
ALTER TABLE `casavacacional`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_F0AA5401104EA8FC` (`zona_id`),
  ADD KEY `IDX_F0AA5401A07B3205` (`centrosalud_id`),
  ADD KEY `IDX_F0AA540131EC9F0F` (`supermercado_id`),
  ADD KEY `IDX_F0AA5401271768CD` (`universidad_id`),
  ADD KEY `IDX_F0AA5401D96E005D` (`servicios_id`);

--
-- Indices de la tabla `centrosalud`
--
ALTER TABLE `centrosalud`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E10783B9FA26A41` (`cama_id`),
  ADD KEY `IDX_E10783BD96E005D` (`servicios_id`);

--
-- Indices de la tabla `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `piso`
--
ALTER TABLE `piso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_D462D9D3104EA8FC` (`zona_id`),
  ADD KEY `IDX_D462D9D3B42E2CD5` (`habitaciones_id`),
  ADD KEY `IDX_D462D9D3A07B3205` (`centrosalud_id`),
  ADD KEY `IDX_D462D9D331EC9F0F` (`supermercado_id`),
  ADD KEY `IDX_D462D9D3271768CD` (`universidad_id`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_188D2E3BDE734E51` (`cliente_id`),
  ADD KEY `IDX_188D2E3B8F577D51` (`casavacacional_id`),
  ADD KEY `IDX_188D2E3BB42E2CD5` (`habitaciones_id`);

--
-- Indices de la tabla `servicioadicional`
--
ALTER TABLE `servicioadicional`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `universidad`
--
ALTER TABLE `universidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cama`
--
ALTER TABLE `cama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `casavacacional`
--
ALTER TABLE `casavacacional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `centrosalud`
--
ALTER TABLE `centrosalud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `piso`
--
ALTER TABLE `piso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `servicioadicional`
--
ALTER TABLE `servicioadicional`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `supermercado`
--
ALTER TABLE `supermercado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `universidad`
--
ALTER TABLE `universidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casavacacional`
--
ALTER TABLE `casavacacional`
  ADD CONSTRAINT `FK_F0AA5401104EA8FC` FOREIGN KEY (`zona_id`) REFERENCES `zona` (`id`),
  ADD CONSTRAINT `FK_F0AA5401271768CD` FOREIGN KEY (`universidad_id`) REFERENCES `universidad` (`id`),
  ADD CONSTRAINT `FK_F0AA540131EC9F0F` FOREIGN KEY (`supermercado_id`) REFERENCES `supermercado` (`id`),
  ADD CONSTRAINT `FK_F0AA5401A07B3205` FOREIGN KEY (`centrosalud_id`) REFERENCES `centrosalud` (`id`),
  ADD CONSTRAINT `FK_F0AA5401D96E005D` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `habitaciones`
--
ALTER TABLE `habitaciones`
  ADD CONSTRAINT `FK_E10783B9FA26A41` FOREIGN KEY (`cama_id`) REFERENCES `cama` (`id`),
  ADD CONSTRAINT `FK_E10783BD96E005D` FOREIGN KEY (`servicios_id`) REFERENCES `servicios` (`id`);

--
-- Filtros para la tabla `piso`
--
ALTER TABLE `piso`
  ADD CONSTRAINT `FK_D462D9D3104EA8FC` FOREIGN KEY (`zona_id`) REFERENCES `zona` (`id`),
  ADD CONSTRAINT `FK_D462D9D3271768CD` FOREIGN KEY (`universidad_id`) REFERENCES `universidad` (`id`),
  ADD CONSTRAINT `FK_D462D9D331EC9F0F` FOREIGN KEY (`supermercado_id`) REFERENCES `supermercado` (`id`),
  ADD CONSTRAINT `FK_D462D9D3A07B3205` FOREIGN KEY (`centrosalud_id`) REFERENCES `centrosalud` (`id`),
  ADD CONSTRAINT `FK_D462D9D3B42E2CD5` FOREIGN KEY (`habitaciones_id`) REFERENCES `habitaciones` (`id`);

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `FK_188D2E3B8F577D51` FOREIGN KEY (`casavacacional_id`) REFERENCES `casavacacional` (`id`),
  ADD CONSTRAINT `FK_188D2E3BB42E2CD5` FOREIGN KEY (`habitaciones_id`) REFERENCES `habitaciones` (`id`),
  ADD CONSTRAINT `FK_188D2E3BDE734E51` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

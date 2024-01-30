
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motd`
--

CREATE TABLE `motd` (
  `realmid` int NOT NULL,
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `motd`
--

TRUNCATE TABLE `motd`;
--
-- Volcado de datos para la tabla `motd`
--

INSERT INTO `motd` (`realmid`, `text`) VALUES
(-1, 'Welcome to an AzerothCore server.');

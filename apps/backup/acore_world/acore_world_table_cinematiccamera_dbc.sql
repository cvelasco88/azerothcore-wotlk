
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinematiccamera_dbc`
--

CREATE TABLE `cinematiccamera_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `model` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `soundEntry` int NOT NULL DEFAULT '0',
  `locationX` float NOT NULL DEFAULT '0',
  `locationY` float NOT NULL DEFAULT '0',
  `locationZ` float NOT NULL DEFAULT '0',
  `rotation` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Cinematic camera DBC';

--
-- Truncar tablas antes de insertar `cinematiccamera_dbc`
--

TRUNCATE TABLE `cinematiccamera_dbc`;
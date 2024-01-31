
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportanimation_dbc`
--

CREATE TABLE `transportanimation_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `TransportID` int NOT NULL DEFAULT '0',
  `TimeIndex` int NOT NULL DEFAULT '0',
  `PosX` float NOT NULL DEFAULT '0',
  `PosY` float NOT NULL DEFAULT '0',
  `PosZ` float NOT NULL DEFAULT '0',
  `SequenceID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `transportanimation_dbc`
--

TRUNCATE TABLE `transportanimation_dbc`;
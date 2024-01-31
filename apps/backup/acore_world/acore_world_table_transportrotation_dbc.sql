
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transportrotation_dbc`
--

CREATE TABLE `transportrotation_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `GameObjectsID` int NOT NULL DEFAULT '0',
  `TimeIndex` int NOT NULL DEFAULT '0',
  `RotX` float NOT NULL DEFAULT '0',
  `RotY` float NOT NULL DEFAULT '0',
  `RotZ` float NOT NULL DEFAULT '0',
  `RotW` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `transportrotation_dbc`
--

TRUNCATE TABLE `transportrotation_dbc`;
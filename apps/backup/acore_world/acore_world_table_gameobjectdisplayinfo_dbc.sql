
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gameobjectdisplayinfo_dbc`
--

CREATE TABLE `gameobjectdisplayinfo_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `ModelName` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Sound_1` int NOT NULL DEFAULT '0',
  `Sound_2` int NOT NULL DEFAULT '0',
  `Sound_3` int NOT NULL DEFAULT '0',
  `Sound_4` int NOT NULL DEFAULT '0',
  `Sound_5` int NOT NULL DEFAULT '0',
  `Sound_6` int NOT NULL DEFAULT '0',
  `Sound_7` int NOT NULL DEFAULT '0',
  `Sound_8` int NOT NULL DEFAULT '0',
  `Sound_9` int NOT NULL DEFAULT '0',
  `Sound_10` int NOT NULL DEFAULT '0',
  `GeoBoxMinX` float NOT NULL DEFAULT '0',
  `GeoBoxMinY` float NOT NULL DEFAULT '0',
  `GeoBoxMinZ` float NOT NULL DEFAULT '0',
  `GeoBoxMaxX` float NOT NULL DEFAULT '0',
  `GeoBoxMaxY` float NOT NULL DEFAULT '0',
  `GeoBoxMaxZ` float NOT NULL DEFAULT '0',
  `ObjectEffectPackageID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `gameobjectdisplayinfo_dbc`
--

TRUNCATE TABLE `gameobjectdisplayinfo_dbc`;
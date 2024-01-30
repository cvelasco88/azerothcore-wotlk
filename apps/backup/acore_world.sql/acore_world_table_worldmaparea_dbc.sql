
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worldmaparea_dbc`
--

CREATE TABLE `worldmaparea_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `MapID` int NOT NULL DEFAULT '0',
  `AreaID` int NOT NULL DEFAULT '0',
  `AreaName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LocLeft` float NOT NULL DEFAULT '0',
  `LocRight` float NOT NULL DEFAULT '0',
  `LocTop` float NOT NULL DEFAULT '0',
  `LocBottom` float NOT NULL DEFAULT '0',
  `DisplayMapID` int NOT NULL DEFAULT '0',
  `DefaultDungeonFloor` int NOT NULL DEFAULT '0',
  `ParentWorldMapID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `worldmaparea_dbc`
--

TRUNCATE TABLE `worldmaparea_dbc`;
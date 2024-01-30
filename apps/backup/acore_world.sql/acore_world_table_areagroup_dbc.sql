
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areagroup_dbc`
--

CREATE TABLE `areagroup_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `AreaID_1` int NOT NULL DEFAULT '0',
  `AreaID_2` int NOT NULL DEFAULT '0',
  `AreaID_3` int NOT NULL DEFAULT '0',
  `AreaID_4` int NOT NULL DEFAULT '0',
  `AreaID_5` int NOT NULL DEFAULT '0',
  `AreaID_6` int NOT NULL DEFAULT '0',
  `NextAreaID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `areagroup_dbc`
--

TRUNCATE TABLE `areagroup_dbc`;
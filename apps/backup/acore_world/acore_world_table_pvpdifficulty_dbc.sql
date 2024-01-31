
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvpdifficulty_dbc`
--

CREATE TABLE `pvpdifficulty_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `MapID` int NOT NULL DEFAULT '0',
  `RangeIndex` int NOT NULL DEFAULT '0',
  `MinLevel` int NOT NULL DEFAULT '0',
  `MaxLevel` int NOT NULL DEFAULT '0',
  `Difficulty` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `pvpdifficulty_dbc`
--

TRUNCATE TABLE `pvpdifficulty_dbc`;
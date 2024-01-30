
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `summonproperties_dbc`
--

CREATE TABLE `summonproperties_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Control` int NOT NULL DEFAULT '0',
  `Faction` int NOT NULL DEFAULT '0',
  `Title` int NOT NULL DEFAULT '0',
  `Slot` int NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `summonproperties_dbc`
--

TRUNCATE TABLE `summonproperties_dbc`;
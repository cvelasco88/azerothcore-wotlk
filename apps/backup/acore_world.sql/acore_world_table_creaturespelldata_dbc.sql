
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creaturespelldata_dbc`
--

CREATE TABLE `creaturespelldata_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Spells_1` int NOT NULL DEFAULT '0',
  `Spells_2` int NOT NULL DEFAULT '0',
  `Spells_3` int NOT NULL DEFAULT '0',
  `Spells_4` int NOT NULL DEFAULT '0',
  `Availability_1` int NOT NULL DEFAULT '0',
  `Availability_2` int NOT NULL DEFAULT '0',
  `Availability_3` int NOT NULL DEFAULT '0',
  `Availability_4` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `creaturespelldata_dbc`
--

TRUNCATE TABLE `creaturespelldata_dbc`;
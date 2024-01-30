
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellduration_dbc`
--

CREATE TABLE `spellduration_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Duration` int NOT NULL DEFAULT '0',
  `DurationPerLevel` int NOT NULL DEFAULT '0',
  `MaxDuration` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellduration_dbc`
--

TRUNCATE TABLE `spellduration_dbc`;
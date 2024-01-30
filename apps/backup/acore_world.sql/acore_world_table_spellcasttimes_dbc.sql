
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellcasttimes_dbc`
--

CREATE TABLE `spellcasttimes_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Base` int NOT NULL DEFAULT '0',
  `PerLevel` int NOT NULL DEFAULT '0',
  `Minimum` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellcasttimes_dbc`
--

TRUNCATE TABLE `spellcasttimes_dbc`;
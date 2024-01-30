
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellradius_dbc`
--

CREATE TABLE `spellradius_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Radius` float NOT NULL DEFAULT '0',
  `RadiusPerLevel` float NOT NULL DEFAULT '0',
  `RadiusMax` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellradius_dbc`
--

TRUNCATE TABLE `spellradius_dbc`;
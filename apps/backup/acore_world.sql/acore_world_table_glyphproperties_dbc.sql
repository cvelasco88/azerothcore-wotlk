
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `glyphproperties_dbc`
--

CREATE TABLE `glyphproperties_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `SpellID` int NOT NULL DEFAULT '0',
  `GlyphSlotFlags` int NOT NULL DEFAULT '0',
  `SpellIconID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `glyphproperties_dbc`
--

TRUNCATE TABLE `glyphproperties_dbc`;
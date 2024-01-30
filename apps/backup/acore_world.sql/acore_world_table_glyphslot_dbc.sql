
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `glyphslot_dbc`
--

CREATE TABLE `glyphslot_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Type` int NOT NULL DEFAULT '0',
  `Tooltip` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `glyphslot_dbc`
--

TRUNCATE TABLE `glyphslot_dbc`;
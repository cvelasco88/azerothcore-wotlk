
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellrunecost_dbc`
--

CREATE TABLE `spellrunecost_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Blood` int NOT NULL DEFAULT '0',
  `Unholy` int NOT NULL DEFAULT '0',
  `Frost` int NOT NULL DEFAULT '0',
  `RunicPower` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellrunecost_dbc`
--

TRUNCATE TABLE `spellrunecost_dbc`;
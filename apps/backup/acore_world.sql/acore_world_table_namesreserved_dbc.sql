
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `namesreserved_dbc`
--

CREATE TABLE `namesreserved_dbc` (
  `ID` int UNSIGNED NOT NULL,
  `Pattern` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LanguagueID` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `namesreserved_dbc`
--

TRUNCATE TABLE `namesreserved_dbc`;
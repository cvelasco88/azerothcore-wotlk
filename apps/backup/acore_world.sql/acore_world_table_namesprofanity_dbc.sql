
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `namesprofanity_dbc`
--

CREATE TABLE `namesprofanity_dbc` (
  `ID` int UNSIGNED NOT NULL,
  `Pattern` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LanguagueID` tinyint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `namesprofanity_dbc`
--

TRUNCATE TABLE `namesprofanity_dbc`;
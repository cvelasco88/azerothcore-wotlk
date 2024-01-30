
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_achievement_progress`
--

CREATE TABLE `character_achievement_progress` (
  `guid` int UNSIGNED NOT NULL,
  `criteria` smallint UNSIGNED NOT NULL,
  `counter` int UNSIGNED NOT NULL,
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_achievement_progress`
--

TRUNCATE TABLE `character_achievement_progress`;
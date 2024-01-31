
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_arena_stats`
--

CREATE TABLE `character_arena_stats` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `slot` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `matchMakerRating` smallint UNSIGNED NOT NULL DEFAULT '0',
  `maxMMR` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_arena_stats`
--

TRUNCATE TABLE `character_arena_stats`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_skills`
--

CREATE TABLE `character_skills` (
  `guid` int UNSIGNED NOT NULL COMMENT 'Global Unique Identifier',
  `skill` smallint UNSIGNED NOT NULL,
  `value` smallint UNSIGNED NOT NULL,
  `max` smallint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_skills`
--

TRUNCATE TABLE `character_skills`;
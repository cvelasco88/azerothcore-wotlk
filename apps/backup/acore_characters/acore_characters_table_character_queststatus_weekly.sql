
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_queststatus_weekly`
--

CREATE TABLE `character_queststatus_weekly` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_queststatus_weekly`
--

TRUNCATE TABLE `character_queststatus_weekly`;
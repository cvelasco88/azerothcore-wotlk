
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_queststatus_daily`
--

CREATE TABLE `character_queststatus_daily` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier',
  `time` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_queststatus_daily`
--

TRUNCATE TABLE `character_queststatus_daily`;
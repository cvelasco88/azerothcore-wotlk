
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_queststatus_rewarded`
--

CREATE TABLE `character_queststatus_rewarded` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier',
  `active` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_queststatus_rewarded`
--

TRUNCATE TABLE `character_queststatus_rewarded`;
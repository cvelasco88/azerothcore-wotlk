
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_queststatus_seasonal`
--

CREATE TABLE `character_queststatus_seasonal` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier',
  `event` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Event Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_queststatus_seasonal`
--

TRUNCATE TABLE `character_queststatus_seasonal`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_queststatus`
--

CREATE TABLE `character_queststatus` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier',
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `explored` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `timer` int UNSIGNED NOT NULL DEFAULT '0',
  `mobcount1` smallint UNSIGNED NOT NULL DEFAULT '0',
  `mobcount2` smallint UNSIGNED NOT NULL DEFAULT '0',
  `mobcount3` smallint UNSIGNED NOT NULL DEFAULT '0',
  `mobcount4` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount1` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount2` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount3` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount4` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount5` smallint UNSIGNED NOT NULL DEFAULT '0',
  `itemcount6` smallint UNSIGNED NOT NULL DEFAULT '0',
  `playercount` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_queststatus`
--

TRUNCATE TABLE `character_queststatus`;
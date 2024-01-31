
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_homebind`
--

CREATE TABLE `character_homebind` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `mapId` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Map Identifier',
  `zoneId` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Zone Identifier',
  `posX` float NOT NULL DEFAULT '0',
  `posY` float NOT NULL DEFAULT '0',
  `posZ` float NOT NULL DEFAULT '0',
  `posO` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_homebind`
--

TRUNCATE TABLE `character_homebind`;
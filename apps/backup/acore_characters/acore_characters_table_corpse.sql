
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corpse`
--

CREATE TABLE `corpse` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Character Global Unique Identifier',
  `posX` float NOT NULL DEFAULT '0',
  `posY` float NOT NULL DEFAULT '0',
  `posZ` float NOT NULL DEFAULT '0',
  `orientation` float NOT NULL DEFAULT '0',
  `mapId` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Map Identifier',
  `phaseMask` int UNSIGNED NOT NULL DEFAULT '1',
  `displayId` int UNSIGNED NOT NULL DEFAULT '0',
  `itemCache` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bytes1` int UNSIGNED NOT NULL DEFAULT '0',
  `bytes2` int UNSIGNED NOT NULL DEFAULT '0',
  `guildId` int UNSIGNED NOT NULL DEFAULT '0',
  `flags` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `dynFlags` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `corpseType` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `instanceId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Instance Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Death System';

--
-- Truncar tablas antes de insertar `corpse`
--

TRUNCATE TABLE `corpse`;
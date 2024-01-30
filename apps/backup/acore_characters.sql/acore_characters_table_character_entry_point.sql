
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_entry_point`
--

CREATE TABLE `character_entry_point` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `joinX` float NOT NULL DEFAULT '0',
  `joinY` float NOT NULL DEFAULT '0',
  `joinZ` float NOT NULL DEFAULT '0',
  `joinO` float NOT NULL DEFAULT '0',
  `joinMapId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Map Identifier',
  `taxiPath0` int UNSIGNED NOT NULL DEFAULT '0',
  `taxiPath1` int UNSIGNED NOT NULL DEFAULT '0',
  `mountSpell` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_entry_point`
--

TRUNCATE TABLE `character_entry_point`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creature_respawn`
--

CREATE TABLE `creature_respawn` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `respawnTime` int UNSIGNED NOT NULL DEFAULT '0',
  `mapId` smallint UNSIGNED NOT NULL DEFAULT '0',
  `instanceId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Instance Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Grid Loading System';

--
-- Truncar tablas antes de insertar `creature_respawn`
--

TRUNCATE TABLE `creature_respawn`;
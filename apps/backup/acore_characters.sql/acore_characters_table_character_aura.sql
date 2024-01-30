
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_aura`
--

CREATE TABLE `character_aura` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `casterGuid` bigint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Full Global Unique Identifier',
  `itemGuid` bigint UNSIGNED NOT NULL DEFAULT '0',
  `spell` int UNSIGNED NOT NULL DEFAULT '0',
  `effectMask` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `recalculateMask` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `stackCount` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `amount0` int NOT NULL DEFAULT '0',
  `amount1` int NOT NULL DEFAULT '0',
  `amount2` int NOT NULL DEFAULT '0',
  `base_amount0` int NOT NULL DEFAULT '0',
  `base_amount1` int NOT NULL DEFAULT '0',
  `base_amount2` int NOT NULL DEFAULT '0',
  `maxDuration` int NOT NULL DEFAULT '0',
  `remainTime` int NOT NULL DEFAULT '0',
  `remainCharges` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_aura`
--

TRUNCATE TABLE `character_aura`;
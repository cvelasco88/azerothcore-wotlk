
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_aura`
--

CREATE TABLE `pet_aura` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `casterGuid` bigint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Full Global Unique Identifier',
  `spell` int UNSIGNED NOT NULL DEFAULT '0',
  `effectMask` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `recalculateMask` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `stackCount` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `amount0` int DEFAULT NULL,
  `amount1` int DEFAULT NULL,
  `amount2` int DEFAULT NULL,
  `base_amount0` int DEFAULT NULL,
  `base_amount1` int DEFAULT NULL,
  `base_amount2` int DEFAULT NULL,
  `maxDuration` int NOT NULL DEFAULT '0',
  `remainTime` int NOT NULL DEFAULT '0',
  `remainCharges` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Pet System';

--
-- Truncar tablas antes de insertar `pet_aura`
--

TRUNCATE TABLE `pet_aura`;
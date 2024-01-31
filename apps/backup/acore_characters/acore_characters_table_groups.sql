
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `guid` int UNSIGNED NOT NULL,
  `leaderGuid` int UNSIGNED NOT NULL,
  `lootMethod` tinyint UNSIGNED NOT NULL,
  `looterGuid` int UNSIGNED NOT NULL,
  `lootThreshold` tinyint UNSIGNED NOT NULL,
  `icon1` bigint UNSIGNED NOT NULL,
  `icon2` bigint UNSIGNED NOT NULL,
  `icon3` bigint UNSIGNED NOT NULL,
  `icon4` bigint UNSIGNED NOT NULL,
  `icon5` bigint UNSIGNED NOT NULL,
  `icon6` bigint UNSIGNED NOT NULL,
  `icon7` bigint UNSIGNED NOT NULL,
  `icon8` bigint UNSIGNED NOT NULL,
  `groupType` tinyint UNSIGNED NOT NULL,
  `difficulty` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `raidDifficulty` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `masterLooterGuid` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Groups';

--
-- Truncar tablas antes de insertar `groups`
--

TRUNCATE TABLE `groups`;
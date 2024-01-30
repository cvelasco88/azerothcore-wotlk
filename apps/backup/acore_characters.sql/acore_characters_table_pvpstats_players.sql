
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvpstats_players`
--

CREATE TABLE `pvpstats_players` (
  `battleground_id` bigint UNSIGNED NOT NULL,
  `character_guid` int UNSIGNED NOT NULL,
  `winner` bit(1) NOT NULL,
  `score_killing_blows` int UNSIGNED DEFAULT NULL,
  `score_deaths` int UNSIGNED DEFAULT NULL,
  `score_honorable_kills` int UNSIGNED DEFAULT NULL,
  `score_bonus_honor` int UNSIGNED DEFAULT NULL,
  `score_damage_done` int UNSIGNED DEFAULT NULL,
  `score_healing_done` int UNSIGNED DEFAULT NULL,
  `attr_1` int UNSIGNED DEFAULT '0',
  `attr_2` int UNSIGNED DEFAULT '0',
  `attr_3` int UNSIGNED DEFAULT '0',
  `attr_4` int UNSIGNED DEFAULT '0',
  `attr_5` int UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `pvpstats_players`
--

TRUNCATE TABLE `pvpstats_players`;
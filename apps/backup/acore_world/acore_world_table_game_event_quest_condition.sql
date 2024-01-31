
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_quest_condition`
--

CREATE TABLE `game_event_quest_condition` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event.',
  `quest` int UNSIGNED NOT NULL DEFAULT '0',
  `condition_id` int UNSIGNED NOT NULL DEFAULT '0',
  `num` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_quest_condition`
--

TRUNCATE TABLE `game_event_quest_condition`;
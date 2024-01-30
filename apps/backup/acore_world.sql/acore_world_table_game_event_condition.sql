
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_condition`
--

CREATE TABLE `game_event_condition` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event',
  `condition_id` int UNSIGNED NOT NULL DEFAULT '0',
  `req_num` float DEFAULT '0',
  `max_world_state_field` smallint UNSIGNED NOT NULL DEFAULT '0',
  `done_world_state_field` smallint UNSIGNED NOT NULL DEFAULT '0',
  `description` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_condition`
--

TRUNCATE TABLE `game_event_condition`;
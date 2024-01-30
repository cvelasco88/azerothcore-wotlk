
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_model_equip`
--

CREATE TABLE `game_event_model_equip` (
  `eventEntry` tinyint NOT NULL COMMENT 'Entry of the game event.',
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `modelid` int UNSIGNED NOT NULL DEFAULT '0',
  `equipment_id` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_model_equip`
--

TRUNCATE TABLE `game_event_model_equip`;
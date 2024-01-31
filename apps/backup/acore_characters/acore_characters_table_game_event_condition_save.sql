
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_condition_save`
--

CREATE TABLE `game_event_condition_save` (
  `eventEntry` tinyint UNSIGNED NOT NULL,
  `condition_id` int UNSIGNED NOT NULL DEFAULT '0',
  `done` float DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_condition_save`
--

TRUNCATE TABLE `game_event_condition_save`;
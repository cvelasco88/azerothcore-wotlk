
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_save`
--

CREATE TABLE `game_event_save` (
  `eventEntry` tinyint UNSIGNED NOT NULL,
  `state` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `next_start` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_save`
--

TRUNCATE TABLE `game_event_save`;
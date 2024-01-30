
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_prerequisite`
--

CREATE TABLE `game_event_prerequisite` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event',
  `prerequisite_event` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_prerequisite`
--

TRUNCATE TABLE `game_event_prerequisite`;
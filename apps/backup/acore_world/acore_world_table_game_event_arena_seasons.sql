
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_arena_seasons`
--

CREATE TABLE `game_event_arena_seasons` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event',
  `season` tinyint UNSIGNED NOT NULL COMMENT 'Arena season number'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_arena_seasons`
--

TRUNCATE TABLE `game_event_arena_seasons`;
--
-- Volcado de datos para la tabla `game_event_arena_seasons`
--

INSERT INTO `game_event_arena_seasons` (`eventEntry`, `season`) VALUES
(75, 1),
(76, 2),
(55, 3),
(56, 4),
(57, 5),
(58, 6),
(59, 7),
(60, 8);

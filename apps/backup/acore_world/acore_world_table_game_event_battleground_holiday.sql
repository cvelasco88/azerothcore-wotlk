
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_battleground_holiday`
--

CREATE TABLE `game_event_battleground_holiday` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event',
  `bgflag` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_battleground_holiday`
--

TRUNCATE TABLE `game_event_battleground_holiday`;
--
-- Volcado de datos para la tabla `game_event_battleground_holiday`
--

INSERT INTO `game_event_battleground_holiday` (`eventEntry`, `bgflag`) VALUES
(18, 2),
(19, 4),
(20, 8),
(21, 128),
(53, 512),
(54, 1073741824);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_npcflag`
--

CREATE TABLE `game_event_npcflag` (
  `eventEntry` tinyint UNSIGNED NOT NULL COMMENT 'Entry of the game event',
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `npcflag` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_npcflag`
--

TRUNCATE TABLE `game_event_npcflag`;
--
-- Volcado de datos para la tabla `game_event_npcflag`
--

INSERT INTO `game_event_npcflag` (`eventEntry`, `guid`, `npcflag`) VALUES
(17, 1803, 179),
(17, 26771, 179),
(17, 38112, 129),
(17, 46320, 177),
(17, 208240, 1048705);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_npc_vendor`
--

CREATE TABLE `game_event_npc_vendor` (
  `eventEntry` tinyint NOT NULL COMMENT 'Entry of the game event.',
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `slot` smallint NOT NULL DEFAULT '0',
  `item` int UNSIGNED NOT NULL DEFAULT '0',
  `maxcount` int UNSIGNED NOT NULL DEFAULT '0',
  `incrtime` int UNSIGNED NOT NULL DEFAULT '0',
  `ExtendedCost` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_npc_vendor`
--

TRUNCATE TABLE `game_event_npc_vendor`;
--
-- Volcado de datos para la tabla `game_event_npc_vendor`
--

INSERT INTO `game_event_npc_vendor` (`eventEntry`, `guid`, `slot`, `item`, `maxcount`, `incrtime`, `ExtendedCost`) VALUES
(17, 7, 0, 23160, 0, 0, 0),
(17, 7, 0, 23161, 0, 0, 0),
(17, 1803, 0, 23160, 0, 0, 0),
(17, 1803, 0, 23161, 0, 0, 0),
(17, 26771, 0, 23160, 0, 0, 0),
(17, 26771, 0, 23161, 0, 0, 0),
(17, 38112, 0, 23160, 0, 0, 0),
(17, 38112, 0, 23161, 0, 0, 0),
(17, 46320, 0, 23160, 0, 0, 0),
(17, 46320, 0, 23161, 0, 0, 0),
(10, 97984, 0, 46693, 0, 0, 0),
(10, 99369, 0, 46693, 0, 0, 0),
(17, 208240, 0, 23160, 0, 0, 0),
(17, 208240, 0, 23161, 0, 0, 0);

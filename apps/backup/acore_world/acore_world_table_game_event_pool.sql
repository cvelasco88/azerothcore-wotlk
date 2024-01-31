
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_event_pool`
--

CREATE TABLE `game_event_pool` (
  `eventEntry` tinyint NOT NULL COMMENT 'Entry of the game event. Put negative entry to remove during event.',
  `pool_entry` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Id of the pool'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `game_event_pool`
--

TRUNCATE TABLE `game_event_pool`;
--
-- Volcado de datos para la tabla `game_event_pool`
--

INSERT INTO `game_event_pool` (`eventEntry`, `pool_entry`) VALUES
(9, 5699),
(9, 5700),
(9, 5701),
(9, 5702),
(9, 5703),
(9, 5704),
(9, 5705),
(9, 5706);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_factionchange_reputations`
--

CREATE TABLE `player_factionchange_reputations` (
  `alliance_id` int UNSIGNED NOT NULL,
  `horde_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `player_factionchange_reputations`
--

TRUNCATE TABLE `player_factionchange_reputations`;
--
-- Volcado de datos para la tabla `player_factionchange_reputations`
--

INSERT INTO `player_factionchange_reputations` (`alliance_id`, `horde_id`) VALUES
(47, 530),
(54, 81),
(69, 68),
(72, 76),
(509, 510),
(730, 729),
(890, 889),
(930, 911),
(946, 947),
(978, 941),
(1037, 1052),
(1050, 1085),
(1068, 1064),
(1094, 1124),
(1126, 1067);

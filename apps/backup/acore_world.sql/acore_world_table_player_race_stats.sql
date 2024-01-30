
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_race_stats`
--

CREATE TABLE `player_race_stats` (
  `Race` tinyint UNSIGNED NOT NULL,
  `Strength` int NOT NULL DEFAULT '0',
  `Agility` int NOT NULL DEFAULT '0',
  `Stamina` int NOT NULL DEFAULT '0',
  `Intellect` int NOT NULL DEFAULT '0',
  `Spirit` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Stores race stats.' PACK_KEYS=0;

--
-- Truncar tablas antes de insertar `player_race_stats`
--

TRUNCATE TABLE `player_race_stats`;
--
-- Volcado de datos para la tabla `player_race_stats`
--

INSERT INTO `player_race_stats` (`Race`, `Strength`, `Agility`, `Stamina`, `Intellect`, `Spirit`) VALUES
(1, 0, 0, 0, 0, 0),
(2, 3, -3, 1, -3, 2),
(3, 5, -4, 1, -1, -1),
(4, -4, 4, 0, 0, 0),
(5, -1, -2, 0, -2, 5),
(6, 5, -4, 1, -4, 2),
(7, -5, 2, 0, 3, 0),
(8, 1, 2, 0, -4, 1),
(10, -3, 2, 0, 3, -2),
(11, 1, -3, 0, 0, 2);

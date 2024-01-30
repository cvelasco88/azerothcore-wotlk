
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `game_weather`
--

CREATE TABLE `game_weather` (
  `zone` int UNSIGNED NOT NULL DEFAULT '0',
  `spring_rain_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `spring_snow_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `spring_storm_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `summer_rain_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `summer_snow_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `summer_storm_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `fall_rain_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `fall_snow_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `fall_storm_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `winter_rain_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `winter_snow_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `winter_storm_chance` tinyint UNSIGNED NOT NULL DEFAULT '25',
  `ScriptName` char(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Weather System';

--
-- Truncar tablas antes de insertar `game_weather`
--

TRUNCATE TABLE `game_weather`;
--
-- Volcado de datos para la tabla `game_weather`
--

INSERT INTO `game_weather` (`zone`, `spring_rain_chance`, `spring_snow_chance`, `spring_storm_chance`, `summer_rain_chance`, `summer_snow_chance`, `summer_storm_chance`, `fall_rain_chance`, `fall_snow_chance`, `fall_storm_chance`, `winter_rain_chance`, `winter_snow_chance`, `winter_storm_chance`, `ScriptName`) VALUES
(1, 0, 25, 0, 0, 15, 0, 0, 25, 0, 0, 25, 0, ''),
(3, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 15, ''),
(10, 15, 0, 0, 15, 0, 0, 20, 0, 0, 15, 0, 0, ''),
(11, 25, 0, 0, 15, 0, 0, 25, 0, 0, 25, 0, 0, ''),
(12, 20, 0, 0, 15, 0, 0, 20, 0, 0, 20, 0, 0, ''),
(15, 25, 0, 0, 20, 0, 0, 25, 0, 0, 25, 0, 0, ''),
(28, 10, 0, 0, 15, 0, 0, 15, 0, 0, 10, 0, 0, ''),
(33, 20, 0, 0, 25, 0, 0, 25, 0, 0, 20, 0, 0, ''),
(36, 0, 20, 0, 0, 20, 0, 0, 25, 0, 0, 30, 0, ''),
(38, 15, 0, 0, 15, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(41, 15, 0, 0, 5, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(44, 15, 0, 0, 15, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(45, 23, 0, 0, 15, 0, 0, 23, 0, 0, 23, 0, 0, ''),
(47, 10, 0, 0, 10, 0, 0, 15, 0, 0, 10, 0, 0, ''),
(85, 20, 0, 0, 15, 0, 0, 20, 0, 0, 20, 0, 0, ''),
(139, 10, 0, 0, 15, 0, 0, 15, 0, 0, 10, 0, 0, ''),
(141, 15, 0, 0, 5, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(148, 15, 0, 0, 10, 0, 0, 20, 0, 0, 15, 0, 0, ''),
(215, 15, 0, 0, 10, 0, 0, 20, 0, 0, 15, 0, 0, ''),
(267, 15, 0, 0, 10, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(357, 15, 0, 0, 15, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(405, 10, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, ''),
(440, 0, 0, 15, 0, 0, 15, 0, 0, 15, 0, 0, 15, ''),
(490, 15, 0, 0, 10, 0, 0, 20, 0, 0, 15, 0, 0, ''),
(618, 0, 25, 0, 0, 20, 0, 0, 20, 0, 0, 25, 0, ''),
(796, 5, 0, 0, 10, 0, 0, 25, 0, 0, 5, 0, 0, ''),
(1377, 0, 0, 20, 0, 0, 25, 0, 0, 20, 0, 0, 15, ''),
(1977, 15, 0, 0, 5, 0, 0, 15, 0, 0, 15, 0, 0, ''),
(2017, 5, 0, 0, 5, 0, 0, 5, 0, 0, 5, 0, 0, ''),
(2597, 0, 15, 0, 0, 15, 0, 0, 20, 0, 0, 25, 0, ''),
(3358, 10, 0, 0, 10, 0, 0, 10, 0, 0, 10, 0, 0, ''),
(3428, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 20, ''),
(3429, 0, 0, 20, 0, 0, 20, 0, 0, 20, 0, 0, 20, ''),
(3521, 10, 0, 0, 15, 0, 0, 20, 0, 0, 10, 0, 0, ''),
(4080, 20, 0, 0, 20, 0, 0, 20, 0, 0, 10, 0, 0, '');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reputation_reward_rate`
--

CREATE TABLE `reputation_reward_rate` (
  `faction` int UNSIGNED NOT NULL DEFAULT '0',
  `quest_rate` float NOT NULL DEFAULT '1',
  `quest_daily_rate` float NOT NULL DEFAULT '1',
  `quest_weekly_rate` float NOT NULL DEFAULT '1',
  `quest_monthly_rate` float NOT NULL DEFAULT '1',
  `quest_repeatable_rate` float NOT NULL DEFAULT '1',
  `creature_rate` float NOT NULL DEFAULT '1',
  `spell_rate` float NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `reputation_reward_rate`
--

TRUNCATE TABLE `reputation_reward_rate`;
--
-- Volcado de datos para la tabla `reputation_reward_rate`
--

INSERT INTO `reputation_reward_rate` (`faction`, `quest_rate`, `quest_daily_rate`, `quest_weekly_rate`, `quest_monthly_rate`, `quest_repeatable_rate`, `creature_rate`, `spell_rate`) VALUES
(529, 1, 1, 1, 1, 1, 1, 2),
(576, 4, 4, 1, 1, 4, 1, 1),
(609, 1, 1, 1, 1, 1, 1, 2),
(941, 1, 1, 1, 1, 1, 1, 1),
(970, 1, 1, 1, 1, 1, 1, 3),
(978, 1, 1, 1, 1, 1, 1, 1),
(1073, 1, 2, 1, 1, 1, 2, 2),
(1090, 1, 1, 1, 1, 1, 1.3, 1.3),
(1091, 1, 1, 1, 1, 1, 1.3, 1.3),
(1098, 1, 1, 1, 1, 1, 1.3, 1.3),
(1104, 1, 2, 1, 1, 1, 2, 2),
(1105, 1, 2, 1, 1, 1, 2, 2),
(1106, 1, 1, 1, 1, 1, 1.3, 1.3),
(1119, 1, 1, 1, 1, 1, 1.3, 1.3);

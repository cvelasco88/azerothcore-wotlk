
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reputation_spillover_template`
--

CREATE TABLE `reputation_spillover_template` (
  `faction` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'faction entry',
  `faction1` smallint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'faction to give spillover for',
  `rate_1` float NOT NULL DEFAULT '0' COMMENT 'the given rep points * rate',
  `rank_1` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'max rank,above this will not give any spillover',
  `faction2` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rate_2` float NOT NULL DEFAULT '0',
  `rank_2` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `faction3` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rate_3` float NOT NULL DEFAULT '0',
  `rank_3` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `faction4` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rate_4` float NOT NULL DEFAULT '0',
  `rank_4` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `faction5` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rate_5` float NOT NULL DEFAULT '0',
  `rank_5` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `faction6` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rate_6` float NOT NULL DEFAULT '0',
  `rank_6` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Reputation spillover reputation gain';

--
-- Truncar tablas antes de insertar `reputation_spillover_template`
--

TRUNCATE TABLE `reputation_spillover_template`;
--
-- Volcado de datos para la tabla `reputation_spillover_template`
--

INSERT INTO `reputation_spillover_template` (`faction`, `faction1`, `rate_1`, `rank_1`, `faction2`, `rate_2`, `rank_2`, `faction3`, `rate_3`, `rank_3`, `faction4`, `rate_4`, `rank_4`, `faction5`, `rate_5`, `rank_5`, `faction6`, `rate_6`, `rank_6`) VALUES
(21, 369, 0.5, 7, 470, 0.5, 7, 577, 0.5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(47, 72, 0.25, 7, 54, 0.25, 7, 69, 0.25, 7, 930, 0.25, 7, 0, 0, 0, 0, 0, 0),
(54, 47, 0.25, 7, 72, 0.25, 7, 69, 0.25, 7, 930, 0.25, 7, 0, 0, 0, 0, 0, 0),
(68, 76, 0.25, 7, 81, 0.25, 7, 530, 0.25, 7, 911, 0.25, 7, 0, 0, 0, 0, 0, 0),
(69, 47, 0.25, 7, 54, 0.25, 7, 72, 0.25, 7, 930, 0.25, 7, 0, 0, 0, 0, 0, 0),
(72, 47, 0.25, 7, 54, 0.25, 7, 69, 0.25, 7, 930, 0.25, 7, 0, 0, 0, 0, 0, 0),
(76, 68, 0.25, 7, 81, 0.25, 7, 530, 0.25, 7, 911, 0.25, 7, 0, 0, 0, 0, 0, 0),
(81, 76, 0.25, 7, 68, 0.25, 7, 530, 0.25, 7, 911, 0.25, 7, 0, 0, 0, 0, 0, 0),
(369, 21, 0.5, 7, 470, 0.5, 7, 577, 0.5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(470, 369, 0.5, 7, 21, 0.5, 7, 577, 0.5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(530, 76, 0.25, 7, 81, 0.25, 7, 68, 0.25, 7, 911, 0.25, 7, 0, 0, 0, 0, 0, 0),
(577, 369, 0.5, 7, 470, 0.5, 7, 21, 0.5, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(911, 76, 0.25, 7, 81, 0.25, 7, 530, 0.25, 7, 68, 0.25, 7, 0, 0, 0, 0, 0, 0),
(930, 47, 0.25, 7, 54, 0.25, 7, 69, 0.25, 7, 72, 0.25, 7, 0, 0, 0, 0, 0, 0),
(932, 934, -1.1, 7, 935, 0.5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(934, 932, -1.1, 7, 935, 0.5, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1050, 1037, 0.5, 7, 1068, 0.5, 7, 1094, 0.5, 7, 1126, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1064, 1052, 0.5, 7, 1067, 0.5, 7, 1085, 0.5, 7, 1124, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1067, 1052, 0.5, 7, 1064, 0.5, 7, 1085, 0.5, 7, 1124, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1068, 1037, 0.5, 7, 1050, 0.5, 7, 1094, 0.5, 7, 1126, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1085, 1052, 0.5, 7, 1064, 0.5, 7, 1067, 0.5, 7, 1124, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1094, 1037, 0.5, 7, 1050, 0.5, 7, 1068, 0.5, 7, 1126, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1104, 1105, -2.2, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1105, 1104, -2.2, 7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1124, 1052, 0.5, 7, 1064, 0.5, 7, 1067, 0.5, 7, 1085, 0.5, 7, 0, 0, 0, 0, 0, 0),
(1126, 1037, 0.5, 7, 1050, 0.5, 7, 1068, 0.5, 7, 1094, 0.5, 7, 0, 0, 0, 0, 0, 0);

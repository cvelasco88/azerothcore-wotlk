
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_arena_fights`
--

CREATE TABLE `log_arena_fights` (
  `fight_id` int UNSIGNED NOT NULL,
  `time` datetime NOT NULL,
  `type` tinyint UNSIGNED NOT NULL,
  `duration` int UNSIGNED NOT NULL,
  `winner` int UNSIGNED NOT NULL,
  `loser` int UNSIGNED NOT NULL,
  `winner_tr` smallint UNSIGNED NOT NULL,
  `winner_mmr` smallint UNSIGNED NOT NULL,
  `winner_tr_change` smallint NOT NULL,
  `loser_tr` smallint UNSIGNED NOT NULL,
  `loser_mmr` smallint UNSIGNED NOT NULL,
  `loser_tr_change` smallint NOT NULL,
  `currOnline` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `log_arena_fights`
--

TRUNCATE TABLE `log_arena_fights`;
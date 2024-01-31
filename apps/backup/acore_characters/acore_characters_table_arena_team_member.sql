
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arena_team_member`
--

CREATE TABLE `arena_team_member` (
  `arenaTeamId` int UNSIGNED NOT NULL DEFAULT '0',
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `weekGames` smallint UNSIGNED NOT NULL DEFAULT '0',
  `weekWins` smallint UNSIGNED NOT NULL DEFAULT '0',
  `seasonGames` smallint UNSIGNED NOT NULL DEFAULT '0',
  `seasonWins` smallint UNSIGNED NOT NULL DEFAULT '0',
  `personalRating` smallint NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `arena_team_member`
--

TRUNCATE TABLE `arena_team_member`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arena_team`
--

CREATE TABLE `arena_team` (
  `arenaTeamId` int UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `captainGuid` int UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `rating` smallint UNSIGNED NOT NULL DEFAULT '0',
  `seasonGames` smallint UNSIGNED NOT NULL DEFAULT '0',
  `seasonWins` smallint UNSIGNED NOT NULL DEFAULT '0',
  `weekGames` smallint UNSIGNED NOT NULL DEFAULT '0',
  `weekWins` smallint UNSIGNED NOT NULL DEFAULT '0',
  `rank` int UNSIGNED NOT NULL DEFAULT '0',
  `backgroundColor` int UNSIGNED NOT NULL DEFAULT '0',
  `emblemStyle` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `emblemColor` int UNSIGNED NOT NULL DEFAULT '0',
  `borderStyle` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `borderColor` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `arena_team`
--

TRUNCATE TABLE `arena_team`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_eventlog`
--

CREATE TABLE `guild_eventlog` (
  `guildid` int UNSIGNED NOT NULL COMMENT 'Guild Identificator',
  `LogGuid` int UNSIGNED NOT NULL COMMENT 'Log record identificator - auxiliary column',
  `EventType` tinyint UNSIGNED NOT NULL COMMENT 'Event type',
  `PlayerGuid1` int UNSIGNED NOT NULL COMMENT 'Player 1',
  `PlayerGuid2` int UNSIGNED NOT NULL COMMENT 'Player 2',
  `NewRank` tinyint UNSIGNED NOT NULL COMMENT 'New rank(in case promotion/demotion)',
  `TimeStamp` int UNSIGNED NOT NULL COMMENT 'Event UNIX time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild Eventlog';

--
-- Truncar tablas antes de insertar `guild_eventlog`
--

TRUNCATE TABLE `guild_eventlog`;
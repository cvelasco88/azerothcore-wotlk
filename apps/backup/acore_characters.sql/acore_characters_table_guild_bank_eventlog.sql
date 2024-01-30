
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_bank_eventlog`
--

CREATE TABLE `guild_bank_eventlog` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Guild Identificator',
  `LogGuid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Log record identificator - auxiliary column',
  `TabId` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Guild bank TabId',
  `EventType` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Event type',
  `PlayerGuid` int UNSIGNED NOT NULL DEFAULT '0',
  `ItemOrMoney` int UNSIGNED NOT NULL DEFAULT '0',
  `ItemStackCount` smallint UNSIGNED NOT NULL DEFAULT '0',
  `DestTabId` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Destination Tab Id',
  `TimeStamp` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Event UNIX time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `guild_bank_eventlog`
--

TRUNCATE TABLE `guild_bank_eventlog`;
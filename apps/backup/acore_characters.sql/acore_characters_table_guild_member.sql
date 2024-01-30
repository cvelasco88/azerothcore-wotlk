
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_member`
--

CREATE TABLE `guild_member` (
  `guildid` int UNSIGNED NOT NULL COMMENT 'Guild Identificator',
  `guid` int UNSIGNED NOT NULL,
  `rank` tinyint UNSIGNED NOT NULL,
  `pnote` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `offnote` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild System';

--
-- Truncar tablas antes de insertar `guild_member`
--

TRUNCATE TABLE `guild_member`;
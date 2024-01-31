
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild`
--

CREATE TABLE `guild` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `leaderguid` int UNSIGNED NOT NULL DEFAULT '0',
  `EmblemStyle` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `EmblemColor` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `BorderStyle` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `BorderColor` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `BackgroundColor` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `info` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `motd` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `createdate` int UNSIGNED NOT NULL DEFAULT '0',
  `BankMoney` bigint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild System';

--
-- Truncar tablas antes de insertar `guild`
--

TRUNCATE TABLE `guild`;
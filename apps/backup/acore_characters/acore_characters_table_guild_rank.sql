
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_rank`
--

CREATE TABLE `guild_rank` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0',
  `rid` tinyint UNSIGNED NOT NULL,
  `rname` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `rights` int UNSIGNED DEFAULT '0',
  `BankMoneyPerDay` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild System';

--
-- Truncar tablas antes de insertar `guild_rank`
--

TRUNCATE TABLE `guild_rank`;
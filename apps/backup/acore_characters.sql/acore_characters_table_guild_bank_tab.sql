
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_bank_tab`
--

CREATE TABLE `guild_bank_tab` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0',
  `TabId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `TabName` varchar(16) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `TabIcon` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `TabText` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `guild_bank_tab`
--

TRUNCATE TABLE `guild_bank_tab`;
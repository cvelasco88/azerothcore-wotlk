
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_bank_right`
--

CREATE TABLE `guild_bank_right` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0',
  `TabId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `rid` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `gbright` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `SlotPerDay` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `guild_bank_right`
--

TRUNCATE TABLE `guild_bank_right`;
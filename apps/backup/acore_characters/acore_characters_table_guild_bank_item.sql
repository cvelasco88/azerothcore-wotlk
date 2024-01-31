
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_bank_item`
--

CREATE TABLE `guild_bank_item` (
  `guildid` int UNSIGNED NOT NULL DEFAULT '0',
  `TabId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `SlotId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `item_guid` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `guild_bank_item`
--

TRUNCATE TABLE `guild_bank_item`;
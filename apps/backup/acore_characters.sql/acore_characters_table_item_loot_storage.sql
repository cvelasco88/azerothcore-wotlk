
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_loot_storage`
--

CREATE TABLE `item_loot_storage` (
  `containerGUID` int UNSIGNED NOT NULL,
  `itemid` int UNSIGNED NOT NULL,
  `count` int UNSIGNED NOT NULL,
  `item_index` int UNSIGNED NOT NULL DEFAULT '0',
  `randomPropertyId` int NOT NULL,
  `randomSuffix` int UNSIGNED NOT NULL,
  `follow_loot_rules` tinyint UNSIGNED NOT NULL,
  `freeforall` tinyint UNSIGNED NOT NULL,
  `is_blocked` tinyint UNSIGNED NOT NULL,
  `is_counted` tinyint UNSIGNED NOT NULL,
  `is_underthreshold` tinyint UNSIGNED NOT NULL,
  `needs_quest` tinyint UNSIGNED NOT NULL,
  `conditionLootId` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `item_loot_storage`
--

TRUNCATE TABLE `item_loot_storage`;
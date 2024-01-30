
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_instance`
--

CREATE TABLE `item_instance` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `itemEntry` int UNSIGNED DEFAULT '0',
  `owner_guid` int UNSIGNED NOT NULL DEFAULT '0',
  `creatorGuid` int UNSIGNED NOT NULL DEFAULT '0',
  `giftCreatorGuid` int UNSIGNED NOT NULL DEFAULT '0',
  `count` int UNSIGNED NOT NULL DEFAULT '1',
  `duration` int NOT NULL DEFAULT '0',
  `charges` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `flags` int UNSIGNED DEFAULT '0',
  `enchantments` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `randomPropertyId` smallint NOT NULL DEFAULT '0',
  `durability` smallint UNSIGNED NOT NULL DEFAULT '0',
  `playedTime` int UNSIGNED NOT NULL DEFAULT '0',
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Item System';

--
-- Truncar tablas antes de insertar `item_instance`
--

TRUNCATE TABLE `item_instance`;
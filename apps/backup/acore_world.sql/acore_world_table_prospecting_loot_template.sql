
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prospecting_loot_template`
--

CREATE TABLE `prospecting_loot_template` (
  `Entry` int UNSIGNED NOT NULL DEFAULT '0',
  `Item` int UNSIGNED NOT NULL DEFAULT '0',
  `Reference` int NOT NULL DEFAULT '0',
  `Chance` float NOT NULL DEFAULT '100',
  `QuestRequired` tinyint NOT NULL DEFAULT '0',
  `LootMode` smallint UNSIGNED NOT NULL DEFAULT '1',
  `GroupId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `MinCount` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `MaxCount` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `Comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Loot System';

--
-- Truncar tablas antes de insertar `prospecting_loot_template`
--

TRUNCATE TABLE `prospecting_loot_template`;
--
-- Volcado de datos para la tabla `prospecting_loot_template`
--

INSERT INTO `prospecting_loot_template` (`Entry`, `Item`, `Reference`, `Chance`, `QuestRequired`, `LootMode`, `GroupId`, `MinCount`, `MaxCount`, `Comment`) VALUES
(2770, 774, 0, 0, 0, 1, 1, 1, 1, 'Malachite'),
(2770, 818, 0, 0, 0, 1, 1, 1, 1, 'Tigerseye'),
(2770, 1210, 0, 10, 0, 1, 0, 1, 1, 'Shadowgem'),
(2771, 1, 13000, 10, 0, 1, 0, 1, 1, '(ReferenceTable)'),
(2771, 1206, 0, 0, 0, 1, 1, 1, 2, 'Moss Agate'),
(2771, 1210, 0, 0, 0, 1, 1, 1, 2, 'Shadowgem'),
(2771, 1705, 0, 0, 0, 1, 1, 1, 2, 'Lesser Moonstone'),
(2772, 1529, 0, 30, 0, 1, 1, 1, 2, 'Jade'),
(2772, 1705, 0, 30, 0, 1, 1, 1, 2, 'Lesser Moonstone'),
(2772, 3864, 0, 30, 0, 1, 1, 1, 2, 'Citrine'),
(2772, 7909, 0, 5, 0, 1, 1, 1, 1, 'Aquamarine'),
(2772, 7910, 0, 5, 0, 1, 1, 1, 1, 'Star Ruby'),
(3858, 3864, 0, 30, 0, 1, 1, 1, 2, 'Citrine'),
(3858, 7909, 0, 30, 0, 1, 1, 1, 2, 'Aquamarine'),
(3858, 7910, 0, 30, 0, 1, 1, 1, 2, 'Star Ruby'),
(3858, 12361, 0, 2.5, 0, 1, 1, 1, 1, 'Blue Sapphire'),
(3858, 12364, 0, 2.5, 0, 1, 1, 1, 1, 'Huge Emerald'),
(3858, 12799, 0, 2.5, 0, 1, 1, 1, 1, 'Large Opal'),
(3858, 12800, 0, 2.5, 0, 1, 1, 1, 1, 'Azerothian Diamond'),
(10620, 1, -13001, 10, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(10620, 7910, 0, 30, 0, 1, 1, 1, 2, 'Star Ruby'),
(10620, 12361, 0, 15, 0, 1, 1, 1, 2, 'Blue Sapphire'),
(10620, 12364, 0, 15, 0, 1, 1, 1, 2, 'Huge Emerald'),
(10620, 12799, 0, 15, 0, 1, 1, 1, 2, 'Large Opal'),
(10620, 12800, 0, 15, 0, 1, 1, 1, 2, 'Azerothian Diamond'),
(23424, 1, 1000, 100, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(23425, 1, 13001, 100, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(23425, 2, 13002, 24, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(23425, 3, 13001, 15, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(23425, 24243, 0, 100, 0, 1, 0, 1, 1, 'Adamantite Powder'),
(36909, 1, 1001, 100, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(36910, 1, 13005, 20, 0, 1, 0, 1, 1, '(ReferenceTable)'),
(36910, 2, 1002, 100, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(36910, 3, 1003, 75, 0, 1, 1, 1, 1, '(ReferenceTable)'),
(36910, 46849, 0, 75, 0, 1, 0, 1, 1, 'Titanium Powder'),
(36912, 1, 1003, 85, 0, 1, 0, 1, 1, '(ReferenceTable)'),
(36912, 2, 1004, 100, 0, 1, 1, 1, 1, '(ReferenceTable)');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dungeon_access_requirements`
--

CREATE TABLE `dungeon_access_requirements` (
  `dungeon_access_id` tinyint UNSIGNED NOT NULL COMMENT 'ID from dungeon_access_template',
  `requirement_type` tinyint UNSIGNED NOT NULL COMMENT '0 = achiev, 1 = quest, 2 = item',
  `requirement_id` int UNSIGNED NOT NULL COMMENT 'Achiev/quest/item ID',
  `requirement_note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Optional msg shown ingame to player if he cannot enter. You can add extra info',
  `faction` tinyint UNSIGNED NOT NULL DEFAULT '2' COMMENT '0 = Alliance, 1 = Horde, 2 = Both factions',
  `priority` tinyint UNSIGNED DEFAULT NULL COMMENT 'Priority order for the requirement, sorted by type. 0 is the highest priority',
  `leader_only` tinyint NOT NULL DEFAULT '0' COMMENT '0 = check the requirement for the player trying to enter, 1 = check the requirement for the party leader',
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Add (multiple) requirements before being able to enter a dungeon/raid';

--
-- Truncar tablas antes de insertar `dungeon_access_requirements`
--

TRUNCATE TABLE `dungeon_access_requirements`;
--
-- Volcado de datos para la tabla `dungeon_access_requirements`
--

INSERT INTO `dungeon_access_requirements` (`dungeon_access_id`, `requirement_type`, `requirement_id`, `requirement_note`, `faction`, `priority`, `leader_only`, `comment`) VALUES
(17, 1, 10285, 'You must complete the quest \"Return to Andormu\" before entering the Black Morass.', 2, NULL, 0, 'Caverns of Time: Opening the Dark Portal (Normal)'),
(18, 1, 10285, 'You must complete the quest \"Return to Andormu\" and be level 70 before entering the Heroic difficulty of the Black Morass.', 2, NULL, 1, 'Caverns of Time: Opening the Dark Portal (Heroic)'),
(18, 2, 30635, NULL, 2, NULL, 0, 'Caverns of Time: Opening the Dark Portal (Heroic)'),
(34, 2, 30622, NULL, 0, NULL, 0, 'Hellfire Citadel: The Shattered Halls (Heroic)'),
(34, 2, 30637, NULL, 1, NULL, 0, 'Hellfire Citadel: The Shattered Halls (Heroic)'),
(36, 2, 30622, NULL, 0, NULL, 0, 'Hellfire Citadel: The Blood Furnace (Heroic)'),
(36, 2, 30637, NULL, 1, NULL, 0, 'Hellfire Citadel: The Blood Furnace (Heroic)'),
(38, 2, 30622, NULL, 0, NULL, 0, 'Hellfire Citadel: Hellfire Ramparts (Heroic)'),
(38, 2, 30637, NULL, 1, NULL, 0, 'Hellfire Citadel: Hellfire Ramparts (Heroic)'),
(41, 2, 30623, NULL, 2, NULL, 0, 'Coilfang Resevoir: The Steamvault (Heroic)'),
(43, 2, 30623, NULL, 2, NULL, 0, 'Coilfang Resevoir: The Underbog (Heroic)'),
(45, 2, 30623, NULL, 2, NULL, 0, 'Coilfang Resevoir: The Slave Pens (Heroic)'),
(49, 2, 30634, NULL, 2, NULL, 0, 'Tempest Keep: The Arcatraz (Heroic)'),
(51, 2, 30634, NULL, 2, NULL, 0, 'Tempest Keep: The Botanica (Heroic)'),
(53, 2, 30634, NULL, 2, NULL, 0, 'Tempest Keep: The Mechanar (Heroic)'),
(55, 2, 30633, NULL, 2, NULL, 0, 'Auchindoun: Shadow Labyrinth (Heroic)'),
(57, 2, 30633, NULL, 2, NULL, 0, 'Auchindoun: Sethekk Halls (Heroic)'),
(59, 2, 30633, NULL, 2, NULL, 0, 'Auchindoun: Mana-Tombs (Heroic)'),
(61, 2, 30633, NULL, 2, NULL, 0, 'Auchindoun: Auchenai Crypts (Heroic)'),
(62, 1, 10277, 'You must complete the quest \"The Caverns of Time\" before entering Old Hillsbrad Foothills', 2, NULL, 0, 'Caverns Of Time: Escape from Durnholde (Normal)'),
(63, 1, 10277, 'You must complete the quest \"The Caverns of Time\" and be level 70 before entering the Heroic difficulty of Old Hillsbrad Foothills', 2, NULL, 0, 'Caverns Of Time: Escape from Durnholde (Heroic)'),
(63, 2, 30635, NULL, 2, NULL, 0, 'Caverns Of Time: Escape from Durnholde (Heroic)'),
(77, 1, 11492, 'You must complete the quest \"Hard to Kill\" and be level 70 before entering the Heroic difficulty of the Magisters\' Terrace.', 2, NULL, 0, 'Isle of Quel\'Danas: Magisters\' Terrace (Heroic)'),
(104, 0, 4530, NULL, 2, NULL, 0, 'Icecrown Citadel (10 player, Heroic)'),
(105, 0, 4597, NULL, 2, NULL, 0, 'Icecrown Citadel (25 player, Heroic)'),
(110, 0, 3917, NULL, 2, NULL, 0, 'Trial of the Crusader (10 player, Heroic)'),
(111, 0, 3916, NULL, 2, NULL, 0, 'Trial of the Crusader (25 player, Heroic)'),
(114, 1, 24499, 'You must complete the quest \"Echoes of Tortured Souls\" before entering the Pit of Saron.', 0, NULL, 0, 'Icecrown Citadel: Pit of Saron (Normal)'),
(114, 1, 24511, 'You must complete the quest \"Echoes of Tortured Souls\" before entering the Pit of Saron.', 1, NULL, 0, 'Icecrown Citadel: Pit of Saron (Normal)'),
(115, 1, 24499, 'You must complete the quest \"Echoes of Tortured Souls\" and be level 80 before entering the Heroic difficulty of the Pit of Saron.', 0, NULL, 0, 'Icecrown Citadel: Pit of Saron (Heroic)'),
(115, 1, 24511, 'You must complete the quest \"Echoes of Tortured Souls\" and be level 80 before entering the Heroic difficulty of the Pit of Saron.', 1, NULL, 0, 'Icecrown Citadel: Pit of Saron (Heroic)'),
(116, 1, 24710, 'You must complete the quest \"Deliverance from the Pit\" before entering the Halls of Reflection.', 0, NULL, 0, 'Icecrown Citadel: Halls of Reflection (Normal)'),
(116, 1, 24712, 'You must complete the quest \"Deliverance from the Pit\" before entering the Halls of Reflection.', 1, NULL, 0, 'Icecrown Citadel: Halls of Reflection (Normal)'),
(117, 1, 24710, 'You must complete the quest \"Deliverance from the Pit\" and be level 80 before entering the Heroic difficulty of the Halls of Reflection.', 0, NULL, 0, 'Icecrown Citadel: Halls of Reflection (Heroic)'),
(117, 1, 24712, 'You must complete the quest \"Deliverance from the Pit\" and be level 80 before entering the Heroic difficulty of the Halls of Reflection.', 1, NULL, 0, 'Icecrown Citadel: Halls of Reflection (Heroic)');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lfg_dungeon_rewards`
--

CREATE TABLE `lfg_dungeon_rewards` (
  `dungeonId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Dungeon entry from dbc',
  `maxLevel` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Max level at which this reward is rewarded',
  `firstQuestId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest id with rewards for first dungeon this day',
  `otherQuestId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest id with rewards for Nth dungeon this day'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `lfg_dungeon_rewards`
--

TRUNCATE TABLE `lfg_dungeon_rewards`;
--
-- Volcado de datos para la tabla `lfg_dungeon_rewards`
--

INSERT INTO `lfg_dungeon_rewards` (`dungeonId`, `maxLevel`, `firstQuestId`, `otherQuestId`) VALUES
(258, 15, 24881, 24889),
(258, 25, 24882, 24890),
(258, 34, 24883, 24891),
(258, 45, 24884, 24892),
(258, 55, 24885, 24893),
(258, 60, 24886, 24894),
(259, 64, 24887, 24895),
(259, 70, 24888, 24896),
(260, 70, 24922, 24923),
(261, 80, 24790, 24791),
(262, 80, 24788, 24789),
(285, 80, 25482, 0),
(286, 80, 25484, 0),
(287, 80, 25483, 0),
(288, 80, 25485, 0);

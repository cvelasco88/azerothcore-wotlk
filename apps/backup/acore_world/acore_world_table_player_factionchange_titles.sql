
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `player_factionchange_titles`
--

CREATE TABLE `player_factionchange_titles` (
  `alliance_id` int NOT NULL,
  `alliance_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `horde_id` int NOT NULL,
  `horde_comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `player_factionchange_titles`
--

TRUNCATE TABLE `player_factionchange_titles`;
--
-- Volcado de datos para la tabla `player_factionchange_titles`
--

INSERT INTO `player_factionchange_titles` (`alliance_id`, `alliance_comment`, `horde_id`, `horde_comment`) VALUES
(1, 'Private <name>', 15, 'Scout <name>'),
(2, 'Corporal <name>', 16, 'Grunt <name>'),
(3, 'Sergeant <name>', 17, 'Sergeant <name>'),
(4, 'Master Sergeant <name>', 18, 'Senior Sergeant <name>'),
(5, 'Sergeant Major <name>', 19, 'First Sergeant <name>'),
(6, 'Knight <name>', 20, 'Stone Guard'),
(7, 'Knight-Lieutenant <name>', 21, 'Blood Guard <name>'),
(8, 'Knight-Captain <name>', 22, 'Legionnaire <name>'),
(9, 'Knight-Champion <name>', 23, 'Centurion <name>'),
(10, 'Lieutenant Commander <name>', 24, 'Champion <name>'),
(11, 'Commander <name>', 25, 'Lieutenant General <name>'),
(12, 'Marshal  <name>', 26, 'General <name>'),
(13, 'Field Marshal <name>', 27, 'Warlord <name>'),
(14, 'Grand Marshal <name>', 28, 'High Warlord <name>'),
(48, 'Justicar <name>', 47, 'Conqueror <name>'),
(75, 'Flame Warden <name>', 76, 'Flame Keeper <name>'),
(113, '<name> of Gnomeregan', 153, '<name> of Thunder Bluff'),
(126, '<name> of the Alliance', 127, '<name> if the Horde'),
(146, '<name> of the Exodar', 152, '<name> of Silvermoon'),
(147, '<name> of Darnassus', 154, '<name> of the Undercity'),
(148, '<name> of Ironforge', 151, '<name> of Sen\'jin'),
(149, '<name> of Stormwind', 150, '<name> of Orgrimmar');

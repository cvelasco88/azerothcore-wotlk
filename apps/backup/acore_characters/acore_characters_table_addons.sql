
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `addons`
--

CREATE TABLE `addons` (
  `name` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `crc` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Addons';

--
-- Truncar tablas antes de insertar `addons`
--

TRUNCATE TABLE `addons`;
--
-- Volcado de datos para la tabla `addons`
--

INSERT INTO `addons` (`name`, `crc`) VALUES
('Blizzard_AchievementUI', 1276933997),
('Blizzard_ArenaUI', 1276933997),
('Blizzard_AuctionUI', 1276933997),
('Blizzard_BarbershopUI', 1276933997),
('Blizzard_BattlefieldMinimap', 1276933997),
('Blizzard_BindingUI', 1276933997),
('Blizzard_Calendar', 1276933997),
('Blizzard_CombatLog', 1276933997),
('Blizzard_CombatText', 1276933997),
('Blizzard_DebugTools', 1276933997),
('Blizzard_GlyphUI', 1276933997),
('Blizzard_GMChatUI', 1276933997),
('Blizzard_GMSurveyUI', 1276933997),
('Blizzard_GuildBankUI', 1276933997),
('Blizzard_InspectUI', 1276933997),
('Blizzard_ItemSocketingUI', 1276933997),
('Blizzard_MacroUI', 1276933997),
('Blizzard_RaidUI', 1276933997),
('Blizzard_TalentUI', 1276933997),
('Blizzard_TimeManager', 1276933997),
('Blizzard_TokenUI', 1276933997),
('Blizzard_TradeSkillUI', 1276933997),
('Blizzard_TrainerUI', 1276933997);

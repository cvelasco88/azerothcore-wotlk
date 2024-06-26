
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `worldstates`
--

CREATE TABLE `worldstates` (
  `entry` int UNSIGNED NOT NULL DEFAULT '0',
  `value` int UNSIGNED NOT NULL DEFAULT '0',
  `comment` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Variable Saves';

--
-- Truncar tablas antes de insertar `worldstates`
--

TRUNCATE TABLE `worldstates`;
--
-- Volcado de datos para la tabla `worldstates`
--

INSERT INTO `worldstates` (`entry`, `value`, `comment`) VALUES
(1, 0, NULL),
(2, 0, NULL),
(3, 0, NULL),
(4, 0, NULL),
(5, 0, NULL),
(6, 0, NULL),
(7, 1706639446, NULL),
(8, 0, NULL),
(9, 0, NULL),
(10, 0, NULL),
(11, 0, NULL),
(12, 0, NULL),
(13, 0, NULL),
(14, 0, NULL),
(15, 0, NULL),
(16, 0, NULL),
(17, 0, NULL),
(18, 0, NULL),
(19, 0, NULL),
(20, 0, NULL),
(21, 0, NULL),
(22, 0, NULL),
(23, 0, NULL),
(24, 0, NULL),
(25, 0, NULL),
(26, 0, NULL),
(27, 0, NULL),
(28, 0, NULL),
(29, 0, NULL),
(30, 0, NULL),
(31, 0, NULL),
(32, 0, NULL),
(33, 0, NULL),
(34, 0, NULL),
(35, 0, NULL),
(36, 0, NULL),
(37, 0, NULL),
(38, 0, NULL),
(39, 0, NULL),
(40, 0, NULL),
(41, 0, NULL),
(42, 0, NULL),
(43, 0, NULL),
(44, 0, NULL),
(45, 0, NULL),
(46, 0, NULL),
(47, 0, NULL),
(48, 0, NULL),
(49, 0, NULL),
(50, 0, NULL),
(51, 0, NULL),
(52, 0, NULL),
(53, 0, NULL),
(54, 0, NULL),
(55, 0, NULL),
(56, 0, NULL),
(57, 0, NULL),
(58, 0, NULL),
(59, 0, NULL),
(60, 0, NULL),
(61, 0, NULL),
(62, 0, NULL),
(63, 0, NULL),
(64, 0, NULL),
(65, 0, NULL),
(66, 0, NULL),
(67, 0, NULL),
(68, 0, NULL),
(69, 0, NULL),
(70, 0, NULL),
(71, 0, NULL),
(72, 0, NULL),
(73, 0, NULL),
(74, 0, NULL),
(75, 0, NULL),
(76, 0, NULL),
(77, 0, NULL),
(78, 0, NULL),
(79, 0, NULL),
(80, 0, NULL),
(81, 0, NULL),
(82, 0, NULL),
(83, 0, NULL),
(84, 0, NULL),
(85, 0, NULL),
(86, 0, NULL),
(87, 0, NULL),
(88, 0, NULL),
(89, 0, NULL),
(90, 0, NULL),
(197, 0, 'Fishing Extravaganza - STV_FISHING_PREV_WIN_TIME'),
(198, 0, 'Fishing Extravaganza - STV_FISHING_HAS_WINNER'),
(199, 0, 'Fishing Extravaganza - STV_FISHING_ANNOUNCE_EVENT_BEGIN'),
(200, 0, 'Fishing Extravaganza - STV_FISHING_ANNOUNCE_POOLS_DESPAN'),
(3698, 4, NULL),
(3699, 4, NULL),
(3700, 4, NULL),
(3701, 4, NULL),
(3702, 7, NULL),
(3703, 7, NULL),
(3704, 7, NULL),
(3705, 7, NULL),
(3706, 7, NULL),
(3711, 4, NULL),
(3712, 4, NULL),
(3713, 4, NULL),
(3714, 4, NULL),
(3749, 4, NULL),
(3750, 4, NULL),
(3751, 4, NULL),
(3752, 4, NULL),
(3753, 4, NULL),
(3754, 4, NULL),
(3755, 4, NULL),
(3756, 4, NULL),
(3757, 4, NULL),
(3758, 4, NULL),
(3759, 4, NULL),
(3760, 4, NULL),
(3761, 4, NULL),
(3762, 4, NULL),
(3763, 4, NULL),
(3764, 4, NULL),
(3765, 4, NULL),
(3766, 4, NULL),
(3767, 4, NULL),
(3768, 4, NULL),
(3769, 4, NULL),
(3770, 4, NULL),
(3771, 4, NULL),
(3772, 4, NULL),
(3773, 4, NULL),
(3781, 7768880, NULL),
(3801, 0, NULL),
(3802, 1, NULL),
(4024, 1, NULL),
(20001, 1454691600, 'NextArenaPointDistributionTime'),
(20002, 1706767200, 'NextWeeklyQuestResetTime'),
(20003, 1706680800, 'NextBGRandomDailyResetTime'),
(20004, 0, 'cleaning_flags'),
(20005, 1706680800, 'NextDailyQuestResetTime'),
(20006, 1706680800, 'NextGuildDailyResetTime'),
(20007, 1706763600, 'NextMonthlyQuestResetTime'),
(20008, 1706680800, NULL);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quest_mail_sender`
--

CREATE TABLE `quest_mail_sender` (
  `QuestId` int UNSIGNED NOT NULL DEFAULT '0',
  `RewardMailSenderEntry` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `quest_mail_sender`
--

TRUNCATE TABLE `quest_mail_sender`;
--
-- Volcado de datos para la tabla `quest_mail_sender`
--

INSERT INTO `quest_mail_sender` (`QuestId`, `RewardMailSenderEntry`) VALUES
(8729, 11811),
(10588, 18166),
(10966, 22818),
(10967, 22817),
(12067, 2708),
(12085, 5885),
(12422, 27102),
(12711, 28930),
(13959, 33533),
(13960, 33532);

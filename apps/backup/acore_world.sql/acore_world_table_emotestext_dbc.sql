
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emotestext_dbc`
--

CREATE TABLE `emotestext_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `EmoteID` int NOT NULL DEFAULT '0',
  `EmoteText_1` int NOT NULL DEFAULT '0',
  `EmoteText_2` int NOT NULL DEFAULT '0',
  `EmoteText_3` int NOT NULL DEFAULT '0',
  `EmoteText_4` int NOT NULL DEFAULT '0',
  `EmoteText_5` int NOT NULL DEFAULT '0',
  `EmoteText_6` int NOT NULL DEFAULT '0',
  `EmoteText_7` int NOT NULL DEFAULT '0',
  `EmoteText_8` int NOT NULL DEFAULT '0',
  `EmoteText_9` int NOT NULL DEFAULT '0',
  `EmoteText_10` int NOT NULL DEFAULT '0',
  `EmoteText_11` int NOT NULL DEFAULT '0',
  `EmoteText_12` int NOT NULL DEFAULT '0',
  `EmoteText_13` int NOT NULL DEFAULT '0',
  `EmoteText_14` int NOT NULL DEFAULT '0',
  `EmoteText_15` int NOT NULL DEFAULT '0',
  `EmoteText_16` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `emotestext_dbc`
--

TRUNCATE TABLE `emotestext_dbc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `holidays_dbc`
--

CREATE TABLE `holidays_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Duration_1` int NOT NULL DEFAULT '0',
  `Duration_2` int NOT NULL DEFAULT '0',
  `Duration_3` int NOT NULL DEFAULT '0',
  `Duration_4` int NOT NULL DEFAULT '0',
  `Duration_5` int NOT NULL DEFAULT '0',
  `Duration_6` int NOT NULL DEFAULT '0',
  `Duration_7` int NOT NULL DEFAULT '0',
  `Duration_8` int NOT NULL DEFAULT '0',
  `Duration_9` int NOT NULL DEFAULT '0',
  `Duration_10` int NOT NULL DEFAULT '0',
  `Date_1` int NOT NULL DEFAULT '0',
  `Date_2` int NOT NULL DEFAULT '0',
  `Date_3` int NOT NULL DEFAULT '0',
  `Date_4` int NOT NULL DEFAULT '0',
  `Date_5` int NOT NULL DEFAULT '0',
  `Date_6` int NOT NULL DEFAULT '0',
  `Date_7` int NOT NULL DEFAULT '0',
  `Date_8` int NOT NULL DEFAULT '0',
  `Date_9` int NOT NULL DEFAULT '0',
  `Date_10` int NOT NULL DEFAULT '0',
  `Date_11` int NOT NULL DEFAULT '0',
  `Date_12` int NOT NULL DEFAULT '0',
  `Date_13` int NOT NULL DEFAULT '0',
  `Date_14` int NOT NULL DEFAULT '0',
  `Date_15` int NOT NULL DEFAULT '0',
  `Date_16` int NOT NULL DEFAULT '0',
  `Date_17` int NOT NULL DEFAULT '0',
  `Date_18` int NOT NULL DEFAULT '0',
  `Date_19` int NOT NULL DEFAULT '0',
  `Date_20` int NOT NULL DEFAULT '0',
  `Date_21` int NOT NULL DEFAULT '0',
  `Date_22` int NOT NULL DEFAULT '0',
  `Date_23` int NOT NULL DEFAULT '0',
  `Date_24` int NOT NULL DEFAULT '0',
  `Date_25` int NOT NULL DEFAULT '0',
  `Date_26` int NOT NULL DEFAULT '0',
  `Region` int NOT NULL DEFAULT '0',
  `Looping` int NOT NULL DEFAULT '0',
  `CalendarFlags_1` int NOT NULL DEFAULT '0',
  `CalendarFlags_2` int NOT NULL DEFAULT '0',
  `CalendarFlags_3` int NOT NULL DEFAULT '0',
  `CalendarFlags_4` int NOT NULL DEFAULT '0',
  `CalendarFlags_5` int NOT NULL DEFAULT '0',
  `CalendarFlags_6` int NOT NULL DEFAULT '0',
  `CalendarFlags_7` int NOT NULL DEFAULT '0',
  `CalendarFlags_8` int NOT NULL DEFAULT '0',
  `CalendarFlags_9` int NOT NULL DEFAULT '0',
  `CalendarFlags_10` int NOT NULL DEFAULT '0',
  `HolidayNameID` int NOT NULL DEFAULT '0',
  `HolidayDescriptionID` int NOT NULL DEFAULT '0',
  `TextureFilename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Priority` int NOT NULL DEFAULT '0',
  `CalendarFilterType` int NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `holidays_dbc`
--

TRUNCATE TABLE `holidays_dbc`;
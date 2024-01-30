
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soundentries_dbc`
--

CREATE TABLE `soundentries_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `SoundType` int NOT NULL DEFAULT '0',
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_7` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_8` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_9` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `File_10` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Freq_1` int NOT NULL DEFAULT '0',
  `Freq_2` int NOT NULL DEFAULT '0',
  `Freq_3` int NOT NULL DEFAULT '0',
  `Freq_4` int NOT NULL DEFAULT '0',
  `Freq_5` int NOT NULL DEFAULT '0',
  `Freq_6` int NOT NULL DEFAULT '0',
  `Freq_7` int NOT NULL DEFAULT '0',
  `Freq_8` int NOT NULL DEFAULT '0',
  `Freq_9` int NOT NULL DEFAULT '0',
  `Freq_10` int NOT NULL DEFAULT '0',
  `DirectoryBase` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Volumefloat` float NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0',
  `MinDistance` float NOT NULL DEFAULT '0',
  `DistanceCutoff` float NOT NULL DEFAULT '0',
  `EAXDef` int NOT NULL DEFAULT '0',
  `SoundEntriesAdvancedID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `soundentries_dbc`
--

TRUNCATE TABLE `soundentries_dbc`;
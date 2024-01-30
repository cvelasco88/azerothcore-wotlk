
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lfgdungeons_dbc`
--

CREATE TABLE `lfgdungeons_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Name_Lang_enUS` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_enGB` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_koKR` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_frFR` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_deDE` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_enCN` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_zhCN` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_enTW` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_zhTW` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_esES` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_esMX` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_ruRU` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_ptPT` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_ptBR` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_itIT` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_Unk` text COLLATE utf8mb4_unicode_ci,
  `Name_Lang_Mask` int UNSIGNED NOT NULL DEFAULT '0',
  `MinLevel` int NOT NULL DEFAULT '0',
  `MaxLevel` int NOT NULL DEFAULT '0',
  `Target_Level` int NOT NULL DEFAULT '0',
  `Target_Level_Min` int NOT NULL DEFAULT '0',
  `Target_Level_Max` int NOT NULL DEFAULT '0',
  `MapID` int NOT NULL DEFAULT '0',
  `Difficulty` int NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0',
  `TypeID` int NOT NULL DEFAULT '0',
  `Faction` int NOT NULL DEFAULT '0',
  `TextureFilename` text COLLATE utf8mb4_unicode_ci,
  `ExpansionLevel` int NOT NULL DEFAULT '0',
  `Order_Index` int NOT NULL DEFAULT '0',
  `Group_Id` int NOT NULL DEFAULT '0',
  `Description_Lang_enUS` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_enGB` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_koKR` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_frFR` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_deDE` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_enCN` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_zhCN` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_enTW` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_zhTW` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_esES` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_esMX` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_ruRU` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_ptPT` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_ptBR` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_itIT` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_Unk` text COLLATE utf8mb4_unicode_ci,
  `Description_Lang_Mask` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `lfgdungeons_dbc`
--

TRUNCATE TABLE `lfgdungeons_dbc`;
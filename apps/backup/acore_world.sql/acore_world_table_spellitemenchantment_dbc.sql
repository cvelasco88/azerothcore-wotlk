
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellitemenchantment_dbc`
--

CREATE TABLE `spellitemenchantment_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Charges` int NOT NULL DEFAULT '0',
  `Effect_1` int NOT NULL DEFAULT '0',
  `Effect_2` int NOT NULL DEFAULT '0',
  `Effect_3` int NOT NULL DEFAULT '0',
  `EffectPointsMin_1` int NOT NULL DEFAULT '0',
  `EffectPointsMin_2` int NOT NULL DEFAULT '0',
  `EffectPointsMin_3` int NOT NULL DEFAULT '0',
  `EffectPointsMax_1` int NOT NULL DEFAULT '0',
  `EffectPointsMax_2` int NOT NULL DEFAULT '0',
  `EffectPointsMax_3` int NOT NULL DEFAULT '0',
  `EffectArg_1` int NOT NULL DEFAULT '0',
  `EffectArg_2` int NOT NULL DEFAULT '0',
  `EffectArg_3` int NOT NULL DEFAULT '0',
  `Name_Lang_enUS` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_enGB` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_koKR` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_frFR` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_deDE` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_enCN` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_zhCN` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_enTW` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_zhTW` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_esES` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_esMX` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_ruRU` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_ptPT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_ptBR` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_itIT` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_Unk` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Name_Lang_Mask` int UNSIGNED NOT NULL DEFAULT '0',
  `ItemVisual` int NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0',
  `Src_ItemID` int NOT NULL DEFAULT '0',
  `Condition_Id` int NOT NULL DEFAULT '0',
  `RequiredSkillID` int NOT NULL DEFAULT '0',
  `RequiredSkillRank` int NOT NULL DEFAULT '0',
  `MinLevel` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellitemenchantment_dbc`
--

TRUNCATE TABLE `spellitemenchantment_dbc`;
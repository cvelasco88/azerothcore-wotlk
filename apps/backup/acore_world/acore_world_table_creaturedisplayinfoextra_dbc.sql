
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creaturedisplayinfoextra_dbc`
--

CREATE TABLE `creaturedisplayinfoextra_dbc` (
  `ID` int UNSIGNED NOT NULL DEFAULT '0',
  `DisplayRaceID` int UNSIGNED NOT NULL DEFAULT '0',
  `DisplaySexID` int UNSIGNED NOT NULL DEFAULT '0',
  `SkinID` int UNSIGNED NOT NULL DEFAULT '0',
  `FaceID` int UNSIGNED NOT NULL DEFAULT '0',
  `HairStyleID` int UNSIGNED NOT NULL DEFAULT '0',
  `HairColorID` int UNSIGNED NOT NULL DEFAULT '0',
  `FacialHairID` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay1` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay2` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay3` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay4` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay5` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay6` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay7` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay8` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay9` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay10` int UNSIGNED NOT NULL DEFAULT '0',
  `NPCItemDisplay11` int UNSIGNED NOT NULL DEFAULT '0',
  `Flags` int UNSIGNED NOT NULL DEFAULT '0',
  `BakeName` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `creaturedisplayinfoextra_dbc`
--

TRUNCATE TABLE `creaturedisplayinfoextra_dbc`;
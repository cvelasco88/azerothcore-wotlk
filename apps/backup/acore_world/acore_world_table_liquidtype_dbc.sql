
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liquidtype_dbc`
--

CREATE TABLE `liquidtype_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Flags` int NOT NULL DEFAULT '0',
  `Type` int NOT NULL DEFAULT '0',
  `SoundID` int NOT NULL DEFAULT '0',
  `SpellID` int NOT NULL DEFAULT '0',
  `MaxDarkenDepth` float NOT NULL DEFAULT '0',
  `FogDarkenintensity` float NOT NULL DEFAULT '0',
  `AmbDarkenintensity` float NOT NULL DEFAULT '0',
  `DirDarkenintensity` float NOT NULL DEFAULT '0',
  `LightID` int NOT NULL DEFAULT '0',
  `ParticleScale` float NOT NULL DEFAULT '0',
  `ParticleMovement` int NOT NULL DEFAULT '0',
  `ParticleTexSlots` int NOT NULL DEFAULT '0',
  `MaterialID` int NOT NULL DEFAULT '0',
  `Texture_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Texture_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Texture_3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Texture_4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Texture_5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Texture_6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Color_1` int NOT NULL DEFAULT '0',
  `Color_2` int NOT NULL DEFAULT '0',
  `Float_1` float NOT NULL DEFAULT '0',
  `Float_2` float NOT NULL DEFAULT '0',
  `Float_3` float NOT NULL DEFAULT '0',
  `Float_4` float NOT NULL DEFAULT '0',
  `Float_5` float NOT NULL DEFAULT '0',
  `Float_6` float NOT NULL DEFAULT '0',
  `Float_7` float NOT NULL DEFAULT '0',
  `Float_8` float NOT NULL DEFAULT '0',
  `Float_9` float NOT NULL DEFAULT '0',
  `Float_10` float NOT NULL DEFAULT '0',
  `Float_11` float NOT NULL DEFAULT '0',
  `Float_12` float NOT NULL DEFAULT '0',
  `Float_13` float NOT NULL DEFAULT '0',
  `Float_14` float NOT NULL DEFAULT '0',
  `Float_15` float NOT NULL DEFAULT '0',
  `Float_16` float NOT NULL DEFAULT '0',
  `Float_17` float NOT NULL DEFAULT '0',
  `Float_18` float NOT NULL DEFAULT '0',
  `Int_1` int NOT NULL DEFAULT '0',
  `Int_2` int NOT NULL DEFAULT '0',
  `Int_3` int NOT NULL DEFAULT '0',
  `Int_4` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `liquidtype_dbc`
--

TRUNCATE TABLE `liquidtype_dbc`;
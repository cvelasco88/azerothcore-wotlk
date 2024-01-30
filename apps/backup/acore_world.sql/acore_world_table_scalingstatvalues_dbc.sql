
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `scalingstatvalues_dbc`
--

CREATE TABLE `scalingstatvalues_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Charlevel` int NOT NULL DEFAULT '0',
  `ShoulderBudget` int NOT NULL DEFAULT '0',
  `TrinketBudget` int NOT NULL DEFAULT '0',
  `WeaponBudget1H` int NOT NULL DEFAULT '0',
  `RangedBudget` int NOT NULL DEFAULT '0',
  `ClothShoulderArmor` int NOT NULL DEFAULT '0',
  `LeatherShoulderArmor` int NOT NULL DEFAULT '0',
  `MailShoulderArmor` int NOT NULL DEFAULT '0',
  `PlateShoulderArmor` int NOT NULL DEFAULT '0',
  `WeaponDPS1H` int NOT NULL DEFAULT '0',
  `WeaponDPS2H` int NOT NULL DEFAULT '0',
  `SpellcasterDPS1H` int NOT NULL DEFAULT '0',
  `SpellcasterDPS2H` int NOT NULL DEFAULT '0',
  `RangedDPS` int NOT NULL DEFAULT '0',
  `WandDPS` int NOT NULL DEFAULT '0',
  `SpellPower` int NOT NULL DEFAULT '0',
  `PrimaryBudget` int NOT NULL DEFAULT '0',
  `TertiaryBudget` int NOT NULL DEFAULT '0',
  `ClothCloakArmor` int NOT NULL DEFAULT '0',
  `ClothChestArmor` int NOT NULL DEFAULT '0',
  `LeatherChestArmor` int NOT NULL DEFAULT '0',
  `MailChestArmor` int NOT NULL DEFAULT '0',
  `PlateChestArmor` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `scalingstatvalues_dbc`
--

TRUNCATE TABLE `scalingstatvalues_dbc`;
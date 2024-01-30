
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_proc`
--

CREATE TABLE `spell_proc` (
  `SpellId` int NOT NULL DEFAULT '0',
  `SchoolMask` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `SpellFamilyName` smallint UNSIGNED NOT NULL DEFAULT '0',
  `SpellFamilyMask0` int UNSIGNED NOT NULL DEFAULT '0',
  `SpellFamilyMask1` int UNSIGNED NOT NULL DEFAULT '0',
  `SpellFamilyMask2` int UNSIGNED NOT NULL DEFAULT '0',
  `ProcFlags` int UNSIGNED NOT NULL DEFAULT '0',
  `SpellTypeMask` int UNSIGNED NOT NULL DEFAULT '0',
  `SpellPhaseMask` int UNSIGNED NOT NULL DEFAULT '0',
  `HitMask` int UNSIGNED NOT NULL DEFAULT '0',
  `AttributesMask` int UNSIGNED NOT NULL DEFAULT '0',
  `ProcsPerMinute` float NOT NULL DEFAULT '0',
  `Chance` float NOT NULL DEFAULT '0',
  `Cooldown` int UNSIGNED NOT NULL DEFAULT '0',
  `Charges` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spell_proc`
--

TRUNCATE TABLE `spell_proc`;
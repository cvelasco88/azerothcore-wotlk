
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_pet`
--

CREATE TABLE `character_pet` (
  `id` int UNSIGNED NOT NULL DEFAULT '0',
  `entry` int UNSIGNED NOT NULL DEFAULT '0',
  `owner` int UNSIGNED NOT NULL DEFAULT '0',
  `modelid` int UNSIGNED DEFAULT '0',
  `CreatedBySpell` int UNSIGNED DEFAULT '0',
  `PetType` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `level` smallint UNSIGNED NOT NULL DEFAULT '1',
  `exp` int UNSIGNED NOT NULL DEFAULT '0',
  `Reactstate` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(21) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pet',
  `renamed` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `slot` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `curhealth` int UNSIGNED NOT NULL DEFAULT '1',
  `curmana` int UNSIGNED NOT NULL DEFAULT '0',
  `curhappiness` int UNSIGNED NOT NULL DEFAULT '0',
  `savetime` int UNSIGNED NOT NULL DEFAULT '0',
  `abdata` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Pet System';

--
-- Truncar tablas antes de insertar `character_pet`
--

TRUNCATE TABLE `character_pet`;
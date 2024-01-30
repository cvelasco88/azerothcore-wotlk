
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playercreateinfo_spell_custom`
--

CREATE TABLE `playercreateinfo_spell_custom` (
  `racemask` int UNSIGNED NOT NULL DEFAULT '0',
  `classmask` int UNSIGNED NOT NULL DEFAULT '0',
  `Spell` int UNSIGNED NOT NULL DEFAULT '0',
  `Note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `playercreateinfo_spell_custom`
--

TRUNCATE TABLE `playercreateinfo_spell_custom`;
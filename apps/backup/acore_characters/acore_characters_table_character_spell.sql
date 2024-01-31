
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_spell`
--

CREATE TABLE `character_spell` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `spell` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Spell Identifier',
  `specMask` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_spell`
--

TRUNCATE TABLE `character_spell`;
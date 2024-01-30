
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_spell`
--

CREATE TABLE `pet_spell` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `spell` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Spell Identifier',
  `active` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Pet System';

--
-- Truncar tablas antes de insertar `pet_spell`
--

TRUNCATE TABLE `pet_spell`;
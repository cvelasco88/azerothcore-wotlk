
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pet_spell_cooldown`
--

CREATE TABLE `pet_spell_cooldown` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier, Low part',
  `spell` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Spell Identifier',
  `category` int UNSIGNED DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `pet_spell_cooldown`
--

TRUNCATE TABLE `pet_spell_cooldown`;
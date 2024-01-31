
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_spell_cooldown`
--

CREATE TABLE `character_spell_cooldown` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier, Low part',
  `spell` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Spell Identifier',
  `category` int UNSIGNED DEFAULT '0',
  `item` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Item Identifier',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `needSend` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_spell_cooldown`
--

TRUNCATE TABLE `character_spell_cooldown`;
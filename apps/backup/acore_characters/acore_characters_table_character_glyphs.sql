
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_glyphs`
--

CREATE TABLE `character_glyphs` (
  `guid` int UNSIGNED NOT NULL,
  `talentGroup` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `glyph1` smallint UNSIGNED DEFAULT '0',
  `glyph2` smallint UNSIGNED DEFAULT '0',
  `glyph3` smallint UNSIGNED DEFAULT '0',
  `glyph4` smallint UNSIGNED DEFAULT '0',
  `glyph5` smallint UNSIGNED DEFAULT '0',
  `glyph6` smallint UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_glyphs`
--

TRUNCATE TABLE `character_glyphs`;
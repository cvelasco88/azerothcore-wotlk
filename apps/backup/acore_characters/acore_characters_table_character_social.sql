
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_social`
--

CREATE TABLE `character_social` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Character Global Unique Identifier',
  `friend` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Friend Global Unique Identifier',
  `flags` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Friend Flags',
  `note` varchar(48) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Friend Note'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_social`
--

TRUNCATE TABLE `character_social`;
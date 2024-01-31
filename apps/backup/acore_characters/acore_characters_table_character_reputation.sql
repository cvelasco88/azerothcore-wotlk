
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_reputation`
--

CREATE TABLE `character_reputation` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `faction` smallint UNSIGNED NOT NULL DEFAULT '0',
  `standing` int NOT NULL DEFAULT '0',
  `flags` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_reputation`
--

TRUNCATE TABLE `character_reputation`;
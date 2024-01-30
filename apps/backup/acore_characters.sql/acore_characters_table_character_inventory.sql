
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_inventory`
--

CREATE TABLE `character_inventory` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `bag` int UNSIGNED NOT NULL DEFAULT '0',
  `slot` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `item` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Item Global Unique Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `character_inventory`
--

TRUNCATE TABLE `character_inventory`;
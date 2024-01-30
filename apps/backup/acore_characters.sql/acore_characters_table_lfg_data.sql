
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lfg_data`
--

CREATE TABLE `lfg_data` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `dungeon` int UNSIGNED NOT NULL DEFAULT '0',
  `state` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='LFG Data';

--
-- Truncar tablas antes de insertar `lfg_data`
--

TRUNCATE TABLE `lfg_data`;
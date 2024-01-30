
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_settings`
--

CREATE TABLE `character_settings` (
  `guid` int UNSIGNED NOT NULL,
  `source` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player Settings';

--
-- Truncar tablas antes de insertar `character_settings`
--

TRUNCATE TABLE `character_settings`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `version`
--

CREATE TABLE `version` (
  `core_version` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT 'Core revision dumped at startup.',
  `core_revision` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `db_version` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Version of world DB.',
  `cache_id` int DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Version Notes';

--
-- Truncar tablas antes de insertar `version`
--

TRUNCATE TABLE `version`;
--
-- Volcado de datos para la tabla `version`
--

INSERT INTO `version` (`core_version`, `core_revision`, `db_version`, `cache_id`) VALUES
('AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)', 'f1c4622f4105+', 'ACDB 335.11-dev', 11);

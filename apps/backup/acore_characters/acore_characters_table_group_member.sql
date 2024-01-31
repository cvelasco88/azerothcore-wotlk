
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `group_member`
--

CREATE TABLE `group_member` (
  `guid` int UNSIGNED NOT NULL,
  `memberGuid` int UNSIGNED NOT NULL,
  `memberFlags` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `subgroup` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `roles` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Groups';

--
-- Truncar tablas antes de insertar `group_member`
--

TRUNCATE TABLE `group_member`;
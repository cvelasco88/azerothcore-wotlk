
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bugreport`
--

CREATE TABLE `bugreport` (
  `id` int UNSIGNED NOT NULL COMMENT 'Identifier',
  `type` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Debug System';

--
-- Truncar tablas antes de insertar `bugreport`
--

TRUNCATE TABLE `bugreport`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_instance`
--

CREATE TABLE `character_instance` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `instance` int UNSIGNED NOT NULL DEFAULT '0',
  `permanent` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `extended` tinyint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_instance`
--

TRUNCATE TABLE `character_instance`;
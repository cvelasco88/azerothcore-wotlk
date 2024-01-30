
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instance`
--

CREATE TABLE `instance` (
  `id` int UNSIGNED NOT NULL DEFAULT '0',
  `map` smallint UNSIGNED NOT NULL DEFAULT '0',
  `resettime` int UNSIGNED NOT NULL DEFAULT '0',
  `difficulty` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `completedEncounters` int UNSIGNED NOT NULL DEFAULT '0',
  `data` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `instance`
--

TRUNCATE TABLE `instance`;
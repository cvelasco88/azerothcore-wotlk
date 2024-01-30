
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pvpstats_battlegrounds`
--

CREATE TABLE `pvpstats_battlegrounds` (
  `id` bigint UNSIGNED NOT NULL,
  `winner_faction` tinyint NOT NULL,
  `bracket_id` tinyint UNSIGNED NOT NULL,
  `type` tinyint UNSIGNED NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `pvpstats_battlegrounds`
--

TRUNCATE TABLE `pvpstats_battlegrounds`;
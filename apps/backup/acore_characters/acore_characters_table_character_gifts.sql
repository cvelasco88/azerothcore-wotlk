
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_gifts`
--

CREATE TABLE `character_gifts` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `item_guid` int UNSIGNED NOT NULL DEFAULT '0',
  `entry` int UNSIGNED NOT NULL DEFAULT '0',
  `flags` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_gifts`
--

TRUNCATE TABLE `character_gifts`;
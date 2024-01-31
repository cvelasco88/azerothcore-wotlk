
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_achievement`
--

CREATE TABLE `character_achievement` (
  `guid` int UNSIGNED NOT NULL,
  `achievement` smallint UNSIGNED NOT NULL,
  `date` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_achievement`
--

TRUNCATE TABLE `character_achievement`;
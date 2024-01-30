
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_talent`
--

CREATE TABLE `character_talent` (
  `guid` int UNSIGNED NOT NULL,
  `spell` int UNSIGNED NOT NULL,
  `specMask` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_talent`
--

TRUNCATE TABLE `character_talent`;
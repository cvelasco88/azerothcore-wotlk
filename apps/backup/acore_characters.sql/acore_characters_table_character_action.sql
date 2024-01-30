
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_action`
--

CREATE TABLE `character_action` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `spec` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `button` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `action` int UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_action`
--

TRUNCATE TABLE `character_action`;
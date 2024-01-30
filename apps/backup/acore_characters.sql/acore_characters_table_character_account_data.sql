
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_account_data`
--

CREATE TABLE `character_account_data` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_account_data`
--

TRUNCATE TABLE `character_account_data`;
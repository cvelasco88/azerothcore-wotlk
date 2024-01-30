
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_brew_of_the_month`
--

CREATE TABLE `character_brew_of_the_month` (
  `guid` int UNSIGNED NOT NULL,
  `lastEventId` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_brew_of_the_month`
--

TRUNCATE TABLE `character_brew_of_the_month`;
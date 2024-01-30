
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autobroadcast`
--

CREATE TABLE `autobroadcast` (
  `realmid` int NOT NULL DEFAULT '-1',
  `id` tinyint UNSIGNED NOT NULL,
  `weight` tinyint UNSIGNED DEFAULT '1',
  `text` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `autobroadcast`
--

TRUNCATE TABLE `autobroadcast`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_encounter`
--

CREATE TABLE `log_encounter` (
  `time` datetime NOT NULL,
  `map` smallint UNSIGNED NOT NULL,
  `difficulty` tinyint UNSIGNED NOT NULL,
  `creditType` tinyint UNSIGNED NOT NULL,
  `creditEntry` int UNSIGNED NOT NULL,
  `playersInfo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `log_encounter`
--

TRUNCATE TABLE `log_encounter`;
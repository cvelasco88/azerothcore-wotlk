
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movie_dbc`
--

CREATE TABLE `movie_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Filename` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Volume` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `movie_dbc`
--

TRUNCATE TABLE `movie_dbc`;
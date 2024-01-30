
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cinematicsequences_dbc`
--

CREATE TABLE `cinematicsequences_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `SoundID` int NOT NULL DEFAULT '0',
  `Camera_1` int NOT NULL DEFAULT '0',
  `Camera_2` int NOT NULL DEFAULT '0',
  `Camera_3` int NOT NULL DEFAULT '0',
  `Camera_4` int NOT NULL DEFAULT '0',
  `Camera_5` int NOT NULL DEFAULT '0',
  `Camera_6` int NOT NULL DEFAULT '0',
  `Camera_7` int NOT NULL DEFAULT '0',
  `Camera_8` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `cinematicsequences_dbc`
--

TRUNCATE TABLE `cinematicsequences_dbc`;
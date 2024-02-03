
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `questfactionreward_dbc`
--

CREATE TABLE `questfactionreward_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Difficulty_1` int NOT NULL DEFAULT '0',
  `Difficulty_2` int NOT NULL DEFAULT '0',
  `Difficulty_3` int NOT NULL DEFAULT '0',
  `Difficulty_4` int NOT NULL DEFAULT '0',
  `Difficulty_5` int NOT NULL DEFAULT '0',
  `Difficulty_6` int NOT NULL DEFAULT '0',
  `Difficulty_7` int NOT NULL DEFAULT '0',
  `Difficulty_8` int NOT NULL DEFAULT '0',
  `Difficulty_9` int NOT NULL DEFAULT '0',
  `Difficulty_10` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `questfactionreward_dbc`
--

TRUNCATE TABLE `questfactionreward_dbc`;
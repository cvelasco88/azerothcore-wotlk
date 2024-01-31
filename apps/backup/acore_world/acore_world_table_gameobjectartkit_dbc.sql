
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gameobjectartkit_dbc`
--

CREATE TABLE `gameobjectartkit_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Texture_1` int NOT NULL DEFAULT '0',
  `Texture_2` int NOT NULL DEFAULT '0',
  `Texture_3` int NOT NULL DEFAULT '0',
  `Attach_Model_1` int NOT NULL DEFAULT '0',
  `Attach_Model_2` int NOT NULL DEFAULT '0',
  `Attach_Model_3` int NOT NULL DEFAULT '0',
  `Attach_Model_4` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `gameobjectartkit_dbc`
--

TRUNCATE TABLE `gameobjectartkit_dbc`;
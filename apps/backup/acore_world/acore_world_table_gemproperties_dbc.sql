
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gemproperties_dbc`
--

CREATE TABLE `gemproperties_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Enchant_Id` int NOT NULL DEFAULT '0',
  `Maxcount_Inv` int NOT NULL DEFAULT '0',
  `Maxcount_Item` int NOT NULL DEFAULT '0',
  `Type` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `gemproperties_dbc`
--

TRUNCATE TABLE `gemproperties_dbc`;
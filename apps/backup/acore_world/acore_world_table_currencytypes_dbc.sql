
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `currencytypes_dbc`
--

CREATE TABLE `currencytypes_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `ItemID` int NOT NULL DEFAULT '0',
  `CategoryID` int NOT NULL DEFAULT '0',
  `BitIndex` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `currencytypes_dbc`
--

TRUNCATE TABLE `currencytypes_dbc`;
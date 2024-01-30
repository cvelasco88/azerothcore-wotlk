
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `taxipath_dbc`
--

CREATE TABLE `taxipath_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `FromTaxiNode` int NOT NULL DEFAULT '0',
  `ToTaxiNode` int NOT NULL DEFAULT '0',
  `Cost` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `taxipath_dbc`
--

TRUNCATE TABLE `taxipath_dbc`;
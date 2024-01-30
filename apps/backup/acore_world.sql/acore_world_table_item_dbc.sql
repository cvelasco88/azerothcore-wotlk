
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_dbc`
--

CREATE TABLE `item_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `ClassID` int NOT NULL DEFAULT '0',
  `SubclassID` int NOT NULL DEFAULT '0',
  `Sound_Override_Subclassid` int NOT NULL DEFAULT '0',
  `Material` int NOT NULL DEFAULT '0',
  `DisplayInfoID` int NOT NULL DEFAULT '0',
  `InventoryType` int NOT NULL DEFAULT '0',
  `SheatheType` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `item_dbc`
--

TRUNCATE TABLE `item_dbc`;
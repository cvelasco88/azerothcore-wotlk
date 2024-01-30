
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playercreateinfo_item`
--

CREATE TABLE `playercreateinfo_item` (
  `race` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `class` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `itemid` int UNSIGNED NOT NULL DEFAULT '0',
  `amount` int NOT NULL DEFAULT '1',
  `Note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `playercreateinfo_item`
--

TRUNCATE TABLE `playercreateinfo_item`;
--
-- Volcado de datos para la tabla `playercreateinfo_item`
--

INSERT INTO `playercreateinfo_item` (`race`, `class`, `itemid`, `amount`, `Note`) VALUES
(0, 6, 40582, -1, '[TDB PH] - unsused Scourgestone');

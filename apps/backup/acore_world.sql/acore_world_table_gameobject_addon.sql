
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gameobject_addon`
--

CREATE TABLE `gameobject_addon` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `invisibilityType` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `invisibilityValue` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `gameobject_addon`
--

TRUNCATE TABLE `gameobject_addon`;
--
-- Volcado de datos para la tabla `gameobject_addon`
--

INSERT INTO `gameobject_addon` (`guid`, `invisibilityType`, `invisibilityValue`) VALUES
(270, 9, 1000),
(5141, 0, 0),
(5193, 0, 0),
(5205, 0, 0),
(5382, 0, 0),
(5398, 0, 0),
(5405, 0, 0),
(5425, 0, 0),
(6134, 9, 1000),
(6135, 9, 1000),
(6342, 8, 1000),
(6343, 8, 1000),
(20458, 0, 0),
(20459, 0, 0),
(24222, 0, 0),
(24223, 0, 0),
(25023, 0, 0),
(25024, 0, 0),
(25025, 0, 0),
(25026, 0, 0),
(25120, 0, 0),
(25256, 0, 0),
(25257, 0, 0),
(26628, 0, 0),
(31619, 0, 0),
(50347, 0, 0),
(268853, 8, 1000),
(268854, 5, 1000),
(2133392, 7, 1000),
(2133393, 7, 1000),
(2133394, 7, 1000),
(2133395, 7, 1000);

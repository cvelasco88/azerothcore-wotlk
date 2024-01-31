
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `powerdisplay_dbc`
--

CREATE TABLE `powerdisplay_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `ActualType` int NOT NULL DEFAULT '0',
  `GlobalstringBaseTag` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Red` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Green` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Blue` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `powerdisplay_dbc`
--

TRUNCATE TABLE `powerdisplay_dbc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_access`
--

CREATE TABLE `account_access` (
  `id` int UNSIGNED NOT NULL,
  `gmlevel` tinyint UNSIGNED NOT NULL,
  `RealmID` int NOT NULL DEFAULT '-1',
  `comment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `account_access`
--

TRUNCATE TABLE `account_access`;
--
-- Volcado de datos para la tabla `account_access`
--

INSERT INTO `account_access` (`id`, `gmlevel`, `RealmID`, `comment`) VALUES
(1, 3, -1, '');

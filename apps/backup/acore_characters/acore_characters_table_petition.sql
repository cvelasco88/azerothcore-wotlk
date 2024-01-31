
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `petition`
--

CREATE TABLE `petition` (
  `ownerguid` int UNSIGNED NOT NULL,
  `petitionguid` int UNSIGNED DEFAULT '0',
  `name` varchar(24) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild System';

--
-- Truncar tablas antes de insertar `petition`
--

TRUNCATE TABLE `petition`;
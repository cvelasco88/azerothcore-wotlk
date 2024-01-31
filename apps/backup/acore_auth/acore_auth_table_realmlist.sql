
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realmlist`
--

CREATE TABLE `realmlist` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `localAddress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `localSubnetMask` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '255.255.255.0',
  `port` smallint UNSIGNED NOT NULL DEFAULT '8085',
  `icon` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `flag` tinyint UNSIGNED NOT NULL DEFAULT '2',
  `timezone` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `allowedSecurityLevel` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `population` float NOT NULL DEFAULT '0',
  `gamebuild` int UNSIGNED NOT NULL DEFAULT '12340'
) ;

--
-- Truncar tablas antes de insertar `realmlist`
--

TRUNCATE TABLE `realmlist`;
--
-- Volcado de datos para la tabla `realmlist`
--

INSERT INTO `realmlist` (`id`, `name`, `address`, `localAddress`, `localSubnetMask`, `port`, `icon`, `flag`, `timezone`, `allowedSecurityLevel`, `population`, `gamebuild`) VALUES
(1, 'AzerothCore', '127.0.0.1', '127.0.0.1', '255.255.255.0', 8085, 0, 0, 1, 0, 0, 12340);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outdoorpvp_template`
--

CREATE TABLE `outdoorpvp_template` (
  `TypeId` tinyint UNSIGNED NOT NULL,
  `ScriptName` char(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='OutdoorPvP Templates';

--
-- Truncar tablas antes de insertar `outdoorpvp_template`
--

TRUNCATE TABLE `outdoorpvp_template`;
--
-- Volcado de datos para la tabla `outdoorpvp_template`
--

INSERT INTO `outdoorpvp_template` (`TypeId`, `ScriptName`, `comment`) VALUES
(1, 'outdoorpvp_hp', 'Hellfire Peninsula'),
(2, 'outdoorpvp_na', 'Nagrand'),
(3, 'outdoorpvp_tf', 'Terokkar Forest'),
(4, 'outdoorpvp_zm', 'Zangarmarsh'),
(5, 'outdoorpvp_si', 'Silithus'),
(6, 'outdoorpvp_ep', 'Eastern Plaguelands'),
(7, 'outdoorpvp_gh', 'Grizzly Hills');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `realmcharacters`
--

CREATE TABLE `realmcharacters` (
  `realmid` int UNSIGNED NOT NULL DEFAULT '0',
  `acctid` int UNSIGNED NOT NULL,
  `numchars` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Realm Character Tracker';

--
-- Truncar tablas antes de insertar `realmcharacters`
--

TRUNCATE TABLE `realmcharacters`;
--
-- Volcado de datos para la tabla `realmcharacters`
--

INSERT INTO `realmcharacters` (`realmid`, `acctid`, `numchars`) VALUES
(1, 1, 0);


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `petition_sign`
--

CREATE TABLE `petition_sign` (
  `ownerguid` int UNSIGNED NOT NULL,
  `petitionguid` int UNSIGNED NOT NULL DEFAULT '0',
  `playerguid` int UNSIGNED NOT NULL DEFAULT '0',
  `player_account` int UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild System';

--
-- Truncar tablas antes de insertar `petition_sign`
--

TRUNCATE TABLE `petition_sign`;
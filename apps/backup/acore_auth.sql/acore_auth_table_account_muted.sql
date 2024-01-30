
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_muted`
--

CREATE TABLE `account_muted` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `mutedate` int UNSIGNED NOT NULL DEFAULT '0',
  `mutetime` int UNSIGNED NOT NULL DEFAULT '0',
  `mutedby` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mutereason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='mute List';

--
-- Truncar tablas antes de insertar `account_muted`
--

TRUNCATE TABLE `account_muted`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_banned`
--

CREATE TABLE `character_banned` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier',
  `bandate` int UNSIGNED NOT NULL DEFAULT '0',
  `unbandate` int UNSIGNED NOT NULL DEFAULT '0',
  `bannedby` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banreason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Ban List';

--
-- Truncar tablas antes de insertar `character_banned`
--

TRUNCATE TABLE `character_banned`;
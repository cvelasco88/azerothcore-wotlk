
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_banned`
--

CREATE TABLE `account_banned` (
  `id` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Account id',
  `bandate` int UNSIGNED NOT NULL DEFAULT '0',
  `unbandate` int UNSIGNED NOT NULL DEFAULT '0',
  `bannedby` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `banreason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Ban List';

--
-- Truncar tablas antes de insertar `account_banned`
--

TRUNCATE TABLE `account_banned`;
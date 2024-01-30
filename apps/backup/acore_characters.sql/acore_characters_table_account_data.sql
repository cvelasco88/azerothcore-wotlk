
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_data`
--

CREATE TABLE `account_data` (
  `accountId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Account Identifier',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `account_data`
--

TRUNCATE TABLE `account_data`;
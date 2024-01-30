
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs_ip_actions`
--

CREATE TABLE `logs_ip_actions` (
  `id` int UNSIGNED NOT NULL COMMENT 'Unique Identifier',
  `account_id` int UNSIGNED NOT NULL COMMENT 'Account ID',
  `character_guid` int UNSIGNED NOT NULL COMMENT 'Character Guid',
  `type` tinyint UNSIGNED NOT NULL,
  `ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `systemnote` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Notes inserted by system',
  `unixtime` int UNSIGNED NOT NULL COMMENT 'Unixtime',
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci COMMENT 'Allows users to add a comment'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Used to log ips of individual actions';

--
-- Truncar tablas antes de insertar `logs_ip_actions`
--

TRUNCATE TABLE `logs_ip_actions`;
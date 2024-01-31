
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail`
--

CREATE TABLE `mail` (
  `id` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Identifier',
  `messageType` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `stationery` tinyint NOT NULL DEFAULT '41',
  `mailTemplateId` smallint UNSIGNED NOT NULL DEFAULT '0',
  `sender` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Character Global Unique Identifier',
  `receiver` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Character Global Unique Identifier',
  `subject` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `body` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `has_items` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `expire_time` int UNSIGNED NOT NULL DEFAULT '0',
  `deliver_time` int UNSIGNED NOT NULL DEFAULT '0',
  `money` int UNSIGNED NOT NULL DEFAULT '0',
  `cod` int UNSIGNED NOT NULL DEFAULT '0',
  `checked` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Mail System';

--
-- Truncar tablas antes de insertar `mail`
--

TRUNCATE TABLE `mail`;
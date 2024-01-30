
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail_items`
--

CREATE TABLE `mail_items` (
  `mail_id` int UNSIGNED NOT NULL DEFAULT '0',
  `item_guid` int UNSIGNED NOT NULL DEFAULT '0',
  `receiver` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Character Global Unique Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `mail_items`
--

TRUNCATE TABLE `mail_items`;
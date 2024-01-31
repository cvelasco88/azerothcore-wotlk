
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail_server_template`
--

CREATE TABLE `mail_server_template` (
  `id` int UNSIGNED NOT NULL,
  `reqLevel` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `reqPlayTime` int UNSIGNED NOT NULL DEFAULT '0',
  `moneyA` int UNSIGNED NOT NULL DEFAULT '0',
  `moneyH` int UNSIGNED NOT NULL DEFAULT '0',
  `itemA` int UNSIGNED NOT NULL DEFAULT '0',
  `itemCountA` int UNSIGNED NOT NULL DEFAULT '0',
  `itemH` int UNSIGNED NOT NULL DEFAULT '0',
  `itemCountH` int UNSIGNED NOT NULL DEFAULT '0',
  `subject` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `mail_server_template`
--

TRUNCATE TABLE `mail_server_template`;
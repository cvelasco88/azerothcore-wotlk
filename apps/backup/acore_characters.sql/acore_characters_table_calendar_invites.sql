
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `calendar_invites`
--

CREATE TABLE `calendar_invites` (
  `id` bigint UNSIGNED NOT NULL DEFAULT '0',
  `event` bigint UNSIGNED NOT NULL DEFAULT '0',
  `invitee` int UNSIGNED NOT NULL DEFAULT '0',
  `sender` int UNSIGNED NOT NULL DEFAULT '0',
  `status` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `statustime` int UNSIGNED NOT NULL DEFAULT '0',
  `rank` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `calendar_invites`
--

TRUNCATE TABLE `calendar_invites`;
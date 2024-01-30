
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels_rights`
--

CREATE TABLE `channels_rights` (
  `name` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `flags` int UNSIGNED NOT NULL,
  `speakdelay` int UNSIGNED NOT NULL,
  `joinmessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `delaymessage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `moderators` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `channels_rights`
--

TRUNCATE TABLE `channels_rights`;
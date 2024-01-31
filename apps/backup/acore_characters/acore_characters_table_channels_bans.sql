
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `channels_bans`
--

CREATE TABLE `channels_bans` (
  `channelId` int UNSIGNED NOT NULL,
  `playerGUID` int UNSIGNED NOT NULL,
  `banTime` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `channels_bans`
--

TRUNCATE TABLE `channels_bans`;
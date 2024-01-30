
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mail_server_character`
--

CREATE TABLE `mail_server_character` (
  `guid` int UNSIGNED NOT NULL,
  `mailId` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `mail_server_character`
--

TRUNCATE TABLE `mail_server_character`;
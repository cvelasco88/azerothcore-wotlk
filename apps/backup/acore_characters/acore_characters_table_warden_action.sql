
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `warden_action`
--

CREATE TABLE `warden_action` (
  `wardenId` smallint UNSIGNED NOT NULL,
  `action` tinyint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `warden_action`
--

TRUNCATE TABLE `warden_action`;
--
-- Volcado de datos para la tabla `warden_action`
--

INSERT INTO `warden_action` (`wardenId`, `action`) VALUES
(437, 0);

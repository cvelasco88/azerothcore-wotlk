
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secret_digest`
--

CREATE TABLE `secret_digest` (
  `id` int UNSIGNED NOT NULL,
  `digest` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `secret_digest`
--

TRUNCATE TABLE `secret_digest`;
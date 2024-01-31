
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserved_name`
--

CREATE TABLE `reserved_name` (
  `name` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player Reserved Names';

--
-- Truncar tablas antes de insertar `reserved_name`
--

TRUNCATE TABLE `reserved_name`;
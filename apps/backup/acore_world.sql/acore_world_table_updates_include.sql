
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `updates_include`
--

CREATE TABLE `updates_include` (
  `path` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'directory to include. $ means relative to the source directory.',
  `state` enum('RELEASED','ARCHIVED','CUSTOM') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'RELEASED' COMMENT 'defines if the directory contains released or archived updates.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='List of directories where we want to include sql updates.';

--
-- Truncar tablas antes de insertar `updates_include`
--

TRUNCATE TABLE `updates_include`;
--
-- Volcado de datos para la tabla `updates_include`
--

INSERT INTO `updates_include` (`path`, `state`) VALUES
('$/data/sql/archive/db_world', 'ARCHIVED'),
('$/data/sql/custom/db_world', 'CUSTOM'),
('$/data/sql/updates/db_world', 'RELEASED');


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instance_saved_go_state_data`
--

CREATE TABLE `instance_saved_go_state_data` (
  `id` int UNSIGNED NOT NULL COMMENT 'instance.id',
  `guid` int UNSIGNED NOT NULL COMMENT 'gameobject.guid',
  `state` tinyint UNSIGNED DEFAULT '0' COMMENT 'gameobject.state'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `instance_saved_go_state_data`
--

TRUNCATE TABLE `instance_saved_go_state_data`;
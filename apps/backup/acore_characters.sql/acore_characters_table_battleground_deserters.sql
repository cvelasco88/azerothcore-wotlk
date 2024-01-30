
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `battleground_deserters`
--

CREATE TABLE `battleground_deserters` (
  `guid` int UNSIGNED NOT NULL COMMENT 'characters.guid',
  `type` tinyint UNSIGNED NOT NULL COMMENT 'type of the desertion',
  `datetime` datetime NOT NULL COMMENT 'datetime of the desertion'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `battleground_deserters`
--

TRUNCATE TABLE `battleground_deserters`;
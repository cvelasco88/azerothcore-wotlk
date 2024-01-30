
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recovery_item`
--

CREATE TABLE `recovery_item` (
  `Id` int UNSIGNED NOT NULL,
  `Guid` int UNSIGNED NOT NULL DEFAULT '0',
  `ItemEntry` int UNSIGNED DEFAULT '0',
  `Count` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `recovery_item`
--

TRUNCATE TABLE `recovery_item`;
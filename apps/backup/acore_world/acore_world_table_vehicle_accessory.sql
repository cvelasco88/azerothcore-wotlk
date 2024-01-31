
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle_accessory`
--

CREATE TABLE `vehicle_accessory` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `accessory_entry` int UNSIGNED NOT NULL DEFAULT '0',
  `seat_id` tinyint NOT NULL DEFAULT '0',
  `minion` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `summontype` tinyint UNSIGNED NOT NULL DEFAULT '6' COMMENT 'see enum TempSummonType',
  `summontimer` int UNSIGNED NOT NULL DEFAULT '30000' COMMENT 'timer, only relevant for certain summontypes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `vehicle_accessory`
--

TRUNCATE TABLE `vehicle_accessory`;
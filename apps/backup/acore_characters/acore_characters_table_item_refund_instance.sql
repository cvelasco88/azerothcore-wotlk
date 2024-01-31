
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_refund_instance`
--

CREATE TABLE `item_refund_instance` (
  `item_guid` int UNSIGNED NOT NULL COMMENT 'Item GUID',
  `player_guid` int UNSIGNED NOT NULL COMMENT 'Player GUID',
  `paidMoney` int UNSIGNED NOT NULL DEFAULT '0',
  `paidExtendedCost` smallint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Item Refund System';

--
-- Truncar tablas antes de insertar `item_refund_instance`
--

TRUNCATE TABLE `item_refund_instance`;
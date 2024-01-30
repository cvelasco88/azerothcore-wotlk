
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `item_soulbound_trade_data`
--

CREATE TABLE `item_soulbound_trade_data` (
  `itemGuid` int UNSIGNED NOT NULL COMMENT 'Item GUID',
  `allowedPlayers` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Space separated GUID list of players who can receive this item in trade'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Item Refund System';

--
-- Truncar tablas antes de insertar `item_soulbound_trade_data`
--

TRUNCATE TABLE `item_soulbound_trade_data`;
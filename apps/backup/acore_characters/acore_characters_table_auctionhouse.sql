
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auctionhouse`
--

CREATE TABLE `auctionhouse` (
  `id` int UNSIGNED NOT NULL DEFAULT '0',
  `houseid` tinyint UNSIGNED NOT NULL DEFAULT '7',
  `itemguid` int UNSIGNED NOT NULL DEFAULT '0',
  `itemowner` int UNSIGNED NOT NULL DEFAULT '0',
  `buyoutprice` int UNSIGNED NOT NULL DEFAULT '0',
  `time` int UNSIGNED NOT NULL DEFAULT '0',
  `buyguid` int UNSIGNED NOT NULL DEFAULT '0',
  `lastbid` int UNSIGNED NOT NULL DEFAULT '0',
  `startbid` int UNSIGNED NOT NULL DEFAULT '0',
  `deposit` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `auctionhouse`
--

TRUNCATE TABLE `auctionhouse`;
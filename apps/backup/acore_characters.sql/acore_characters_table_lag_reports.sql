
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lag_reports`
--

CREATE TABLE `lag_reports` (
  `reportId` int UNSIGNED NOT NULL,
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `lagType` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `mapId` smallint UNSIGNED NOT NULL DEFAULT '0',
  `posX` float NOT NULL DEFAULT '0',
  `posY` float NOT NULL DEFAULT '0',
  `posZ` float NOT NULL DEFAULT '0',
  `latency` int UNSIGNED NOT NULL DEFAULT '0',
  `createTime` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `lag_reports`
--

TRUNCATE TABLE `lag_reports`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gm_ticket`
--

CREATE TABLE `gm_ticket` (
  `id` int UNSIGNED NOT NULL,
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0' COMMENT '0 open, 1 closed, 2 character deleted',
  `playerGuid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier of ticket creator',
  `name` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Name of ticket creator',
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `createTime` int UNSIGNED NOT NULL DEFAULT '0',
  `mapId` smallint UNSIGNED NOT NULL DEFAULT '0',
  `posX` float NOT NULL DEFAULT '0',
  `posY` float NOT NULL DEFAULT '0',
  `posZ` float NOT NULL DEFAULT '0',
  `lastModifiedTime` int UNSIGNED NOT NULL DEFAULT '0',
  `closedBy` int NOT NULL DEFAULT '0' COMMENT '-1 Closed by Console, >0 GUID of GM',
  `assignedTo` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'GUID of admin to whom ticket is assigned',
  `comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `response` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `escalated` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `viewed` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `needMoreHelp` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `resolvedBy` int NOT NULL DEFAULT '0' COMMENT '-1 Resolved by Console, >0 GUID of GM'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `gm_ticket`
--

TRUNCATE TABLE `gm_ticket`;
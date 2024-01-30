
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uptime`
--

CREATE TABLE `uptime` (
  `realmid` int UNSIGNED NOT NULL,
  `starttime` int UNSIGNED NOT NULL DEFAULT '0',
  `uptime` int UNSIGNED NOT NULL DEFAULT '0',
  `maxplayers` smallint UNSIGNED NOT NULL DEFAULT '0',
  `revision` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'AzerothCore'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Uptime system';

--
-- Truncar tablas antes de insertar `uptime`
--

TRUNCATE TABLE `uptime`;
--
-- Volcado de datos para la tabla `uptime`
--

INSERT INTO `uptime` (`realmid`, `starttime`, `uptime`, `maxplayers`, `revision`) VALUES
(1, 1550400304, 121, 0, 'AzerothCore rev. 2bcedc2859e7 2019-02-17 10:04:09 +0100 (master branch) (Unix, Debug)'),
(1, 1550400454, 1440, 0, 'AzerothCore rev. 2bcedc2859e7 2019-02-17 10:04:09 +0100 (master branch) (Unix, Debug)'),
(1, 1661068597, 0, 0, 'AzerothCore rev. 5d6dfca80cf1 2022-08-21 09:48:09 +0200 (new-squash-POGGIES branch) (Win64, RelWithDebInfo, Static)'),
(1, 1675207201, 0, 0, 'AzerothCore rev. e7cbc80a913b 2023-01-31 22:22:22 +0000 (master branch) (Win64, RelWithDebInfo, Static)'),
(1, 1682284745, 0, 0, 'AzerothCore rev. 5dc6f9cf78f1 2023-04-23 21:03:18 +0000 (master branch) (Win64, RelWithDebInfo, Static)'),
(1, 1705757024, 0, 0, 'AzerothCore rev. e6a98aa294c0 2024-01-20 14:06:59 +0100 (checkarchive branch) (Win64, RelWithDebInfo, Static)'),
(1, 1705757166, 0, 0, 'AzerothCore rev. f60fb6307dc6 2024-01-20 13:20:35 +0000 (it-is-time-for-the-yearly-squash!-hopefully-the-archive-skipping-between-commits-issue-is-solved-now.-only-time-will-tell.-HAPPY-NEW-2024 branch) (Win64, RelWithDebInfo, Static)'),
(1, 1705764139, 0, 0, 'AzerothCore rev. bd8a08e50dfe+ 2024-01-20 14:48:23 +0100 (it-is-time-for-the-yearly-squash!-hopefully-the-archive-skipping-between-commits-issue-is-solved-now.-only-time-will-tell.-HAPPY-NEW-2024 branch) (Win64, RelWithDebInfo, Static)'),
(1, 1706566640, 8218, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)'),
(1, 1706636089, 624, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)'),
(1, 1706636726, 0, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)'),
(1, 1706636764, 2056, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)'),
(1, 1706638889, 497, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)'),
(1, 1706639446, 680, 0, 'AzerothCore rev. f1c4622f4105+ 2024-01-29 02:42:14 +0000 (master branch) (Unix, RelWithDebInfo, Static)');

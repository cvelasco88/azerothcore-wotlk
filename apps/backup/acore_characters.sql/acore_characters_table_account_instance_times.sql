
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_instance_times`
--

CREATE TABLE `account_instance_times` (
  `accountId` int UNSIGNED NOT NULL,
  `instanceId` int UNSIGNED NOT NULL DEFAULT '0',
  `releaseTime` bigint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `account_instance_times`
--

TRUNCATE TABLE `account_instance_times`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account_tutorial`
--

CREATE TABLE `account_tutorial` (
  `accountId` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Account Identifier',
  `tut0` int UNSIGNED NOT NULL DEFAULT '0',
  `tut1` int UNSIGNED NOT NULL DEFAULT '0',
  `tut2` int UNSIGNED NOT NULL DEFAULT '0',
  `tut3` int UNSIGNED NOT NULL DEFAULT '0',
  `tut4` int UNSIGNED NOT NULL DEFAULT '0',
  `tut5` int UNSIGNED NOT NULL DEFAULT '0',
  `tut6` int UNSIGNED NOT NULL DEFAULT '0',
  `tut7` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `account_tutorial`
--

TRUNCATE TABLE `account_tutorial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `guild_member_withdraw`
--

CREATE TABLE `guild_member_withdraw` (
  `guid` int UNSIGNED NOT NULL,
  `tab0` int UNSIGNED NOT NULL DEFAULT '0',
  `tab1` int UNSIGNED NOT NULL DEFAULT '0',
  `tab2` int UNSIGNED NOT NULL DEFAULT '0',
  `tab3` int UNSIGNED NOT NULL DEFAULT '0',
  `tab4` int UNSIGNED NOT NULL DEFAULT '0',
  `tab5` int UNSIGNED NOT NULL DEFAULT '0',
  `money` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Guild Member Daily Withdraws';

--
-- Truncar tablas antes de insertar `guild_member_withdraw`
--

TRUNCATE TABLE `guild_member_withdraw`;
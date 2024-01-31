
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `account`
--

CREATE TABLE `account` (
  `id` int UNSIGNED NOT NULL COMMENT 'Identifier',
  `username` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `salt` binary(32) NOT NULL,
  `verifier` binary(32) NOT NULL,
  `session_key` binary(40) DEFAULT NULL,
  `totp_secret` varbinary(128) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `reg_mail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `joindate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `last_attempt_ip` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '127.0.0.1',
  `failed_logins` int UNSIGNED NOT NULL DEFAULT '0',
  `locked` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `lock_country` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '00',
  `last_login` timestamp NULL DEFAULT NULL,
  `online` int UNSIGNED NOT NULL DEFAULT '0',
  `expansion` tinyint UNSIGNED NOT NULL DEFAULT '2',
  `mutetime` bigint NOT NULL DEFAULT '0',
  `mutereason` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `muteby` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `locale` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `os` varchar(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `recruiter` int UNSIGNED NOT NULL DEFAULT '0',
  `totaltime` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Account System';

--
-- Truncar tablas antes de insertar `account`
--

TRUNCATE TABLE `account`;
--
-- Volcado de datos para la tabla `account`
--

INSERT INTO `account` (`id`, `username`, `salt`, `verifier`, `session_key`, `totp_secret`, `email`, `reg_mail`, `joindate`, `last_ip`, `last_attempt_ip`, `failed_logins`, `locked`, `lock_country`, `last_login`, `online`, `expansion`, `mutetime`, `mutereason`, `muteby`, `locale`, `os`, `recruiter`, `totaltime`) VALUES
(1, 'TEST', 0x2a8776fb890298d0929a087f83de00b5588b8a1d4bd0a2fd09dcd50098213b61, 0x7c43590945ec798a8a4dbf1779c7ac690b527cee43c167a00e0477ca16b51e72, 0xfceea1620c7805269cf2daf2303bd94ddbd7fd471b26287d3d77f1653d1acc46d288d7ba23d12b36, NULL, '', '', '2024-01-30 17:43:23', '172.18.0.1', '172.18.0.1', 0, 0, '00', '2024-01-30 17:47:48', 0, 2, 0, '', '', 6, 'Win', 0, 0);

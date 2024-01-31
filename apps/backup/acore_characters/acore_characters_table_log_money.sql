
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_money`
--

CREATE TABLE `log_money` (
  `sender_acc` int UNSIGNED NOT NULL,
  `sender_guid` int UNSIGNED NOT NULL,
  `sender_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sender_ip` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_acc` int UNSIGNED NOT NULL,
  `receiver_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `money` bigint UNSIGNED NOT NULL,
  `topic` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `type` tinyint NOT NULL COMMENT '1=COD,2=AH,3=GB DEPOSIT,4=GB WITHDRAW,5=MAIL,6=TRADE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `log_money`
--

TRUNCATE TABLE `log_money`;
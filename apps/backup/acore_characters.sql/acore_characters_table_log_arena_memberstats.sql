
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_arena_memberstats`
--

CREATE TABLE `log_arena_memberstats` (
  `fight_id` int UNSIGNED NOT NULL,
  `member_id` tinyint UNSIGNED NOT NULL,
  `name` char(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guid` int UNSIGNED NOT NULL,
  `team` int UNSIGNED NOT NULL,
  `account` int UNSIGNED NOT NULL,
  `ip` char(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `damage` int UNSIGNED NOT NULL,
  `heal` int UNSIGNED NOT NULL,
  `kblows` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `log_arena_memberstats`
--

TRUNCATE TABLE `log_arena_memberstats`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_cooldown_overrides`
--

CREATE TABLE `spell_cooldown_overrides` (
  `Id` int UNSIGNED NOT NULL,
  `RecoveryTime` int UNSIGNED NOT NULL DEFAULT '0',
  `CategoryRecoveryTime` int UNSIGNED NOT NULL DEFAULT '0',
  `StartRecoveryTime` int UNSIGNED NOT NULL DEFAULT '0',
  `StartRecoveryCategory` int UNSIGNED NOT NULL DEFAULT '0',
  `Comment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spell_cooldown_overrides`
--

TRUNCATE TABLE `spell_cooldown_overrides`;
--
-- Volcado de datos para la tabla `spell_cooldown_overrides`
--

INSERT INTO `spell_cooldown_overrides` (`Id`, `RecoveryTime`, `CategoryRecoveryTime`, `StartRecoveryTime`, `StartRecoveryCategory`, `Comment`) VALUES
(37455, 20000, 20000, 0, 0, NULL),
(37456, 20000, 20000, 0, 0, NULL),
(37471, 15000, 15000, 0, 0, 'Karazhan Chest - Heroism'),
(37472, 15000, 15000, 0, 0, 'Karazhan Chest - Bloodlust'),
(37920, 30000, 30000, 0, 0, 'Fel Reaver Sentinel - Turbo Boost'),
(38006, 10000, 10000, 0, 0, 'Fel Reaver Sentinel - World Breaker'),
(38052, 15000, 15000, 0, 0, 'Fel Reaver Sentinel - Sonic Boom'),
(38055, 10000, 10000, 0, 0, 'Fel Reaver Sentinel - Destroy Deathforged Infernal');

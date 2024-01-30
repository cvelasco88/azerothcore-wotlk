
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `playercreateinfo_cast_spell`
--

CREATE TABLE `playercreateinfo_cast_spell` (
  `raceMask` int UNSIGNED NOT NULL DEFAULT '0',
  `classMask` int UNSIGNED NOT NULL DEFAULT '0',
  `spell` int UNSIGNED NOT NULL DEFAULT '0',
  `note` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `playercreateinfo_cast_spell`
--

TRUNCATE TABLE `playercreateinfo_cast_spell`;
--
-- Volcado de datos para la tabla `playercreateinfo_cast_spell`
--

INSERT INTO `playercreateinfo_cast_spell` (`raceMask`, `classMask`, `spell`, `note`) VALUES
(0, 32, 48266, 'Death Knight - Blood Presence'),
(0, 1, 2457, 'Warrior - Battle Stance');

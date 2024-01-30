
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_mixology`
--

CREATE TABLE `spell_mixology` (
  `entry` int UNSIGNED NOT NULL,
  `pctMod` float NOT NULL DEFAULT '30' COMMENT 'bonus multiplier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spell_mixology`
--

TRUNCATE TABLE `spell_mixology`;
--
-- Volcado de datos para la tabla `spell_mixology`
--

INSERT INTO `spell_mixology` (`entry`, `pctMod`) VALUES
(28497, 44.4),
(33721, 40),
(53746, 44.4),
(53748, 40),
(53749, 40),
(53751, 57),
(53752, 80),
(53755, 37.6),
(53758, 50),
(53760, 44.4),
(53763, 35),
(53764, 33.3),
(54212, 44.4),
(60340, 44.4),
(60341, 44.4),
(60343, 44.4),
(60344, 44.4),
(60345, 44.4),
(60346, 44.4),
(60347, 44.4),
(62380, 80);

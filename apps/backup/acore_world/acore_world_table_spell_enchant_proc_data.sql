
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_enchant_proc_data`
--

CREATE TABLE `spell_enchant_proc_data` (
  `entry` int UNSIGNED NOT NULL,
  `customChance` int UNSIGNED NOT NULL DEFAULT '0',
  `PPMChance` float NOT NULL DEFAULT '0',
  `procEx` int UNSIGNED NOT NULL DEFAULT '0',
  `attributeMask` int UNSIGNED NOT NULL DEFAULT '0'
) ;

--
-- Truncar tablas antes de insertar `spell_enchant_proc_data`
--

TRUNCATE TABLE `spell_enchant_proc_data`;
--
-- Volcado de datos para la tabla `spell_enchant_proc_data`
--

INSERT INTO `spell_enchant_proc_data` (`entry`, `customChance`, `PPMChance`, `procEx`, `attributeMask`) VALUES
(2, 0, 8.8, 0, 0),
(12, 0, 8.8, 0, 0),
(323, 0, 8.53, 0, 0),
(324, 0, 8.53, 0, 0),
(325, 0, 8.53, 0, 0),
(524, 0, 8.8, 0, 0),
(623, 0, 8.53, 0, 0),
(624, 0, 8.53, 0, 0),
(625, 0, 8.53, 0, 0),
(703, 0, 21.43, 0, 0),
(704, 0, 21.43, 0, 0),
(705, 0, 21.43, 0, 0),
(706, 0, 21.43, 0, 0),
(803, 0, 6, 0, 0),
(912, 0, 6, 0, 0),
(1667, 0, 8.8, 0, 0),
(1668, 0, 8.8, 0, 0),
(1894, 0, 1.7, 0, 0),
(1898, 0, 6, 0, 0),
(1899, 0, 1, 0, 0),
(1900, 0, 1, 0, 0),
(2635, 0, 8.8, 0, 0),
(2641, 0, 8.53, 0, 0),
(2644, 0, 21.43, 0, 0),
(2673, 0, 1, 0, 0),
(2675, 0, 1, 0, 2),
(3225, 0, 1, 0, 1),
(3239, 0, 3, 0, 0),
(3241, 0, 3, 0, 0),
(3251, 0, 3, 0, 0),
(3273, 0, 3, 0, 0),
(3368, 0, 2, 0, 0),
(3369, 0, 1, 0, 0),
(3768, 0, 8.53, 0, 0),
(3769, 0, 8.53, 0, 0),
(3772, 0, 21.43, 0, 0),
(3773, 0, 21.43, 0, 0),
(3782, 0, 8.8, 0, 0),
(3783, 0, 8.8, 0, 0),
(3784, 0, 8.8, 0, 0),
(3789, 0, 1, 0, 0),
(3869, 0, 1, 0, 0);

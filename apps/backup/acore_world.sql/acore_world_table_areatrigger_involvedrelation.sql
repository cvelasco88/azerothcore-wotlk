
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `areatrigger_involvedrelation`
--

CREATE TABLE `areatrigger_involvedrelation` (
  `id` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Identifier',
  `quest` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Quest Identifier'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Trigger System';

--
-- Truncar tablas antes de insertar `areatrigger_involvedrelation`
--

TRUNCATE TABLE `areatrigger_involvedrelation`;
--
-- Volcado de datos para la tabla `areatrigger_involvedrelation`
--

INSERT INTO `areatrigger_involvedrelation` (`id`, `quest`) VALUES
(78, 155),
(87, 76),
(88, 62),
(98, 201),
(169, 287),
(173, 437),
(175, 455),
(178, 503),
(196, 578),
(216, 870),
(225, 944),
(230, 954),
(231, 984),
(232, 984),
(235, 984),
(246, 1149),
(362, 1448),
(482, 1699),
(522, 1719),
(822, 2240),
(1205, 2989),
(1388, 3505),
(1667, 1265),
(2207, 5156),
(2327, 4842),
(2486, 4811),
(2726, 6185),
(2926, 25),
(2946, 6421),
(3367, 6025),
(3986, 8286),
(3991, 1658),
(4064, 9160),
(4071, 9193),
(4170, 9400),
(4200, 9607),
(4201, 9608),
(4280, 9700),
(4291, 9701),
(4293, 9716),
(4298, 9731),
(4300, 9752),
(4301, 9786),
(4581, 10750),
(4588, 10772),
(4899, 11890),
(4950, 12036),
(4963, 11652),
(4986, 12263),
(5003, 12506),
(5030, 12575),
(5052, 12665),
(5400, 13607),
(5703, 24656),
(5704, 24656),
(5705, 24541),
(5706, 24541);

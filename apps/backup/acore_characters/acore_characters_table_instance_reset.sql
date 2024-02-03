
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instance_reset`
--

CREATE TABLE `instance_reset` (
  `mapid` smallint UNSIGNED NOT NULL DEFAULT '0',
  `difficulty` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `resettime` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `instance_reset`
--

TRUNCATE TABLE `instance_reset`;
--
-- Volcado de datos para la tabla `instance_reset`
--

INSERT INTO `instance_reset` (`mapid`, `difficulty`, `resettime`) VALUES
(249, 0, 1706860800),
(249, 1, 1706860800),
(269, 1, 1706688000),
(309, 0, 1706760000),
(409, 0, 1706860800),
(469, 0, 1706860800),
(509, 0, 1706760000),
(531, 0, 1706860800),
(532, 0, 1706860800),
(533, 0, 1706860800),
(533, 1, 1706860800),
(534, 0, 1706860800),
(540, 1, 1706688000),
(542, 1, 1706688000),
(543, 1, 1706688000),
(544, 0, 1706860800),
(545, 1, 1706688000),
(546, 1, 1706688000),
(547, 1, 1706688000),
(548, 0, 1706860800),
(550, 0, 1706860800),
(552, 1, 1706688000),
(553, 1, 1706688000),
(554, 1, 1706688000),
(555, 1, 1706688000),
(556, 1, 1706688000),
(557, 1, 1706688000),
(558, 1, 1706688000),
(560, 1, 1706688000),
(564, 0, 1706860800),
(565, 0, 1706860800),
(568, 0, 1706760000),
(574, 1, 1706688000),
(575, 1, 1706688000),
(576, 1, 1706688000),
(578, 1, 1706688000),
(580, 0, 1706860800),
(585, 1, 1706688000),
(595, 1, 1706688000),
(598, 1, 1706688000),
(599, 1, 1706688000),
(600, 1, 1706688000),
(601, 1, 1706688000),
(602, 1, 1706688000),
(603, 0, 1706860800),
(603, 1, 1706860800),
(604, 1, 1706688000),
(608, 1, 1706688000),
(615, 0, 1706860800),
(615, 1, 1706860800),
(616, 0, 1706860800),
(616, 1, 1706860800),
(619, 1, 1706688000),
(624, 0, 1706860800),
(624, 1, 1706860800),
(631, 0, 1706860800),
(631, 1, 1706860800),
(631, 2, 1706860800),
(631, 3, 1706860800),
(632, 1, 1706688000),
(649, 0, 1706860800),
(649, 1, 1706860800),
(649, 2, 1706860800),
(649, 3, 1706860800),
(650, 1, 1706688000),
(658, 1, 1706688000),
(668, 1, 1706688000),
(724, 0, 1706860800),
(724, 1, 1706860800),
(724, 2, 1706860800),
(724, 3, 1706860800);
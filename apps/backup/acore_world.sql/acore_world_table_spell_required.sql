
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_required`
--

CREATE TABLE `spell_required` (
  `spell_id` int NOT NULL DEFAULT '0',
  `req_spell` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Spell Additinal Data';

--
-- Truncar tablas antes de insertar `spell_required`
--

TRUNCATE TABLE `spell_required`;
--
-- Volcado de datos para la tabla `spell_required`
--

INSERT INTO `spell_required` (`spell_id`, `req_spell`) VALUES
(99, 5487),
(779, 5487),
(1079, 768),
(1082, 768),
(1822, 768),
(1850, 768),
(5209, 5487),
(5211, 5487),
(5215, 768),
(5217, 768),
(5221, 768),
(5225, 768),
(5229, 5487),
(6785, 768),
(8998, 768),
(9005, 768),
(16689, 339),
(16810, 1062),
(16811, 5195),
(16812, 5196),
(16813, 9852),
(17329, 9853),
(20719, 768),
(22568, 768),
(22570, 768),
(22842, 5487),
(23161, 5784),
(23161, 33391),
(23214, 13819),
(23214, 33391),
(25782, 19838),
(25894, 19854),
(25899, 20911),
(25916, 25291),
(25918, 25290),
(27009, 26989),
(27141, 27140),
(27143, 27142),
(27681, 14752),
(33745, 5487),
(34767, 33391),
(34767, 34769),
(48933, 48931),
(48934, 48932),
(48937, 48935),
(48938, 48936),
(52610, 768),
(53312, 53308),
(62078, 768),
(62600, 5487);

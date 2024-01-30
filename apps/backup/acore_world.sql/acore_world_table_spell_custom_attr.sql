
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_custom_attr`
--

CREATE TABLE `spell_custom_attr` (
  `spell_id` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'spell id',
  `attributes` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'SpellCustomAttributes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='SpellInfo custom attributes';

--
-- Truncar tablas antes de insertar `spell_custom_attr`
--

TRUNCATE TABLE `spell_custom_attr`;
--
-- Volcado de datos para la tabla `spell_custom_attr`
--

INSERT INTO `spell_custom_attr` (`spell_id`, `attributes`) VALUES
(53, 131072),
(604, 100663296),
(703, 131072),
(1008, 100663296),
(1130, 64),
(1725, 33554432),
(1776, 65536),
(1777, 65536),
(2589, 131072),
(2590, 131072),
(2591, 131072),
(3411, 100663296),
(3600, 64),
(5171, 100663296),
(5221, 131072),
(5255, 32768),
(5416, 4194304),
(5729, 96),
(6774, 100663296),
(6785, 131072),
(6787, 131072),
(6800, 131072),
(7159, 131072),
(8450, 100663296),
(8451, 100663296),
(8455, 100663296),
(8627, 131072),
(8629, 65536),
(8631, 131072),
(8632, 131072),
(8633, 131072),
(8676, 131072),
(8721, 131072),
(8724, 131072),
(8725, 131072),
(8992, 131072),
(9829, 131072),
(9830, 131072),
(9866, 131072),
(9867, 131072),
(10169, 100663296),
(10170, 100663296),
(10173, 100663296),
(10174, 100663296),
(10576, 64),
(11103, 33554432),
(11196, 4096),
(11267, 131072),
(11268, 131072),
(11269, 131072),
(11279, 131072),
(11280, 131072),
(11281, 131072),
(11285, 65536),
(11286, 65536),
(11289, 131072),
(11290, 131072),
(12323, 64),
(12357, 33554432),
(12358, 33554432),
(12540, 65536),
(13579, 65536),
(14120, 4194304),
(14323, 64),
(14324, 64),
(14325, 64),
(14517, 4194304),
(15572, 4194304),
(15582, 131072),
(15657, 131072),
(16145, 4194304),
(16427, 4194304),
(16609, 128),
(16928, 4194304),
(17165, 12288),
(17315, 4194304),
(18500, 32768),
(21909, 100663296),
(21987, 131072),
(22247, 64),
(22282, 2048),
(22283, 2048),
(22285, 2048),
(22286, 2048),
(22287, 2048),
(22288, 2048),
(22416, 131072),
(22919, 12288),
(23600, 64),
(23953, 12288),
(23959, 131072),
(24340, 8),
(24698, 65536),
(24732, 234881024),
(24825, 131072),
(25300, 131072),
(25771, 4096),
(26029, 4),
(26044, 28672),
(26143, 12288),
(26558, 8),
(26789, 8),
(26839, 131072),
(26863, 131072),
(26884, 131072),
(27001, 131072),
(27002, 131072),
(27005, 131072),
(27130, 100663296),
(27441, 131072),
(28310, 12288),
(28456, 65536),
(28884, 8),
(29214, 12288),
(29407, 12288),
(29425, 65536),
(29570, 12288),
(29858, 64),
(30285, 4194304),
(30494, 4194304),
(30639, 4194304),
(30708, 4096),
(30877, 33554432),
(31436, 8),
(31961, 2048),
(31994, 16384),
(32375, 64),
(32417, 12288),
(32592, 64),
(32645, 234881024),
(32684, 234881024),
(32722, 4194304),
(32835, 64),
(33086, 32768),
(33130, 12288),
(33684, 4096),
(33783, 4194304),
(33911, 4194304),
(33944, 100663296),
(33946, 100663296),
(34074, 234881024),
(34700, 28672),
(34709, 28672),
(34856, 4194304),
(34940, 65536),
(35009, 64),
(35147, 4194304),
(35181, 8),
(35202, 4096),
(35244, 4194304),
(35507, 12288),
(36796, 4194304),
(36837, 8),
(36862, 65536),
(37276, 12288),
(37330, 12288),
(37433, 4),
(37546, 2147483648),
(37621, 12288),
(37685, 131072),
(38243, 12288),
(38256, 64),
(38318, 100663296),
(38764, 65536),
(38863, 65536),
(38903, 8),
(39331, 33554432),
(39364, 4194304),
(39897, 64),
(40268, 234881024),
(40810, 8),
(40842, 12288),
(41276, 8),
(41478, 100663296),
(42384, 8),
(42396, 12288),
(42533, 16777216),
(42650, 64),
(42772, 524288),
(43015, 100663296),
(43017, 100663296),
(43140, 4),
(43215, 4),
(43263, 64),
(43264, 64),
(43267, 8),
(43268, 8),
(43512, 12288),
(43530, 64),
(45150, 8),
(46619, 16777216),
(47585, 167772160),
(48571, 131072),
(48572, 131072),
(48578, 131072),
(48579, 131072),
(48656, 131072),
(48657, 131072),
(48675, 131072),
(48676, 131072),
(48689, 131072),
(48690, 131072),
(48691, 131072),
(49749, 32768),
(50196, 4194304),
(50344, 234881024),
(52743, 65536),
(52744, 64),
(52890, 32768),
(53338, 64),
(53454, 32768),
(54836, 12288),
(55550, 524288),
(57467, 8),
(57874, 12288),
(57941, 12288),
(57992, 234881024),
(57993, 234881024),
(58381, 4096),
(58563, 131072),
(58831, 64),
(58832, 64),
(58833, 64),
(58834, 64),
(58838, 64),
(58867, 12288),
(59367, 12288),
(59446, 32768),
(59667, 64),
(59685, 524288),
(59974, 12288),
(60472, 12288),
(60988, 524288),
(61716, 234881024),
(61734, 234881024),
(61819, 234881024),
(61834, 234881024),
(61987, 4096),
(61988, 4096),
(62344, 234881024),
(62383, 32768),
(62544, 32768),
(62626, 32768),
(62709, 32768),
(62874, 32768),
(63003, 32768),
(63010, 32768),
(63278, 32768),
(64342, 32768),
(64422, 32776),
(64588, 32768),
(64590, 32768),
(64591, 32768),
(64686, 32768),
(64688, 8),
(64695, 64),
(64777, 32768),
(64844, 100663296),
(64904, 201326592),
(65147, 32768),
(65239, 32768),
(65919, 32768),
(66479, 32768),
(67858, 32768),
(67859, 32768),
(67860, 32768),
(68321, 32768),
(68498, 32768),
(68504, 32768),
(68505, 32768),
(69293, 32768),
(69489, 33554432),
(70461, 4),
(70492, 8),
(71204, 4096),
(71904, 8),
(72133, 4),
(72255, 32768),
(72293, 4096),
(72373, 8),
(72410, 4096),
(72444, 32768),
(72445, 32768),
(72446, 32768),
(72505, 8),
(72624, 8),
(72625, 8),
(72998, 4096),
(73788, 4),
(73789, 4),
(73790, 4),
(74439, 32768);

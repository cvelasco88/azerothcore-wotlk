
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_equipmentsets`
--

CREATE TABLE `character_equipmentsets` (
  `guid` int NOT NULL DEFAULT '0',
  `setguid` bigint NOT NULL,
  `setindex` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(31) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `iconname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ignore_mask` int UNSIGNED NOT NULL DEFAULT '0',
  `item0` int UNSIGNED NOT NULL DEFAULT '0',
  `item1` int UNSIGNED NOT NULL DEFAULT '0',
  `item2` int UNSIGNED NOT NULL DEFAULT '0',
  `item3` int UNSIGNED NOT NULL DEFAULT '0',
  `item4` int UNSIGNED NOT NULL DEFAULT '0',
  `item5` int UNSIGNED NOT NULL DEFAULT '0',
  `item6` int UNSIGNED NOT NULL DEFAULT '0',
  `item7` int UNSIGNED NOT NULL DEFAULT '0',
  `item8` int UNSIGNED NOT NULL DEFAULT '0',
  `item9` int UNSIGNED NOT NULL DEFAULT '0',
  `item10` int UNSIGNED NOT NULL DEFAULT '0',
  `item11` int UNSIGNED NOT NULL DEFAULT '0',
  `item12` int UNSIGNED NOT NULL DEFAULT '0',
  `item13` int UNSIGNED NOT NULL DEFAULT '0',
  `item14` int UNSIGNED NOT NULL DEFAULT '0',
  `item15` int UNSIGNED NOT NULL DEFAULT '0',
  `item16` int UNSIGNED NOT NULL DEFAULT '0',
  `item17` int UNSIGNED NOT NULL DEFAULT '0',
  `item18` int UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `character_equipmentsets`
--

TRUNCATE TABLE `character_equipmentsets`;
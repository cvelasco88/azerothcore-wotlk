
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `build_info`
--

CREATE TABLE `build_info` (
  `build` int NOT NULL,
  `majorVersion` int DEFAULT NULL,
  `minorVersion` int DEFAULT NULL,
  `bugfixVersion` int DEFAULT NULL,
  `hotfixVersion` char(3) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winAuthSeed` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `win64AuthSeed` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mac64AuthSeed` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `winChecksumSeed` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `macChecksumSeed` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `build_info`
--

TRUNCATE TABLE `build_info`;
--
-- Volcado de datos para la tabla `build_info`
--

INSERT INTO `build_info` (`build`, `majorVersion`, `minorVersion`, `bugfixVersion`, `hotfixVersion`, `winAuthSeed`, `win64AuthSeed`, `mac64AuthSeed`, `winChecksumSeed`, `macChecksumSeed`) VALUES
(5875, 1, 12, 1, NULL, NULL, NULL, NULL, '95EDB27C7823B363CBDDAB56A392E7CB73FCCA20', '8D173CC381961EEBABF336F5E6675B101BB513E5'),
(6005, 1, 12, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(6141, 1, 12, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(8606, 2, 4, 3, NULL, NULL, NULL, NULL, '319AFAA3F2559682F9FF658BE01456255F456FB1', 'D8B0ECFE534BC1131E19BAD1D4C0E813EEE4994F'),
(9947, 3, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL),
(10505, 3, 2, 2, 'a', NULL, NULL, NULL, NULL, NULL),
(11159, 3, 3, 0, 'a', NULL, NULL, NULL, NULL, NULL),
(11403, 3, 3, 2, NULL, NULL, NULL, NULL, NULL, NULL),
(11723, 3, 3, 3, 'a', NULL, NULL, NULL, NULL, NULL),
(12340, 3, 3, 5, 'a', NULL, NULL, NULL, 'CDCBBD5188315E6B4D19449D492DBCFAF156A347', 'B706D13FF2F4018839729461E3F8A0E2B5FDC034'),
(13930, 3, 3, 5, 'a', NULL, NULL, NULL, NULL, NULL);

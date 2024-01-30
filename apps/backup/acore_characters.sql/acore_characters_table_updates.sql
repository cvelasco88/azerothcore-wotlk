
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `updates`
--

CREATE TABLE `updates` (
  `name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'filename with extension of the update.',
  `hash` char(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '' COMMENT 'sha1 hash of the sql file.',
  `state` enum('RELEASED','CUSTOM','MODULE','ARCHIVED') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'RELEASED' COMMENT 'defines if an update is released or archived.',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'timestamp when the query was applied.',
  `speed` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'time the query takes to apply in ms.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='List of all applied updates in this database.';

--
-- Truncar tablas antes de insertar `updates`
--

TRUNCATE TABLE `updates`;
--
-- Volcado de datos para la tabla `updates`
--

INSERT INTO `updates` (`name`, `hash`, `state`, `timestamp`, `speed`) VALUES
('2023_04_24_00.sql', 'D164A70B22B2462464484614018C3218B3259AE4', 'RELEASED', '2024-01-20 13:25:01', 30),
('2023_05_23_00.sql', 'A1A442D3F5049CDA2C067761F768C08BEFFFD26A', 'RELEASED', '2024-01-20 13:25:01', 35),
('2023_09_16_00.sql', '5760BA953E3F0C73492B979A33A86771B82CE464', 'RELEASED', '2024-01-20 13:25:01', 68),
('2024_01_20_00.sql', 'FB9F840C7601C4F0939D23E87377D7DD9D145094', 'RELEASED', '2024-01-20 13:25:01', 26);

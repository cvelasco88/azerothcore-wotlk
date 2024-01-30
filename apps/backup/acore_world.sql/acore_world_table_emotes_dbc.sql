
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `emotes_dbc`
--

CREATE TABLE `emotes_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `EmoteSlashCommand` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AnimID` int NOT NULL DEFAULT '0',
  `EmoteFlags` int NOT NULL DEFAULT '0',
  `EmoteSpecProc` int NOT NULL DEFAULT '0',
  `EmoteSpecProcParam` int NOT NULL DEFAULT '0',
  `EventSoundID` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `emotes_dbc`
--

TRUNCATE TABLE `emotes_dbc`;
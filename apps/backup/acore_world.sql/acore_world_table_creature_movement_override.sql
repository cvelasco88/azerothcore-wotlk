
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creature_movement_override`
--

CREATE TABLE `creature_movement_override` (
  `SpawnId` int UNSIGNED NOT NULL DEFAULT '0',
  `Ground` tinyint UNSIGNED DEFAULT NULL,
  `Swim` tinyint UNSIGNED DEFAULT NULL,
  `Flight` tinyint UNSIGNED DEFAULT NULL,
  `Rooted` tinyint UNSIGNED DEFAULT NULL,
  `Chase` tinyint UNSIGNED DEFAULT NULL,
  `Random` tinyint UNSIGNED DEFAULT NULL,
  `InteractionPauseTimer` int UNSIGNED DEFAULT NULL COMMENT 'Time (in milliseconds) during which creature will not move after interaction with player'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `creature_movement_override`
--

TRUNCATE TABLE `creature_movement_override`;
--
-- Volcado de datos para la tabla `creature_movement_override`
--

INSERT INTO `creature_movement_override` (`SpawnId`, `Ground`, `Swim`, `Flight`, `Rooted`, `Chase`, `Random`, `InteractionPauseTimer`) VALUES
(106339, 1, 1, 2, 0, 0, 0, NULL),
(106340, 1, 1, 2, 0, 0, 0, NULL),
(117664, 1, 0, 1, 0, 0, 0, NULL),
(117670, 1, 0, 1, 0, 0, 0, NULL),
(117671, 1, 0, 1, 0, 0, 0, NULL),
(117672, 1, 0, 1, 0, 0, 0, NULL),
(117677, 1, 0, 1, 0, 0, 0, NULL),
(125724, 1, 1, 2, 0, 0, 0, NULL),
(130896, 1, 0, 1, 0, 0, 0, NULL);

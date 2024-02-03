
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spell_pet_auras`
--

CREATE TABLE `spell_pet_auras` (
  `spell` int UNSIGNED NOT NULL COMMENT 'dummy spell id',
  `effectId` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `pet` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'pet id; 0 = all',
  `aura` int UNSIGNED NOT NULL COMMENT 'pet aura id'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spell_pet_auras`
--

TRUNCATE TABLE `spell_pet_auras`;
--
-- Volcado de datos para la tabla `spell_pet_auras`
--

INSERT INTO `spell_pet_auras` (`spell`, `effectId`, `pet`, `aura`) VALUES
(19028, 0, 0, 25228),
(19578, 0, 0, 19579),
(20895, 0, 0, 24529),
(23785, 0, 416, 23759),
(23785, 0, 417, 23762),
(23785, 0, 1860, 23760),
(23785, 0, 1863, 23761),
(23785, 0, 17252, 35702),
(23822, 0, 416, 23826),
(23822, 0, 417, 23837),
(23822, 0, 1860, 23841),
(23822, 0, 1863, 23833),
(23822, 0, 17252, 35703),
(23823, 0, 416, 23827),
(23823, 0, 417, 23838),
(23823, 0, 1860, 23842),
(23823, 0, 1863, 23834),
(23823, 0, 17252, 35704),
(23824, 0, 416, 23828),
(23824, 0, 417, 23839),
(23824, 0, 1860, 23843),
(23824, 0, 1863, 23835),
(23824, 0, 17252, 35705),
(23825, 0, 416, 23829),
(23825, 0, 417, 23840),
(23825, 0, 1860, 23844),
(23825, 0, 1863, 23836),
(23825, 0, 17252, 35706),
(28757, 0, 0, 28758),
(34453, 1, 0, 68361),
(34454, 1, 0, 68361),
(34455, 0, 0, 75593),
(34459, 0, 0, 75446),
(34460, 0, 0, 75447),
(35029, 0, 0, 35060),
(35030, 0, 0, 35061),
(35691, 0, 0, 35696),
(35692, 0, 0, 35696),
(35693, 0, 0, 35696),
(56314, 0, 0, 57447),
(56314, 1, 0, 57485),
(56315, 0, 0, 57452),
(56315, 1, 0, 57484),
(56316, 0, 0, 57453),
(56316, 1, 0, 57483),
(56317, 0, 0, 57457),
(56317, 1, 0, 57482),
(56318, 0, 0, 57458),
(56318, 1, 0, 57475);
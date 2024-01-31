
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gm_subsurvey`
--

CREATE TABLE `gm_subsurvey` (
  `surveyId` int UNSIGNED NOT NULL,
  `questionId` int UNSIGNED NOT NULL DEFAULT '0',
  `answer` int UNSIGNED NOT NULL DEFAULT '0',
  `answerComment` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `gm_subsurvey`
--

TRUNCATE TABLE `gm_subsurvey`;
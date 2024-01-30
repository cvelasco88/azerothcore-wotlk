
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gm_survey`
--

CREATE TABLE `gm_survey` (
  `surveyId` int UNSIGNED NOT NULL,
  `guid` int UNSIGNED NOT NULL DEFAULT '0',
  `mainSurvey` int UNSIGNED NOT NULL DEFAULT '0',
  `comment` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `createTime` int UNSIGNED NOT NULL DEFAULT '0',
  `maxMMR` smallint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci COMMENT='Player System';

--
-- Truncar tablas antes de insertar `gm_survey`
--

TRUNCATE TABLE `gm_survey`;
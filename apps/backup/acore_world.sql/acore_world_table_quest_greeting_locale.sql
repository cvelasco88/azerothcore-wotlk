
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quest_greeting_locale`
--

CREATE TABLE `quest_greeting_locale` (
  `ID` int UNSIGNED NOT NULL DEFAULT '0',
  `type` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `locale` varchar(4) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Greeting` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `VerifiedBuild` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `quest_greeting_locale`
--

TRUNCATE TABLE `quest_greeting_locale`;
--
-- Volcado de datos para la tabla `quest_greeting_locale`
--

INSERT INTO `quest_greeting_locale` (`ID`, `type`, `locale`, `Greeting`, `VerifiedBuild`) VALUES
(3390, 0, 'esES', 'Los Baldíos cuentan con una gran riqueza de sustancias de las que nosotros, los boticarios de Lordaeron, podemos aprovecharnos.', 47014),
(3390, 0, 'esMX', 'Los Baldíos cuentan con una gran riqueza de sustancias de las que nosotros, los boticarios de Lordaeron, podemos aprovecharnos.', 47014),
(5638, 0, 'esES', 'Tengo muchas cosas que hacer por aquí en Desolace, $N. Roetten quiere que recojamos algunos componentes para uno de nuestros clientes y buscar alguno de esos objetos perdidos.$b$bViéndote que estás aquí para ayudar. ¿Por qué no empezamos?', NULL),
(5638, 0, 'esMX', 'Tengo muchas cosas que hacer por aquí en Desolace, $N. Roetten quiere que recojamos algunos componentes para uno de nuestros clientes y buscar alguno de esos objetos perdidos.$b$bViéndote que estás aquí para ayudar. ¿Por qué no empezamos?', NULL),
(22292, 0, 'ruRU', 'Свет ещё не воссиял над Скеттисом.', 0);

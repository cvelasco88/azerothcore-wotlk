
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `character_stats`
--

CREATE TABLE `character_stats` (
  `guid` int UNSIGNED NOT NULL DEFAULT '0' COMMENT 'Global Unique Identifier, Low part',
  `maxhealth` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower1` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower2` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower3` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower4` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower5` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower6` int UNSIGNED NOT NULL DEFAULT '0',
  `maxpower7` int UNSIGNED NOT NULL DEFAULT '0',
  `strength` int UNSIGNED NOT NULL DEFAULT '0',
  `agility` int UNSIGNED NOT NULL DEFAULT '0',
  `stamina` int UNSIGNED NOT NULL DEFAULT '0',
  `intellect` int UNSIGNED NOT NULL DEFAULT '0',
  `spirit` int UNSIGNED NOT NULL DEFAULT '0',
  `armor` int UNSIGNED NOT NULL DEFAULT '0',
  `resHoly` int UNSIGNED NOT NULL DEFAULT '0',
  `resFire` int UNSIGNED NOT NULL DEFAULT '0',
  `resNature` int UNSIGNED NOT NULL DEFAULT '0',
  `resFrost` int UNSIGNED NOT NULL DEFAULT '0',
  `resShadow` int UNSIGNED NOT NULL DEFAULT '0',
  `resArcane` int UNSIGNED NOT NULL DEFAULT '0',
  `blockPct` float NOT NULL DEFAULT '0',
  `dodgePct` float NOT NULL DEFAULT '0',
  `parryPct` float NOT NULL DEFAULT '0',
  `critPct` float NOT NULL DEFAULT '0',
  `rangedCritPct` float NOT NULL DEFAULT '0',
  `spellCritPct` float NOT NULL DEFAULT '0',
  `attackPower` int UNSIGNED NOT NULL DEFAULT '0',
  `rangedAttackPower` int UNSIGNED NOT NULL DEFAULT '0',
  `spellPower` int UNSIGNED NOT NULL DEFAULT '0',
  `resilience` int UNSIGNED NOT NULL DEFAULT '0'
) ;

--
-- Truncar tablas antes de insertar `character_stats`
--

TRUNCATE TABLE `character_stats`;
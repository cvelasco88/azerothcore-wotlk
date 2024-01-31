
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `spellitemenchantmentcondition_dbc`
--

CREATE TABLE `spellitemenchantmentcondition_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Lt_OperandType_1` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Lt_OperandType_2` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Lt_OperandType_3` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Lt_OperandType_4` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Lt_OperandType_5` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Lt_Operand_1` int NOT NULL DEFAULT '0',
  `Lt_Operand_2` int NOT NULL DEFAULT '0',
  `Lt_Operand_3` int NOT NULL DEFAULT '0',
  `Lt_Operand_4` int NOT NULL DEFAULT '0',
  `Lt_Operand_5` int NOT NULL DEFAULT '0',
  `Operator_1` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Operator_2` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Operator_3` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Operator_4` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Operator_5` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_OperandType_1` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_OperandType_2` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_OperandType_3` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_OperandType_4` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_OperandType_5` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Rt_Operand_1` int NOT NULL DEFAULT '0',
  `Rt_Operand_2` int NOT NULL DEFAULT '0',
  `Rt_Operand_3` int NOT NULL DEFAULT '0',
  `Rt_Operand_4` int NOT NULL DEFAULT '0',
  `Rt_Operand_5` int NOT NULL DEFAULT '0',
  `Logic_1` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Logic_2` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Logic_3` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Logic_4` tinyint UNSIGNED NOT NULL DEFAULT '0',
  `Logic_5` tinyint UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `spellitemenchantmentcondition_dbc`
--

TRUNCATE TABLE `spellitemenchantmentcondition_dbc`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehicle_dbc`
--

CREATE TABLE `vehicle_dbc` (
  `ID` int NOT NULL DEFAULT '0',
  `Flags` int NOT NULL DEFAULT '0',
  `TurnSpeed` float NOT NULL DEFAULT '0',
  `PitchSpeed` float NOT NULL DEFAULT '0',
  `PitchMin` float NOT NULL DEFAULT '0',
  `PitchMax` float NOT NULL DEFAULT '0',
  `SeatID_1` int NOT NULL DEFAULT '0',
  `SeatID_2` int NOT NULL DEFAULT '0',
  `SeatID_3` int NOT NULL DEFAULT '0',
  `SeatID_4` int NOT NULL DEFAULT '0',
  `SeatID_5` int NOT NULL DEFAULT '0',
  `SeatID_6` int NOT NULL DEFAULT '0',
  `SeatID_7` int NOT NULL DEFAULT '0',
  `SeatID_8` int NOT NULL DEFAULT '0',
  `MouseLookOffsetPitch` float NOT NULL DEFAULT '0',
  `CameraFadeDistScalarMin` float NOT NULL DEFAULT '0',
  `CameraFadeDistScalarMax` float NOT NULL DEFAULT '0',
  `CameraPitchOffset` float NOT NULL DEFAULT '0',
  `FacingLimitRight` float NOT NULL DEFAULT '0',
  `FacingLimitLeft` float NOT NULL DEFAULT '0',
  `MsslTrgtTurnLingering` float NOT NULL DEFAULT '0',
  `MsslTrgtPitchLingering` float NOT NULL DEFAULT '0',
  `MsslTrgtMouseLingering` float NOT NULL DEFAULT '0',
  `MsslTrgtEndOpacity` float NOT NULL DEFAULT '0',
  `MsslTrgtArcSpeed` float NOT NULL DEFAULT '0',
  `MsslTrgtArcRepeat` float NOT NULL DEFAULT '0',
  `MsslTrgtArcWidth` float NOT NULL DEFAULT '0',
  `MsslTrgtImpactRadius_1` float NOT NULL DEFAULT '0',
  `MsslTrgtImpactRadius_2` float NOT NULL DEFAULT '0',
  `MsslTrgtArcTexture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MsslTrgtImpactTexture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MsslTrgtImpactModel_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MsslTrgtImpactModel_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CameraYawOffset` float NOT NULL DEFAULT '0',
  `UilocomotionType` int NOT NULL DEFAULT '0',
  `MsslTrgtImpactTexRadius` float NOT NULL DEFAULT '0',
  `VehicleUIIndicatorID` int NOT NULL DEFAULT '0',
  `PowerDisplayID_1` int NOT NULL DEFAULT '0',
  `PowerDisplayID_2` int NOT NULL DEFAULT '0',
  `PowerDisplayID_3` int NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Truncar tablas antes de insertar `vehicle_dbc`
--

TRUNCATE TABLE `vehicle_dbc`;
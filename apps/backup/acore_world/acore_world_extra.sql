
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `achievement_category_dbc`
--
ALTER TABLE `achievement_category_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `achievement_criteria_data`
--
ALTER TABLE `achievement_criteria_data`
  ADD PRIMARY KEY (`criteria_id`,`type`);

--
-- Indices de la tabla `achievement_criteria_dbc`
--
ALTER TABLE `achievement_criteria_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `achievement_dbc`
--
ALTER TABLE `achievement_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `achievement_reward`
--
ALTER TABLE `achievement_reward`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `achievement_reward_locale`
--
ALTER TABLE `achievement_reward_locale`
  ADD PRIMARY KEY (`ID`,`Locale`);

--
-- Indices de la tabla `acore_string`
--
ALTER TABLE `acore_string`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `areagroup_dbc`
--
ALTER TABLE `areagroup_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `areapoi_dbc`
--
ALTER TABLE `areapoi_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `areatable_dbc`
--
ALTER TABLE `areatable_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `areatrigger`
--
ALTER TABLE `areatrigger`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `areatrigger_involvedrelation`
--
ALTER TABLE `areatrigger_involvedrelation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areatrigger_scripts`
--
ALTER TABLE `areatrigger_scripts`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `areatrigger_tavern`
--
ALTER TABLE `areatrigger_tavern`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `areatrigger_teleport`
--
ALTER TABLE `areatrigger_teleport`
  ADD PRIMARY KEY (`ID`);
ALTER TABLE `areatrigger_teleport` ADD FULLTEXT KEY `name` (`Name`);

--
-- Indices de la tabla `auctionhouse_dbc`
--
ALTER TABLE `auctionhouse_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `bankbagslotprices_dbc`
--
ALTER TABLE `bankbagslotprices_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `barbershopstyle_dbc`
--
ALTER TABLE `barbershopstyle_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `battleground_template`
--
ALTER TABLE `battleground_template`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `battlemasterlist_dbc`
--
ALTER TABLE `battlemasterlist_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `battlemaster_entry`
--
ALTER TABLE `battlemaster_entry`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `broadcast_text`
--
ALTER TABLE `broadcast_text`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `broadcast_text_locale`
--
ALTER TABLE `broadcast_text_locale`
  ADD PRIMARY KEY (`ID`,`locale`);

--
-- Indices de la tabla `charstartoutfit_dbc`
--
ALTER TABLE `charstartoutfit_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `chartitles_dbc`
--
ALTER TABLE `chartitles_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `chatchannels_dbc`
--
ALTER TABLE `chatchannels_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `chrclasses_dbc`
--
ALTER TABLE `chrclasses_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `chrraces_dbc`
--
ALTER TABLE `chrraces_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cinematiccamera_dbc`
--
ALTER TABLE `cinematiccamera_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `cinematicsequences_dbc`
--
ALTER TABLE `cinematicsequences_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`SourceTypeOrReferenceId`,`SourceGroup`,`SourceEntry`,`SourceId`,`ElseGroup`,`ConditionTypeOrReference`,`ConditionTarget`,`ConditionValue1`,`ConditionValue2`,`ConditionValue3`);

--
-- Indices de la tabla `creature`
--
ALTER TABLE `creature`
  ADD PRIMARY KEY (`guid`),
  ADD KEY `idx_map` (`map`),
  ADD KEY `idx_id` (`id1`);

--
-- Indices de la tabla `creaturedisplayinfoextra_dbc`
--
ALTER TABLE `creaturedisplayinfoextra_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creaturedisplayinfo_dbc`
--
ALTER TABLE `creaturedisplayinfo_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creaturefamily_dbc`
--
ALTER TABLE `creaturefamily_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creaturemodeldata_dbc`
--
ALTER TABLE `creaturemodeldata_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creaturespelldata_dbc`
--
ALTER TABLE `creaturespelldata_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creaturetype_dbc`
--
ALTER TABLE `creaturetype_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `creature_addon`
--
ALTER TABLE `creature_addon`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `creature_classlevelstats`
--
ALTER TABLE `creature_classlevelstats`
  ADD PRIMARY KEY (`level`,`class`);

--
-- Indices de la tabla `creature_equip_template`
--
ALTER TABLE `creature_equip_template`
  ADD PRIMARY KEY (`CreatureID`,`ID`);

--
-- Indices de la tabla `creature_formations`
--
ALTER TABLE `creature_formations`
  ADD PRIMARY KEY (`memberGUID`);

--
-- Indices de la tabla `creature_loot_template`
--
ALTER TABLE `creature_loot_template`
  ADD PRIMARY KEY (`Entry`,`Item`,`Reference`,`GroupId`) USING BTREE;

--
-- Indices de la tabla `creature_model_info`
--
ALTER TABLE `creature_model_info`
  ADD PRIMARY KEY (`DisplayID`);

--
-- Indices de la tabla `creature_movement_override`
--
ALTER TABLE `creature_movement_override`
  ADD PRIMARY KEY (`SpawnId`) USING BTREE;

--
-- Indices de la tabla `creature_onkill_reputation`
--
ALTER TABLE `creature_onkill_reputation`
  ADD PRIMARY KEY (`creature_id`);

--
-- Indices de la tabla `creature_questender`
--
ALTER TABLE `creature_questender`
  ADD PRIMARY KEY (`id`,`quest`);

--
-- Indices de la tabla `creature_questitem`
--
ALTER TABLE `creature_questitem`
  ADD PRIMARY KEY (`CreatureEntry`,`Idx`);

--
-- Indices de la tabla `creature_queststarter`
--
ALTER TABLE `creature_queststarter`
  ADD PRIMARY KEY (`id`,`quest`);

--
-- Indices de la tabla `creature_template`
--
ALTER TABLE `creature_template`
  ADD PRIMARY KEY (`entry`),
  ADD KEY `idx_name` (`name`);

--
-- Indices de la tabla `creature_template_addon`
--
ALTER TABLE `creature_template_addon`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `creature_template_locale`
--
ALTER TABLE `creature_template_locale`
  ADD PRIMARY KEY (`entry`,`locale`);

--
-- Indices de la tabla `creature_template_movement`
--
ALTER TABLE `creature_template_movement`
  ADD PRIMARY KEY (`CreatureId`) USING BTREE;

--
-- Indices de la tabla `creature_template_resistance`
--
ALTER TABLE `creature_template_resistance`
  ADD PRIMARY KEY (`CreatureID`,`School`);

--
-- Indices de la tabla `creature_template_spell`
--
ALTER TABLE `creature_template_spell`
  ADD PRIMARY KEY (`CreatureID`,`Index`);

--
-- Indices de la tabla `creature_text`
--
ALTER TABLE `creature_text`
  ADD PRIMARY KEY (`CreatureID`,`GroupID`,`ID`);

--
-- Indices de la tabla `creature_text_locale`
--
ALTER TABLE `creature_text_locale`
  ADD PRIMARY KEY (`CreatureID`,`GroupID`,`ID`,`Locale`);

--
-- Indices de la tabla `currencytypes_dbc`
--
ALTER TABLE `currencytypes_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `destructiblemodeldata_dbc`
--
ALTER TABLE `destructiblemodeldata_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `disables`
--
ALTER TABLE `disables`
  ADD PRIMARY KEY (`sourceType`,`entry`);

--
-- Indices de la tabla `disenchant_loot_template`
--
ALTER TABLE `disenchant_loot_template`
  ADD PRIMARY KEY (`Entry`,`Item`);

--
-- Indices de la tabla `dungeonencounter_dbc`
--
ALTER TABLE `dungeonencounter_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `dungeon_access_requirements`
--
ALTER TABLE `dungeon_access_requirements`
  ADD PRIMARY KEY (`dungeon_access_id`,`requirement_type`,`requirement_id`);

--
-- Indices de la tabla `dungeon_access_template`
--
ALTER TABLE `dungeon_access_template`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_dungeon_access_template__instance_template` (`map_id`);

--
-- Indices de la tabla `durabilitycosts_dbc`
--
ALTER TABLE `durabilitycosts_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `durabilityquality_dbc`
--
ALTER TABLE `durabilityquality_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `emotestext_dbc`
--
ALTER TABLE `emotestext_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `emotes_dbc`
--
ALTER TABLE `emotes_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `exploration_basexp`
--
ALTER TABLE `exploration_basexp`
  ADD PRIMARY KEY (`level`);

--
-- Indices de la tabla `factiontemplate_dbc`
--
ALTER TABLE `factiontemplate_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `faction_dbc`
--
ALTER TABLE `faction_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `fishing_loot_template`
--
ALTER TABLE `fishing_loot_template`
  ADD PRIMARY KEY (`Entry`,`Item`);

--
-- Indices de la tabla `gameobject`
--
ALTER TABLE `gameobject`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `gameobjectartkit_dbc`
--
ALTER TABLE `gameobjectartkit_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gameobjectdisplayinfo_dbc`
--
ALTER TABLE `gameobjectdisplayinfo_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gameobject_addon`
--
ALTER TABLE `gameobject_addon`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `gameobject_loot_template`
--
ALTER TABLE `gameobject_loot_template`
  ADD PRIMARY KEY (`Entry`,`Item`);

--
-- Indices de la tabla `gameobject_questender`
--
ALTER TABLE `gameobject_questender`
  ADD PRIMARY KEY (`id`,`quest`);

--
-- Indices de la tabla `gameobject_questitem`
--
ALTER TABLE `gameobject_questitem`
  ADD PRIMARY KEY (`GameObjectEntry`,`Idx`);

--
-- Indices de la tabla `gameobject_queststarter`
--
ALTER TABLE `gameobject_queststarter`
  ADD PRIMARY KEY (`id`,`quest`);

--
-- Indices de la tabla `gameobject_template`
--
ALTER TABLE `gameobject_template`
  ADD PRIMARY KEY (`entry`),
  ADD KEY `idx_name` (`name`);

--
-- Indices de la tabla `gameobject_template_addon`
--
ALTER TABLE `gameobject_template_addon`
  ADD PRIMARY KEY (`entry`);

--
-- Indices de la tabla `gameobject_template_locale`
--
ALTER TABLE `gameobject_template_locale`
  ADD PRIMARY KEY (`entry`,`locale`);

--
-- Indices de la tabla `game_event`
--
ALTER TABLE `game_event`
  ADD PRIMARY KEY (`eventEntry`);

--
-- Indices de la tabla `game_event_arena_seasons`
--
ALTER TABLE `game_event_arena_seasons`
  ADD UNIQUE KEY `season` (`season`,`eventEntry`);

--
-- Indices de la tabla `game_event_battleground_holiday`
--
ALTER TABLE `game_event_battleground_holiday`
  ADD PRIMARY KEY (`eventEntry`);

--
-- Indices de la tabla `game_event_condition`
--
ALTER TABLE `game_event_condition`
  ADD PRIMARY KEY (`eventEntry`,`condition_id`);

--
-- Indices de la tabla `game_event_creature`
--
ALTER TABLE `game_event_creature`
  ADD PRIMARY KEY (`guid`,`eventEntry`);

--
-- Indices de la tabla `game_event_creature_quest`
--
ALTER TABLE `game_event_creature_quest`
  ADD PRIMARY KEY (`id`,`quest`);

--
-- Indices de la tabla `game_event_gameobject`
--
ALTER TABLE `game_event_gameobject`
  ADD PRIMARY KEY (`guid`,`eventEntry`);

--
-- Indices de la tabla `game_event_gameobject_quest`
--
ALTER TABLE `game_event_gameobject_quest`
  ADD PRIMARY KEY (`id`,`quest`,`eventEntry`);

--
-- Indices de la tabla `game_event_model_equip`
--
ALTER TABLE `game_event_model_equip`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `game_event_npcflag`
--
ALTER TABLE `game_event_npcflag`
  ADD PRIMARY KEY (`guid`,`eventEntry`);

--
-- Indices de la tabla `game_event_npc_vendor`
--
ALTER TABLE `game_event_npc_vendor`
  ADD PRIMARY KEY (`guid`,`item`),
  ADD KEY `slot` (`slot`);

--
-- Indices de la tabla `game_event_pool`
--
ALTER TABLE `game_event_pool`
  ADD PRIMARY KEY (`pool_entry`);

--
-- Indices de la tabla `game_event_prerequisite`
--
ALTER TABLE `game_event_prerequisite`
  ADD PRIMARY KEY (`eventEntry`,`prerequisite_event`);

--
-- Indices de la tabla `game_event_quest_condition`
--
ALTER TABLE `game_event_quest_condition`
  ADD PRIMARY KEY (`quest`);

--
-- Indices de la tabla `game_event_seasonal_questrelation`
--
ALTER TABLE `game_event_seasonal_questrelation`
  ADD PRIMARY KEY (`questId`,`eventEntry`),
  ADD KEY `idx_quest` (`questId`);

--
-- Indices de la tabla `game_graveyard`
--
ALTER TABLE `game_graveyard`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `game_tele`
--
ALTER TABLE `game_tele`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `game_weather`
--
ALTER TABLE `game_weather`
  ADD PRIMARY KEY (`zone`);

--
-- Indices de la tabla `gemproperties_dbc`
--
ALTER TABLE `gemproperties_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `glyphproperties_dbc`
--
ALTER TABLE `glyphproperties_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `glyphslot_dbc`
--
ALTER TABLE `glyphslot_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `gossip_menu`
--
ALTER TABLE `gossip_menu`
  ADD PRIMARY KEY (`MenuID`,`TextID`);

--
-- Indices de la tabla `gossip_menu_option`
--
ALTER TABLE `gossip_menu_option`
  ADD PRIMARY KEY (`MenuID`,`OptionID`);

--
-- Indices de la tabla `gossip_menu_option_locale`
--
ALTER TABLE `gossip_menu_option_locale`
  ADD PRIMARY KEY (`MenuID`,`OptionID`,`Locale`);

--
-- Indices de la tabla `graveyard_zone`
--
ALTER TABLE `graveyard_zone`
  ADD PRIMARY KEY (`ID`,`GhostZone`);

--
-- Indices de la tabla `gtbarbershopcostbase_dbc`
--
ALTER TABLE `gtbarbershopcostbase_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtchancetomeleecritbase_dbc`
--
ALTER TABLE `gtchancetomeleecritbase_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtchancetomeleecrit_dbc`
--
ALTER TABLE `gtchancetomeleecrit_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtchancetospellcritbase_dbc`
--
ALTER TABLE `gtchancetospellcritbase_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtchancetospellcrit_dbc`
--
ALTER TABLE `gtchancetospellcrit_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtcombatratings_dbc`
--
ALTER TABLE `gtcombatratings_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtnpcmanacostscaler_dbc`
--
ALTER TABLE `gtnpcmanacostscaler_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtoctclasscombatratingscalar_dbc`
--
ALTER TABLE `gtoctclasscombatratingscalar_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtoctregenhp_dbc`
--
ALTER TABLE `gtoctregenhp_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtregenhpperspt_dbc`
--
ALTER TABLE `gtregenhpperspt_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `gtregenmpperspt_dbc`
--
ALTER TABLE `gtregenmpperspt_dbc`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indices de la tabla `holidays_dbc`
--
ALTER TABLE `holidays_dbc`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `holiday_dates`
--
ALTER TABLE `holiday_dates`
  ADD PRIMARY KEY (`id`,`date_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `areatrigger`
--
ALTER TABLE `areatrigger`
  MODIFY `entry` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5873;

--
-- AUTO_INCREMENT de la tabla `creature`
--
ALTER TABLE `creature`
  MODIFY `guid` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Global Unique Identifier', AUTO_INCREMENT=3110422;

--
-- AUTO_INCREMENT de la tabla `dungeon_access_template`
--
ALTER TABLE `dungeon_access_template`
  MODIFY `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'The dungeon template ID', AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT de la tabla `gameobject`
--
ALTER TABLE `gameobject`
  MODIFY `guid` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Global Unique Identifier', AUTO_INCREMENT=2135532;

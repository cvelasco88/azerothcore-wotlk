
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `account_data`
--
ALTER TABLE `account_data`
  ADD PRIMARY KEY (`accountId`,`type`);

--
-- Indices de la tabla `account_instance_times`
--
ALTER TABLE `account_instance_times`
  ADD PRIMARY KEY (`accountId`,`instanceId`);

--
-- Indices de la tabla `account_tutorial`
--
ALTER TABLE `account_tutorial`
  ADD PRIMARY KEY (`accountId`);

--
-- Indices de la tabla `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `arena_team`
--
ALTER TABLE `arena_team`
  ADD PRIMARY KEY (`arenaTeamId`);

--
-- Indices de la tabla `arena_team_member`
--
ALTER TABLE `arena_team_member`
  ADD PRIMARY KEY (`arenaTeamId`,`guid`);

--
-- Indices de la tabla `auctionhouse`
--
ALTER TABLE `auctionhouse`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `item_guid` (`itemguid`);

--
-- Indices de la tabla `banned_addons`
--
ALTER TABLE `banned_addons`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `idx_name_ver` (`Name`,`Version`);

--
-- Indices de la tabla `bugreport`
--
ALTER TABLE `bugreport`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendar_events`
--
ALTER TABLE `calendar_events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `calendar_invites`
--
ALTER TABLE `calendar_invites`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `channels`
--
ALTER TABLE `channels`
  ADD PRIMARY KEY (`channelId`);

--
-- Indices de la tabla `channels_bans`
--
ALTER TABLE `channels_bans`
  ADD PRIMARY KEY (`channelId`,`playerGUID`);

--
-- Indices de la tabla `channels_rights`
--
ALTER TABLE `channels_rights`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `characters`
--
ALTER TABLE `characters`
  ADD PRIMARY KEY (`guid`),
  ADD KEY `idx_account` (`account`),
  ADD KEY `idx_online` (`online`),
  ADD KEY `idx_name` (`name`);

--
-- Indices de la tabla `character_account_data`
--
ALTER TABLE `character_account_data`
  ADD PRIMARY KEY (`guid`,`type`);

--
-- Indices de la tabla `character_achievement`
--
ALTER TABLE `character_achievement`
  ADD PRIMARY KEY (`guid`,`achievement`);

--
-- Indices de la tabla `character_achievement_progress`
--
ALTER TABLE `character_achievement_progress`
  ADD PRIMARY KEY (`guid`,`criteria`);

--
-- Indices de la tabla `character_action`
--
ALTER TABLE `character_action`
  ADD PRIMARY KEY (`guid`,`spec`,`button`);

--
-- Indices de la tabla `character_arena_stats`
--
ALTER TABLE `character_arena_stats`
  ADD PRIMARY KEY (`guid`,`slot`);

--
-- Indices de la tabla `character_aura`
--
ALTER TABLE `character_aura`
  ADD PRIMARY KEY (`guid`,`casterGuid`,`itemGuid`,`spell`,`effectMask`);

--
-- Indices de la tabla `character_banned`
--
ALTER TABLE `character_banned`
  ADD PRIMARY KEY (`guid`,`bandate`);

--
-- Indices de la tabla `character_battleground_random`
--
ALTER TABLE `character_battleground_random`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_brew_of_the_month`
--
ALTER TABLE `character_brew_of_the_month`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_declinedname`
--
ALTER TABLE `character_declinedname`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_entry_point`
--
ALTER TABLE `character_entry_point`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_equipmentsets`
--
ALTER TABLE `character_equipmentsets`
  ADD PRIMARY KEY (`setguid`),
  ADD UNIQUE KEY `idx_set` (`guid`,`setguid`,`setindex`),
  ADD KEY `Idx_setindex` (`setindex`);

--
-- Indices de la tabla `character_gifts`
--
ALTER TABLE `character_gifts`
  ADD PRIMARY KEY (`item_guid`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_glyphs`
--
ALTER TABLE `character_glyphs`
  ADD PRIMARY KEY (`guid`,`talentGroup`);

--
-- Indices de la tabla `character_homebind`
--
ALTER TABLE `character_homebind`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_instance`
--
ALTER TABLE `character_instance`
  ADD PRIMARY KEY (`guid`,`instance`),
  ADD KEY `instance` (`instance`);

--
-- Indices de la tabla `character_inventory`
--
ALTER TABLE `character_inventory`
  ADD PRIMARY KEY (`item`),
  ADD UNIQUE KEY `guid` (`guid`,`bag`,`slot`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_pet`
--
ALTER TABLE `character_pet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner` (`owner`),
  ADD KEY `idx_slot` (`slot`);

--
-- Indices de la tabla `character_pet_declinedname`
--
ALTER TABLE `character_pet_declinedname`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_key` (`owner`);

--
-- Indices de la tabla `character_queststatus`
--
ALTER TABLE `character_queststatus`
  ADD PRIMARY KEY (`guid`,`quest`);

--
-- Indices de la tabla `character_queststatus_daily`
--
ALTER TABLE `character_queststatus_daily`
  ADD PRIMARY KEY (`guid`,`quest`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_queststatus_monthly`
--
ALTER TABLE `character_queststatus_monthly`
  ADD PRIMARY KEY (`guid`,`quest`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_queststatus_rewarded`
--
ALTER TABLE `character_queststatus_rewarded`
  ADD PRIMARY KEY (`guid`,`quest`);

--
-- Indices de la tabla `character_queststatus_seasonal`
--
ALTER TABLE `character_queststatus_seasonal`
  ADD PRIMARY KEY (`guid`,`quest`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_queststatus_weekly`
--
ALTER TABLE `character_queststatus_weekly`
  ADD PRIMARY KEY (`guid`,`quest`),
  ADD KEY `idx_guid` (`guid`);

--
-- Indices de la tabla `character_reputation`
--
ALTER TABLE `character_reputation`
  ADD PRIMARY KEY (`guid`,`faction`);

--
-- Indices de la tabla `character_settings`
--
ALTER TABLE `character_settings`
  ADD PRIMARY KEY (`guid`,`source`);

--
-- Indices de la tabla `character_skills`
--
ALTER TABLE `character_skills`
  ADD PRIMARY KEY (`guid`,`skill`);

--
-- Indices de la tabla `character_social`
--
ALTER TABLE `character_social`
  ADD PRIMARY KEY (`guid`,`friend`,`flags`),
  ADD KEY `friend` (`friend`);

--
-- Indices de la tabla `character_spell`
--
ALTER TABLE `character_spell`
  ADD PRIMARY KEY (`guid`,`spell`);

--
-- Indices de la tabla `character_spell_cooldown`
--
ALTER TABLE `character_spell_cooldown`
  ADD PRIMARY KEY (`guid`,`spell`);

--
-- Indices de la tabla `character_stats`
--
ALTER TABLE `character_stats`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `character_talent`
--
ALTER TABLE `character_talent`
  ADD PRIMARY KEY (`guid`,`spell`);

--
-- Indices de la tabla `corpse`
--
ALTER TABLE `corpse`
  ADD PRIMARY KEY (`guid`),
  ADD KEY `idx_type` (`corpseType`),
  ADD KEY `idx_instance` (`instanceId`),
  ADD KEY `idx_time` (`time`);

--
-- Indices de la tabla `creature_respawn`
--
ALTER TABLE `creature_respawn`
  ADD PRIMARY KEY (`guid`,`instanceId`),
  ADD KEY `idx_instance` (`instanceId`);

--
-- Indices de la tabla `gameobject_respawn`
--
ALTER TABLE `gameobject_respawn`
  ADD PRIMARY KEY (`guid`,`instanceId`),
  ADD KEY `idx_instance` (`instanceId`);

--
-- Indices de la tabla `game_event_condition_save`
--
ALTER TABLE `game_event_condition_save`
  ADD PRIMARY KEY (`eventEntry`,`condition_id`);

--
-- Indices de la tabla `game_event_save`
--
ALTER TABLE `game_event_save`
  ADD PRIMARY KEY (`eventEntry`);

--
-- Indices de la tabla `gm_subsurvey`
--
ALTER TABLE `gm_subsurvey`
  ADD PRIMARY KEY (`surveyId`,`questionId`);

--
-- Indices de la tabla `gm_survey`
--
ALTER TABLE `gm_survey`
  ADD PRIMARY KEY (`surveyId`);

--
-- Indices de la tabla `gm_ticket`
--
ALTER TABLE `gm_ticket`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`guid`),
  ADD KEY `leaderGuid` (`leaderGuid`);

--
-- Indices de la tabla `group_member`
--
ALTER TABLE `group_member`
  ADD PRIMARY KEY (`memberGuid`);

--
-- Indices de la tabla `guild`
--
ALTER TABLE `guild`
  ADD PRIMARY KEY (`guildid`);

--
-- Indices de la tabla `guild_bank_eventlog`
--
ALTER TABLE `guild_bank_eventlog`
  ADD PRIMARY KEY (`guildid`,`LogGuid`,`TabId`),
  ADD KEY `guildid_key` (`guildid`),
  ADD KEY `Idx_PlayerGuid` (`PlayerGuid`),
  ADD KEY `Idx_LogGuid` (`LogGuid`);

--
-- Indices de la tabla `guild_bank_item`
--
ALTER TABLE `guild_bank_item`
  ADD PRIMARY KEY (`guildid`,`TabId`,`SlotId`),
  ADD KEY `guildid_key` (`guildid`),
  ADD KEY `Idx_item_guid` (`item_guid`);

--
-- Indices de la tabla `guild_bank_right`
--
ALTER TABLE `guild_bank_right`
  ADD PRIMARY KEY (`guildid`,`TabId`,`rid`),
  ADD KEY `guildid_key` (`guildid`);

--
-- Indices de la tabla `guild_bank_tab`
--
ALTER TABLE `guild_bank_tab`
  ADD PRIMARY KEY (`guildid`,`TabId`),
  ADD KEY `guildid_key` (`guildid`);

--
-- Indices de la tabla `guild_eventlog`
--
ALTER TABLE `guild_eventlog`
  ADD PRIMARY KEY (`guildid`,`LogGuid`),
  ADD KEY `Idx_PlayerGuid1` (`PlayerGuid1`),
  ADD KEY `Idx_PlayerGuid2` (`PlayerGuid2`),
  ADD KEY `Idx_LogGuid` (`LogGuid`);

--
-- Indices de la tabla `guild_member`
--
ALTER TABLE `guild_member`
  ADD UNIQUE KEY `guid_key` (`guid`),
  ADD KEY `guildid_key` (`guildid`),
  ADD KEY `guildid_rank_key` (`guildid`,`rank`);

--
-- Indices de la tabla `guild_member_withdraw`
--
ALTER TABLE `guild_member_withdraw`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `guild_rank`
--
ALTER TABLE `guild_rank`
  ADD PRIMARY KEY (`guildid`,`rid`),
  ADD KEY `Idx_rid` (`rid`);

--
-- Indices de la tabla `instance`
--
ALTER TABLE `instance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `map` (`map`),
  ADD KEY `resettime` (`resettime`),
  ADD KEY `difficulty` (`difficulty`);

--
-- Indices de la tabla `instance_reset`
--
ALTER TABLE `instance_reset`
  ADD PRIMARY KEY (`mapid`,`difficulty`),
  ADD KEY `difficulty` (`difficulty`);

--
-- Indices de la tabla `instance_saved_go_state_data`
--
ALTER TABLE `instance_saved_go_state_data`
  ADD PRIMARY KEY (`id`,`guid`) USING BTREE;

--
-- Indices de la tabla `item_instance`
--
ALTER TABLE `item_instance`
  ADD PRIMARY KEY (`guid`),
  ADD KEY `idx_owner_guid` (`owner_guid`);

--
-- Indices de la tabla `item_refund_instance`
--
ALTER TABLE `item_refund_instance`
  ADD PRIMARY KEY (`item_guid`,`player_guid`);

--
-- Indices de la tabla `item_soulbound_trade_data`
--
ALTER TABLE `item_soulbound_trade_data`
  ADD PRIMARY KEY (`itemGuid`);

--
-- Indices de la tabla `lag_reports`
--
ALTER TABLE `lag_reports`
  ADD PRIMARY KEY (`reportId`);

--
-- Indices de la tabla `lfg_data`
--
ALTER TABLE `lfg_data`
  ADD PRIMARY KEY (`guid`);

--
-- Indices de la tabla `log_arena_fights`
--
ALTER TABLE `log_arena_fights`
  ADD PRIMARY KEY (`fight_id`);

--
-- Indices de la tabla `log_arena_memberstats`
--
ALTER TABLE `log_arena_memberstats`
  ADD PRIMARY KEY (`fight_id`,`member_id`);

--
-- Indices de la tabla `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_receiver` (`receiver`);

--
-- Indices de la tabla `mail_items`
--
ALTER TABLE `mail_items`
  ADD PRIMARY KEY (`item_guid`),
  ADD KEY `idx_receiver` (`receiver`),
  ADD KEY `idx_mail_id` (`mail_id`);

--
-- Indices de la tabla `mail_server_character`
--
ALTER TABLE `mail_server_character`
  ADD PRIMARY KEY (`guid`,`mailId`);

--
-- Indices de la tabla `mail_server_template`
--
ALTER TABLE `mail_server_template`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `petition`
--
ALTER TABLE `petition`
  ADD PRIMARY KEY (`ownerguid`,`type`),
  ADD UNIQUE KEY `index_ownerguid_petitionguid` (`ownerguid`,`petitionguid`);

--
-- Indices de la tabla `petition_sign`
--
ALTER TABLE `petition_sign`
  ADD PRIMARY KEY (`petitionguid`,`playerguid`),
  ADD KEY `Idx_playerguid` (`playerguid`),
  ADD KEY `Idx_ownerguid` (`ownerguid`);

--
-- Indices de la tabla `pet_aura`
--
ALTER TABLE `pet_aura`
  ADD PRIMARY KEY (`guid`,`casterGuid`,`spell`,`effectMask`);

--
-- Indices de la tabla `pet_spell`
--
ALTER TABLE `pet_spell`
  ADD PRIMARY KEY (`guid`,`spell`);

--
-- Indices de la tabla `pet_spell_cooldown`
--
ALTER TABLE `pet_spell_cooldown`
  ADD PRIMARY KEY (`guid`,`spell`);

--
-- Indices de la tabla `pool_quest_save`
--
ALTER TABLE `pool_quest_save`
  ADD PRIMARY KEY (`pool_id`,`quest_id`);

--
-- Indices de la tabla `profanity_name`
--
ALTER TABLE `profanity_name`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `pvpstats_battlegrounds`
--
ALTER TABLE `pvpstats_battlegrounds`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pvpstats_players`
--
ALTER TABLE `pvpstats_players`
  ADD PRIMARY KEY (`battleground_id`,`character_guid`);

--
-- Indices de la tabla `recovery_item`
--
ALTER TABLE `recovery_item`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `idx_guid` (`Guid`);

--
-- Indices de la tabla `reserved_name`
--
ALTER TABLE `reserved_name`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `updates`
--
ALTER TABLE `updates`
  ADD PRIMARY KEY (`name`) USING BTREE;

--
-- Indices de la tabla `updates_include`
--
ALTER TABLE `updates_include`
  ADD PRIMARY KEY (`path`) USING BTREE;

--
-- Indices de la tabla `warden_action`
--
ALTER TABLE `warden_action`
  ADD PRIMARY KEY (`wardenId`);

--
-- Indices de la tabla `worldstates`
--
ALTER TABLE `worldstates`
  ADD PRIMARY KEY (`entry`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banned_addons`
--
ALTER TABLE `banned_addons`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `bugreport`
--
ALTER TABLE `bugreport`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifier';

--
-- AUTO_INCREMENT de la tabla `channels`
--
ALTER TABLE `channels`
  MODIFY `channelId` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `character_equipmentsets`
--
ALTER TABLE `character_equipmentsets`
  MODIFY `setguid` bigint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gm_subsurvey`
--
ALTER TABLE `gm_subsurvey`
  MODIFY `surveyId` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gm_survey`
--
ALTER TABLE `gm_survey`
  MODIFY `surveyId` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gm_ticket`
--
ALTER TABLE `gm_ticket`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lag_reports`
--
ALTER TABLE `lag_reports`
  MODIFY `reportId` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mail_server_template`
--
ALTER TABLE `mail_server_template`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pvpstats_battlegrounds`
--
ALTER TABLE `pvpstats_battlegrounds`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `recovery_item`
--
ALTER TABLE `recovery_item`
  MODIFY `Id` int UNSIGNED NOT NULL AUTO_INCREMENT;

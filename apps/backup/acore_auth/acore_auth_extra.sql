
--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_username` (`username`);

--
-- Indices de la tabla `account_access`
--
ALTER TABLE `account_access`
  ADD PRIMARY KEY (`id`,`RealmID`);

--
-- Indices de la tabla `account_banned`
--
ALTER TABLE `account_banned`
  ADD PRIMARY KEY (`id`,`bandate`);

--
-- Indices de la tabla `account_muted`
--
ALTER TABLE `account_muted`
  ADD PRIMARY KEY (`guid`,`mutedate`);

--
-- Indices de la tabla `autobroadcast`
--
ALTER TABLE `autobroadcast`
  ADD PRIMARY KEY (`id`,`realmid`);

--
-- Indices de la tabla `build_info`
--
ALTER TABLE `build_info`
  ADD PRIMARY KEY (`build`);

--
-- Indices de la tabla `ip_banned`
--
ALTER TABLE `ip_banned`
  ADD PRIMARY KEY (`ip`,`bandate`);

--
-- Indices de la tabla `logs_ip_actions`
--
ALTER TABLE `logs_ip_actions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motd`
--
ALTER TABLE `motd`
  ADD PRIMARY KEY (`realmid`);

--
-- Indices de la tabla `realmcharacters`
--
ALTER TABLE `realmcharacters`
  ADD PRIMARY KEY (`realmid`,`acctid`),
  ADD KEY `acctid` (`acctid`);

--
-- Indices de la tabla `realmlist`
--
ALTER TABLE `realmlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_name` (`name`);

--
-- Indices de la tabla `secret_digest`
--
ALTER TABLE `secret_digest`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `uptime`
--
ALTER TABLE `uptime`
  ADD PRIMARY KEY (`realmid`,`starttime`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `account`
--
ALTER TABLE `account`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Identifier', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `autobroadcast`
--
ALTER TABLE `autobroadcast`
  MODIFY `id` tinyint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `logs_ip_actions`
--
ALTER TABLE `logs_ip_actions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'Unique Identifier';

--
-- AUTO_INCREMENT de la tabla `realmlist`
--
ALTER TABLE `realmlist`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

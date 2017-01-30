﻿<?php
// This is the application configuration file. All values have been set to
// the default, and should be changed as needed.
return array(
	//Conquer
	'ConquerServerName'      => 'CoBrasil',
	'ConquerDatabase'        => 'cobrasil',
	'ConquerCash'         => 'cash',
	//Ragnarok
	'ServerAddress'        => 'localhost',              // This value is the hostname:port under which Flux runs. (e.g., example.com or example.com:80)
	'BaseURI'              => 'painel',                 // The base URI is the base web root on which your application lies.
	'InstallerPassword'    => 'kBMjARB4fb94K8kaabY5Bv8rktQmH8GqGUPaEjNJqDF3rymEg3tX6qBHdPPnzSvC',         // Installer/updater password.
	'RequireOwnership'     => true,                     // Require the executing user to be owner of the FLUX_ROOT/data/ directory tree? (Better for security)
	                                                    // WARNING: This will be mostly IGNORED on non-POSIX-compliant OSes (e.g. Windows).
	'DefaultLoginGroup'    => null,
	'DefaultCharMapServer' => null,
	'DefaultLanguage'      => 'pt_br',                  // Specify the default control panel language (see FLUX_ROOT/lang/ directory for available languages.)
	'SiteTitle'            => 'Painel de Controle',		// This value is only used if the theme decides to use it.
	'ThemeName'            => 'default',                // The theme name of the theme you would like to use.  Themes are in FLUX_ROOT/themes.
	'ScriptTimeLimit'      => 0,                        // Script execution time limit. Specifies (in seconds) how long a page should run before timing out. (0 means forever)
	'MissingEmblemBMP'     => 'empty.bmp',              //
	'ItemIconNameFormat'   => '%d.png',                 // The filename format for item icons (defaults to {itemid}.png).
	'ItemImageNameFormat'  => '%d.png',                 // The filename format for item images (defaults to {itemid}.png).
	'MonsterImageNameFormat' => '%d.gif',               // The filename format for monster images (defaults to {monsterid}.gif).
	'JobImageNameFormat'   => '%d.gif',                 // The filename format for job images (defaults to {jobid}.gif).
	'ForceEmptyEmblem'     => false,                    // Forcefully display empty guild emblems, helpful when you don't have GD2 installed.
	'EmblemCacheInterval'  => 12,                       // Hourly interval to re-cache guild emblems (set to 0 to disable emblem cache).
	'SessionCookieExpire'  => 48,                       // Duration in hours.
	'AdminMenuGroupLevel'  => AccountLevel::LOWGM,      // The starting group ID for which module actions are moved into the admin menu for display.
	'DateDefaultTimezone'  => 'America/Sao_Paulo',      // The default timezone, consult the PHP manual for valid timezones: http://php.net/timezones (null for defaut system TZ)
	'DateFormat'           => 'Y-m-d',                  // Default DATE format to be displayed in pages.
	'DateTimeFormat'       => 'Y-m-d H:i:s',            // Default DATETIME format to be displayed in pages.
	'ShowSinglePage'       => true,                     // Whether or not to show the page numbers even if there's only one page.
	'ResultsPerPage'       => 20,                       // The number of results to display in a paged set, per page.
	'PagesToShow'          => 10,                       // The number of page numbers to display at once.
	'PageJumpMinimumPages' => 1,                        // Minimum number of required pages before page jump box is shown. (0 to always show!)
	'ShowPageJump'         => true,                     // Whether or not to show the "Page Jump" box.
	'SingleMatchRedirect'  => true,                     // Whether or not to redirect to view action from index page if only one match is returned (and action is allowed).
	'SingleMatchRedirectItem' => false,                 // Same as above, for item module.
	'SingleMatchRedirectMobs' => false,                 // Same as above, for monster module.
	'UsernameAllowedChars' => 'a-zA-Z0-9_',             // PCRE Format Pattern. default: 'a-zA-Z0-9_' (alphanumeric and underscore)
	                                                    // WARNING: This string isn't escaped so be careful which chars you use!
	                                                    // PCRE Pattern Ref: http://php.net/manual/en/pcre.pattern.php
	'MinUsernameLength'    => 4,                        // Minimum username length.
	'MaxUsernameLength'    => 23,                       // Maximum username length.
	'MinPasswordLength'    => 4,                        // Minimum password length.
	'MaxPasswordLength'    => 31,                       // Maximum password length.
	'PasswordMinUpper'     => 0,                        // Number of upper-case letters to require in passwords.
	'PasswordMinLower'     => 0,                        // Number of lower-case letters to require in passwords.
	'PasswordMinNumber'    => 0,                        // Number of numbers to require in passwords.
	'PasswordMinSymbol'    => 0,                        // Number of symbols to require in passwords.
	'GMMinPasswordLength'  => 8,                        // Minimum password length for GM accounts.
	'GMPasswordMinUpper'   => 0,                        // Number of upper-case letters to require in passwords for GM accounts.
	'GMPasswordMinLower'   => 0,                        // Number of lower-case letters to require in passwords for GM accounts.
	'GMPasswordMinNumber'  => 1,                        // Number of numbers to require in passwords for GM accounts.
	'GMPasswordMinSymbol'  => 1,                        // Number of symbols to require in passwords for GM accounts.
	'RandomPasswordLength' => 16,                       // This is the length of the random password generated by the "Reset Password" feature. (NOTE: Hardcoded minimum value of 8)
	'AllowUserInPassword'  => false,                    // Whether or not to allow the password to contain the username. (NOTE: A case-insensitive search is performed)
	'AllowDuplicateEmails' => false,                    // Whether or not to allow duplicate e-mails to be used in registration. (See Mailer config options)
	'RequireEmailConfirm'  => false,                    // Require e-mail confirmation during registration.
	'RequireChangeConfirm' => false,                    // Require confirmation when changing e-mail addresses.
	'EmailConfirmExpire'   => 48,                       // E-mail confirmations expire hours. Unconfirmed accounts will expire after this period of time.
	'MailerFromAddress'    => 'jogosprivadosbr@gmail.com',// The e-mail address displayed in the From field.
	'MailerFromName'       => 'Contato',             	// The name displayed with the From e-mail address.
	'MailerUseSMTP'        => true,                    // Whether or not to use a separate SMTP server for sending mail.
	'MailerSMTPUseSSL'     => false,                    // Whether or not mailer should connect using SSL (yes for GMail).
	'MailerSMTPUseTLS'     => true,                    // Same as above SSL setting, but for TLS.  This setting will override the SSL setting.
	'MailerSMTPPort'       => 587,                     // When MailerUseSMTP is true: SMTP server port (mailer will default to 25).
	'MailerSMTPHosts'      => 'smtp.gmail.com',                     // When MailerUseSMTP is true: A string host or array of hosts (e.g., 'host1' or array('host1', 'backuphost')).
	'MailerSMTPUsername'   => 'jogosprivadosbr@gmail.com',                     // When MailerUseSMTP is true: Authorized username for SMTP server.
	'MailerSMTPPassword'   => 'jUDDkzDCmruaTQpW6CgaSW8Y8sj6eyeQR6UACsXax7PrM4DuR2cyNhtbnpxpx2FC',                     // When MailerUseSMTP is true: Authorized password for SMTP server (for above user).
	'ServerStatusCache'    => 2,                        // Store a cached server status and refresh every X minutes.  Default: 2 minutes (value is measured in minutes).
	'ServerStatusTimeout'  => 2,                        // For each server, spend X amount of seconds to determine whether it's up or not.
	'SessionKey'           => 'fluxSessionData',        // Shouldn't be changed, just specifies the session key to be used for session data.
	'DefaultModule'        => 'main',                   // This is the module to execute when none has been specified.
	'DefaultAction'        => 'index',                  // This is the default action for any module, probably should leave this alone. (Deprecated)
	'GzipCompressOutput'   => false,                    // Whether or not to compress output using zlib.
	'GzipCompressionLevel' => 9,                        // zlib compression level. (1~9)
	'OutputCleanHTML'      => false,                     // Use this if you have Tidy installed to clean your HTML output when serving pages.
	'ShowCopyright'        => true,                     // Whether or not to show the copyright footer.
	'ShowRenderDetails'    => true,                     // Shows the "page rendered in X seconds" and "number of queries executed: X" in the default theme.
	'UseCleanUrls'         => false,                    // Set to true if you're running Apache and it supports mod_rewrite and .htaccess files.
	'DebugMode'            => true,                     // Set to false to minimize technical details from being output by Flux. WARNING: DO NOT USE THIS OPTION ON A PUBLICALLY-ACCESSIBLE CP.
	'UseCaptcha'           => true,                     // Use CAPTCHA image for account registration to prevent automated account creations. (Requires GD2/FreeType2)
	'UseLoginCaptcha'      => false,                    // Use CAPTCHA image for account logins. (Requires GD2/FreeType2)
	'EnableReCaptcha'      => false,                    // Enables the use of reCAPTCHA instead of Flux's native GD2 library (http://www.google.com/recaptcha)
	'ReCaptchaPublicKey'   => '...',                    // This is your reCAPTCHA public key [REQUIRED FOR RECAPTCHA] (sign up at http://www.google.com/recaptcha)
	'ReCaptchaPrivateKey'  => '...',                    // This is your reCAPTCHA private key [REQUIRED FOR RECAPTCHA] (sign up at http://www.google.com/recaptcha)
	'ReCaptchaTheme'       => 'white',                  // ReCaptcha theme to use (see: http://code.google.com/apis/recaptcha/docs/customization.html#Standard_Themes)
	'DisplaySinglePages'   => true,                     // Whether or not to display paging for single page results.
	'ForwardYears'         => 15,                       // (Visual) The number of years to display ahead of the current year in date inputs.
	'BackwardYears'        => 30,                       // (Visual) The number of years to display behind the current year in date inputs.
	'ColumnSortAscending'  => ' ▲',                     // (Visual) Text displayed for ascending sorted column names.
	'ColumnSortDescending' => ' ▼',                     // (Visual) Text displayed for descending sorted column names.
	'CreditExchangeRate'   => 1.0,                      // The rate at which credits are exchanged for dollars.
	'MinDonationAmount'    => 2.0,                      // Minimum donation amount. (NOTE: Actual donations made that are less than this account won't be exchanged)
	'DonationCurrency'     => 'BRL',                     // Preferred donation currency. Only donations made in this currency will be processed for credit deposits.
	'MoneyDecimalPlaces'   => 2,                        // (Visual) Number of decimal places to display in amount.
	'MoneyThousandsSymbol' => ',',                      // (Visual) Thousandths place separator (a period in European currencies).
	'MoneyDecimalSymbol'   => '.',                      // (Visual) Decimal separator (a comma in European currencies).
	'AcceptDonations'      => true,                     // Whether or not to accept donations.
	'PagSeguroSandbox'	   => true,						// false = produção , true = sandbox(testes)
	'PagSeguroEmail'	   => 'douglasdossantos22@gmail.com',	 	// email cadastrado no pagseguro
	'PagSeguroToken'	   => '',									// token producao
	'PagSeguroTokenSandbox'=> 'A29C739852A14811AE7186CE181697C6', 	// token sandbox
	'PayPalIpnUrl'         => 'www.paypal.com', // The URL for PayPal's IPN responses (www.paypal.com for live and www.sandbox.paypal.com for testing)
	'PayPalBusinessEmail'  => 'admin@localhost',        // Enter the e-mail under which you have registered your business account.
	'PayPalReceiverEmails' => array(                    // These are the receiver e-mail addresses who are allowed to receive payment.
		//'admin2@localhost',                            // -- This array may be empty if you only use one e-mail
		//'admin3@localhost'                             // -- because your Business Email is also checked.
	),
	'GStorageLeaderOnly'   => false,                    // Only allow guild leader to view guild storage rather than all members?
	'DivorceKeepChild'     => false,                    // Keep child after divorce?
	'DivorceKeepRings'     => false,                    // Keep wedding rings after divorce?
	'IpWhitelistPattern'   =>                           // PCRE Format Pattern. It's recommended you add your gameserver, webserver and server owner's IPs here.
	'(127\.0\.0\.1|0(\.[0\*]){3})',                     // WARNING: This string isn't escaped so be careful which chars you use!
		                                                // By default, whitelists 127.0.0.1 (localhost) and 0.0.0.0 (all interfaces; whitelists all wildcard bans that can achive this too)
	'AllowIpBanLogin'      => false,                    // Allow logging into account from banned IP.
	'AllowTempBanLogin'    => false,                    // Allow logging in of temporarily banned accounts.
	'AllowPermBanLogin'    => false,                    // Allow logging in of permanently banned accounts.
	'AutoRemoveTempBans'   => true,                     // Automatically remove expired temporary bans on certain pages.
	'ItemShopMaxCost'      => 99,                       // Max price an item can be sold for.
	'ItemShopMaxQuantity'  => 99,                       // Max quantity the item may be sold at once for.
	'ItemShopItemPerPage'  => 5,                        // The number of items to display per page in the "Item Shop" page.
	'HideFromWhosOnline'   => AccountLevel::LOWGM,      // Levels greater than or equal to this will be hidden from the "Who's Online" page.
	'HideFromMapStats'     => AccountLevel::LOWGM,      // Levels greater than or equal to this will be hidden from the "Map Stats" page.
	'EnableGMPassSecurity' => AccountLevel::LOWGM,      // Levels greater than or equal to this will be required to use passwords that meet the earlier GM Password settings.
	'ChargeGenderChange'   => 0,                        // You can specify this as the number of credits to charge for gender change.  Can be 0 for free change.
	'BanPaymentStatuses'   => array(                    // Payment statuses that will automatically ban the account owner if received.
	'Cancelled_Reversal',                               // -- 'Cancelled_Reversal'
	'Reversed',                                         // -- 'Reversed'
	),
	
	'HoldUntrustedAccount' => 0,                        // This is the time in hours to hold a donation crediting process for, if the account
	                                                    // isn't a trusted account. Specify 0 or false to disable this feature.
	
	'AutoUnholdAccount'    => false,                    // Enable this to auto-unhold an account and credit it if the transaction is still
	                                                    // valid.  This only applies if you are using the HoldUnstrustedAccount feature.
	                                                    // If you want to run a cron job instead, you can make a request to the '/donate/update'
	                                                    // module/action with the InstallerPassword as the password to run the update task.
	                                                    // With clean URLs: http://<server>/<baseURI>/donate/update?password=<InstallerPassword>
	                                                    // Without clean URLs: http://<server>/<baseURI>?module=donate&action=update&password=<InstallerPassword>
	                                                    // NOTE: This option is HIGHLY inefficient, it's recommended to run a cron job instead.
	
	'AutoPruneAccounts'    => false,                    // Enable this to automatically prune expired accounts. Enabling this is a performance
	                                                    // performance killer. See 'AutoUnholdAccount' for running this task as a cron job,
		                                                // the module is 'account' and the action is 'prune'.
	                                                    // With clean URLs: http://<server>/<baseURI>/account/prune?password=<InstallerPassword>
	                                                    // Without clean URLs: http://<server>/<baseURI>?module=account&action=prune&password=<InstallerPassword>
	
	'ShopImageExtensions'  => array(                    // These are the image extensions allowed for uploading in the item shop.
		'png', 'jpg', 'gif', 'bmp', 'jpeg'
	),
	'NoResetPassGroupLevel'  => AccountLevel::LOWGM,    // Minimum group level of account to prevent password reset using control panel.
	
	'CharRankingLimit'       => 20,                     //
	'GuildRankingLimit'      => 20,                     //
	'ZenyRankingLimit'       => 20,                     //
	'DeathRankingLimit'      => 20,                     //
	'AlchemistRankingLimit'  => 20,                     //
	'BlacksmithRankingLimit' => 20,                     //
	'HomunRankingLimit'      => 20,                     //
	
	'RankingHideGroupLevel'  => AccountLevel::LOWGM,    //
	'InfoHideZenyGroupLevel' => AccountLevel::LOWGM,    // Minimum group level of account to hide zeny from in server information page.
	
	'CharRankingThreshold'      => 0,                   // Number of days the character must have logged in within to be listed in character ranking. (0 = disabled)
	'ZenyRankingThreshold'      => 0,                   // Number of days the character must have logged in within to be listed in zeny ranking. (0 = disabled)
	'DeathRankingThreshold'     => 0,                   // Number of days the character must have logged in within to be listed in death ranking. (0 = disabled)
	'AlchemistRankingThreshold' => 0,                   // Number of days the character must have logged in within to be listed in death ranking. (0 = disabled)
	'HomunRankingThreshold'     => 0,                   // Number of days the character must have logged in within to be listed in homunculus ranking. (0 = disabled)
	
	'HideTempBannedCharRank'  => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedCharRank'  => true,                  // Hide permanently banned characters from ranking.
	
	'HideTempBannedZenyRank'  => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedZenyRank'  => true,                  // Hide permanently banned characters from ranking.
	
	'HideTempBannedDeathRank' => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedDeathRank' => true,                  // Hide permanently banned characters from ranking.
	
	'HideTempBannedAlcheRank' => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedAlcheRank' => true,                  // Hide permanently banned characters from ranking.
	
	'HideTempBannedSmithRank' => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedSmithRank' => true,                  // Hide permanently banned characters from ranking.
	
	'HideTempBannedStats'     => false,                 // Hide temporarily banned accounts from statistics.
	'HidePermBannedStats'     => true,                  // Hide permanently banned accounts from statistics.

	'HideTempBannedHomunRank' => false,                 // Hide temporarily banned characters from ranking.
	'HidePermBannedHomunRank' => true,                  // Hide permanently banned characters from ranking.

	'SortJobsByAmount'        => false,                 // Sort job class information on statistics page by descending quantity (false = Sort by Job ID).
	
	'CpLoginLogShowPassword'  => false,                 // Show password in CP login log (also see access.php's SeeCpLoginLogPass).
	
	'CpResetLogShowPassword'  => false,                 // Show password in CP "password resets" log (also see access.php's SeeCpResetPass).
	
	'CpChangeLogShowPassword' => false,                 // Show password in CP "password changes" log (also see access.php's SeeCpChangePass).
	
	'AdminMenuNewStyle'       => true,                  // Use new-style admin menu;  Applies to 'default' theme.

// The following configs relate to customised FluxCP modules

// Contact Form
	'ContactFormEmail'       => 'a@a.com',              // This email address is where you want the form submissions to be sent.

// Harmony Logs
	'EnableHarmonyLogs'      => '0',                   // 0 to disable, 1 to enable. If you don't have a harmony log table, do not enable.
	// These are the main menu items that should be displayed by themes.
	// They route to modules and actions.  Whether they are displayed or
	// not at any given time depends on the user's account group level and/or
	// their login status.
	'MenuItems' => array(
		'Menu Principal'   => array(
			'Inicial'      => array('module'  => 'main'),
			//'Fórum'        => array('exturl'  => 'http://www.fluxro.com/community'),
			'Contate-nos'  => array('module' => 'contactform', 'action' => 'index'),
			//'Vote por Pontos' => array('module' => 'voteforpoints'),
		),
		'Conta'     => array(
			'Registrar'       => array('module' => 'account', 'action' => 'create'),
			'Login'           => array('module' => 'account', 'action' => 'login'),
			'Minha Conta'     => array('module' => 'account', 'action' => 'view'),
			'Histórico'       => array('module' => 'history'),
			'Sair da Conta'   => array('module' => 'account', 'action' => 'logout'),
		),
		'Doações'   => array(

			//'Paypal'        => array('module' => 'donate'),
			'Pagseguro'        => array('module' => 'doa'),
		),
		'Loja Virtual'   => array(

					'Comprar'     => array('module' => 'purchase'), // Caso tenha interesse em utilizar a loja de itens do Paypal, descomente esta linha.
		),

		//'Informações' => array(
			//'Informações do Server'   => array('module' => 'server', 'action' => 'info'),
			//'Status do Server'        => array('module' => 'server', 'action' => 'status'),
			//'Horários da GdE'         => array('module' => 'woe'),
			//'Castles'                 => array('module' => 'castle'),
			//"Quem Está Online"        => array('module' => 'character', 'action' => 'online'),
			//'Estatísticas de Mapas'   => array('module' => 'character', 'action' => 'mapstats'),
			//'Ranking'                 => array('module' => 'ranking', 'action' => 'character'),
		//),
		'Database'    => array(
			//'Item Database'    => array('module' => 'item'),
			//'Mob Database'     => array('module' => 'monster'),
		),
		'Staff' => array(
			'brA Logs'          => array('module' => 'logdata'),
			'CP Logs'           => array('module' => 'cplog'),
			'IP\'s Banidos'     => array('module' => 'ipban'),
			'Contas'            => array('module' => 'account'),
			'Personagens'       => array('module' => 'character'),
			//'Clãs'              => array('module' => 'guild'),
			'Enviar E-mail'     => array('module' => 'mail'),
			//'Reinstalar'        => array('module' => 'install', 'action' => 'reinstall'),
			//'Leilão'          => array('module' => 'auction'),
			//'Economia'        => array('module' => 'economy'),
		),
		'Task List' => array(
			'Lista de Tarefas'  => array('module' => 'tasks', 'action'=>'index'),
		)
	),
	
	// Sub-menu items that are displayed for any action belonging to a
	// particular module. The format it simple.
	'SubMenuItems'  => array(
		'tasks' => array(
			'createnew'	=> 'Adicionar nova Tarefa',
			'index'		=> 'Exibir tarefas atuais',
			'viewmine'	=> 'Exibir minhas Tarefas',
			'viewcompleted'	=> 'Exibir tarefas concluídas',
			'staffsettings'	=> 'Configurações',
		),
		'history' => array(
			//'gamelogin'  => 'Logins no Jogo',
			'cplogin'    => 'Logins no Painel',
			'emailchange'=> 'Alterações de E-Mail',
			'passchange' => 'Alterações de Senha',
			'passreset'  => 'Redefinições de Senha'
		),
		'account' => array(
			'index'      => 'Listar Contas',
			'view'       => 'Ver Conta',
			'changepass' => 'Alterar Senha',
			'changemail' => 'Alterar E-mail',
			//'changesex'  => 'Alterar Gênero',
			//'transfer'   => 'Transferir Créditos',
			//'xferlog'    => 'Histórico de Transferência',
			'cart'       => 'Ir as compras',
			'login'      => 'Login',
			'create'     => 'Registrar',
			'resetpass'  => 'Redefinir Senha',
			'resend'     => 'Reenviar E-mail de Confirmação'
		),
		'guild' => array(
			'index'  => 'Listar Clãs',
			'export' => 'Exportar Emblemas de Clãs'
		),
		'server' => array(
			'status'     => 'Ver Status',
			'status-xml' => 'Ver Status como XML'
		),
		'logdata' => array(
			//'char'     => 'Personagens',
			//'inter'    => 'Interações',
			'command'    => 'Comandos',
			//'branch'   => 'Galhos',
			'chat'       => 'Chats',
			'harmony'    => 'Harmony Logs',
			//'inter'    => 'Interações',
			'login'      => 'Logins',
			'mvp'        => 'MVP',
			//'npc'      => 'NPC',
			'pick'       => 'Itens Apanhados',
			'zeny'       => 'Zeny'
		),
		'cplog' => array(
			'paypal'     => 'Transações do PayPal',
			'login'      => 'Logins',
			'resetpass'  => 'Redefinições de Senha',
			'changepass' => 'Alterações de Senha',
			'changemail' => 'Alterações de E-mail',
			'ban'        => 'Contas banidas',
			'ipban'      => 'IPs banidos'
		),
		'purchase' => array(
			'index'    => 'Loja',
			'cart'     => 'Meu carrinho',
			'checkout' => 'Finalizar',
			//'clear'    => 'Esvaziar Carrinho',
			//'pending'  => 'Recompensas Pendentes'
		),
		'donate' => array(
			'index'   => 'Fazer Uma Doação',
			'history' => 'Histórico de Doação',
			'trusted' => 'E-mail confiáveis do PayPal'
		),
		'ipban' => array(
			'index' => 'Lista de IP\'s Banidos',
			'add'   => 'Banir IP'
		),
		'ranking' => array(
			'character'  => 'Ranking de Personagens',
			'guild'      => 'Ranking de Clãs',
			'zeny'       => 'Ranking de Zenys',
			'death'      => 'Ranking de morte',
			'alchemist'  => 'Ranking de Alquimista',
			'homunculus' => 'Ranking de Homunculus',
			'blacksmith' => 'Ranking de Ferreiro'
		),
		'item' => array(
			'index' => 'Listar Items',
			'add'   => 'Adicionar Item'
		)
	),
	
	'AllowMD5PasswordSearch'       => false,
	'ReallyAllowMD5PasswordSearch' => false, // Are you POSITIVELY sure?
	
	// Specifies which modules and actions should be ignored by Tidy
	// (enabled/disabled by the OutputCleanHTML option).
	'TidyIgnore' => array(
		array('module' => 'captcha'),
		array('module' => 'guild', 'action' => 'emblem')
	),
	
	// Job classes, loaded from another file to avoid cluttering this one.
	// There isn't normally a need to modify this file, unless it's been
	// modified in an update. (In English: DON'T TOUCH THIS.)
	'JobClasses' => include('jobs.php'),
	
	// Alchemist job classes, mostly used for alchemist rankings.
	// Should be left alone unless new alchemist-related job classes are introduced.
	'AlchemistJobClasses' => include('jobs_alchemist.php'),
	
	// Blacksmith job classes, mostly used for blacksmith rankings.
	// Should be left alone unless new blacksmith-related job classes are introduced.
	'BlacksmithJobClasses' => include('jobs_blacksmith.php'),

	// Gender-linked Job class IDs and their corresponding names.
	// Should be left alone unless new gender-specific job classes are introduced.
	'GenderLinkedJobClasses' => include('jobs_gender_linked.php'),
	
	// Homunculus class IDs and their corresponding names.
	// Best not to mess with this either.
	'HomunClasses' => include('homunculus.php'),

	// Item Types with their corresponding names.
	// Shouldn't touch this either.
	'ItemTypes' => include('itemtypes.php'),
	
	// Specil Item Types with their corresponding names (For Weapons & Ammo by default).
	// Shouldn't touch this either.
	'ItemTypes2' => include('itemtypes2.php'),
	
	// Common Equip Location Combinations with their corresponding names.
	// Shouldn't touch this unless you've added custom combinations.
	'EquipLocationCombinations' => include('equip_location_combinations.php'),
	
	// Error Code -> Error Type mapping.
	// Shouldn't need touching, however modifying loginerrors.php should be relatively safe.
	'LoginErrors' => include('loginerrors.php'),
	
	// brA equip jobs mapping.
	'EquipJobs' => include('equip_jobs.php'),
	
	// brA equip locations mapping.
	'EquipLocations' => include('equip_locations.php'),
	
	// brA equip upper mapping.
	'EquipUpper' => include('equip_upper.php'),
	
	// brA monster sizes mapping.
	'MonsterSizes' => include('sizes.php'),
	
	// brA monster races mapping.
	'MonsterRaces' => include('races.php'),
	
	// brA elements mapping.
	'Elements' => include('elements.php'),
	
	// brA attributes mapping.
	'Attributes' => include('attributes.php'),
	
	// brA monster modes mapping.
	'MonsterModes' => include('monstermode.php'),
	
	// Item shop categories.
	'ShopCategories' => include('shopcategories.php'),
	
	// Item pick and zeny log types.
	'PickTypes' => include('picktypes.php'),
	
	// Castle names.
	'CastleNames' => include('castlenames.php'),
	
	// DON'T TOUCH. THIS IS FOR DEVELOPERS.
	'FluxTables' => array(
		'CreditsTable'        => 'cp_credits',
		'CreditTransferTable' => 'cp_xferlog',
		'ItemShopTable'       => 'cp_itemshop',
		'TransactionTable'    => 'cp_txnlog',
		'RedemptionTable'     => 'cp_redeemlog',
		'AccountCreateTable'  => 'cp_createlog',
		'AccountBanTable'     => 'cp_banlog',
		'IpBanTable'          => 'cp_ipbanlog',
		'DonationTrustTable'  => 'cp_trusted',
		'AccountPrefsTable'   => 'cp_loginprefs',
		'CharacterPrefsTable' => 'cp_charprefs',
		'ResetPasswordTable'  => 'cp_resetpass',
		'ChangeEmailTable'    => 'cp_emailchange',
		'LoginLogTable'       => 'cp_loginlog',
		'ChangePasswordTable' => 'cp_pwchange',
		'TaskListTable'       => 'cp_tasklist',
		'TaskListStaffTable'  => 'cp_taskliststaff',
		'OnlinePeak'          => 'cp_onlinepeak'
	)
);
?>

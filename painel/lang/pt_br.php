﻿<?php
return array(	
	// Generic/Misc.
	'YesLabel'                => 'Sim',
	'NoLabel'                 => 'Não',
	'NoteLabel'               => 'Nota',
	'GenderTypeMale'          => 'Masculino',
	'GenderTypeFemale'        => 'Feminino',
	'GenderTypeServer'        => 'Servidor',
	'RefreshSecurityCode'     => 'Atualizar Código de Segurança',
	'NoneLabel'               => 'Nada',
	'NeverLabel'              => 'Nunca',
	'NotApplicableLabel'      => 'Não Aplicável',
	'UnknownLabel'            => 'Desconhecido',
	'IsEqualToLabel'          => 'é igual a',
	'IsGreaterThanLabel'      => 'é maior que',
	'IsLessThanLabel'         => 'é menor que',
	'AllLabel'                => 'Tudo',
	'SearchLabel'             => 'Procurar…',
	'GoBackLabel'             => 'Voltar à página anterior…',
	'SearchButton'            => 'Procurar',
	'ResetButton'             => 'Resetar',
	'FilterButton'            => 'Filtrar',
	'NotAcceptingDonations'   => "Desculpe, mas nós não estamos aceitando doações no momento. Desculpas pela inconveniência.",
	//'NotAcceptingDonations'   => "We're sorry, but our donation system is currently undergoing maintenance, please try again later.",
	'FoundSearchResults'      => 'Encontrado um total de %d registro(s) em %d páginas(s).  Mostrando %d-%d.',
	'LoginToDonate'           => 'Por favor, faça login para poder doar.',
	'UnknownCharacter'        => 'Nenhum personagem encontrado.',
	'AccountIdLabel'          => 'ID da Conta',
	'AccountGroupIDLabel'     => 'Level do Grupo',
	'AccountStateLabel'       => 'Status da Conta',
	'CreditBalanceLabel'      => 'Gift Points',
	'UsernameLabel'           => 'Usuário',
	'PasswordLabel'           => 'Senha',
	'EmailAddressLabel'       => 'E-mail',
	'GenderLabel'             => 'Gênero',
	'LoginCountLabel'         => 'Contagem de Login',
	'LastLoginDateLabel'      => 'Data do último Login',
	'LastUsedIpLabel'         => 'Último IP registrado',
	'AccountStateNormal'      => 'Normal',
	'AccountStatePending'     => 'Pendente',
	'AccountStatePermBanned'  => 'Banido Permanentemente',
	'AccountStateTempBanLbl'  => 'Banido Temporariamente',
	'AccountStateTempBanned'  => 'Banido Temp. (Desbanir: %s)',
	'OnlineLabel'             => 'Online',
	'OfflineLabel'            => 'Offline',
	'ItemIdLabel'             => 'ID do Item',
	'ItemNameLabel'           => 'Nome do Item',
	'ItemAmountLabel'         => 'Quantidade',
	'ItemIdentifyLabel'       => 'Identificado',
	'ItemRefineLabel'         => 'Refinado',
	'ItemBrokenLabel'         => 'Quebrado',
	'ItemCard0Label'          => 'Carta 0',
	'ItemCard1Label'          => 'Carta 1',
	'ItemCard2Label'          => 'Carta 2',
	'ItemCard3Label'          => 'Carta 3',

	// Module: account
	// - account/changemail
	'EmailChangeTitle'        => 'Alterar E-mail',
	'EnterEmailAddress'       => 'Insira um E-mail.',
	'EmailCannotBeSame'       => 'Seu novo e-mail não pode ser igual ao atual.',
	'EmailInvalid'            => 'Endereço de e-mail inválido.',
	'EmailAlreadyRegistered'  => "Esse e-mail já está registrado para outra conta, insira outro.",
	'EmailChangeSent'         => 'Uma mensagem foi enviada para o seu novo email com um link para confirmar a alteração.',
	'EmailAddressChanged'     => 'Seu e-mail foi alterado com sucesso!',
	'EmailChangeFailed'       => 'Falha ao alterar e-mail. Tente novamente mais tarde.',
	'EmailChangeHeading'      => 'Alterar E-mail',
	'EmailChangeInfo'         => 'Se você quer alterar o e-mail cadastrado na sua conta, preencha o formulário abaixo.',
	'EmailChangeInfo2'        => 'Depois de enviar o formulário, você receberá uma mensagem no seu novo email contendo um link para você confirmar a sua alteração.',
	'EmailChangeLabel'        => 'Novo E-mail',
	'EmailChangeInputNote'    => 'Deve ser um e-mail válido!',
	'EmailChangeButton'       => 'Alterar E-mail',
	// - account/changepass
	'PasswordChangeTitle'     => 'Alterar Senha',
	'NeedCurrentPassword'     => 'Insira a sua senha atual.',
	'NeedNewPassword'         => 'Insira a sua nova senha.',
	'OldPasswordInvalid'      => "A senha que você digitou não bate com a sua senha real.",
	'ConfirmNewPassword'      => 'Confirme sua nova senha.',
	'NewPasswordHasUsername'  => 'Sua nova senha não deve conter seu nome de usuário..',
	'NewPasswordInvalid'      => 'Sua nova senha contém caracteres inválidos.',
	'NewPasswordSameAsOld'    => 'Nova senha não pode ser a mesma que sua senha atual.',
	'NewPasswordNeedUpper'    => 'Sua nova senha deve conter pelo menos %d letra(s) maiúsculas.',
	'NewPasswordNeedLower'    => 'Sua nova senha deve conter pelo menos %d letra(s) minúsculas.',
	'NewPasswordNeedNumber'   => 'Sua nova senha deve conter pelo menos %d número(s).',
	'NewPasswordNeedSymbol'   => 'Sua nova senha deve conter pelo menos %d símbolo (s).',
	'PasswordMAXSymbol'       => 'Sua senha não pode ter mais de %d Caracteres.',
	'PasswordHasBeenChanged'  => 'Senha alterada com sucesso, favor faça login novamente.',
	'FailedToChangePassword'  => 'Falha ao alterar sua senha. Por favor, contate um administrador.',
	'PasswordChangeHeading'   => 'Alterar sua Senha',
	'PasswordChangeInfo'      => 'Por favor, digite sua senha atual e, em seguida, digite a nova senha que deseja usar e digite novamente para confirmar.',
	'CurrentPasswordLabel'    => 'Senha Atual',
	'NewPasswordLabel'        => 'Nova Senha',
	'NewPasswordConfirmLabel' => 'Re-digite a nova senha',
	'PasswordChangeNote'      => 'Por favor, certifique-se de digitar as informações corretas.',
	'PasswordChangeNote2'     => 'Após alterar sua senha, você será registrado.',
	'PasswordChangeButton'    => 'Alterar Senha',
	// - account/changesex
	'GenderChangeTitle'       => 'Alterar Gênero',
	'GenderChangeBadChars'    => 'Você não pode trocar de gênero se algum dos seus personagens é um %s',
	'GenderChanged'           => 'Seu gênero foi alterado com sucesso e $d créditos foram debitados sua conta.',
	'GenderChangedForFree'    => 'Gênero alterado com sucesso.',
	'GenderChangeHeading'     => 'Altere Seu Gênero',
	'GenderChangeCost'        => 'Mudança de Gênero vai custar %s créditos para você.',
	'GenderChangeBalance'     => 'Você possui atualmente %s créditos.',
	'GenderChangeNoFunds'     => 'Você não possui créditos suficiente para completar a sua troca de gênero.',
	'GenderChangeNoCost'      => 'Para você, as mudanças de sexo são livres.',
	'GenderChangeCharInfo'    => 'Você não pode alterar seu gênero se você tiver um personagem que for um: %s',
	'GenderChangeSubHeading'  => 'Tenha certeza que você quer realmente alterar!',
	'GenderChangeFormText'    => 'Você deseja mudar seu gênero para %s?',
	'GenderChangeConfirm'     => 'Você tem certeza que quer alterar seu gênero?',
	'GenderChangeButton'      => 'Sim, por favor.',
	// - account/confirm
	'AccountConfirmTitle'     => 'Confirmar Conta',
	'AccountConfirmUnban'     => 'A conta foi confirmada e ativada.',
	'AccountConfirmMessage'   => 'Sua conta foi confirmada e ativada, agora você pode fazer login.',
	// - account/confirmemail
	'EmailConfirmTitle'       => 'Confirmar E-mail',
	'EmailConfirmFailed'      => 'Tivemos um problema técnico durante sua alteração de email, por favor entre em contato com algum Administrador.',
	'EmailConfirmChanged'     => 'Seu e-mail foi alterado com sucesso!',
	// - account/create
	'AccountCreateTitle'      => 'Criar Uma Conta',
	'AccountConfirmBan'       => 'Esperando ativação da conta: %s',
	'AccountCreateEmailSent'  => 'Um e-mail foi enviado contendo as informações de ativação da conta, por favor, cheque seu email e ative a sua conta para poder fazer login.',
	'AccountCreateFailed'     => 'Sua conta foi criada, mas infelizmente houve uma falha ao lhe enviar o email de confirmação devido a problemas técnicos. Por favor, procure algum GM ou Administrador para resolver o seu problema.',
	'AccountCreated'          => 'Parabéns! Você foi registrado com sucesso e você já está logado!',
	'AccountCreateHeading'    => 'Registrar',
	'AccountCreateTerms'      => 'Termos de Serviço',
	'AccountCreateInfo'       => 'Por favor, leia os nossos %s antes de criar uma conta, tenha certeza que você entendeu as regras para poder ter uma conta no nosso servidor.',
	'AccountCreateInfo2'      => 'Clicando em "Criar Minha Conta", você estará concordando com os nossos %s.',
	'AccountCreateGenderInfo' => "O gênero que você escolheu irá afetar o gênero do seu personagem in-game!",
	'AccountServerLabel'      => 'Servidor',
	'AccountUsernameLabel'    => 'Seu Usuário',
	'AccountPasswordLabel'    => 'Sua Senha',
	'AccountPassConfirmLabel' => 'Confirmar Senha',
	'AccountEmailLabel'       => 'E-mail',
	'AccountGenderLabel'      => 'Gênero',
	'AccountBirthdateLabel'   => 'Data de nascimento',
	'AccountSecurityLabel'    => 'Código de Segurança',
	'AccountCreateButton'     => 'Criar Minha Conta',
	'AccountInvalidChars'     => "Um nome de usuário pode conter somente estes caracteres: ' %s'",
	'InvalidLoginServer'      => 'Login inválido para servidor selecionado, por favor, tente novamente com um servidor válido.',
	'InvalidLoginCredentials' => 'Login inválido credenciais, verifique se você digitou as informações corretas e tente novamente.',
	'UnexpectedLoginError'    => 'Ocorreu um erro inesperado, tente novamente ou reporte ao administrador.',
	'CriticalLoginError'      => 'Algo ruim aconteceu. Comunicar ao administrador o mais cedo possível.',
	'UsernameAlreadyTaken'    => "O nome de usuário que você escolheu já está em uso por outro usuário.",
	'UsernameTooShort'        => sprintf('Seu nome de usuário deve ser em torno de %d a %d caracteres longos.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'UsernameTooLong'         => sprintf('Seu nome de usuário deve ser em torno de %d a %d caracteres longos.', Flux::config('MinUsernameLength'), Flux::config('MaxUsernameLength')),
	'PasswordContainsUser'    => 'Sua senha não pode conter seu nome de usuário.',
	'PasswordHasUsername'     => 'Sua senha não deve conter seu nome de usuário.',
	'PasswordTooShort'        => 'Sua senha deve ser em torno de %d a %d caracteres longo.',
	'PasswordTooLong'         => 'Sua senha deve ser em torno de %d a %d caracteres longo.',
	'PasswordsDoNotMatch'     => "Suas senhas não coincidem, por favor, certifique-se de que você digitou corretamente.",
	'PasswordNeedUpper'       => 'Sua senha deve conter pelo menos %d letra(s) maiúscula.',
	'PasswordNeedLower'       => 'Sua senha deve conter pelo menos %d letra(s) minúsculas.',
	'PasswordNeedNumber'      => 'Sua senha deve conter pelo menos %d número(s).',
	'PasswordNeedSymbol'      => 'Sua senha deve conter pelo menos %d símbolo(s).',
	'EmailAddressInUse'       => "Você digitou o endereço de e-mail já está registrado para outra conta. Por favor use um endereço de e-mail diferente.",
	'InvalidEmailAddress'     => "O endereço de email que você digitou não está em um formato de endereço de email válido.",
	'InvalidGender'           => 'Sexo deve ser "M" ou "F"',
	'InvalidServer'           => "O servidor que você selecionou não existe.",
	'InvalidSecurityCode'     => 'Por favor introduza o código de segurança corretamente.',
	'InvalidPassword'         => 'A senha contém caracteres inválidos.',
	'InvalidBirthdate'        => 'Entrada de Data de nascimento inválida.',
	'CriticalRegisterError'   => 'Algo ruim aconteceu. Comunicar ao administrador o mais cedo possível.',
	// - account/edit
	'AccountEditTitle'        => 'Modificar Conta',
	'AccountEditTitle2'       => 'Modificando Minha Conta',
	'AccountEditTitle3'       => 'Modificando Conta (%s)',
	'CannotModifyOwnGroupID'  => 'Você não pode modificar seu próprio ID do grupo da conta.',
	'CannotModifyAnyGroupID'  => 'Você não pode modificar IDs do grupo de contas.',
	'CannotModifyGroupIDHigh' => 'Você não pode definir um ID do grupo de conta para ser maior do que o seu próprio.',
	'InvalidGroupID'          => 'ID do grupo inválido.',
	'CannotModifyBalance'     => 'Você não pode mudar o balanço da conta.',
	'InvalidLastLoginDate'    => 'Última data e hora de login inválidos.',
	'AccountModified'         => 'Conta modificada com sucesso.',
	'AccountEditHeading'      => 'Modificar Conta',
	'AccountEditButton'       => 'Modificar Conta',
	'AccountEditNotFound'     => 'Conta não encontrada.',
	// - account/index
	'AccountIndexTitle'       => 'Listar Contas',
	'AccountIndexHeading'     => 'Contas',
	'LoginBetweenLabel'       => 'Login Entre',
	'BirthdateBetweenLabel'   => 'Data de nascimento entre',
	'AccountIndexNotFound'    => 'Conta não encontrada.',
	// - account/login
	'LoginTitle'              => 'Login',
	'LoginHeading'            => 'Login',
	'LoginButton'             => 'Login',
	'LoginPageMakeAccount'    => 'Você não possui uma conta? <a href="%s">Faça uma agora!</a>',
	'TemporarilyBanned'       => 'Sua conta foi banida temporariamente.',
	'PermanentlyBanned'       => 'Sua conta foi banida permanentemente.',
	'IpBanned'                => 'O seu IP foi banido.',
	'PendingConfirmation'     => 'Sua conta está esperando confirmação de e-mail.',
	// - account/logout
	'LogoutTitle'             => 'Sair',
	'LogoutHeading'           => 'Sair',
	'LogoutInfo'              => 'Você saiu da sua conta.',
	'LogoutInfo2'             => 'Aguarde um momento enquanto você está sendo <a href="%s">redirecionado</a>…',
	// - account/resend
	'ResendTitle'             => 'Re-enviar E-mail de Confirmação',
	'ResendEnterUsername'     => 'Por favor, insira o seu Usuário.',
	'ResendEnterEmail'        => 'Por favor, insira o seu E-mail.',
	'ResendFailed'            => 'Falha ao re-enviar código de confirmação.',
	'ResendEmailSent'         => 'Seu código de confirmação foi enviado, olhe a sua caixa de entrada para proceder com a ativação da sua conta.',
	'ResendHeading'           => 'Re-enviar E-mail de Confirmação',
	'ResendInfo'              => 'Por favor, insira o Usuário e E-mail que você utilizou durante o registro da sua conta para podermos re-enviar o seu e-mail de confirmação.',
	'ResendServerLabel'       => 'Servidor Registrado',
	'ResendAccountLabel'      => 'Usuário',
	'ResendEmailLabel'        => 'E-mail',
	'ResendServerInfo'        => 'Este é o servidor que a conta está registrada.',
	'ResendAccountInfo'       => 'Este é o usuário que você registrou.',
	'ResendEmailInfo'         => 'Este é o e-mail que você utilizou no registro da conta acima.',
	'ResendButton'            => 'Re-enviar E-mail de Confirmação',
	// - account/resetpass
	'ResetPassTitle'          => 'Redefinir Senha',
	'ResetPassEnterAccount'   => 'Por favor, digite o seu Usuário.',
	'ResetPassEnterEmail'     => 'Por favor, digite o seu e-mail.',
	'ResetPassDisallowed'     => 'Recuperação de senha não pode ser usada para esta conta.',
	'ResetPassFailed'         => 'Falha ao enviar o email de redefinição de senha.',
	'ResetPassEmailSent'      => 'Um e-mail foi enviado para você com os detalhes de como proceder para redefinir sua senha.',
	'ResetPassTitle'          => 'Redefinir Senha',
	'ResetPassInfo'           => 'Se você perder a sua senha, você pode redefiní-la digitando apenas o email que você cadastrou na sua conta.',
	'ResetPassInfo2'          => 'Uma mensagem será enviada ao email digitado contendo um link para você poder redefinir a sua senha, por isso é necessário que você possua um e-mail válido.',
	'ResetPassServerLabel'    => 'Servidor Registrado',
	'ResetPassAccountLabel'   => 'Usuário',
	'ResetPassEmailLabel'     => 'E-mail',
	'ResetPassServerInfo'     => 'Este é o servidor que a conta está registrada.',
	'ResetPassAccountInfo'    => 'Este é o usuário que você registrou.',
	'ResetPassEmailInfo'      => 'Este é o e-mail que você utilizou no registro da conta acima.',
	'ResetPassButton'         => 'Enviar E-mail para Redefinição de Senha',
	// - account/resetpw
	'ResetPwTitle'            => 'Redefinir Senha',
	'ResetPwFailed'           => 'Falha ao redefinir senha, tente novamente mais tarde.',
	'ResetPwDone'             => 'Sua senha foi redefinida e um e-mail contendo a sua nova senha foi enviada para você.',
	'ResetPwDone2'            => 'A sua senha foi redefinida, mas houve uma falha ao lhe enviar um e-mail contendo sua nova senha. Por favor, tente redefiní-la novamente para resolver esse problema.',
	// - account/transfer
	'TransferTitle'           => 'Transferir Créditos de Doação',
	'TransferGreaterThanOne'  => 'Você só pode transferir 1 ou mais créditos.',
	'TransferEnterCharName'   => 'Você deve digitar o nome do personagem que vai receber os créditos.',
	'TransferNoCharExists'    => "O personagem '%s' não existe. Tenha certeza que você digitou o nome correto.",
	'TransferNoBalance'       => 'Você não tem saldo o suficiente para fazer uma transferência.',
	'TransferUnexpectedError' => 'Erro inesperado ocorreu.',
	'TransferSuccessful'      => 'Os créditos foram transferidos!',
	'TransferHeading'         => 'Transferir Créditos de Doação',
	'TransferSubHeading'      => 'Os créditos serão transferidos para um personagem no servidor %s.',
	'TransferInfo'            => 'Você possui %s crédito(s).',
	'TransferInfo2'           => 'Insira a quantidade que você quer transferir e o nome do personagem pertencente a conta que você quer enviar os créditos.',
	'TransferAmountLabel'     => 'Quantidade de Créditos',
	'TransferCharNameLabel'   => 'Nome do Personagem',
	'TransferAmountInfo'      => 'Esta é a quantidade de crédito que você deseja enviar.',
	'TransferCharNameInfo'    => 'Este é o nome do personagem que está recebendo os créditos.',
	'TransferConfirm'         => 'Tem certeza que quer transferir?',
	'TransferButton'          => 'Transferir',
	'TransferNoCredits'       => 'Você não possui créditos disponíveis na sua conta.',
	// - account/view
	// * account/view submenus
	'ModifyAccountLink'       => 'Modificar Conta',
	'AccountViewTitle'        => 'Ver Conta',
	'AccountViewTitle2'       => 'Vendo Conta (%s)',
	'AccountViewTitle3'       => 'Vendo Minha Conta',
	'AccountTempBanFailed'    => 'Falha ao banir temporariamente a conta.',
	'AccountPermBanFailed'    => 'Falha ao banir permanentemente a conta.',
	'AccountTempBanUnauth'    => 'Você não está autorizado a banir temporariamente essa conta.',
	'AccountPermBanUnauth'    => 'Você não está autorizado a banir permanentemente essa conta.',
	'AccountLiftTempBan'      => 'Conta foi desbanida.',
	'AccountLiftPermBan'      => 'Conta foi desbanida.',
	'AccountLiftBanUnauth'    => "Você não está autorizado a desbanir essa conta.",
	'AccountViewHeading'      => 'Vendo Conta',
	'AccountViewDonateLink'   => '(Doar!)',
	'AccountViewTempBanLabel' => 'Banir Temporariamente',
	'AccountViewPermBanLabel' => 'Banir Permanentemente',
	'AccountViewUnbanLabel'   => 'Remover Banimento',
	'AccountBanReasonLabel'   => 'Razão:',
	'AccountBanUntilLabel'    => 'Banido Até:',
	'AccountTempBanButton'    => 'Banir Conta',
	'AccountPermBanButton'    => 'Banir Conta Permanentemente',
	'AccountTempUnbanButton'  => 'Removeer Banimento Temporário',
	'AccountPermUnbanButton'  => 'Removeer Banimento Permanente',
	'AccountBanConfirm'       => 'Tem certeza?',
	'AccountBanLogSubHeading' => 'Log de Banimento para %s (mais novo para mais antigo)',
	'BanLogBanTypeLabel'      => 'Tipo do Banimento',
	'BanLogBanDateLabel'      => 'Data do Banimento',
	'BanLogBanReasonLabel'    => 'Razão do Banimento',
	'BanLogBannedByLabel'     => 'Banido Por',
	'BanLogBannedByCP'        => 'Painel de Controle',
	'BanTypeUnbanned'         => 'Desbanido',
	'BanTypePermBanned'       => 'Banido Permanentemente',
	'BanTypeTempBanned'       => 'Banido Temporariamente',
	'AccountViewCharSubHead'  => 'Personagens em %s',
	'AccountViewSlotLabel'    => 'Slot',
	'AccountViewCharLabel'    => 'Nome do Personagem',
	'AccountViewClassLabel'   => 'Classe',
	'AccountViewLvlLabel'     => 'Nível de Base',
	'AccountViewJlvlLabel'    => 'Nível de Job',
	'AccountViewZenyLabel'    => 'Zeny',
	'AccountViewGuildLabel'   => 'Clã',
	'AccountViewStatusLabel'  => 'Status',
	'AccountViewPrefsLabel'   => 'Preferências',
	'CharModifyPrefsLink'     => 'Modificar Preferências',
	'AccountViewNoChars'      => 'Essa conta não possui personagens em %s.',
	'AccountViewStorage'      => 'Storage de %s',
	'AccountViewStorageCount' => '%s tem %s item(s) no storage.',
	'AccountViewNoStorage'    => 'Não há itens no storage dessa conta.',
	'AccountViewNotFound'     => "Registros indicam que a conta que você está tentando ver não existe.",
	// - account/xferlog
	'XferLogTitle'            => 'Histórico de Transferência de Crédito',
	'XferLogHeading'          => 'Histórico de Transferência de Crédito',
	'XferLogReceivedSubHead'  => 'Transferências: Recebidas',
	'XferLogSentSubHead'      => 'Transferências: Enviadas',
	'XferLogCreditsLabel'     => 'Créditos',
	'XferLogFromLabel'        => 'Do E-mail',
	'XferLogDateLabel'        => 'Data da Transferência',
	'XferLogCharNameLabel'    => 'Para o Personagem',
	'XferLogNotReceived'      => 'Você não recebeu nenhuma transferência de crédito.',
	'XferLogNotSent'          => 'Você não fez nenhuma transferência de crédito.',
	
	// Module: character
	// - character/changeslot
	// - character/index
	// - character/mapstats
	// - character/online
	// - character/prefs
	// - character/resetlook
	'CantResetLookWhenOnline' => 'Não pode redefinir aparência enquanto %s estiver online.',
	'ResetLookSuccessful'     => "A aparência de %s foi redefinida!",
	'ResetLookFailed'         => "Falha ao redefinir a aparência de %s",
	// - character/resetpos
	'CantResetPosWhenOnline'  => 'Não pode redefinir posição enquanto %s estiver online.',
	'CantResetFromCurrentMap' => "Você não pode redefinir a posição de %s estando no mapa atual.",
	'ResetPositionSuccessful' => "A posição de %s foi redefinida!",
	'ResetPositionFailed'     => "Falha ao redefinir a posição de %s.",
	// - character/view
	// - character/divorce
	'DivorceTitle'            => 'Divórcio',
	'DivorceHeading'          => 'Divórcio',
	'DivorceNotMarried'       => '%s não é casado.',
	'DivorceInvalidPartner'   => 'ID de parceiro inválido.',
	'DivorceInvalidChild'     => 'ID de filho inválido.',
	'DivorceMustBeOffline'    => 'Ambos s% e seu/sua parceiro(a) deve estar off-line.',
	'DivorceMustBeOffline2'   => '%s, seu/sua parceiro(a) e seu filho deve estar off-line.',
	'DivorceText1'            => "Você tem certeza que quer se divorciar de %s seu/sua parceiro(a)?",
	'DivorceText2'            => 'Se %s tem um filho, o filho também vai ser órfão.',
	'DivorceText3'            => 'Anéis de casamento também serão excluídos.',
	'DivorceButton'           => 'Sim, fazê-lo por favor.',
	'DivorceSuccessful'       => '%s já se divorciou!',
	
	// Module: cplog
	// - cplog/index.php
	// - cplog/login.php
	// - cplog/paypal.php
	// - cplog/resetpass.php
	// - cplog/txnview.php
	
	// Module: donate
	// - donate/complete
	// - donate/history
	// - donate/index
	// - donate/trusted
	
	// Module: errors
	// - errors/missing_action
	'MissingActionTitle'      => 'Ação Inexistente',
	'MissingActionHeading'    => 'Ação Inexistente!',
	'MissingActionModLabel'   => 'Módulo:',
	'MissingActionActLabel'   => 'Ação:',
	'MissingActionReqLabel'   => 'URL requerida:',
	'MissingActionLocLabel'   => 'Localização do arquivo de sistema:',
	// - errors/missing_view
	'MissingViewTitle'        => 'Faltando Página', // Precisa de tradução exata, original: "Missing View"
	'MissingViewHeading'      => 'Faltando Página!', // Precisa de tradução exata, original: "Missing View!"
	'MissingViewModLabel'     => 'Módulo:',
	'MissingViewActLabel'     => 'Ação:',
	'MissingViewReqLabel'     => 'URL requerida:',
	'MissingViewLocLabel'     => 'Localização do arquivo de sistema:',
	
	// Module: guild
	// - guild/export
	// - guild/index
	// - guild/view
	
	// Module: history
	// - history/cplogin
	'HistoryCpLoginTitle'     => 'Logins no Painel de Controle',
	'HistoryCpLoginHeading'   => 'Logins no Painel de Controle',
	'HistoryLoginDateLabel'   => 'Data/Hora do Login',
	'HistoryIpAddrLabel'      => 'Endereço de IP',
	'HistoryErrorCodeLabel'   => 'Código de Erro',
	'HistoryNoCpLogins'       => 'Não foram feitos logins no Painel de Controle ainda.',
	// -history/emailchange
	'HistoryEmailTitle'       => 'Mudanças de E-Mail',
	'HistoryEmailHeading'     => 'Mudanças de E-Mail',
	'HistoryEmailRequestDate' => 'Data/Hora da requisição',
	'HistoryEmailRequestIp'   => 'IP que fez a requisição',
	'HistoryEmailOldAddress'  => 'E-Mail Antigo',
	'HistoryEmailNewAddress'  => 'E-Mail Novo',
	'HistoryEmailChangeDate'  => 'Data da Mudança',
	'HistoryEmailChangeIp'    => 'IP que fez a mudança',
	'HistoryNoEmailChanges'   => 'Nenhuma tentativa de mudança de email encontrada.',
	// - history/gamelogin
	'HistoryGameLoginTitle'   => 'Logins No Jogo',
	'HistoryGameLoginHeading' => 'Logins No Jogo',
	'HistoryRepsCodeLabel'    => 'Resposta',
	'HistoryLogMessageLabel'  => 'Mensagem de Log',
	'HistoryNoGameLogins'     => 'Não foram feitos logins no jogo ainda.',
	// - history/index
	'HistoryIndexTitle'       => 'Histórico da Minha Conta',
	'HistoryIndexHeading'     => 'Histórico da Minha Conta',
	'HistoryIndexInfo'        => 'Aqui você pode ver a atividade passada da sua conta.',
	'HistoryIndexInfo2'       => 'Por favor, selecione a página desejada no menu.',
	// - history/passchange
	'HistoryPassChangeTitle'      => 'Alterações de senha',
	'HistoryPassChangeHeading'    => 'Alterações de senha',
	'HistoryPassChangeChangeDate' => 'Alterar data',
	'HistoryPassChangeChangeIp'   => 'Mudar IP',
	'HistoryNoPassChanges'        => 'Nenhuma alteração de senha encontrada.',
	// -history/passreset
	'HistoryPassResetTitle'       => 'Redefinições de senha',
	'HistoryPassResetHeading'     => 'Redefinições de senha',
	'HistoryPassResetRequestDate' => 'Solicitação de Data/Hora',
	'HistoryPassResetRequestIp'   => 'Solicitar IP',
	'HistoryPassResetResetDate'   => 'Redefinir a data',
	'HistoryPassResetResetIp'     => 'Redefinir o IP',
	'HistoryNoPassResets'         => 'Nenhuma senha Redefinida encontradas.',
	
	// Module: ipban
	// - ipban/add
	'IpbanAddTitle'           => 'Banir IP',
	'IpbanEnterIpPattern'     => 'Por favor, digite um IP ou um padrão de IP.',
	'IpbanInvalidPattern'     => 'IP ou padrão inválido.',
	'IpbanWhitelistedPattern' => 'Esse padrão é lista branca e não pode ser bloqueado.',
	'IpbanEnterReason'        => 'Digite a razão do banimento para o IP.',
	'IpbanSelectUnbanDate'    => 'Data de desbanimento necessária.',
	'IpbanFutureDate'         => 'Data de desbanimento deve ser uma data futura.',
	'IpbanAlreadyBanned'      => 'O IP (%s) já consta como banido.',
	'IpbanPatternBanned'      => "O IP ou o padrão '%s' foi banido.",
	'IpbanAddFailed'          => 'Falha ao banir IP.',
	'IpbanAddHeading'         => 'Banir IP',
	'IpbanIpAddressLabel'     => 'Endereço de IP',
	'IpbanReasonLabel'        => 'Razão',
	'IpbanUnbanDateLabel'     => 'Data de desbanimento',
	'IpbanIpAddressInfo'      => 'Você pode especificar um padrão de IP como 218.139.*.*',
	'IpbanAddButton'          => 'Banir IP',
	// - ipban/edit
	'IpbanEditTitle'          => 'Modificar Banimento de IP',
	'IpbanEnterEditReason'    => 'Por favor, digite uma razão para a modificação de Banimento de IP .',
	'IpbanEditFailed'         => 'Falha ao modificar Banimento de IP.',
	'IpbanEditHeading'        => 'Modificar Banimento de IP',
	'IpbanEditReasonLabel'    => 'Editar a razão',
	'IpbanEditButton'         => 'Modificar Banimento de IP',
	// - ipban/index
	'Title'          => 'Lista de IP Banidos',
	'Heading'        => 'Lista de IP Banidos',
	'IpbanBannedIpLabel'      => 'IP Banido',
	'IpbanBanDateLabel'       => 'Data do Banimento',
	'IpbanBanReasonLabel'     => 'Razão',
	'IpbanBanExpireLabel'     => 'Data de expiração do Banimento',
	'IpbanModifyLink'         => 'Modificar',
	'IpbanRemoveLink'         => 'Remover',
	'IpbanUnbanButton'        => 'Desbanir Selecionados',
	'NoBans'         => 'Atualmente não há IPs banidos.',
	// - ipban/remove
	'IpbanRemoveTitle'        => 'Remover Banimento de IP',
	'IpbanEnterRemoveReason'  => 'Por favor, digite uma razão para a remoção do Banimento de IP.',
	'IpbanNotBanned'          => 'Nenhum IP correspondente (%s) atualmente é proibido.',
	'IpbanPatternUnbanned'    => "O endereço IP/padrão '%s' foi banido.",
	'IpbanRemoveFailed'       => 'Falha ao remover a Banimento de IP.',
	'IpbanRemoveHeading'      => 'Remover Banimento de IP',
	'IpbanRemoveReasonLabel'  => 'Razão do desbanimento',
	'IpbanRemoveButton'       => 'Remover Banimento de IP',
	// - ipban/unban
	'IpbanNothingToUnban'     => 'Nada para desbanir.',
	'IpbanEnterUnbanReason'   => 'Por favor, digite uma razão para desbanir o(s) IP(s).',
	'IpbanUnbanned'           => 'IP(s) selecionado(s) desbanido(s)!',
	'IpbanUnbanFailed'        => 'Falha ao desbanir %d IP(s) especificado(s)!',
	
	// Module: item
	// - item/add
	// - item/copy
	// - item/edit
	// - item/index
	// - item/view
	
	// Module: itemshop
	// - itemshop/add
	// - itemshop/delete
	// - itemshop/edit
	// - itemshop/imagedel
	
	// Module: logdata
	// - logdata/chat
	// - logdata/command
	'CommandLogTitle'         => 'Lista de comandos',
	'CommandLogHeading'       => 'Log de comandos',
	'CommandLogNotFound'      => 'Nenhum comando registrado',
	'CommandLogDateLabel'     => 'Comando Data/Hora',
	'CommandLogAccountIdLabel'=> 'ID da conta',
	'CommandLogCharIdLabel'   => 'ID do char',
	'CommandLogCharNameLabel' => 'Personagem',
	'CommandLogCommandLabel'  => 'Comando',
	'CommandLogMapLabel'      => 'Mapa',
	// - logdata/index
	// - logdata/login
	// - logdata/pick
	'PickLogTitle'            => 'Lista de log de itens',
	'PickLogHeading'          => 'Log de itens',
	'PickLogNotFound'         => 'Nenhum item registrado',
	'PickLogDateLabel'        => 'Data/Hora',
	'PickLogCharacterLabel'   => 'Personagem',
	'PickLogTypeLabel'        => 'Tipo',
	'PickLogItemLabel'        => 'Nome do item',
	'PickLogAmountLabel'      => 'Quantidade',
	'PickLogRefineLabel'      => 'Refino',
	'PickLogCard0Label'       => 'Carta 1',
	'PickLogCard1Label'       => 'Carta 2',
	'PickLogCard2Label'       => 'Carta 3',
	'PickLogCard3Label'       => 'Carta 4',
	'PickLogMapLabel'         => 'Mapa',
	// - logdata/zeny
	'ZenyLogTitle'            => 'Lista de log de zeny',
	'ZenyLogHeading'          => 'Log de zeny',
	'ZenyLogNotFound'         => 'Não há registro de logs de zeny',
	'ZenyLogDateLabel'        => 'Data/Hora',
	'ZenyLogCharacterLabel'   => 'Personagem',
	'ZenyLogSourceLabel'      => 'ID do Personagem',
	'ZenyLogTypeLabel'        => 'Tipo',
	'ZenyLogAmountLabel'      => 'Valor',
	'ZenyLogMapLabel'         => 'Mapa',
	
	// Module: mail
	// - mail/index
	'MailerTitle'             => 'Formulário de Email',
	'MailerHeading'           => 'Formulário de Email',
	'MailerEnterToAddress'    => 'Digite o destinatário.',
	'MailerEnterSubject'      => 'Digite o assunto.',
	'MailerEnterBodyText'     => 'Digite o corpo de texto.',
	'MailerEmailHasBeenSent'  => 'Seu e-mail foi enviado com sucesso para %s.',
	'MailerFailedToSend'      => 'O sistema de e-mail falhou ao enviar a mensagem. Isso pode ser configuração.',
	'MailerInfo'              => 'Você pode usar o formulário abaixo para enviar e-mails usando o Painel de Controle.',
	'MailerFromLabel'         => 'De',
	'MailerToLabel'           => 'Para',
	'MailerSubjectLabel'      => 'Assunto',
	'MailerBodyLabel'         => 'Corpo da Mensagem',
	'MailerBodyInfo'          => 'Corpo da mensagem está na sintaxe de Markdown.',
	
	// Module: main
	// - main/index
	'MainPageHeading'         => 'Painel de controle',
	'MainPageInfo'            => "Seja bem vindo ao nosso painel. Por favor, escolha uma das opções do menu ao lado.",
	'MainPageInfo2'           => "Você gostaria de mudar esta página? Então, aqui você pode mudar:",
	'MainPageStep1'           => 'Abra o arquivo "%s" no seu editor de texto.',
	'MainPageStep2'           => 'E edite o arquivo como você quiser!',
	'MainPageThanks'          => 'Obrigado por usar o Flux!',
	// - main/pagenotfound
	'PageNotFoundTitle'       => '404 Página Não Encontrada',
	'PageNotFoundHeading'     => 'Página Não Encontrada',
	'PageNotFoundInfo'        => 'A página que você solicitou não foi encontrada. Por favor, verifique se o endereço está correto e tente novamente.',
	// - main/preprocess
	'DisallowedDuringWoE'     => 'A página que você solicitou não está disponível durante a GdE.',
	
	// Module: monster
	// - monster/index
	// - monster/view
	
	// Module: purchase
	// - purchase/add
	// - purchase/cart
	// - purchase/checkout
	// - purchase/clear
	// - purchase/index
	// - purchase/pending
	// - purchase/remove
	
	// Module: ranking
	// - ranking/character
	// - ranking/guild
	// - ranking/zeny
	
	// Module: server
	// - server/info
	'ServerInfoTitle'         => 'Informação do Servidor',
	'ServerInfoHeading'       => 'Informação do Servidor',
	'ServerInfoText'          => "Aqui você encontra várias informações sobre o servidor.",
	'ServerInfoSubHeading'    => 'Informação para %s',
	'ServerInfoSubHeading2'   => 'Informação de Classe para %s',
	'ServerInfoAccountLabel'  => 'Contas',
	'ServerInfoCharLabel'     => 'Personagens',
	'ServerInfoGuildLabel'    => 'Clãs',
	'ServerInfoPartyLabel'    => 'Grupos',
	'ServerInfoZenyLabel'     => 'Zeny',
	// - server/status
	'ServerStatusTitle'       => 'Status do Servidor',
	'ServerStatusHeading'     => 'Status do Servidor',
	'ServerStatusInfo'        => "Entendendo o status de Online e Offline de cada servidor pode lhe ajudar a entender como relatar o seu problema. Por exemplo, se o login server estiver offline, isso quer dizer que não é possível fazer o login no jogo. O character server e o map server são necessários para você entrar na escolha de seu personagem e no mapa do jogo depois que você faz o login.",
	'ServerStatusServerLabel' => 'Servidor',
	'ServerStatusLoginLabel'  => 'Login Server',
	'ServerStatusCharLabel'   => 'Character Server',
	'ServerStatusMapLabel'    => 'Map Server',
	'ServerStatusOnlineLabel' => 'Jogadores Online',
	'ServerStatusATMerchantsLabel' => 'Autotrade de Comerciantes',
	'ServerStatusPopulationLabel' => 'População',
	
	// Module: service
	// - service/tos
	'TermsTitle'              => 'Termos de Serviço',
	'TermsHeading'            => 'Termos de Serviço',
	'TermsInfo'               => 'Por favor, leia tudo antes de criar a sua conta!',
	'TermsInfo2'              => "PARA O ADMINISTRADOR DO PAINEL DE CONTROLE: Você pode adicionar os Termos de Serviço diretamente neste arquivo. A localização do arquivo é: %s",
	
	// Module: unauthorized
	// - unauthorized/index
	'UnauthorizedTitle'       => 'Não Autorizado',
	'UnauthorizedHeading'     => 'Não Autorizado',
	'UnauthorizedInfo'        => 'Você não está autorizado a ver essa página. <a href="%s">Redirecionando…</a>',
	
	// Module: woe
	// - woe/index
	'WoeTitle'                => 'Horários da Guerra do Emperium',
	'WoeHeading'              => 'Horários da Guerra do Emperium',
	'WoeInfo'                 => "Aqui estão os horários da GdE para o %s. Esses horários estão sujeitos a alteração sem aviso prévio, portanto mantenha-se informado.",
	'WoeServerTimeInfo'       => 'A hora atual do servidor é:',
	'WoeServerLabel'          => 'Servidores',
	'WoeTimesLabel'           => 'Horários da Guerra do Emperium',
	'WoeNotScheduledInfo'     => 'Não há nenhuma Guerra do Emperium agendada.',

	// Security
	'SecuritySessionInvalid'  => 'Desculpe, a sessão expirou, tente novamente.',
	'SecurityNeedSession'     => 'Desculpe, nenhuma sessão foi encontrada (tentativa de hack?)',
	'SecurityNeedToken'       => 'Desculpe, nenhum sinal encontrado para identificar esta forma (tentativa de hack?)',


	// Module: tasks
	'TaskListHeader'          => 'Lista de tarefas',
	'TaskListHeaderCompleted' => 'Tarefas concluídas',
	'TaskListAdd'             => 'Adicionar nova tarefa',
	'TaskListAdded'           => 'Tarefa adicionada!',
	'TaskListSub'             => 'Lista de tarefas dos GM\'s!',
	'TLNotAssigned'           => 'Não atribuído',
	'TLNoTasks'               => 'Não há nenhuma tarefa.!',
	'TLNoMine'                => 'Você não tem tarefas atribuídas a você.',
	'TLNoCompleted'           => 'Não há tarefas concluídas ainda.',
	'TLHeaderTasks'           => 'Tarefas',
	'TLHeaderOwner'           => 'Atribuido à',   
	'TLHeaderPriority'        => 'Prioridade', 
	'TLHeaderStatus'          => 'Estado',  
	'TLHeaderCreated'         => 'Criado',
	'TLHeaderModified'        => 'Modificado',
	'TLHeaderResources'       => 'Informações',
	'TLHeaderBody'            => 'Caixa de Mensagem',
	'TLPriority1'             => 'Urgente',
	'TLPriority2'             => 'Alta',
	'TLPriority3'             => 'Baixa',
	'TLStatus0'               => 'Nova Tarefa',
	'TLStatus1'               => 'Em andamento',
	'TLStatus2'               => 'Aguardando Implementação',
	'TLStatus5'               => 'completo',
	'TLHuh'                   => 'Você não deve ser capaz de ver isso!',
	
	// Module: contactform
	'CFTitleSubmit'			  => 'Contate-nos',

	// Module: logdata/harmony
	'HARTitle'				  => 'Harmony Logs',
	'HARSearchLink'			  => 'Pesquisar...',
	'HARDateBetween'		  => 'Data entre',
	'HARIPAddress'			  => 'Endereço IP',
	'HARCharacter'			  => 'Personagem',
	'HARAccountID'			  => 'ID da conta',
	'HARNoData'				  => 'Nenhum dado foi encontrado.',
	'HARGoback'				  => 'Voltar',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
	'HARTitle'				  => 'Harmony Logs',
);
?>

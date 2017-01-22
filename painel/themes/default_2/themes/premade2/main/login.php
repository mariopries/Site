<?php if (!defined('FLUX_ROOT')) exit; ?>
<div id="login">

<?php if (!$session->isLoggedIn()): ?>      
		<form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post">
		<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
        <input type="text" name="username" id="logintxt" onkeypress="if(event.keyCode==13) {javascript:form.submit();}" placeholder="Username"  />
        &ensp;&ensp;&ensp;
        <input type="password" name="password" id="logintxt" onkeypress="if(event.keyCode==13) {javascript:form.submit();}" placeholder="Password"/>
        </div>
        
        
		<div style="margin: -30px 10px 0 0; text-align: right;">       
        <input type="submit" id="logbtn" value="" />
        </div>
			<!----
            <div>
            <a href="<?php echo $this->url('account','create')?>">Register</a> |
			<a href="<?php echo $this->url('account','resetpass')?>">Reset Password</a>
            </div>
			---->
	
			
        </form>
	<?php else:?>
		
				<div style="text-align: right; margin-right: -60px; margin-top: 8px;">
				<font color="#FFFFFF">Welcome,</font> <font color="#00CCFF"><?php echo htmlspecialchars($session->account->userid) ?></a></font> | 
				<a href="<?php echo $this->url('account','view')?>" style=""><b>ACCOUNT MANAGEMENT</b></a> |
				<a href="<?php echo $this->url('account','logout')?>" style=""><b>LOGOUT</b></a>
			</div>
            </div>
	<?php endif?>






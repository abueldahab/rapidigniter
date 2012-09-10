<?php

$note_login = '<h4 class="alert_info">Key in your credentials and click "Login"</h4>';
$note_reg = '<h4 class="alert_info">Key in your details and click "Register".</h4>';

if(is_array($this->session->flashdata('alert'))){
	$alert = $this->session->flashdata('alert');
	if($alert['context'] == '/login/do_login'){
		$note_login = '<h4 class="alert_error">'.$alert['message'].'</h4>';
	}
	else if($alert['context'] == '/login/do_register'){
		$note_reg = '<h4 class="alert_error">'.$alert['message'].'</h4>';
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Login Box HTML Code - www.PSDGraphics.com</title>
		<link href="/assets/css/login-box.css" rel="stylesheet" type="text/css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.23/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="/assets/css/validationEngine.jquery.css" type="text/css"/>
		<script src="/assets/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
		<script src="/assets/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
		<script src="/assets/js/jquery.flip.min.js"></script>
		<script>
			$(document).ready(function()
			{
				$('#email').focus();
				<?php if($alert['context'] == '/login/do_register' && $alert['message']) { echo 'flipthis();'; } ?>
			});
			var flipped;
			function flipthis()
			{
				$("#login-box").flip(
				{
					direction:'rl',
					color:'white',
					speed:300,
					content: '<H2>Rapidigniter - Register</H2>'+
								'<?php echo $note_reg; ?>'+
								'<?php echo form_open('/login/do_register',array('id'=>'reg_form','class'=>'form')); ?>'+
								'<div id="login-box-name" style="margin-top:20px;">Email:</div><div id="login-box-field" style="margin-top:20px;"><input id="email2" name="email" class="form-login validate[required,custom[email]] text-input" title="Email" value="" size="30" maxlength="40" /></div>'+
								'<div id="login-box-name">Password:</div><div id="login-box-field"><input name="new_password" id="new_password" type="password" class="form-login validate[required] text-input" title="Password" value="" size="30" maxlength="50" /></div>'+
								'<div id="login-box-name">Confirm Password:</div><div id="login-box-field"><input name="confirm_password" id="password" type="password" class="form-login validate[required,equals[new_password]] text-input" title="Password" value="" size="30" maxlength="50" /></div>'+
								'<br />'+
								'<span class="login-box-options"> </span>'+
								'<br />'+
								'<a href="javascript:rflipthis();"><img src="/assets/images/login-btn.png" width="103" height="42" style="margin-left:118px;" /></a>'+
								'<a href=\'javascript:form_submit("reg_form");\' id="register_btn"><img src="/assets/images/register-btn.png" width="103" height="42" style="margin-left:5px;" /></a>'+
								'</form>',
					onEnd: function()
					{
						flipped = true;
						$('#email2').focus();
					}
				});
			}
			function rflipthis()
			{
				if(flipped)
				{
					$("#login-box").revertFlip();
					setTimeout(function()
					{
						$('#email').focus();
					},650);
				}
			}
			function form_submit(contx)
			{
				var validated;
				var form;
				if (contx == 'login_form')
				{
					form = $("#login_form");
				}
				else
				{
					form = $("#reg_form");
				}
				form.validationEngine('attach');
				validated = form.validationEngine('validate');
				if(validated)
				{
					form.submit();
				}
			}
			
			$("#email").keypress(function(event) 
			{
				console.log(event.which);
				if (event.which == 13) 
				{
					console.log(enter);
				}
			});

		</script>
	</head>
	<body>
		
		<div id="login-box-wrapper" style="padding: 100px;">
			<div id="login-box">
				<H2>Rapidigniter - Login</H2>
				<?php echo $note_login; ?>
				<br />
				<?php  echo form_open('/login/do_login',array('id'=>'login_form','class'=>'form'));  ?>
				<div id="login-box-name" style="margin-top:20px;">Email:</div><div id="login-box-field" style="margin-top:20px;"><input id="email" name="email" class="form-login  validate[required,custom[email]] text-input" title="Email" value="" size="30" maxlength="40" /></div>
				<div id="login-box-name">Password:</div><div id="login-box-field"><input name="password" id="password" type="password" class="form-login validate[required] text-input" title="Password" value="" size="30" maxlength="50" /></div>
				<br />
				<span class="login-box-options"><a href="https://github.com/zulfajuniadi/rapidigniter.git">Git Source</a></span>
				<br />
				<br />
				<a href='javascript:form_submit("login_form");'><img src="/assets/images/login-btn.png" width="103" height="42" style="margin-left:118px;" /></a>
				<a href="javascript:flipthis();" id="register_btn"><img src="/assets/images/register-btn.png" width="103" height="42" style="margin-left:5px;" /></a>
				</form>
				
			</div>
		</div>
	</body>
</html>

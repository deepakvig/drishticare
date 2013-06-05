<?php
echo '
<form method=POST action=Register.php name=RegisterForm>
	<fieldset>
		<legend id=FormText style="color:#85a157; font-weight:normal;font-size:130%;">Details</legend>
		<table>
			<tr>	
				<td>
					<div id="RegFormText">Email ID</div>
				</td>
				<td>
					<input type=text name=EmailID id=RegInputBox>
					<input type=hidden name=RegAgent value=NewDRC />

				</td>
				<td>
					<div id="RegFormText">DRC Name</div>
				</td>
				<td>
					<input type=text name=DRCName id=RegInputBox />
				</td>
			</tr>					
		</table>
		<table>
			<tr>
				<td>
					<br><a href=javascript:SubmitForm("NewDRC") id=LoginButton>Register</a>
				</td>
				<td>
					<br><a href=javascript:ResetForm("NewDRC") id=LoginButton>Reset</a>
				</td>
			</tr>
		</table>
	</fieldset>
</form>'
?>

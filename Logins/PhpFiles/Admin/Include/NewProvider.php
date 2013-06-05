<?php
echo '<form method=POST action=Register.php name=RegisterForm>
        <fieldset >
	        <legend id=FormText style="color:#85a157; font-weight:normal;font-size:130%;">Details</legend>
		<table>
					<tr>	
						<td>
							<div id="RegFormText">UserName</div>
						</td>
						<td>
							<input type=text name=UserName id="UserName" onKeyUp=CheckUserName("Provider"); />
							<input type=hidden name=RegAgent value=NewProvider />
						</td>
						<td>
							<div id="RegFormText"><div id=DispResult></div></div>
						</td>
						<td>
						</td>

					</tr>
					<tr>	
						<td>
							<div id="RegFormText">Password</div>
						</td>
						<td>
							<input type=password name=Password id=RegInputBox />
						</td>
						<td>
							<div id="RegFormText">Provider Name</div>
						</td>
						<td>
							<input type=text name=ProviderName id=RegInputBox />
						</td>
					</tr>
					<tr>	
						<td>
							<div id="RegFormText">Organization</div>
						</td>
						<td>
							<input type=text name=Organization id=RegInputBox />
						</td>
						<td>
							<div id="RegFormText">Email ID</div>
						</td>
						<td>
							<input type=text name=EmailID id=RegInputBox />
						</td>
					</tr>		
				</table>
				<table>
					<tr>
							<td >
                                                                <br><a href=javascript:SubmitForm("NewProvider") id=LoginButton>Register</a>
                                                        </td>
                                                        <td>
                                                                <br><a href=javascript:ResetForm("NewProvider") id=LoginButton>Reset</a>
                                                        </td>
					</tr>
				</table>
			</fieldset>
		</form>'
?>

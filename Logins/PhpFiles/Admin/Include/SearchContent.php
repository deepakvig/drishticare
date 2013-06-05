<?php
echo '<form method=POST action="" name=RegisterForm>
        <fieldset >
	        <legend id=FormText style="color:#85a157; font-weight:normal;font-size:130%;">Search Query</legend>
		<table>
					<tr>	
						<td>
							<div id="RegFormText">Query</div>
						</td>
						<td>
							<input type=text name=SearchQuery id="UserName"/>
						</td>

					</tr>
					<tr>
							<td >
                                                                <br><a href=javascript:SubmitForm("SearchAdmin") id=LoginButton>Search</a>
                                                        </td>
					</tr>
				</table>
			</fieldset>
		</form>'
?>

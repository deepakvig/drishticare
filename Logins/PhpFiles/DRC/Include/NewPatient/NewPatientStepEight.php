<?php
echo '<form name=RegisterForm>

<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
				</tr>
				<tr id=CampTableFirst  class=Special>	
						<td style="border-right:0px;border-left:0px;">	
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
<td style="border-right:0px;border-left:0px;">
							
						</td>
<td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>
					<tr >	
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Investigations</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Value (mg%)</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Low Limit</div>
						</td>
						<td style="border-right:0px;border-left:0px;">		
							<div id="RegFormText">High Limit</div>
						</td>
					</tr>
					<tr>
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=HB id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">HB</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=HBValue id=RegInputBox disabled >
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>	
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=BloodSugar id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Blood Sugar</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=BloodSugarValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=BloodUrea id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Blood Urea</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=BloodUreaValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>	
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=SerumCreatinine id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Serum Creatinine</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=SerumCreatinineValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>	
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=UrineAlbumin id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Urine Albumin</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=UrineAlbuminValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>	
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=HbAIC id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">HbAIC</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=HbAICValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=Cholestrol id=RegInputBox disabled onclick="HandleBldInvstgations()">
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">S Cholestrol</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=CholestrolValue id=RegInputBox disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
					<tr>
						<td style="border-right:0px;border-left:0px;">
							<input type=checkbox name=BldIngNone id=RegInputBox checked onclick="HandleBldInvstgationsNone()"> 
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">None</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>		
					</tr>
					<tr>	
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
	
							<br/><div id="RegFormText">Comments/Findings</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<br/><input type=text name=BldInvestigationsComments id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>		
					</tr>
		<tr id=CampTableFirst  class=Special>	
						<td style="border-right:0px;border-left:0px;">	
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td><td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>

				</table>
				'
?>

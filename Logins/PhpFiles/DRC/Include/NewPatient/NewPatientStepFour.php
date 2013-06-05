<?php
echo '
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
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
				</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<br/><div id="RegFormText">Control Measures</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<br/><div id="RegFormText">Duration</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<br/><div id="RegFormText">Regular/Irregular</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<br/><div id="RegFormText">Remarks</div>
						</td>
								

					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<table style="border:0px;">
								<tr style="border:0px;">
<td style="border:0px;"><input type=checkbox name=DietControl id=RegInputBox disabled onclick="HandleMedicalTrmnt()"></td>
					<td style="border:0px;"><div  id="RegFormText">Diet Control</div></td>
								</tr>
							</table>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=DietControlDuration id=RegInputBox size=18 disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select id=RegInputBox name=DietControlPeriod>
								<option>Regular</option>
								<option>Irregular</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=DietControlRemarks id=RegInputBox size=18 disabled>
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<table style="border:0px;">
								<tr style="border:0px;">
									<td style="border:0px;"><input type=checkbox name=Insulin id=RegInputBox disabled onclick="HandleMedicalTrmnt()"></td>
									<td style="border:0px;"><div id="RegFormText">Insulin</div></td>
								</tr>
							</table>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=InsulinDuration id=RegInputBox size=18 disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select id=RegInputBox name=InsulinPeriod>
								<option>Regular</option>
								<option>Irregular</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=InsulinRemarks id=RegInputBox size=18 disabled>
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<table style="border:0px;">
								<tr style="border:0px;">
									<td style="border:0px;"><input type=checkbox name=OHA id=RegInputBox disabled onclick="HandleMedicalTrmnt()"></td>
									<td style="border:0px;"><div id="RegFormText">OHA</div></td>
								</tr>
							</table>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=OHADuration id=RegInputBox size=18 disabled>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select id=RegInputBox name=OHAPeriod>
								<option>Regular</option>
								<option>Irregular</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=OHARemarks id=RegInputBox size=18 disabled>
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<table style="border:0px;">
								<tr style="border:0px;">
									<td style="border:0px;"><input type=checkbox name=AltDrugs id=RegInputBox disabled onclick="HandleMedicalTrmnt()"></td>
									<td style="border:0px;"><div id="RegFormText">Alternative Drugs</div></td>
								</tr>
							</table>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=AltDrugsDuration id=RegInputBox size=18 disabled >
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select id=RegInputBox name=AltDrugsPeriod>
								<option>Regular</option>
								<option>Irregular</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=AltDrugsRemarks id=RegInputBox size=18 disabled>
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<table style="border:0px;">
								<tr style="border:0px;">									
<td style="border:0px;"><input type=checkbox name=MedicalTrmntNone id=RegInputBox checked onclick="HandleMedicalTrmntNone()"></td>
									<td style="border:0px;"><div id="RegFormText">None</div></td>
								</tr>
							</table>
							
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<br/><div id="RegFormText">Comments</div><br/>	
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=MedicalTrmntComments id=RegInputBox size=18 /><br/>
						</td>
						<td style="border-right:0px;border-left:0px;">
						<br/>
						</td>
						<td style="border-right:0px;border-left:0px;">
						<br/>
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
							
						</td>
				</tr>
				</table>';
?>

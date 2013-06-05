<?php
echo '
<form name=RegisterForm action=/DCare/Logins/DRC/Register.php method=POST enctype="multipart/form-data">
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
				</tr>


					<tr id=CampTableFirst class="selected">	
						
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Patient ID</div>
						</td>
						<td colspan="3" style="border-right:0px;border-left:0px;">
							<input type=text name=PatientID id=RegInputBox>
						</td>
</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Gender</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PatientGender id=RegInputBox>
								<option value=Male>Male</option>
								<option value=Female>Female</option>
							</select>
						</td>

						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Age</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PatientAge id=RegInputBox>
						</td>
</tr>
<!--					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Age</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PatientAge id=RegInputBox>
						</td>
					</tr>	
				
-->				
				
				<tr id=CampTableFirst  class=Special>	
						<td style="border-right:0px;border-left:0px;">	
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>
				
							</table>
						</td>
				</tr>
				</table>';
?>

<?php
echo '
<form method=POST action=/DCare/Logins/DRC/Register.php name=RegisterForm>
<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>
				<tr id=CampTableFirst class="alternate">	
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
							<div id="RegFormText">Email ID</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=EmailID id=RegInputBox>
							<input type=hidden name=RegAgent value=NewPhotoGrapher id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Name</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PhotoGrapherName id=RegInputBox>
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Gender</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PhotoGrapherGender id=RegInputBox>
								<option value=Male>Male</option>
								<option value=Female>Female</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Clinic Name</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=ClinicName id=RegInputBox>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Clinic Address I</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=ClinicAddress1 id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Clinic Address II</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=ClinicAddress2 id=RegInputBox>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">City</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PhotoGrapherCity Name id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Pin Code</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PinCode id=RegInputBox>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">State</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PhotoGrapherState id=RegInputBox>
								<option value=AP>Andhra Pradesh</option>
								<option value=AR>Arunachal Pradesh</option>
								<option value=AS>Assam</option>
								<option value=BR>Bihar</option>
								<option value=CG>Chattisgarh</option>
								<option value=GA>Goa</option>
								<option value=GJ>Gujrat</option>
								<option value=HR>Haryana</option>
								<option value=HP>Himachal Pradesh</option>
								<option value=JK>Jammu & Kashmir</option>
								<option value=JH>Jharkhand</option>
								<option value=KA>Karnataka</option>
								<option value=KL>Kerala</option>
								<option value=MP>Madhya Pradesh</option>
								<option value=MH>Maharashtra</option>
								<option value=MN>Manipur</option>
								<option value=ML>Meghalaya</option>
								<option value=MZ>Mizoram</option>
								<option value=NL>Nagaland</option>
								<option value=OR>Orissa</option>
								<option value=PB>Punjab</option>
								<option value=RJ>Rajasthan</option>
								<option value=SK>Sikkim</option>
								<option value=TN>Tamil Nadu</option>
								<option value=TR>Tripura</option>
								<option value=UK>Uttarakhand</option>
								<option value=UP>Uttar Pradesh</option>
								<option value=WB>West Bengal</option>
							</select>
						</td>

						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Country</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PhotoGrapherCountry id=RegInputBox>
								<option value=AP>India</option>
							</select>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Clinic Phone</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=ClinicPhone id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Mobile Number</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=MobileNumber id=RegInputBox>
						</td>
					</tr>
				<tr id=CampTableFirst class="selected">
					<td style="border-right:0px;border-left:0px;">
						<br/><a href=javascript:SubmitForm("NewPhotoGrapher") id=LoginButton><font color=white size=2>Register</font></a>
						<br/><br/>
					</td>
					<td style="border-right:0px;border-left:0px;">
						<br/><a href=javascript:ResetForm("NewPhotoGrapher") id=LoginButton><font color=white size=2>Reset</font></a>
						<br/><br/>
					</td>
					<td style="border:0px;">
					</td>
					<td style="border:0px;">
					</td>
				</tr>
				<tr id=CampTableFirst class="alternate">
					<td style="border-right:0px;border-left:0px;">
				
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
				</tr>
				</tr>	


				</table>
			</td>
</tr>
</table>';
?>

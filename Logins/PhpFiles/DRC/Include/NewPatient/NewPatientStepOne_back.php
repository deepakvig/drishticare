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
						<tr id=CampTableFirst class=Special>	
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
							<div id="RegFormText">Maritial Status</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PatientMaritialStatus id=RegInputBox>
								<option value="Married">Married</option>
								<option value="Not Married">Not Married</option>
							</select>
						</td>

					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;" rowspan=2>
							<div id="RegFormText">Address </div>
						</td>
						<td style="border-right:0px;border-left:0px;" rowspan=2>
							<textarea id=RegInputBox cols=18 name=PatientAddress></textarea>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">City</div>
						</td>

						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PatientCity id=RegInputBox>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
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
							<select name=PatientState id=RegInputBox>
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
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Country</div><br/>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=PatientCountry id=RegInputBox>
								<option value=India>India</option>
							</select><br/>
						</td>

					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Phone Number</div><br/>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PatientPhoneNumber id=RegInputBox><br/>
						</td>
					</tr>
					<tr id=CampTableFirst class=Special>	
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
					</td>
				</tr>	
				</table>
				</fieldset>'
?>

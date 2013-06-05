<?php
echo '
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
			 <tr id=CampTableFirst class="selected">

                                                <td style="border-right:0px;border-left:0px;">
                                    <!--            <br/> -->  <div id="RegFormText">First Name</div>
                                                </td>
                                                <td style="border-right:0px;border-left:0px;">
                                    <!--            <br/>-->   '.$PatientFirstName.'
                                                </td>
</tr>
                                        <tr id=CampTableFirst class="selected">
                                                <td style="border-right:0px;border-left:0px;">
                                        <!--        <br/>-->   <div id="RegFormText">Last Name</div>
                                                </td>
                                                <td style="border-right:0px;border-left:0px;">
                                        <!--        <br/>-->   '.$PatientLastName.'
                                                </td>
                                        </tr>
	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Maritial Status</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientMaritialStatus.'
						</td>

					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;" rowspan=2>
							<div id="RegFormText">Address </div>
						</td>
						<td style="border-right:0px;border-left:0px;" rowspan=2>
							'.$PatientAddress.'
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">City</div>
						</td>

						<td style="border-right:0px;border-left:0px;">
							'.$PatientCity.'
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Pin Code</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PinCode.'
						</td>

					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">State</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientState.'
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Country</div><!--<br/>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientCountry.'<!--<br/>-->
						</td>

					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Phone Number</div><!--<br/>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientPhoneNumber.'<!--<br/>-->
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

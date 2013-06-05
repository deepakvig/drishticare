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
						<td style="border-right:0px;border-left:0px;">
							'.$PatientID.'
						</td>
</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Gender</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientGender.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Age</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$PatientAge.'
						</td>
					</tr>

					<tr id=CampTableFirst class="selected">	
					</tr>	
				
				
				
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

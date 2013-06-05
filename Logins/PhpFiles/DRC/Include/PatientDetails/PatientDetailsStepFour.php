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
				<!--			<br/>--><div id="RegFormText">Control Measures</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Duration</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Regular/Irregular</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Remarks</div>
						</td>
								

					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
						<div  id="RegFormText">Diet Control</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
								'.$DietControlDuration.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$DietControlPeriod.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$DietControlRemarks.'
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
									<div id="RegFormText">Insulin</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$InsulinDuration.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$InsulinPeriod.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$InsulinRemarks.'
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
								<div id="RegFormText">OHA</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$OHADuration.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$OHAPeriod.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$OHARemarks.'
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
								<div id="RegFormText">Alternative Drugs</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$AltDrugsDuration.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$AltDrugsPeriod.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$AltDrugsRemarks.'
						</td>
					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Comments</div><!--<br/>-->	
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$MedicalTrmntComments.'
						</td>
						<td style="border-right:0px;border-left:0px;">
			<!--			<br/>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
			<!--			<br/>-->
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

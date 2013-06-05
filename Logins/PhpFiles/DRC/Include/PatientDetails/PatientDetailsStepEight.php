<?php
echo '<form name=RegisterForm>

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
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">HB</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$HBValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Blood Sugar</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$BloodSugarValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Blood Urea</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$BloodUreaValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Serum Creatinine</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$SerumCreatinineValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Urine Albumin</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$UrineAlbuminValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">HbAIC</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$HbAICValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">S Cholestrol</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$CholestrolValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">-------</div>
						</td>		
					</tr>
                               <tr id=CampTableFirst class="selected"> 
						<td style="border-right:0px;border-left:0px;">
	
				<!--			<br/>--><div id="RegFormText">Comments/Findings</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>-->'.$BldInvestigationsComments.'
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
						</td><td style="border-right:0px;border-left:0px;">
						</td>
				</tr>

				</table>
				'
?>

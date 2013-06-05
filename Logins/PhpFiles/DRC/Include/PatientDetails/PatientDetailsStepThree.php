<?php
echo '
<table>
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>
			
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Type | Duration</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>-->'.$DiabetesType.' | '.$DiabetesDuration.'
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Comments</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>-->'.$DiabetesComments.'
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
					</tr>	
					<tr id=CampTableFirst  class=Special>	
						<td style="border-right:0px;border-left:0px;">	
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
				</tr>
				</table>';
?>

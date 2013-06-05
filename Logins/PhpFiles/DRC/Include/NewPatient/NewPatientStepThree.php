<?php
echo '
<table>
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>
			
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
					<!--		<br/>--><div id="RegFormText">Type 1</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><input type=radio name=DiabetesType value=DiabetesTypeOne id=RegInputBox checked>
						</td>
						<td style="border-right:0px;border-left:0px;">
			<!--				<br/>--><div id="RegFormText">Type 2</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><input type=radio name=DiabetesType value=DiabetesTypeTwo id=RegInputBox >
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Duration</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><input type=text name=DiabetesTypeOneDuration id=RegInputBox>
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
			<!--				<br/>--><!--<div id="RegFormText">Type 2</div>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><!--<input type=radio name=DiabetesType value=DiabetesTypeTwo id=RegInputBox >-->
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><!--<div id="RegFormText">Comments</div>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><input type=hidden name=DiabetesComments id=RegInputBox>
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

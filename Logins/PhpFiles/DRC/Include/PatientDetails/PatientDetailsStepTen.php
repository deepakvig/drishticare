<?php
echo '
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
				</tr>
				

				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						<div id="RegFormText">
							Without Glasses</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
						<div id="RegFormText">
							Without Glasses</div>
						</td>
				</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>--><div id="RegFormText">Left Eye</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>-->
							'.$LeftEyeVisualWithoutGlassesValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
				<!--			<br/>-->
							'.$RightEyeVisualWithoutGlassesValue.'
						</td>
				</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Right Eye</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$LeftEyeVisualWithGlassesValue.'
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$RightEyeVisualWithGlassesValue.'
						</td>
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

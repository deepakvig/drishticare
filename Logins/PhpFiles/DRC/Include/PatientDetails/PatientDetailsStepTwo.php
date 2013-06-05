<?php
$CampID = $SessionObject->GetData("CampID");
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
					<!--		<br/>--><div id="RegFormText">Camp ID</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
					<!--		<br/>-->'.stripslashes($CampName).'
						</td>
</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
					<!--		<br/>--><div id="RegFormText">Episode Date</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
					<!--	<br/>-->'.$PatientEpisodeDate.'
						</td>
								

					</tr>
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Comments/Findings</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$EpisodeComments.'
						</td>
</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Decreased/Blurred Vision</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$DBVision.'
						</td>
					</tr>	
					<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Flashes/Floaters</div><!--<br/>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$Flashes.'
				<!--		<br/>-->
						</td>

</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Double Vision</div><!--<br/>-->
						</td>
						<td style="border-right:0px;border-left:0px;">
							'.$DoubleVision.'
						</td>
					</tr>	
					<tr id=CampTableFirst  class=Special>	
						<td style="border-right:0px;border-left:0px;" bgcolor=red>	
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

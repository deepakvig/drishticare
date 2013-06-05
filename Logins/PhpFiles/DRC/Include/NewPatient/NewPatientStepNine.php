<?php
echo '
	<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
<tbody id=CampTableFirst>
<tr id=CampTableFirst class="selected">
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
<td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>
					<tr>	
						<td style="border-left:0px;border-right:0px;">
							<input type=checkbox name=NBC id=RegInputBox disabled onclick="HandleSLExm()"> 
						</td>
						<td style="border-left:0px;border-right:0px;">
							<div id="RegFormText">NBC</div>
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<input type=text name=NBCValue id=RegInputBox disabled>
						</td>		
					</tr>
					<tr>	
						<td style="border-left:0px;border-right:0px;">
							<input type=checkbox name=PBC id=RegInputBox disabled onclick="HandleSLExm()">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<div id="RegFormText">PBC</div>
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<input type=text name=PBCValue id=RegInputBox disabled>
						</td>		
					</tr>
					<tr>	
						<td style="border-left:0px;border-right:0px;">
							<input type=checkbox name=Cartract id=RegInputBox disabled onclick="HandleSLExm()">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<div id="RegFormText">Cartract</div>
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<input type=text name=CartractValue id=RegInputBox disabled>
						</td>		
					</tr>
					<tr>	
						<td style="border-left:0px;border-right:0px;">
							<input type=checkbox name=SLNone id=RegInputBox checked onclick="HandleSLExmNone()">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<div id="RegFormText">None</div>
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>		
					</tr>
					<tr>	
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<br><div id="RegFormText">Comments</div>
						</td>
						<td style="border-left:0px;border-right:0px;">
						</td>
						<td style="border-left:0px;border-right:0px;">
							<br><input type=text name=SLExaminationComments id=RegInputBox>
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
<td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>	
				</table>
				'
?>

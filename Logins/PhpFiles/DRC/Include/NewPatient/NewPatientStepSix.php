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
					<tr>	
												<td style="border-right:0px;border-left:0px;">	
							<input type=checkbox name=Smoking id=RegInputBox disabled onclick="HandleOR()">
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<div id="RegFormText">Smoking</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<div id="RegFormText">Duration</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<input type=text name=SmokingDuration id=RegInputBox disabled onclick="HandleOR()">
						</td>		
					</tr>
					<tr>	
												<td style="border-right:0px;border-left:0px;">	
							<input type=checkbox name=Alcohal id=RegInputBox disabled onclick="HandleOR()">
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<div id="RegFormText">Alcohal</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<div id="RegFormText">Duration</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<input type=text name=AlcohalDuration id=RegInputBox disabled onclick="HandleOR()">
						</td>		
					</tr>
					<tr>	
												<td style="border-right:0px;border-left:0px;">	
							<input type=checkbox name=ORNone id=RegInputBox checked onclick="HandleORNone()"> 
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<div id="RegFormText">None</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
						</td>
												<td style="border-right:0px;border-left:0px;">	
						</td>		
					</tr>
					<tr>	
												<td style="border-right:0px;border-left:0px;">	
							<br><div id="RegFormText">Pregnancy <br>(In Months)</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<br><select id=RegInputBox name=Pregnancy>
								<option value=-1>N/A</option>
								<option value=0>0</option>
								<option value=1>1</option>
								<option value=2>2</option>
								<option value=3>3</option>
								<option value=4>4</option>
								<option value=5>5</option>
								<option value=6>6</option>
								<option value=7>7</option>
								<option value=8>8</option>
								<option value=9>9</option>
								<option value=10>10</option>
								<option value=11>11</option>
								<option value=12>12</option>
						</td>
												<td style="border-right:0px;border-left:0px;">	
						</td>
												<td style="border-right:0px;border-left:0px;">	
						</td>		
					</tr>

					<tr>	
												<td style="border-right:0px;border-left:0px;">	
							<br><div id="RegFormText">Comments</div>
						</td>
												<td style="border-right:0px;border-left:0px;">	
							<br><input type=text name=ORComments id=RegInputBox>
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
							
						</td>
						<td style="border-right:0px;border-left:0px;">
							
						</td>
				</tr>
				</table>
				'
?>

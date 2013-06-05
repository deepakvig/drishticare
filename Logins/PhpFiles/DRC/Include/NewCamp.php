<?php

$DBObject    = new DataBase();
$Query       = "Select * from dcmapping Where FirstEntity='".md5($UserName)."' and (WhatIsSecond = 'Do' or WhatIsSecond = 'Pg')";
$Result      = $DBObject->ExecuteQuery($Query);
$FinalResult = $DBObject->FetchResult();
$Optlgist    = "<select name=Oplgst id=RegInputBox>";
$Photogrpher = "<select name=Photographer id=RegInputBox>";
for($i=0;$i<count($FinalResult);$i++){
	if($FinalResult[$i]["WhatIsSecond"]=="Pg"){
		$Query    = "Select * from photographerdetails Where PhotoGrapherHashCode ='".$FinalResult[$i]["SecondEntity"]."'";
		$Result   = $DBObject->ExecuteQuery($Query);
		$Result   = $DBObject->FetchResult();
		$Photogrpher = $Photogrpher."
			    <option value=".$FinalResult[$i]["SecondEntity"]." >".$Result[0]["PhotoGrapherName"]."</option>";
	}
	else if($FinalResult[$i]["WhatIsSecond"]=="Do"){
		$Query  = "Select * from doctordetails Where DoctorHashCode ='".$FinalResult[$i]["SecondEntity"]."'";
		$Result = $DBObject->ExecuteQuery($Query);
		$Result = $DBObject->FetchResult();
		$Optlgist = $Optlgist."
			    <option value=".$FinalResult[$i]["SecondEntity"]." >".$Result[0]["DoctorName"]."</option>";

	}
}
$Optlgist    = $Optlgist."</select>";
$Photogrpher = $Photogrpher."</select>";
echo '
<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>
	<table width=100%>
		<tr>
		<td width=15% style="border-right:groove 1px #4b6a2f;padding-right:20px" valign=top>';
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/SideMenuInbox.php";
echo '
		</td>
		<td valign=top>
		<form method=POST action=/DCare/Logins/DRC/Register.php name=RegisterForm>
		<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>
				<tr id=CampTableFirst class="alternate">	
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
							<div id="RegFormText">Camp Name</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=CampName id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
						<td style="border-right:0px;border-left:0px;">
						</td>
				</tr>	
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Camp Type</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=CampType id=RegInputBox>
								<option value=Free>Free</option>
								<option value=Paid>Paid</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;"> 
							<div id="RegFormText">Camp Sponsor</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=CampSponsor id=RegInputBox>
						</td>
				</tr>
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Start Date</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=StDate id=RegInputBox>
								<option value=1 '?><?php if(date("j")=='1') echo "SELECTED"?><?php echo'>1</option>
								<option value=2 '?><?php if(date("j")=='2') echo "SELECTED"?><?php echo'>2</option>
								<option value=3 '?><?php if(date("j")=='3') echo "SELECTED"?><?php echo'>3</option>
								<option value=4 '?><?php if(date("j")=='4') echo "SELECTED"?><?php echo'>4</option>
								<option value=5 '?><?php if(date("j")=='5') echo "SELECTED"?><?php echo'>5</option>
								<option value=6 '?><?php if(date("j")=='6') echo "SELECTED"?><?php echo'>6</option>
								<option value=7 '?><?php if(date("j")=='7') echo "SELECTED"?><?php echo'>7</option>
								<option value=8 '?><?php if(date("j")=='8') echo "SELECTED"?><?php echo'>8</option>
								<option value=9 '?><?php if(date("j")=='9') echo "SELECTED"?><?php echo'>9</option>
								<option value=10 '?><?php if(date("j")=='10') echo "SELECTED"?><?php echo'>10</option>
								<option value=11 '?><?php if(date("j")=='11') echo "SELECTED"?><?php echo'>11</option>
								<option value=12 '?><?php if(date("j")=='12') echo "SELECTED"?><?php echo'>12</option>
								<option value=13 '?><?php if(date("j")=='13') echo "SELECTED"?><?php echo'>13</option>
								<option value=14 '?><?php if(date("j")=='14') echo "SELECTED"?><?php echo'>14</option>
								<option value=15 '?><?php if(date("j")=='15') echo "SELECTED"?><?php echo'>15</option>
								<option value=16 '?><?php if(date("j")=='16') echo "SELECTED"?><?php echo'>16</option>
								<option value=17 '?><?php if(date("j")=='17') echo "SELECTED"?><?php echo'>17</option>
								<option value=18 '?><?php if(date("j")=='18') echo "SELECTED"?><?php echo'>18</option>
								<option value=19 '?><?php if(date("j")=='19') echo "SELECTED"?><?php echo'>19</option>
								<option value=20 '?><?php if(date("j")=='20') echo "SELECTED"?><?php echo'>20</option>
								<option value=21 '?><?php if(date("j")=='21') echo "SELECTED"?><?php echo'>21</option>
								<option value=22 '?><?php if(date("j")=='22') echo "SELECTED"?><?php echo'>22</option>
								<option value=23 '?><?php if(date("j")=='23') echo "SELECTED"?><?php echo'>23</option>
								<option value=24 '?><?php if(date("j")=='24') echo "SELECTED"?><?php echo'>24</option>
								<option value=25 '?><?php if(date("j")=='25') echo "SELECTED"?><?php echo'>25</option>
								<option value=26 '?><?php if(date("j")=='26') echo "SELECTED"?><?php echo'>26</option>
								<option value=27 '?><?php if(date("j")=='27') echo "SELECTED"?><?php echo'>27</option>
								<option value=28 '?><?php if(date("j")=='28') echo "SELECTED"?><?php echo'>28</option>
								<option value=29 '?><?php if(date("j")=='29') echo "SELECTED"?><?php echo'>29</option>
								<option value=30 '?><?php if(date("j")=='30') echo "SELECTED"?><?php echo'>30</option>
								<option value=31 '?><?php if(date("j")=='31') echo "SELECTED"?><?php echo'>31</option>
							</select>
							<select name=StMonth id=RegInputBox>
								<option value=1 '?><?php if(date("n")=='1') echo "SELECTED"?><?php echo'>Jan</option>
								<option value=2 '?><?php if(date("n")=='2') echo "SELECTED"?><?php echo'>Feb</option>
								<option value=3 '?><?php if(date("n")=='3') echo "SELECTED"?><?php echo'>Mar</option>
								<option value=4 '?><?php if(date("n")=='4') echo "SELECTED"?><?php echo'>Apr</option>
								<option value=5 '?><?php if(date("n")=='5') echo "SELECTED"?><?php echo'>May</option>
								<option value=6 '?><?php if(date("n")=='6') echo "SELECTED"?><?php echo'>Jun</option>
								<option value=7 '?><?php if(date("n")=='7') echo "SELECTED"?><?php echo'>Jul</option>
								<option value=8 '?><?php if(date("n")=='8') echo "SELECTED"?><?php echo'>Aug</option>
								<option value=9 '?><?php if(date("n")=='9') echo "SELECTED"?><?php echo'>Sep</option>
								<option value=10 '?><?php if(date("n")=='10') echo "SELECTED"?><?php echo'>Oct</option>
								<option value=11 '?><?php if(date("n")=='11') echo "SELECTED"?><?php echo'>Nov</option>
								<option value=12 '?><?php if(date("n")=='12') echo "SELECTED"?><?php echo'>Dec</option>
							</select>
							<select name=StYear id=RegInputBox>
								<option value=2009 '?><?php if(date("Y")=='2009') echo "SELECTED"?><?php echo'>2009</option>
								<option value=2010 '?><?php if(date("Y")=='2010') echo "SELECTED"?><?php echo'>2010</option>
								<option value=2011 '?><?php if(date("Y")=='2011') echo "SELECTED"?><?php echo'>2011</option>
								<option value=2012 '?><?php if(date("Y")=='2012') echo "SELECTED"?><?php echo'>2012</option>
								<option value=2013 '?><?php if(date("Y")=='2013') echo "SELECTED"?><?php echo'>2013</option>
								<option value=2014 '?><?php if(date("Y")=='2014') echo "SELECTED"?><?php echo'>2014</option>
								<option value=2015 '?><?php if(date("Y")=='2015') echo "SELECTED"?><?php echo'>2015</option>
								<option value=2016 '?><?php if(date("Y")=='2016') echo "SELECTED"?><?php echo'>2016</option>
								<option value=2017 '?><?php if(date("Y")=='2017') echo "SELECTED"?><?php echo'>2017</option>
								<option value=2018 '?><?php if(date("Y")=='2018') echo "SELECTED"?><?php echo'>2018</option>
								<option value=2019 '?><?php if(date("Y")=='2019') echo "SELECTED"?><?php echo'>2019</option>
								<option value=2020 '?><?php if(date("Y")=='2020') echo "SELECTED"?><?php echo'>2020</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">End Date</div>
						</td>

						<td style="border-right:0px;border-left:0px;">
							<select name=EnDate id=RegInputBox>
								<option value=1 '?><?php if(date("j")=='1') echo "SELECTED"?><?php echo'>1</option>
                                                                <option value=2 '?><?php if(date("j")=='2') echo "SELECTED"?><?php echo'>2</option>
                                                                <option value=3 '?><?php if(date("j")=='3') echo "SELECTED"?><?php echo'>3</option>
                                                                <option value=4 '?><?php if(date("j")=='4') echo "SELECTED"?><?php echo'>4</option>
                                                                <option value=5 '?><?php if(date("j")=='5') echo "SELECTED"?><?php echo'>5</option>
                                                                <option value=6 '?><?php if(date("j")=='6') echo "SELECTED"?><?php echo'>6</option>
                                                                <option value=7 '?><?php if(date("j")=='7') echo "SELECTED"?><?php echo'>7</option>
                                                                <option value=8 '?><?php if(date("j")=='8') echo "SELECTED"?><?php echo'>8</option>
                                                                <option value=9 '?><?php if(date("j")=='9') echo "SELECTED"?><?php echo'>9</option>
                                                                <option value=10 '?><?php if(date("j")=='10') echo "SELECTED"?><?php echo'>10</option>
                                                                <option value=11 '?><?php if(date("j")=='11') echo "SELECTED"?><?php echo'>11</option>
                                                                <option value=12 '?><?php if(date("j")=='12') echo "SELECTED"?><?php echo'>12</option>
                                                                <option value=13 '?><?php if(date("j")=='13') echo "SELECTED"?><?php echo'>13</option>
                                                                <option value=14 '?><?php if(date("j")=='14') echo "SELECTED"?><?php echo'>14</option>
                                                                <option value=15 '?><?php if(date("j")=='15') echo "SELECTED"?><?php echo'>15</option>
                                                                <option value=16 '?><?php if(date("j")=='16') echo "SELECTED"?><?php echo'>16</option>
                                                                <option value=17 '?><?php if(date("j")=='17') echo "SELECTED"?><?php echo'>17</option>
                                                                <option value=18 '?><?php if(date("j")=='18') echo "SELECTED"?><?php echo'>18</option>
                                                                <option value=19 '?><?php if(date("j")=='19') echo "SELECTED"?><?php echo'>19</option>
                                                                <option value=20 '?><?php if(date("j")=='20') echo "SELECTED"?><?php echo'>20</option>
                                                                <option value=21 '?><?php if(date("j")=='21') echo "SELECTED"?><?php echo'>21</option>
                                                                <option value=22 '?><?php if(date("j")=='22') echo "SELECTED"?><?php echo'>22</option>
                                                                <option value=23 '?><?php if(date("j")=='23') echo "SELECTED"?><?php echo'>23</option>
                                                                <option value=24 '?><?php if(date("j")=='24') echo "SELECTED"?><?php echo'>24</option>
                                                                <option value=25 '?><?php if(date("j")=='25') echo "SELECTED"?><?php echo'>25</option>
                                                                <option value=26 '?><?php if(date("j")=='26') echo "SELECTED"?><?php echo'>26</option>
                                                                <option value=27 '?><?php if(date("j")=='27') echo "SELECTED"?><?php echo'>27</option>
                                                                <option value=28 '?><?php if(date("j")=='28') echo "SELECTED"?><?php echo'>28</option>
                                                                <option value=29 '?><?php if(date("j")=='29') echo "SELECTED"?><?php echo'>29</option>
                                                                <option value=30 '?><?php if(date("j")=='30') echo "SELECTED"?><?php echo'>30</option>
                                                                <option value=31 '?><?php if(date("j")=='31') echo "SELECTED"?><?php echo'>31</option>
							</select>	
							<select name=EnMonth id=RegInputBox>
								<option value=1 '?><?php if(date("n")=='1') echo "SELECTED"?><?php echo'>Jan</option>
                                                                <option value=2 '?><?php if(date("n")=='2') echo "SELECTED"?><?php echo'>Feb</option>
                                                                <option value=3 '?><?php if(date("n")=='3') echo "SELECTED"?><?php echo'>Mar</option>
                                                                <option value=4 '?><?php if(date("n")=='4') echo "SELECTED"?><?php echo'>Apr</option>
                                                                <option value=5 '?><?php if(date("n")=='5') echo "SELECTED"?><?php echo'>May</option>
                                                                <option value=6 '?><?php if(date("n")=='6') echo "SELECTED"?><?php echo'>Jun</option>
                                                                <option value=7 '?><?php if(date("n")=='7') echo "SELECTED"?><?php echo'>Jul</option>
                                                                <option value=8 '?><?php if(date("n")=='8') echo "SELECTED"?><?php echo'>Aug</option>
                                                                <option value=9 '?><?php if(date("n")=='9') echo "SELECTED"?><?php echo'>Sep</option>
                                                                <option value=10 '?><?php if(date("n")=='10') echo "SELECTED"?><?php echo'>Oct</option>
                                                                <option value=11 '?><?php if(date("n")=='11') echo "SELECTED"?><?php echo'>Nov</option>
                                                                <option value=12 '?><?php if(date("n")=='12') echo "SELECTED"?><?php echo'>Dec</option>
							</select>
							<select name=EnYear id=RegInputBox>
								<option value=2009 '?><?php if(date("Y")=='2009') echo "SELECTED"?><?php echo'>2009</option>
                                                                <option value=2010 '?><?php if(date("Y")=='2010') echo "SELECTED"?><?php echo'>2010</option>
                                                                <option value=2011 '?><?php if(date("Y")=='2011') echo "SELECTED"?><?php echo'>2011</option>
                                                                <option value=2012 '?><?php if(date("Y")=='2012') echo "SELECTED"?><?php echo'>2012</option>
                                                                <option value=2013 '?><?php if(date("Y")=='2013') echo "SELECTED"?><?php echo'>2013</option>
                                                                <option value=2014 '?><?php if(date("Y")=='2014') echo "SELECTED"?><?php echo'>2014</option>
                                                                <option value=2015 '?><?php if(date("Y")=='2015') echo "SELECTED"?><?php echo'>2015</option>
                                                                <option value=2016 '?><?php if(date("Y")=='2016') echo "SELECTED"?><?php echo'>2016</option>
                                                                <option value=2017 '?><?php if(date("Y")=='2017') echo "SELECTED"?><?php echo'>2017</option>
                                                                <option value=2018 '?><?php if(date("Y")=='2018') echo "SELECTED"?><?php echo'>2018</option>
                                                                <option value=2019 '?><?php if(date("Y")=='2019') echo "SELECTED"?><?php echo'>2019</option>
                                                                <option value=2020 '?><?php if(date("Y")=='2020') echo "SELECTED"?><?php echo'>2020</option>

							</select>
						</td>
				</tr>	
				<tr id=CampTableFirst class="selected">
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Ophthalmologist</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=Optlgist id=RegInputBox>
						</td>
	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Technician</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=Photographer id=RegInputBox>
						</td>
				</tr>	
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Camp Organizer</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=CampOrganizer id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Address I</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=Address1 id=RegInputBox>
						</td>
				</tr>	
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Address II</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=Address2 id=RegInputBox>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Camp City</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=CampCity id=RegInputBox>
							<input type=hidden name=RegAgent value=NewCamp>
							<input type=hidden name=Date value='.$Date.'>
							<input type=hidden name=Month value='.$Month.'>
							<input type=hidden name=Year value='.$Year.'>
						</td>
				</tr>						
				<tr id=CampTableFirst class="selected">	
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Camp State</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<select name=CampState id=RegInputBox>
								<option value=AP>Andhra Pradesh</option>
								<option value=AR>Arunachal Pradesh</option>
								<option value=AS>Assam</option>
								<option value=BR>Bihar</option>
								<option value=CG>Chattisgarh</option>
								<option value=GA>Goa</option>
								<option value=GJ>Gujrat</option>
								<option value=HR>Haryana</option>
								<option value=HP>Himachal Pradesh</option>
								<option value=JK>Jammu & Kashmir</option>
								<option value=JH>Jharkhand</option>
								<option value=KA>Karnataka</option>
								<option value=KL>Kerala</option>
								<option value=MP>Madhya Pradesh</option>
								<option value=MH>Maharashtra</option>
								<option value=MN>Manipur</option>
								<option value=ML>Meghalaya</option>
								<option value=MZ>Mizoram</option>
								<option value=NL>Nagaland</option>
								<option value=OR>Orissa</option>
								<option value=PB>Punjab</option>
								<option value=RJ>Rajasthan</option>
								<option value=SK>Sikkim</option>
								<option value=TN>Tamil Nadu</option>
								<option value=TR>Tripura</option>
								<option value=UK>Uttarakhand</option>
								<option value=UP>Uttar Pradesh</option>
								<option value=WB>West Bengal</option>
							</select>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<div id="RegFormText">Pin Code</div>
						</td>
						<td style="border-right:0px;border-left:0px;">
							<input type=text name=PinCode id=RegInputBox>
						</td>
				</tr>				
				<tr id=CampTableFirst class="selected">
					<td style="border-right:0px;border-left:0px;">
						<br/><a href=javascript:SubmitForm("NewCamp") id=LoginButton><font color=white size=2>Register</font></a>
						<br/><br/>
					</td>
					<td style="border-right:0px;border-left:0px;">
						<br/><a href=javascript:ResetForm("NewCamp") id=LoginButton><font color=white size=2>Reset</font></a>
						<br/><br/>
					</td>
					<td style="border:0px;">
					</td>
					<td style="border:0px;">
					</td>
				</tr>
				<tr id=CampTableFirst class="alternate">
					<td style="border-right:0px;border-left:0px;">
				
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
					<td style="border-right:0px;border-left:0px;">
					
					</td>
				</tr>
				</tr>	


				</table>
			</td>
</tr>
</table>';
$DBObject->CloseDataBaseConnection();
?>

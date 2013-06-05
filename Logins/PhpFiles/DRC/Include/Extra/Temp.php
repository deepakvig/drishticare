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
echo'
<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>
	<table width=100%>
		<tr>
			<td width=15% style="border-right:groove 1px #4b6a2f;padding-right:20px" valign=top>
				<table width=100%>
					<tr><td>
						<a href=index.php?ReqPage=MainPage&ReqStatus=Active><button id=LeftSideMenu />Active</button></a>
					</td></tr>
					<tr><td>
						<a href=index.php?ReqPage=MainPage&ReqStatus=Planned><button id=LeftSideMenu />Planned</button></a>
					</td></tr>
					<tr><td>
						<a href=index.php?ReqPage=MainPage&ReqStatus=Completed><button id=LeftSideMenu />Completed</button></a>
					</td></tr>
					<tr><td>
						<a href=index.php?ReqPage=MainPage&ReqStatus=All><button id=LeftSideMenu />All</button></a>
					</td></tr>
		</table>
		</td>
		<td valign=top>
		<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>';
		
echo '

<tr id=CampTableFirst class="alternate">
	<td style="border-right: 1px solid #c0c6cb;">
		<br/>
		<form method=POST action=DCare/Logins/DRC/Register.php name=RegisterForm>
		<table style="border:0px";>
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Camp Name</font>
						</td>
						<td style="border:0px";>
							<input type=text name=CampName id=RegInputBox>
						</td>
					</tr>
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Camp Type</font>
						</td>
						<td style="border:0px";>
							<select name=CampType id=RegInputBox>
								<option value=Free>Free</option>
								<option value=Paid>Paid</option>
							</select>
						</td>
						<td style="border:0px";>
							<div id=RegFormText>Camp Sponsor</font>
						</td style="border:0px";>
						<td style="border:0px";>
							<input type=text name=CampSponsor id=RegInputBox>
						</td style="border:0px";>
						<td style="border:0px";>
							
							</select>
						</td>
					</tr>	
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Start Date</font>
						</td style="border:0px";>
						<td style="border:0px";>
							<select name=StDate id=RegInputBox>
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
								<option value=13>13</option>
								<option value=14>14</option>
								<option value=15>15</option>
								<option value=16>16</option>
								<option value=17>17</option>
								<option value=18>18</option>
								<option value=19>19</option>
								<option value=20>20</option>
								<option value=21>21</option>
								<option value=22>22</option>
								<option value=23>23</option>
								<option value=24>24</option>
								<option value=25>25</option>
								<option value=26>26</option>
								<option value=27>27</option>
								<option value=28>28</option>
								<option value=29>29</option>
								<option value=30>30</option>
								<option value=31>31</option>
							</select>	
							<select name=StMonth id=RegInputBox>
								<option value=1>Jan</option>
								<option value=2>Feb</option>
								<option value=3>Mar</option>
								<option value=4>Apr</option>
								<option value=5>May</option>
								<option value=6>Jun</option>
								<option value=7>Jul</option>
								<option value=8>Aug</option>
								<option value=9>Sep</option>
								<option value=10>Oct</option>
								<option value=11>Nov</option>
								<option value=12>Dec</option>
							</select>
							<select name=StYear id=RegInputBox>
								<option value=2009>2009</option>
								<option value=2010>2010</option>
								<option value=2011>2011</option>
								<option value=2012>2012</option>
								<option value=2013>2013</option>
								<option value=2014>2014</option>
								<option value=2015>2015</option>
								<option value=2016>2016</option>
								<option value=2017>2017</option>
								<option value=2018>2018</option>
								<option value=2019>2019</option>
								<option value=2020>2020</option>
						</td>
						<td style="border:0px";>
							<div id=RegFormText>End Date</font>
						</td>

						<td style="border:0px";>
							<select name=EnDate id=RegInputBox>
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
								<option value=13>13</option>
								<option value=14>14</option>
								<option value=15>15</option>
								<option value=16>16</option>
								<option value=17>17</option>
								<option value=18>18</option>
								<option value=19>19</option>
								<option value=20>20</option>
								<option value=21>21</option>
								<option value=22>22</option>
								<option value=23>23</option>
								<option value=24>24</option>
								<option value=25>25</option>
								<option value=26>26</option>
								<option value=27>27</option>
								<option value=28>28</option>
								<option value=29>29</option>
								<option value=30>30</option>
								<option value=31>31</option>
							</select>	
							<select name=EnMonth id=RegInputBox>
								<option value=1>Jan</option>
								<option value=2>Feb</option>
								<option value=3>Mar</option>
								<option value=4>Apr</option>
								<option value=5>May</option>
								<option value=6>Jun</option>
								<option value=7>Jul</option>
								<option value=8>Aug</option>
								<option value=9>Sep</option>
								<option value=10>Oct</option>
								<option value=11>Nov</option>
								<option value=12>Dec</option>
							</select>
							<select name=EnYear id=RegInputBox>
								<option value=2009>2009</option>
								<option value=2010>2010</option>
								<option value=2011>2011</option>
								<option value=2012>2012</option>
								<option value=2013>2013</option>
								<option value=2014>2014</option>
								<option value=2015>2015</option>
								<option value=2016>2016</option>
								<option value=2017>2017</option>
								<option value=2018>2018</option>
								<option value=2019>2019</option>
								<option value=2020>2020</option>
							</select>
						</td>
					</tr>	
					<tr>
						<td style="border:0px";>
							<div id=RegFormText>Ophthalmologist</font>
						</td>
						<td style="border:0px";>
							'.stripslashes($DBObject->EscapeString($Optlgist)).'
						</td>
	
						<td style="border:0px";>
							<div id=RegFormText>Technician</font>
						</td>
						<td style="border:0px";>
							'.stripslashes($DBObject->EscapeString($Photogrpher)).'
						</td>
					</tr>	
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Camp Organizer</font>
						</td>
						<td style="border:0px";>
							<input type=text name=CampOrganizer id=RegInputBox>
						</td>
						<td style="border:0px";>
							<div id=RegFormText>Address I</div>
						</td>
						<td style="border:0px";>
							<input type=text name=Address1 id=RegInputBox>
						</td>
					</tr>	
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Address II</font>
						</td>
						<td style="border:0px";>
							<input type=text name=Address2 id=RegInputBox>
						</td>
						<td style="border:0px";>
							<div id=RegFormText>Camp City</font>
						</td>
						<td style="border:0px";>
							<input type=text name=CampCity id=RegInputBox>
							<input type=hidden name=RegAgent value=NewCamp>
							<input type=hidden name=Date value='.$Date.'>
							<input type=hidden name=Month value='.$Month.'>
							<input type=hidden name=Year value='.$Year.'>
						</td>
					</tr>
						
					<tr>	
						<td style="border:0px";>
							<div id=RegFormText>Camp State</font>
						</td>
						<td style="border:0px";>
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
						<td style="border:0px";>
							<font size=2>Pin Code</font>
						</td>
						<td style="border:0px";>
							<input type=text name=PinCode id=RegInputBox>
						</td>
					</tr>
					</table>
					<table style="border:0px";>
						<tr>
							<td style="border:0px";>
								<br/>
							<a href=javascript:SubmitForm("NewCamp")><button onclick=javascript:SubmitForm("NewCamp") id=LoginButton>
							Register</button></a>
							</td>
							<td style="border:0px";>
								<br/><a href=javascript:ResetForm("NewCamp") id=LoginButton>Reset</a>
							</td>
						</tr>
					</table>
					
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
</table>';
$DBObject->CloseDataBaseConnection();
?>

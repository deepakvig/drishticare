<?php
$HtmlOutput = "";
$DBObject = new DataBase();
$Result = $DBObject->ExecuteQuery("Select * from dcmapping where FirstEntity= '".md5($UserName)."' and WhatIsSecond = 'Cm'");
$FinalResult = $DBObject->FetchResult();
$State = 0;
echo'
<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>
	<table width=100%>
		<tr>
			<td width=15% style="border-right:groove 1px #4b6a2f;padding-right:20px" valign=top>';
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/SideMenuInbox.php";
echo '		
		</td>
		<td valign=top>
		<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>				
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
					</tr>';
			$HtmlOutput = $HtmlOutput.'
				<tr id=CampTableFirst class="alternate">
					<td >
						<font size=2><b>Sr. No.</b></font>
					</td>
					<td >
						<font size=2><b>Name</b></font>
					</td>
					<td >
						<font size=2><b>Type</b></font>
					</td>
					<td >
						<font size=2><b>Status</b></font>
					</td>
					<td>
						<font size=2><b>Duration</b></font>
					</td>
					<td>

						<font size=2><b>Technician</b></font>
					</td>
					<td>
						<font size=2><b>Physician</b></font>
					</td>
					<td style="border-right: 1px solid #c0c6cb;">
						<font size=2><b>Sponsors</b></font>
					</td>
				</tr>';
	for($i=0;$i<count($FinalResult);$i++){
		$Query       = "Select * from campdetails Where CampHashCode = '".$FinalResult[$i]["SecondEntity"]."'";
		$Result      = $DBObject->ExecuteQuery($Query);
		$CampDetails = $DBObject->FetchResult();
		$PgName      = $CampDetails[0]["PhotoGrapher"];
		$DoName      = $CampDetails[0]["OpthalMologist"];
		
		
		list($StYear, $StMonth, $StDate) = split('[/.-]', $CampDetails[0]["CampStartDate"]);
		list($EnYear, $EnMonth, $EnDate) = split('[/.-]', $CampDetails[0]["CampEndDate"]);
		list($PendingPatients, $CompletedPatients) = $DCApi->GetPatientStatus($CampDetails[0]["CampHashCode"]);
		$StartDate  = $StDate.'-'.$StMonth.'-'.$StYear;
		$EndingDate = $EnDate.'-'.$EnMonth.'-'.$EnYear;

		$StartDateTemp  = $StDate.'-'.$StMonth.'-'.$StYear;
		$EndingDateTemp = $EnDate.'-'.$EnMonth.'-'.$EnYear;
		$TodayDate      = date("d-m-Y");
			
			
		$Start      = strtotime($StartDateTemp);
		$End        = strtotime($EndingDateTemp);
		$Today      = strtotime($TodayDate);
		if($Start>$Today){
			$Status = "Planned";
		}
		else if($End < $Today){
			$Status = "Completed";
		}
		else {
			$Status = "Active";
		}

		if($ReqStatus == "All"){
		}
		else if($ReqStatus != $Status){
			continue;
		}
		$State = 1;
		$HtmlOutput = $HtmlOutput.'
			<tr id=CampTableFirst class="selected">
				<td >
					<font size=2><b>'.($i+1).'</b></font>
				</td>
				<td>

				<font size=2>
					<b><a href=index.php?ReqPage=CampDetails&CampHashCode='.$CampDetails[0]["CampHashCode"].'>'.$CampDetails[0]["CampName"].'</a></b></font>
				</td>
				<td >

					<font size=2><b>'.$CampDetails[0]["CampType"].'</b></font>
				</td>
				<td >

					<font size=2><b>'.$Status.'</b></font>
				</td>
				<td >

					<font size=2><b>'.$StartDate.' to '.$EndingDate.'</b></font>
				</td>
				<td >

					<font size=2><b>'.$PgName.'</b></font>
				</td>
				<td >

					<font size=2><b>'.$DoName.'</b></font>
				</td>
				<td style="border-right: 1px solid #c0c6cb;">
					<font size=2><b>'.(($CampDetails[0]["CampSponsor"]!="")?$CampDetails[0]["CampSponsor"]:'Not Given').'</b></font>
				</td>
			</tr>';
	}
	if($State == 1){
		echo $HtmlOutput;
	}
	else {
		echo '	<tr id=CampTableFirst class="alternate">
					<td style="border-right: 1px solid #c0c6cb;" colspan=9>
					<br/>
						<table style="border:0px;">
						<tr style="border:0px;">';
		if($ReqStatus == "Active" or $ReqStatus == "Planned" or $ReqStatus == "Completed" or $ReqStatus == "All"){
			echo '<td style="border:0px;"><img src=/DCare/Images/OneBit2.png></td>
			      <td style="border:0px;"><font size=2><b>There are no Camps in the requested Category.</b></font></td>';
		}
		else {
			echo '<td style="border:0px;"><img src=/DCare/Images/404.png></td>
			      <td style="border:0px;"><font size=2><b>The page you requested was not found.</b></font></td>';
		}
		echo '	</tr>
			</table>
			<br/><br/>
			</td>
			</tr>';
	}
	echo '
					</tr>
				</tbody>
			</table>
		</td>
	</tr>
</table>';
$DBObject->CloseDataBaseConnection();
?>

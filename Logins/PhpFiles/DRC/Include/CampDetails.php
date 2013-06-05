<?php
$DBObject = new DataBase();
$Query = 'Select * from patientstatus  where CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
$Result = $DBObject->ExecuteQuery($Query);
$FinalResult = $DBObject->FetchResult();
$State = 0;
$HtmlOutput = "";
echo'
<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>
	<table width=100%>
		<tr>
			<td width=20% style="border-right:groove 1px #4b6a2f;padding-right:10px" valign=top>';
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/SideMenuPatient.php";
	echo 	'</td>		
		<td valign=top>';
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/CampHeader.php";
	echo '
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
					</tr>';
			$HtmlOutput = $HtmlOutput.'
				<tr id=CampTableFirst class="alternate">
					<td >
						<font size=2 color="green"><b>Check</b></font>
					</td>
					<td >
						<font size=2 color="green"><b>Patient ID</b></font>
					</td>
					<td >
						<font size=2 color="green"><b>Diabetes Type</b></font>
					</td>
					<td >
						<font size=2 color="green"><b>Gender</b></font>
					</td>
					<td >
						<font size=2 color="green"><b>Age</b></font>
					</td>
					<td>
						<font size=2 color="green"><b>Maritial Status</b></font>
					</td>
					<td style="border-right: 1px solid #c0c6cb;">
						<font size=2 color="green"><b>Report Status</b></font>
					</td>
					</tr>';
	$Counter = 0;
	for($i=0;$i<count($FinalResult);$i++){
		echo '<tr id=CampTableFirst class="selected">';
		$Query       = 'Select * from patientpersonaldetails  where PatientHashCode = "'.$DBObject->EscapeString($FinalResult[$i]["PatientHashCode"]).'"';
		$Result      = $DBObject->ExecuteQuery($Query);
		$CampDetails = $DBObject->FetchResult();

		$Query       = 'Select * from patientdiabetesstatus where CampHashCode ="'.$DBObject->EscapeString($CampHashCode).'" and PatientHashCode = "'.$DBObject->EscapeString($FinalResult[$i]["PatientHashCode"]).'"';
		$Result      = $DBObject->ExecuteQuery($Query);
		$DiabetesDetails = $DBObject->FetchResult();

		$DiabetesTypeOneDuration = $DiabetesDetails[0]["TypeOneDuration"];
		$DiabetesTypeTwoDuration = $DiabetesDetails[0]["TypeTwoDuration"];
		$DiabetesType            = $DiabetesTypeOneDuration == "-1" ? "Type Two":"Type One";

		$PatientReportStatus = 'Not Received';


		if($FinalResult[$i]["PatientReportStatus"] == 'completed'){
			$PatientReportStatus = '<a href=/DCare/Logins/PhpFiles/DRC/Include/Report/Report.php?CampHashCode='.$DBObject->EscapeString($CampHashCode).'&PatientHashCode='.$DBObject->EscapeString($FinalResult[$i]["PatientHashCode"]).' target="PatientImages" onclick="newwin=window.open(\'\',\'PatientImages\',\'toolbar=no,directories=no, resize=yes, menubar=no,location=no,scrollbars=yes,maximize=yes,minimize=yes,width=1024,height=768\');">View Report</a>';
		}




		$Counter = $Counter + 1;
		$State = 1;
		$HtmlOutput = $HtmlOutput. '
				<tr id=CampTableFirst class="selected">
				<td >
					<font size=2><b><input type=checkbox></b></font>
				</td>
				<td >
					<font size=2><b><a href=index.php?ReqPage=PatientDetails&PatientHashCode='.$FinalResult[$i]["PatientHashCode"].'>'.$CampDetails[0]["PatientGivenID"].'</a></b></font>
				</td>
				<td>

				<font size=2>
					<b>'.$DiabetesType.'</b></font>
				</td>
				<td >

					<font size=2><b>'.$CampDetails[0]["PatientGender"].'</b></font>
				</td>
				<td >

					<font size=2><b>'.$CampDetails[0]["PatientAge"].'</b></font>
				</td>
				<td >

					<font size=2><b>'.$CampDetails[0]["PatientMaritialStatus"].'</b></font>
				</td>				
				<td style="border-right: 1px solid #c0c6cb;">
					<font size=2><b>'.$PatientReportStatus.'</b></font>
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
		if($CampStatusCode == "1"){
			echo '<td style="border:0px;"><img src=/DCare/Images/Info.png></td>
			      <td style="border:0px;"><font size=2><b>There are no Patients in the requested Category beacause it a Planned Camp.<br/>You can\'t register any Patient in the requested Camp.</b></font></td>';
		}
		else 
		//($ReqStatus == "SentCases" or $ReqStatus == "Received" or $ReqStatus == "ReportPending" or $ReqStatus == "All")
		{
			echo '<td style="border:0px;"><img src=/DCare/Images/OneBit2.png></td>
			      <td style="border:0px;"><font size=2><b>There are no Patients in the requested Category.</b></font></td>';
		}
	/*	else {
			echo '<td style="border:0px;"><img src=/DCare/Images/404.png></td>
			      <td style="border:0px;"><font size=2><b>The page you requested was not found.</b></font></td>';
		}*/
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

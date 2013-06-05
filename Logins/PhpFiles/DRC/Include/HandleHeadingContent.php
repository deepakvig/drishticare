<?php
	$MainHeading = "";
	$SideLink    =  "";
	$SideHeading =  "";
	if($ReqPage=="FirstStage"){
		$MainHeading = "Complete your Profile";
	}
	else if($ReqPage=="SecondStage"){
		$MainHeading = "New Doctor";
	}
	else if($ReqPage=="ThirdStage"){
		$MainHeading = "New Technician";
	}
	else if($ReqPage=="MainPage"){
		$ReqStatus = isSet($_GET["ReqStatus"])?$_GET["ReqStatus"]:'';

		if($ReqStatus == "Active" || $ReqStatus == "Planned" || $ReqStatus == "Completed" || $ReqStatus == "All"){
			$MainHeading = "
				<table>
				<tr>
				<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Home</a></td>
				<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
				<td>Camp View</td>
				</tr>
				</table>";
		}
		else {
			$MainHeading = "Page Not Found";
		}
		$SideLink    = "NewCamp";
		$SideHeading = "New Camp";
	}
	else if($ReqPage=="CampDetails"){
		if($CampStatusCode == 3){
			$SideLink    = "NewPatient";
			$SideHeading = "New Patient";
		}
		$MainHeading = "
			<table>
			<tr>
			<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Home</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Camp View</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td>Patient View</td>
			</tr>
			</table>";
		
		/*Leave in case you need anything !
		$ReqStatus = isSet($_GET["ReqStatus"])?$_GET["ReqStatus"]:'';


		if($ReqStatus == "SentCases"){
			$MainHeading = "Camp Details [Sent Cases]";
		}
		else if($ReqStatus == "Received"){
			$MainHeading = "Camp Details [Received Reports]";
		}
		else if($ReqStatus == "ReportPending"){
			$MainHeading = "Camp Details [Report Pending]";
		}
		else if($ReqStatus == "All"){
			$MainHeading = "Camp Details [All Reports]";
		}
		else {
			$MainHeading = "Page Not Found";
			$SideLink    = "";
			$SideHeading = "";
		}*/

		
	}
	else if($ReqPage=="PatientDetails"){
		$DBObject  = new DataBase();
		$Query 	   = 'Select * from patientpersonaldetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'"';

		$Result                = $DBObject->ExecuteQuery($Query);
		$Result                = $DBObject->FetchResult();
		$PatientID             = ($Result[0]["PatientGivenID"]!="")?$Result[0]["PatientGivenID"]:'Not Given';
		$PatientFirstName      = ($Result[0]["PatientFirstName"]!="")?$Result[0]["PatientFirstName"]:'Not Given';
		$PatientLastName       = ($Result[0]["PatientLastName"]!="")?$Result[0]["PatientLastName"]:'Not Given';
		$PatientGender         = ($Result[0]["PatientGender"]!="")?$Result[0]["PatientGender"]:'Not Given';
		$PatientAge            = ($Result[0]["PatientAge"]!="")?$Result[0]["PatientAge"]:'Not Given';
		$PatientMaritialStatus = ($Result[0]["PatientMaritialStatus"]!="")?$Result[0]["PatientMaritialStatus"]:'Not Given';
		$PatientAddress        = ($Result[0]["PatientAddress1"]!="")?$Result[0]["PatientAddress1"]:'Not Given';
		$PatientCity           = ($Result[0]["PatientCity"]!="")?$Result[0]["PatientCity"]:'Not Given';
		$PinCode               = ($Result[0]["PinCode"]!="")?$Result[0]["PinCode"]:'Not Given';
		$PatientState          = ($Result[0]["PatientState"]!="")?$Result[0]["PatientState"]:'Not Given';
		$PatientCountry        = ($Result[0]["PatientCountry"]!="")?$Result[0]["PatientCountry"]:'Not Given';
		$PatientPhoneNumber    = ($Result[0]["PatientPhoneNumber"]!="")?$Result[0]["PatientPhoneNumber"]:'Not Given';


		$MainHeading = "
			<table>
                        <tr>
                        <td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Home</a></td>
                        <td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
                        <td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Camp View</a></td>
                        <td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
                        <td><a  style=text-decoration:none href=index.php?ReqPage=CampDetails&CampHashCode=".$CampHashCode.">Patient View</a></td>
                        <td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
                        <td>".$PatientFirstName." ".$PatientLastName."</td>
                        </tr>
                        </table>";
			
		$SideLink    = "NewPatient";
		$SideHeading = "New Patient";
	}
	else if($ReqPage=="NewPatient"){
		$MainHeading = "
			<table>
			<tr>
			<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Home</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Camp View</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td><a  style=text-decoration:none href=index.php?ReqPage=CampDetails&CampHashCode=".$CampHashCode.">Patient View</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td>New Patient</td>
			</tr>
			</table>";


		$SideLink    = "NewPatient";
		$SideHeading = "New Patient";
	}
	else if($ReqPage=="NewCamp"){
		$MainHeading = "
			<table>
			<tr>
			<td><a href=index.php?ReqPage=MainPage&ReqStatus=Active style=text-decoration:none>Home</a></td>
			<td>&nbsp;<img src=/DCare/Images/Navigator.png><img src=/DCare/Images/Navigator.png>&nbsp;</td>
			<td>New Camp</a></td>
			</tr>
			</table>";

		$SideLink    = "NewCamp";
		$SideHeading = "New Camp";
	}
	else {
		$MainHeading = "Page Not Found";
	}
	echo '
	<table width=100% id=HeadingTable >
		<tr>
			<td align=left>
				<font size=2>'.$MainHeading.'</font>
			</td>';
	if($SideLink != ""){		
		echo'
			<td align=right>
				<a href=index.php?ReqPage='.$SideLink.'><font size=2>'.$SideHeading.'</font></a>
			</td>';
	}
	echo
		'</tr>
	</table>';
?>

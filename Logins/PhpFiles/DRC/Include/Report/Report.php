<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
	$ReqPage      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	if($ReqPage=="LogOut"){
		$SessionObject->DestroySession();
		header('Location: /DCare/index.html');
        	exit;
	}
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("DRC")==0){
		header('Location: /DCare/index.html');
	        exit;
	}

	#Getting Data from the Session Variable

	$PatientHashCode = isSet($_GET["PatientHashCode"])?$_GET["PatientHashCode"]:''; 
	$CampHashCode    = isSet($_GET["CampHashCode"])?$_GET["CampHashCode"]:''; 


	$UserName       = $SessionObject->GetData("LoginName");
	$Date           = $SessionObject->GetData("Date");
	$Month          = $SessionObject->GetData("Month");
	$Year           = $SessionObject->GetData("Year");
	$EmailID        = stripslashes($SessionObject->GetData("EmailID"));
	$DRCName        = stripslashes($SessionObject->GetData("DRCName"));
	$DRCStatus      = stripslashes($SessionObject->GetData("DRCStatus"));

	if($DRCStatus == 0 || $DRCStatus == 1 || $DRCStatus == 2){

	
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
	$CampHashCode    = isSet($_GET["CampHashCode"])?$_GET["CampHashCode"]:'';
	$PatientHashCode = isSet($_GET["PatientHashCode"])?$_GET["PatientHashCode"]:'';

	$Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode);
	if($Result == 0){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}

	$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);	
	if($Result == 0 || $Result == 1){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
	$DBObject              = new DataBase();
	$Result                = $DBObject->ExecuteQuery("Select * from patientreport where PatientHashCode='".$DBObject->EscapeString($PatientHashCode)."' and CampHashCode='".$DBObject->EscapeString($CampHashCode)."'");
        $PatientReport = $DBObject->FetchResult();
	if($DBObject->NumberOfRows()==0){
        	header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}


	$LeftEyeImageGradable  = $PatientReport[0]["LeftEyeImageGradable"];
        $LeftEyeNormal         = $PatientReport[0]["LeftEyeNormal"];
        $LeftEyeMildNPDR       = $PatientReport[0]["LeftEyeMildNPDR"];
        $LeftEyeModerateNPDR   = $PatientReport[0]["LeftEyeModerateNPDR"];
        $LeftEyeSevereNPDR     = $PatientReport[0]["LeftEyeSevereNPDR"];
        $LeftEyeEarlyPDR       = $PatientReport[0]["LeftEyeEarlyPDR"];
        $LeftEyeHighRiskPDR    = $PatientReport[0]["LeftEyeHighRiskPDR"];
        $LeftEyeAdvancedPDR    = $PatientReport[0]["LeftEyeAdvancedPDR"];
        $LeftEyeCSMEPresent    = $PatientReport[0]["LeftEyeCSMEPresent"];
        $RightEyeImageGradable = $PatientReport[0]["RightEyeImageGradable"];
        $RightEyeNormal        = $PatientReport[0]["RightEyeNormal"];
        $RightEyeMildNPDR      = $PatientReport[0]["RightEyeMildNPDR"];
        $RightEyeModerateNPDR  = $PatientReport[0]["RightEyeModerateNPDR"];
        $RightEyeSevereNPDR    = $PatientReport[0]["RightEyeSevereNPDR"];
        $RightEyeEarlyPDR      = $PatientReport[0]["RightEyeEarlyPDR"];
        $RightEyeHighRiskPDR   = $PatientReport[0]["RightEyeHighRiskPDR"];
        $RightEyeAdvancedPDR   = $PatientReport[0]["RightEyeAdvancedPDR"];
        $RightEyeCSMEPresent   = $PatientReport[0]["RightEyeCSMEPresent"];

	$DiagLeftEye      = '';
	$DiagRightEye     = '';

	if($LeftEyeNormal == 'Yes'){
		$DiagLeftEye = 'Normal/No Diabetic RetinoPathy';
	}
        if($LeftEyeMildNPDR == 'Yes'){
		$DiagLeftEye = 'Mild NPDR';
	}
        if($LeftEyeModerateNPDR == 'Yes'){
		$DiagLeftEye = 'Moderate NPDR';
	}
        if($LeftEyeSevereNPDR  == 'Yes'){
		$DiagLeftEye = 'Severe NPDR';
	}
        if($LeftEyeEarlyPDR == 'Yes'){
		$DiagLeftEye = 'Early PDR';
	}
        if($LeftEyeHighRiskPDR == 'Yes'){
		$DiagLeftEye = 'High Risk PDR';
	}
        if($LeftEyeAdvancedPDR == 'Yes'){
		$DiagLeftEye = 'Advanced PDR';
	}
	if($LeftEyeCSMEPresent == 'Yes'){
		$DiagLeftEye = $DiagLeftEye.'<br/>With CSME';
	}
	if($RightEyeNormal == 'Yes'){
		$DiagRightEye = 'Normal/No Diabetic RetinoPathy';
	}
        if($RightEyeMildNPDR == 'Yes'){
		$DiagRightEye = 'Mild NPDR';
	}
        if($RightEyeModerateNPDR == 'Yes'){
		$DiagRightEye = 'Moderate NPDR';
	}
        if($RightEyeSevereNPDR  == 'Yes'){
		$DiagRightEye = 'Severe NPDR';
	}
        if($RightEyeEarlyPDR == 'Yes'){
		$DiagRightEye = 'Early PDR';
	}
        if($RightEyeHighRiskPDR == 'Yes'){
		$DiagRightEye = 'High Risk PDR';
	}
        if($RightEyeAdvancedPDR == 'Yes'){
		$DiagRightEye = 'Advanced PDR';
	}
	if($RightEyeCSMEPresent == 'Yes'){
		$DiagRightEye = $DiagRightEye.'<br/>With CSME';
	}

	$DiagnosisLeftEye      = '';
	$DiagnosisRightEye     = '';

	if($LeftEyeImageGradable == 'No'){
		$DiagnosisLeftEye = 'Images Not Gradable';
	}
	else {
		if($LeftEyeNormal == 'Yes' || $LeftEyeMildNPDR == 'Yes' ||  $LeftEyeModerateNPDR == 'Yes'){
			$DiagnosisLeftEye= '
			   <ul>
				<li>Optimize Medical therapy of Glucose</li>
			   	<li>BP</li>
		   		<li>Lipids</li>';
		}

		if($LeftEyeCSMEPresent == 'Yes'){
			$DiagnosisLeftEye= $DiagnosisLeftEye.'
				<li>Refer to an Opthalmologist Without delay </li>';
			
		}
		else if($LeftEyeSevereNPDR == 'Yes' || $LeftEyeEarlyNPDR == 'Yes' ||  $LeftEyeHighRiskNPDR == 'Yes' || $LeftEyeAdvancedPDR == 'Yes'){
			$DiagnosisLeftEye = $DiagnosisLeftEye.'
				<li>Refer to an Opthalmologist</li>';
		}
		$DiagnosisLeftEye = $DiagnosisLeftEye.'
			</ul>';
	}


	if($RightEyeImageGradable == 'No'){
                $DiagnosisRightEye = 'Images Not Gradable';
        }
        else {
                if($RightEyeNormal == 'Yes' || $RightEyeMildNPDR == 'Yes' ||  $RightEyeModerateNPDR == 'Yes'){
                        $DiagnosisRightEye= '
                           <ul>
                                <li>Optimize Medical therapy of Glucose</li>
                                <li>BP</li>
                                <li>Lipids</li>';
                }

                if($RightEyeCSMEPresent == 'Yes'){
                        $DiagnosisRightEye= $DiagnosisRightEye.'
                                <li>Refer to an Opthalmologist Without delay </li>';
                        
                }
                else if($RightEyeSevereNPDR == 'Yes' || $RightEyeEarlyNPDR == 'Yes' ||  $RightEyeHighRiskNPDR == 'Yes' || $RightEyeAdvancedPDR == 'Yes'){
                        $DiagnosisRightEye = $DiagnosisRightEye.'
                                <li>Refer to an Opthalmologist</li>';
                }
                $DiagnosisRightEye = $DiagnosisRightEye.'
                        </ul>';
        }

	$SuggestedFollowUp = '';
	if($LeftEyeCSMEPresent == 'Yes' || $RightEyeCSMEPresent == 'Yes'){
		$SuggestedFollowUp = 'Suggested Follow-Up : Immediately';
	}

	else if($LeftEyeSevereNPDR == 'Yes' || $LeftEyeEarlyPDR == 'Yes' || $LeftEyeHighRiskPDR == 'Yes' || $LeftEyeAdvancedPDR == 'Yes' || $RightEyeSevereNPDR == 'Yes' || $RightEyeEarlyPDR == 'Yes' || $RightEyeHighRiskPDR == 'Yes' || $RightEyeAdvancedPDR == 'Yes'){
		$SuggestedFollowUp = 'Suggested Follow-Up : 2 Months';
	}

	else if($LeftEyeNormal == 'Yes' || $LeftEyeMildNPDR == 'Yes' || $LeftEyeModerateNPDR == 'Yes' || $LeftEyeSevereNPDR == 'Yes' || $LeftEyeEarlyPDR == 'Yes' || $LeftEyeHighRiskPDR == 'Yes' || $LeftEyeAdvancedPDR == 'Yes'){
		$SuggestedFollowUp = 'Suggested Follow-Up : 6 Months';
	}
	
	echo '
		                <title>Drishti Care | Bringing Ease to EyeCare</title>
		<link rel=stylesheet type=text/css href=/GradingApplication/Logins/Style/Table.css media=screen/>

		<table id=CampTable cellspacing="0" style="margin-top:0px;" width=100%  width=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
					<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
					<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
				</tr>
				<tr id=CampTableFirst class="selected">
					<td style="border: 1px solid #c0c6cb;"colspan=2>
						<font size=4><b>Patient Report.</b></font>
					</td>
				</tr>
				<tr id=CampTableFirst class="alternate">
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <font size=3><b>Left Eye</b></font>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <font size=3><b>Right Eye</b></font>
                                        </td>
                                </tr>
				<tr id=CampTableFirst class="selected">
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <Center><font size=2><b>Diagnosis :</b></font></Center>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <Center><font size=2><b>Diagnosis :</b></font></Center>
                                        </td>
                                </tr>
                                <tr id=CampTableFirst class="selected">
                                        <td style="border-right: 1px solid #c0c6cb;" valign=top>
                                               <Center> <font size=2><b>'.$DiagLeftEye.'</b></font></Center>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <Center><font size=2><b>'.$DiagRightEye.'</b></font></Center>
                                        </td>
                                </tr>
				<tr id=CampTableFirst class="selected">
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <Center><font size=2><b>Treatment Advised :</b></font></Center>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <Center><font size=2><b>Treatment Advised :</b></font></Center>
                                        </td>
                                </tr>
				<tr id=CampTableFirst class="selected">
                                        <td style="border-right: 1px solid #c0c6cb;" valign=top>
                                                <font size=2><b>'.$DiagnosisLeftEye.'</b></font>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <font size=2><b>'.$DiagnosisRightEye.'</b></font>
                                        </td>
                                </tr>
				<tr id=CampTableFirst class="alternate">
                                        <td style="border-right: 1px solid #c0c6cb;" colspan=2>
                                                <Center><font size=2><b>'.$SuggestedFollowUp.'</b></font></Center>
                                        </td>
                                </tr>


			</tbody>
			</table>';
?>

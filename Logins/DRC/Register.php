<?php
	include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegisterHeaderContent.php';
	$RegAgent = isSet($_POST["RegAgent"])?$_POST["RegAgent"]:'';

	if($RegAgent == "CompleteDRC"){
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegisterCompleteDRC.php';
	}
	else if($RegAgent == "NewDoctor"){
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegisterDoctor.php';
	}
	else if($RegAgent == "NewPhotoGrapher"){
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegisterPhotoGrapher.php';
	}

	else if($RegAgent=="NewCamp"){
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegisterCamp.php';
	}	
	else if($RegAgent == "NewPatient"){
		$CampHashCode = $SessionObject->GetData("CurrentCampID");
		$Result       = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		if($Result == 0 || $Result == 1 || $Result == 2){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage');
		}
		$FormStatus = 1;
		$CampName     = $DCApi->GetCampName($CampHashCode);
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepOne.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepTwo.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepThree.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepFour.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepFive.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepSix.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepSeven.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepEight.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepNine.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/RegPatientStepTen.php';
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RegPatient/Queries.php';
		$FormStatus = 1;
		if($FormStatus == 0){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=NewPatient');
		}

		else {
				$PatHashCode = $DBObject->EscapeString($PatientHashCode);
//                                header('Location: /DCare/Logins/PhpFiles/DRC/Include/UploadImages/FlexApplication/HandleImages.php?SessionID='.session_id().'&CampHashCode='.$CampHashCode.'&PatientHashCode='.$PatHashCode);
				echo '<SCRIPT LANGUAGE="javascript">
<!--
window.open("/DCare/Logins/PhpFiles/DRC/Include/UploadImages/FlexApplication/HandleImages.php?SessionID='.session_id().'&CampHashCode='.$CampHashCode.'&PatientHashCode='.$PatHashCode.'","windowname","width=600,height=600,scrollbars,resizable,status");
window.location = "/DCare/Logins/DRC/index.php?ReqPage=CampDetails&CampHashCode='.$CampHashCode.'";
-->
</SCRIPT>';

		}
	}
	else {
//	echo $RegAgent;
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
?>

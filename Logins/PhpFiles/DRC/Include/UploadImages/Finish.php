<?php

 /*       include"/home/deepakvig/domains/drishticare.com/htdocs/DCare/Include/Include.php";
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
	$UserName       = $SessionObject->GetData("LoginName");
	$DRCStatus      = stripslashes($SessionObject->GetData("DRCStatus"));


	if($DRCStatus == 0 || $DRCStatus == 1 || $DRCStatus == 2){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}

	$CampHashCode    = isSet($_REQUEST["CampHashCode"])?$_REQUEST["CampHashCode"]:'';
	$PatientHashCode = isSet($_REQUEST["PatientHashCode"])?$_REQUEST["PatientHashCode"]:'';

	$Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode);


	if($Result == 0){
		exit;
	}
	$ImageStatus = $Result;
	$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);	
	if($Result == 0 || $Result == 1){
		exit;
	}
/*	if(is_file($FileName)){
		$DBObject  = new DataBase();
		$Query = '
			Update patientstatus set PatientImageStatus = "Completed"
			Where
			PatientHashCode="'.$PatientHashCode.'"
			and
			CampHashCode="'.$CampHashCode.'"';
		$Result     = $DBObject->ExecuteQuery($Query);
		$DBObject->CloseDataBaseConnection();
}*/
	exit;
?>

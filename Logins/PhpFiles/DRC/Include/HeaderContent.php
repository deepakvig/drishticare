<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
	$ReqPage      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	if($ReqPage=="LogOut"){
		$SessionObject->DestroySession();
		header('Location: /MainPage/index.html');
        	exit;
	}
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("DRC")==0){
		header('Location: /MainPage/index.html');
	        exit;
	}
	
	#Getting Data from the Session Variable
	$UserName       = $SessionObject->GetData("LoginName");
	$Date           = $SessionObject->GetData("Date");
	$Month          = $SessionObject->GetData("Month");
	$Year           = $SessionObject->GetData("Year");
	$EmailID        = stripslashes($SessionObject->GetData("EmailID"));
	$DRCName        = stripslashes($SessionObject->GetData("DRCName"));
	$DRCStatus      = stripslashes($SessionObject->GetData("DRCStatus"));
	if($DRCStatus == 0){
		$ReqPage = "FirstStage";
	}
	else if($DRCStatus == 1){
		$ReqPage = "SecondStage";
	}
	else if($DRCStatus == 2){
		$ReqPage = "ThirdStage";
	}
	else if($ReqPage=="CampDetails"){
		$CampHashCode = isSet($_GET["CampHashCode"])?$_GET["CampHashCode"]:'';
		$SessionObject->StoreSession("CurrentCampID",$CampHashCode);			
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		if($Result == 0){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active&ReqStatus=Active');
		}
		else {
			$CampStatus = "Active";
			$CampColor  = "green";
		}
		$CampStatusCode = $Result;
	}
	else if($ReqPage == "NewPatient"){
		$CampHashCode = $SessionObject->GetData("CurrentCampID");
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		if($Result == 0 || $Result == 1 || $Result == 2){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active&ReqStatus=Active');
		}
		$CampName     = $DCApi->GetCampName($CampHashCode);
	}
	else if($ReqPage == "PatientDetails"){
		$CampHashCode    = $SessionObject->GetData("CurrentCampID");
		$PatientHashCode = isSet($_GET["PatientHashCode"])?$_GET["PatientHashCode"]:'';
		$Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode);
		if($Result == 0){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
		}
		
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		
		if($Result == 0 || $Result == 1){
			header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
		}
		
		$CampName     = $DCApi->GetCampName($CampHashCode);
	}
		
?>


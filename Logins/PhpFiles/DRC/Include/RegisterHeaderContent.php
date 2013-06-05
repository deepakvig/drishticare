<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
	$ReqAgent      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
//	$RegAgent = "NewPatient";
//	$RegAgent      = $_REQUEST["ReqPage"];
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("DRC")==0){
		header('Location: /DCare/index.html');
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
?>

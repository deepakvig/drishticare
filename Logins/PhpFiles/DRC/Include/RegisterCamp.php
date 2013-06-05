<?php
	$CampName      = isSet($_POST["CampName"])?$_POST["CampName"]:'';
	$CampType      = isSet($_POST["CampType"])?$_POST["CampType"]:'';
	$CampSponsor   = isSet($_POST["CampSponsor"])?$_POST["CampSponsor"]:'';
	$StDate        = isSet($_POST["StDate"])?$_POST["StDate"]:'';
	$StMonth       = isSet($_POST["StMonth"])?$_POST["StMonth"]:'';
	$StYear        = isSet($_POST["StYear"])?$_POST["StYear"]:'';
	$EnDate        = isSet($_POST["EnDate"])?$_POST["EnDate"]:'';
	$EnMonth       = isSet($_POST["EnMonth"])?$_POST["EnMonth"]:'';
	$EnYear        = isSet($_POST["EnYear"])?$_POST["EnYear"]:'';
	$Oplgst        = isSet($_POST["Oplgst"])?$_POST["Oplgst"]:'';
	$Photographer  = isSet($_POST["Photographer"])?$_POST["Photographer"]:'';
	$CampOrganizer = isSet($_POST["CampOrganizer"])?$_POST["CampOrganizer"]:'';
	$Address1      = isSet($_POST["Address1"])?$_POST["Address1"]:'';
	$Address2      = isSet($_POST["Address2"])?$_POST["Address2"]:'';
	$CampCity      = isSet($_POST["CampCity"])?$_POST["CampCity"]:'';
	$CampState     = isSet($_POST["CampState"])?$_POST["CampState"]:'';
	$PinCode       = isSet($_POST["PinCode"])?$_POST["PinCode"]:'';
	$DCApi         = new DCApi();
	if($PinCode == ''){
		$PinCode = 0;
	}
	$PinCodeCheck  = $DCApi->IsItNumber($PinCode);
	$CheckDate     = $DCApi->CheckValidDate($StDate,$StMonth,$StYear,$EnDate,$EnMonth,$EnYear);
	#if($CampName== null || ($CampType == "Free" && $CampSponsor == null) || $CheckDate == 0 || $CampOrganizer == null || $Address1 == null || 
	#	$CampCity == null || $PinCodeCheck == 0){
	if($CampName== null  || $PinCodeCheck == 0){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=NewCamp');
	}
	else {
		$DBObject = new DataBase();
		$Result   = $DBObject->ExecuteQuery("Select count(*) from campdetails");
		$Count    =  $DBObject->FetchResult();
		$CampID   = $DCApi->GenerateUserName($Count[0]["count(*)"],"cmp",8);
		$HashCode = md5($CampID);
		$Query = "Insert into campdetails values (
				'".$HashCode."',
				'".$CampID."',
				'".$DBObject->EscapeString($CampName)."',
				'".$DBObject->EscapeString($CampType)."',
				'".$DBObject->EscapeString($StYear.'-'.$StMonth.'-'.$StDate)."',
				'".$DBObject->EscapeString($EnYear.'-'.$EnMonth.'-'.$EnDate)."',
				'".$DBObject->EscapeString($Oplgst)."',
				'".$DBObject->EscapeString($Photographer)."',
				'".$DBObject->EscapeString($CampSponsor)."',
				'".$DBObject->EscapeString($CampOrganizer)."',
				'".$DBObject->EscapeString($Address1)."',
				'".$DBObject->EscapeString($Address2)."',
				'".$DBObject->EscapeString($CampCity)."',
				'".$DBObject->EscapeString($CampState)."',
				'".$DBObject->EscapeString($PinCode)."')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
				Insert Into dcmapping values (
					'".md5($UserName)."',
					'".$HashCode."',
					'Dc',
					'Cm')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$DBObject->CloseDataBaseConnection();
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=All');
	}
?>

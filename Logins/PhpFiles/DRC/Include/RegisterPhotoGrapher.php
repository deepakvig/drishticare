<?php
	$EmailID             =  isSet($_POST["EmailID"])?$_POST["EmailID"]:'';
	$PhotoGrapherName    =  isSet($_POST["PhotoGrapherName"])?$_POST["PhotoGrapherName"]:'';
	$PhotoGrapherGender  =  isSet($_POST["PhotoGrapherGender"])?$_POST["PhotoGrapherGender"]:'';
	$ClinicName          =  isSet($_POST["ClinicName"])?$_POST["ClinicName"]:'';
	$ClinicAddress1      =  isSet($_POST["ClinicAddress1"])?$_POST["ClinicAddress1"]:'';
	$ClinicAddress2      =  isSet($_POST["ClinicAddress2"])?$_POST["ClinicAddress2"]:'';
	$PhotoGrapherCity    =  isSet($_POST["PhotoGrapherCity"])?$_POST["PhotoGrapherCity"]:'';
	$PinCode             =  isSet($_POST["PinCode"])?$_POST["PinCode"]:'';
	$PhotoGrapherState   =  isSet($_POST["PhotoGrapherState"])?$_POST["PhotoGrapherState"]:'';
	$PhotoGrapherCountry =  isSet($_POST["PhotoGrapherCountry"])?$_POST["PhotoGrapherCountry"]:'';
	$ClinicPhone         =  isSet($_POST["ClinicPhone"])?$_POST["ClinicPhone"]:'';
	$MobileNumber        =  isSet($_POST["MobileNumber"])?$_POST["MobileNumber"]:'';
	$DCApi               =  new DCApi();
	$CheckEmailID        =  $DCApi->CheckUserName($EmailID,"Do");
	$PinCodeCheck        =  $DCApi->IsItNumber($PinCode);
	$ClinicPhoneCheck    =  $DCApi->IsItNumber($ClinicPhone);
	$MobileNumberCheck   =  $DCApi->IsItNumber($MobileNumber);
	if($CheckEmailID == 0 || $PhotoGrapherName == null || $ClinicName == null || $ClinicAddress1 == null || $PhotoGrapherCity == null || $PinCodeCheck == 0 || 
			$ClinicPhoneCheck == 0 || $MobileNumberCheck == 0 ){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
	else {
		$DBObject = new DataBase();
		$Result        =  $DBObject->ExecuteQuery("Select count(*) from photographerdetails");
		$Count         =  $DBObject->FetchResult();
		
		$PhotoGrapherUserName   = $DCApi->GenerateUserName($Count[0]["count(*)"],"pg",8);
		$HashCode        = md5($PhotoGrapherUserName);
		$Query = "
			Insert into photographerdetails values (
				'".$HashCode."',
				'".$PhotoGrapherUserName."',
				'".$DBObject->EscapeString($PhotoGrapherName)."',
				'".$DBObject->EscapeString($PhotoGrapherGender)."',
				'".$DBObject->EscapeString($ClinicName)."',
				'".$DBObject->EscapeString($ClinicAddress1)."',
				'".$DBObject->EscapeString($ClinicAddress2)."',
				'".$DBObject->EscapeString($PhotoGrapherCity)."',
				'".$DBObject->EscapeString($PinCode)."',
				'".$DBObject->EscapeString($PhotoGrapherState)."',
				'".$DBObject->EscapeString($PhotoGrapherCountry)."',
				'".$DBObject->EscapeString($ClinicPhone)."',
				'".$DBObject->EscapeString($MobileNumber)."')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
			Update drcdetails set
				DRCStatus = '3' 
				Where DRCUserName = '".$UserName."'";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
			Insert Into dcmapping values (
				'".md5($UserName)."',
				'".$HashCode."',
				'Dc',
				'Pg')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$DBObject->CloseDataBaseConnection();
		$SessionObject->StoreSession('DRCStatus','3');
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
?>

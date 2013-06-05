<?php
	$EmailID           =  isSet($_POST["EmailID"])?$_POST["EmailID"]:'';
	$DoctorName        =  isSet($_POST["DoctorName"])?$_POST["DoctorName"]:'';
	$DoctorGender      =  isSet($_POST["DoctorGender"])?$_POST["DoctorGender"]:'';
	$ClinicName        =  isSet($_POST["ClinicName"])?$_POST["ClinicName"]:'';
	$ClinicAddress1    =  isSet($_POST["ClinicAddress1"])?$_POST["ClinicAddress1"]:'';
	$ClinicAddress2    =  isSet($_POST["ClinicAddress2"])?$_POST["ClinicAddress2"]:'';
	$DoctorCity        =  isSet($_POST["DoctorCity"])?$_POST["DoctorCity"]:'';
	$PinCode           =  isSet($_POST["PinCode"])?$_POST["PinCode"]:'';
	$DoctorState       =  isSet($_POST["DoctorState"])?$_POST["DoctorState"]:'';
	$DoctorCountry     =  isSet($_POST["DoctorCountry"])?$_POST["DoctorCountry"]:'';
	$ClinicPhone       =  isSet($_POST["ClinicPhone"])?$_POST["ClinicPhone"]:'';
	$MobileNumber      =  isSet($_POST["MobileNumber"])?$_POST["MobileNumber"]:'';
	$DCApi             =  new DCApi();
	$CheckEmailID      = $DCApi->CheckUserName($EmailID,"Do");
	$PinCodeCheck      = $DCApi->IsItNumber($PinCode);
	$ClinicPhoneCheck  = $DCApi->IsItNumber($ClinicPhone);
	$MobileNumberCheck = $DCApi->IsItNumber($MobileNumber);
	if($CheckEmailID == 0 || $DoctorName == null || $ClinicName == null || $ClinicAddress1 == null || $DoctorCity == null || $PinCodeCheck == 0 || 
			$ClinicPhoneCheck == 0 || $MobileNumberCheck == 0 ){
		header('Location: /DCare/Logins/index.php?ReqPage=MainPage&ReqStatus=Active');
	}

	else {
		$DBObject = new DataBase();
		$Result        = $DBObject->ExecuteQuery("Select count(*) from doctordetails");
		$Count         =  $DBObject->FetchResult();

		$DoctorUserName   = $DCApi->GenerateUserName($Count[0]["count(*)"],"do",8);
		$HashCode        = md5($DoctorUserName);
		$Query = "
		Insert into doctordetails values (
			'".$HashCode."',
			'".$DoctorUserName."',
			'".$DBObject->EscapeString($DoctorName)."',
			'".$DBObject->EscapeString($DoctorGender)."',
			'".$DBObject->EscapeString($ClinicName)."',
			'".$DBObject->EscapeString($ClinicAddress1)."',
			'".$DBObject->EscapeString($ClinicAddress2)."',
			'".$DBObject->EscapeString($DoctorCity)."',
			'".$DBObject->EscapeString($PinCode)."',
			'".$DBObject->EscapeString($DoctorState)."',
			'".$DBObject->EscapeString($DoctorCountry)."',
			'".$DBObject->EscapeString($ClinicPhone)."',
			'".$DBObject->EscapeString($MobileNumber)."')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
			Update drcdetails set
				DRCStatus = '2' 
				Where DRCUserName = '".$UserName."'";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
			Insert Into dcmapping values (
				'".md5($UserName)."',
				'".$HashCode."',
				'Dc',
				'Do')";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$DBObject->CloseDataBaseConnection();
		$SessionObject->StoreSession('DRCStatus','2');
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
?>

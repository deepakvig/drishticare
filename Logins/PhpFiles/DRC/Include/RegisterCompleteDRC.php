<?php
	$EmailID        = isSet($_POST["EmailID"])?$_POST["EmailID"]:'';
	$DRCName        = isSet($_POST["DRCName"])?$_POST["DRCName"]:'';
	$DRCAddress1    = isSet($_POST["DRCAddress1"])?$_POST["DRCAddress1"]:'';
	$DRCAddress2    = isSet($_POST["DRCAddress2"])?$_POST["DRCAddress2"]:'';
	$DRCCity        = isSet($_POST["DRCCity"])?$_POST["DRCCity"]:'';
	$PinCode        = isSet($_POST["PinCode"])?$_POST["PinCode"]:'';
	$DRCState       = isSet($_POST["DRCState"])?$_POST["DRCState"]:'';
	$DRCCountry     = isSet($_POST["DRCCountry"])?$_POST["DRCCountry"]:'';
	$DRCMobile      = isSet($_POST["DRCMobile"])?$_POST["DRCMobile"]:'';
	$DRCPhone       = isSet($_POST["DRCPhone"])?$_POST["DRCPhone"]:'';
	$DCApi          =  new DCApi();
	$EmailIDCheck   = $DCApi->CheckEmailID($EmailID,"Dc");
	$PinCodeCheck   = $DCApi->IsItNumber($PinCode);
	$DRCMobileCheck = $DCApi->IsItNumber($DRCMobile);
	$DRCPhoneCheck  = $DCApi->IsItNumber($DRCPhone);
	if($EmailIDCheck == 0 || $DRCName == null || $DRCAddress1 == null || $DRCCity == null || $PinCodeCheck == 0 || $DRCState == null 
			|| $DRCCountry == null || $DRCMobileCheck  == 0 || $DRCPhoneCheck == 0){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
	else {
		$DBObject = new DataBase();
		$Query = "
			Update drcdetails set  
			DRCName = '".$DBObject->EscapeString($DRCName)."', 
			DRCAddress1 = '".$DBObject->EscapeString($DRCAddress1)."', 
			DRCAddress2 = '".$DBObject->EscapeString($DRCAddress2)."', 
			DRCCity = '".$DBObject->EscapeString($DRCCity)."', 
			DRCPinCode = '".$DBObject->EscapeString($PinCode)."', 
			DRCState = '".$DBObject->EscapeString($DRCState)."', 
			DRCCountry = '".$DBObject->EscapeString($DRCCountry)."', 
			DRCPhone = '".$DBObject->EscapeString($DRCPhone)."', 
			DRCMobile = '".$DBObject->EscapeString($DRCMobile)."', 
			DRCStatus = '1' Where DRCUserName = '".$UserName."'";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query = "
			Update userdetails set
				EmailID = '".$DBObject->EscapeString($EmailID)."' Where UserName = '".$UserName."'";
		$Result = $DBObject->ExecuteInsertOrUpdate($Query);
		$DBObject->CloseDataBaseConnection();
		$SessionObject->StoreSession('DRCStatus','1');
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
?>

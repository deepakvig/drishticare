<?php
	#Personal Details
	$PatientID              = isSet($_POST["PatientID"])?$_POST["PatientID"]:'';
	$PatientFirstName       = isSet($_POST["PatientFirstName"])?$_POST["PatientFirstName"]:'';
	$PatientLastName        = isSet($_POST["PatientLastName"])?$_POST["PatientLastName"]:'';
	$PatientGender          = isSet($_POST["PatientGender"])?$_POST["PatientGender"]:'';
	$PatientAge             = isSet($_POST["PatientAge"])?$_POST["PatientAge"]:'';
	$PatientMaritialStatus  = isSet($_POST["PatientMaritialStatus"])?$_POST["PatientMaritialStatus"]:'';
	$PatientAddress         = isSet($_POST["PatientAddress"])?$_POST["PatientAddress"]:'';
	$PatientCity            = isSet($_POST["PatientCity"])?$_POST["PatientCity"]:'';
	$PinCode                = isSet($_POST["PinCode"])?$_POST["PinCode"]:'';
	$PatientState           = isSet($_POST["PatientState"])?$_POST["PatientState"]:'';
	$PatientCountry         = isSet($_POST["PatientCountry"])?$_POST["PatientCountry"]:'';
	$PatientPhoneNumber     = isSet($_POST["PatientPhoneNumber"])?$_POST["PatientPhoneNumber"]:'';
	
	if($PatientID == null || $PatientFirstName == null || $PatientLastName == null || $DCApi->IsItNumber($PatientAge)==0
		|| $PatientAddress == null || $PatientCity == null || $DCApi->IsItNumber($PinCode)==0 
		|| $PatientState == null || $DCApi->IsItNumber($PatientPhoneNumber)==0)
	{
		$FormStatus = 0;
	}
?>

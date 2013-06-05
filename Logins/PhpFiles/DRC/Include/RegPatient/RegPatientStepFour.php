<?php
	# -1 means not Filled 
	$DietControl               = isSet($_POST["DietControl"])?$_POST["DietControl"]:'';
	
	if($DietControl =='on'){
		$DietControlDuration       = isSet($_POST["DietControlDuration"])?$_POST["DietControlDuration"]:'';
		$DietControlPeriod         = isSet($_POST["DietControlPeriod"])?$_POST["DietControlPeriod"]:'';
		$DietControlRemarks        = isSet($_POST["DietControlRemarks"])?$_POST["DietControlRemarks"]:'';
		if($DCApi->IsItNumber($DietControlDuration) == 0 || $DietControlRemarks == null){
			$FormStatus = 0;
		}
	}
	else {
		$DietControlDuration       = -1;
		$DietControlPeriod         = "";
		$DietControlRemarks        = "";
	}

	$Insulin  = isSet($_POST["Insulin"])?$_POST["Insulin"]:'';
		
	if($Insulin =='on'){
		$InsulinDuration       = isSet($_POST["InsulinDuration"])?$_POST["InsulinDuration"]:'';
		$InsulinPeriod         = isSet($_POST["InsulinPeriod"])?$_POST["InsulinPeriod"]:'';
		$InsulinRemarks        = isSet($_POST["InsulinRemarks"])?$_POST["InsulinRemarks"]:'';
		if($DCApi->IsItNumber($InsulinDuration) == 0 || $InsulinRemarks == null){
			$FormStatus = 0;
		}
	}
	else {
		$InsulinDuration       = -1;
		$InsulinPeriod         = "";
		$InsulinRemarks        = "";
	}
	
	
	$OHA = isSet($_POST["OHA"])?$_POST["OHA"]:'';
		
	if($OHA =='on'){
		$OHADuration       = isSet($_POST["OHADuration"])?$_POST["OHADuration"]:'';
		$OHAPeriod         = isSet($_POST["OHAPeriod"])?$_POST["OHAPeriod"]:'';
		$OHARemarks        = isSet($_POST["OHARemarks"])?$_POST["OHARemarks"]:'';
		if($DCApi->IsItNumber($OHADuration) == 0 || $OHARemarks == null){
			$FormStatus = 0;
		}
	}
	else {
		$OHADuration       = -1;
		$OHAPeriod         = "";
		$OHARemarks               = "";
	}
	
	
	
	$AltDrugs = isSet($_POST["AltDrugs"])?$_POST["AltDrugs"]:'';
		
	if($AltDrugs =='on'){
		$AltDrugsDuration       = isSet($_POST["AltDrugsDuration"])?$_POST["AltDrugsDuration"]:'';
		$AltDrugsPeriod         = isSet($_POST["AltDrugsPeriod"])?$_POST["AltDrugsPeriod"]:'';
		$AltDrugsRemarks        = isSet($_POST["AltDrugsRemarks"])?$_POST["AltDrugsRemarks"]:'';
		if($DCApi->IsItNumber($AltDrugsDuration) == 0 || $AltDrugsRemarks == null){
			$FormStatus = 0;
		}
	}
	else {
		$AltDrugsDuration       = -1;
		$AltDrugsPeriod         = "";
		$AltDrugsRemarks        = "";
	}
	
	$MedicalTrmntComments       = isSet($_POST["MedicalTrmntComments"])?$_POST["MedicalTrmntComments"]:'';
?>
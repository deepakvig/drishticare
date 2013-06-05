<?php
	#-1 is means not filled
	$Smoking = isSet($_POST["Smoking"])?$_POST["Smoking"]:'';
	if($Smoking == 'on'){
		$SmokingDuration = isSet($_POST["SmokingDuration"])?$_POST["SmokingDuration"]:'';
		if($DCApi->IsItNumber($SmokingDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$SmokingDuration = -1;
	}
	
	$Alcohal = isSet($_POST["Alcohal"])?$_POST["Alcohal"]:'';
	if($Alcohal == 'on'){
		$AlcohalDuration = isSet($_POST["AlcohalDuration"])?$_POST["AlcohalDuration"]:'';
		if($DCApi->IsItNumber($AlcohalDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$AlcohalDuration  = -1;
	}
	
	$Pregnancy  = isSet($_POST["Pregnancy"])?$_POST["Pregnancy"]:'';
	if($Pregnancy == -1){
	}
	else if($DCApi->IsItNumber($Pregnancy) == 0){
		$FormStatus = 0;
	}
			
	$ORComments = isSet($_POST["ORComments"])?$_POST["ORComments"]:'';
?>
<?php
	$DiabetesType          = isSet($_POST["DiabetesType"])?$_POST["DiabetesType"]:'';
	if($DiabetesType == "DiabetesTypeOne"){
		$DiabetesTypeOneDuration  = isSet($_POST["DiabetesTypeOneDuration"])?$_POST["DiabetesTypeOneDuration"]:'';
		$DiabetesTypeTwoDuration   = -1;
		if($DCApi->IsItNumber($DiabetesTypeOneDuration)==0){
			$FormStatus = 0;
		}
	}
	else 
	{
		$DiabetesTypeOneDuration   = -1;
		$DiabetesTypeTwoDuration  = isSet($_POST["DiabetesTypeTwoDuration"])?$_POST["DiabetesTypeTwoDuration"]:'';
		if($DCApi->IsItNumber($DiabetesTypeTwoDuration)==0){
			$FormStatus = 0;
		}
	}
	$DiabetesComments   = isSet($_POST["DiabetesComments"])?$_POST["DiabetesComments"]:'';
?>

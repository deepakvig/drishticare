<?php
		# -1 means nothing is filled
		$HB = isSet($_POST["HB"])?$_POST["HB"]:'';
		if($HB == "on"){
			$HBValue = isSet($_POST["HBValue"])?$_POST["HBValue"]:'';
			if($DCApi->IsItNumber($HBValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$HBValue = -1;
		}
		
		$BloodSugar = isSet($_POST["BloodSugar"])?$_POST["BloodSugar"]:'';
		if($BloodSugar == "on"){
			$BloodSugarValue = isSet($_POST["BloodSugarValue"])?$_POST["BloodSugarValue"]:'';
			if($DCApi->IsItNumber($BloodSugarValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$BloodSugarValue = -1;
		}
		
		$BloodUrea = isSet($_POST["BloodUrea"])?$_POST["BloodUrea"]:'';
		if($BloodUrea == "on"){
			$BloodUreaValue = isSet($_POST["BloodUreaValue"])?$_POST["BloodUreaValue"]:'';
			if($DCApi->IsItNumber($BloodUreaValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$BloodUreaValue = -1;
		}
		
		$SerumCreatinine = isSet($_POST["SerumCreatinine"])?$_POST["SerumCreatinine"]:'';
		if($SerumCreatinine == "on"){
			$SerumCreatinineValue = isSet($_POST["SerumCreatinineValue"])?$_POST["SerumCreatinineValue"]:'';
			if($DCApi->IsItNumber($SerumCreatinineValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$SerumCreatinineValue = -1;
		}
		
		$UrineAlbumin = isSet($_POST["UrineAlbumin"])?$_POST["UrineAlbumin"]:'';
		if($UrineAlbumin == "on"){
			$UrineAlbuminValue = isSet($_POST["UrineAlbuminValue"])?$_POST["UrineAlbuminValue"]:'';
			if($DCApi->IsItNumber($UrineAlbuminValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$UrineAlbuminValue = -1;
		}
		
		$HbAIC = isSet($_POST["HbAIC"])?$_POST["HbAIC"]:'';
		if($HbAIC == "on"){
			$HbAICValue = isSet($_POST["HbAICValue"])?$_POST["HbAICValue"]:'';
			if($DCApi->IsItNumber($HbAICValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$HbAICValue = -1;
		}
		
		$SCholestrol = isSet($_POST["SCholestrol"])?$_POST["SCholestrol"]:'';
		if($SCholestrol == "on"){
			$SCholestrolValue = isSet($_POST["SCholestrolValue"])?$_POST["SCholestrolValue"]:'';
			if($DCApi->IsItNumber($SCholestrolValue) == 0){
					$FormStatus = 0;
			}
		}
		else {
			$SCholestrolValue = -1;
		}
		$BldInvestigationsComments = isSet($_POST["BldInvestigationsComments"])?$_POST["BldInvestigationsComments"]:'';
?>
<?php
	$DBObject  = new DataBase();
	$QueryOne  = 'Insert into patientpersonaldetails values 
					("",
					"",
					"'.$DBObject->EscapeString($PatientID).'",
					"'.$DBObject->EscapeString($PatientFirstName).'",
					"'.$DBObject->EscapeString($PatientLastName).'",
					"'.$DBObject->EscapeString($PatientGender).'",
					"'.$DBObject->EscapeString($PatientAge).'",
					"'.$DBObject->EscapeString($PatientMaritialStatus).'",
					"'.$DBObject->EscapeString($PatientAddress).'",
					"'.$DBObject->EscapeString($PatientCity).'",
					"'.$DBObject->EscapeString($PinCode).'",
					"'.$DBObject->EscapeString($PatientState).'",
					"'.$DBObject->EscapeString($PatientCountry).'",
					"'.$DBObject->EscapeString($PatientPhoneNumber).'")';
					
	$Result    		 = $DBObject->ExecuteQuery($QueryOne);
	$PatientGivenID = $PatientID;
	$XMLStringToBeWritten = "<PatientDetails>";

	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PersonalDetails>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientID>".$PatientID."</PatientID>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientFirstName>".$PatientFirstName."</PatientFirstName>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientLastName>".$PatientLastName."</PatientLastName>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientGender>".$PatientGender."</PatientGender>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientAge>".$PatientAge."</PatientAge>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientMaritialStatus>".$PatientMaritialStatus."</PatientMaritialStatus>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientAddress>".$PatientAddress."</PatientAddress>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientCity>".$PatientCity."</PatientCity>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PinCode>".$PinCode."</PinCode>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientState>".$PatientState."</PatientState>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientCountry>".$PatientCountry."</PatientCountry>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientPhoneNumber>".$PatientPhoneNumber."</PatientPhoneNumber>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</PersonalDetails>";
	
	$Query     		 = 'Select LAST_INSERT_ID()';
	$Result     	 = $DBObject->ExecuteQuery($Query);
	$Result          = $DBObject->FetchResult();
	$PatientID       = $Result[0]["LAST_INSERT_ID()"];
	$PatientHashCode = md5($PatientID);
	$QueryTwo = 'Insert into patientepisodedetails  values
				( "'.$PatientHashCode.'",
				 "'.$CampHashCode.'",
				 "'.$DBObject->EscapeString($PatientEpisodeDate).'",
				 "'.$DBObject->EscapeString($EpisodeComments).'",
				 "'.$DBObject->EscapeString($DBVision).'",
				 "'.$DBObject->EscapeString($Flashes).'",
				 "'.$DBObject->EscapeString($DoubleVision).'")';
				 
	$Result    = $DBObject->ExecuteQuery($QueryTwo);

	$XMLStringToBeWritten = $XMLStringToBeWritten . "<EpisodeDetails>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PatientEpisodeDate>".$PatientEpisodeDate."</PatientEpisodeDate>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<EpisodeComments>".$EpisodeComments."</EpisodeComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DBVision>".$DBVision."</DBVision>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<Flashes>".$Flashes."</Flashes>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DoubleVision>".$DoubleVision."</DoubleVision>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</EpisodeDetails>";
	
	$QueryThree = 'Insert into patientdiabetesstatus values
				( "'.$PatientHashCode.'",
				 "'.$CampHashCode.'",
				 "'.$DBObject->EscapeString($DiabetesTypeOneDuration).'",
				 "'.$DBObject->EscapeString($DiabetesTypeTwoDuration).'",
				 "'.$DBObject->EscapeString($DiabetesComments).'")';
				 
	$Result    = $DBObject->ExecuteQuery($QueryThree);

	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DiabetesStatus>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DiabetesTypeOneDuration>".$DiabetesTypeOneDuration."</DiabetesTypeOneDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DiabetesTypeTwoDuration>".$DiabetesTypeTwoDuration."</DiabetesTypeTwoDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DiabetesComments>".$DiabetesComments."</DiabetesComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</DiabetesStatus>";
	
	$QueryFour = 'Insert into patientmedicaltrmntdetails  values
				( "'.$PatientHashCode.'",
				 "'.$CampHashCode.'",
				 "'.$DBObject->EscapeString($DietControlDuration).'",
				 "'.$DBObject->EscapeString($DietControlPeriod).'",
				 "'.$DBObject->EscapeString($DietControlRemarks).'",
				 "'.$DBObject->EscapeString($InsulinDuration).'",
				 "'.$DBObject->EscapeString($InsulinPeriod).'",
				 "'.$DBObject->EscapeString($InsulinRemarks).'",
				 "'.$DBObject->EscapeString($OHADuration).'",
				 "'.$DBObject->EscapeString($OHAPeriod).'",
				 "'.$DBObject->EscapeString($OHARemarks).'",
				 "'.$DBObject->EscapeString($AltDrugsDuration).'",
				 "'.$DBObject->EscapeString($AltDrugsPeriod).'",
				 "'.$DBObject->EscapeString($AltDrugsRemarks).'",
				 "'.$DBObject->EscapeString($MedicalTrmntComments).'")';
	
	$Result    = $DBObject->ExecuteQuery($QueryFour);

	$XMLStringToBeWritten = $XMLStringToBeWritten . "<MedicalTreatmentDetails>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DietControlDuration>".$DietControlDuration."</DietControlDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DietControlPeriod>".$DietControlPeriod."</DietControlPeriod>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<DietControlRemarks>".$DietControlRemarks."</DietControlRemarks>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<InsulinDuration>".$InsulinDuration."</InsulinDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<InsulinPeriod>".$InsulinPeriod."</InsulinPeriod>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<InsulinRemarks>".$InsulinRemarks."</InsulinRemarks>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<OHADuration>".$OHADuration."</OHADuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<OHAPeriod>".$OHAPeriod."</OHAPeriod>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<OHARemarks>".$OHARemarks."</OHARemarks>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<AltDrugsDuration>".$AltDrugsDuration."</AltDrugsDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<AltDrugsPeriod>".$AltDrugsPeriod."</AltDrugsPeriod>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<AltDrugsRemarks>".$AltDrugsRemarks."</AltDrugsRemarks>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<MedicalTrmntComments>".$MedicalTrmntComments."</MedicalTrmntComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</MedicalTreatmentDetails>";
	
	$QueryFive = 'Insert into patientasidetails values
		( "'.$PatientHashCode.'",
		"'.$CampHashCode.'",
		"'.$DBObject->EscapeString($HyperTensionDuration).'",
		"'.$DBObject->EscapeString($CardiacDiseaseDuration).'",  
		"'.$DBObject->EscapeString($HyperlipidemiaDuration).'",  
		"'.$DBObject->EscapeString($NeuropathyDuration).'",  
		"'.$DBObject->EscapeString($NephropathyDuration).'",  	
		"'.$DBObject->EscapeString($ASIComments).'")';
		
	$Result    = $DBObject->ExecuteQuery($QueryFive);
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<ASIDetails>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<HyperTensionDuration>".$HyperTensionDuration."</HyperTensionDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<CardiacDiseaseDuration>".$CardiacDiseaseDuration."</CardiacDiseaseDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<HyperlipidemiaDuration>".$HyperlipidemiaDuration."</HyperlipidemiaDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<NeuropathyDuration>".$NeuropathyDuration."</NeuropathyDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<NephropathyDuration>".$NephropathyDuration."</NephropathyDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<ASIComments>".$ASIComments."</ASIComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</ASIDetails>";

	$QuerySix = 'Insert into patientotherrisks values
		( "'.$PatientHashCode.'",
		"'.$CampHashCode.'",
		"'.$DBObject->EscapeString($SmokingDuration).'",  
		"'.$DBObject->EscapeString($AlcohalDuration).'",  
		"'.$DBObject->EscapeString($Pregnancy).'",   
		"'.$DBObject->EscapeString($ORComments).'")';
		
	$Result    = $DBObject->ExecuteQuery($QuerySix);
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<OtherRisks>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SmokingDuration>".$SmokingDuration."</SmokingDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<AlcohalDuration>".$AlcohalDuration."</AlcohalDuration>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<Pregnancy>".$Pregnancy."</Pregnancy>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<ORComments>".$ORComments."</ORComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</OtherRisks>";

	$QuerySeven = 'Insert into pasthistoryoculartrtdetails values
		( "'.$PatientHashCode.'",
		"'.$Camphashcode.'",
		"'.$DBObject->EscapeString($LaserLeftEye).'",         
		"'.$DBObject->EscapeString($LaserRightEye).'",         
		"'.$DBObject->EscapeString($SurgeryLeftEye).'",         
		"'.$DBObject->EscapeString($SurgeryRightEye).'",         
		"'.$DBObject->EscapeString($PHOTComments).'")';
	
	
	$Result    = $DBObject->ExecuteQuery($QuerySeven);
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<OcularTreatmentDetails>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<LaserLeftEye>".$LaserLeftEye."</LaserLeftEye>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<LaserRightEye>".$LaserRightEye."</LaserRightEye>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SurgeryLeftEye>".$SurgeryLeftEye."</SurgeryLeftEye>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SurgeryRightEye>".$SurgeryRightEye."</SurgeryRightEye>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PHOTComments>".$PHOTComments."</PHOTComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</OcularTreatmentDetails>";

	$QueryEight = 'Insert into patientbldinvestigations values
		( "'.$PatientHashCode.'",
		"'.$CampHashCode.'",
		"'.$DBObject->EscapeString($HBValue).'",      
		"'.$DBObject->EscapeString($BloodSugarValue).'",      
		"'.$DBObject->EscapeString($BloodUreaValue).'",      
		"'.$DBObject->EscapeString($SerumCreatinineValue).'",      
		"'.$DBObject->EscapeString($UrineAlbuminValue).'",      
		"'.$DBObject->EscapeString($HbAICValue).'",      
		"'.$DBObject->EscapeString($SCholestrolValue).'",      
		"'.$DBObject->EscapeString($BldInvestigationsComments).'")';
	
	$Result    = $DBObject->ExecuteQuery($QueryEight);
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<BloodInvestigations>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<HBValue>".$HBValue."</HBValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<BloodSugarValue>".$BloodSugarValue."</BloodSugarValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<BloodUreaValue>".$BloodUreaValue."</BloodUreaValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SerumCreatinineValue>".$SerumCreatinineValue."</SerumCreatinineValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<UrineAlbuminValue>".$UrineAlbuminValue."</UrineAlbuminValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<HbAICValue>".$HbAICValue."</HbAICValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SCholestrolValue>".$SCholestrolValue."</SCholestrolValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<BldInvestigationsComments>".$BldInvestigationsComments."</BldInvestigationsComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</BloodInvestigations>";

	$QueryNine = 'Insert into patientslexamination values
		( "'.$PatientHashCode.'",
		"'.$CampHashCode.'",
		"'.$DBObject->EscapeString($NBCValue).'",        
		"'.$DBObject->EscapeString($PBCValue).'",        
		"'.$DBObject->EscapeString($CartractValue).'",  
		"'.$DBObject->EscapeString($SLExaminationComments).'")';
		
		
	$Result    = $DBObject->ExecuteQuery($QueryNine);
	$QueryTen  = 'Update patientpersonaldetails set PatientHashCode = "'.$PatientHashCode.'"  Where PatientID="'.$PatientID.'"';
	$Result    = $DBObject->ExecuteInsertOrUpdate($QueryTen);
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SLExamination>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<NBCValue>".$NBCValue."</NBCValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<PBCValue>".$PBCValue."</PBCValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<CartractValue>".$CartractValue."</CartractValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<SLExaminationComments>".$SLExaminationComments."</SLExaminationComments>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</SLExamination>";

	$QueryEleven  = 'Insert into patientstatus  values
					( "'.$PatientHashCode.'",
					"'.$CampHashCode.'",
					"not received",  
					"Pending",  
					"Pending")';
		
	$Result    = $DBObject->ExecuteInsertOrUpdate($QueryEleven);

	$QueryTwelve  = 'Insert into patientsvisualstatus values
					( "'.$PatientHashCode.'",
					"'.$CampHashCode.'",
					"'.$DBObject->EscapeString($LeftEyeVisualWithoutGlassesValue).'",        
					"'.$DBObject->EscapeString($RightEyeVisualWithoutGlassesValue).'",        
					"'.$DBObject->EscapeString($LeftEyeVisualWithGlassesValue).'",  
					"'.$DBObject->EscapeString($RightEyeVisualWithGlassesValue).'",
					"'.$DBObject->EscapeString($LeftEyeMediaOpacityValue).'",        
					"'.$DBObject->EscapeString($RightEyeMediaOpacityValue).'")';
		
	$Result    = $DBObject->ExecuteInsertOrUpdate($QueryTwelve);

	$XMLStringToBeWritten = $XMLStringToBeWritten . "<VisualStatus>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<LeftEyeVisualWithoutGlassesValue>".$LeftEyeVisualWithoutGlassesValue."</LeftEyeVisualWithoutGlassesValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<RightEyeVisualWithoutGlassesValue>".$RightEyeVisualWithoutGlassesValue."</RightEyeVisualWithoutGlassesValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<LeftEyeVisualWithGlassesValue>".$LeftEyeVisualWithGlassesValue."</LeftEyeVisualWithGlassesValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<RightEyeVisualWithGlassesValue>".$RightEyeVisualWithGlassesValue."</RightEyeVisualWithGlassesValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "<LeftEyeMediaOpacityValue>".$LeftEyeMediaOpacityValue."</LeftEyeMediaOpacityValue>";
	$xmlstringtobewritten = $xmlstringtobewritten . "<RightEyeMediaOpacityValue>".$RightEyeMediaOpacityValue."</RightEyeMediaOpacityValue>";
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</VisualStatus>";
	
	$XMLStringToBeWritten = $XMLStringToBeWritten . "</PatientDetails>";

	
	 $SessionObject = new Session();
         $DCApi = new DCApi();

         #Checking for Valid Session

         if($SessionObject->CheckValidSession("DRC")==0){

                 break;
         }
	$CampID = $DCApi->GetCampID($CampHashCode);
	$UserName = $SessionObject->GetData("LoginName");
	$DRCDir             = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName;
        $FirstMainDir       = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID;
        $SecondMainDir      = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientGivenID;
        $FilePath      = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientGivenID."/PatientDetails.xml";
	
	if(!is_dir($DRCDir)){
                system('mkdir  '.$DRCDir,$RetVal);
                system('chmod -R 777  '.$DRCDir,$RetVal);

        }
        if(!is_dir($FirstMainDir)){
                system('mkdir  '.$FirstMainDir,$RetVal);
                system('chmod -R 777  '.$FirstMainDir,$RetVal);

        }
        if(!is_dir($SecondMainDir)){
                system('mkdir  '.$SecondMainDir,$RetVal);
                system('chmod -R 777  '.$SecondMainDir,$RetVal);
        }
	$file=fopen($FilePath,"a+");
        fwrite($file,"<?xml version=\"1.0\" encoding='ISO-8859-1'?>". $XMLStringToBeWritten);
        fclose($file);
	$FilePath = "";
?>

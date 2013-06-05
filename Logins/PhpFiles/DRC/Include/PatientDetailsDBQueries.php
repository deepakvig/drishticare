<?php		
				$Query  = 'Select * from patientsvisualstatus where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
                                $Result = $DBObject->ExecuteQuery($Query);
                                $Result = $DBObject->FetchResult();

				$LeftEyeVisualWithoutGlassesValue  = ($Result[0]["LeftEyeVisualWithoutGlassesValue"]!="")?$Result[0]["LeftEyeVisualWithoutGlassesValue"]:'Not Given';
				$RightEyeVisualWithoutGlassesValue = ($Result[0]["RightEyeVisualWithoutGlassesValue"]!="")?$Result[0]["RightEyeVisualWithoutGlassesValue"]:'Not Given';
				$LeftEyeVisualWithGlassesValue     = ($Result[0]["LeftEyeVisualWithGlassesValue"]!="")?$Result[0]["LeftEyeVisualWithGlassesValue"]:'Not Given';
				$RightEyeVisualWithGlassesValue    = ($Result[0]["RightEyeVisualWithGlassesValue"]!="")?$Result[0]["RightEyeVisualWithGlassesValue"]:'Not Given';
				$LeftEyeMediaOpacityValue          = ($Result[0]["LeftEyeMediaOpacityValue"]!="")?$Result[0]["LeftEyeMediaOpacityValue"]:'Not Given';
				$RightEyeMediaOpacityValue         = ($Result[0]["RightEyeMediaOpacityValue"]!="")?$Result[0]["RightEyeMediaOpacityValue"]:'Not Given';



				
				$Query  = 'Select * from patientepisodedetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$PatientEpisodeDate = $Result[0]["PatientEpisodeDate"];
				$EpisodeComments    = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
				$DBVision           = $Result[0]["DBVision"]=="on"?"Yes":"No";
				$Flashes            = $Result[0]["Flashes"]=="on"?"Yes":"No";
				$DoubleVision       = $Result[0]["DoubleVision"]=="on"?"Yes":"No";
				
				$Query  = 'Select * from patientdiabetesstatus where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				$DiabetesTypeOneDuration = $Result[0]["TypeOneDuration"];
				$DiabetesTypeTwoDuration = $Result[0]["TypeTwoDuration"];
				$DiabetesComments        = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
				$DiabetesType            = $DiabetesTypeOneDuration == "-1" ? "Type Two":"Type One";
				$DiabetesDuration        = $DiabetesTypeOneDuration == "-1" ? $DiabetesTypeTwoDuration:$DiabetesTypeOneDuration;
				$PatHashCode = $DBObject->EscapeString($PatientHashCode);
				
				
				$Query  = 'Select * from patientmedicaltrmntdetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$DietControlDuration  = $Result[0]["DietControlDuration"]=="-1"?"N/A":$Result[0]["DietControlDuration"];
				$DietControlPeriod    = $Result[0]["DietControlDuration"]=="-1"?"N/A":$Result[0]["DietControlPeriod"];
				$DietControlRemarks   = $Result[0]["DietControlDuration"]=="-1"?"N/A":$Result[0]["DietControlRemarks"];
				$InsulinDuration      = $Result[0]["InsulinDuration"]=="-1"?"N/A":$Result[0]["InsulinDuration"];
				$InsulinPeriod	      = $Result[0]["InsulinDuration"]=="-1"?"N/A":$Result[0]["InsulinPeriod"];
				$InsulinRemarks	      = $Result[0]["InsulinDuration"]=="-1"?"N/A":$Result[0]["InsulinRemarks"];
				$OHADuration          = $Result[0]["OHADuration"]=="-1"?"N/A":$Result[0]["OHADuration"];
				$OHAPeriod            = $Result[0]["OHADuration"]=="-1"?"N/A":$Result[0]["OHAPeriod"];
				$OHARemarks           = $Result[0]["OHADuration"]=="-1"?"N/A":$Result[0]["OHARemarks"];
				$AltDrugsDuration     = $Result[0]["AltDrugsDuration"]=="-1"?"N/A":$Result[0]["AltDrugsDuration"];
				$AltDrugsPeriod       = $Result[0]["AltDrugsDuration"]=="-1"?"N/A":$Result[0]["AltDrugsPeriod"];
				$AltDrugsRemarks      = $Result[0]["AltDrugsDuration"]=="-1"?"N/A":$Result[0]["AltDrugsRemarks"];
				$MedicalTrmntComments = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
				
				$Query  = 'Select * from patientasidetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$HyperTensionDuration    = $Result[0]["HyperTensionDuration"]=="-1"?"N/A":$Result[0]["HyperTensionDuration"];
				$CardiacDiseaseDuration  = $Result[0]["CardiacDiseaseDuration"]=="-1"?"N/A":$Result[0]["CardiacDiseaseDuration"];
				$HyperlipidemiaDuration  = $Result[0]["HyperlipidemiaDuration"]=="-1"?"N/A":$Result[0]["HyperlipidemiaDuration"];
				$NeuropathyDuration      = $Result[0]["NeuropathyDuration"]=="-1"?"N/A":$Result[0]["NeuropathyDuration"];
				$NephropathyDuration  	 = $Result[0]["NephropathyDuration"]=="-1"?"N/A":$Result[0]["NephropathyDuration"];
				$ASIComments             = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
			
				$Query  = 'Select * from patientotherrisks where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				
				$SmokingDuration  = $Result[0]["SmokingDuration"]=="-1"?"N/A":$Result[0]["SmokingDuration"];
				$AlcohalDuration  = $Result[0]["AlcohalDuration"]=="-1"?"N/A":$Result[0]["AlcohalDuration"];
				$Pregnancy        = $Result[0]["Pregnancy"]=="-1"?"N/A":$Result[0]["Pregnancy"];
				$ORComments       = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
		
				$Query  = 'Select * from pasthistoryoculartrtdetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$LaserLeftEye     = $Result[0]["LaserLeftEye"];
				$LaserRightEye    = $Result[0]["LaserRightEye"];

				$SurgeryLeftEye   = $Result[0]["SurgeryLeftEye"];
				$SurgeryRightEye  = $Result[0]["SurgeryRightEye"];

				$PHOTComments     = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
				$LaserOutput = "";
				$LaserState = "0";

				if($LaserLeftEye == "on"){
					$LaserState = "1";
					$LaserOutput = "Left Eye |";

				}
				if($LaserRightEye == "on"){
					$LaserState = "1";
					$LaserOutput = "Right Eye";
				}
				if($LaserState == "0"){
					$LaserOutput = "None";
				}

				
				$SurgeryOutput = "";
				$SurgeryState = "0";

				if($SurgeryLeftEye == "on"){
					$SurgeryState = "1";
					$SurgeryOutput = "Left Eye |";

				}
				if($SurgeryRightEye == "on"){
					$SurgeryState = "1";
					$SurgeryOutput = "RightEye";
				}
				if($SurgeryState == "0"){
					$SurgeryOutput = "None";
				}

				$Query  = 'Select * from patientbldinvestigations where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
			
				$HBValue               		= $Result[0]["HBValue"]=="-1"?"N/A":$Result[0]["HBValue"];
				$BloodSugarValue       		= $Result[0]["BloodSugarValue"]=="-1"?"N/A":$Result[0]["BloodSugarValue"];
				$BloodUreaValue       		= $Result[0]["BloodUreaValue"]=="-1"?"N/A":$Result[0]["BloodUreaValue"];
				$SerumCreatinineValue  		= $Result[0]["SerumCreatinineValue"]=="-1"?"N/A":$Result[0]["SerumCreatinineValue"];
				$UrineAlbuminValue     		= $Result[0]["UrineAlbuminValue"]=="-1"?"N/A":$Result[0]["UrineAlbuminValue"];
				$HbAICValue      	        = $Result[0]["HbAICValue"]=="-1"?"N/A":$Result[0]["HbAICValue"];
				$SCholestrolValue               = $Result[0]["SCholestrolValue"]=="-1"?"N/A":$Result[0]["SCholestrolValue"];
				$BldInvestigationsComments      = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
 	
				$Query  = 'Select * from patientslexamination where patienthashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$NBCValue               = $Result[0]["NBC"]=="-1"?"N/A":$Result[0]["NBC"];
				$PBCValue               = $Result[0]["PBC"]=="-1"?"N/A":$Result[0]["PBC"];
				$CartractValue          = $Result[0]["Cartract"]=="-1"?"N/A":$Result[0]["Cartract"];
				$SLExaminationComments  = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
				
				$Query  = 'Select * from patientstatus where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
				$Result = $DBObject->ExecuteQuery($Query);
				$Result = $DBObject->FetchResult();
				
				$PatientReportStatus = $Result[0]["PatientReportStatus"];

				$PatientLeftEyeImageStatus  = $Result[0]["PatientLeftEyeImageStatus"];
				$PatientRightEyeImageStatus  = $Result[0]["PatientRightEyeImageStatus"];
				if($PatientRightEyeImageStatus == "Pending" or $PatientLeftEyeImageStatus == "Pending"){
					$UserName = $SessionObject->GetData("LoginName");
					$PatientID = $DCApi->GetPatientID($PatientHashCode);
				        $CampID    = $DCApi->GetCampID($CampHashCode);
					$FilePath  = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/left/".$CampID."_".$PatientID.".xml";
					$FilePath1  = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/left/".$CampID."_".$PatientID.".xml";
					if(file_exists($FilePath) && file_exists($FilePath1))
					{
						$PatientImageStatus = "View Images";
						 $Query = '
                                Update patientstatus set PatientRightEyeImageStatus = "Completed"
                                Where
                                PatientHashCode="'.$PatientHashCode.'"
                                and
                                CampHashCode="'.$CampHashCode.'"';
			                        $Result     = $DBObject->ExecuteQuery($Query);
						 $Query = '
                                Update patientstatus set PatientLeftEyeImageStatus = "Completed"
                                Where
                                PatientHashCode="'.$PatientHashCode.'"
                                and
                                CampHashCode="'.$CampHashCode.'"';
			                        $Result     = $DBObject->ExecuteQuery($Query);

					}
					else
						$PatientImageStatus = "Images Upload Pending";
				}
				else {
					$PatientImageStatus = "View Images";
				}
				$DBObject->CloseDataBaseConnection();
?>

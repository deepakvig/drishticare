<?php
	$DBObject = new DataBase();

        $CampHashCode    = isSet($_REQUEST["CampID"])?$_REQUEST["CampID"]:'';
	$PatientHashCode = isSet($_REQUEST["PatientID"])?$_REQUEST["PatientID"]:'';
	$XMLOutput  = isSet($_REQUEST["XMLOutput"])?$_REQUEST["XMLOutput"]:'No';
	$DRCUserName  = isSet($_REQUEST["DRCUserName"])?$_REQUEST["DRCUserName"]:'No';

	$FilePath = "/home/deepakvig/web168/web/DCare/Uploads/".$DRCUserName."/".$CampHashCode."/".$PatientHashCode."/"."Markings.xml";

	if(is_file($FilePath)){
		system('mv '.$FilePath.' '.'/home/deepakvig/web168/web/DCare/Uploads/'.$DRCUserName.'/'.$CampHashCode.'/'.$PatientHashCode.'/'.'Markings_BackUp.xml');
	}
	$file=fopen($FilePath,"a+");
        fwrite($file, $XMLOutput);
        fclose($file);

	$Result         = $DBObject->ExecuteQuery("Select * from patientpersonaldetails Where PatientGivenID='".$DBObject->EscapeString($PatientHashCode)."'");
	$PatientDetails = $DBObject->FetchResult();


	$PatientHashCode = $PatientDetails[0]["PatientHashCode"];
	$CampHashCode    = md5($CampHashCode);


        $LeftEyeImageGradable  = isSet($_REQUEST["LeftEyeImageGradable"])?$_REQUEST["LeftEyeImageGradable"]:'No';
        $LeftEyeNormal         = isSet($_REQUEST["LeftEyeNormal"])?$_REQUEST["LeftEyeNormal"]:'No';
        $LeftEyeMildNPDR       = isSet($_REQUEST["LeftEyeMildNPDR"])?$_REQUEST["LeftEyeMildNPDR"]:'No';
        $LeftEyeModerateNPDR   = isSet($_REQUEST["LeftEyeModerateNPDR"])?$_REQUEST["LeftEyeModerateNPDR"]:'No';
        $LeftEyeSevereNPDR     = isSet($_REQUEST["LeftEyeSevereNPDR"])?$_REQUEST["LeftEyeSevereNPDR"]:'No';
        $LeftEyeEarlyPDR       = isSet($_REQUEST["LeftEyeEarlyPDR"])?$_REQUEST["LeftEyeEarlyPDR"]:'No';
        $LeftEyeHighRiskPDR    = isSet($_REQUEST["LeftEyeHighRiskPDR"])?$_REQUEST["LeftEyeHighRiskPDR"]:'No';
        $LeftEyeAdvancedPDR    = isSet($_REQUEST["LeftEyeAdvancedPDR"])?$_REQUEST["LeftEyeAdvancedPDR"]:'No';
        $LeftEyeCSMEPresent    = isSet($_REQUEST["LeftEyeCSMEPresent"])?$_REQUEST["LeftEyeCSMEPresent"]:'No';
        $RightEyeImageGradable = isSet($_REQUEST["RightEyeImageGradable"])?$_REQUEST["RightEyeImageGradable"]:'No';
        $RightEyeNormal        = isSet($_REQUEST["RightEyeNormal"])?$_REQUEST["RightEyeNormal"]:'No';
        $RightEyeMildNPDR      = isSet($_REQUEST["RightEyeMildNPDR"])?$_REQUEST["RightEyeMildNPDR"]:'No';
        $RightEyeModerateNPDR  = isSet($_REQUEST["RightEyeModerateNPDR"])?$_REQUEST["RightEyeModerateNPDR"]:'No';
        $RightEyeSevereNPDR    = isSet($_REQUEST["RightEyeSevereNPDR"])?$_REQUEST["RightEyeSevereNPDR"]:'No';
        $RightEyeEarlyPDR      = isSet($_REQUEST["RightEyeEarlyPDR"])?$_REQUEST["RightEyeEarlyPDR"]:'No';
        $RightEyeHighRiskPDR   = isSet($_REQUEST["RightEyeHighRiskPDR"])?$_REQUEST["RightEyeHighRiskPDR"]:'No';
        $RightEyeAdvancedPDR   = isSet($_REQUEST["RightEyeAdvancedPDR"])?$_REQUEST["RightEyeAdvancedPDR"]:'No';
        $RightEyeCSMEPresent   = isSet($_REQUEST["RightEyeCSMEPresent"])?$_REQUEST["RightEyeCSMEPresent"]:'No';
        $ReportStatus          = isSet($_REQUEST["ReportStatus"])?$_REQUEST["ReportStatus"]:'not received';

	$Query   = 'Delete 
			from
			patientreport 
			Where
			PatientHashCode="'.$DBObject->EscapeString($PatientHashCode).'"
			and
			CampHashCode="'.$DBObject->EscapeString($CampHashCode).'"';

	$Result  = $DBObject->ExecuteQuery($Query);




        $Query ='Insert
                        Into
                        patientreport
                        Values
                        (
                        "'.$DBObject->EscapeString($PatientHashCode).'",
                        "'.$DBObject->EscapeString($CampHashCode).'",
		        "'.$DBObject->EscapeString($LeftEyeImageGradable).'",  
		        "'.$DBObject->EscapeString($LeftEyeNormal).'",         
		        "'.$DBObject->EscapeString($LeftEyeMildNPDR).'",       
		        "'.$DBObject->EscapeString($LeftEyeModerateNPDR).'",   
		        "'.$DBObject->EscapeString($LeftEyeSevereNPDR).'",     
		        "'.$DBObject->EscapeString($LeftEyeEarlyPDR).'",       
		        "'.$DBObject->EscapeString($LeftEyeHighRiskPDR).'",    
		        "'.$DBObject->EscapeString($LeftEyeAdvancedPDR).'",    
		        "'.$DBObject->EscapeString($LeftEyeCSMEPresent).'",    
		        "'.$DBObject->EscapeString($RightEyeImageGradable).'", 
		        "'.$DBObject->EscapeString($RightEyeNormal).'",        
		        "'.$DBObject->EscapeString($RightEyeMildNPDR).'",      
		        "'.$DBObject->EscapeString($RightEyeModerateNPDR).'",  
		        "'.$DBObject->EscapeString($RightEyeSevereNPDR).'",    
		        "'.$DBObject->EscapeString($RightEyeEarlyPDR).'",      
		        "'.$DBObject->EscapeString($RightEyeHighRiskPDR).'",   
		        "'.$DBObject->EscapeString($RightEyeAdvancedPDR).'",   
		        "'.$DBObject->EscapeString($RightEyeCSMEPresent).'"
		)';

	$Result  = $DBObject->ExecuteQuery($Query);

	$Query   = 'Update 
			patientstatus
			Set PatientReportStatus="'.$DBObject->EscapeString($ReportStatus).'"
			Where
			PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" 
			and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';



	$Result  = $DBObject->ExecuteQuery($Query);
	$DBObject->CloseDataBaseConnection();
	echo '<result>Done</result>';

?>
	

<?php
$DBObject = new DataBase();
$Result        = $DBObject->ExecuteQuery("Select * from ExpertDetails Where ExpertHashCode='".md5($UserName)."'");
$ExpertDetails = $DBObject->FetchResult();


$Result     = $DBObject->ExecuteQuery("Select Count(*) from patientstatus Where PatientLeftEyeImageStatus='Completed' and PatientRightEyeImageStatus='Completed'");
$TotalCount = $DBObject->FetchResult();

$Result      = $DBObject->ExecuteQuery("Select Count(*) from patientstatus Where PatientReportStatus='not received' and PatientLeftEyeImageStatus='Completed' and PatientRightEyeImageStatus='Completed'");
$UnreadCount = $DBObject->FetchResult();

$Start       = isSet($_GET["start"])?$_GET["start"]:1;
$XMLOutput = '
<inbox>
    <drName>'.$ExpertDetails[0]["ExpertName"].'</drName>   
    <qualification>'.$ExpertDetails[0]["ExpertQualification"].'</qualification>                                         
    <extra>'.$ExpertDetails[0]["ExpertSpecialization"].'</extra>      
    <affilation>'.$ExpertDetails[0]["ExpertAffilation"].'</affilation>         
    <no>'.$TotalCount[0]["Count(*)"].'</no>  
    <unread>'.$UnreadCount[0]["Count(*)"].'</unread>                                                                        
    <start>'.$Start.'</start>';              
$Result         = $DBObject->ExecuteQuery("Select * from patientstatus Where PatientLeftEyeImageStatus='Completed' and PatientRightEyeImageStatus='Completed'");
$PatientStatus  = $DBObject->FetchResult();


$FinalCounter        = 0;
for($iter1=($Start-1) ; $iter1<count($PatientStatus) ; $iter1++){
	if($FinalCounter == 10){
		break;
	}

        $iter = count($PatientStatus) - $iter1 - 1;

        $Result         = $DBObject->ExecuteQuery("Select * from patientpersonaldetails where PatientHashCode='".$PatientStatus[$iter]["PatientHashCode"]."'");
        $PatientDetails = $DBObject->FetchResult();
	
	$Result                = $DBObject->ExecuteQuery("Select * from patientepisodedetails where PatientHashCode='".$PatientStatus[$iter]["PatientHashCode"]."' and CampHashCode='".$PatientStatus[$iter]["CampHashCode"]."'");
        $PatientEpisodeDetails = $DBObject->FetchResult();

	$Result     = $DBObject->ExecuteQuery("Select * from drcdetails Where DRCHashCode in (Select FirstEntity from dcmapping Where SecondEntity='".$PatientStatus[$iter]["CampHashCode"]."' and WhatIsFirst ='Dc' and WhatIsSecond='Cm')"); 
	$DRCDetails = $DBObject->FetchResult();

	$Result      = $DBObject->ExecuteQuery("Select * from campdetails Where CampHashCode='".$PatientStatus[$iter]["CampHashCode"]."'");
	$CampDetails = $DBObject->FetchResult();
	
	$Result        = $DBObject->ExecuteQuery("Select * from patientdiabetesstatus where PatientHashCode='".$PatientStatus[$iter]["PatientHashCode"]."' and CampHashCode='".$PatientStatus[$iter]["CampHashCode"]."'");
	$DiabetesDetails = $DBObject->FetchResult();
	$DiabetesTypeOneDuration = $DiabetesDetails[0]["TypeOneDuration"];
	$DiabetesTypeTwoDuration = $DiabetesDetails[0]["TypeTwoDuration"];
	$DiabetesType            = $DiabetesTypeOneDuration == "-1" ? "Type Two":"Type One";

	$FilePathLeft  = "/home/deepakvig/web168/web/DCare/Uploads/".$DRCDetails[0]["DRCUserName"]."/".$CampDetails[0]["CampID"]."/".$PatientDetails[0]["PatientGivenID"]."/left/".$CampDetails[0]["CampID"]."_".$PatientDetails[0]["PatientGivenID"].".xml";
	$FilePathRight = "/home/deepakvig/web168/web/DCare/Uploads/".$DRCDetails[0]["DRCUserName"]."/".$CampDetails[0]["CampID"]."/".$PatientDetails[0]["PatientGivenID"]."/right/".$CampDetails[0]["CampID"]."_".$PatientDetails[0]["PatientGivenID"].".xml";

	if($PatientStatus[$iter]["PatientRightEyeImageStatus"] == 'Pending' || $PatientStatus[$iter]["PatientRightEyeImageStatus"] == 'Pending'){
		continue;
	}

	$FinalCounter   = $FinalCounter  + 1;


	$State = 0;
	if(!is_file($FilePathLeft)){
		$State = 1;
	}
	
	if($State == 0){
		if(filesize($FilePathLeft) == 0 ){
			$State = 1;
		}
	}

	$Counter = 1;
	$XMLImageOutput = "";
	if($State == 0){
	        $fh = fopen($FilePathLeft, 'r');
        	$ImageData = fread($fh, filesize($FilePathLeft));

	        $ImageData = "
       		 <Images>
               		 ".$ImageData."
	        </Images>";
	        fclose($fh);
       		$XML = simplexml_load_string($ImageData);



	        foreach ($XML->ImageDetails as $Record)
	        {
			 $Tag     = "leftEyeImage".$Counter;
			 $Counter = $Counter + 1;

        	         $XMLImageOutput = $XMLImageOutput."
					<".$Tag.">".$Record->attributes()->src."</".$Tag.">";
	        }
	}
	
	for($i=($Counter) ; $i <= 6 ; $i++){
		$Tag     = "leftEyeImage".$Counter;
		$Counter = $Counter + 1;

                $XMLImageOutput = $XMLImageOutput."
				<".$Tag.">none</".$Tag.">";
	}
        $State = 0;
        if(!is_file($FilePathRight)){
                $State = 1;
        }
	if($State == 0){
	        if(filesize($FilePathRight) == 0 ){
        	        $State = 1;
        	}
	}	

        $Counter = 1;
	
	if($State == 0){
		$fh = fopen($FilePathRight, 'r');
	        $ImageData = fread($fh, filesize($FilePathRight));

       		$ImageData = "
	        <Images>
       		         ".$ImageData."
	        </Images>";
        	fclose($fh);
	        $XML = simplexml_load_string($ImageData);



        	foreach ($XML->ImageDetails as $Record)
	        {
			 $Tag     = "rightEyeImage".$Counter;
			 $Counter = $Counter + 1;

        	         $XMLImageOutput = $XMLImageOutput."
					<".$Tag.">".$Record->attributes()->src."</".$Tag.">";
	        }
	}
	for($i=($Counter) ; $i <= 6 ; $i++){
		$Tag     = "rightEyeImage".$Counter;
		$Counter = $Counter + 1;

                $XMLImageOutput = $XMLImageOutput."
				<".$Tag.">none</".$Tag.">";
	}

	if($PatientStatus[$iter]["PatientReportStatus"] == 'not received'){
		$Status = 'p';
	}
	else if($PatientStatus[$iter]["PatientReportStatus"] == 'completed'){
		$Status = 's';
	}
	if($InboxType == 's' && $Status == 'p'){
		continue;
	}

	if($InboxType == 'p' && $Status == 's'){
		continue;
	}
        $XMLOutput =$XMLOutput.'
	    <details>    
        		<pid>'.$PatientDetails[0]["PatientGivenID"].'</pid>        
			<diabetesType>'.$DiabetesType.'</diabetesType>
		        <gender>'.$PatientDetails[0]["PatientGender"].'</gender>                       
		        <age>'.$PatientDetails[0]["PatientAge"].'</age>                              
		        <source>'.$DRCDetails[0]["DRCUserName"].'</source>
		        <date>'.$PatientEpisodeDetails[0]["PatientEpisodeDate"].'</date>                  
			<campid>'.$CampDetails[0]["CampID"].'</campid>
		        <status>'.$Status.'</status>
			'.$XMLImageOutput.'
	    </details>';
}
$DBObject->CloseDataBaseConnection();
echo $XMLOutput.'
</inbox>';
?>

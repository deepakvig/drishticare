<?php

$DBObject = new DataBase();
$CampHashCode    = isSet($_GET["CampID"])?$_GET["CampID"]:'';
$PatientHashCode = isSet($_GET["PatientID"])?$_GET["PatientID"]:'';

$Result         = $DBObject->ExecuteQuery("Select * from patientpersonaldetails Where PatientGivenID='".$DBObject->EscapeString($PatientHashCode)."'");
$PatientDetails = $DBObject->FetchResult();


$PatientHashCode = $PatientDetails[0]["PatientHashCode"];
$CampHashCode    = md5($CampHashCode);



$Query  = 'Select * from patientdiabetesstatus where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
$Result = $DBObject->ExecuteQuery($Query);
$Result = $DBObject->FetchResult();



$DiabetesTypeOneDuration = $Result[0]["TypeOneDuration"];
$DiabetesTypeTwoDuration = $Result[0]["TypeTwoDuration"];
$DiabetesComments        = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
$DiabetesType            = $DiabetesTypeOneDuration == "-1" ? "Type Two":"Type One";
$DiabetesDuration        = $DiabetesTypeOneDuration == "-1" ? $DiabetesTypeTwoDuration:$DiabetesTypeOneDuration;

$Query  = 'Select * from patientbldinvestigations where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
$Result = $DBObject->ExecuteQuery($Query);
$Result = $DBObject->FetchResult();


$HBValue                        = $Result[0]["HBValue"]=="-1"?"N/A":$Result[0]["HBValue"];
$BloodSugarValue                = $Result[0]["BloodSugarValue"]=="-1"?"N/A":$Result[0]["BloodSugarValue"];
$BloodUreaValue                 = $Result[0]["BloodUreaValue"]=="-1"?"N/A":$Result[0]["BloodUreaValue"];
$SerumCreatinineValue           = $Result[0]["SerumCreatinineValue"]=="-1"?"N/A":$Result[0]["SerumCreatinineValue"];
$UrineAlbuminValue              = $Result[0]["UrineAlbuminValue"]=="-1"?"N/A":$Result[0]["UrineAlbuminValue"];
$HbAICValue                     = $Result[0]["HbAICValue"]=="-1"?"N/A":$Result[0]["HbAICValue"];
$SCholestrolValue               = $Result[0]["SCholestrolValue"]=="-1"?"N/A":$Result[0]["SCholestrolValue"];


$Query  = 'Select * from patientepisodedetails where PatientHashCode = "'.$DBObject->EscapeString($PatientHashCode).'" and CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"';
$Result = $DBObject->ExecuteQuery($Query);
$Result = $DBObject->FetchResult();


$PatientEpisodeDate = $Result[0]["PatientEpisodeDate"];
$EpisodeComments    = $Result[0]["Comments"]==""?"No Comments":$Result[0]["Comments"];
$DBVision           = $Result[0]["DBVision"]=="on"?"Yes":"No";
$Flashes            = $Result[0]["Flashes"]=="on"?"Yes":"No";
$DoubleVision       = $Result[0]["DoubleVision"]=="on"?"Yes":"No";


$XMLOutput = '
<PatientDetails>
    <PatientName>'.$PatientDetails[0]["PatientFirstName"].' '.$PatientDetails[0]["PatientLastName"].'</PatientName>  
    <PatientAge>'.$PatientDetails[0]["PatientAge"].'</PatientAge>  
    <PatientGender>'.$PatientDetails[0]["PatientGender"].'</PatientGender>  
    <DecreasedVision>'.$DBVision.'</DecreasedVision>  
    <Flashes>'.$Flashes.'</Flashes>  
    <DoubleVision>'.$DoubleVision.'</DoubleVision>  
    <Others>'.$EpisodeComments.'</Others>  
    <DiabetesType>'.$DiabetesType.'</DiabetesType>  
    <DiabetesDuration>'.$DiabetesDuration.'</DiabetesDuration>  
    <HBValue>'.$HBValue.'</HBValue>  
    <BloodSugarValue>'.$BloodSugarValue.'</BloodSugarValue>  	
    <BloodUreaValue>'.$BloodUreaValue.'</BloodUreaValue>  	
    <SerumCreatinineValue>'.$SerumCreatinineValue.'</SerumCreatinineValue>
    <UrineAlbuminValue>'.$UrineAlbuminValue.'</UrineAlbuminValue>
    <HbAICValue>'.$HbAICValue.'</HbAICValue>
    <SCholestrolValue>'.$SCholestrolValue.'</SCholestrolValue>
</PatientDetails>';

$DBObject->CloseDataBaseConnection();


echo $XMLOutput;
?>


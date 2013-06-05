
<?php
$myFile = "/home/deepakvig/web168/web/testFile.txt";
$fh = fopen($myFile, 'a') or die("can't open file");
$stringData = "New Stuff 1\n";
fwrite($fh, $stringData);
$stringData = "New Stuff 2\n";
fwrite($fh, $stringData);
fclose($fh);

?>
<?php

include"/home/deepakvig/web168/web/DCare/Include/Include.php";

$SessionID    = isSet($_REQUEST["SessionID"])?$_REQUEST["SessionID"]:'';
$SessionID    = isSet($_REQUEST["SessionID"])?$_REQUEST["SessionID"]:'';
$CampHashCode = isSet($_REQUEST["CampHashCode"])?$_REQUEST["CampHashCode"]:'';
session_id($SessionID);
$FileLength  = isSet($_REQUEST["FileLength"])?$_REQUEST["FileLength"]:'Himanshu';


$errors = array();
$data = "";
$success = "false";

function return_result($success,$errors,$data) {
	echo("<?xml version=\"1.0\" encoding=\"utf-8\"?>");	
	?>
	<results>
	<success><?php $success;?></success>
	<?php $data;?>
	<?php echo_errors($errors);?>
	</results>
	<?php
}
function GetCount($ImageXMLFile){
	if(!is_file($ImageXMLFile)){
		return 0;
	}
	$fh = fopen($ImageXMLFile, 'r');
	$ImageData = fread($fh, filesize($ImageXMLFile));
	$ImageData = "
		<Images>
		        ".$ImageData."
		</Images>";
	fclose($fh);
	$XML = simplexml_load_string($ImageData);
	$Counter = 0;
	foreach ($XML->ImageDetails as $Record)
	{
		        $Counter = $Counter + 1;
	}
	return $Counter;
}

function echo_errors($errors) {

	for($i=0;$i<count($errors);$i++) {
		?>
		<error><?php $errors[$i];?></error>
		<?php
	}
}

switch($_REQUEST['action']) {

case "upload":
	 
	 $SessionObject = new Session();
         $DCApi = new DCApi();
	 
 	 #Checking for Valid Session

	 if($SessionObject->CheckValidSession("DRC")==0){

		 break;
	 }
	 $UserName = $SessionObject->GetData("LoginName");

	 $DRCStatus   = stripslashes($SessionObject->GetData("DRCStatus"));
	 if($DRCStatus == 0 || $DRCStatus == 1 || $DRCStatus == 2){
		 break;
	 }
	 $CampHashCode    = isSet($_REQUEST["CampHashCode"])?$_REQUEST["CampHashCode"]:'';
	 $PatientHashCode = isSet($_REQUEST["PatientHashCode"])?$_REQUEST["PatientHashCode"]:'';
	 $ImageType       = isSet($_REQUEST["imageType"])?$_REQUEST["imageType"]:'';

	 $Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode,"Yes");
	 if($Result == 0){
		 break;
	 }
	
	 $Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
	 if($Result == 0 || $Result == 1 || $Result == 2){
		 break;
	 }

	 $DBObject  = new DataBase();
	 $Query =  '
		Select * from patientstatus
		Where
		PatientHashCode="'.$PatientHashCode.'"
		and
		CampHashCode="'.$CampHashCode.'"';

 	 $Result = $DBObject->ExecuteQuery($Query);
 	 $Result = $DBObject->FetchResult();

	 $PatientID = $DCApi->GetPatientID($PatientHashCode);
	 $CampID    = $DCApi->GetCampID($CampHashCode);

 	 $LeftStatus  = $Result[0]["PatientLeftEyeImageStatus"];
 	 $RightStatus = $Result[0]["PatientRightEyeImageStatus"];

 	 if($LeftStatus == "Complete" and $RightStatus=="Complete"){
		 $DBObject->CloseDataBaseConnection();
		 break;
	 }


	 $file_temp = $_FILES['file']['tmp_name'];
	 $File_Name = $_FILES['file']['name'];


	 $DRCDir             = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName;
	 $FirstMainDir       = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID;
	 $SecondMainDir      = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID;
	 $SecondMainDirImgTp = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/".$ImageType;
	 $FilePath           = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/".$ImageType."/".$CampID."_".$PatientID.".xml";
	 $ImageDir      = "/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/".$ImageType."/".$File_Name;

	# Creating Directories !

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

	if(!is_dir($SecondMainDirImgTp)){ 
		system('mkdir  '.$SecondMainDirImgTp,$RetVal);
		system('chmod -R 777  '.$SecondMainDirImgTp,$RetVal);
	}


    	//Checks for duplicate files
	if(!file_exists($SecondMainDirImgTp."/".$File_Name)) {

       		//complete upload
		$filestatus = move_uploaded_file($file_temp,$SecondMainDirImgTp."/".$File_Name);
		$XMLOutput = "";
		$Counter = GetCount($FilePath);
		$file=fopen($FilePath,"a+");
		fwrite($file, "<ImageDetails src=\"".$ImageDir."\"></ImageDetails>\n");
		fclose($file);
		if($Counter == ($FileLength-1)){
			$Tick = "Right";
			if($ImageType == "left"){
				$Tick = "Left";
			}
			$Query = '
				Update patientstatus set Patient'.$Tick.'EyeImageStatus = "Completed"
				Where
				PatientHashCode="'.$PatientHashCode.'"
				and
				CampHashCode="'.$CampHashCode.'"';
			$Result     = $DBObject->ExecuteQuery($Query);
			$DBObject->CloseDataBaseConnection();
		}
       		if(!$filestatus)
			array_push($errors,"Upload failed. Please try again.");
       		else{ 
			$success = "true";
		}

	}	
	else 
	    	array_push($errors,"File already exists on server.");
    	break;
default:
	array_push($errors,"No action was requested.");
}

return_result($success,$errors,$data);

?>

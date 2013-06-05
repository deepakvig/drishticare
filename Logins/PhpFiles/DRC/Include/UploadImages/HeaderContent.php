<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
	$ReqPage      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	if($ReqPage=="LogOut"){
		$SessionObject->DestroySession();
		header('Location: /DCare/index.html');
        	exit;
	}
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("DRC")==0){
		header('Location: /DCare/index.html');
	        exit;
	}

	#Getting Data from the Session Variable
	$UserName       = $SessionObject->GetData("LoginName");
	$Date           = $SessionObject->GetData("Date");
	$Month          = $SessionObject->GetData("Month");
	$Year           = $SessionObject->GetData("Year");
	$EmailID        = stripslashes($SessionObject->GetData("EmailID"));
	$DRCName        = stripslashes($SessionObject->GetData("DRCName"));
	$DRCStatus      = stripslashes($SessionObject->GetData("DRCStatus"));
	if($DRCStatus == 0 || $DRCStatus == 1 || $DRCStatus == 2){

	
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}
	$CampHashCode    = isSet($_GET["CampHashCode"])?$_GET["CampHashCode"]:'';
	$PatientHashCode = isSet($_GET["PatientHashCode"])?$_GET["PatientHashCode"]:'';

	$Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode);
	if($Result == 0){
		#echo $_GET["PatientHashCode"];
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}

	$ImageStatus = $Result;
	$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);	
	if($Result == 0 || $Result == 1){
		header('Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active');
	}


	$CampName           = $DCApi->GetCampName($CampHashCode);		

	$CampID             = $DCApi->GetCampID($CampHashCode);		
	$PatientID          = $DCApi->GetPatientID($PatientHashCode);		
?>
<title>Drishti Care | Bringing Ease to EyeCare</title>
<link rel="shortcut icon" href="/GradingApplication/Images/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="/GradingApplication/Style/Table.css" media="screen"/>
<?php
	if($ImageStatus == 1){
		$FirstMainDir  = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$PatientID;
		# Deleting Directories !
	#	if(is_dir($FirstMainDir)){
	#		system('rm -rf  '.$FirstMainDir,$RetVal);
	#	}
		echo '
		<table id=CampTable cellspacing="0" style="margin-top:0px;" width=100%  width=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
					</tr><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected">
				<tr id=CampTableFirst class="alternate">
					<td style="border-right: 1px solid #c0c6cb;">
						<font size=2><b>Please Upload Patient\'s Images.</b></font>
					</td>
					<td style="border-right: 1px solid #c0c6cb;" align=right>
						<font size=2><b><a href=/DCare/Logins/DRC/index.php?ReqPage=CampDetails&CampHashCode='.$CampHashCode.'>Patient View</a></b></font>
					</td>
				</tr>
			</tbody>
			</table>';
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/UploadImages/FlexApplication/uploadImages.php";

	}
	else {
		 echo '
                <table id=CampTable cellspacing="0" style="margin-top:0px;" width=100%  width=top>
                        <tbody id=CampTableFirst>
                                <tr id=CampTableFirst class="selected">
                                                <td style="border-left:0px;border-top:0px;border-right:0px;"></td>              
                                        </tr><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected"><tr id=CampTableFirst class="selected">
                                <tr id=CampTableFirst class="alternate">
                                        <td style="border-right: 1px solid #c0c6cb;">
                                                <font size=2><b>Patient\'s Uploaded Images.</b></font>
                                        </td>
                                        <td style="border-right: 1px solid #c0c6cb;" align=right>
                                                <font size=2><b><a href=/DCare/Logins/DRC/index.php?ReqPage=CampDetails&CampHashCode='.$CampHashCode.'>Patient View</a></b></font>
                                        </td>
                                </tr>
                        </tbody>
                        </table><center>';

		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/UploadImages/ViewPatientImages.php";
		echo '</center>';
		
	}
?>

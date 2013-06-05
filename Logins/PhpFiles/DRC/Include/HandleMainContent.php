<?php
	if($ReqPage=="FirstStage"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/FirstStageContent.php";
	}
	else if($ReqPage=="SecondStage"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/NewDoctor.php";
	}
	else if($ReqPage=="ThirdStage"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/NewPhotoGrapher.php";
	}
	else if($ReqPage=="MainPage"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/InboxContent.php";
	}
	else if($ReqPage=="NewCamp"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/NewCamp.php";
	}
	else if($ReqPage=="CampDetails"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/CampDetails.php";
	}
	else if($ReqPage=="PatientDetails"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/PatientDetails.php";
	}
	else if($ReqPage=="NewPatient"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/HandleNewPatient.php";
	}
	else if($ReqPage=="Search"){
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/SearchContent.php";
	}
	else {
		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/404Page.php";
	}
?>

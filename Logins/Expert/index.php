<?php
	include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Expert/Include/HeaderContent.php";
	#$InboxType    = isSet($_REQUEST["InboxType"])?$_REQUEST["InboxType"]:'';
	$InboxType    = isSet($_GET["inboxType"])?$_GET["inboxType"]:'';
	if($InboxType == 'i' ||  $InboxType == 'p' || $InboxType == 's'){

		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Expert/Include/InboxDetails.php";
	}

	else if($InboxType == 'pd'){

		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Expert/Include/InboxContent.php";
	}

	else if($InboxType == 'up'){

		include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Expert/Include/Register/UpdatePatient.php";
	}
?>

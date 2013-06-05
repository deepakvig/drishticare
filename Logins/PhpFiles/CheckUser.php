<?php
	include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/HeaderContent.php";
	$UserName  = isSet($_GET["UserName"])?$_GET["UserName"]:'';
	$Agent     = isSet($_GET["Agent"])?$_GET["Agent"]:'';
	$Result    = null;
	$DCApi = new DCApi();
	if($Agent=="DRC"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	else if($Agent=="Provider"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	else if($Agent=="Admin"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	else if($Agent=="Camp"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	else if($Agent=="Doctor"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	else if($Agent=="PhotoGrapher"){
		$Result     = $DCApi->CheckUserName($UserName);
	}
	echo  $Result;
?>

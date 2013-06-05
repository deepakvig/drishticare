<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
	$ReqPage      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	if($ReqPage=="LogOut"){
		$SessionObject->DestroySession();
		header('Location: /MainPage/index.html');
        	exit;
	}
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("Expert")==0){
		header('Location: /MainPage/index.html');
	        exit;
	}
	
	#Getting Data from the Session Variable
	$UserName       = $SessionObject->GetData("LoginName");
?>

<?php
        include"/home/deepakvig/web168/web/DCare/Include/Include.php";
        $ReqPage = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';

        # Creating a Session Object
        $SessionObject = new Session();
        if($ReqPage=="LogOut"){
                $SessionObject->DestroySession();
        	header('Location:/MainPage/index.html');
	        exit;
        }

        #Checking for Valid Session
        if($SessionObject->CheckValidSession("Admin")==0){
	        header('Location:/MainPage/index.html');
	        exit;
        }
        #Getting UserName from the Session Variable
	$UserName = $SessionObject->GetData("LoginName");
?>

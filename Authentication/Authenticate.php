<?php
#Including all Necessary Files
include"/home/deepakvig/web168/web/DCare/Include/Include.php";

# Creation of Session Object and Storing Necessary Variables
$SessionObject = new Session();
$Date  = date("d"); 
$Month = date("m"); 
$Year  = date("Y");

# Getting Data From Form
$UserName   = isSet($_POST['UserName'])?$_POST['UserName']:'';
$ReqPage    = isSet($_POST['ReqPage'])?$_POST['ReqPage']:'';
$SecretKey  = isSet($_POST['SecretKey'])?$_POST['SecretKey']:'';
#Querying from DataBase About the User Details
$DataBaseObject =  new DataBase();
$Query = 'Select * from userdetails Where UserName  ="'.$UserName.'" and Password="'.md5($SecretKey).'"';
$Result = $DataBaseObject->ExecuteQuery($Query);
$DataBaseObject->CloseDataBaseConnection();
if($DataBaseObject->NumberOfRows()==0){
	header("Location: /MainPage/index.html");
	exit;
}

else {
	$TypeOfLogin = $DataBaseObject->FetchResult();
	# Storing Session Variables
	$SessionObject->StoreSession("Date",$Date);
	$SessionObject->StoreSession("Month",$Month);
	$SessionObject->StoreSession("Year",$Year);
	
	# If User is an Admin
	if($TypeOfLogin [0]['UserType']=='Ad'){
		$SessionObject->StoreSession("LoginName",$UserName);
		$SessionObject->StoreSession("UserType","Admin");
		header("Location: /DCare/Logins/Admin/index.php?ReqPage=MainPage");
	}
	
	# If User is a Provider
	else if($TypeOfLogin [0]['UserType']=='Pr'){
		$SessionObject->StoreSession("LoginName",$UserName);
		$SessionObject->StoreSession("UserType","Provider");
		header("Location: /DCare/Logins/Provider/index.php?ReqPage=MainPage");
	}
	
	# If User is an Expert
        else if($TypeOfLogin [0]['UserType']=='Ex'){
                $SessionObject->StoreSession("LoginName",$UserName);
                $SessionObject->StoreSession("UserType","Expert");
                header("Location: /DrishtiCareExpert/DrishtiCare_Final.html");
        }


	# If User is DRC
	else if($TypeOfLogin [0]['UserType']=='Dc'){
		$DataBaseObject =  new DataBase();
		$Query = 'Select * from drcdetails Where DRCUserName  ="'.$UserName.'"';
		$Result = $DataBaseObject->ExecuteQuery($Query);
		$DataBaseObject->CloseDataBaseConnection();
		$Result = $DataBaseObject->FetchResult();
		#Storing Session Varibles;
		$SessionObject->StoreSession("LoginName",$UserName);
		$SessionObject->StoreSession("UserType","DRC");
		$SessionObject->StoreSession("EmailID",$TypeOfLogin[0]["EmailID"]);
		$SessionObject->StoreSession("DRCName",$Result[0]["DRCName"]);
		$SessionObject->StoreSession("DRCStatus",$Result[0]["DRCStatus"]);
		
		header("Location: /DCare/Logins/DRC/index.php?ReqPage=MainPage&ReqStatus=Active");
	}
	
	# OtherWise just Redirect him to the Main Page
	else {
		header("Location: /MainPage/index.html");
	}
};
?>

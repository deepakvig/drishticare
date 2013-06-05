<?php

$PUserName      = isSet($_POST["UserName"])?$_POST["UserName"]:'';
$Password       = isSet($_POST["Password"])?$_POST["Password"]:'';
$ProviderName   = isSet($_POST["ProviderName"])?$_POST["ProviderName"]:'';
$Organization   = isSet($_POST["Organization"])?$_POST["Organization"]:'';
$EmailID        = isSet($_POST["EmailID"])?$_POST["EmailID"]:'';
$DCApi          =  new DCApi();
$CheckUserName  = $DCApi->CheckUserName($PUserName);
$CheckEmailID   = $DCApi->CheckEmailID($EmailID);
if($CheckUserName != 3 ||  $CheckEmailID == 0 || $Password == null || $ProviderName == null || $Organization == null){
	header('Location: /DCare/Logins/Admin/index.php?ReqPage=NewProvider');
}
else {
	$DBObject = new DataBase();
	$HashCode = md5($PUserName);
	$Password = md5($Password);
	$Query    = "('".$HashCode."','".$PUserName."','".$DBObject->EscapeString($ProviderName)."','".$DBObject->EscapeString($Organization)."')";
	$Query = "Insert Into providerdetails values ".$Query;
	$Result = $DBObject->ExecuteInsertOrUpdate($Query);
	$Query    = "('".$HashCode."','".$PUserName."','".$Password."','".$DBObject->EscapeString($EmailID)."','Pr')";
	$Query = "Insert Into userdetails values ".$Query;
	$Result = $DBObject->ExecuteInsertOrUpdate($Query);
	$Query    = "('".md5($UserName)."','".$HashCode."','Ad','Pr')";
	$Query = "Insert Into dcmapping values ".$Query;
	$Result = $DBObject->ExecuteInsertOrUpdate($Query);
	$DBObject->CloseDataBaseConnection();
}
?>
	

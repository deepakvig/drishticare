<?php
	# This is Used for Registering a New DRC
	$EmailID        = isSet($_POST["EmailID"])?$_POST["EmailID"]:'';
	$DRCName        = isSet($_POST["DRCName"])?$_POST["DRCName"]:'';
	$DCApi          =  new DCApi();
	$CheckEmailID   = $DCApi->CheckEmailID($EmailID);
	if( $CheckEmailID == 0 || $DRCName == null){
		header('Location: /DCare/Logins/Provider/index.php?ReqPage=NewDRC');
	}
	else {
		$Password      = md5("gopal");
		$DBObject      = new DataBase();
		$Result        = $DBObject->ExecuteQuery("Select count(*) from drcdetails");
		$Count         = $DBObject->FetchResult();	
		$DRCUserName   = $DCApi->GenerateUserName($Count[0]["count(*)"],"drc",8);
		$HashCode      = md5($DRCUserName);
		$Query         = "('".$HashCode."','".$DRCUserName."','".$DBObject->EscapeString($DRCName)."')";
		$Query         = "Insert Into drcdetails (DRCHashCode, DRCUserName, DRCName) values ".$Query;
		$Result        = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query         = "('".$HashCode."','".$DRCUserName."','".$Password."','".$DBObject->EscapeString($EmailID)."','Dc')";
		$Query         = "Insert Into userdetails values ".$Query;
		$Result        = $DBObject->ExecuteInsertOrUpdate($Query);
		$Query         = "('".md5($UserName)."','".$HashCode."','Pr','Dc')";
		$Query         = "Insert Into dcmapping values ".$Query;
		$Result        = $DBObject->ExecuteInsertOrUpdate($Query);
		$DBObject->CloseDataBaseConnection();
	}

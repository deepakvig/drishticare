<?php

Class DCApi
{
	# Constructor of Class.
	function DRCActions(){
		return ;	
	}
	# Check Email ID Of the UserName
	function CheckEmailID($EmailID){
		if (ereg("^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+.([a-zA-Z]{2,4})$",$EmailID))
		{
			return 1;
		}
	       	else {
			return 0;
		}
	}

	function GetCampID($CampHashCode){
		$DataBaseObject  = new DataBase();
                $Query           = 'Select CampID from campdetails where CampHashCode ="'.$DataBaseObject->EscapeString($CampHashCode).'"';
                $Result          = $DataBaseObject->ExecuteQuery($Query);

                $Result          = $DataBaseObject->FetchResult();
                return $Result[0]["CampID"];
	}

	function GetPatientID($PatientHashCode){
		$DataBaseObject  = new DataBase();
                $Query           = 'Select PatientGivenID from patientpersonaldetails where PatientHashCode ="'.$DataBaseObject->EscapeString($PatientHashCode).'"';
                $Result          = $DataBaseObject->ExecuteQuery($Query);
                $Result          = $DataBaseObject->FetchResult();
                return $Result[0]["PatientGivenID"];

	}
	function GetCampName($CampHashCode){
		$DataBaseObject  = new DataBase();
		$Query           = 'Select CampName from campdetails where CampHashCode ="'.$DataBaseObject->EscapeString($CampHashCode).'"';
		$Result          = $DataBaseObject->ExecuteQuery($Query);
		$Result          = $DataBaseObject->FetchResult();
	        $DataBaseObject->CloseDataBaseConnection();
		return $Result[0]["CampName"];
		
	}
	function GetPatientStatus($CampHashCode){
		
		$DataBaseObject  = new DataBase();
		$Query           = 'Select count(*) from patientstatus where CampHashCode ="'.$CampHashCode.'" and PatientReportStatus="Pending"';
		$Result          = $DataBaseObject->ExecuteQuery($Query);
		$Result          = $DataBaseObject->FetchResult();
		$Pending         = $Result[0]["count(*)"];
		$Query           = 'Select count(*) from patientstatus where CampHashCode ="'.$CampHashCode.'" and PatientReportStatus="Completed"';
		$Result          = $DataBaseObject->ExecuteQuery($Query);
		$Result          = $DataBaseObject->FetchResult();
		$Completed       = $Result[0]["count(*)"];
		
		$PatientStatus[] = $Pending;
		$PatientStatus[] = $Completed;	
	        //$DataBaseObject->CloseDataBaseConnection();
		return $PatientStatus;
	}
	function CheckValidCamp($UserName,$CampHashCode){
		$DataBaseObject = new DataBase();
		$Query = 'Select * from dcmapping where FirstEntity = "'.md5($UserName).'" and SecondEntity ="'.$DataBaseObject->EscapeString($CampHashCode).'"';
		$Result = $DataBaseObject->ExecuteQuery($Query);
		if($DataBaseObject->NumberOfRows()==0){
	        	$DataBaseObject->CloseDataBaseConnection();
			return 0;
		}
		$Query       ='Select  CampStartDate, CampEndDate from campdetails Where  CampHashCode  ="'.$DataBaseObject->EscapeString($CampHashCode).'"';
		$Result      = $DataBaseObject->ExecuteQuery($Query);
		$CampDates   = $DataBaseObject->FetchResult();
	        $DataBaseObject->CloseDataBaseConnection();
		list($StYear, $StMonth, $StDate) = split('[/.-]', $CampDates[0]["CampStartDate"]);
		list($EnYear, $EnMonth, $EnDate) = split('[/.-]', $CampDates[0]["CampEndDate"]);
		$StartDate   = $CampDates[0]["CampStartDate"];
		$CampEndDate = $CampDates[0]["CampEndDate"];
		
		
		$StartDate  = $StDate.'-'.$StMonth.'-'.$StYear;
		$EndingDate = $EnDate.'-'.$EnMonth.'-'.$EnYear;
		$TodayDate  = date("d-m-Y");
			
			
		$Start      = strtotime($StartDate);
		$End        = strtotime($EndingDate);
		$Today      = strtotime($TodayDate);
		if($Start>$Today){
			return 1;
		}
		else if($End < $Today){
			return 2;
		}
		else {
			return 3;
		}
	}
	# Get the IP Address of the User who is Logged In
	function GetIpAddress() {
		if (getenv("HTTP_CLIENT_IP")) {
			$IpAddress = getenv("HTTP_CLIENT_IP");
		} 
		elseif (getenv("HTTP_X_FORWARDED_FOR")) {
			$IpAddress = getenv("HTTP_X_FORWARDED_FOR");
		} 
		else {
			$IpAddress = getenv("REMOTE_ADDR");
		}
		return $IpAddress;
	}

	# Check for Valid UserName
	function CheckUserName($UserName) {
		if($UserName == null){
			return 0;
		}
		if(eregi('^([a-zA-Z0-9._]+)$',$UserName)){
			$DataBaseObject = new DataBase();
			$Query = 'Select UserName from userdetails Where UserName  ="'.$DataBaseObject->EscapeString($UserName).'"';
			$Result = $DataBaseObject->ExecuteQuery($Query);
			if($DataBaseObject->NumberOfRows()!=0){
				$DataBaseObject->CloseDataBaseConnection();
				return 2;
			}
			$DataBaseObject->CloseDataBaseConnection();
			return 3;
		}
		return 1;
	}
	function IsItNumber($InputString){
		$ReturnValue = 0;
		if(eregi('^([0-9]+)$',$InputString)){
			$ReturnValue = 1;
		}
		return $ReturnValue;

	}
	function CheckValidPatient($CampHashCode,$PatientHashCode,$Flag="No"){
		$DataBaseObject = new DataBase();
		$Query = 'Select  * from patientstatus where CampHashCode ="'.$DataBaseObject->EscapeString($CampHashCode).'" and PatientHashCode="'.$DataBaseObject->EscapeString($PatientHashCode).'"';
		$Result = $DataBaseObject->ExecuteQuery($Query);
		
		if($DataBaseObject->NumberOfRows()==0){
			$DataBaseObject->CloseDataBaseConnection();
			return 0;
		}
		$Result = $DataBaseObject->FetchResult();
		$DataBaseObject->CloseDataBaseConnection();
		if($Flag=="Yes"){
			return 2;
		}
		if($Result[0]["PatientLeftEyeImageStatus"]=="Pending" or $Result[0]["PatientRightEyeImageStatus"]=="Pending"){
			$DataBaseObject = new DataBase();
			$Query = 'Update patientstatus  Set PatientLeftEyeImageStatus="Pending", PatientRightEyeImageStatus="Pending" Where CampHashCode ="'.$DataBaseObject->EscapeString($CampHashCode).'" and PatientHashCode="'.$DataBaseObject->EscapeString($PatientHashCode).'"';
			$Result = $DataBaseObject->ExecuteQuery($Query);
			$DataBaseObject->CloseDataBaseConnection();
			return 1;
		}
		return 2;
	}
	function GetCampStatus($UserName){
		$Completed = 0;
		$Planned   = 0;
		$Active    = 0;
		
		$DataBaseObject = new DataBase();
		$Query = 'Select  SecondEntity from dcmapping Where  FirstEntity  ="'.$DataBaseObject->EscapeString($UserName).'" and WhatIsSecond="Cm"';
		$Result = $DataBaseObject->ExecuteQuery($Query);
		$FinalResult = $DataBaseObject->FetchResult();
		for($i=0;$i<count($FinalResult);$i++){
			$Query       ='Select  CampStartDate, CampEndDate from campdetails Where  CampHashCode  ="'.$DataBaseObject->EscapeString($FinalResult[$i]["SecondEntity"]).'"';
			$Result      = $DataBaseObject->ExecuteQuery($Query);
			$CampDates   = $DataBaseObject->FetchResult();
			list($StYear, $StMonth, $StDate) = split('[/.-]', $CampDates[0]["CampStartDate"]);
			list($EnYear, $EnMonth, $EnDate) = split('[/.-]', $CampDates[0]["CampEndDate"]);
			$StartDate   = $CampDates[0]["CampStartDate"];
			$CampEndDate = $CampDates[0]["CampEndDate"];
		
			$StartDate  = $StDate.'-'.$StMonth.'-'.$StYear;
			$EndingDate = $EnDate.'-'.$EnMonth.'-'.$EnYear;
			$TodayDate  = date("d-m-Y");
			
			
			$Start      = strtotime($StartDate);
			$End        = strtotime($EndingDate);
			$Today      = strtotime($TodayDate);
			if($Start>$Today){
				$Planned = $Planned + 1;
			}
			else if($End < $Today){
				$Completed = $Completed + 1;
			}
			else {
				$Active = $Active + 1;
			}

		}
		$CampStatus[] = $Planned;
		$CampStatus[] = $Active;
		$CampStatus[] = $Completed;
			
		return $CampStatus;
	}
	function GenerateUserName($Count,$User,$Total){
		$Count = $Count + 1;
		$FinalUserName = "";
		for($i= 0;$i<($Total-count($Count));$i++){
			$FinalUserName = $FinalUserName."0";
		}
		return 	$User.$FinalUserName.$Count;	
	}
	function CheckValidDate($StDate,$StMonth,$StYear,$EnDate,$EnMonth,$EnYear){
		$TodayDate  = date("d-m-Y");
		$StartDate  = $StDate.'-'.$StMonth.'-'.$StYear;
		$EndingDate = $EnDate.'-'.$EnMonth.'-'.$EnYear;

		$Today      = strtotime($TodayDate);
		$Start      = strtotime($StartDate);
		$End        = strtotime($EndingDate);
		if ($Start >= $Today)
		{
			if($End > $Start){
				return 1;
			}
			return 0;
		}
		else
		{
			return 0;
		}
	}
}
?>

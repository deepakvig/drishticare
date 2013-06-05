<?php
Class Session
{
	# Constructor of Class.
	function Session(){
		session_start();
	}

	# Store the Session
	function StoreSession($KeyCode,$Value) {
		session_register(); 
		$_SESSION[$KeyCode]=$Value;
	}

	# Check for Valid Session
	function CheckValidSession($UserType)
	{
		if(!isset($_SESSION['LoginName'])){
			session_destroy();
			return 0;
		}
		if($_SESSION['UserType']!=$UserType){
			return 0;
		}
		return 1;
	}

	# Get User for the Session
	function GetData($KeyCode){
		return isSet($_SESSION[$KeyCode])?$_SESSION[$KeyCode]:'';
	}

	# Destroy the Session
	function DestroySession(){
		session_destroy();
	}
}
?>

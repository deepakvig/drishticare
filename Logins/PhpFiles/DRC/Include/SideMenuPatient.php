<?php

$ReqStatus = isSet($GET["ReqStatus"])?$GET["ReqStatus"]:"SentCases";
$SenStyle = "";
$RecStyle = "";
$PenStyle = "";
$AllStyle = "";


if($ReqStatus == "Received"){
	$RecStyle = "style=background-color:#dff4ff";
}
else if($ReqStatus == "RprtPending"){
	$PenStyle = "style=background-color:#dff4ff";
}
else if($ReqStatus == "All"){
	$AllStyle = "style=background-color:#dff4ff";
}
else {
	$SenStyle = "style=background-color:#dff4ff";
}

echo 
'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>		
		<title>Untitled Document</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<link rel="stylesheet" type="text/css" href="/DCare/Logins/Style/SideMenu.css">
	</head>
	<body>
		<div class="buttons">
			<table>
			<tr>
			<td>
		    	<a class="regular" '.$SenStyle.'><img src="/DCare/Images/Arrow.png" alt="">SentCases</a>
			</td>
			</tr>
			<tr>
			<td>
		    	<a class="regular" '.$RecStyle.'><img src="/DCare/Images/Arrow.png" alt="">Received</a>
			</tr>
			</td>
			<tr>
			<td>
		    	<a class="regular" '.$PenStyle.'><img src="/DCare/Images/Arrow.png" alt="" >Report Pending</a>
			</tr>
			</tr>
			<tr>
			<td>
		    	<a class="regular" '.$AllStyle.'><img src="/DCare/Images/Arrow.png" alt="">All</a>
			</tr>
			</td>
			</table>
		</div>
	</body>
	</html>';
?>

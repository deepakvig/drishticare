<?php

$ReqStatus = isSet($_GET["ReqStatus"])?$_GET["ReqStatus"]:"Active";
$ActStyle  = "";
$PlnStyle  = "";
$CmpStyle  = "";
$AllStyle  = "";

if($ReqStatus == "Planned"){
	        $PlnStyle = "style=background-color:#E6EFC2";
}
else if($ReqStatus == "Completed"){
	        $CmpStyle = "style=background-color:#E6EFC2";
}
else if($ReqStatus == "All"){
	        $AllStyle = "style=background-color:#E6EFC2";
}
else {
	        $ActStyle = "style=background-color:#E6EFC2";
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
			<a href="index.php?ReqPage=MainPage&ReqStatus=Active" class="positive" '.$ActStyle.'><img src="/DCare/Images/Arrow.png" alt="">Active</a>
			</td>
			</tr>
			<tr>
			<td>
		    	<a href="index.php?ReqPage=MainPage&ReqStatus=Planned" class="positive" '.$PlnStyle.'><img src="/DCare/Images/Arrow.png" alt="">Planned</a>
			</tr>
			</td>
			<tr>
			<td>
		    	<a href="index.php?ReqPage=MainPage&ReqStatus=Completed" class="positive" '.$CmpStyle.'><img src="/DCare/Images/Arrow.png" alt="">Completed</a>
			</tr>
			</tr>
			<tr>
			<td>
		    	<a href="index.php?ReqPage=MainPage&ReqStatus=All" class="positive" '.$AllStyle.'><img src="/DCare/Images/Arrow.png" alt="">All</a>
			</tr>
			</td>
			</table>
		</div>
	</body>
	</html>';
?>

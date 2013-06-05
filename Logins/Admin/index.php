<?php
	include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/HeaderContent.php";
#	include "/home/deepakvig/domains/drishticare.com/htdocs/DCare/Logins/PhpFiles/Admin/Include/HeaderContent.php";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Drishti Care | Bringing Ease to EyeCare</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" type="text/css" href="/DCare/Logins/Style/style.css" id=stylesheet media="screen"/>
		<script type="text/javascript" src="/DCare/JsScripts/Loader.js"></script>
		<link rel="shortcut icon" href="/DCare/Images/favicon.ico" type="image/x-icon">
		<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" href="Style/style_ie67.css" />
		<![endif]-->
	</head>
	<body>
		<div id="backOuter">
			<div id="Outer">
				<div id="OuterContainer" >
					<div id="TopContainer" >
						<div id="TopContainerInside">
							<div id="RightBox">
								<div id=RightText>
									<?
										include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/RightContent.php";
									?>
								</div>
							</div>
						</div>
					</div> 
					<div id=SubMenuContainer>
						<?                                                		
							include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/SubMenuContent.php";
                                                ?>
					</div>
					<div id="ContainerMid">
						
						<div id="TextHeading">
							<?php
								if($ReqPage=="Help"){
									echo "Help";
								}
								else if($ReqPage=="MainPage"){
									echo "Main Page";
								}
								else if($ReqPage=="NewProvider"){
									echo "New Provider";
								}
								else if($ReqPage=="Search"){
									echo "Search";
								}
								else {
									echo "Page Not Found";
								}
							?>
						</div>
						<div id="InsideText">
							<?php
								if($ReqPage=="Help"){
								}
								else if($ReqPage=="MainPage"){
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/InboxContent.php";
								}
								else if($ReqPage=="NewProvider"){
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/NewProvider.php";
								}
								else if($ReqPage=="Search"){
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/Include/SearchContent.php";
								}
								else {
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Admin/404Page.php";
								}
							?>

						</div>
					</div>	





					<div id="FooterBox">
						<div id="FooterText" >
							Terms | Privacy Policy | About Drishti Care
							<br/>
							&copy; 2009 Drishti Care. All Rights Reserved.

						</div>

					</div>







				</div>
			</div>
		</div>
	</body>
</html>

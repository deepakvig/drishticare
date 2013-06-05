<?php
	include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/Include/HeaderContent.php";
	$RegAgent     = isSet($_POST["RegAgent"])?$_POST["RegAgent"]:'';
	if($RegAgent == "NewDRC"){
		# Register a New DRC
		include '/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/RegisterDRC.php';
	}
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
										include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/Include/RightContent.php";
									?>
								</div>
							</div>
						</div>
					</div> 
					<div id=SubMenuContainer>
						<?                                                		
							include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/Include/SubMenuContent.php";
                                                ?>
					</div>
					<div id="ContainerMid">
						
						<div id="TextHeading">
							<?php
								if($RegAgent == "NewDRC"){
									echo "New DRC";
								}
								else {
									echo "Page Not Found";
								}
							?>
						</div>
						<div id="InsideText">
							<?php
								if($RegAgent == "NewDRC"){
									echo 'DRC Successfully Registered !';
								}
								else {
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/404Page.php";
								}
							?>

						</div>
					</div>	





					<div id="FooterBox">
						<?php
							include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/Provider/Include/FooterContent.php";
						?>

					</div>
				</div>
			</div>
		</div>
	</body>
</html>

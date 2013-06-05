<?php
	include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/HeaderContent.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html  xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<title>Drishti Care | Bringing Ease to EyeCare</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<link rel="stylesheet" type="text/css" href="/DCare/Logins/Style/DRCStyle.css" id=stylesheet media="screen"/>
		<link rel="stylesheet" type="text/css" href="/DCare/Logins/Style/JQueryCss.css" id=stylesheet media="screen"/>
		<link rel="shortcut icon" href="/GradingApplication/Images/favicon.ico" type="image/x-icon">
		<script type="text/javascript" src="/DCare/JsScripts/Loader.js"></script>
		<script type="text/javascript" src="/DCare/JsScripts/HandlePatient.js"></script>
		<script type="text/javascript" src="/DCare/JsScripts/jquery-1.3.2.js"></script>
 	 	<script type="text/javascript" src="/DCare/JsScripts/ui.core.js"></script>
	  	<script type="text/javascript" src="/DCare/JsScripts/ui.accordion.js"></script>
  		<script type="text/javascript">
  			$(document).ready(function(){
				$('#accordion').accordion({ active: false ,autoHeight:false});
			});
		 </script>
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
								<?php
									include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/RightContent.php";
								?>	
								</div>
							</div>
						</div>
					</div> 
					<div id="ContainerMid">
						<div id=TopHeading>
							<?php							
								include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/HandleHeadingContent.php";
							?>
						</div>	
						<div id="InsideText">						
							<?php							
								include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/HandleMainContent.php";
							?>
						</div>
					</div>	
					<div id="FooterBox">	
						<?php							
							include "/home/deepakvig/web168/web/DCare/Logins/PhpFiles/DRC/Include/FooterContent.php";
						?>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>


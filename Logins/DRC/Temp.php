<?php
	include"/home/deepakvig/web168/web/MyWork/PhpFiles/Common/Include/Include.php";
	$ReqPage      = isSet($_GET["ReqPage"])?$_GET["ReqPage"]:'';
	# Creating a Session Object
	$SessionObject = new Session();
	
	$DCApi = new DCApi();
	if($ReqPage=="LogOut"){
		$SessionObject->DestroySession();
        header('Location: '.$ApacheRootPath.'MyWork/index.php?ReqPage=Home');
        exit;
	}
	
	#Checking for Valid Session
	if($SessionObject->CheckValidSession("DRC")==0){
		header('Location: '.$ApacheRootPath.'MyWork/index.php?ReqPage=Home');
        exit;
	}
	
	#Getting Data from the Session Variable
	$UserName       = $SessionObject->GetData("LoginName");
	$Date           = $SessionObject->GetData("Date");
	$Month          = $SessionObject->GetData("Month");
	$Year           = $SessionObject->GetData("Year");
	$EmailID        = stripslashes($SessionObject->GetData("EmailID"));
	$DRCName        = stripslashes($SessionObject->GetData("DRCName"));
	$DRCStatus      = stripslashes($SessionObject->GetData("DRCStatus"));
	if($DRCStatus == 0){
		$ReqPage = "FirstStage";
	}
	else if($DRCStatus == 1){
		$ReqPage = "SecondStage";
	}
	else if($DRCStatus == 2){
		$ReqPage = "ThirdStage";
	}
	else if($ReqPage=="CampDetails"){
		$CampHashCode = isSet($_GET["CampHashCode"])?$_GET["CampHashCode"]:'';
		$SessionObject->StoreSession("CurrentCampID",$CampHashCode);			
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		if($Result == 0){
			header('Location: '.$ApacheRootPath.'MyWork/Common/404Page.php');
		}
		$CampStatus = "Active";
		$CampColor  = "green";
	}
	else if($ReqPage == "NewPatient"){
		$CampHashCode = $SessionObject->GetData("CurrentCampID");
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		if($Result == 0 || $Result == 1 || $Result == 2){
			header('Location: '.$ApacheRootPath.'MyWork/DRC/index.php?ReqPage=MainPage');
		}
		$CampName     = $DCApi->GetCampName($CampHashCode);
	}
	else if($ReqPage == "PatientDetails"){
		$CampHashCode    = $SessionObject->GetData("CurrentCampID");
		$PatientHashCode = isSet($_GET["PatientHashCode"])?$_GET["PatientHashCode"]:'';
		$Result          = $DCApi->CheckValidPatient($CampHashCode,$PatientHashCode);
		if($Result == 0){
			header('Location: '.$ApacheRootPath.'MyWork/DRC/index.php?ReqPage=MainPage');
		}
		
		$Result = $DCApi->CheckValidCamp($UserName,$CampHashCode);
		
		if($Result == 0 || $Result == 1){
			header('Location: '.$ApacheRootPath.'MyWork/DRC/index.php?ReqPage=MainPage');
		}
		
		$CampName     = $DCApi->GetCampName($CampHashCode);
	}
		
?>
<html>
		<?php
			echo '<body onKeyPress=CreateShortCut(event.keyCode'.',"'.$ReqPage.'")>';
		?>
		<head>
			<?php
				#Inlcuded the File which Contains JavaScript and Css Style File and the Css Change on Error	
				include $RootPath.'MyWork/PhpFiles/DRC/IncludedHtml.php';
			?>
		</head>
		<body>
			<Center>
			<div id=MainContainer>
			<div id="MenuBar">
				<div id="TopHeader">
					<div id="TopHeaderLeft">
						<?php
							#Inlcuded the File which Contains the Top Header Left Links of all the Pages
							include $RootPath.'MyWork/PhpFiles/Common/TopHeaderLeft.php';
						?>
					</div>
					<div id="TopHeaderRight">
						<?php
							#Inlcuded the File which Contains the Top Header Left Links of all the Pages
							include $RootPath.'MyWork/PhpFiles/DRC/TopHeaderRight.php';
						?>
					</div>
				</div>
			</div>
			<div id=Content>
				<div id=SubMenuPanel>
					<?php
							#Inlcuded the File which Contains the SubMenu Panel of DRC Page
							include $RootPath.'MyWork/PhpFiles/DRC/SubMenuPanel.php';
					?>
				</div>			
			<div id=ContentPanel>
				<br/>
				<div id=RegContainer>
					<div id="ContentText">
						<Center>
								<?php
								if($ReqPage=="FirstStage"){
									include $RootPath.'MyWork/PhpFiles/DRC/CompleteDRC.php';
								}
								else if($ReqPage=="SecondStage"){
									include $RootPath.'MyWork/PhpFiles/DRC/NewDoctor.php';
								}
								else if($ReqPage=="ThirdStage"){
									include $RootPath.'MyWork/PhpFiles/DRC/NewPhotoGrapher.php';
								}
								
								else if($ReqPage=="MainPage"){
									include $RootPath.'MyWork/PhpFiles/DRC/InboxDRC.php';
								}
								else if($ReqPage=="NewCamp"){
									include $RootPath.'MyWork/PhpFiles/DRC/NewCamp.php';
								}
								else if($ReqPage=="CampDetails"){
									if($Result == 1){
									$CampStatus = "Planned";
									$CampColor  = "blue";
									include $RootPath.'MyWork/PhpFiles/DRC/CampHeader.php';
									echo '<br/><br/>
										<div id="ContentText">
											<Center>
												<div id="TitleHeader" style="color:red;font-size:17px;"><b>This Camp is Planned !</b></div>
											</Center>
										</div>';
										
									}
									else if($Result == 2){
										$CampStatus = "Completed";
										$CampColor  = "red";
										include $RootPath.'MyWork/PhpFiles/DRC/CampHeader.php';
										include $RootPath.'MyWork/PhpFiles/DRC/CampDetails.php';
									}
									else {
										include $RootPath.'MyWork/PhpFiles/DRC/CampHeader.php';
										include $RootPath.'MyWork/PhpFiles/DRC/CampDetails.php';
									}
								}
								else if($ReqPage=="NewPatient"){
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepOne.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepTwo.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepThree.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepFour.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepFive.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepSix.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepSeven.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepEight.php';
										include $RootPath.'MyWork/PhpFiles/DRC/NewPatient/NewPatientStepNine.php';									
								}
								else if($ReqPage=="PatientDetails"){
									$CampStatus = "Active";
									$CampColor  = "green";
									
									if($Result == 1){
										$CampStatus = "Planned";
										$CampColor  = "blue";
									}
									else if($Result == 2){
										$CampStatus = "Completed";
										$CampColor  = "red";
									}
									include $RootPath.'MyWork/PhpFiles/DRC/CampHeader.php';
									include $RootPath.'MyWork/PhpFiles/DRC/PatientDetails.php';

								}
								else if($ReqPage=="Search"){
									# Page for Searching
									//include $RootPath.'MyWork/PhpFiles/Admin/Search.php';
								}
								else {
									# File Not Found !
									include $RootPath.'MyWork/PhpFiles/DRC/404Page.php';
								}
						?>
						</Center>
					</div>
				</div>
				<div id=Footer>			 
					<?php
						include $RootPath.'MyWork/PhpFiles/Common/Footer.php';
					?>
      		   </div>
		</div>
		</Center>
	</body>
</html>

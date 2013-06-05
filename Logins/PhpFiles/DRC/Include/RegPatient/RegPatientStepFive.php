<?php
	# -1 means not filled 
	$HyperTension = isSet($_POST["HyperTension"])?$_POST["HyperTension"]:'';
	if($HyperTension == 'on'){
		$HyperTensionDuration   = isSet($_POST["HyperTensionDuration"])?$_POST["HyperTensionDuration"]:'';
		if($DCApi->IsItNumber($HyperTensionDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$HyperTensionDuration   = -1;
	}	
	
	$CardiacDisease = isSet($_POST["CardiacDisease"])?$_POST["CardiacDisease"]:'';
	if($CardiacDisease == 'on'){
		$CardiacDiseaseDuration   = isSet($_POST["CardiacDiseaseDuration"])?$_POST["CardiacDiseaseDuration"]:'';
		if($DCApi->IsItNumber($CardiacDiseaseDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$CardiacDiseaseDuration   = -1;
	}
	
	$Hyperlipidemia = isSet($_POST["Hyperlipidemia"])?$_POST["Hyperlipidemia"]:'';
	if($Hyperlipidemia == 'on'){
		$HyperlipidemiaDuration   = isSet($_POST["HyperlipidemiaDuration"])?$_POST["HyperlipidemiaDuration"]:'';
		if($DCApi->IsItNumber($HyperlipidemiaDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$HyperlipidemiaDuration   = -1;
	}
	
	$Neuropathy = isSet($_POST["Neuropathy"])?$_POST["Neuropathy"]:'';
	if($Neuropathy == 'on'){
		$NeuropathyDuration   = isSet($_POST["NeuropathyDuration"])?$_POST["NeuropathyDuration"]:'';
		if($DCApi->IsItNumber($NeuropathyDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$NeuropathyDuration   = -1;
	}
	
	$Nephropathy = isSet($_POST["Nephropathy"])?$_POST["Nephropathy"]:'';
	if($Nephropathy == 'on'){
		$NephropathyDuration   = isSet($_POST["NephropathyDuration"])?$_POST["NephropathyDuration"]:'';
		if($DCApi->IsItNumber($NephropathyDuration) == 0){
			$FormStatus = 0;
		}
	}
	else {
		$NephropathyDuration   = -1;
	}
	
	$ASIComments = isSet($_POST["ASIComments"])?$_POST["ASIComments"]:'';
?>

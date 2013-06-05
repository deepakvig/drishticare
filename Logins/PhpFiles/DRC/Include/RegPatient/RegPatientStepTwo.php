<?php
	#Episode Details
	$PatientEpisodeDate  = $SessionObject->GetData("Year").'-'.$SessionObject->GetData("Month").'-'.$SessionObject->GetData("Date");
	$EpisodeComments     = isSet($_POST["EpisodeComments"])?$_POST["EpisodeComments"]:'';
	$DBVision            = isSet($_POST["DBVision"])?$_POST["EpisodeComments"]:'';
	$Flashes             = isSet($_POST["Flashes"])?$_POST["Flashes"]:'';
	$DoubleVision        = isSet($_POST["DoubleVision"])?$_POST["DoubleVision"]:'';
	
?>

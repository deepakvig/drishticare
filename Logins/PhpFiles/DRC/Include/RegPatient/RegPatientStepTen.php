<?php
	# -1 means not filled i
	#Visual Details
	$LeftEyeVisualWithoutGlassesValue  = isSet($_POST["WithoutGlassesLeftEye"])?$_POST["WithoutGlassesLeftEye"]:'';
	$RightEyeVisualWithoutGlassesValue = isSet($_POST["WithoutGlassesRightEye"])?$_POST["WithoutGlassesRightEye"]:'';
	$LeftEyeVisualWithGlassesValue     = isSet($_POST["WithGlassesLeftEye"])?$_POST["WithGlassesLeftEye"]:'';
	$RightEyeVisualWithGlassesValue    = isSet($_POST["WithGlassesRightEye"])?$_POST["WithGlassesRightEye"]:'';
	$LeftEyeMediaOpacityValue          = isSet($_POST["OpacityLeftEye"])?$_POST["OpacityLeftEye"]:'';
	$RightEyeMediaOpacityValue         = isSet($_POST["OpacityRightEye"])?$_POST["OpacityRightEye"]:'';

?>

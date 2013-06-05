<?php
		# -1 for nothing is filled
		$NBC = isSet($_POST["NBC"])?$_POST["NBC"]:'';
		if($NBC == "on"){
			$NBCValue = isSet($_POST["NBCValue"])?$_POST["NBCValue"]:'';
			if($DCApi->IsItNumber($NBCValue) == 0 ){
				$FormStatus = 0;
			}
		}
		else {
			$NBCValue = -1;
		}
		
		$PBC = isSet($_POST["PBC"])?$_POST["PBC"]:'';
		if($PBC == "on"){
			$PBCValue = isSet($_POST["PBCValue"])?$_POST["PBCValue"]:'';
			if($DCApi->IsItNumber($PBCValue) == 0 ){
				$FormStatus = 0;
			}
		}
		else {
			$PBCValue = -1;
		}
		
		$Cartract = isSet($_POST["Cartract"])?$_POST["Cartract"]:'';
		if($Cartract == "on"){
			$CartractValue = isSet($_POST["CartractValue"])?$_POST["CartractValue"]:'';
			if($DCApi->IsItNumber($CartractValue) == 0 ){
				$FormStatus = 0;
			}
		}
		else {
			$CartractValue = -1;
		}
		
		$SLExaminationComments = $_POST["SLExaminationComments"];
		
?>

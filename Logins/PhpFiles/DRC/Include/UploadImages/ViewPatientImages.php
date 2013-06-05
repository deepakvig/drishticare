<?php
        $FilePathLeft = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/left/".$CampID."_".$PatientID.".xml";
        $FilePathRight = "/home/deepakvig/web168/web/DCare/Uploads/".$UserName."/".$CampID."/".$PatientID."/right/".$CampID."_".$PatientID.".xml";


	$fh = fopen($FilePathLeft, 'r');
        $ImageData = fread($fh, filesize($FilePathLeft));

	$ImageData = "
	<Images>
        	".$ImageData."
	</Images>";
	fclose($fh);
	$XML = simplexml_load_string($ImageData);
	$Counter = 0;

	$ImagePath = '<table><tr>';
	


	
	foreach ($XML->ImageDetails as $Record)
	{
		 $ImagePath = $ImagePath."<td><img src=\"".$Record->attributes()->src."\" width='200' height='200'></img></td>";
			
        	 $Counter = $Counter + 1;
			if($Counter%3==0){
			$ImagePath = $ImagePath."</tr><tr>";
				}

	}

	echo $ImagePath;

	$fh = fopen($FilePathRight, 'r');
        $ImageData = fread($fh, filesize($FilePathRight));

        $ImageData = "
        <Images>
                ".$ImageData."
        </Images>";
        fclose($fh);
        $XML = simplexml_load_string($ImageData);
        $Counter = 0;

        $ImagePath = '<table><tr>';




        foreach ($XML->ImageDetails as $Record)
        {
		 $ImagePath = $ImagePath."<td><img src=\"".$Record->attributes()->src."\" width='200' height='200'></img></td>";

                 $Counter = $Counter + 1;
                        if($Counter%3==0){
                        	$ImagePath = $ImagePath."</tr><tr>";
                        }

        }
	echo $ImagePath;

	
?>

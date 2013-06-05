<?php
$ImageXMLFile = "/home/deepakvig/web168/web/DCare/Uploads/7647966b7343c29048673252e490f736/855cafb4a9807b9fc3787391d4e23142/7647966b7343c29048673252e490f736_855cafb4a9807b9fc3787391d4e23142.xml";
$fh = fopen($ImageXMLFile, 'r');
$ImageData = fread($fh, filesize($ImageXMLFile));
$ImageData = "
<Images>
	".$ImageData."
</Images>";
fclose($fh);
$XML = simplexml_load_string($ImageData);
$Counter = 0;
foreach ($XML->ImageDetails as $Record)
{
	$Counter = $Counter + 1;
}
echo $Counter;
?>

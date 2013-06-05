<?php
$Query      = 'Select NoOfImage from patientimagesrc
				  where 
				  PatientHashCode="'.$PatientHashCode.'"
				  and 
				  CampHashCode="'.$CampHashCode.'"';
$Result     = $DBObject->ExecuteQuery($Query);
$Result     = $DBObject->FetchResult();
if($DBObject->NumberOfRows()==0){
	
}
else {
	$NoOfImage  = $Result[0]["NoOfImage"];
	if($NoOfImage == "12"){
		$Query = 'Update PatientStatus set patientimagestatus = "Completed"
				 Where 
				 PatientHashCode="'.$PatientHashCode.'"
				 and 
				 CampHashCode="'.$CampHashCode.'"';
		$Result     = $DBObject->ExecuteQuery($Query);
		echo $Query;
		header("Location: /DCare/Logins/PhpFiles/DRC/Include/UploadImages/HandleImages.php?ReqPage=UploadImages&PatientHashCode=".$PatientHashCode);
		exit;
	}
}	
$Query     = 'Delete from PatientImageSrc where 
			  PatientHashCode="'.$PatientHashCode.'"
			  and 
			  CampHashCode="'.$CampHashCode.'"';
$Result    =  $DBObject->ExecuteInsertOrUpdate($Query);

$Query     = 'Insert into PatientImageSrc values 
					( "'.$PatientHashCode.'",
					"'.$CampHashCode.'",
					"0",  
					"",
					"",
					"",
					"",
					"",
					"",
					"",
					"",
					"",
					"",
					"",
					"")';	
	$Result    =  $DBObject->ExecuteInsertOrUpdate($Query);

?>
<html>
<body onload = >

	<?php
		// Inclusion of JScripts 
		echo '
		<script type="text/javascript" src="/DCare/Logins/PhpFiles/DRC/Include/UploadImages/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="/DCare/Logins//PhpFiles/DRC/Include/UploadImages/jquery.uploadify.js"></script>
		<link rel="stylesheet" type="text/css" href=/DCare/Logins/PhpFiles/DRC/Include/UploadImages/uploadify.css id=stylesheet media=screen/>';
	?>	
	<Center>
	<table  width="100%" height="30%">
	<tr>
	<td>
	<Center>
	<table>
		<tr>
			<td>
			<Center>
				Please browse all the 12 files needed to be Uploaded !
				<br/><br/>
			</Center>
			</td>
		<tr>
			<td>
			<Center>
				<input type="file" id="fileInput" name="fileInput2" />
			</Center>
			</td>
		<tr>
	</table>
	</Center>
	</td>
	</tr>
	</table>
	</Center>
	<?php
		echo "<script type=text/javascript>
						$(document).ready(function() {
										$('#fileInput').fileUpload ({
										'uploader'   : '/DCare/Logins/PhpFiles/DRC/Include/UploadImages/uploader.swf',
										'script'     : '/DCare/Logins/PhpFiles/DRC/Include/UploadImages/Upload.php',
										'cancelImg'  : '/DCare/Logins/PhpFiles/DRC/Include/UploadImages/cancel.png',
										'buttonText' : 'Browse Files',
										'fileExt'    : '*.jpeg;*.jpg;*.png',
										onSelect: function (event,queueID,fileObj) {
														$('#fileInput').fileUploadSettings('scriptData', '&CampHashCode=".$CampHashCode."&PatientHashCode=".$PatientHashCode."&QueueID='+ queueID);
														$('#fileInput').fileUploadStart(queueID);
										},
										'onAllComplete': function(event,data){ 
											window.location.reload(true);
										},
										'multi':true,
							});
						});
			</script>";
	?>
			    <div id="filesUploaded"></div>

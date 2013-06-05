<?php
	if (!empty($_FILES)) {
		$TempFile = $_FILES['Filedata']['tmp_name'];
		$TargetPath = $_SERVER['DOCUMENT_ROOT'] . $_GET['folder'] . '/';
		$TargetFile =  str_replace('//','/',$TargetPath) . $_FILES['Filedata']['name'];
	
		// Uncomment the following line if you want to make the directory if it doesn't exist
		// mkdir(str_replace('//','/',$targetPath), 0755, true);
	
		move_uploaded_file($TempFile,$TargetFile);
}
echo "1";
?>
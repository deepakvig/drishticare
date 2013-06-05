<?php
$DBObject = new DataBase();
$Result = $DBObject->ExecuteQuery("Select * from dcmapping where FirstEntity= '".md5($UserName)."' and WhatIsSecond = 'Dc'");
$FinalResult = $DBObject->FetchResult();
echo '
	<link rel="stylesheet" type="text/css" href="/DCare/Logins/Style/Table.css" media="screen"/>
		<table width=100% id=CampTable cellspacing="0">
			<thead id=CampTable>
				<tr id=CampTable>
					<td style="border-left: 1px solid #000; border-bottom: 1px solid #000;">No.</td>
					<td style="border-bottom: 1px solid #000;">DRC ID</td>
					<td style="border-bottom: 1px solid #000;">DRC Name</td>
					<td style="border-bottom: 1px solid #000;">DRC Address</td>
					<td style="border-bottom: 1px solid #000;">DRC City</td>
					<td style="border-bottom: 1px solid #000;">DRC State</td>
					<td style="border-bottom: 1px solid #000;">DRC Country</td>
					<td style="border-bottom: 1px solid #000;">DRC Phone</td>
					<td style="border-right: 1px solid #000;border-bottom: 1px solid #000;">Mobile</td>
				</tr>
		</thead>
		<tbody id=CampTable>';
	for($i=0;$i<count($FinalResult);$i++){
		if($i%2==1){
			echo '<tr id=CampTableFirst class="alternate">';
		}
		else {
			echo '<tr id=CampTableFirst class="selected">';
		}
		$Query       = "Select * from drcdetails Where DRCHashCode = '".$FinalResult[$i]["SecondEntity"]."'";
		$Result      = $DBObject->ExecuteQuery($Query);
		$Result      = $DBObject->FetchResult();
		echo 
			'<td>'.($i+1).'</td>
			<td>'.$Result[0]["DRCUserName"].'</td>
			<td>'.$Result[0]["DRCName"].'</td>';
		if($Result[0]["DRCStatus"] == 0){
			echo '<td>Not Given</td>
			<td>Not Given</td>
			<td>Not Given</td>
			<td>Not Given</td>
			<td>Not Given</td>
			<td style="border-right: 1px solid #d9d9d9;">Not Given</td>';
		}
		else {
			echo '<td>'.$Result[0]["DRCAddress1"].','.$Result[0]["DRCAddress2"].'<br/>Pin Code -:'.$Result[0]["DRCPinCode"].'</td>
			<td>'.$Result[0]["DRCCity"].'</td>
			<td>'.$Result[0]["DRCState"].'</td>
			<td>'.$Result[0]["DRCCountry"].'</td>
			<td>'.$Result[0]["DRCPhone"].'</td>
			<td style="border-right: 1px solid #d9d9d9;">'.$Result[0]["DRCMobile"].'</td>';
		}
		echo '</tr>';
	}
	echo '</tbody></table>';
?>

<?php
$DBObject = new DataBase();
$Result = $DBObject->ExecuteQuery("Select * from dcmapping where FirstEntity= '".md5($UserName)."' and WhatIsSecond = 'Pr'");
$FinalResult = $DBObject->FetchResult();
echo '
	<link rel=stylesheet type=text/css href='.$ApacheRootPath.'/DCare/Logins/Style/Table.css media=screen/>
	<table width=100% id=CampTable cellspacing="0">
		<thead id=CampTable>
			<tr id=CampTable>
				<td style="border-left: 1px solid #000; border-bottom: 1px solid #000;">
					No.
				</td>
				<td style="border-bottom: 1px solid #000;">
					Provider ID
				</td>
				<td style="border-bottom: 1px solid #000;">
					Provider Name
				</td>
				<td style="border-right: 1px solid #000;border-bottom: 1px solid #000;">
					Provider Organization
				</td>
			</tr>
		</thead>
	<tbody id=CampTable>';
for($i=0;$i<count($FinalResult);$i++){
	if($i%2==1){
		echo '<tr id=CampTableFirst class="alternate">';
	}
	else {
		echo '
			<tr id=CampTableFirst class="selected">
		';
	}
	$Query       = "Select * from providerdetails Where ProviderHashCode = '".$FinalResult[$i]["SecondEntity"]."'";
	$Result      = $DBObject->ExecuteQuery($Query);
	$Result      = $DBObject->FetchResult();
	echo
		'<td>'
			.($i+1).
		'</td>
		<td>'
			.$Result[0]["ProviderUserName"].
		'</td>
		<td>'
			.$Result[0]["ProviderName"].
		'</td>
		<td style="border-right: 1px solid #d9d9d9;">'
			.$Result[0]["ProviderOrganization"].
		'</td>
	</tr>';
}
echo 
'	</tbody>
</table>';
$DBObject->CloseDataBaseConnection();
?>

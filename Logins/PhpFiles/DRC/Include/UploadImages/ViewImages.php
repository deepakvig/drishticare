<?php
$Query      = 'Select *  from patientimagesrc
			   where 
			   PatientHashCode="'.$PatientHashCode.'"
			   and 
			   CampHashCode="'.$CampHashCode.'"';
$Result     = $DBObject->ExecuteQuery($Query);
$Result     = $DBObject->FetchResult();
if($DBObject->NumberOfRows()==0){
	
}
else {
	$Image1  = $Result[0]["Image1"];
	$Image2  = $Result[0]["Image2"];
	$Image3  = $Result[0]["Image3"];
	$Image4  = $Result[0]["Image4"];
	$Image5  = $Result[0]["Image5"];
	$Image6  = $Result[0]["Image6"];
	$Image7  = $Result[0]["Image7"];
	$Image8  = $Result[0]["Image8"];
	$Image9  = $Result[0]["Image9"];
	$Image10 = $Result[0]["Image10"];
	$Image11 = $Result[0]["Image11"];
	$Image12 = $Result[0]["Image12"];
	echo '<Center><table>
				<tr>
					<td>
						<img src='.$Image1.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image2.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image3.' border=1 height=100 width=100 >
					</td>
				</tr>
				<tr>
					<td>
						<img src='.$Image4.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image5.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image6.' border=1 height=100 width=100 >
					</td>
				</tr>
				<tr>
					<td>
						<img src='.$Image7.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image8.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image9.' border=1 height=100 width=100 >
					</td>
				</tr>
				<tr>
					<td>
						<img src='.$Image10.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image11.' border=1 height=100 width=100 >
					</td>
					<td>
						<img src='.$Image12.' border=1 height=100 width=100 >
					</td>
				</tr>
			</table></Center>';
}		
	
?>

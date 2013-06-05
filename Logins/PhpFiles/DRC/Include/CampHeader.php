<?php
$Result   = $DBObject->ExecuteQuery('Select CampName, CampStartDate, CampEndDate from campdetails where CampHashCode = "'.$DBObject->EscapeString($CampHashCode).'"');
$Result   =  $DBObject->FetchResult();


list($StYear, $StMonth, $StDate) = split('[/.-]', $Result[0]["CampStartDate"]);
list($EnYear, $EnMonth, $EnDate) = split('[/.-]', $Result[0]["CampEndDate"]);
		
$StartDate  = $StDate.'-'.$StMonth.'-'.$StYear;
$EndingDate = $EnDate.'-'.$EnMonth.'-'.$EnYear;
if($CampStatusCode == "3"){
	$CampStatus = "Active";
}
else if($CampStatusCode == "2"){
	$CampStatus = "Completed";
}
else if($CampStatusCode == "1"){
	$CampStatus = "Planned";
}



if($CampStatus == "Completed"){
echo '
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						
				</tr>
				<tr id=CampTableFirst class="alternate">

					<td style="border-right: 1px solid #c0c6cb;">
						<table style="border:0px;">
						<tr style="border:0px;"><td style="border:0px;"><img src=/DCare/Images/Info.png></td>
			      <td style="border:0px;"><font size=2><b>You can\'t register a Patient in this Camp because it is Completed Camp.</b></font></td>	</tr>
			</table>

					</td>
				</tr>
				
			</table><br/>';

}
echo '
<table id=CampTable cellspacing="0" width=100% style="padding-left:20px;" valing=top>
			<tbody id=CampTableFirst>
				<tr id=CampTableFirst class="selected">
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>		
						<td style="border-left:0px;border-top:0px;border-right:0px;"></td>';
					if($CampStatus != "Planned"){
						echo '<td style="border-left:0px;border-top:0px;border-right:0px;"></td>';
					}
echo'				</tr>
				<tr id=CampTableFirst class="selected">
					<td >
						<font size=2><b>'.$Result[0]["CampName"].'</b></font>
					</td>
					<td >
						<font size=2><b>'.$CampStatus.'</b></font>
					</td>
					<td style="border-right: 1px solid #c0c6cb;">
						<font size=2><b>'.$StartDate.' to '.$EndingDate.'</b></font>
						</td>';
					if($CampStatus != "Planned"){

//					echo '<td style="border-right: 1px solid #c0c6cb;" align=center>
//					<a href="" id=LoginButton><font color=white size=2>Edit</font></a>
//					&nbsp;	&nbsp;
//					<a href="" id=LoginButton><font color=white size=2>Delete</font></a>
//						</td>';
					}
	echo'			</tr>
			</tbody>	
		</table><br/>';

?>

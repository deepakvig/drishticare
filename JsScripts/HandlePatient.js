function HandleDiabetes(){
	var Value1 = document.RegisterForm.DiabetesType[0].checked;
	var Value2 = document.RegisterForm.DiabetesType[1].checked;
	if(Value1 == true){
		document.RegisterForm.DiabetesTypeTwoDuration.value = "";
		document.RegisterForm.DiabetesTypeOneDuration.disabled = false;
		document.RegisterForm.DiabetesTypeTwoDuration.disabled = true;
	}
	if(Value2 == true){
		document.RegisterForm.DiabetesTypeOneDuration.value = "";
		document.RegisterForm.DiabetesTypeOneDuration.disabled = true;
		document.RegisterForm.DiabetesTypeTwoDuration.disabled = false;
	}
}

function HandleMedicalTrmnt(){
	var ValueDiet       = document.RegisterForm.DietControl.checked;
	var ValueInsulin    = document.RegisterForm.Insulin.checked;
	var ValueOHA        = document.RegisterForm.OHA.checked;
	var ValueAltDrugs   = document.RegisterForm.AltDrugs.checked;
	var ValueNone       = document.RegisterForm.MedicalTrmntNone.checked;
	if(ValueDiet == true){
		document.RegisterForm.DietControlDuration.disabled    = false;
		document.RegisterForm.DietControlRemarks.disabled     = false;
		
	}
	else {
		document.RegisterForm.DietControlDuration.disabled    = true;
		document.RegisterForm.DietControlRemarks.disabled     = true;
		
		document.RegisterForm.DietControlDuration.value    = "";
		document.RegisterForm.DietControlRemarks.value     = "";
		
	}
	
	
	if(ValueInsulin == true){
		document.RegisterForm.InsulinDuration.disabled    = false;
		document.RegisterForm.InsulinRemarks.disabled     = false;
	}
	else {
		document.RegisterForm.InsulinDuration.disabled    = true;
		document.RegisterForm.InsulinRemarks.disabled     = true;
		
		document.RegisterForm.InsulinDuration.value    = "";
		document.RegisterForm.InsulinRemarks.value     = "";
	}
	
	
	if(ValueOHA == true){
		document.RegisterForm.OHADuration.disabled    = false;
		document.RegisterForm.OHARemarks.disabled     = false;
		
	}
	else {
		document.RegisterForm.OHADuration.disabled    = true;
		document.RegisterForm.OHARemarks.disabled     = true;
		
		document.RegisterForm.OHADuration.value    = "";
		document.RegisterForm.OHARemarks.value     = "";
	}
	
	
	if(ValueAltDrugs == true){
		document.RegisterForm.AltDrugsDuration.disabled    = false;
		document.RegisterForm.AltDrugsRemarks.disabled     = false;
	}
	else {
		document.RegisterForm.AltDrugsDuration.disabled    = true;
		document.RegisterForm.AltDrugsRemarks.disabled     = true;
		
		document.RegisterForm.AltDrugsDuration.value    = "";
		document.RegisterForm.AltDrugsRemarks.value     = "";
	}
	
}


function HandleMedicalTrmntNone(){
	var ValueNone       = document.RegisterForm.MedicalTrmntNone.checked;
	
	if(ValueNone == true){
		document.RegisterForm.DietControlDuration.disabled = true;
		document.RegisterForm.DietControlRemarks.disabled  = true;
		
		document.RegisterForm.DietControlDuration.value    = "";
		document.RegisterForm.DietControlRemarks.value     = "";
		
		document.RegisterForm.InsulinDuration.disabled     = true;
		document.RegisterForm.InsulinRemarks.disabled      = true;
		
		document.RegisterForm.InsulinDuration.value        = "";
		document.RegisterForm.InsulinRemarks.value         = "";
		
		document.RegisterForm.OHADuration.disabled         = true;
		document.RegisterForm.OHARemarks.disabled          = true;
		
		document.RegisterForm.OHADuration.value            = "";
		document.RegisterForm.OHARemarks.value             = "";
		
		
		
		document.RegisterForm.AltDrugsDuration.disabled    = true;
		document.RegisterForm.AltDrugsRemarks.disabled     = true;
		
		document.RegisterForm.AltDrugsDuration.value       = "";
		document.RegisterForm.AltDrugsRemarks.value        = "";
		
		
		document.RegisterForm.DietControl.checked       = false;
		document.RegisterForm.Insulin.checked           = false; 
		document.RegisterForm.OHA.checked               = false; 
		document.RegisterForm.AltDrugs.checked          = false;
		
		
		document.RegisterForm.DietControl.disabled       = true;
		document.RegisterForm.Insulin.disabled           = true; 
		document.RegisterForm.OHA.disabled               = true; 
		document.RegisterForm.AltDrugs.disabled          = true;
		
	}
	else {
	
		document.RegisterForm.DietControl.disabled       = false;
		document.RegisterForm.Insulin.disabled           = false; 
		document.RegisterForm.OHA.disabled               = false; 
		document.RegisterForm.AltDrugs.disabled          = false;
		
		
	}
		
}

function ASIHandle(){
	
	var HTension       = document.RegisterForm.HyperTension.checked ;
	var CDisease       = document.RegisterForm.CardiacDisease.checked ;
	var Hyperlipidemia = document.RegisterForm.Hyperlipidemia.checked;
	var Neuropathy     = document.RegisterForm.Neuropathy.checked;
	var Nephropath     = document.RegisterForm.Nephropathy.checked ;
	
	
	
	if(HTension == true){
		document.RegisterForm.HyperTensionDuration.disabled    = false;
	}
	else {
		document.RegisterForm.HyperTensionDuration.disabled = true;
		document.RegisterForm.HyperTensionDuration.value    = "";
	}
	
	if(CDisease == true){
		document.RegisterForm.CardiacDiseaseDuration.disabled  = false;
	}
	else {
		document.RegisterForm.CardiacDiseaseDuration.disabled  = true;
		document.RegisterForm.CardiacDiseaseDuration.value     = "";
	}
	
	if(Hyperlipidemia == true){
		document.RegisterForm.HyperlipidemiaDuration.disabled  = false;
	}
	else {
		document.RegisterForm.HyperlipidemiaDuration.disabled  = true;
		document.RegisterForm.HyperlipidemiaDuration.value     = "";

	}


	if(Neuropathy == true){
		document.RegisterForm.NeuropathyDuration.disabled      = false;
	}
	else {
		document.RegisterForm.NeuropathyDuration.disabled      = true;
		document.RegisterForm.NeuropathyDuration.value         = "";
	}
	
	if(Nephropath == true){
		document.RegisterForm.NephropathyDuration.disabled     = false;
	}
	else {
		document.RegisterForm.NephropathyDuration.disabled     = true;
		document.RegisterForm.NephropathyDuration.value        = "";
	}

}

function ASIHandleNone(){
	var ValueNone       = document.RegisterForm.ASINone.checked;
	if(ValueNone == true){
		document.RegisterForm.HyperTensionDuration.value    = "";
		document.RegisterForm.CardiacDiseaseDuration.value  = "";
		document.RegisterForm.HyperlipidemiaDuration.value  = "";
		document.RegisterForm.NeuropathyDuration.value      = "";
		document.RegisterForm.NephropathyDuration.value     = "";


		document.RegisterForm.HyperTensionDuration.disabled    = true;
		document.RegisterForm.CardiacDiseaseDuration.disabled  = true;
		document.RegisterForm.HyperlipidemiaDuration.disabled  = true;
		document.RegisterForm.NeuropathyDuration.disabled      = true;
		document.RegisterForm.NephropathyDuration.disabled     = true;

		
		document.RegisterForm.HyperTension.checked    = false;
		document.RegisterForm.CardiacDisease.checked  = false;
		document.RegisterForm.Hyperlipidemia.checked  = false;
		document.RegisterForm.Neuropathy.checked      = false;
		document.RegisterForm.Nephropathy.checked     = false;

		document.RegisterForm.HyperTension.disabled    = true;
		document.RegisterForm.CardiacDisease.disabled  = true;
		document.RegisterForm.Hyperlipidemia.disabled  = true;
		document.RegisterForm.Neuropathy.disabled      = true;
		document.RegisterForm.Nephropathy.disabled     = true;
	}
	else {
		document.RegisterForm.HyperTension.disabled    = false;
		document.RegisterForm.CardiacDisease.disabled  = false;
		document.RegisterForm.Hyperlipidemia.disabled  = false;
		document.RegisterForm.Neuropathy.disabled      = false;
		document.RegisterForm.Nephropathy.disabled     = false;

	}
}

function HandleOR(){
	var Smoking = document.RegisterForm.Smoking.checked;
	var Alcohal	= document.RegisterForm.Alcohal.checked;
	if(Smoking == true){
		document.RegisterForm.SmokingDuration.disabled = false;
		
	}
	else {
		document.RegisterForm.SmokingDuration.value    = "";
		document.RegisterForm.SmokingDuration.disabled = true;
		
	}
	
	if(Alcohal == true){
		document.RegisterForm.AlcohalDuration.disabled = false;
	}
	else {
		document.RegisterForm.AlcohalDuration.value    = "";
		document.RegisterForm.AlcohalDuration.disabled = true;
		
	}
}

function HandleORNone(){
	var ValueNone       = document.RegisterForm.ORNone.checked;
	if(ValueNone == true){
	
		document.RegisterForm.Smoking.disabled  = true;
		document.RegisterForm.Alcohal.disabled  = true;
	
		document.RegisterForm.SmokingDuration.disabled = true;
		document.RegisterForm.AlcohalDuration.disabled = true;
		
		
		document.RegisterForm.SmokingDuration.value    = "";
		document.RegisterForm.AlcohalDuration.value    = "";
		
		document.RegisterForm.Smoking.checked  = false;
		document.RegisterForm.Alcohal.checked  = false;
	
	}
	else {
		document.RegisterForm.Smoking.disabled  = false;
		document.RegisterForm.Alcohal.disabled  = false;
	
	}
}

function HandlePHOTrmnt(){
	var LaserOptionOne   = document.RegisterForm.LaserOptionOne.checked;
	var LaserOptionTwo   = document.RegisterForm.LaserOptionTwo.checked;
	var LaserOptionThree = document.RegisterForm.LaserOptionThree.checked;
	
	if(LaserOptionOne == true){
		document.RegisterForm.LaserOptionOneText.disabled     = false;
		document.RegisterForm.LaserOptionOneDuration.disabled = false;
	}
	else {
		document.RegisterForm.LaserOptionOneText.disabled     = true;
		document.RegisterForm.LaserOptionOneDuration.disabled = true;
		
		document.RegisterForm.LaserOptionOneText.value	   = "";
		document.RegisterForm.LaserOptionOneDuration.value = "";
	}
	
	if(LaserOptionTwo == true){
		document.RegisterForm.LaserOptionTwoText.disabled = false;
		document.RegisterForm.LaserOptionTwoDuration.disabled = false;
	}
	else {
		document.RegisterForm.LaserOptionTwoText.disabled     = true;
		document.RegisterForm.LaserOptionTwoDuration.disabled = true;
		
		document.RegisterForm.LaserOptionTwoText.value	   = "";
		document.RegisterForm.LaserOptionTwoDuration.value = "";

	}
	
	if(LaserOptionThree == true){
		document.RegisterForm.LaserOptionThreeText.disabled = false;
		document.RegisterForm.LaserOptionThreeDuration.disabled = false;
	}
	else {
	
		document.RegisterForm.LaserOptionThreeText.disabled     = true;
		document.RegisterForm.LaserOptionThreeDuration.disabled = true;
		
		document.RegisterForm.LaserOptionThreeText.value	   = "";
		document.RegisterForm.LaserOptionThreeDuration.value = "";

	}
	
	
	
	var SurgeryOptionOne   = document.RegisterForm.SurgeryOptionOne.checked;
	var SurgeryOptionTwo   = document.RegisterForm.SurgeryOptionTwo.checked;
	var SurgeryOptionThree = document.RegisterForm.SurgeryOptionThree.checked;
	
	if(SurgeryOptionOne == true){
		document.RegisterForm.SurgeryOptionOneText.disabled     = false;
		document.RegisterForm.SurgeryOptionOneDuration.disabled = false;
	}
	else {
		document.RegisterForm.SurgeryOptionOneText.disabled     = true;
		document.RegisterForm.SurgeryOptionOneDuration.disabled = true;
		
		document.RegisterForm.SurgeryOptionOneText.value	   = "";
		document.RegisterForm.SurgeryOptionOneDuration.value = "";
	}
	
	if(SurgeryOptionTwo == true){
		document.RegisterForm.SurgeryOptionTwoText.disabled = false;
		document.RegisterForm.SurgeryOptionTwoDuration.disabled = false;
	}
	else {
		document.RegisterForm.SurgeryOptionTwoText.disabled     = true;
		document.RegisterForm.SurgeryOptionTwoDuration.disabled = true;
		
		document.RegisterForm.SurgeryOptionTwoText.value	   = "";
		document.RegisterForm.SurgeryOptionTwoDuration.value = "";

	}
	
	if(SurgeryOptionThree == true){
		document.RegisterForm.SurgeryOptionThreeText.disabled = false;
		document.RegisterForm.SurgeryOptionThreeDuration.disabled = false;
	}
	else {
	
		document.RegisterForm.SurgeryOptionThreeText.disabled     = true;
		document.RegisterForm.SurgeryOptionThreeDuration.disabled = true;
		
		document.RegisterForm.SurgeryOptionThreeText.value	   = "";
		document.RegisterForm.SurgeryOptionThreeDuration.value = "";

	}
}

function HandlePHOTrmntNone(){
	var ValueNoneLaser   = document.RegisterForm.LaserNone.checked;
	var ValueNoneSurgery = document.RegisterForm.SurgeryNone.checked;
	
	if(ValueNoneLaser == true){
	
		document.RegisterForm.LaserOptionOne.checked   = false;
		document.RegisterForm.LaserOptionTwo.checked   = false;
		document.RegisterForm.LaserOptionThree.checked = false;
	
	
		document.RegisterForm.LaserOptionOne.disabled   = true;
		document.RegisterForm.LaserOptionTwo.disabled   = true;
		document.RegisterForm.LaserOptionThree.disabled = true;
		
		
		
		document.RegisterForm.LaserOptionOneText.disabled   = true;
		document.RegisterForm.LaserOptionTwoText.disabled   = true;
		document.RegisterForm.LaserOptionThreeText.disabled = true;
		
		
		document.RegisterForm.LaserOptionOneText.value   = "";
		document.RegisterForm.LaserOptionTwoText.value   = "";
		document.RegisterForm.LaserOptionThreeText.value = "";
		
		
		document.RegisterForm.LaserOptionOneDuration.disabled   = true;
		document.RegisterForm.LaserOptionTwoDuration.disabled   = true;
		document.RegisterForm.LaserOptionThreeDuration.disabled = true;
		
		
		document.RegisterForm.LaserOptionOneDuration.value   = "";
		document.RegisterForm.LaserOptionTwoDuration.value   = "";
		document.RegisterForm.LaserOptionThreeDuration.value = "";
		
	}
	else {
		document.RegisterForm.LaserOptionOne.disabled   = false;
		document.RegisterForm.LaserOptionTwo.disabled   = false;
		document.RegisterForm.LaserOptionThree.disabled = false;
		
		
	}
	
	if(ValueNoneSurgery == true){
	
		document.RegisterForm.SurgeryOptionOne.checked   = false;
		document.RegisterForm.SurgeryOptionTwo.checked   = false;
		document.RegisterForm.SurgeryOptionThree.checked = false;
	
	
		document.RegisterForm.SurgeryOptionOne.disabled   = true;
		document.RegisterForm.SurgeryOptionTwo.disabled   = true;
		document.RegisterForm.SurgeryOptionThree.disabled = true;
		
		
		
		document.RegisterForm.SurgeryOptionOneText.disabled   = true;
		document.RegisterForm.SurgeryOptionTwoText.disabled   = true;
		document.RegisterForm.SurgeryOptionThreeText.disabled = true;
		
		
		document.RegisterForm.SurgeryOptionOneText.value   = "";
		document.RegisterForm.SurgeryOptionTwoText.value   = "";
		document.RegisterForm.SurgeryOptionThreeText.value = "";
		
		
		document.RegisterForm.SurgeryOptionOneDuration.disabled   = true;
		document.RegisterForm.SurgeryOptionTwoDuration.disabled   = true;
		document.RegisterForm.SurgeryOptionThreeDuration.disabled = true;
		
		
		document.RegisterForm.SurgeryOptionOneDuration.value   = "";
		document.RegisterForm.SurgeryOptionTwoDuration.value   = "";
		document.RegisterForm.SurgeryOptionThreeDuration.value = "";
	}
	else {
		document.RegisterForm.SurgeryOptionOne.disabled   = false;
		document.RegisterForm.SurgeryOptionTwo.disabled   = false;
		document.RegisterForm.SurgeryOptionThree.disabled = false;
		
	}
	
	
}


function HandleBldInvstgations(){

	HB              = document.RegisterForm.HB.checked;							
	BloodSugar      = document.RegisterForm.BloodSugar.checked;
	BloodUrea       = document.RegisterForm.BloodUrea.checked;					
	SerumCreatinine = document.RegisterForm.SerumCreatinine.checked;
	UrineAlbumin    = document.RegisterForm.UrineAlbumin.checked;				
	HbAIC           = document.RegisterForm.HbAIC.checked;		
	Cholestrol      = document.RegisterForm.Cholestrol.checked;
	if(HB == true){
		document.RegisterForm.HBValue.disabled = false;							
	}
	else {
		document.RegisterForm.HBValue.disabled = true;							
		document.RegisterForm.HBValue.value    = "";							
	}
	
	if(BloodSugar == true){
		document.RegisterForm.BloodSugarValue.disabled = false;							
	}
	else {
		document.RegisterForm.BloodSugarValue.disabled = true;							
		document.RegisterForm.BloodSugarValue.value    = "";							
	}
	
	if(BloodUrea == true){
		document.RegisterForm.BloodUreaValue.disabled = false;							
	}
	else {
		document.RegisterForm.BloodUreaValue.disabled = true;							
		document.RegisterForm.BloodUreaValue.value    = "";							
	}
	
	if(SerumCreatinine == true){
		document.RegisterForm.SerumCreatinineValue.disabled = false;							
	}
	else {
		document.RegisterForm.SerumCreatinineValue.disabled = true;							
		document.RegisterForm.SerumCreatinineValue.value    = "";							
	}
	
	if(UrineAlbumin == true){
		document.RegisterForm.UrineAlbuminValue.disabled = false;							
	}
	else {
		document.RegisterForm.UrineAlbuminValue.disabled = true;							
		document.RegisterForm.UrineAlbuminValue.value    = "";							
	}
	
	if(HbAIC == true){
		document.RegisterForm.HbAICValue.disabled = false;							
	}
	else {
		document.RegisterForm.HbAICValue.disabled = true;							
		document.RegisterForm.HbAICValue.value    = "";							
	}
	
	if(Cholestrol == true){
		document.RegisterForm.CholestrolValue.disabled = false;							
	}
	else {
		document.RegisterForm.CholestrolValue.disabled = true;							
		document.RegisterForm.CholestrolValue.value    = "";							
	}

}

function HandleBldInvstgationsNone(){
	var	BldIngNone = document.RegisterForm.BldIngNone.checked;
	if(BldIngNone == true ){
		document.RegisterForm.HBValue.value				 = "";			
		document.RegisterForm.BloodSugarValue.value      = "";
		document.RegisterForm.BloodUreaValue.value		 = "";			
		document.RegisterForm.SerumCreatinineValue.value = "";
		document.RegisterForm.UrineAlbuminValue.value    = "";		
		document.RegisterForm.HbAICValue.value			 = "";
		document.RegisterForm.CholestrolValue.value		 = "";
		
		
		
		document.RegisterForm.HBValue.disabled				= true;			
		document.RegisterForm.BloodSugarValue.disabled      = true;
		document.RegisterForm.BloodUreaValue.disabled		= true;					
		document.RegisterForm.SerumCreatinineValue.disabled = true;
		document.RegisterForm.UrineAlbuminValue.disabled	= true;				
		document.RegisterForm.HbAICValue.disabled			= true;		
		document.RegisterForm.CholestrolValue.disabled      = true;
		
		document.RegisterForm.HB.checked              = false; 
		document.RegisterForm.BloodSugar.checked      = false; 
		document.RegisterForm.BloodUrea.checked       = false;
		document.RegisterForm.SerumCreatinine.checked = false;
		document.RegisterForm.UrineAlbumin.checked    = false;
		document.RegisterForm.HbAIC.checked           = false;
		document.RegisterForm.Cholestrol.checked      = false;
		
		document.RegisterForm.HB.disabled              = true;
		document.RegisterForm.BloodSugar.disabled      = true;
		document.RegisterForm.BloodUrea.disabled       = true;
		document.RegisterForm.SerumCreatinine.disabled = true;
		document.RegisterForm.UrineAlbumin.disabled    = true;
		document.RegisterForm.HbAIC.disabled           = true;
		document.RegisterForm.Cholestrol.disabled      = true;
		
		
		
							
	}
	else {
		document.RegisterForm.HB.disabled              = false;
		document.RegisterForm.BloodSugar.disabled      = false;
		document.RegisterForm.BloodUrea.disabled       = false;
		document.RegisterForm.SerumCreatinine.disabled = false;
		document.RegisterForm.UrineAlbumin.disabled    = false;
		document.RegisterForm.HbAIC.disabled           = false;
		document.RegisterForm.Cholestrol.disabled      = false;
	}
}


function HandleSLExm(){
	var NBC      = document.RegisterForm.NBC.checked;
	var PBC      = document.RegisterForm.PBC.checked;
	var Cartract = document.RegisterForm.Cartract.checked;
	if(NBC == true){
		document.RegisterForm.NBCValue.disabled      = false;
	}
	else {
		document.RegisterForm.NBCValue.disabled   = true;
		document.RegisterForm.NBCValue.value      = "";
	}
	
	if(PBC == true){
		document.RegisterForm.PBCValue.disabled = false;
	}
	else {
		document.RegisterForm.PBCValue.disabled = true;
		document.RegisterForm.PBCValue.value    = "";
	}
	
	if(Cartract == true ){
		document.RegisterForm.CartractValue.disabled = false;
	}
	else {
		document.RegisterForm.CartractValue.disabled = true;
		document.RegisterForm.CartractValue.value    = "";
	}
}
function HandleSLExmNone(){
	var	SLNone = document.RegisterForm.SLNone.checked;
	if(SLNone == true ){
	
		document.RegisterForm.NBC.checked      = false;
		document.RegisterForm.PBC.checked      = false;
		document.RegisterForm.Cartract.checked = false;
		
		
		document.RegisterForm.NBC.disabled      = true;
		document.RegisterForm.PBC.disabled      = true;
		document.RegisterForm.Cartract.disabled = true;
		
		document.RegisterForm.NBCValue.value      = "";
		document.RegisterForm.PBCValue.value      = "";
		document.RegisterForm.CartractValue.value = "";
		
		
		document.RegisterForm.NBCValue.disabled      = true;
		document.RegisterForm.PBCValue.disabled      = true;
		document.RegisterForm.CartractValue.disabled = true;
		
		
	}
	else {
		document.RegisterForm.NBC.disabled      = false;
		document.RegisterForm.PBC.disabled      = false;
		document.RegisterForm.Cartract.disabled = false;
		
	}
}

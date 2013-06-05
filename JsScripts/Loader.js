function CheckUserName(Agent)
{
	var xmlHttp;
	var UserName = document.getElementById('UserName').value;
	try{
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (Exception){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (MException){
			try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (MMException){
				alert("Sorry No Ajax !");
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			var FinalResult = xmlHttp.responseText;
			if(FinalResult == 3){
				document.getElementById('DispResult').innerHTML="<font color=#3e503e><table><tr bgcolor=#3e503e width=80%><td></td></tr></table></font>";
			}
			else {
				document.getElementById('DispResult').innerHTML="<font color=#ff0000><table><tr bgcolor=#ff0000 width=80%><td></td></tr></table></font>";
			}
		}
		else {
			document.getElementById('DispResult').innerHTML="<img src=/MyWork/Images/UserNameLoader.gif>";
		}

	}
	UserName = escape(UserName);
	xmlHttp.open("GET","/DCare/Logins/PhpFiles/CheckUser.php?UserName="+UserName+"&Agent="+Agent,true);
	xmlHttp.send(null);
}

function RegisterPatientStep(StepNo)
{
	var xmlHttp;
	try{
		xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
	}
	catch (Exception){
		try{
			xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
		}
		catch (MException){
			try{
				xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch (MMException){
				alert("Sorry No Ajax !");
				return false;
			}
		}
	}
	xmlHttp.onreadystatechange=function(){
		if(xmlHttp.readyState==4){
			document.getElementById('ContentText').innerHTML="<Center>"+xmlHttp.responseText+"</Center>";
		}
		else {
			document.getElementById('ContentText').innerHTML="<Center><br/><br/><br/><img src=/MyWork/Images/Loader.gif height=10 width=100><br/><br/><br/><Center>";
		}

	}
	xmlHttp.open("GET","/MyWork/PhpFiles/RegPatient/RegPatient"+StepNo+".php",true);
	xmlHttp.send(null);
}

function UnEscapeString(TextString){
	return unescape(TextString);
}

function IsItNumber(InputText){
	var RegularExpression = /^([0-9])+$/;
	if(InputText.match(RegularExpression)==null){
		return 0;
	}
	return 1;
}
function ValidateUserName(InputText){
	var RegularExpression = /^([a-zA-Z0-9_])+$/;
	if(InputText.match(RegularExpression)==null){
		return 0;
	}
	return 1;
}
function ValidTime(StTime,EnTime,TdTime){
	if(StTime >=TdTime){
		if(EnTime >= StTime){
			return 1;
		}
	}
	return 0;
}
//Script taken from Hscripts.com. Thanks to them !
function ValidateEmailID(mailids)
{
	var arr = new Array('.com','.net','.org','.biz','.coop','.info','.museum','.name','.pro'
			,'.edu','.gov','.int','.mil','.ac','.ad','.ae','.af','.ag','.ai','.al',
			'.am','.an','.ao','.aq','.ar','.as','.at','.au','.aw','.az','.ba','.bb',
			'.bd','.be','.bf','.bg','.bh','.bi','.bj','.bm','.bn','.bo','.br','.bs',
			'.bt','.bv','.bw','.by','.bz','.ca','.cc','.cd','.cf','.cg','.ch','.ci',
			'.ck','.cl','.cm','.cn','.co','.cr','.cu','.cv','.cx','.cy','.cz','.de',
			'.dj','.dk','.dm','.do','.dz','.ec','.ee','.eg','.eh','.er','.es','.et',
			'.fi','.fj','.fk','.fm','.fo','.fr','.ga','.gd','.ge','.gf','.gg','.gh',
			'.gi','.gl','.gm','.gn','.gp','.gq','.gr','.gs','.gt','.gu','.gv','.gy',
			'.hk','.hm','.hn','.hr','.ht','.hu','.id','.ie','.il','.im','.in','.io',
			'.iq','.ir','.is','.it','.je','.jm','.jo','.jp','.ke','.kg','.kh','.ki',
			'.km','.kn','.kp','.kr','.kw','.ky','.kz','.la','.lb','.lc','.li','.lk',
			'.lr','.ls','.lt','.lu','.lv','.ly','.ma','.mc','.md','.mg','.mh','.mk',
			'.ml','.mm','.mn','.mo','.mp','.mq','.mr','.ms','.mt','.mu','.mv','.mw',
			'.mx','.my','.mz','.na','.nc','.ne','.nf','.ng','.ni','.nl','.no','.np',
			'.nr','.nu','.nz','.om','.pa','.pe','.pf','.pg','.ph','.pk','.pl','.pm',
			'.pn','.pr','.ps','.pt','.pw','.py','.qa','.re','.ro','.rw','.ru','.sa',
			'.sb','.sc','.sd','.se','.sg','.sh','.si','.sj','.sk','.sl','.sm','.sn',
			'.so','.sr','.st','.sv','.sy','.sz','.tc','.td','.tf','.tg','.th','.tj',
			'.tk','.tm','.tn','.to','.tp','.tr','.tt','.tv','.tw','.tz','.ua','.ug',
			'.uk','.um','.us','.uy','.uz','.va','.vc','.ve','.vg','.vi','.vn','.vu',
			'.ws','.wf','.ye','.yt','.yu','.za','.zm','.zw');

	var mai = mailids;
	var val = true;
	var beforeat="";
	var afterat="";
	var afterat2="";

	var dot=mai.lastIndexOf(".");
	var con=mai.substring(dot, mai.length);
	con=con.toLowerCase();
	con=con.toString();

	for(var i=0;i<(arr.length);i++)
	{
		if(con == arr[i])
		{
			val=true;
			break;
		}
		else
		{
			val=false;
		}
	}

	var att=mai.lastIndexOf("@");
	beforeat=mai.substring(0,att);
	beforeat=beforeat.toLowerCase();
	beforeat=beforeat.toString();
	var asci1=beforeat.charCodeAt(0);

	afterat=mai.substring(att+1, dot);
	afterat=afterat.toLowerCase();
	afterat=afterat.toString();

	afterat2=mai.substring(att+1, mai.length);
	afterat2=afterat2.toLowerCase();
	afterat2=afterat2.toString();

	if(beforeat=="" || afterat=="" || beforeat.length>30)
		val=false;

	if(afterat2.length>64 || afterat.length<2)
		val=false;

	if((afterat.charCodeAt(0))==45 || (afterat.charCodeAt(afterat.length-1))==45)
		val=false;

	if(val==true)
	{
		if(asci1 > 47 && asci1 < 58)
			val=false;

		if(asci1 < 48 || asci1 > 57)
		{
			for(var i=0; i<=beforeat.length-1; i++)
			{
				var asci2=beforeat.charCodeAt(i);
				if((asci2<=44 || asci2==47) || (asci2>=58 && asci2<=94) || (asci2==96) || (asci2>=123 && asci2<=127))
				{
					val=false;
					break;
				}
			}

			for(var j=0; j<=afterat.length-1; j++)
			{
				var asci3=afterat.charCodeAt(j);
				if((asci3<=44) || (asci3==46) || (asci3==47) || (asci3>=58 && asci3<=96) || (asci3>=123 && asci3<=127))
				{
					val=false;
					break;
				}
			}	
		}
	}

	if(val==false)
	{
		return 0;
	}
	else
	{
		return 1;
	}
}

function SubmitForm(ReqForm)
{
	var GetElements =document.getElementsByTagName("input");
	var FormStatus = 1;
	if(ReqForm == "LoginForm"){
		var UserName;
		var SecretKey;
		var FormStatus = 1;
		for(var i=0; i<GetElements.length ; i++){
			if(GetElements[i].name=="UserName"){
				UserName = GetElements[i].value;
				if(UserName == ""){
					FormStatus = 0;
				}
			}
			if(GetElements[i].name=="SecretKey"){
				SecretKey = GetElements[i].value;
				if(SecretKey == ""){
					FormStatus = 0;
				}
			}
		}
		if(ValidateUserName(UserName)==0){
			FormStatus = 0;
		}
		if(FormStatus == 0){
			var StyleSheet = document.styleSheets[0];
			document.styleSheets[0].insertRule("#InputBox{border-color: #ff0000}",StyleSheet.cssRules.length)
		}
		else {
			document.LoginForm.submit();
		}
	}
	else if(ReqForm == "NewCamp"){
		var CampName    = document.RegisterForm.CampName.value;
		var CampType    = document.RegisterForm.CampType.value;
		var CampSponsor = document.RegisterForm.CampSponsor.value;


		var StDate  = document.RegisterForm.StDate.value;
		var StMonth = document.RegisterForm.StMonth.value;
		var StYear  = document.RegisterForm.StYear.value;
		var EnDate  = document.RegisterForm.EnDate.value;
		var EnMonth = document.RegisterForm.EnMonth.value;
		var EnYear  = document.RegisterForm.EnYear.value;

		var TdDate  = document.RegisterForm.Date.value;
		var TdMonth = document.RegisterForm.Month.value;
		var TdYear  = document.RegisterForm.Year.value;

		var Oplgst        = document.RegisterForm.Optlgist.value;
		var Photographer  = document.RegisterForm.Photographer.value;
		var CampOrganizer = document.RegisterForm.CampOrganizer.value;
		var Address1      = document.RegisterForm.Address1.value; 
		var CampCity      = document.RegisterForm.CampCity.value;
		var CampState     = document.RegisterForm.CampState.value;
		var PinCode       = document.RegisterForm.PinCode.value;
		//if(CampName == "" || (CampType == "Free" && CampSponsor == "") || CampOrganizer == "" || Address1 == "" || CampCity == "" || IsItNumber(PinCode) == 0){
		if(CampName == "" ){
			FormStatus = 0;
			alert("Please fill in the Input Form Properly");
		}
		var StartingDate=new Date();
		var EndingDate=new Date();
		var TodayDate=new Date();
		StartingDate.setFullYear(StYear,StMonth-1,StDate);
		EndingDate.setFullYear(EnYear,EnMonth-1,EnDate);
		TodayDate.setFullYear(TdYear,TdMonth-1,TdDate);
		var StartingTime = StartingDate.getTime(); 
		var EndingTime   = EndingDate.getTime();
		var TodayTime    = TodayDate.getTime();
		if(ValidTime(StartingTime,EndingTime,TodayTime) == 0){
			FormStatus = 0;
			alert("Please fill in the Dates Properly");
		}
		if(FormStatus==0){
		}
		else {
			document.RegisterForm.submit();
		}		
	}
	else if(ReqForm == "NewDRC"){
		var EmailID = document.RegisterForm.EmailID.value;
		var DRCName = document.RegisterForm.DRCName.value;
		if(ValidateEmailID(EmailID)==0 || DRCName == ""){
			FormStatus = 0;
		}
		if(FormStatus==0){
			alert("Please fill in the Input Form Properly");
			FormStatus = 0;
		
		}
		else {
			document.RegisterForm.submit();
		}
	}
	else if(ReqForm == "NewPhotoGrapher"){
		var EmailID          = document.RegisterForm.EmailID.value;
		var PhotoGrapherName = document.RegisterForm.PhotoGrapherName.value;
		var ClinicName       = document.RegisterForm.ClinicName.value; 
		var ClinicAddress1   = document.RegisterForm.ClinicAddress1.value;  
		var PhotoGrapherCity = document.RegisterForm.PhotoGrapherCity.value;
		var PinCode          = document.RegisterForm.PinCode.value; 
		var ClinicPhone      = document.RegisterForm.ClinicPhone.value;
		var MobileNumber     = document.RegisterForm.MobileNumber.value;
		if(ValidateEmailID(EmailID)==0 || PhotoGrapherName == "" || ClinicName == "" || ClinicAddress1 == "" ||  PhotoGrapherCity == "" || IsItNumber(PinCode) == 0 || IsItNumber(ClinicPhone) == 0 ||IsItNumber(MobileNumber) == 0){
			alert("Please fill in the Input Form Properly");
			FormStatus = 0;
		}
		if(FormStatus == 0){
		}
		else {
			document.RegisterForm.submit();
		}
	}
	else if(ReqForm == "NewDoctor"){
		var EmailID         = document.RegisterForm.EmailID.value;
		var DoctorName      = document.RegisterForm.DoctorName.value;
		var ClinicName      = document.RegisterForm.ClinicName.value;
		var ClinicAddress1  = document.RegisterForm.ClinicAddress1.value;
		var DoctorCity      = document.RegisterForm.DoctorCity.value; 
		var PinCode         = document.RegisterForm.PinCode.value;
		var ClinicPhone     = document.RegisterForm.ClinicPhone.value;
		var MobileNumber    = document.RegisterForm.MobileNumber.value;
		if(ValidateEmailID(EmailID)==0 || DoctorName == "" || ClinicName == "" ||  ClinicAddress1 == "" ||  DoctorCity == "" ||  IsItNumber(PinCode) == 0 || IsItNumber(ClinicPhone)==0 || IsItNumber(MobileNumber) == 0){
			alert("Please fill in the Input Form Properly");
			FormStatus = 0;
		}
		if(FormStatus == 0){
		}
		else {
			document.RegisterForm.submit();
		}
	}
	else if(ReqForm == "CompleteDRC"){
		var EmailID     = document.RegisterForm.EmailID.value;
		var DRCName     = document.RegisterForm.DRCName.value;
		var DRCAddress1 = document.RegisterForm.DRCAddress1.value;
		var DRCCity     = document.RegisterForm.DRCCity.value;
		var PinCode     = document.RegisterForm.PinCode.value;
		var DRCState    = document.RegisterForm.DRCState.value;
		var DRCCountry  = document.RegisterForm.DRCCountry.value;
		var DRCMobile   = document.RegisterForm.DRCMobile.value;  
		var DRCPhone    = document.RegisterForm.DRCPhone.value;  
		
		if(ValidateEmailID(EmailID)==0 || DRCName == "" || 
DRCAddress1 == "" || DRCCity == "" || IsItNumber(PinCode) == 0 || IsItNumber(DRCMobile) == 0 || IsItNumber(DRCPhone) == 0){
			FormStatus = 0;
			alert("Please fill in the Input Form Properly");
		}
		if(FormStatus == 0){
		}
		else {
			document.RegisterForm.submit();
		}
	}
	else if(ReqForm == "NewProvider"){
		var UserName     = document.RegisterForm.UserName.value;
		var Password     = document.RegisterForm.Password.value;
		var ProviderName = document.RegisterForm.ProviderName.value; 
		var Organization = document.RegisterForm.Organization.value;
		var EmailID      = document.RegisterForm.EmailID.value;
		if((ValidateUserName(UserName)==0) || Password == "" || ProviderName == "" || Organization == "" || ValidateEmailID(EmailID)==0){
			alert("Please fill in the Input Form Properly");
			FormStatus = 0;
		}
		if(FormStatus==0){
		}
		else {
			var OutputString = (document.getElementById('DispResult').innerHTML).charAt(14);
			if(OutputString =="3"){
				document.RegisterForm.submit();
			}
			else {
				alert("Please fill in the Input Form Properly");
			}
		}
	}
	else if(ReqForm == "NewPatient"){
		var PatientID   = document.RegisterForm.PatientID.value;
		if(PatientID == "")
		{
			FormStatus = 0;
		}
		// Personal Details 
/*		
var PatientFirstName   = document.RegisterForm.PatientFirstName.value;
		var PatientLastName    = document.RegisterForm.PatientLastName.value;
		var PatientAge         = document.RegisterForm.PatientAge.value;
		var PatientAddress     = document.RegisterForm.PatientAddress.value;      
		var PatientCity        = document.RegisterForm.PatientCity.value
		var PinCode            = document.RegisterForm.PinCode.value;
		var PatientPhoneNumber = document.RegisterForm.PatientPhoneNumber.value;
		if(PatientFirstName == "" || PatientLastName == "" || IsItNumber(PatientAge)==0 || PatientAddress == "" || PatientCity == "" || IsItNumber(PinCode)==0 || IsItNumber(PatientPhoneNumber)==0 ){
			FormStatus = 0;
		}		
		// Diabetes Status
		var DiabetesTypeOne = document.RegisterForm.DiabetesType[0].checked;
		if(DiabetesTypeOne == true){
			var DiabetesTypeOneDuration  = document.RegisterForm.DiabetesTypeOneDuration.value;
			if(IsItNumber(DiabetesTypeOneDuration) == 0){
				FormStatus = 0;
			}
		}			
		else {
			var DiabetesTypeTwoDuration  = document.RegisterForm.DiabetesTypeTwoDuration.value;
			if(IsItNumber(DiabetesTypeTwoDuration) == 0){
				FormStatus = 0;
			}
		}
		
		// Medical Treatment
		var DietControl         = document.RegisterForm.DietControl.checked;
		var DietControlDuration = document.RegisterForm.DietControlDuration.value;
		var DietControlRemarks  = document.RegisterForm.DietControlRemarks.value;
		if(DietControl == true){
			if(IsItNumber(DietControlDuration)==0 || DietControlRemarks == ""){
				FormStatus = 0;								
			}
		}	

		var Insulin         = document.RegisterForm.Insulin.checked;
		var InsulinDuration = document.RegisterForm.InsulinDuration.value;
		var InsulinRemarks  = document.RegisterForm.InsulinRemarks.value;
		if(Insulin == true){
			if(IsItNumber(InsulinDuration)==0 || InsulinRemarks == ""){
				FormStatus = 0;								
			}
		}
		
		var OHA         = document.RegisterForm.OHA.checked;
		var OHADuration = document.RegisterForm.OHADuration.value;
		var OHARemarks  = document.RegisterForm.OHARemarks.value;
		if(OHA == true){
			if(IsItNumber(OHADuration)==0 || OHARemarks == ""){
				FormStatus = 0;								
			}
		}
		
		
		var AltDrugs         = document.RegisterForm.AltDrugs.checked;
		var AltDrugsDuration = document.RegisterForm.AltDrugsDuration.value;
		var AltDrugsRemarks  = document.RegisterForm.AltDrugsRemarks.value;
		if(AltDrugs == true){
			if(IsItNumber(AltDrugsDuration)==0 || AltDrugsRemarks == ""){
				FormStatus = 0;								
			}
		}
		
		
		// Associated Systemic Illness
		var HyperTension = document.RegisterForm.HyperTension.checked;
		var HyperTensionDuration = document.RegisterForm.HyperTensionDuration.value;
		if(HyperTension == true){
			if(IsItNumber(HyperTensionDuration) == 0){
				FormStatus = 0;
			}
		}
		
		var CardiacDisease = document.RegisterForm.CardiacDisease.checked;
		var CardiacDiseaseDuration = document.RegisterForm.CardiacDiseaseDuration.value;
		if(CardiacDisease == true){
			if(IsItNumber(CardiacDiseaseDuration) == 0){
				FormStatus = 0;
			}
		}
		
		var Hyperlipidemia = document.RegisterForm.Hyperlipidemia.checked;
		var HyperlipidemiaDuration = document.RegisterForm.HyperlipidemiaDuration.value;
		if(Hyperlipidemia == true){
			if(IsItNumber(HyperlipidemiaDuration) == 0){
				FormStatus = 0;
			}
		}
		
		var Neuropathy = document.RegisterForm.Neuropathy.checked;
		var NeuropathyDuration = document.RegisterForm.NeuropathyDuration.value;
		if(Neuropathy == true){
			if(IsItNumber(NeuropathyDuration) == 0){
				FormStatus = 0;
			}
		}
							
		var Nephropathy = document.RegisterForm.Nephropathy.checked;
		var NephropathyDuration = document.RegisterForm.NephropathyDuration.value;
		if(Nephropathy == true){
			if(IsItNumber(NephropathyDuration) == 0){
				FormStatus = 0;
			}
		}
		//Other Risks
		
		var Smoking = document.RegisterForm.Smoking.checked;
		var SmokingDuration = 	document.RegisterForm.SmokingDuration.value;
		if(Smoking == true){
			if(IsItNumber(SmokingDuration) == 0){
				FormStatus = 0;
			}
		}
							
		var Alcohal = document.RegisterForm.Alcohal.checked;
		var AlcohalDuration = 	document.RegisterForm.AlcohalDuration.value;
		if(Alcohal == true){
			if(IsItNumber(AlcohalDuration) == 0){
				FormStatus = 0;
			}
		}
		
		//Past History Ocular Treatement	
		var LaserOptionOne         = document.RegisterForm.LaserOptionOne.checked; 
		var LaserOptionOneText     = document.RegisterForm.LaserOptionOneText.value;
		var LaserOptionOneDuration = document.RegisterForm.LaserOptionOneDuration.value; 
		if(LaserOptionOne == true){
			if(LaserOptionOneText == "" || IsItNumber(LaserOptionOneDuration)==0 ){
					FormStatus = 0
			}
		}
		
		var LaserOptionTwo         = document.RegisterForm.LaserOptionTwo.checked; 
		var LaserOptionTwoText     = document.RegisterForm.LaserOptionTwoText.value;
		var LaserOptionTwoDuration = document.RegisterForm.LaserOptionTwoDuration.value; 
		if(LaserOptionTwo == true){
			if(LaserOptionTwoText == "" || IsItNumber(LaserOptionTwoDuration)==0 ){
					FormStatus = 0
			}
		}
		
		var LaserOptionThree         = document.RegisterForm.LaserOptionThree.checked; 
		var LaserOptionThreeText     = document.RegisterForm.LaserOptionThreeText.value;
		var LaserOptionThreeDuration = document.RegisterForm.LaserOptionThreeDuration.value; 
		if(LaserOptionThree == true){
			if(LaserOptionThreeText == "" || IsItNumber(LaserOptionThreeDuration)==0 ){
					FormStatus = 0
			}
		}
		
		var SurgeryOptionOne         = document.RegisterForm.SurgeryOptionOne.checked; 
		var SurgeryOptionOneText     = document.RegisterForm.SurgeryOptionOneText.value;
		var SurgeryOptionOneDuration = document.RegisterForm.SurgeryOptionOneDuration.value; 
		if(SurgeryOptionOne == true){
			if(SurgeryOptionOneText == "" || IsItNumber(SurgeryOptionOneDuration)==0 ){
					FormStatus = 0
			}
		}
		
		var SurgeryOptionTwo         = document.RegisterForm.SurgeryOptionTwo.checked; 
		var SurgeryOptionTwoText     = document.RegisterForm.SurgeryOptionTwoText.value;
		var SurgeryOptionTwoDuration = document.RegisterForm.SurgeryOptionTwoDuration.value; 
		if(SurgeryOptionTwo == true){
			if(SurgeryOptionTwoText == "" || IsItNumber(SurgeryOptionTwoDuration)==0 ){
					FormStatus = 0
			}
		}
		
		var SurgeryOptionThree         = document.RegisterForm.SurgeryOptionThree.checked; 
		var SurgeryOptionThreeText     = document.RegisterForm.SurgeryOptionThreeText.value;
		var SurgeryOptionThreeDuration = document.RegisterForm.SurgeryOptionThreeDuration.value; 
		if(SurgeryOptionThree == true){
			if(SurgeryOptionThreeText == "" || IsItNumber(SurgeryOptionThreeDuration)==0 ){
					FormStatus = 0
			}
		}
		
		//Blood Investigations
		var HB = document.RegisterForm.HB.checked;   
		var HBValue =document.RegisterForm.HBValue.value;
		if(HB == true){
			if(IsItNumber(HBValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var BloodSugar = document.RegisterForm.BloodSugar.checked;   
		var BloodSugarValue =document.RegisterForm.BloodSugarValue.value;
		if(BloodSugar == true){
			if(IsItNumber(BloodSugarValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var BloodUrea = document.RegisterForm.BloodUrea.checked;   
		var BloodUreaValue =document.RegisterForm.BloodUreaValue.value;
		if(BloodUrea == true){
			if(IsItNumber(BloodUreaValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var SerumCreatinine = document.RegisterForm.SerumCreatinine.checked;   
		var SerumCreatinineValue =document.RegisterForm.SerumCreatinineValue.value;
		if(SerumCreatinine == true){
			if(IsItNumber(SerumCreatinineValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var UrineAlbumin = document.RegisterForm.UrineAlbumin.checked;   
		var UrineAlbuminValue =document.RegisterForm.UrineAlbuminValue.value;
		if(UrineAlbumin == true){
			if(IsItNumber(UrineAlbuminValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var HbAIC = document.RegisterForm.HbAIC.checked;   
		var HbAICValue =document.RegisterForm.HbAICValue.value;
		if(HbAIC == true){
			if(IsItNumber(HbAICValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		var Cholestrol = document.RegisterForm.Cholestrol.checked;   
		var CholestrolValue =document.RegisterForm.CholestrolValue.value;
		if(Cholestrol == true){
			if(IsItNumber(CholestrolValue) == 0 ){
				FormStatus = 0;
			}	
		}
		
		//Patient S/L Examination
		var NBC = document.RegisterForm.NBC.checked;  
		var NBCValue = document.RegisterForm.NBCValue.value;  
		if(NBC == true){
			if(IsItNumber(NBCValue) == 0){
				FormStatus = 0;
			}
		}
		
		var PBC = document.RegisterForm.PBC.checked;  
		var PBCValue = document.RegisterForm.PBCValue.value;  
		if(PBC == true){
			if(IsItNumber(PBCValue) == 0){
				FormStatus = 0;
			}
		}
							
		var Cartract = document.RegisterForm.Cartract.checked;  
		var CartractValue = document.RegisterForm.CartractValue.value;  
		if(Cartract == true){
			if(IsItNumber(CartractValue) == 0){
				FormStatus = 0;
			}
		}
		*/
		if(FormStatus == 0){
			alert("Please fill in the Input Form Properly");
		}
		else {
			document.RegisterForm.submit();
		}
			
	}
		
}



function ResetForm (ReqForm)
{
	if(ReqForm == "LoginForm"){
		document.LoginForm.reset();
	}
	else if(ReqForm == "NewProvider"){
		document.RegisterForm.reset();
	}
	else if(ReqForm == "NewDRC"){
		document.RegisterForm.reset();
	}
	else if(ReqForm == "CompleteDRC"){

		document.RegisterForm.reset();
	}
	else if(ReqForm == "NewDoctor"){

		document.RegisterForm.reset();
	}
	else if(ReqForm == "NewPhotoGrapher"){

		document.RegisterForm.reset();
	}
	else if(ReqForm == "NewCamp"){

		document.RegisterForm.reset();
	}
	else if(ReqForm == "NewPatient"){

		document.RegisterForm.reset();
		HandleDiabetes();
		HandleMedicalTrmnt();
		HandleMedicalTrmntNone();


		ASIHandle();
		ASIHandleNone();


		HandleOR();
		HandleORNone();

		HandlePHOTrmnt();
		HandlePHOTrmntNone();


		HandleBldInvstgations();
		HandleBldInvstgationsNone();


		HandleSLExm();
		HandleSLExmNone();
	}

}

 
function CreateShortCut(KeyCode,ReqForm){
	if(KeyCode==13){
		SubmitForm(ReqForm);
	}
}

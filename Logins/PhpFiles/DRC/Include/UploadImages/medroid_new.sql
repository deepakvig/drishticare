-- MySQL dump 10.11
--
-- Host: localhost    Database: medroid
-- ------------------------------------------------------
-- Server version	5.0.45

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Glucoma`
--

DROP TABLE IF EXISTS `Glucoma`;
CREATE TABLE `Glucoma` (
  `PatientSrNo` int(11) NOT NULL auto_increment,
  `PatientID` varchar(100) default NULL,
  `PatientName` varchar(100) default NULL,
  `Age` int(11) default NULL,
  `Sex` varchar(10) default NULL,
  `EpisodeDate` varchar(100) default NULL,
  `Address` varchar(500) default NULL,
  `Occupation` varchar(50) default NULL,
  `LeftNotching` varchar(50) default NULL,
  `LeftVascular` varchar(50) default NULL,
  `LeftHaemorrhage` varchar(50) default NULL,
  `LeftNR` varchar(50) default NULL,
  `LeftPeripapillary` varchar(50) default NULL,
  `LeftAtrophy` varchar(50) default NULL,
  `LeftNFL` varchar(50) default NULL,
  `LeftEye` varchar(50) default NULL,
  `RightNotching` varchar(50) default NULL,
  `RightVascular` varchar(50) default NULL,
  `RightHaemorrhage` varchar(50) default NULL,
  `RightNR` varchar(50) default NULL,
  `RightPeripapillary` varchar(50) default NULL,
  `RightAtrophy` varchar(50) default NULL,
  `RightNFL` varchar(50) default NULL,
  `RightEye` varchar(50) default NULL,
  `Diagnosis` varchar(50) default NULL,
  `DefectiveVision` varchar(50) default NULL,
  `NightBlindness` varchar(50) default NULL,
  `ChangeGlassesFeq` varchar(50) default NULL,
  `PainInEyes` varchar(50) default NULL,
  `Watering` varchar(50) default NULL,
  `OtherPresentIllnessComments` varchar(500) default NULL,
  `Injury` varchar(50) default NULL,
  `Haloes` varchar(50) default NULL,
  `Nausea` varchar(50) default NULL,
  `Duration` int(11) default NULL,
  `Redness` varchar(50) default NULL,
  `Smoking` varchar(50) default NULL,
  `Alcoholic` varchar(50) default NULL,
  `Diabetes` varchar(50) default NULL,
  `Hypertension` varchar(50) default NULL,
  `Asthma` varchar(50) default NULL,
  `UrinaryTract` varchar(50) default NULL,
  `GIT` varchar(50) default NULL,
  `RS` varchar(50) default NULL,
  `Cardiac` varchar(50) default NULL,
  `AllergicTo` varchar(50) default NULL,
  `GlaucomaFamilyHistory` varchar(50) default NULL,
  `GlaucomaFamilyHistoryMonths` int(11) default NULL,
  `OcularFamilyHistory` varchar(50) default NULL,
  `OcularFamilyHistoryMonths` int(11) default NULL,
  `Drops` varchar(50) default NULL,
  `Pills` varchar(50) default NULL,
  `Surgery` varchar(50) default NULL,
  `Conjuctiva` varchar(50) default NULL,
  `Cornea` varchar(50) default NULL,
  `Anterior` varchar(50) default NULL,
  `Iris` varchar(50) default NULL,
  `Pupil` varchar(50) default NULL,
  `Lens` varchar(50) default NULL,
  `OthersExamination` varchar(50) default NULL,
  `Vision` varchar(50) default NULL,
  `Tension` varchar(50) default NULL,
  `WithoutGlassesRight` varchar(50) default NULL,
  `WithoutGlassesLeft` varchar(50) default NULL,
  `WithGlassesRight` varchar(50) default NULL,
  `WithGlassesLeft` varchar(50) default NULL,
  `SchiotzRight` varchar(50) default NULL,
  `SchiotzLeft` varchar(50) default NULL,
  `ApplanationRight` varchar(50) default NULL,
  `ApplanationLeft` varchar(50) default NULL,
  `HfaTangent` varchar(50) default NULL,
  `HfaScreen` varchar(50) default NULL,
  `RE` varchar(50) default NULL,
  `LE` varchar(50) default NULL,
  `MedicalTreatment` varchar(50) default NULL,
  `LaserTreatment` varchar(50) default NULL,
  `Treatment` varchar(50) default NULL,
  `Surgical` varchar(50) default NULL,
  `ReviewOn` varchar(50) default NULL,
  `ReviewAfter` varchar(50) default NULL,
  `INV` varchar(50) default NULL,
  PRIMARY KEY  (`PatientSrNo`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Glucoma`
--

LOCK TABLES `Glucoma` WRITE;
/*!40000 ALTER TABLE `Glucoma` DISABLE KEYS */;
INSERT INTO `Glucoma` VALUES (15,'234552','Dummy ',23,'male','none','none','none','No','No','No','No','No','No','No','Yes','No','No','No','No','Yes','No','Yes','Yes','both','','none','none','none','none','none','none','none','none',0,'none','no','no','no','no','no','no','no','no','no','none','F',0,'none',0,'none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','','','','','','',''),(16,'123212','Dummmy -2',32,'male','none','none','none','No','No','No','No','No','No','No','Yes','No','No','No','No','No','No','No','Yes','both','','none','none','none','none','none','none','none','none',0,'none','no','no','no','no','no','no','no','no','no','none','none',0,'none',0,'none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','','','','','','',''),(17,'00002','none',0,'noneSelect','none','none','none','No','No','Yes','No','Yes','No','No','No','No','No','No','Yes','Yes','No','No','No','both','','none','none','none','none','none','none','none','none',0,'none','no','no','no','no','no','no','no','no','no','none','none',0,'none',0,'none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','','','','','','',''),(18,'00001','Dummy-5',34,'male','none','none','none','No','No','No','No','No','No','No','Yes','No','No','No','Yes','No','Yes','No','Yes','both','','none','none','none','none','none','none','none','none',0,'none','no','no','no','no','no','no','no','no','no','none','none',0,'none',0,'none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','','','','','','',''),(19,'0002','none',0,'noneSelect','none','none','none','No','No','No','Yes','Yes','No','No','No','No','No','Yes','Yes','No','No','No','No','both','','none','none','none','none','none','none','none','none',0,'none','no','no','no','no','no','no','no','no','no','none','none',0,'none',0,'none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','none','','','','','','',''),(20,'11840850','Leema Rose',36,'female','30.04.1998','Anna Nagar, Madurai,\rTamil Nadu, India','Teacher','No','No','No','Yes','No','No','No','Yes','No','No','No','Yes','No','No','No','Yes','both','','none','none','both eyes','both eyes','Headache - on and off','none','none','none',1,'both eyes','no','no','no','no','no','no','no','no','no','none','none',0,'none',0,'Optipress eye drops','Tab Diamox','None','none','none','none','none','none','none','none','none','none','6/6','6/6','none','none','17.3mmHg','17.3mmHg','18mmHg','16mmHg','none','none','Inferior Arcuate Scotoma','none','','','','','','',''),(21,'25862290','Selvam S',48,'male','08.12.2008','Tirumangalam, Madurai,\rTamil Nadu, India','Police','No','No','No','Yes','No','No','Yes','No','No','No','No','Yes','No','No','Yes','No','both','both eyes','none','none','none','none','none','none','none','none',1,'none','no','no','no','no','no','no','no','no','yes','none','S',0,'none',0,'Latoprost eye drops','none','none','none','none','none','none','none','none','none','none','none','6/36','6/60','6/24p','6/24p','none','none','15mmHg','14mmHg','none','none','Inferior Arcuate Scotoma','Inferior Arcuate Scotoma','','','','','','','');
/*!40000 ALTER TABLE `Glucoma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `GradingUserDetails`
--

DROP TABLE IF EXISTS `GradingUserDetails`;
CREATE TABLE `GradingUserDetails` (
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `CurrentImageNumber` int(11) NOT NULL default '0',
  `UserType` varchar(10) default NULL,
  PRIMARY KEY  (`UserName`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `GradingUserDetails`
--

LOCK TABLES `GradingUserDetails` WRITE;
/*!40000 ALTER TABLE `GradingUserDetails` DISABLE KEYS */;
INSERT INTO `GradingUserDetails` VALUES ('admin','e6e3be2d833cdf5d9d4c7bc2f85cd098',0,'Ad'),('alka','e6e3be2d833cdf5d9d4c7bc2f85cd098',1,'Do');
/*!40000 ALTER TABLE `GradingUserDetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campdetails`
--

DROP TABLE IF EXISTS `campdetails`;
CREATE TABLE `campdetails` (
  `CampHashCode` varchar(50) NOT NULL,
  `CampID` varchar(50) default NULL,
  `CampName` varchar(50) default NULL,
  `CampType` varchar(25) default NULL,
  `CampStartDate` date default NULL,
  `CampEndDate` date default NULL,
  `OpthalMologist` varchar(50) default NULL,
  `PhotoGrapher` varchar(50) default NULL,
  `CampSponsor` varchar(50) default NULL,
  `CampOrganizer` varchar(50) default NULL,
  `CampAddress1` varchar(100) default NULL,
  `CampAddress2` varchar(100) default NULL,
  `CampCity` varchar(100) default NULL,
  `CampState` varchar(25) default NULL,
  `CampPinCode` int(11) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campdetails`
--

LOCK TABLES `campdetails` WRITE;
/*!40000 ALTER TABLE `campdetails` DISABLE KEYS */;
INSERT INTO `campdetails` VALUES ('855cafb4a9807b9fc3787391d4e23142','cmp00000001','Camp','Paid','2008-01-01','2009-08-01','58849f7ef6fa884813d394f08b04e2bb','61ecade0626ee8cbe1c2fb7b61f92dc7','LM Hospital','LI Hospital','Main Road ','Hyderabad','Hyderabad','AP',500032),('05703d9979a7aa18c83b33dd67cca0c1','cmp00000002','Camp2','Paid','2009-01-01','2009-10-01','58849f7ef6fa884813d394f08b04e2bb','61ecade0626ee8cbe1c2fb7b61f92dc7','Government Hospital','LK Hospital','Near Bus Station','LK Road','Chennai','AP',323345),('24780c67baba1de576f3b661b4ffac43','cmp00000003','Main Camp','Paid','2010-01-01','2011-01-01','58849f7ef6fa884813d394f08b04e2bb','61ecade0626ee8cbe1c2fb7b61f92dc7','','KM Hospital','Hyderabad','','Hyderabad','AP',655656),('6ad9400d0ab7246a3478c5845f13441b','cmp00000004','Aravind Camp','Free','2010-01-01','2011-01-01','58849f7ef6fa884813d394f08b04e2bb','61ecade0626ee8cbe1c2fb7b61f92dc7','Aravind','Aravind ','Madurai','','Madurai','AP',4990);
/*!40000 ALTER TABLE `campdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dcmapping`
--

DROP TABLE IF EXISTS `dcmapping`;
CREATE TABLE `dcmapping` (
  `FirstEntity` varchar(100) default NULL,
  `SecondEntity` varchar(100) default NULL,
  `WhatIsFirst` varchar(10) default NULL,
  `WhatIsSecond` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcmapping`
--

LOCK TABLES `dcmapping` WRITE;
/*!40000 ALTER TABLE `dcmapping` DISABLE KEYS */;
INSERT INTO `dcmapping` VALUES ('21232f297a57a5a743894a0e4a801fc3','9e9f3d70bd8c8957627eada96d967706','Ad','Pr'),('9e9f3d70bd8c8957627eada96d967706','7f02ef1e2295af0c0d5c2c97da905e42','Pr','Dc'),('7f02ef1e2295af0c0d5c2c97da905e42','58849f7ef6fa884813d394f08b04e2bb','Dc','Do'),('7f02ef1e2295af0c0d5c2c97da905e42','61ecade0626ee8cbe1c2fb7b61f92dc7','Dc','Pg'),('7f02ef1e2295af0c0d5c2c97da905e42','855cafb4a9807b9fc3787391d4e23142','Dc','Cm'),('7f02ef1e2295af0c0d5c2c97da905e42','05703d9979a7aa18c83b33dd67cca0c1','Dc','Cm'),('7f02ef1e2295af0c0d5c2c97da905e42','24780c67baba1de576f3b661b4ffac43','Dc','Cm'),('7f02ef1e2295af0c0d5c2c97da905e42','6ad9400d0ab7246a3478c5845f13441b','Dc','Cm'),('9e9f3d70bd8c8957627eada96d967706','e07dcdf642df16069424c1469d669fb4','Pr','Dc'),('e07dcdf642df16069424c1469d669fb4','d2fa4735062e975134f166348bd30dc4','Dc','Do'),('e07dcdf642df16069424c1469d669fb4','5a3217daea30afea81f1eed02a807c6b','Dc','Pg');
/*!40000 ALTER TABLE `dcmapping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doctordetails`
--

DROP TABLE IF EXISTS `doctordetails`;
CREATE TABLE `doctordetails` (
  `DoctorHashCode` varchar(50) default NULL,
  `DoctorUserName` varchar(25) default NULL,
  `DoctorName` varchar(50) default NULL,
  `DoctorGender` varchar(10) default NULL,
  `DoctorClinicName` varchar(50) default NULL,
  `DoctorAddress1` varchar(100) default NULL,
  `DoctorAddress2` varchar(100) default NULL,
  `DoctorCity` varchar(50) default NULL,
  `DoctorPinCode` int(11) default NULL,
  `DoctorState` varchar(50) default NULL,
  `DoctorCountry` varchar(50) default NULL,
  `DoctorClinicPhone` int(15) default NULL,
  `DoctorMobile` int(15) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordetails`
--

LOCK TABLES `doctordetails` WRITE;
/*!40000 ALTER TABLE `doctordetails` DISABLE KEYS */;
INSERT INTO `doctordetails` VALUES ('58849f7ef6fa884813d394f08b04e2bb','do00000001','Gopal','Male','Aravindh','Madurai','','Madurai',903498,'AP','AP',9458,409850),('d2fa4735062e975134f166348bd30dc4','do00000002','Himasnhu','Male','HIV Hospital','Hyderabad','','Hyderabad',93490,'AP','AP',49,9403);
/*!40000 ALTER TABLE `doctordetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drcdetails`
--

DROP TABLE IF EXISTS `drcdetails`;
CREATE TABLE `drcdetails` (
  `DRCHashCode` varchar(50) default NULL,
  `DRCUserName` varchar(50) default NULL,
  `DRCName` varchar(50) default NULL,
  `DRCAddress1` varchar(100) default NULL,
  `DRCAddress2` varchar(100) default NULL,
  `DRCCity` varchar(50) default NULL,
  `DRCPinCode` int(11) default NULL,
  `DRCState` varchar(30) default NULL,
  `DRCCountry` varchar(50) default NULL,
  `DRCPhone` int(11) default NULL,
  `DRCMobile` int(11) default NULL,
  `DRCStatus` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drcdetails`
--

LOCK TABLES `drcdetails` WRITE;
/*!40000 ALTER TABLE `drcdetails` DISABLE KEYS */;
INSERT INTO `drcdetails` VALUES ('7f02ef1e2295af0c0d5c2c97da905e42','drc00000001','Siddharth','NBH','IIIT Hyderabad','Hyderabad',500032,'AP','IN',2147483647,2147483647,'3'),('e07dcdf642df16069424c1469d669fb4','drc00000002','Himanshu','Hyderabad','Hyderabad','Hyderabad',9090,'AP','IN',954,90,'3');
/*!40000 ALTER TABLE `drcdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pasthistoryoculartrtdetails`
--

DROP TABLE IF EXISTS `pasthistoryoculartrtdetails`;
CREATE TABLE `pasthistoryoculartrtdetails` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(100) default NULL,
  `LaserLeftEye` varchar(100) default NULL,
  `LaserRightEye` varchar(100) default NULL,
  `SurgeryLeftEye` varchar(100) default NULL,
  `SurgeryRightEye` varchar(100) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasthistoryoculartrtdetails`
--

LOCK TABLES `pasthistoryoculartrtdetails` WRITE;
/*!40000 ALTER TABLE `pasthistoryoculartrtdetails` DISABLE KEYS */;
/*!40000 ALTER TABLE `pasthistoryoculartrtdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientasidetails`
--

DROP TABLE IF EXISTS `patientasidetails`;
CREATE TABLE `patientasidetails` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `HyperTensionDuration` int(11) default NULL,
  `CardiacDiseaseDuration` int(11) default NULL,
  `NephropathyDuration` int(11) default NULL,
  `HyperlipidemiaDuration` int(11) default NULL,
  `NeuropathyDuration` int(11) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientasidetails`
--

LOCK TABLES `patientasidetails` WRITE;
/*!40000 ALTER TABLE `patientasidetails` DISABLE KEYS */;
INSERT INTO `patientasidetails` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,'');
/*!40000 ALTER TABLE `patientasidetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientbldinvestigations`
--

DROP TABLE IF EXISTS `patientbldinvestigations`;
CREATE TABLE `patientbldinvestigations` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `HBValue` int(11) default NULL,
  `BloodSugarValue` int(11) default NULL,
  `BloodUreaValue` int(11) default NULL,
  `SerumCreatinineValue` int(11) default NULL,
  `UrineAlbuminValue` int(11) default NULL,
  `HbAICValue` int(11) default NULL,
  `SCholestrolValue` int(11) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientbldinvestigations`
--

LOCK TABLES `patientbldinvestigations` WRITE;
/*!40000 ALTER TABLE `patientbldinvestigations` DISABLE KEYS */;
INSERT INTO `patientbldinvestigations` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,-1,-1,-1,-1,'');
/*!40000 ALTER TABLE `patientbldinvestigations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientdiabetesstatus`
--

DROP TABLE IF EXISTS `patientdiabetesstatus`;
CREATE TABLE `patientdiabetesstatus` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `TypeOneDuration` int(11) default NULL,
  `TypeTwoDuration` int(11) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientdiabetesstatus`
--

LOCK TABLES `patientdiabetesstatus` WRITE;
/*!40000 ALTER TABLE `patientdiabetesstatus` DISABLE KEYS */;
INSERT INTO `patientdiabetesstatus` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142',12,-1,''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142',32,-1,''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142',-1,56,''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142',-1,12,''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142',-1,12,'');
/*!40000 ALTER TABLE `patientdiabetesstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientepisodedetails`
--

DROP TABLE IF EXISTS `patientepisodedetails`;
CREATE TABLE `patientepisodedetails` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `PatientEpisodeDate` date default NULL,
  `Comments` varchar(300) default NULL,
  `DBVision` varchar(10) default NULL,
  `Flashes` varchar(10) default NULL,
  `DoubleVision` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientepisodedetails`
--

LOCK TABLES `patientepisodedetails` WRITE;
/*!40000 ALTER TABLE `patientepisodedetails` DISABLE KEYS */;
INSERT INTO `patientepisodedetails` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','',''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142','2009-07-08','','','','');
/*!40000 ALTER TABLE `patientepisodedetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientmedicaltrmntdetails`
--

DROP TABLE IF EXISTS `patientmedicaltrmntdetails`;
CREATE TABLE `patientmedicaltrmntdetails` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `DietControlDuration` int(11) default NULL,
  `DietControlPeriod` varchar(10) default NULL,
  `DietControlRemarks` varchar(300) default NULL,
  `InsulinDuration` int(11) default NULL,
  `InsulinPeriod` varchar(10) default NULL,
  `InsulinRemarks` varchar(300) default NULL,
  `OHADuration` int(11) default NULL,
  `OHAPeriod` varchar(10) default NULL,
  `OHARemarks` varchar(300) default NULL,
  `AltDrugsDuration` int(11) default NULL,
  `AltDrugsPeriod` varchar(10) default NULL,
  `AltDrugsRemarks` varchar(300) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientmedicaltrmntdetails`
--

LOCK TABLES `patientmedicaltrmntdetails` WRITE;
/*!40000 ALTER TABLE `patientmedicaltrmntdetails` DISABLE KEYS */;
INSERT INTO `patientmedicaltrmntdetails` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','',''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142',-1,'','',-1,'','',-1,'','',-1,'','','');
/*!40000 ALTER TABLE `patientmedicaltrmntdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientotherrisks`
--

DROP TABLE IF EXISTS `patientotherrisks`;
CREATE TABLE `patientotherrisks` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `SmokingDuration` int(11) default NULL,
  `AlcohalDuration` int(11) default NULL,
  `Pregnancy` int(11) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientotherrisks`
--

LOCK TABLES `patientotherrisks` WRITE;
/*!40000 ALTER TABLE `patientotherrisks` DISABLE KEYS */;
INSERT INTO `patientotherrisks` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142',-1,-1,-1,'');
/*!40000 ALTER TABLE `patientotherrisks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientpersonaldetails`
--

DROP TABLE IF EXISTS `patientpersonaldetails`;
CREATE TABLE `patientpersonaldetails` (
  `PatientID` int(11) NOT NULL auto_increment,
  `PatientHashCode` varchar(50) default NULL,
  `PatientFirstName` varchar(100) default NULL,
  `PatientLastName` varchar(100) default NULL,
  `PatientGender` varchar(10) default NULL,
  `PatientAge` int(3) default NULL,
  `PatientMaritialStatus` varchar(10) default NULL,
  `PatientAddress1` varchar(500) default NULL,
  `PatientCity` varchar(100) default NULL,
  `PinCode` int(11) default NULL,
  `PatientState` varchar(100) default NULL,
  `PatientCountry` varchar(100) default NULL,
  `PatientPhoneNumber` int(11) default NULL,
  PRIMARY KEY  (`PatientID`)
) ENGINE=MyISAM AUTO_INCREMENT=94 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientpersonaldetails`
--

LOCK TABLES `patientpersonaldetails` WRITE;
/*!40000 ALTER TABLE `patientpersonaldetails` DISABLE KEYS */;
INSERT INTO `patientpersonaldetails` VALUES (83,'fe9fc289c3ff0af142b6d3bead98a923','Sita ','Rani','Female',45,'Married','Main Market','Guntur',340390,'AP','India',40945023),(84,'68d30a9594728bc39aa24be94b319d21','S. Raja','Ram','Male',54,'Married','Behind Government Hospital','Chennai',40394,'AP','India',439030),(85,'3ef815416f775098fe977004015c6193','Sujit','Sinha','Male',33,'Married','Indira Nagar','Lucknow',483958390,'UP','India',9509340),(86,'93db85ed909c13838ff95ccfa94cebd9','Sujith ','Sinha','Male',46,'Married','Indira Nagar','Lucknow',3994032,'UP','India',324903),(87,'c7e1249ffc03eb9ded908c236bd1996d','Raam','Rai','Male',64,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(88,'2a38a4a9316c49e5a833517c45d31070','Anshuman','Singh','Male',19,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(89,'7647966b7343c29048673252e490f736','Sunita','Sinha','Female',49,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(90,'8613985ec49eb8f757ae6439e879bb2a','Shyam Sundar','Das','Male',89,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(91,'54229abfcfa5649e7003b83dd4755294','Maqoob','Rahman','Male',74,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(92,'92cc227532d17e56e07902b254dfad10','John','Swain','Male',74,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564),(93,'98dce83da57b0395e163467c9dae521b','Sujith','Sinha','Male',74,'Married','Indira Nagar','Lucknow',898934,'UP','India',54564);
/*!40000 ALTER TABLE `patientpersonaldetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientslexamination`
--

DROP TABLE IF EXISTS `patientslexamination`;
CREATE TABLE `patientslexamination` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `NBC` varchar(100) default NULL,
  `PBC` varchar(100) default NULL,
  `Cartract` varchar(100) default NULL,
  `Comments` varchar(300) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientslexamination`
--

LOCK TABLES `patientslexamination` WRITE;
/*!40000 ALTER TABLE `patientslexamination` DISABLE KEYS */;
INSERT INTO `patientslexamination` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1',''),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142','-1','-1','-1','');
/*!40000 ALTER TABLE `patientslexamination` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patientstatus`
--

DROP TABLE IF EXISTS `patientstatus`;
CREATE TABLE `patientstatus` (
  `PatientHashCode` varchar(50) default NULL,
  `CampHashCode` varchar(50) default NULL,
  `PatientReportStatus` varchar(50) default NULL,
  `PatientImageStatus` varchar(50) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientstatus`
--

LOCK TABLES `patientstatus` WRITE;
/*!40000 ALTER TABLE `patientstatus` DISABLE KEYS */;
INSERT INTO `patientstatus` VALUES ('fe9fc289c3ff0af142b6d3bead98a923','855cafb4a9807b9fc3787391d4e23142','Pending','Completed'),('68d30a9594728bc39aa24be94b319d21','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('3ef815416f775098fe977004015c6193','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('93db85ed909c13838ff95ccfa94cebd9','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('c7e1249ffc03eb9ded908c236bd1996d','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('2a38a4a9316c49e5a833517c45d31070','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('7647966b7343c29048673252e490f736','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('8613985ec49eb8f757ae6439e879bb2a','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('54229abfcfa5649e7003b83dd4755294','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('92cc227532d17e56e07902b254dfad10','855cafb4a9807b9fc3787391d4e23142','Pending','Pending'),('98dce83da57b0395e163467c9dae521b','855cafb4a9807b9fc3787391d4e23142','Pending','Pending');
/*!40000 ALTER TABLE `patientstatus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photographerdetails`
--

DROP TABLE IF EXISTS `photographerdetails`;
CREATE TABLE `photographerdetails` (
  `PhotoGrapherHashCode` varchar(50) default NULL,
  `PhotoGrapherUserName` varchar(25) default NULL,
  `PhotoGrapherName` varchar(50) default NULL,
  `PhotoGrapherGender` varchar(10) default NULL,
  `PhotoGrapherClinicName` varchar(50) default NULL,
  `PhotoGrapherAddress1` varchar(100) default NULL,
  `PhotoGrapherAddress2` varchar(100) default NULL,
  `PhotoGrapherCity` varchar(50) default NULL,
  `PhotoGrapherPinCode` int(11) default NULL,
  `PhotoGrapherState` varchar(50) default NULL,
  `PhotoGrapherCountry` varchar(50) default NULL,
  `PhotoGrapherClinicPhone` int(15) default NULL,
  `PhotoGrapherMobile` int(15) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photographerdetails`
--

LOCK TABLES `photographerdetails` WRITE;
/*!40000 ALTER TABLE `photographerdetails` DISABLE KEYS */;
INSERT INTO `photographerdetails` VALUES ('61ecade0626ee8cbe1c2fb7b61f92dc7','pg00000001','Shivam Agarwal','Male','Aravindh Medical','Madurai','','Madurai',4890890,'AP','AP',39048,908390),('5a3217daea30afea81f1eed02a807c6b','pg00000002','Himanshu','Male','HY Hospital','Hyderabad','','Hyderabad',9909,'AP','AP',9809,90);
/*!40000 ALTER TABLE `photographerdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `providerdetails`
--

DROP TABLE IF EXISTS `providerdetails`;
CREATE TABLE `providerdetails` (
  `ProviderHashCode` varchar(50) default NULL,
  `ProviderUserName` varchar(25) default NULL,
  `ProviderName` varchar(100) default NULL,
  `ProviderOrganization` varchar(100) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `providerdetails`
--

LOCK TABLES `providerdetails` WRITE;
/*!40000 ALTER TABLE `providerdetails` DISABLE KEYS */;
INSERT INTO `providerdetails` VALUES ('9e9f3d70bd8c8957627eada96d967706','provider','Himanshu Singh','IIIT Hyderabad');
/*!40000 ALTER TABLE `providerdetails` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `userdetails`
--

DROP TABLE IF EXISTS `userdetails`;
CREATE TABLE `userdetails` (
  `UserHashCode` varchar(50) default NULL,
  `UserName` varchar(50) default NULL,
  `Password` varchar(50) default NULL,
  `EmailID` varchar(50) default NULL,
  `UserType` varchar(10) default NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdetails`
--

LOCK TABLES `userdetails` WRITE;
/*!40000 ALTER TABLE `userdetails` DISABLE KEYS */;
INSERT INTO `userdetails` VALUES ('21232f297a57a5a743894a0e4a801fc3','admin','e6e3be2d833cdf5d9d4c7bc2f85cd098','himanshusingh@students.iiit.ac.in','Ad'),('e07dcdf642df16069424c1469d669fb4','drc00000002','e123edb488db303fde7b3ad19134361d','him@him.com','Dc'),('7f02ef1e2295af0c0d5c2c97da905e42','drc00000001','e123edb488db303fde7b3ad19134361d','itzsid@gmail.com','Dc'),('9e9f3d70bd8c8957627eada96d967706','provider','e6e3be2d833cdf5d9d4c7bc2f85cd098','hsiiithyd@gmail.com','Pr');
/*!40000 ALTER TABLE `userdetails` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-07-18  9:36:58

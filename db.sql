-- MySQL dump 10.13  Distrib 8.0.26, for Win64 (x86_64)
--
-- Host: localhost    Database: nt2
-- ------------------------------------------------------
-- Server version	8.0.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `ad_id` int NOT NULL AUTO_INCREMENT,
  `uname` varchar(45) NOT NULL,
  `name` varchar(45) NOT NULL,
  `ad_nic` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `ad_gn_id` int NOT NULL,
  `ad_admin_typ_id` int NOT NULL,
  `ad_pass` varchar(50) NOT NULL,
  PRIMARY KEY (`ad_id`),
  KEY `fk_admin_gender1_idx` (`ad_gn_id`) USING BTREE,
  KEY `fk_admin_admin_type1_idx` (`ad_admin_typ_id`) USING BTREE,
  CONSTRAINT `fk_admin_admin_type1` FOREIGN KEY (`ad_admin_typ_id`) REFERENCES `admin_type` (`admn_typ_id`),
  CONSTRAINT `fk_admin_gender1` FOREIGN KEY (`ad_gn_id`) REFERENCES `gender` (`gn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'admin','Dhanushka','971153733v',1,1,'0000'),(2,'admin2','Dasun','99999999',1,2,'0000');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_type`
--

DROP TABLE IF EXISTS `admin_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin_type` (
  `admn_typ_id` int NOT NULL AUTO_INCREMENT,
  `admn_typ` varchar(45) NOT NULL,
  PRIMARY KEY (`admn_typ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_type`
--

LOCK TABLES `admin_type` WRITE;
/*!40000 ALTER TABLE `admin_type` DISABLE KEYS */;
INSERT INTO `admin_type` VALUES (1,'Super Admin'),(2,'Admin');
/*!40000 ALTER TABLE `admin_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `as_status`
--

DROP TABLE IF EXISTS `as_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `as_status` (
  `asstat_id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(45) NOT NULL,
  PRIMARY KEY (`asstat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `as_status`
--

LOCK TABLES `as_status` WRITE;
/*!40000 ALTER TABLE `as_status` DISABLE KEYS */;
INSERT INTO `as_status` VALUES (1,'pass'),(2,'fail'),(3,'pending');
/*!40000 ALTER TABLE `as_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assessment` (
  `as_id` int NOT NULL AUTO_INCREMENT,
  `as_date` date NOT NULL,
  `inspector_ins_id` int NOT NULL,
  `as_status_asstat_id` int NOT NULL,
  `participation_parti_id` int NOT NULL,
  `periods_period_id` int NOT NULL,
  `student_st_id` int NOT NULL,
  `as_done` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`as_id`),
  KEY `fk_assessment_inspector1_idx` (`inspector_ins_id`),
  KEY `fk_assessment_as_status1_idx` (`as_status_asstat_id`),
  KEY `fk_assessment_participation1_idx` (`participation_parti_id`),
  KEY `fk_assessment_periods1_idx` (`periods_period_id`),
  KEY `fk_assessment_student1_idx` (`student_st_id`) USING BTREE,
  CONSTRAINT `fk_assessment_as_status1` FOREIGN KEY (`as_status_asstat_id`) REFERENCES `as_status` (`asstat_id`),
  CONSTRAINT `fk_assessment_inspector1` FOREIGN KEY (`inspector_ins_id`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `fk_assessment_participation1` FOREIGN KEY (`participation_parti_id`) REFERENCES `participation` (`parti_id`),
  CONSTRAINT `fk_assessment_periods1` FOREIGN KEY (`periods_period_id`) REFERENCES `periods` (`period_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assessment`
--

LOCK TABLES `assessment` WRITE;
/*!40000 ALTER TABLE `assessment` DISABLE KEYS */;
INSERT INTO `assessment` VALUES (2,'2023-08-04',1,1,1,1,6,'0'),(5,'2023-07-26',1,1,1,1,7,'0'),(6,'2023-08-05',1,1,1,1,1,'0'),(7,'2023-08-05',1,3,1,1,5,'0');
/*!40000 ALTER TABLE `assessment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contract`
--

DROP TABLE IF EXISTS `contract`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contract` (
  `id` int NOT NULL AUTO_INCREMENT,
  `path` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contract`
--

LOCK TABLES `contract` WRITE;
/*!40000 ALTER TABLE `contract` DISABLE KEYS */;
INSERT INTO `contract` VALUES (2,'traineecontract/64a7ba1a7a438Invoice # 286 (3).pdf');
/*!40000 ALTER TABLE `contract` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `degree`
--

DROP TABLE IF EXISTS `degree`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `degree` (
  `deg_id` int NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(45) NOT NULL,
  `deg_uni_id` int NOT NULL,
  PRIMARY KEY (`deg_id`),
  KEY `FK_degree_university` (`deg_uni_id`),
  CONSTRAINT `FK_degree_university` FOREIGN KEY (`deg_uni_id`) REFERENCES `university` (`uni_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `degree`
--

LOCK TABLES `degree` WRITE;
/*!40000 ALTER TABLE `degree` DISABLE KEYS */;
INSERT INTO `degree` VALUES (1,'BSc Software Engineering',81),(2,'MIT',84);
/*!40000 ALTER TABLE `degree` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `districts`
--

DROP TABLE IF EXISTS `districts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `districts` (
  `district_id` int NOT NULL AUTO_INCREMENT,
  `district` varchar(45) NOT NULL,
  PRIMARY KEY (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `districts`
--

LOCK TABLES `districts` WRITE;
/*!40000 ALTER TABLE `districts` DISABLE KEYS */;
INSERT INTO `districts` VALUES (1,'Ampara'),(2,'Anuradhapura'),(3,'Badulla'),(4,'Batticaloa'),(5,'Colombo'),(6,'Galle'),(7,'Gampaha'),(8,'Hambantota'),(9,'Jaffna'),(10,'Kalutara'),(11,'Kandy'),(12,'Kegalle'),(13,'Kilinochchi'),(14,'Kurunegala'),(15,'Mannar'),(16,'Matale'),(17,'Matara'),(18,'Monaragala'),(19,'Mullaitivu'),(20,'Nuwara Eliya'),(21,'Polonnaruwa'),(22,'Puttalam'),(23,'Ratnapura'),(24,'Trincomalee'),(25,'Vavuniya');
/*!40000 ALTER TABLE `districts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `field`
--

DROP TABLE IF EXISTS `field`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `field` (
  `fld_id` int NOT NULL AUTO_INCREMENT,
  `fld_name` varchar(45) NOT NULL,
  `fld_deg_id` int NOT NULL,
  PRIMARY KEY (`fld_id`),
  KEY `FK_field_degree` (`fld_deg_id`),
  CONSTRAINT `FK_field_degree` FOREIGN KEY (`fld_deg_id`) REFERENCES `degree` (`deg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `field`
--

LOCK TABLES `field` WRITE;
/*!40000 ALTER TABLE `field` DISABLE KEYS */;
INSERT INTO `field` VALUES (1,'IT',1),(2,'IT',2);
/*!40000 ALTER TABLE `field` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gender`
--

DROP TABLE IF EXISTS `gender`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gender` (
  `gn_id` int NOT NULL AUTO_INCREMENT,
  `gender_type` varchar(45) NOT NULL,
  PRIMARY KEY (`gn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gender`
--

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;
INSERT INTO `gender` VALUES (1,'Male '),(2,'Female ');
/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `gov_status`
--

DROP TABLE IF EXISTS `gov_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `gov_status` (
  `govstat_id` int NOT NULL AUTO_INCREMENT,
  `gov_stat` varchar(45) NOT NULL,
  PRIMARY KEY (`govstat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `gov_status`
--

LOCK TABLES `gov_status` WRITE;
/*!40000 ALTER TABLE `gov_status` DISABLE KEYS */;
INSERT INTO `gov_status` VALUES (1,'Government'),(2,'Semi Government'),(3,'Private');
/*!40000 ALTER TABLE `gov_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inspector`
--

DROP TABLE IF EXISTS `inspector`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `inspector` (
  `ins_id` int NOT NULL AUTO_INCREMENT,
  `admin_ad_id` int NOT NULL,
  PRIMARY KEY (`ins_id`),
  KEY `fk_inspector_admin1_idx` (`admin_ad_id`),
  CONSTRAINT `fk_inspector_admin1` FOREIGN KEY (`admin_ad_id`) REFERENCES `admin` (`ad_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inspector`
--

LOCK TABLES `inspector` WRITE;
/*!40000 ALTER TABLE `inspector` DISABLE KEYS */;
INSERT INTO `inspector` VALUES (1,1),(2,2);
/*!40000 ALTER TABLE `inspector` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `intro_seminar`
--

DROP TABLE IF EXISTS `intro_seminar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `intro_seminar` (
  `intro_sem_id` int NOT NULL AUTO_INCREMENT,
  `intro_sem_date` date NOT NULL,
  `intro_sem_ins_id` int NOT NULL,
  `participation_parti_id` int NOT NULL,
  `student_st_id` int NOT NULL,
  PRIMARY KEY (`intro_sem_id`),
  KEY `fk_intro_seminar_inspector1_idx` (`intro_sem_ins_id`),
  KEY `fk_intro_seminar_participation1_idx` (`participation_parti_id`),
  KEY `fk_intro_seminar_student1_idx` (`student_st_id`),
  CONSTRAINT `fk_intro_seminar_inspector1` FOREIGN KEY (`intro_sem_ins_id`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `fk_intro_seminar_participation1` FOREIGN KEY (`participation_parti_id`) REFERENCES `participation` (`parti_id`),
  CONSTRAINT `fk_intro_seminar_student1` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `intro_seminar`
--

LOCK TABLES `intro_seminar` WRITE;
/*!40000 ALTER TABLE `intro_seminar` DISABLE KEYS */;
INSERT INTO `intro_seminar` VALUES (1,'2023-05-16',2,1,1);
/*!40000 ALTER TABLE `intro_seminar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting_name`
--

DROP TABLE IF EXISTS `meeting_name`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meeting_name` (
  `mn_id` int NOT NULL AUTO_INCREMENT,
  `mn_name` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`mn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting_name`
--

LOCK TABLES `meeting_name` WRITE;
/*!40000 ALTER TABLE `meeting_name` DISABLE KEYS */;
INSERT INTO `meeting_name` VALUES (1,'Introduction Seminar '),(2,'Assessment 1'),(3,'Assessment 2'),(4,'Monitoring 1'),(5,'Monitoring 2'),(6,'Monitoring 3');
/*!40000 ALTER TABLE `meeting_name` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `meeting_type`
--

DROP TABLE IF EXISTS `meeting_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `meeting_type` (
  `mt_id` int NOT NULL AUTO_INCREMENT,
  `mt_type` varchar(50) NOT NULL,
  PRIMARY KEY (`mt_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `meeting_type`
--

LOCK TABLES `meeting_type` WRITE;
/*!40000 ALTER TABLE `meeting_type` DISABLE KEYS */;
INSERT INTO `meeting_type` VALUES (1,'Online'),(2,'Inhouse');
/*!40000 ALTER TABLE `meeting_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitoring_1`
--

DROP TABLE IF EXISTS `monitoring_1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `monitoring_1` (
  `mn_id` int NOT NULL AUTO_INCREMENT,
  `mn_date` date NOT NULL,
  `mn_status` int NOT NULL,
  `mn_ins_id` int NOT NULL,
  `participation_parti_id` int NOT NULL,
  `periods_period_id` int NOT NULL,
  `student_st_id` int NOT NULL,
  `super_stat` int NOT NULL,
  PRIMARY KEY (`mn_id`) USING BTREE,
  KEY `fk_monitoring_1_participation1_idx` (`participation_parti_id`),
  KEY `fk_monitoring_1_periods1_idx` (`periods_period_id`),
  KEY `fk_monitoring_1_student1_idx` (`student_st_id`),
  KEY `fk_monitoring_1_inspector1_idx` (`mn_ins_id`) USING BTREE,
  CONSTRAINT `fk_monitoring_1_inspector1` FOREIGN KEY (`mn_ins_id`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `fk_monitoring_1_participation1` FOREIGN KEY (`participation_parti_id`) REFERENCES `participation` (`parti_id`),
  CONSTRAINT `fk_monitoring_1_periods1` FOREIGN KEY (`periods_period_id`) REFERENCES `periods` (`period_id`),
  CONSTRAINT `fk_monitoring_1_student1` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitoring_1`
--

LOCK TABLES `monitoring_1` WRITE;
/*!40000 ALTER TABLE `monitoring_1` DISABLE KEYS */;
/*!40000 ALTER TABLE `monitoring_1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitoring_2`
--

DROP TABLE IF EXISTS `monitoring_2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `monitoring_2` (
  `mn_id` int NOT NULL AUTO_INCREMENT,
  `mn_date` date NOT NULL,
  `mn_status` int NOT NULL,
  `mn_ins_id` int NOT NULL,
  `participation_parti_id` int NOT NULL,
  `periods_period_id` int NOT NULL,
  `student_st_id` int NOT NULL,
  `super_stat` int NOT NULL,
  PRIMARY KEY (`mn_id`) USING BTREE,
  KEY `fk_monitoring_2_participation1_idx` (`participation_parti_id`),
  KEY `fk_monitoring_2_periods1_idx` (`periods_period_id`),
  KEY `fk_monitoring_2_student1_idx` (`student_st_id`),
  KEY `fk_monitoring_2_inspector1_idx` (`mn_ins_id`) USING BTREE,
  CONSTRAINT `fk_monitoring_2_inspector1` FOREIGN KEY (`mn_ins_id`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `fk_monitoring_2_participation1` FOREIGN KEY (`participation_parti_id`) REFERENCES `participation` (`parti_id`),
  CONSTRAINT `fk_monitoring_2_periods1` FOREIGN KEY (`periods_period_id`) REFERENCES `periods` (`period_id`),
  CONSTRAINT `fk_monitoring_2_student1` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitoring_2`
--

LOCK TABLES `monitoring_2` WRITE;
/*!40000 ALTER TABLE `monitoring_2` DISABLE KEYS */;
/*!40000 ALTER TABLE `monitoring_2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitoring_3`
--

DROP TABLE IF EXISTS `monitoring_3`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `monitoring_3` (
  `mn_id` int NOT NULL AUTO_INCREMENT,
  `mn_date` date NOT NULL,
  `mn_status` int NOT NULL,
  `mn_ins_id` int NOT NULL,
  `participation_parti_id` int NOT NULL,
  `periods_period_id` int NOT NULL,
  `student_st_id` int NOT NULL,
  `super_stat` int NOT NULL,
  PRIMARY KEY (`mn_id`) USING BTREE,
  KEY `fk_monitoring_3_participation1_idx` (`participation_parti_id`),
  KEY `fk_monitoring_3_periods1_idx` (`periods_period_id`),
  KEY `fk_monitoring_3_student1_idx` (`student_st_id`),
  KEY `fk_monitoring_3_inspector1_idx` (`mn_ins_id`) USING BTREE,
  CONSTRAINT `fk_monitoring_3_inspector1` FOREIGN KEY (`mn_ins_id`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `fk_monitoring_3_participation1` FOREIGN KEY (`participation_parti_id`) REFERENCES `participation` (`parti_id`),
  CONSTRAINT `fk_monitoring_3_periods1` FOREIGN KEY (`periods_period_id`) REFERENCES `periods` (`period_id`),
  CONSTRAINT `fk_monitoring_3_student1` FOREIGN KEY (`student_st_id`) REFERENCES `student` (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitoring_3`
--

LOCK TABLES `monitoring_3` WRITE;
/*!40000 ALTER TABLE `monitoring_3` DISABLE KEYS */;
/*!40000 ALTER TABLE `monitoring_3` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `monitoring_status`
--

DROP TABLE IF EXISTS `monitoring_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `monitoring_status` (
  `monit_stat_id` int NOT NULL AUTO_INCREMENT,
  `monit_status` varchar(50) NOT NULL,
  PRIMARY KEY (`monit_stat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `monitoring_status`
--

LOCK TABLES `monitoring_status` WRITE;
/*!40000 ALTER TABLE `monitoring_status` DISABLE KEYS */;
INSERT INTO `monitoring_status` VALUES (1,'Introduction Seminar'),(2,'Monitoring 1'),(3,'Monitoring 2'),(4,'Monitoring 3'),(5,'Assessment');
/*!40000 ALTER TABLE `monitoring_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participation`
--

DROP TABLE IF EXISTS `participation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `participation` (
  `parti_id` int NOT NULL AUTO_INCREMENT,
  `parti_stat` varchar(45) NOT NULL,
  PRIMARY KEY (`parti_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participation`
--

LOCK TABLES `participation` WRITE;
/*!40000 ALTER TABLE `participation` DISABLE KEYS */;
INSERT INTO `participation` VALUES (1,'Present'),(2,'Absent'),(3,'none');
/*!40000 ALTER TABLE `participation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `periods`
--

DROP TABLE IF EXISTS `periods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `periods` (
  `period_id` int NOT NULL AUTO_INCREMENT,
  `period` varchar(45) NOT NULL,
  `duration` int unsigned NOT NULL,
  PRIMARY KEY (`period_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `periods`
--

LOCK TABLES `periods` WRITE;
/*!40000 ALTER TABLE `periods` DISABLE KEYS */;
INSERT INTO `periods` VALUES (1,'First',6),(2,'Second',3);
/*!40000 ALTER TABLE `periods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `selected_to_assess`
--

DROP TABLE IF EXISTS `selected_to_assess`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `selected_to_assess` (
  `sltd_asses_id` int NOT NULL AUTO_INCREMENT,
  `sltd_asses_date` date NOT NULL,
  `sltd_asses_student` int NOT NULL,
  `sltd_asses_inspector` int NOT NULL,
  `sltd_asses_status` int NOT NULL,
  `sltd_asses_approved` varchar(50) NOT NULL DEFAULT '',
  `sltd_done` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`sltd_asses_id`),
  KEY `FK_selected_to_assess_monitoring_status` (`sltd_asses_status`),
  KEY `FK_selected_to_assess_inspector` (`sltd_asses_inspector`),
  KEY `FK_selected_to_assess_student` (`sltd_asses_student`),
  CONSTRAINT `FK_selected_to_assess_inspector` FOREIGN KEY (`sltd_asses_inspector`) REFERENCES `inspector` (`ins_id`),
  CONSTRAINT `FK_selected_to_assess_monitoring_status` FOREIGN KEY (`sltd_asses_status`) REFERENCES `monitoring_status` (`monit_stat_id`),
  CONSTRAINT `FK_selected_to_assess_student` FOREIGN KEY (`sltd_asses_student`) REFERENCES `student` (`st_id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `selected_to_assess`
--

LOCK TABLES `selected_to_assess` WRITE;
/*!40000 ALTER TABLE `selected_to_assess` DISABLE KEYS */;
/*!40000 ALTER TABLE `selected_to_assess` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `student` (
  `st_id` int NOT NULL AUTO_INCREMENT,
  `naita_id` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `full_name` varchar(45) NOT NULL,
  `full_name_with_init` varchar(45) NOT NULL,
  `nic` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `mobile_no` varchar(45) NOT NULL,
  `land_line` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `reg_date` date NOT NULL,
  `gender_gn_id` int NOT NULL,
  `field_fld_id` int DEFAULT NULL,
  PRIMARY KEY (`st_id`),
  KEY `fk_student_gender_idx` (`gender_gn_id`),
  KEY `fk_student_field1_idx` (`field_fld_id`),
  CONSTRAINT `fk_student_field1` FOREIGN KEY (`field_fld_id`) REFERENCES `field` (`fld_id`),
  CONSTRAINT `fk_student_gender` FOREIGN KEY (`gender_gn_id`) REFERENCES `gender` (`gn_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'2222','wwwww','aaaa','wwwww','dddddd','555','ttttt','56655','7777','gggg','0000','2023-06-21',1,1),(5,'2223','Dhanushka','Sandagiri','Dhanushka','Sandagiri','8888','751,Nungamuwa,Pallewela','+94774771042','Sri Lanka','danushkasandagiri@gmail.com','0000','2023-06-24',1,1),(6,'2224','Dhanushka','Sandagiri','Dhanushka','Sandagiri','971153733','751,Nungamuwa,Pallewela','+94774771042','077200382','danushkasandagiri@gmail.com','0000','2023-06-26',1,2),(7,'2225','Kasun','Harsha','Kasun Harsha kumara','k.p. Kasun Harsha kumara','971153555','no 7, nittambuwa.','0774771042','0332296678','kasun87@gmail.com','0000','2023-07-07',1,2);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_establishment`
--

DROP TABLE IF EXISTS `training_establishment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `training_establishment` (
  `tran_est_id` int NOT NULL AUTO_INCREMENT,
  `tran_est_from` date NOT NULL,
  `tran_est_to` date NOT NULL,
  `tran_est_st_id` int NOT NULL,
  `worksite_wrksit_id` int NOT NULL,
  `tran_perion` int NOT NULL,
  `tran_monit_stat_id` int NOT NULL,
  PRIMARY KEY (`tran_est_id`),
  KEY `fk_training_establishment_student1_idx` (`tran_est_st_id`),
  KEY `fk_training_establishment_worksite1_idx` (`worksite_wrksit_id`),
  KEY `FK_training_establishment_periods` (`tran_perion`),
  KEY `FK_training_establishment_monitoring_status` (`tran_monit_stat_id`),
  CONSTRAINT `FK_training_establishment_monitoring_status` FOREIGN KEY (`tran_monit_stat_id`) REFERENCES `monitoring_status` (`monit_stat_id`),
  CONSTRAINT `FK_training_establishment_periods` FOREIGN KEY (`tran_perion`) REFERENCES `periods` (`period_id`),
  CONSTRAINT `fk_training_establishment_student1` FOREIGN KEY (`tran_est_st_id`) REFERENCES `student` (`st_id`),
  CONSTRAINT `fk_training_establishment_worksite1` FOREIGN KEY (`worksite_wrksit_id`) REFERENCES `worksite` (`wrksit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_establishment`
--

LOCK TABLES `training_establishment` WRITE;
/*!40000 ALTER TABLE `training_establishment` DISABLE KEYS */;
INSERT INTO `training_establishment` VALUES (2,'2023-05-16','2023-11-16',1,1,1,1),(3,'2023-07-23','2023-12-23',5,1,1,1),(4,'2023-07-23','2023-12-23',6,1,1,1),(5,'2023-07-24','2023-12-24',7,1,1,1);
/*!40000 ALTER TABLE `training_establishment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `training_place`
--

DROP TABLE IF EXISTS `training_place`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `training_place` (
  `tran_plc_id` int NOT NULL AUTO_INCREMENT,
  `tran_uid` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `tran_plc_name` varchar(45) NOT NULL,
  `tran_plc_address` varchar(45) NOT NULL,
  `tran_plc_email` varchar(45) NOT NULL,
  `tran_plc_contact1` varchar(45) NOT NULL,
  `tran_plc_contact2` varchar(45) NOT NULL,
  `tran_plc_pass` varchar(45) NOT NULL,
  `districts_district_id` int NOT NULL,
  PRIMARY KEY (`tran_plc_id`),
  KEY `fk_training_place_districts1_idx` (`districts_district_id`),
  CONSTRAINT `fk_training_place_districts1` FOREIGN KEY (`districts_district_id`) REFERENCES `districts` (`district_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `training_place`
--

LOCK TABLES `training_place` WRITE;
/*!40000 ALTER TABLE `training_place` DISABLE KEYS */;
INSERT INTO `training_place` VALUES (1,'2222','Sri lanka telecome, Colombo 01\n.','Colombo 01\n','kkkkkkk','555555','444444','0000',5);
/*!40000 ALTER TABLE `training_place` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uni_type`
--

DROP TABLE IF EXISTS `uni_type`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `uni_type` (
  `uni_typ_id` int NOT NULL AUTO_INCREMENT,
  `uni_typ` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`uni_typ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uni_type`
--

LOCK TABLES `uni_type` WRITE;
/*!40000 ALTER TABLE `uni_type` DISABLE KEYS */;
INSERT INTO `uni_type` VALUES (1,'University'),(2,'Institute');
/*!40000 ALTER TABLE `uni_type` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `university`
--

DROP TABLE IF EXISTS `university`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `university` (
  `uni_id` int NOT NULL AUTO_INCREMENT,
  `uni_name` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uni_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uni_contact_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `uni_contact_2` varchar(50) DEFAULT NULL,
  `uni_type_uni_typ_id` int NOT NULL,
  `gov_status_govstat_id` int NOT NULL,
  `uni_pass` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`uni_id`),
  KEY `fk_university_uni_type1_idx` (`uni_type_uni_typ_id`),
  KEY `fk_university_gov_status1_idx` (`gov_status_govstat_id`),
  CONSTRAINT `fk_university_gov_status1` FOREIGN KEY (`gov_status_govstat_id`) REFERENCES `gov_status` (`govstat_id`),
  CONSTRAINT `fk_university_uni_type1` FOREIGN KEY (`uni_type_uni_typ_id`) REFERENCES `uni_type` (`uni_typ_id`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `university`
--

LOCK TABLES `university` WRITE;
/*!40000 ALTER TABLE `university` DISABLE KEYS */;
INSERT INTO `university` VALUES (81,'University of Colombo','kkk','777','77777',1,1,'0000'),(84,'University of Kelaniya','kkkkkk','77','7777',1,1,'0000');
/*!40000 ALTER TABLE `university` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `worksite`
--

DROP TABLE IF EXISTS `worksite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `worksite` (
  `wrksit_id` int NOT NULL AUTO_INCREMENT,
  `wrksit_uid` varchar(45) NOT NULL,
  `wrksit_name` varchar(45) NOT NULL,
  `wrksit_address` varchar(45) NOT NULL,
  `wrksit_email` varchar(45) NOT NULL,
  `wrksit_contact1` varchar(45) NOT NULL,
  `wrksit_contact2` varchar(45) NOT NULL,
  `wrksit_pass` varchar(45) NOT NULL,
  `districts_district_id` int NOT NULL,
  `wrksit_tran_plc_id` int NOT NULL,
  PRIMARY KEY (`wrksit_id`),
  KEY `fk_worksite_districts1_idx` (`districts_district_id`),
  KEY `FK_worksite_training_place` (`wrksit_tran_plc_id`),
  CONSTRAINT `fk_worksite_districts1` FOREIGN KEY (`districts_district_id`) REFERENCES `districts` (`district_id`),
  CONSTRAINT `FK_worksite_training_place` FOREIGN KEY (`wrksit_tran_plc_id`) REFERENCES `training_place` (`tran_plc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `worksite`
--

LOCK TABLES `worksite` WRITE;
/*!40000 ALTER TABLE `worksite` DISABLE KEYS */;
INSERT INTO `worksite` VALUES (1,'2222','Sri lanka telecome , Kuliyapitiya\n','Kuliyapitiya\n','ggggg','44444','88888888','0000',14,1);
/*!40000 ALTER TABLE `worksite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-08-03 14:46:59

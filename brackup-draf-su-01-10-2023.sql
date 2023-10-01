CREATE DATABASE  IF NOT EXISTS `draft_su` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `draft_su`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: draft_su
-- ------------------------------------------------------
-- Server version	8.0.33

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
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_10_01_024035_create_permission_tables',1),(6,'2023_10_01_024315_create_work_order_table',1),(7,'2023_10_01_024315_create_work_orders_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_permissions`
--

DROP TABLE IF EXISTS `model_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_permissions`
--

LOCK TABLES `model_has_permissions` WRITE;
/*!40000 ALTER TABLE `model_has_permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `model_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `model_has_roles`
--

DROP TABLE IF EXISTS `model_has_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `model_has_roles` (
  `role_id` bigint unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `model_has_roles`
--

LOCK TABLES `model_has_roles` WRITE;
/*!40000 ALTER TABLE `model_has_roles` DISABLE KEYS */;
INSERT INTO `model_has_roles` VALUES (1,'App\\Models\\User',1),(1,'App\\Models\\User',2),(2,'App\\Models\\User',3),(3,'App\\Models\\User',4);
/*!40000 ALTER TABLE `model_has_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'ver-rol','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(2,'crear-rol','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(3,'editar-rol','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(4,'borrar-rol','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(5,'ver-work','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(6,'crear-work','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(7,'editar-work','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(8,'borrar-work','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(9,'ver-conditions','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(10,'crear-conditions','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(11,'editar-conditions','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(12,'borrar-conditions','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(13,'ver-vesselinfo','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(14,'crear-vesselinfo','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(15,'editar-vesselinfo','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(16,'borrar-vesselinfo','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(17,'ver-timelog','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(18,'crear-timelog','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(19,'editar-timelog','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(20,'borrar-timelog','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(21,'ver-AFT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(22,'crear-AFT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(23,'editar-AFT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(24,'borrar-AFT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(25,'ver-FWT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(26,'crear-FWT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(27,'editar-FWT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(28,'borrar-FWT','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(29,'ver-MM','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(30,'crear-MM','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(31,'editar-MM','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(32,'borrar-MM','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(33,'ver-MID','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(34,'crear-MID','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(35,'editar-MID','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(36,'borrar-MID','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(37,'ver-MMD','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(38,'crear-MMD','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(39,'editar-MMD','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(40,'borrar-MMD','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(41,'ver-Displacement','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(42,'crear-Displacement','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(43,'editar-Displacement','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(44,'borrar-Displacement','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(45,'ver-DeductionTotal','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(46,'crear-DeductionTotal','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(47,'editar-DeductionTotal','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(48,'borrar-DeductionTotal','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(49,'ver-TrimCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(50,'crear-TrimCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(51,'editar-TrimCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(52,'borrar-TrimCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(53,'ver-VesselCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(54,'crear-VesselCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(55,'editar-VesselCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01'),(56,'borrar-VesselCorr','web','2023-10-01 20:56:01','2023-10-01 20:56:01');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `role_has_permissions` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_has_permissions`
--

LOCK TABLES `role_has_permissions` WRITE;
/*!40000 ALTER TABLE `role_has_permissions` DISABLE KEYS */;
INSERT INTO `role_has_permissions` VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(26,1),(27,1),(28,1),(29,1),(30,1),(31,1),(32,1),(33,1),(34,1),(35,1),(36,1),(37,1),(38,1),(39,1),(40,1),(41,1),(42,1),(43,1),(44,1),(45,1),(46,1),(47,1),(48,1),(49,1),(50,1),(51,1),(52,1),(53,1),(54,1),(55,1),(56,1),(5,2),(6,2),(7,2),(9,2),(10,2),(11,2),(12,2),(13,2),(14,2),(15,2),(16,2),(17,2),(18,2),(19,2),(20,2),(21,2),(22,2),(23,2),(24,2),(25,2),(26,2),(27,2),(28,2),(29,2),(30,2),(31,2),(32,2),(33,2),(34,2),(35,2),(36,2),(37,2),(38,2),(39,2),(40,2),(41,2),(42,2),(43,2),(44,2),(45,2),(46,2),(47,2),(48,2),(49,2),(50,2),(51,2),(52,2),(53,2),(54,2),(55,2),(56,2),(5,3),(9,3),(10,3),(11,3),(13,3),(14,3),(15,3),(17,3),(18,3),(19,3),(21,3),(22,3),(23,3),(25,3),(26,3),(27,3),(29,3),(30,3),(31,3),(33,3),(34,3),(35,3),(37,3),(38,3),(39,3),(41,3),(42,3),(43,3),(45,3),(46,3),(47,3),(49,3),(50,3),(51,3),(53,3),(54,3),(55,3);
/*!40000 ALTER TABLE `role_has_permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'General Manager','web','2023-10-01 20:56:52','2023-10-01 20:56:52'),(2,'Operation Surveyor','web','2023-10-01 22:26:54','2023-10-01 22:26:54'),(3,'Cargo Surveyor','web','2023-10-01 22:27:26','2023-10-01 22:27:26');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@camincargo.com',NULL,'$2y$10$qv3elkLdmdZSs0a2ztgYMuTnk6Vjva.s3FdrWOC83rXP66RKF0xd6',NULL,'2023-10-01 20:53:50','2023-10-01 20:53:50'),(2,'Luis Villatoro','luis.villatoro@camincargo.com',NULL,'$2y$10$xYX03VseRXOZGSH1MScFHef417wS43OyBsXiQR1tDatOA.1.p2oxC',NULL,'2023-10-01 22:28:08','2023-10-01 22:28:08'),(3,'David Mazá','d.maza@camincargo.com',NULL,'$2y$10$LajP3rHMfIjQiGrh9VKuNO5XJ1FH3DvBxcDKaGDpPfsx9UMAXlqLa',NULL,'2023-10-01 22:28:28','2023-10-01 22:28:28'),(4,'Alex Mejia','a.mejia@camincargo.com',NULL,'$2y$10$1GDBRBxEiUsQLKcmji/3guIHcZifbKhvzrT1MKI2o6UbIC4XGNLr2',NULL,'2023-10-01 22:28:48','2023-10-01 22:28:48');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `work_order`
--

DROP TABLE IF EXISTS `work_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `work_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `file_no` int NOT NULL,
  `branch` varchar(45) NOT NULL,
  `terminal` varchar(45) NOT NULL,
  `product` varchar(45) NOT NULL,
  `vessel` varchar(45) NOT NULL,
  `file_status` varchar(45) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `work_order`
--

LOCK TABLES `work_order` WRITE;
/*!40000 ALTER TABLE `work_order` DISABLE KEYS */;
INSERT INTO `work_order` VALUES (2,25297,'Caribean','Loyola Puma','Gassoline','MT LAIKI FREEDOM','Pending','2023-10-01 22:21:12','2023-10-01 22:21:12');
/*!40000 ALTER TABLE `work_order` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-10-01 10:30:51

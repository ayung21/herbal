-- MySQL dump 10.13  Distrib 5.7.35, for Linux (x86_64)
--
-- Host: localhost    Database: herbal
-- ------------------------------------------------------
-- Server version	5.7.35-0ubuntu0.18.04.1

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
-- Table structure for table `tbm_barang`
--

DROP TABLE IF EXISTS `tbm_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_barang`
--

LOCK TABLES `tbm_barang` WRITE;
/*!40000 ALTER TABLE `tbm_barang` DISABLE KEYS */;
INSERT INTO `tbm_barang` VALUES (1,'herbal a',1,'2021-09-02 08:10:17',NULL,NULL),(2,'herbal b aja',1,'2021-09-02 08:10:17',NULL,NULL),(3,'herbal c',1,'2021-09-02 08:10:17',1,'2021-09-10 23:18:56'),(4,'harbal',1,'2021-09-02 08:10:17',1,'2021-09-02 08:10:17'),(5,'herbal d',NULL,'2021-09-10 23:08:19',1,'2021-09-10 23:13:39');
/*!40000 ALTER TABLE `tbm_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbm_kota`
--

DROP TABLE IF EXISTS `tbm_kota`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_kota` (
  `id_kota` int(11) NOT NULL AUTO_INCREMENT,
  `kota` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kota`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_kota`
--

LOCK TABLES `tbm_kota` WRITE;
/*!40000 ALTER TABLE `tbm_kota` DISABLE KEYS */;
INSERT INTO `tbm_kota` VALUES (2,'Sidoarjo',NULL,'2021-09-09 23:00:23',NULL,NULL),(3,'Surabaya',NULL,'2021-09-09 23:27:22',1,'2021-09-09 23:27:54'),(4,'Mojokerto',NULL,'2021-09-09 23:33:30',NULL,NULL);
/*!40000 ALTER TABLE `tbm_kota` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbm_user`
--

DROP TABLE IF EXISTS `tbm_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbm_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_toko` varchar(100) DEFAULT NULL,
  `fk_kota` int(11) DEFAULT NULL,
  `no_hp` char(13) DEFAULT NULL,
  `status` int(11) DEFAULT '0' COMMENT '0 = not verified\n1 = verified',
  `access` char(10) DEFAULT NULL COMMENT 'admin\nuser',
  `longitude` varchar(100) DEFAULT NULL,
  `langitude` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbm_user`
--

LOCK TABLES `tbm_user` WRITE;
/*!40000 ALTER TABLE `tbm_user` DISABLE KEYS */;
INSERT INTO `tbm_user` VALUES (1,'ayungyung20@gmail.com','$2y$10$esJdrCPcUy3q..4ilHovpeXaBfr4PXpLbJpoDT56PGa.vs5HiNFky',NULL,NULL,'082257651511',1,'admin','112.7830687','-7.367887'),(2,'rozi.mmmplas@gmail.com','$2y$10$esJdrCPcUy3q..4ilHovpeXaBfr4PXpLbJpoDT56PGa.vs5HiNFky','herbal duro',2,'085645552126',1,'user','112.7830687','-7.367887'),(3,'ayungyung20@gmail.com','$2y$10$esJdrCPcUy3q..4ilHovpeXaBfr4PXpLbJpoDT56PGa.vs5HiNFky','herbal abah',3,'085745438877',1,'user','112.7830687','-7.367887'),(4,'ayungyung20@gmail.com','$2y$10$esJdrCPcUy3q..4ilHovpeXaBfr4PXpLbJpoDT56PGa.vs5HiNFky','herbal tamiji',4,'082257651520',0,'user','112.7830687','-7.367887'),(5,'ayungyung20@gmail.com','$2y$10$esJdrCPcUy3q..4ilHovpeXaBfr4PXpLbJpoDT56PGa.vs5HiNFky',NULL,NULL,'082121212121',0,'user',NULL,NULL);
/*!40000 ALTER TABLE `tbm_user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbt_transkasi`
--

DROP TABLE IF EXISTS `tbt_transkasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbt_transkasi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `fk_user` int(11) DEFAULT NULL,
  `fk_barang` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted_by` int(11) DEFAULT NULL,
  `date_deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbt_transkasi`
--

LOCK TABLES `tbt_transkasi` WRITE;
/*!40000 ALTER TABLE `tbt_transkasi` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbt_transkasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary table structure for view `tbv_barang`
--

DROP TABLE IF EXISTS `tbv_barang`;
/*!50001 DROP VIEW IF EXISTS `tbv_barang`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_barang` AS SELECT 
 1 AS `id_barang`,
 1 AS `nama_barang`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tbv_kota`
--

DROP TABLE IF EXISTS `tbv_kota`;
/*!50001 DROP VIEW IF EXISTS `tbv_kota`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_kota` AS SELECT 
 1 AS `id_kota`,
 1 AS `kota`*/;
SET character_set_client = @saved_cs_client;

--
-- Temporary table structure for view `tbv_toko`
--

DROP TABLE IF EXISTS `tbv_toko`;
/*!50001 DROP VIEW IF EXISTS `tbv_toko`*/;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
/*!50001 CREATE VIEW `tbv_toko` AS SELECT 
 1 AS `id_user`,
 1 AS `nama_toko`,
 1 AS `status`,
 1 AS `kota`*/;
SET character_set_client = @saved_cs_client;

--
-- Dumping routines for database 'herbal'
--

--
-- Final view structure for view `tbv_barang`
--

/*!50001 DROP VIEW IF EXISTS `tbv_barang`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_barang` AS select `tb`.`id_barang` AS `id_barang`,`tb`.`nama_barang` AS `nama_barang` from `tbm_barang` `tb` where (isnull(`tb`.`deleted_by`) and isnull(`tb`.`date_deleted`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tbv_kota`
--

/*!50001 DROP VIEW IF EXISTS `tbv_kota`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_kota` AS select `tk`.`id_kota` AS `id_kota`,`tk`.`kota` AS `kota` from `tbm_kota` `tk` where (isnull(`tk`.`deleted_by`) and isnull(`tk`.`date_deleted`)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;

--
-- Final view structure for view `tbv_toko`
--

/*!50001 DROP VIEW IF EXISTS `tbv_toko`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_general_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `tbv_toko` AS select `tu`.`id_user` AS `id_user`,`tu`.`nama_toko` AS `nama_toko`,`tu`.`status` AS `status`,`tk`.`kota` AS `kota` from (`tbm_user` `tu` join `tbm_kota` `tk` on((`tk`.`id_kota` = `tu`.`fk_kota`))) where ((`tu`.`nama_toko` is not null) and (`tu`.`langitude` is not null) and (`tu`.`longitude` is not null)) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-09-13  5:29:48

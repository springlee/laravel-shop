-- MySQL dump 10.13  Distrib 8.0.12, for osx10.13 (x86_64)
--
-- Host: 127.0.0.1    Database: laravel-shop
-- ------------------------------------------------------
-- Server version	5.7.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `admin_menu`
--

LOCK TABLES `admin_menu` WRITE;
/*!40000 ALTER TABLE `admin_menu` DISABLE KEYS */;
INSERT INTO `admin_menu` VALUES (1,0,1,'首页','fa-bar-chart','/',NULL,'2018-07-09 05:54:12'),(2,0,7,'系统管理','fa-tasks',NULL,NULL,'2018-11-18 15:00:25'),(3,2,8,'管理员','fa-users','auth/users',NULL,'2018-11-18 15:00:25'),(4,2,9,'角色','fa-user','auth/roles',NULL,'2018-11-18 15:00:25'),(5,2,10,'权限','fa-ban','auth/permissions',NULL,'2018-11-18 15:00:25'),(6,2,11,'菜单','fa-bars','auth/menu',NULL,'2018-11-18 15:00:25'),(7,2,12,'操作日志','fa-history','auth/logs',NULL,'2018-11-18 15:00:25'),(8,0,2,'用户管理','fa-users','/users','2018-07-09 05:59:46','2018-07-10 03:36:25'),(9,0,4,'商品管理','fa-cubes',NULL,'2018-07-10 03:35:39','2018-11-27 11:37:21'),(10,0,5,'订单管理','fa-rmb','/orders','2018-09-17 15:10:17','2018-11-18 15:00:25'),(11,0,6,'优惠券管理','fa-tag','coupon_codes','2018-11-08 09:53:36','2018-11-18 15:00:25'),(12,0,3,'类目管理','fa-bars','/categories','2018-11-18 15:00:08','2018-11-18 15:00:25'),(13,9,0,'众筹商品','fa-bars','/crowdfunding_products','2018-11-27 11:36:34','2018-11-27 11:36:34'),(14,9,0,'普通商品','fa-bars','/products','2018-11-27 11:37:41','2018-11-27 11:37:41');
/*!40000 ALTER TABLE `admin_menu` ENABLE KEYS */;
UNLOCK TABLES;

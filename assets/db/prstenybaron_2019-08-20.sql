# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Database: prstenybaron
# Generation Time: 2019-08-20 18:50:46 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id`, `name`, `created_at`)
VALUES
	(1,'bílé zlato','2019-08-19 23:25:17'),
	(2,'kombinované zlato','2019-08-19 23:25:36'),
	(3,'žluté zlato','2019-08-19 23:25:47'),
	(4,'červené zlato','2019-08-19 23:25:56');

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table image
# ------------------------------------------------------------

DROP TABLE IF EXISTS `image`;

CREATE TABLE `image` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table order
# ------------------------------------------------------------

DROP TABLE IF EXISTS `order`;

CREATE TABLE `order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `zip_code` varchar(20) NOT NULL DEFAULT '',
  `contact_telephone` varchar(20) NOT NULL DEFAULT '',
  `contact_email` varchar(250) NOT NULL DEFAULT '',
  `type_male` varchar(50) NOT NULL DEFAULT '',
  `type_female` varchar(50) NOT NULL DEFAULT '',
  `size_male` varchar(50) NOT NULL DEFAULT '',
  `size_female` varchar(50) NOT NULL DEFAULT '',
  `type_stone` int(11) NOT NULL,
  `num_stone` varchar(50) NOT NULL,
  `material` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `text_engraving_male` varchar(100) NOT NULL DEFAULT '',
  `text_engraving_female` varchar(100) NOT NULL DEFAULT '',
  `takeover_method` int(11) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pages`;

CREATE TABLE `pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `decription` text NOT NULL,
  `meta_keywords` varchar(250) NOT NULL DEFAULT '',
  `meta_description` text NOT NULL,
  `meta_image` varchar(250) NOT NULL DEFAULT '',
  `position` int(11) NOT NULL,
  `active` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table price_calculation
# ------------------------------------------------------------

DROP TABLE IF EXISTS `price_calculation`;

CREATE TABLE `price_calculation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `type_male` varchar(50) NOT NULL DEFAULT '',
  `type_female` varchar(50) NOT NULL DEFAULT '',
  `size_male` varchar(50) NOT NULL DEFAULT '',
  `size_female` varchar(50) NOT NULL DEFAULT '',
  `type_stone` int(11) NOT NULL,
  `num_stone` varchar(50) NOT NULL,
  `material` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `material` varchar(250) NOT NULL DEFAULT '',
  `width` varchar(250) NOT NULL DEFAULT '',
  `price_size` decimal(11,2) NOT NULL,
  `price_brillants` decimal(11,2) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL DEFAULT '\\0',
  `meta_description` varchar(250) NOT NULL DEFAULT '',
  `meta_image` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;

INSERT INTO `product` (`id`, `name`, `url`, `description`, `category_id`, `image`, `material`, `width`, `price_size`, `price_brillants`, `meta_keywords`, `meta_description`, `meta_image`, `created_at`)
VALUES
	(1,'B10','b10','',0,'','','',0.00,0.00,'','','','0000-00-00 00:00:00');

/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table related_product
# ------------------------------------------------------------

DROP TABLE IF EXISTS `related_product`;

CREATE TABLE `related_product` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `product_related` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table settings
# ------------------------------------------------------------

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL DEFAULT '',
  `logo` varchar(250) NOT NULL DEFAULT '',
  `whatsapp` varchar(20) NOT NULL DEFAULT '',
  `facebook` varchar(250) NOT NULL DEFAULT '',
  `instagram` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `phone` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(20) NOT NULL DEFAULT '',
  `zip_code` varchar(20) NOT NULL DEFAULT '',
  `contact_name` varchar(100) NOT NULL DEFAULT '',
  `contact_identification` varchar(20) NOT NULL DEFAULT '',
  `latitude` varchar(20) NOT NULL DEFAULT '',
  `longitude` varchar(20) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;

INSERT INTO `settings` (`id`, `title`, `logo`, `whatsapp`, `facebook`, `instagram`, `email`, `phone`, `city`, `zip_code`, `contact_name`, `contact_identification`, `latitude`, `longitude`)
VALUES
	(1,'Anillos','','','','','','','','','','','','');

/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

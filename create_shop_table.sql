DROP DATABASE IF EXISTS `shop`;
CREATE DATABASE IF NOT EXISTS `shop`
USE `shop`;

DROP TABLE IF EXISTS `coffee`;
CREATE TABLE IF NOT EXISTS `coffee` (
  `coffee_id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  KEY `Index 1` (`coffee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(255) NOT NULL AUTO_INCREMENT,
  `quantity` int(255) NOT NULL DEFAULT '0',
  `grinding` varchar(255) NOT NULL DEFAULT '0',
  `roast` varchar(255) NOT NULL DEFAULT '0',
  `client_name` varchar(255) NOT NULL DEFAULT '0',
  `client_email` varchar(255) NOT NULL DEFAULT '0',
  `client_phone` int(255) NOT NULL DEFAULT '0',
  `receiver_name` varchar(255) NOT NULL DEFAULT '0',
  `receiver_phone` int(255) NOT NULL DEFAULT '0',
  `address` varchar(255) NOT NULL DEFAULT '0',
  `card_number` varchar(255) NOT NULL DEFAULT '0',
  `name_on_card` varchar(255) NOT NULL DEFAULT '0',
  `cvv` int(255) NOT NULL DEFAULT '0',
  `expirt_date` date NOT NULL,  
  `order_time` timestamp NOT NULL,
  KEY `Index 1` (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  KEY `Index 1` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
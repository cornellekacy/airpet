SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `trmsxdshtn` ;
CREATE SCHEMA IF NOT EXISTS `trmsxdshtn` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `trmsxdshtn` ;

-- -----------------------------------------------------
-- Table `library`.`item`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `trmsxdshtn`.`users` ;

CREATE TABLE IF NOT EXISTS `trmsxdshtn`.`users` (
  `user_id` INT NOT NULL AUTO_INCREMENT,
  `email` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`))
ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `email`, `username`,`password`) VALUES
(1, 'cornelle@gmail.com', 'admin', md5('admin123'));


trmsxdshtn

CREATE TABLE IF NOT EXISTS `trmsxdshtn`.`track` (
  `track_id` INT NOT NULL AUTO_INCREMENT,
  `jname` varchar(255) NOT NULL,
  `jadd` varchar(255) NOT NULL,
  `jcountry` varchar(255) NOT NULL,
  `jemail` varchar(255) NOT NULL,
  `jnumber` varchar(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sadd` varchar(255) NOT NULL,
  `scountry` varchar(255) NOT NULL,
  `semail` varchar(255) NOT NULL,
  `snumber` varchar(255) NOT NULL,
  `prod` varchar(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `Ship_date` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL,
  `currentl` varchar(255) NOT NULL,
  `pickupl` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `deliverys` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `items` varchar(255) NOT NULL,
  `descrip` varchar(255) NOT NULL,
  `ship_id` varchar(255) NOT NULL,

  PRIMARY KEY (`track_id`))
ENGINE = InnoDB;
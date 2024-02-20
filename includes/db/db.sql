
CREATE DATABASE GAS_DB;

USE GAS_DB;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


CREATE TABLE `Distributor`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pwd` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `address` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `pin` INT NOT NULL,
    `phn_no` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `status` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Feedback`(
    `dis_id` INT UNSIGNED NOT NULL,
    `cus_id` INT UNSIGNED NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `time` TIME NOT NULL,
    `type` VARCHAR(255) NOT NULL,
    `subject` VARCHAR(255) NOT NULL,
    `subject_title` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Order`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `dis_id` INT UNSIGNED NOT NULL,
    `cus_id` INT UNSIGNED NOT NULL,
    `date` VARCHAR(255) NOT NULL,
    `time` TIME NOT NULL,
    `amount` DECIMAL(8, 2) NOT NULL,
    `status` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Admin`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pwd` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `Consumer`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `dis_id` INT UNSIGNED NULL,
    `pwd` VARCHAR(255) NOT NULL,
    `name` VARCHAR(255) NOT NULL,
    `address` TEXT NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `pin` INT NOT NULL,
    `phn_no` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `reg_date` VARCHAR(255) NOT NULL,
    `status` VARCHAR(255) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE
    `Consumer` ADD CONSTRAINT `consumer_dis_id_foreign` FOREIGN KEY(`dis_id`) REFERENCES `distributor`(`id`);

ALTER TABLE
    `Order` ADD CONSTRAINT `order_dis_id_foreign` FOREIGN KEY(`dis_id`) REFERENCES `distributor`(`id`);

ALTER TABLE
    `Order` ADD CONSTRAINT `order_cus_id_foreign` FOREIGN KEY(`cus_id`) REFERENCES `consumer`(`id`);

ALTER TABLE
    `Feedback` ADD CONSTRAINT `feedback_dis_id_foreign` FOREIGN KEY(`dis_id`) REFERENCES `distributor`(`id`);

ALTER TABLE
    `Feedback` ADD CONSTRAINT `feedback_cus_id_foreign` FOREIGN KEY(`cus_id`) REFERENCES `consumer`(`id`);

ALTER TABLE `Distributor` AUTO_INCREMENT = 101;
ALTER TABLE `Consumer` AUTO_INCREMENT = 1001;
ALTER TABLE `Order` AUTO_INCREMENT = 10001;
ALTER TABLE `Admin` AUTO_INCREMENT = 100001;

--
-- Dumping data for table `Admin`
--

INSERT INTO `Admin` (`pwd`) VALUES 
('jefa'), 
('hoof'), 
('hovding'), 
('honcho'), 
('capa');
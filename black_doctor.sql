-- Adminer 4.8.1 MySQL 10.4.6-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_role` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `booking`;
CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL AUTO_INCREMENT,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `booking_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `appointment_date` date NOT NULL,
  `amount` varchar(20) NOT NULL,
  `follow_up_date` date NOT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctors`;
CREATE TABLE `doctors` (
  `doc_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(50) NOT NULL,
  `doc_email` varchar(50) NOT NULL,
  `doc_mobile` varchar(15) NOT NULL,
  `doc_dob` date NOT NULL,
  `doc_gender` varchar(10) NOT NULL,
  `doc_category` varchar(50) NOT NULL,
  `doc_service_list` varchar(255) NOT NULL,
  `doc_bio` int(11) NOT NULL,
  `doc_pricing` varchar(50) NOT NULL,
  `doc_awards` int(11) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_address`;
CREATE TABLE `doctor_address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `address_line1` varchar(50) NOT NULL,
  `address_line2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_awards`;
CREATE TABLE `doctor_awards` (
  `award_id` int(11) NOT NULL AUTO_INCREMENT,
  `award_name` varchar(50) NOT NULL,
  `award_detail` text NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`award_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_clinic`;
CREATE TABLE `doctor_clinic` (
  `clinic_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `clinic_name` varchar(50) NOT NULL,
  `clinic_address` text NOT NULL,
  `clinic_image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`clinic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_education`;
CREATE TABLE `doctor_education` (
  `edu_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `degree_name` varchar(50) NOT NULL,
  `collage` varchar(50) NOT NULL,
  `year_completed` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`edu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_exprience`;
CREATE TABLE `doctor_exprience` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `hospital_name` varchar(50) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `designation` varchar(50) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_review`;
CREATE TABLE `doctor_review` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) NOT NULL,
  `reviewer_name` varchar(11) NOT NULL,
  `reviewer_image` varchar(50) NOT NULL,
  `review_rate` int(11) NOT NULL,
  `recommended` varchar(10) NOT NULL DEFAULT 'true',
  `review_desc` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `doctor_timing`;
CREATE TABLE `doctor_timing` (
  `time_id` int(11) NOT NULL AUTO_INCREMENT,
  `monday` varchar(50) DEFAULT NULL,
  `tuesday` varchar(50) DEFAULT NULL,
  `wednesday` varchar(50) DEFAULT NULL,
  `thursday` varchar(50) DEFAULT NULL,
  `friday` varchar(50) DEFAULT NULL,
  `saturday` varchar(50) DEFAULT NULL,
  `sunday` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`time_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `patients`;
CREATE TABLE `patients` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `picture` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `blood_group` varchar(50) DEFAULT NULL,
  `favorite` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `social_media`;
CREATE TABLE `social_media` (
  `social_id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_id` int(11) DEFAULT NULL,
  `facebook_url` varchar(100) DEFAULT NULL,
  `twitter_url` varchar(100) DEFAULT NULL,
  `Instagram_url` varchar(100) DEFAULT NULL,
  `pinterest_url` varchar(100) DEFAULT NULL,
  `linkedin_url` varchar(100) DEFAULT NULL,
  `youtube_url` varchar(100) DEFAULT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`social_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2022-03-26 07:32:59

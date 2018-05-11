-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: May 11, 2018 at 11:17 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `db_iservice`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `devices`
-- 

CREATE TABLE `devices` (
  `id` int(11) NOT NULL auto_increment,
  `device_type_id` int(11) NOT NULL,
  `device_name` varchar(255) NOT NULL,
  `device_brand_name` varchar(255) NOT NULL,
  `device_code` varchar(100) NOT NULL,
  `device_price` int(6) NOT NULL,
  `device_created_date` datetime NOT NULL,
  `device_buy_date` date NOT NULL,
  `device_garantee_expire_date` date NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `devices`
-- 

INSERT INTO `devices` VALUES (1, 1, 'Dell xps 13', 'Dell', '78915', 23000, '2018-05-04 10:16:01', '2018-05-01', '2023-05-04');
INSERT INTO `devices` VALUES (2, 1, 'lenovo Z475', 'lenovo', '6521', 17000, '2018-05-04 10:30:37', '2018-05-01', '2021-05-04');
INSERT INTO `devices` VALUES (5, 1, 'HP pavilion 15', 'HP', '888', 20000, '2018-05-11 10:05:11', '2018-05-11', '2020-05-11');

-- --------------------------------------------------------

-- 
-- Table structure for table `device_types`
-- 

CREATE TABLE `device_types` (
  `id` int(11) NOT NULL auto_increment,
  `device_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `device_types`
-- 

INSERT INTO `device_types` VALUES (1, 'คอมพิวเตอร์');
INSERT INTO `device_types` VALUES (2, 'ปริ้นเตอร์');
INSERT INTO `device_types` VALUES (3, 'กล้องวงจรปิด');
INSERT INTO `device_types` VALUES (4, 'โปรแกรม');
INSERT INTO `device_types` VALUES (5, 'อุปกรณ์อื่น ๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `employees`
-- 

CREATE TABLE `employees` (
  `id` int(11) NOT NULL auto_increment,
  `employee_username` varchar(255) NOT NULL,
  `employee_password` varchar(255) NOT NULL,
  `employee_fname` varchar(100) NOT NULL,
  `employee_lname` varchar(100) NOT NULL,
  `employee_sex` enum('f','m') NOT NULL,
  `employee_code` varchar(20) NOT NULL,
  `employee_level` enum('admin','engineer','user','manager') NOT NULL,
  `employee_email` varchar(255) NOT NULL,
  `employee_tel` varchar(50) NOT NULL,
  `employee_image` varchar(255) NOT NULL,
  `employee_created_date` datetime NOT NULL,
  `employee_status` enum('active','unactive','block') NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- Dumping data for table `employees`
-- 

INSERT INTO `employees` VALUES (1, 'nattanood', '1234', 'ณัฐวุฒิ', 'แสงภู่วงษ์', 'm', '', 'admin', '5706021610045@fitm.kmutnb.ac.th', '0926654424', '', '2018-03-23 09:51:26', 'active', 1);
INSERT INTO `employees` VALUES (2, 'tester', '1234', 'k.kai', 'mook', 'f', '542', 'user', 'tester@mail.com', '084315335', '', '2018-04-20 11:35:08', 'active', 6);

-- --------------------------------------------------------

-- 
-- Table structure for table `groups`
-- 

CREATE TABLE `groups` (
  `id` int(11) NOT NULL auto_increment,
  `group_name` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- Dumping data for table `groups`
-- 

INSERT INTO `groups` VALUES (1, 'ฝ่ายการตลาด', 1);
INSERT INTO `groups` VALUES (2, 'ฝ่ายขาย', 2);
INSERT INTO `groups` VALUES (3, 'ฝ่ายบัญชี', 3);
INSERT INTO `groups` VALUES (6, 'ไอที', 5);

-- --------------------------------------------------------

-- 
-- Table structure for table `project_types`
-- 

CREATE TABLE `project_types` (
  `id` int(11) NOT NULL auto_increment,
  `project_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `project_types`
-- 

INSERT INTO `project_types` VALUES (1, 'งานด้านเน็ตเวิร์ค');
INSERT INTO `project_types` VALUES (2, 'งานเขียนโปรแกรม');
INSERT INTO `project_types` VALUES (3, 'งานกราฟิก และการออกแบบ');
INSERT INTO `project_types` VALUES (4, 'อื่น ๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `repair_types`
-- 

CREATE TABLE `repair_types` (
  `id` int(11) NOT NULL auto_increment,
  `repair_type_name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- Dumping data for table `repair_types`
-- 

INSERT INTO `repair_types` VALUES (1, 'ซ่อมเอง');
INSERT INTO `repair_types` VALUES (2, 'ส่งซ่อมร้าน');
INSERT INTO `repair_types` VALUES (3, 'ส่งเคลม');
INSERT INTO `repair_types` VALUES (5, 'อื่น ๆ');

-- --------------------------------------------------------

-- 
-- Table structure for table `requests`
-- 

CREATE TABLE `requests` (
  `id` int(11) NOT NULL auto_increment,
  `employee_id` int(11) NOT NULL,
  `device_id` varchar(11) NOT NULL,
  `request_remark` varchar(255) NOT NULL,
  `request_problem` varchar(2000) NOT NULL,
  `request_detail` text NOT NULL,
  `request_created_date` datetime NOT NULL,
  `request_start_repair_date` datetime NOT NULL,
  `request_end_repair_date` datetime NOT NULL,
  `request_get_date` datetime NOT NULL,
  `request_clame_date` datetime NOT NULL,
  `request_clame_remark` varchar(500) NOT NULL,
  `request_close_date` datetime NOT NULL,
  `engineer_id` int(11) NOT NULL,
  `requester_id` int(11) NOT NULL,
  `closer_id` int(11) NOT NULL,
  `request_repair_detail_work` text NOT NULL,
  `request_answer` text NOT NULL,
  `request_status` enum('wait','get','repair','forward','repair_o') NOT NULL,
  `request_end_remark` text NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- Dumping data for table `requests`
-- 

INSERT INTO `requests` VALUES (1, 1, '1', 'แจ้งกลับด้วย', 'ค้าง แล้ว จอ ฟ้า', 'ทำงานได้ 30 นาที แล้ว ค้างจนต้องดับ', '2018-05-04 10:21:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, 0, 0, '', '', 'wait', '');
INSERT INTO `requests` VALUES (2, 2, '2', 'fffgf', 'ค้าง', 'ggfhhfg', '2018-05-04 10:35:38', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, 0, 0, '', '', 'wait', '');
INSERT INTO `requests` VALUES (3, 1, '1', 'มีค่าใช้จ่ายแจ้งกลับ', 'จอฟ้า', 'พัง', '2018-05-04 10:49:52', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '0000-00-00 00:00:00', 0, 0, 0, '', '', 'wait', '');

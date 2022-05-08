/*
Navicat MySQL Data Transfer

Source Server         : XAMPP
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : testdb

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2022-05-08 16:20:41
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `testtable`
-- ----------------------------
DROP TABLE IF EXISTS `testtable`;
CREATE TABLE `testtable` (
  `id` int(11) NOT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `passwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of testtable
-- ----------------------------
INSERT INTO `testtable` VALUES ('1', 's1', '用户1', '密码1');
INSERT INTO `testtable` VALUES ('2', 's2', '用户2', '密码2');
INSERT INTO `testtable` VALUES ('3', 's3', '用户3', '密码3');

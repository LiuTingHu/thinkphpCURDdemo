/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50709
Source Host           : localhost:3306
Source Database       : study

Target Server Type    : MYSQL
Target Server Version : 50709
File Encoding         : 65001

Date: 2016-05-10 09:43:33
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for sd_main
-- ----------------------------
DROP TABLE IF EXISTS `sd_main`;
CREATE TABLE `sd_main` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `qq` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sd_main
-- ----------------------------
INSERT INTO `sd_main` VALUES ('1', '王二D', '15203621585');
INSERT INTO `sd_main` VALUES ('2', '张三', '2558156204');
INSERT INTO `sd_main` VALUES ('3', '李玖', '25412');
INSERT INTO `sd_main` VALUES ('8', '张三', '8524155');

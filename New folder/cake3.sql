/*
Navicat MySQL Data Transfer

Source Server         : data
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : cake3

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-05-29 16:44:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `body` text,
  `category_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('1', 'The title', 'This is the article body.', null, '2015-05-27 22:23:10', null);
INSERT INTO `articles` VALUES ('2', 'A title once again', 'And the article body follows.', null, '2015-05-27 22:23:10', null);
INSERT INTO `articles` VALUES ('3', 'Title strikes back', 'This is really exciting! Not.', null, '2015-05-27 22:23:10', null);
INSERT INTO `articles` VALUES ('4', 'gegerge', 'gege', null, '2015-05-27 15:57:30', '2015-05-27 15:57:30');
INSERT INTO `articles` VALUES ('5', 'eger', 'gẻger', null, '2015-05-27 16:08:21', '2015-05-27 16:08:21');
INSERT INTO `articles` VALUES ('6', 'gfgfgfgf', 'gfgfgf', null, '2015-05-27 16:11:10', '2015-05-27 16:11:10');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rght` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', null, null, null, 'fashion', null, '2015-05-21 00:00:00', '2015-05-15 00:00:00');
INSERT INTO `categories` VALUES ('2', null, null, null, 'printed', null, '2015-05-07 00:00:00', '2015-05-22 00:00:00');
INSERT INTO `categories` VALUES ('3', '1', null, null, 'google', null, '2015-05-14 00:00:00', '2015-05-22 00:00:00');

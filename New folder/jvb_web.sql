/*
Navicat MySQL Data Transfer

Source Server         : data
Source Server Version : 50611
Source Host           : localhost:3306
Source Database       : jvb_web

Target Server Type    : MYSQL
Target Server Version : 50611
File Encoding         : 65001

Date: 2015-05-29 16:44:25
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `phone` varchar(32) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  `ip` varchar(64) DEFAULT NULL,
  `date_add` datetime NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES ('22', 'aertwerter', 'asas@hoan.com', 'tertertwer', 'awewe', 'awwe', null, '2015-05-29 05:46:57');
INSERT INTO `contact` VALUES ('23', 'rwe', 'asas@hoan.com', 'rwer', 'we', 'we', null, '2015-05-29 05:48:24');
INSERT INTO `contact` VALUES ('24', 'rwe', 'asas@hoan.com', 'rwer', 'we', 'we', null, '2015-05-29 06:10:41');
INSERT INTO `contact` VALUES ('25', 'sds', 'asas@hoan.com', 'sdsd', 'sa', 'asa', null, '2015-05-29 06:40:23');
INSERT INTO `contact` VALUES ('26', 'sds', 'asas@hoan.com', 'sds', 'sas', 'asa', null, '2015-05-29 06:44:04');
INSERT INTO `contact` VALUES ('27', 'fsdfs', 'asas@hoan.com', 'fsdf', 'fsdf', 'sfsd', null, '2015-05-29 06:45:27');

-- ----------------------------
-- Table structure for lang
-- ----------------------------
DROP TABLE IF EXISTS `lang`;
CREATE TABLE `lang` (
  `id_lang` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) DEFAULT NULL,
  `iso_code` varchar(32) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_lang`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of lang
-- ----------------------------
INSERT INTO `lang` VALUES ('1', 'Tiếng Việt', 'vn', '1');
INSERT INTO `lang` VALUES ('2', 'Tiếng Nhật', 'jp', '1');
INSERT INTO `lang` VALUES ('3', 'Tiếng Anh', 'en', '1');

-- ----------------------------
-- Table structure for news
-- ----------------------------
DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
  `id_news` int(11) NOT NULL AUTO_INCREMENT,
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `date_add` datetime DEFAULT NULL,
  `date_upd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_news`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news
-- ----------------------------
INSERT INTO `news` VALUES ('1', '0', '1', '2015-05-29 08:56:00', '2015-05-25 08:56:03');
INSERT INTO `news` VALUES ('2', '0', '1', '2015-06-30 08:56:14', '2015-05-13 08:56:19');
INSERT INTO `news` VALUES ('3', '0', '1', '2015-05-11 08:56:30', '2015-06-02 08:56:34');

-- ----------------------------
-- Table structure for news_lang
-- ----------------------------
DROP TABLE IF EXISTS `news_lang`;
CREATE TABLE `news_lang` (
  `id_news` int(11) NOT NULL DEFAULT '0',
  `id_lang` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id_news`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of news_lang
-- ----------------------------
INSERT INTO `news_lang` VALUES ('1', '1', 'MU: Bán Di Maria, mua \"Beckham nước Đức', 'MU hoàn toàn có thể bán Di Maria cho Bayern để đầu tư cho thương vụ mang tên Marco Reus.');
INSERT INTO `news_lang` VALUES ('1', '2', null, '');
INSERT INTO `news_lang` VALUES ('2', '1', 'HLV Arsene Wenger của Arsenal khẳng định RẤT THÍCH Arturo Vidal', 'Trước những tin đồn về việc Arsenal muốn mua tiền vệ Chile Arturo Vidal, HLV Arsene Wenger đã phủ nhận rằng Pháo thủ đang xúc tiến chuyển nhượng như báo chí khẳng định.');
INSERT INTO `news_lang` VALUES ('3', '3', 'Debuchy - FA Cup is like the French Cup', 'Mathieu Debuchy says the unpredictable nature of the FA Cup makes it similar to the French equivalent.\r\nArsenal have faced Championship opposition in each of their last two cup semi-finals, needing extra-time to progress on both occasions.he FA Cup is pretty much the same - sometimes clubs from the lower divisions have a good FA Cup campaign. Because of this, I think they are similar competitions. It is extremely difficult to win a cup tie.\r\n\r\n\r\nLower-league cl');

-- ----------------------------
-- Table structure for setting
-- ----------------------------
DROP TABLE IF EXISTS `setting`;
CREATE TABLE `setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(254) NOT NULL,
  `value` text,
  `date_add` datetime NOT NULL,
  `date_upd` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting
-- ----------------------------

-- ----------------------------
-- Table structure for setting_lang
-- ----------------------------
DROP TABLE IF EXISTS `setting_lang`;
CREATE TABLE `setting_lang` (
  `id_setting` int(11) NOT NULL,
  `id_lang` int(11) NOT NULL,
  `value` text,
  `date_upd` datetime DEFAULT NULL,
  PRIMARY KEY (`id_setting`,`id_lang`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of setting_lang
-- ----------------------------

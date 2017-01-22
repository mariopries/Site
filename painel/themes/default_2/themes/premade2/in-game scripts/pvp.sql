/*
Navicat MySQL Data Transfer

Source Server         : andelinia_db
Source Server Version : 50163
Source Host           : 216.185.101.151:3306
Source Database       : andelinia_ragnarok

Target Server Type    : MYSQL
Target Server Version : 50163
File Encoding         : 65001

Date: 2013-08-02 10:43:49
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ownladder`
-- ----------------------------
DROP TABLE IF EXISTS `ownladder`;
CREATE TABLE `ownladder` (
  `guild_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(24) NOT NULL DEFAULT '',
  `currentown` smallint(6) unsigned NOT NULL DEFAULT '0',
  `highestown` smallint(6) unsigned NOT NULL DEFAULT '0',
  `owntime` datetime DEFAULT NULL,
  PRIMARY KEY (`guild_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of ownladder
-- ----------------------------

-- ----------------------------
-- Table structure for `pvpladder`
-- ----------------------------
DROP TABLE IF EXISTS `pvpladder`;
CREATE TABLE `pvpladder` (
  `char_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(30) NOT NULL DEFAULT '',
  `streaks` smallint(6) unsigned NOT NULL DEFAULT '0',
  `kills` smallint(6) unsigned NOT NULL DEFAULT '0',
  `deaths` smallint(6) unsigned NOT NULL DEFAULT '0',
  `streaktime` datetime DEFAULT NULL,
  PRIMARY KEY (`char_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pvpladder
-- ----------------------------

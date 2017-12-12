/*
Navicat MySQL Data Transfer

Source Server         : practise
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : jumei

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2017-12-12 09:01:42
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for carts
-- ----------------------------
DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `good_id` int(11) DEFAULT NULL,
  `num` int(11) NOT NULL,
  `conts` varchar(100) DEFAULT NULL,
  `imgs` varchar(100) NOT NULL,
  `cons` varchar(100) DEFAULT NULL,
  `goods_xj` varchar(100) DEFAULT NULL,
  `goods_yj` varchar(100) DEFAULT NULL,
  `guige` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of carts
-- ----------------------------
INSERT INTO `carts` VALUES ('1', '1', '15', '5', '1399', 'gowu.jpg', '娇兰赋颜紧致精华乳 50ML', '1399', '1790', '50ML');
INSERT INTO `carts` VALUES ('19', '1', '15', '2', '1399', 'gowu.jpg', '娇兰赋颜紧致精华乳 50ML', '1399', '1790', '50ml');

-- ----------------------------
-- Table structure for nav
-- ----------------------------
DROP TABLE IF EXISTS `nav`;
CREATE TABLE `nav` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `navname` varchar(255) NOT NULL,
  `pid` int(20) NOT NULL,
  `path` varchar(255) NOT NULL,
  `ztid` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of nav
-- ----------------------------
INSERT INTO `nav` VALUES ('1', '欢迎来到聚美!', '0', '0', '1');
INSERT INTO `nav` VALUES ('2', '请登录', '0', '0', '1');
INSERT INTO `nav` VALUES ('3', '快速注册', '0', '0', '1');
INSERT INTO `nav` VALUES ('4', '正品保证', '0', '1', '1');
INSERT INTO `nav` VALUES ('5', '订单查询', '0', '1', '1');
INSERT INTO `nav` VALUES ('6', '收藏的品牌', '0', '1', '1');
INSERT INTO `nav` VALUES ('7', '我的聚美 ◢', '0', '1', '1');
INSERT INTO `nav` VALUES ('8', '手机聚美', '0', '1', '1');
INSERT INTO `nav` VALUES ('9', '更多 ◢', '0', '1', '1');
INSERT INTO `nav` VALUES ('11', '极速免税店', '0', '2', '1');
INSERT INTO `nav` VALUES ('12', '母婴特卖', '0', '2', '1');
INSERT INTO `nav` VALUES ('13', '美妆商城', '0', '2', '1');
INSERT INTO `nav` VALUES ('14', '国际轻奢', '0', '2', '1');
INSERT INTO `nav` VALUES ('15', '服装运动', '0', '2', '1');
INSERT INTO `nav` VALUES ('16', '箱包鞋服', '0', '2', '1');
INSERT INTO `nav` VALUES ('17', '我的订单', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('18', '我的现金券', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('19', '我的红包', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('20', '我的余额', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('21', '我的提现退款', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('22', '我的收藏', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('23', '会员中心', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('24', '礼品兑换卡', '7', '1_7', '1');
INSERT INTO `nav` VALUES ('25', '邀请好友', '9', '1-9', '1');
INSERT INTO `nav` VALUES ('26', '加入收藏', '9', '1-9', '1');
INSERT INTO `nav` VALUES ('27', '新浪微博', '9', '1-9', '1');
INSERT INTO `nav` VALUES ('28', '聚美微信', '9', '1-9', '1');
INSERT INTO `nav` VALUES ('29', '百度贴吧', '9', '1-9', '1');
INSERT INTO `nav` VALUES ('30', '腾讯微博', '9', '1-9', '1');

-- ----------------------------
-- Table structure for shop
-- ----------------------------
DROP TABLE IF EXISTS `shop`;
CREATE TABLE `shop` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shoptitle` varchar(255) DEFAULT NULL,
  `shopcons` varchar(255) DEFAULT NULL,
  `pid` int(11) NOT NULL,
  `shopxj` varchar(255) DEFAULT NULL,
  `shopyj` varchar(255) DEFAULT NULL,
  `profile` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shop
-- ----------------------------
INSERT INTO `shop` VALUES ('1', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('2', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('3', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('4', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('5', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('6', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('7', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('8', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('9', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('10', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('11', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('12', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('13', null, null, '1', null, null, 'shop1.jpg');
INSERT INTO `shop` VALUES ('14', null, null, '1', null, null, 'shop2.jpg');
INSERT INTO `shop` VALUES ('15', null, null, '2', null, null, 'tip1.png');
INSERT INTO `shop` VALUES ('16', null, null, '2', null, null, 'tip2.png');
INSERT INTO `shop` VALUES ('17', null, null, '2', null, null, 'tip3.png');
INSERT INTO `shop` VALUES ('18', null, null, '2', null, null, 'tip4.png');
INSERT INTO `shop` VALUES ('19', null, '全脸用同一卸妆品?你犯了大错!普通卸妆品会伤害娇嫩的眼唇肌肤,曼丹眼唇卸妆液,水油分离质地,清洁油溶解彩妆,清洁水祛除溶解后的彩妆;卸除眼唇彩妆,质地温和不伤及脆弱眼唇肌肤,不增加肌肤负担.正真卸妆干净,还原素净眼唇.', '3', '52', '65', 'top1.png');
INSERT INTO `shop` VALUES ('20', null, '全脸用同一卸妆品?你犯了大错!普通卸妆品会伤害娇嫩的眼唇肌肤,曼丹眼唇卸妆液,水油分离质地,清洁油溶解彩妆,清洁水祛除溶解后的彩妆;卸除眼唇彩妆,质地温和不伤及脆弱眼唇肌肤,不增加肌肤负担.正真卸妆干净,还原素净眼唇.', '3', '45', '72', 'top1.png');
INSERT INTO `shop` VALUES ('21', null, '全脸用同一卸妆品?你犯了大错!普通卸妆品会伤害娇嫩的眼唇肌肤,曼丹眼唇卸妆液,水油分离质地,清洁油溶解彩妆,清洁水祛除溶解后的彩妆;卸除眼唇彩妆,质地温和不伤及脆弱眼唇肌肤,不增加肌肤负担.正真卸妆干净,还原素净眼唇.', '3', '88', '102', 'top1.png');
INSERT INTO `shop` VALUES ('22', null, '全脸用同一卸妆品?你犯了大错!普通卸妆品会伤害娇嫩的眼唇肌肤,曼丹眼唇卸妆液,水油分离质地,清洁油溶解彩妆,清洁水祛除溶解后的彩妆;卸除眼唇彩妆,质地温和不伤及脆弱眼唇肌肤,不增加肌肤负担.正真卸妆干净,还原素净眼唇.', '3', '88', '98', 'top1.png');
INSERT INTO `shop` VALUES ('23', null, '全脸用同一卸妆品?你犯了大错!普通卸妆品会伤害娇嫩的眼唇肌肤,曼丹眼唇卸妆液,水油分离质地,清洁油溶解彩妆,清洁水祛除溶解后的彩妆;卸除眼唇彩妆,质地温和不伤及脆弱眼唇肌肤,不增加肌肤负担.正真卸妆干净,还原素净眼唇.', '3', '150', '299', 'top1.png');
INSERT INTO `shop` VALUES ('24', 'SK-II护肤套装,给你剔透美肌!', '海外直采 海外价格 闪电发货', '4', '1109', null, 'shop.jpg');
INSERT INTO `shop` VALUES ('25', '海外直采 海外价格 闪电发货', '海外直采 海外价格 闪电发货', '4', '1109', null, 'shop.lpg');
INSERT INTO `shop` VALUES ('26', '海外直采 海外价格 闪电发货', '海外直采 海外价格 闪电发货', '4', '1109', null, 'shop.lpg');
INSERT INTO `shop` VALUES ('27', '海外直采 海外价格 闪电发货', '海外直采 海外价格 闪电发货', '4', '1109', null, 'shop.lpg');
INSERT INTO `shop` VALUES ('28', '海外直采 海外价格 闪电发货', '海外直采 海外价格 闪电发货', '4', '1109', null, 'shop.lpg');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `ztid` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '张三', '15047446816', '$2y$10$tcuwp.OzbwGAwbPL63TFE.3tkHZSCFphTtqsJgGcUel54nWeZ3KEa', '1');

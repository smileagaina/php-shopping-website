/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50717
Source Host           : localhost:3306
Source Database       : shop

Target Server Type    : MYSQL
Target Server Version : 50717
File Encoding         : 65001

Date: 2018-01-04 15:45:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(5) NOT NULL AUTO_INCREMENT COMMENT 'adminTable',
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `rights` int(1) DEFAULT NULL,
  `loginTime` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `loginSum` int(100) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('6', 'mengkai', 'admin', '2', '0', '127.0.0.1', '9');
INSERT INTO `admin` VALUES ('10', 'nihao', 'nihao', '2', '1513847615', '::1', '1');
INSERT INTO `admin` VALUES ('11', '123', '123', '2', '1514875080', '::1', '21');
INSERT INTO `admin` VALUES ('100', 'admin', 'admin123', '1', '1515049652', '::1', '60');

-- ----------------------------
-- Table structure for `adminlog`
-- ----------------------------
DROP TABLE IF EXISTS `adminlog`;
CREATE TABLE `adminlog` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `addtime` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `state` varchar(5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=131 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of adminlog
-- ----------------------------
INSERT INTO `adminlog` VALUES ('2', 'admin', '123', '1512826837', '::1', '1');
INSERT INTO `adminlog` VALUES ('3', 'admin', '123', '1512827750', '::1', '1');
INSERT INTO `adminlog` VALUES ('4', 'admin', '123', '1512828329', '', '1');
INSERT INTO `adminlog` VALUES ('5', 'admin', '123', '1512828379', '::1', '1');
INSERT INTO `adminlog` VALUES ('6', 'admin', '123', '1512828487', '::1', '1');
INSERT INTO `adminlog` VALUES ('7', 'admin', '123', '1512829167', '::1', '1');
INSERT INTO `adminlog` VALUES ('8', 'admin', '123', '1512829274', '::1', '1');
INSERT INTO `adminlog` VALUES ('9', 'hello', '123', '1512830709', '::1', '1');
INSERT INTO `adminlog` VALUES ('10', 'admin', '123', '1512837481', '::1', '1');
INSERT INTO `adminlog` VALUES ('11', 'admin2', '123', '1512839198', '::1', '1');
INSERT INTO `adminlog` VALUES ('12', 'admin', '123', '1512864001', '::1', '1');
INSERT INTO `adminlog` VALUES ('13', 'admin', '123', '1513498669', '::1', '1');
INSERT INTO `adminlog` VALUES ('14', 'admin', '1234', '1513499428', '::1', '1');
INSERT INTO `adminlog` VALUES ('15', 'admin', '1234', '1513556472', '::1', '1');
INSERT INTO `adminlog` VALUES ('16', 'admin', '1234', '1513556613', '::1', '1');
INSERT INTO `adminlog` VALUES ('17', 'admin', '1234', '1513557713', '::1', '1');
INSERT INTO `adminlog` VALUES ('18', 'admin', '1234', '1513559152', '::1', '1');
INSERT INTO `adminlog` VALUES ('19', 'admin', '1234', '1513561538', '::1', '1');
INSERT INTO `adminlog` VALUES ('20', 'admin', '1234', '1513606306', '::1', '1');
INSERT INTO `adminlog` VALUES ('21', 'admin', '1234', '1513606588', '::1', '1');
INSERT INTO `adminlog` VALUES ('22', 'admin', '1234', '1513606742', '::1', '1');
INSERT INTO `adminlog` VALUES ('23', 'admin', '123', '1513608076', '::1', '-1');
INSERT INTO `adminlog` VALUES ('24', 'admin', '1234', '1513608086', '::1', '1');
INSERT INTO `adminlog` VALUES ('25', 'admin', '1234', '1513617939', '::1', '1');
INSERT INTO `adminlog` VALUES ('26', 'admin', '1234', '1513652903', '::1', '1');
INSERT INTO `adminlog` VALUES ('27', 'admin', '1234', '1513653136', '::1', '1');
INSERT INTO `adminlog` VALUES ('28', 'admin', '1234', '1513653521', '::1', '1');
INSERT INTO `adminlog` VALUES ('29', 'admin', '1234', '1513670265', '::1', '1');
INSERT INTO `adminlog` VALUES ('30', 'admin', '1234', '1513670849', '::1', '1');
INSERT INTO `adminlog` VALUES ('31', 'admin', '1234', '1513689705', '::1', '1');
INSERT INTO `adminlog` VALUES ('32', 'admin', '1234', '1513695026', '::1', '1');
INSERT INTO `adminlog` VALUES ('33', 'admin', '1234', '1513755443', '::1', '1');
INSERT INTO `adminlog` VALUES ('34', 'admin', '1234', '1513756106', '::1', '1');
INSERT INTO `adminlog` VALUES ('35', 'admin', '1234', '1513779324', '::1', '1');
INSERT INTO `adminlog` VALUES ('36', 'admin', '1234', '1513840916', '::1', '1');
INSERT INTO `adminlog` VALUES ('37', 'admin', '1234', '1513842724', '::1', '1');
INSERT INTO `adminlog` VALUES ('38', 'admin', '1234', '1513845137', '::1', '1');
INSERT INTO `adminlog` VALUES ('39', 'nihao', 'nihao', '1513847615', '::1', '1');
INSERT INTO `adminlog` VALUES ('40', 'admin', 'admin', '1513847671', '::1', '1');
INSERT INTO `adminlog` VALUES ('41', 'admin', 'admin', '1513858940', '::1', '1');
INSERT INTO `adminlog` VALUES ('42', '123', '123', '1513859333', '::1', '1');
INSERT INTO `adminlog` VALUES ('43', 'admin', 'admin', '1513862894', '::1', '1');
INSERT INTO `adminlog` VALUES ('44', 'admin', 'admin', '1513880052', '::1', '1');
INSERT INTO `adminlog` VALUES ('45', 'admin', 'admin', '1513901922', '::1', '1');
INSERT INTO `adminlog` VALUES ('46', 'admin', 'admin', '1513909014', '::1', '1');
INSERT INTO `adminlog` VALUES ('47', '123', '123', '1513909719', '::1', '1');
INSERT INTO `adminlog` VALUES ('48', '123', '123', '1513909787', '::1', '1');
INSERT INTO `adminlog` VALUES ('49', 'admin', 'admin', '1513910363', '::1', '1');
INSERT INTO `adminlog` VALUES ('50', 'admin', 'admin', '1513912693', '::1', '1');
INSERT INTO `adminlog` VALUES ('51', '123', '123', '1513913063', '::1', '1');
INSERT INTO `adminlog` VALUES ('52', 'admin', 'admin', '1514003441', '::1', '1');
INSERT INTO `adminlog` VALUES ('53', 'admin', 'admin123', '1514017673', '::1', '1');
INSERT INTO `adminlog` VALUES ('54', '123', '123', '1514017722', '::1', '1');
INSERT INTO `adminlog` VALUES ('55', 'admin', 'admin123', '1514017739', '::1', '1');
INSERT INTO `adminlog` VALUES ('56', 'admin', 'admin1234', '1514023623', '::1', '-1');
INSERT INTO `adminlog` VALUES ('57', '123', '123', '1514023631', '::1', '1');
INSERT INTO `adminlog` VALUES ('58', '123', '123', '1514026534', '::1', '1');
INSERT INTO `adminlog` VALUES ('59', '123', '1', '1514026538', '::1', '-1');
INSERT INTO `adminlog` VALUES ('60', '123', '123', '1514026542', '::1', '1');
INSERT INTO `adminlog` VALUES ('61', '123', '123', '1514066408', '::1', '1');
INSERT INTO `adminlog` VALUES ('62', '123', '123', '1514070752', '::1', '1');
INSERT INTO `adminlog` VALUES ('63', 'admin', 'admin1234', '1514070992', '::1', '-1');
INSERT INTO `adminlog` VALUES ('64', 'admin', 'admin123', '1514071028', '::1', '1');
INSERT INTO `adminlog` VALUES ('65', '123', '123', '1514077206', '::1', '1');
INSERT INTO `adminlog` VALUES ('66', 'admin', 'admin123', '1514077342', '::1', '1');
INSERT INTO `adminlog` VALUES ('67', 'admin', 'admin123', '1514078791', '::1', '1');
INSERT INTO `adminlog` VALUES ('68', 'admin', 'admin123', '1514088128', '::1', '1');
INSERT INTO `adminlog` VALUES ('69', '123', '123', '1514089650', '::1', '1');
INSERT INTO `adminlog` VALUES ('70', 'admin', 'admin1234', '1514102702', '::1', '-1');
INSERT INTO `adminlog` VALUES ('71', '123', '123', '1514102709', '::1', '1');
INSERT INTO `adminlog` VALUES ('72', 'admin', 'admin123', '1514104195', '::1', '1');
INSERT INTO `adminlog` VALUES ('73', 'admin', 'admin123', '1514106469', '::1', '1');
INSERT INTO `adminlog` VALUES ('74', 'admin', 'admin123', '1514109367', '::1', '1');
INSERT INTO `adminlog` VALUES ('75', '123', '123', '1514121393', '::1', '1');
INSERT INTO `adminlog` VALUES ('76', '123', '123', '1514285604', '::1', '1');
INSERT INTO `adminlog` VALUES ('77', '123', '123', '1514337017', '::1', '1');
INSERT INTO `adminlog` VALUES ('78', '123', '123', '1514450261', '::1', '1');
INSERT INTO `adminlog` VALUES ('79', 'admin', 'admin123', '1514465040', '::1', '1');
INSERT INTO `adminlog` VALUES ('80', 'admin', 'admin123', '1514465682', '::1', '1');
INSERT INTO `adminlog` VALUES ('81', '123', '123', '1514518062', '::1', '1');
INSERT INTO `adminlog` VALUES ('82', '123', '123', '1514725329', '::1', '1');
INSERT INTO `adminlog` VALUES ('83', 'admin', 'admin123', '1514730599', '::1', '1');
INSERT INTO `adminlog` VALUES ('84', '123', '123', '1514730798', '::1', '1');
INSERT INTO `adminlog` VALUES ('85', 'admin', 'admin123', '1514731114', '::1', '1');
INSERT INTO `adminlog` VALUES ('86', 'admin', 'admin123', '1514873501', '::1', '1');
INSERT INTO `adminlog` VALUES ('87', 'admin', 'admin123', '1514875023', '::1', '1');
INSERT INTO `adminlog` VALUES ('88', '123', '123', '1514875080', '::1', '1');
INSERT INTO `adminlog` VALUES ('89', 'admin', 'admin123', '1514875418', '::1', '1');
INSERT INTO `adminlog` VALUES ('90', 'admin', 'admin213', '1514893911', '::1', '-1');
INSERT INTO `adminlog` VALUES ('91', 'admin', 'admin123', '1514893918', '::1', '1');
INSERT INTO `adminlog` VALUES ('92', 'admin', 'admin123', '1514894378', '::1', '1');
INSERT INTO `adminlog` VALUES ('93', 'admin', 'admin123', '1514904601', '::1', '1');
INSERT INTO `adminlog` VALUES ('94', 'admin', 'admin123', '1514904903', '::1', '1');
INSERT INTO `adminlog` VALUES ('95', 'admin', 'admin123', '1514905105', '::1', '1');
INSERT INTO `adminlog` VALUES ('96', 'admin', 'admin123', '1514940959', '::1', '1');
INSERT INTO `adminlog` VALUES ('97', 'admin', 'admin123', '1514960342', '::1', '1');
INSERT INTO `adminlog` VALUES ('98', 'admin', 'admin123', '1514960737', '::1', '1');
INSERT INTO `adminlog` VALUES ('99', 'admin', 'admin123', '1514960869', '::1', '1');
INSERT INTO `adminlog` VALUES ('100', 'admin', 'admin123', '1514963891', '::1', '1');
INSERT INTO `adminlog` VALUES ('101', 'admin', 'admin123', '1514965007', '::1', '1');
INSERT INTO `adminlog` VALUES ('102', 'admin', '1234', '1514966641', '::1', '-1');
INSERT INTO `adminlog` VALUES ('103', 'amin', 'admin123', '1514966648', '::1', '-2');
INSERT INTO `adminlog` VALUES ('104', 'admin', 'admin123', '1514966655', '::1', '1');
INSERT INTO `adminlog` VALUES ('105', 'admin', 'admin123', '1514967705', '::1', '1');
INSERT INTO `adminlog` VALUES ('106', 'admin', 'admin123', '1514968870', '::1', '1');
INSERT INTO `adminlog` VALUES ('107', 'admin', 'admin123', '1514969229', '::1', '1');
INSERT INTO `adminlog` VALUES ('108', 'admin', 'admin123', '1514970288', '::1', '1');
INSERT INTO `adminlog` VALUES ('109', 'admin', 'admin123', '1514972897', '::1', '1');
INSERT INTO `adminlog` VALUES ('110', 'admin', 'admin123', '1514973682', '::1', '1');
INSERT INTO `adminlog` VALUES ('111', 'admin', 'admin123', '1514983859', '::1', '1');
INSERT INTO `adminlog` VALUES ('112', 'admin', 'admin123', '1514984560', '::1', '1');
INSERT INTO `adminlog` VALUES ('113', 'admin', 'admin123', '1514985544', '::1', '1');
INSERT INTO `adminlog` VALUES ('114', 'admin', 'admin123', '1514987673', '::1', '1');
INSERT INTO `adminlog` VALUES ('115', 'admin', 'admin123', '1514991994', '::1', '1');
INSERT INTO `adminlog` VALUES ('116', 'admin', 'admin123', '1514992698', '::1', '1');
INSERT INTO `adminlog` VALUES ('117', 'admin', 'admin', '1514993481', '::1', '-1');
INSERT INTO `adminlog` VALUES ('118', 'admin', 'admin123', '1514993488', '::1', '1');
INSERT INTO `adminlog` VALUES ('119', 'admin', 'admin123', '1514994621', '::1', '1');
INSERT INTO `adminlog` VALUES ('120', 'admin', 'admin123', '1514998117', '::1', '1');
INSERT INTO `adminlog` VALUES ('121', 'admin', 'admin123', '1515033316', '::1', '1');
INSERT INTO `adminlog` VALUES ('122', 'admin', 'admin123', '1515043900', '::1', '1');
INSERT INTO `adminlog` VALUES ('123', '1466025720@qq.com', '1234', '1515045074', '::1', '-2');
INSERT INTO `adminlog` VALUES ('124', 'admin', 'admin', '1515045160', '::1', '-1');
INSERT INTO `adminlog` VALUES ('125', 'admin', 'admin123', '1515045504', '::1', '1');
INSERT INTO `adminlog` VALUES ('126', 'admin', 'admin123', '1515046997', '::1', '1');
INSERT INTO `adminlog` VALUES ('127', 'admin', 'admin123', '1515047364', '::1', '1');
INSERT INTO `adminlog` VALUES ('128', 'admin', 'admin123', '1515047732', '::1', '1');
INSERT INTO `adminlog` VALUES ('129', 'admin', 'admin123', '1515048058', '::1', '1');
INSERT INTO `adminlog` VALUES ('130', 'admin', 'admin123', '1515049652', '::1', '1');

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `typeid` int(5) NOT NULL,
  `author` varchar(30) NOT NULL,
  `com` varchar(30) NOT NULL,
  `hits` int(10) NOT NULL,
  `inputer` varchar(30) NOT NULL,
  `addtime` int(20) NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=gb2312;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('2', 'Wecome the super taobao.com shopping website！', '3', 'admin', 'firefiretop.top', '0', 'fire', '1314245752', '<p>\r\n <a href=\"\">ni hao sasdasd</a></p>\r\n');
INSERT INTO `article` VALUES ('5', 'Wecome the super taobao.com shopping website', '4', 'stefan', 'taobao.com', '0', 'fire', '1314246480', '<p>\r\n	！！！！</p>\r\n');
INSERT INTO `article` VALUES ('7', 'Article Title', '3', 'stefan', 'taobao.com', '0', 'fire ', '1314365369', '<p>\r\n	Hello！！</p>\r\n');
INSERT INTO `article` VALUES ('15', 'Wecome the super taobao.com shopping website', '3', 'Stefan', 'taobao.com', '0', 'fire', '1314376771', '<p>\r\n	##########</p>\r\n');
INSERT INTO `article` VALUES ('19', 'WholeSale', '9', 'Stefan', 'Origin', '0', 'fire', '1318318895', '<p>\r\n	WholeSale</p>\r\n');
INSERT INTO `article` VALUES ('20', 'New Register', '14', 'Stefan', 'Origin', '0', 'fire', '1318318910', '<p>\r\n	@</p>\r\n');
INSERT INTO `article` VALUES ('21', 'Cash on Delivery', '15', 'Stefan', 'Origin', '0', 'fire', '1318318921', '<p>\r\n	@@</p>\r\n');
INSERT INTO `article` VALUES ('22', 'Distribution freight description ', '16', 'Stefan', 'Origiin', '0', 'fire', '1318318933', '<p>\r\n	<a href=\"../\" target=\"_blank\">配送运费说明</a></p>\r\n');
INSERT INTO `article` VALUES ('26', 'Guide One', '14', 'Stefan', 'Origin', '0', 'fire', '1318331722', '<p>\r\n	@</p>\r\n');
INSERT INTO `article` VALUES ('27', 'Guide Two', '14', 'Stefan', 'Origin', '0', 'fire', '1318331732', '<p>\r\n	!!!</p>\r\n');
INSERT INTO `article` VALUES ('28', 'act1', '7', 'fire', 'firefire', '10000', '123', '1514121891', '<p>\r\n	this is a new one activities</p>\r\n');
INSERT INTO `article` VALUES ('29', 'dynamic1', '8', 'stefan', '120', '123', '123', '1514122658', '<p>\r\n	This is a new adynamic acticle</p>\r\n');
INSERT INTO `article` VALUES ('30', 'activity2', '7', 'stefan', '100', '10', '123', '1514123117', '<p>\r\n	This is the activity two, here you can see a lot more.</p>\r\n');
INSERT INTO `article` VALUES ('31', 'activities3', '7', 'Stefan', '10', '100', '123', '1514288332', '<p>\r\n	This is activities3, here are a lot of information about this.</p>\r\n');

-- ----------------------------
-- Table structure for `articletype`
-- ----------------------------
DROP TABLE IF EXISTS `articletype`;
CREATE TABLE `articletype` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `typename` varchar(50) NOT NULL,
  `leixing` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articletype
-- ----------------------------
INSERT INTO `articletype` VALUES ('7', 'Hot Activities', 'Article Dyanmics');
INSERT INTO `articletype` VALUES ('10', 'Vip Activites', 'Article Dyanmics');
INSERT INTO `articletype` VALUES ('11', 'Novice guide', 'Help Center');
INSERT INTO `articletype` VALUES ('12', 'Pay', 'Help Center');
INSERT INTO `articletype` VALUES ('13', 'Deliver Ways', 'Help Center');
INSERT INTO `articletype` VALUES ('14', 'After-sale service', 'Help Center');

-- ----------------------------
-- Table structure for `orderlist`
-- ----------------------------
DROP TABLE IF EXISTS `orderlist`;
CREATE TABLE `orderlist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(50) NOT NULL,
  `pid` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `unitPrice` decimal(10,2) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `total` int(20) NOT NULL,
  `picurl` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orderlist
-- ----------------------------
INSERT INTO `orderlist` VALUES ('1', '1514107832241', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('2', '1514107898621', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('3', '1514108071578', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('4', '1514108268453', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('5', '1514108775188', '7', '123', '123.00', '123.00', '1', '../images/以纯.jpg');
INSERT INTO `orderlist` VALUES ('6', '1514108775188', '6', 'hello1', '213.00', '213.00', '1', '../images/优衣库.jpg');
INSERT INTO `orderlist` VALUES ('7', '1514108775188', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('8', '1514108775188', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('9', '1514109107175', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('10', '1514109107175', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('11', '1514109169685', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('12', '1514111213819', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('13', '1514120798472', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('14', '1514514827879', '12', 'shoes2', '278.00', '278.00', '1', '../images/361A鞋.jpg');
INSERT INTO `orderlist` VALUES ('15', '1514514827879', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('16', '1514514827879', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('17', '1514515083473', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('18', '1514517899691', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('19', '1514517899691', '19', 'dress4', '566.00', '566.00', '1', '../images/1529683846__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('20', '1514517962714', '6', 'hello1', '213.00', '213.00', '1', '../images/优衣库.jpg');
INSERT INTO `orderlist` VALUES ('21', '1514518022174', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('22', '1514942028886', '20', 'dress5', '899.00', '899.00', '1', '../images/1581608948__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('23', '1514959023127', '9', '1', '21.00', '21.00', '1', '../images/361a褂子.gif');
INSERT INTO `orderlist` VALUES ('24', '1514959023127', '10', 'shirt1', '788.00', '788.00', '1', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg');
INSERT INTO `orderlist` VALUES ('25', '1514962029697', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('26', '1514966500294', '20', 'dress5', '899.00', '899.00', '1', '../images/1581608948__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('27', '1514998912524', '21', 'pant1', '99.00', '99.00', '1', '../images/1572575145__400x400__.jpg');
INSERT INTO `orderlist` VALUES ('28', '1514998976352', '6', 'hello1', '213.00', '213.00', '1', '../images/优衣库.jpg');
INSERT INTO `orderlist` VALUES ('29', '1515050238454', '20', 'dress5', '899.00', '899.00', '1', '../images/1581608948__400x400__.jpg');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `total` double DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `rname` char(10) DEFAULT NULL,
  `tel` char(20) DEFAULT NULL,
  `payment` char(20) DEFAULT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for `product`
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `numbers` varchar(30) NOT NULL,
  `title` varchar(100) NOT NULL,
  `typeid` int(5) NOT NULL,
  `ppid` int(5) NOT NULL,
  `hot` int(1) NOT NULL,
  `drops` int(1) NOT NULL,
  `recommend` int(1) NOT NULL,
  `kucun` int(10) NOT NULL,
  `hits` int(5) NOT NULL,
  `picurl` varchar(100) NOT NULL,
  `picurls` text NOT NULL,
  `content` text NOT NULL,
  `addtime` int(30) NOT NULL,
  `inputer` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `yprice` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES ('6', '1514029093464000', 'hello1', '5', '9', '1', '0', '0', '10', '123', '../images/优衣库.jpg', '', 'asd', '1514029122', '123', '213.00', '123.00');
INSERT INTO `product` VALUES ('9', '1514089741501000', '1', '2', '11', '1', '0', '0', '11', '12', '../images/361a褂子.gif', '', '12', '1514089766', '123', '21.00', '12.00');
INSERT INTO `product` VALUES ('10', '1514103101429000', 'shirt1', '4', '13', '1', '1', '0', '10', '100', '../images/6de85d45-246b-445b-8a56-2fc804d3b73a_t.jpg', '', '12', '1514103137', '123', '788.00', '899.00');
INSERT INTO `product` VALUES ('11', '1514111775358000', 'shoes1', '3', '12', '1', '0', '0', '10', '10', '../images/adidas鞋.jpg', '', 'shoes1', '1514111811', 'admin', '18.00', '1000.00');
INSERT INTO `product` VALUES ('12', '1514337043431000', 'shoes2', '3', '12', '0', '0', '1', '99', '12', '../images/361A鞋.jpg', '', 'shoes2', '1514337086', '123', '278.00', '288.00');
INSERT INTO `product` VALUES ('13', '1514465691471000', 'shoes3', '3', '13', '1', '0', '0', '10', '100', '../images/adidas鞋.jpg', '', 'hahaha', '1514465843', 'admin', '100.00', '100.00');
INSERT INTO `product` VALUES ('14', '1514466844506000', 'shirt2', '4', '10', '0', '0', '1', '10', '78', '../images/855a0902-4be2-45cb-a5fc-a7133fe8e267_t.jpg', '', '699', '1514466887', 'admin', '699.00', '699.00');
INSERT INTO `product` VALUES ('15', '1514466891552000', 'shirt3', '4', '11', '0', '0', '1', '10', '19', '../images/b06c28be-172c-47bf-8788-71782f84cbf6_t.jpg', '', 'shirt3', '1514466921', 'admin', '899.00', '899.00');
INSERT INTO `product` VALUES ('16', '1514467234345000', 'dress1', '6', '14', '0', '1', '0', '10', '78', '../images/1389199734__400x400__.jpg', '', '499', '1514467263', 'admin', '499.00', '499.00');
INSERT INTO `product` VALUES ('17', '1514467266379000', 'dress2', '6', '15', '0', '0', '1', '19', '199', '../images/1481233313__400x400__.jpg', '', 'dress2', '1514467294', 'admin', '299.00', '299.00');
INSERT INTO `product` VALUES ('18', '1514467297524000', 'dress3', '6', '12', '0', '0', '1', '88', '88', '../images/1521524561__400x400__.jpg', '', 'dress3', '1514467321', 'admin', '888.00', '888.00');
INSERT INTO `product` VALUES ('19', '1514467324374000', 'dress4', '6', '0', '0', '1', '0', '89', '123', '../images/1529683846__400x400__.jpg', '', 'dress4', '1514467348', 'admin', '566.00', '566.00');
INSERT INTO `product` VALUES ('20', '1514467351347000', 'dress5', '6', '11', '1', '0', '0', '16', '899', '../images/1581608948__400x400__.jpg', '', 'dress5', '1514467382', 'admin', '899.00', '899.00');
INSERT INTO `product` VALUES ('21', '1514467588498000', 'pant1', '7', '12', '1', '0', '0', '94', '100', '../images/1572575145__400x400__.jpg', '', 'pant1', '1514467622', 'admin', '99.00', '99.00');
INSERT INTO `product` VALUES ('22', '1514725429492000', 'shoes4', '3', '14', '1', '0', '0', '100', '100', '../images/puma鞋.jpg', '', 'shoe4', '1514725464', '123', '455.00', '455.00');

-- ----------------------------
-- Table structure for `productlist`
-- ----------------------------
DROP TABLE IF EXISTS `productlist`;
CREATE TABLE `productlist` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `tid` int(5) NOT NULL,
  `typename` varchar(30) NOT NULL,
  `sd` int(5) NOT NULL,
  `idpath` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productlist
-- ----------------------------
INSERT INTO `productlist` VALUES ('1', '0', 'women', '1', '0');
INSERT INTO `productlist` VALUES ('2', '0', 'man', '1', '0');
INSERT INTO `productlist` VALUES ('3', '0', 'shoes', '1', '0');
INSERT INTO `productlist` VALUES ('4', '1', 'skirts', '2', '0_1');
INSERT INTO `productlist` VALUES ('5', '2', 'shirts', '2', '0_2');
INSERT INTO `productlist` VALUES ('6', '1', 'dress', '2', '0_1');
INSERT INTO `productlist` VALUES ('7', '1', 'pants', '2', '0_1');

-- ----------------------------
-- Table structure for `productorder`
-- ----------------------------
DROP TABLE IF EXISTS `productorder`;
CREATE TABLE `productorder` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `orderID` varchar(50) NOT NULL,
  `paymentState` int(1) NOT NULL DEFAULT '0',
  `orderState` int(1) NOT NULL DEFAULT '0',
  `kuaidi` varchar(50) NOT NULL DEFAULT 'EMS',
  `yunfei` decimal(10,2) NOT NULL DEFAULT '0.00',
  `youhui` decimal(10,2) NOT NULL DEFAULT '0.00',
  `price` decimal(10,2) NOT NULL,
  `shren` varchar(50) NOT NULL,
  `shdizhi` varchar(225) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `payment` varchar(50) NOT NULL,
  `dTime` varchar(50) NOT NULL,
  `feedback` text NOT NULL,
  `ip` varchar(20) NOT NULL,
  `addtime` int(30) NOT NULL,
  `username` varchar(225) NOT NULL,
  `youbian` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productorder
-- ----------------------------
INSERT INTO `productorder` VALUES ('1', '1514107832241', '0', '0', 'EMS', '0.00', '0.00', '788.00', 'stefan', 'asd', 'asd', '213', 'online', 'holidays only', '', '::1', '1514107847', '', 'asd');
INSERT INTO `productorder` VALUES ('2', '1514107898621', '0', '0', 'EMS', '0.00', '0.00', '788.00', 'sad', 'asd', 'asd', 'as', 'cash', 'weekdays and weekends', '', '::1', '1514107909', '', 'asd');
INSERT INTO `productorder` VALUES ('3', '1514108071578', '0', '0', 'EMS', '0.00', '0.00', '21.00', 'as', 'asd', 'sda', '12312', 'cash', 'holidays only', 'asd', '::1', '1514108088', '', 'as');
INSERT INTO `productorder` VALUES ('4', '1514108268453', '0', '0', 'EMS', '0.00', '0.00', '21.00', '123', 'qwe', 'qwe', '123', 'bank', 'weekdays and weekends', '123', '::1', '1514108277', '', 'qwe');
INSERT INTO `productorder` VALUES ('5', '1514108775188', '0', '0', 'EMS', '0.00', '0.00', '1145.00', 'qwe', 'qwe', 'qwe', '123', 'online', 'weekdays and weekends', '', '::1', '1514108786', '', 'qwe');
INSERT INTO `productorder` VALUES ('6', '1514109107175', '0', '0', 'EMS', '0.00', '0.00', '809.00', '12', '123', '213', '123', 'bank', 'weekdays and weekends', '123', '::1', '1514109117', '', '213');
INSERT INTO `productorder` VALUES ('7', '1514109169685', '0', '0', 'EMS', '0.00', '0.00', '21.00', 'as', '12', '123', '123', 'bank', 'weekdays and weekends', '', '::1', '1514109177', '', 'asd');
INSERT INTO `productorder` VALUES ('8', '1514111213819', '0', '0', 'EMS', '0.00', '0.00', '788.00', 'wqe', 'qwe', 'wqe', 'wqe', 'cash', 'holidays only', '', '::1', '1514111221', '', 'qwe');
INSERT INTO `productorder` VALUES ('9', '1514120798472', '0', '0', 'EMS', '0.00', '0.00', '788.00', 'stefan', '24', '324', '23478', 'cash', 'holidays only', '', '::1', '1514120816', '', '234');
INSERT INTO `productorder` VALUES ('10', '1514514827879', '0', '0', 'EMS', '0.00', '0.00', '1165.00', 'stfean', '123.123', '213', '17806282762', 'cash', 'holidays only', '21', '::1', '1514514872', '', '123');
INSERT INTO `productorder` VALUES ('11', '1514515083473', '0', '0', 'EMS', '0.00', '0.00', '99.00', 'stefan', '123123', '123123', '123123123', 'cash', 'holidays only', '123', '::1', '1514515099', '', '123123');
INSERT INTO `productorder` VALUES ('12', '1514517899691', '0', '0', 'EMS', '0.00', '0.00', '665.00', 'asdas', 'as', '213', '123', 'online', 'weekdays only', '213', '::1', '1514517942', '', '213123');
INSERT INTO `productorder` VALUES ('13', '1514517962714', '0', '0', 'EMS', '0.00', '0.00', '213.00', '123', '123', '123', '123', 'cash', 'weekdays only', '123', '::1', '1514517986', '', '123');
INSERT INTO `productorder` VALUES ('14', '1514518022174', '0', '0', 'EMS', '0.00', '0.00', '99.00', '123', '213', '123', '213', 'online', 'weekdays only', '123', '::1', '1514518043', '', '123');
INSERT INTO `productorder` VALUES ('15', '1514942028886', '0', '0', 'EMS', '0.00', '0.00', '899.00', 'qw', 'qwe', 'eq', '12312321', 'cash', 'weekdays and weekends', '', '::1', '1514942042', '517387178@qq.com', 'qwe');
INSERT INTO `productorder` VALUES ('16', '1514959023127', '0', '0', 'EMS', '0.00', '0.00', '809.00', 'qwe', 'qweqwe', 'qwe', 'qw', 'cash', 'weekdays only', '', '::1', '1514959036', '517387178@qq.com', 'qwe');
INSERT INTO `productorder` VALUES ('17', '1514962029697', '0', '0', 'EMS', '0.00', '0.00', '99.00', 'qwe', 'qwe', 'qwe', 'qwe', 'cash', 'weekdays and weekends', 'we', '::1', '1514962040', '1466025720@qq.com', 'wqe');
INSERT INTO `productorder` VALUES ('18', '1514966500294', '0', '0', 'EMS', '0.00', '0.00', '899.00', 'stefan', 'asd', 'ads', 'das', 'cash', 'weekdays and weekends', '', '::1', '1514966542', '1466025720@qq.com', 'ads');
INSERT INTO `productorder` VALUES ('19', '1514998912524', '0', '0', 'EMS', '0.00', '0.00', '99.00', 'stefan', 'QingdaoUniversity', '43543543asd', '178123123sd', 'cash', 'weekdays and weekends', '', '::1', '1514998928', '517387178@qq.com', '266100');
INSERT INTO `productorder` VALUES ('20', '1514998976352', '0', '0', 'EMS', '0.00', '0.00', '213.00', 'asd', 'd', 'sad', '123', 'cash', 'weekdays and weekends', '', '::1', '1514998983', '517387178@qq.com', 'asd');
INSERT INTO `productorder` VALUES ('21', '1515050238454', '0', '0', 'EMS', '0.00', '0.00', '899.00', '123', '123', '213', '123', 'cash', 'weekdays and weekends', '', '::1', '1515050254', '1466025720@qq.com', '213');

-- ----------------------------
-- Table structure for `productpp`
-- ----------------------------
DROP TABLE IF EXISTS `productpp`;
CREATE TABLE `productpp` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `ppname` varchar(100) NOT NULL,
  `recommend` int(1) NOT NULL,
  `picurl` varchar(150) NOT NULL,
  `ppinfo` text NOT NULL,
  `pporder` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of productpp
-- ----------------------------
INSERT INTO `productpp` VALUES ('9', '真维斯', '1', '../images/真维斯.jpg', '1', '1');
INSERT INTO `productpp` VALUES ('10', '阿玛尼', '1', '../images/阿玛尼.jpg', '2', '2');
INSERT INTO `productpp` VALUES ('11', '艾格', '1', '../images/艾格.jpg', '3', '3');
INSERT INTO `productpp` VALUES ('12', '法国鳄鱼', '1', '../images/法国鳄鱼.jpg', '4', '4');
INSERT INTO `productpp` VALUES ('13', 'JackJones', '1', '../images/杰克琼斯.gif', '5', '5');
INSERT INTO `productpp` VALUES ('14', '七匹狼', '1', '../images/七匹狼.jpg', '七匹狼', '6');
INSERT INTO `productpp` VALUES ('15', '美特斯邦威', '1', '../images/美特斯邦威.jpg', '美特斯邦威', '7');

-- ----------------------------
-- Table structure for `receive`
-- ----------------------------
DROP TABLE IF EXISTS `receive`;
CREATE TABLE `receive` (
  `id` int(20) unsigned NOT NULL AUTO_INCREMENT,
  `shren` varchar(200) NOT NULL,
  `shdizhi` varchar(225) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `youbian` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of receive
-- ----------------------------
INSERT INTO `receive` VALUES ('9', '孟凯', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('10', '孟凯', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('11', '孟凯', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('12', '孟凯D', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('13', '孟凯D', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('14', '孟凯D', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('15', '孟凯D', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('16', '孟凯D', '北京市朝阳区小营路5号', '88669988', '18612345678', 'mengkai@msn.com', '100010');
INSERT INTO `receive` VALUES ('17', 'stefan', 'QingdaoUniversity', '178123123', '', '517387178@qq.com', '266100');
INSERT INTO `receive` VALUES ('18', 'stefan', 'QingdaoUniversity', '178123123', '43543543', '517387178@qq.com', '266100');
INSERT INTO `receive` VALUES ('24', 'stefan', '123123', '123', '123', '1466025720@qq.com', '123');
INSERT INTO `receive` VALUES ('26', 'stefan', '123123', '1232', '123', '1466025720@qq.com', '123');
INSERT INTO `receive` VALUES ('28', 'stefan', 'asd', 'das', 'ads', '1466025720@qq.com', 'ads');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tiwen` varchar(150) NOT NULL,
  `huida` varchar(150) NOT NULL,
  `zt` int(5) NOT NULL,
  `xingming` varchar(150) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '517387178@qq.com', '123', '517387178@qq.com', '', '', '2', 'satd', 'man', '123213');
INSERT INTO `user` VALUES ('3', '1466025720@qq.com', '123', '1466025720@qq.com', '', '', '2', 'STfean', 'Hidden', '12321');

-- ----------------------------
-- Table structure for `webconfig`
-- ----------------------------
DROP TABLE IF EXISTS `webconfig`;
CREATE TABLE `webconfig` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `varshowname` varchar(100) NOT NULL,
  `varname` varchar(50) NOT NULL,
  `varinfo` varchar(100) NOT NULL,
  `vartype` varchar(20) NOT NULL,
  `varvalue` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of webconfig
-- ----------------------------
INSERT INTO `webconfig` VALUES ('16', 'WebName', 'webname', '程序网站名称', 'string', 'S.L.C.L Shopping Website');
INSERT INTO `webconfig` VALUES ('17', 'Weburl', 'weburl', '网站URL地址,无需打http://', 'string', 'www.supertaobao.com');
INSERT INTO `webconfig` VALUES ('18', 'reguser', 'reguser', '开关控制怎们的会员注册状况', 'bool', 'Y');
INSERT INTO `webconfig` VALUES ('19', 'webcopy', 'webcopy', '用于咱们网站底部显示', 'strings', '4040-1000All Right Reversed');
INSERT INTO `webconfig` VALUES ('20', 'userlogin', 'userlogin', '开启的话注册会员就需要通过管理员手动批准', 'bool', 'N');
INSERT INTO `webconfig` VALUES ('24', 'webdir', 'webdir', '网站根目录请不要以/结尾', 'string', '/PHPWebWebsite/');
INSERT INTO `webconfig` VALUES ('25', 'webuserreg', 'webuserreg', '会员注册是否需要审核', 'bool', 'Y');
INSERT INTO `webconfig` VALUES ('26', 'webtel', 'webtel', '订购热线', 'string', '010-64825057');
INSERT INTO `webconfig` VALUES ('27', 'webtitle', 'webtitle', 'webtitle', 'string', 'S.L.C.L');
DROP TRIGGER IF EXISTS `tri_updte`;
DELIMITER ;;
CREATE TRIGGER `tri_updte` AFTER INSERT ON `orderlist` FOR EACH ROW begin
select kucun into @a from product where id=new.pid;
UPDATE product set kucun=@a-new.total where id= new.pid;
end
;;
DELIMITER ;

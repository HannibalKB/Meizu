/*
Navicat MySQL Data Transfer

Source Server         : home
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : meizu

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-09-21 20:50:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(10) NOT NULL DEFAULT '0' COMMENT '管理员ID',
  `adminname` char(50) DEFAULT NULL COMMENT '管理员名称',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of admin
-- ----------------------------

-- ----------------------------
-- Table structure for `auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `auth_group`;
CREATE TABLE `auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  `desc` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='权限组表';

-- ----------------------------
-- Records of auth_group
-- ----------------------------
INSERT INTO `auth_group` VALUES ('1', '超级管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20', '具有至高无上的权利');
INSERT INTO `auth_group` VALUES ('2', '普通管理员', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,26,25', '有一些普通的权限');
INSERT INTO `auth_group` VALUES ('8', 'X先生', '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,26,25', '所有权限');

-- ----------------------------
-- Table structure for `auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `auth_group_access`;
CREATE TABLE `auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户权限通道表';

-- ----------------------------
-- Records of auth_group_access
-- ----------------------------
INSERT INTO `auth_group_access` VALUES ('12', '1');
INSERT INTO `auth_group_access` VALUES ('26', '2');
INSERT INTO `auth_group_access` VALUES ('29', '2');
INSERT INTO `auth_group_access` VALUES ('30', '1');
INSERT INTO `auth_group_access` VALUES ('34', '8');
INSERT INTO `auth_group_access` VALUES ('35', '2');

-- ----------------------------
-- Table structure for `auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `cid` int(3) DEFAULT '1' COMMENT '类别id',
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='权限规则表';

-- ----------------------------
-- Records of auth_rule
-- ----------------------------
INSERT INTO `auth_rule` VALUES ('1', '1', 'admin/user/userlist', '用户列表2', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('2', '1', 'admin/user/userstop', '用户停用', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('3', '1', 'admin/user/userstart', '用户启用', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('4', '1', 'admin/user/userdelete', '单条删除用户', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('5', '1', 'admin/user/mutipledelete', '批量删除用户', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('6', '1', 'admin/user/usershow', '用户详情展示', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('8', '1', 'admin/user/export_csv', '数据导出方法', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('9', '2', 'admin/operation/index', '日志记录列表', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('10', '2', 'admin/operation/mutipledelete', '日志批量删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('11', '2', 'admin/operation/singledelete', '日志单条删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('12', '3', 'admin/feedback/index', '反馈列表', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('13', '3', 'admin/feedback/feedbackshow', '反馈详情', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('14', '3', 'admin/feedback/singledelete', '单条反馈删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('15', '3', 'admin/feedback/mutipledelete', '批量反馈删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('16', '4', 'admin/feedback/feedcate', '反馈分类列表', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('17', '4', 'admin/feedback/feedadd', '分类添加', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('18', '4', 'admin/feedback/mutipledeletecate', '反馈分类批量删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('19', '4', 'admin/feedback/singledeletecate', '反馈分类单条删除', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('20', '4', 'admin/feedback/editcate', '反馈分类编辑', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('26', '7', 'admin/index/welcome', '后台欢迎页', '1', '1', '');
INSERT INTO `auth_rule` VALUES ('25', '7', 'admin/index/index', '后台首页', '1', '1', '');

-- ----------------------------
-- Table structure for `auth_rule_category`
-- ----------------------------
DROP TABLE IF EXISTS `auth_rule_category`;
CREATE TABLE `auth_rule_category` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `cname` varchar(50) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='规则分类表';

-- ----------------------------
-- Records of auth_rule_category
-- ----------------------------
INSERT INTO `auth_rule_category` VALUES ('1', '用户管理');
INSERT INTO `auth_rule_category` VALUES ('2', '管理员操作日志');
INSERT INTO `auth_rule_category` VALUES ('3', '反馈建议');
INSERT INTO `auth_rule_category` VALUES ('4', '反馈分类');
INSERT INTO `auth_rule_category` VALUES ('7', '首页欢迎页');

-- ----------------------------
-- Table structure for `banner`
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner` (
  `banner_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `good_id` varchar(50) NOT NULL DEFAULT '' COMMENT '商品id',
  `img_url` varchar(50) NOT NULL DEFAULT '' COMMENT '图片路径',
  `status` int(2) unsigned NOT NULL DEFAULT '1' COMMENT 'banner状态,0不显示，1显示',
  PRIMARY KEY (`banner_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='banner表';

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES ('4', '25', 'Uploads/banner/2017-02-10/589d64ec4af59.jpg', '1');
INSERT INTO `banner` VALUES ('3', '24', 'Uploads/banner/2017-02-10/589d6512b99a8.jpg', '1');
INSERT INTO `banner` VALUES ('5', '31', 'Uploads/banner/2017-02-05/58970e1a7717b.jpg', '1');
INSERT INTO `banner` VALUES ('6', '26', 'Uploads/banner/2017-02-05/58970e0cc92d5.jpg', '1');
INSERT INTO `banner` VALUES ('7', '27', 'Uploads/banner/2017-02-05/58970dfa514a4.jpg', '1');

-- ----------------------------
-- Table structure for `feedback`
-- ----------------------------
DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fbid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `uid` int(2) DEFAULT NULL COMMENT '用户的id',
  `typeid` int(2) DEFAULT NULL COMMENT '类型id',
  `content` varchar(250) DEFAULT '' COMMENT '详细问题内容',
  `email` varchar(40) DEFAULT '' COMMENT '留言邮箱',
  `create_time` int(25) DEFAULT NULL COMMENT '反馈时间',
  `status` int(1) DEFAULT '1' COMMENT '反馈的状态 0停用 1正常未读 2已读',
  PRIMARY KEY (`fbid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='用户建议反馈表';

-- ----------------------------
-- Records of feedback
-- ----------------------------
INSERT INTO `feedback` VALUES ('5', '41', '5', '啊飒飒飒飒飒飒飒飒', '', '1487039322', '1');

-- ----------------------------
-- Table structure for `feedback_type`
-- ----------------------------
DROP TABLE IF EXISTS `feedback_type`;
CREATE TABLE `feedback_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `type_name` varchar(30) DEFAULT NULL COMMENT '类别的名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=45 DEFAULT CHARSET=utf8 COMMENT='反馈信息类别表';

-- ----------------------------
-- Records of feedback_type
-- ----------------------------
INSERT INTO `feedback_type` VALUES ('1', '其他建议');
INSERT INTO `feedback_type` VALUES ('2', '商品建议');
INSERT INTO `feedback_type` VALUES ('3', '活动建议');
INSERT INTO `feedback_type` VALUES ('4', '支付流程');
INSERT INTO `feedback_type` VALUES ('5', '购物体验');
INSERT INTO `feedback_type` VALUES ('42', 'sadsadasd');
INSERT INTO `feedback_type` VALUES ('43', 'asdadsad');
INSERT INTO `feedback_type` VALUES ('44', 'aaaa');

-- ----------------------------
-- Table structure for `message`
-- ----------------------------
DROP TABLE IF EXISTS `message`;
CREATE TABLE `message` (
  `mid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `typeid` int(2) DEFAULT NULL COMMENT '类型id',
  `images` varchar(250) DEFAULT '' COMMENT '活动图片',
  `status` int(1) DEFAULT '1' COMMENT '状态（1正常，0停止活动了）',
  `title` varchar(100) DEFAULT NULL COMMENT '活动的标题',
  `detail` varchar(100) DEFAULT NULL COMMENT '具体介绍',
  `create_time` int(50) DEFAULT '1',
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='信息表';

-- ----------------------------
-- Records of message
-- ----------------------------
INSERT INTO `message` VALUES ('1', '3', '', '1', '到不了到不了到不了到不了到不了到不了到不了到不了到不了到不了', '123', '1');
INSERT INTO `message` VALUES ('2', '1', '', '1', 'XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX', '123', '1');
INSERT INTO `message` VALUES ('4', '1', '', '1', 'asdsadasdasdasdsdasdsad 1dd0—7月11日 18:00。', '123', '1');
INSERT INTO `message` VALUES ('5', '1', '', '1', 'sdasdasd活动时间：6月27日 10:00—6月29日 18:00。', '123', '1');

-- ----------------------------
-- Table structure for `message_type`
-- ----------------------------
DROP TABLE IF EXISTS `message_type`;
CREATE TABLE `message_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `type_name` varchar(30) DEFAULT NULL COMMENT '活动类型的名称',
  `detail` varchar(100) DEFAULT NULL COMMENT '具体介绍',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='活动信息类别表';

-- ----------------------------
-- Records of message_type
-- ----------------------------
INSERT INTO `message_type` VALUES ('1', '活动消息', '123');
INSERT INTO `message_type` VALUES ('2', '交易消息', '123');
INSERT INTO `message_type` VALUES ('3', '系统消息', '123');

-- ----------------------------
-- Table structure for `operation_logs`
-- ----------------------------
DROP TABLE IF EXISTS `operation_logs`;
CREATE TABLE `operation_logs` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `admin_id` int(2) DEFAULT NULL COMMENT '操作的管理员id',
  `operation_name` varchar(50) DEFAULT '' COMMENT '操作的内容',
  `operation_time` int(50) DEFAULT NULL COMMENT '操作的时间',
  `operation_ip` varchar(25) DEFAULT NULL COMMENT '操作的ip地址',
  PRIMARY KEY (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=169 DEFAULT CHARSET=utf8 COMMENT='管理员操作日志表';

-- ----------------------------
-- Records of operation_logs
-- ----------------------------
INSERT INTO `operation_logs` VALUES ('148', '12', '添加商品类型属性,id:31', '1486295249', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('149', '12', '单条删除反馈意见:', '1486295356', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('150', '12', '导出用户数据', '1486295368', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('151', '12', '删除用户,用户id是:9', '1486295457', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('152', '12', '删除用户,用户id是:27', '1486295464', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('153', '12', '删除用户,用户id是:11', '1486295466', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('154', '12', '编辑管理员,用户id:12', '1486295968', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('155', '12', '添加角色', '1486296096', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('156', '12', '增加管理员,用户id:34', '1486296139', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('157', '12', '增加管理员,用户id:35', '1486296189', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('158', '12', '导出用户数据', '1486297061', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('159', '12', '删除权限规则,id:7', '1486819054', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('160', '12', '添加权限规则,id:27', '1486819538', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('161', '12', '删除权限规则,id:27', '1486819542', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('162', '12', '添加分类,分类id是:44', '1486884545', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('163', '12', '修改商品类型属性,id:', '1486885025', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('164', '12', '添加商品类型,id:19', '1487126517', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('165', '12', '单条删除商品类型属性,id:14', '1487129961', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('166', '12', '删除商品类型分类,id:19', '1487229696', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('167', '12', '添加权限规则,id:28', '1499447123', '127.0.0.1');
INSERT INTO `operation_logs` VALUES ('168', '12', '删除权限规则,id:28', '1499447126', '127.0.0.1');

-- ----------------------------
-- Table structure for `orders`
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `order_code` varchar(20) DEFAULT NULL COMMENT '订单编号',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `order_price` int(8) NOT NULL COMMENT '订单的总价',
  `addr_id` int(10) NOT NULL COMMENT '用户地址id',
  `address_text` varchar(100) DEFAULT NULL COMMENT '详细地址',
  `username` varchar(20) DEFAULT NULL COMMENT '收货人',
  `phone` varchar(15) DEFAULT '' COMMENT '收获电话',
  `order_time` varchar(25) DEFAULT NULL COMMENT '订单时间',
  `express` varchar(25) NOT NULL DEFAULT '快递配送(免运费)' COMMENT '配送方式',
  `express_cost` int(6) DEFAULT '0' COMMENT '快递费用',
  `user_message` varchar(150) DEFAULT '没有留言' COMMENT '用户留言',
  `status` int(2) DEFAULT '0' COMMENT '订单状态 0 待付款 1待发货 2已发货 3其他(取消订单之类的) , 4订单完成',
  PRIMARY KEY (`order_id`),
  KEY `order_id_key` (`order_id`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COMMENT='订单表';

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('45', '20170214148706423841', '41', '78', '109', '河南省南阳市南召县south', 'wang hao', '18803569538', '1487064238', '快递配送(免运费)', '0', '', '4');
INSERT INTO `orders` VALUES ('44', '20170214148706231341', '41', '456', '110', '河南省南阳市南召县south', 'wang hao', '18803569538', '1487062313', '快递配送(免运费)', '0', '', '2');
INSERT INTO `orders` VALUES ('43', '20170214148705489841', '41', '3945', '108', '天津天津市和平区aaaaaaaaaa', 'sasasas', '13663663454', '1487054898', '快递配送(免运费)', '0', '', '3');
INSERT INTO `orders` VALUES ('29', '20160809147071312611', '11', '3940100', '100', '月球XXXX', '白居易', '13663663900', '1486002192', '快递配送(免运费)', '0', '', '4');
INSERT INTO `orders` VALUES ('40', '20170213148694473712', '12', '123', '106', '河南省信阳市固始县21212', 'dasd', '13678943567', '1486944737', '快递配送(免运费)', '0', '', '0');
INSERT INTO `orders` VALUES ('41', '20170213148698975041', '41', '246', '107', '广东省珠海市金湾区sasasasasa', 'aaaaa', '13534542343', '1486989750', '快递配送(免运费)', '0', '', '3');
INSERT INTO `orders` VALUES ('33', '20160813147105287511', '11', '156', '84', '天津市XXXXXXXX', '王安石', '18803569531', '1486002602', '快递配送(免运费)', '0', 'sadasdsadasd', '1');
INSERT INTO `orders` VALUES ('34', '20160813147107535011', '11', '78', '84', '北京北京市宣武区啊是的撒大时代2', '方便', '18803569538', '1486005733', '快递配送(免运费)', '0', '', '2');
INSERT INTO `orders` VALUES ('36', '20160815147122753011', '11', '14268', '84', '重庆市XXXXX', '寒鸦羽', '18803569532', '1486009323', '快递配送(免运费)', '0', '', '2');
INSERT INTO `orders` VALUES ('42', '20170214148703582341', '41', '1231', '107', '广东省珠海市金湾区sasasasasa', 'aaaaa', '13534542343', '1487035823', '快递配送(免运费)', '0', '', '2');
INSERT INTO `orders` VALUES ('46', '20170214148706770342', '42', '24756', '111', '吉林省吉林市船营区aaaaaaaaaa', 'htz', '13434566543', '1487067703', '快递配送(免运费)', '0', '', '4');
INSERT INTO `orders` VALUES ('47', '20170708149947818712', '12', '78', '106', '河南省信阳市固始县21212', 'dasd', '13678943567', '1499478187', '快递配送(免运费)', '0', '', '0');

-- ----------------------------
-- Table structure for `order_sku`
-- ----------------------------
DROP TABLE IF EXISTS `order_sku`;
CREATE TABLE `order_sku` (
  `os_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `gdlist_id` varchar(20) NOT NULL COMMENT '商品sku的id',
  `order_id` varchar(20) NOT NULL COMMENT '订单表id',
  `good_num` int(10) NOT NULL COMMENT '商品数量',
  `good_id` int(10) NOT NULL COMMENT '商品id',
  PRIMARY KEY (`os_id`)
) ENGINE=MyISAM AUTO_INCREMENT=69 DEFAULT CHARSET=utf8 COMMENT='订单表的连表';

-- ----------------------------
-- Records of order_sku
-- ----------------------------
INSERT INTO `order_sku` VALUES ('31', '8', '21', '1', '24');
INSERT INTO `order_sku` VALUES ('32', '1', '21', '3', '24');
INSERT INTO `order_sku` VALUES ('33', '3', '21', '4', '24');
INSERT INTO `order_sku` VALUES ('34', '22', '22', '1', '31');
INSERT INTO `order_sku` VALUES ('35', '3', '23', '2', '24');
INSERT INTO `order_sku` VALUES ('36', '1', '23', '2', '24');
INSERT INTO `order_sku` VALUES ('37', '10', '24', '1', '25');
INSERT INTO `order_sku` VALUES ('38', '1', '25', '1', '24');
INSERT INTO `order_sku` VALUES ('39', '19', '26', '5', '27');
INSERT INTO `order_sku` VALUES ('40', '23', '26', '2', '33');
INSERT INTO `order_sku` VALUES ('41', '24', '27', '2', '34');
INSERT INTO `order_sku` VALUES ('42', '27', '27', '1', '34');
INSERT INTO `order_sku` VALUES ('43', '29', '28', '50', '35');
INSERT INTO `order_sku` VALUES ('44', '20', '29', '41', '27');
INSERT INTO `order_sku` VALUES ('45', '19', '29', '32', '27');
INSERT INTO `order_sku` VALUES ('46', '18', '29', '1', '27');
INSERT INTO `order_sku` VALUES ('47', '19', '30', '1', '27');
INSERT INTO `order_sku` VALUES ('49', '19', '32', '10', '27');
INSERT INTO `order_sku` VALUES ('50', '20', '32', '11', '27');
INSERT INTO `order_sku` VALUES ('51', '60', '33', '2', '44');
INSERT INTO `order_sku` VALUES ('52', '82', '34', '1', '50');
INSERT INTO `order_sku` VALUES ('53', '84', '35', '1', '51');
INSERT INTO `order_sku` VALUES ('54', '18', '36', '116', '27');
INSERT INTO `order_sku` VALUES ('55', '46', '37', '2', '41');
INSERT INTO `order_sku` VALUES ('56', '42', '37', '2', '41');
INSERT INTO `order_sku` VALUES ('57', '97', '38', '1', '54');
INSERT INTO `order_sku` VALUES ('58', '84', '38', '4', '51');
INSERT INTO `order_sku` VALUES ('59', '151', '38', '1', '69');
INSERT INTO `order_sku` VALUES ('60', '82', '39', '1', '50');
INSERT INTO `order_sku` VALUES ('61', '57', '40', '1', '43');
INSERT INTO `order_sku` VALUES ('62', '57', '41', '2', '43');
INSERT INTO `order_sku` VALUES ('63', '51', '42', '1', '42');
INSERT INTO `order_sku` VALUES ('64', '105', '43', '5', '57');
INSERT INTO `order_sku` VALUES ('65', '122', '44', '1', '62');
INSERT INTO `order_sku` VALUES ('66', '82', '45', '1', '50');
INSERT INTO `order_sku` VALUES ('67', '34', '46', '2', '38');
INSERT INTO `order_sku` VALUES ('68', '30', '47', '1', '36');

-- ----------------------------
-- Table structure for `receive_addr`
-- ----------------------------
DROP TABLE IF EXISTS `receive_addr`;
CREATE TABLE `receive_addr` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '用户id',
  `realname` char(12) NOT NULL COMMENT '收件人',
  `phone` char(11) DEFAULT NULL COMMENT '收件人手机',
  `province` char(10) NOT NULL COMMENT '省',
  `province_num` int(2) DEFAULT NULL COMMENT '省代码',
  `city` varchar(10) DEFAULT NULL COMMENT '市',
  `city_num` int(4) DEFAULT NULL COMMENT '市代码',
  `county` varchar(10) DEFAULT NULL COMMENT '县',
  `county_num` int(6) DEFAULT NULL COMMENT '县代码',
  `detail_addr` varchar(10) DEFAULT NULL COMMENT '详细地址',
  `isdefault` tinyint(1) DEFAULT '0' COMMENT '默认地址 0不默认 1默认',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=114 DEFAULT CHARSET=utf8 COMMENT='用户的收货地址';

-- ----------------------------
-- Records of receive_addr
-- ----------------------------
INSERT INTO `receive_addr` VALUES ('84', '11', 'sadad', '18144775598', '山西省', '11', '晋城市', '1101', '城区', '110104', 'XX小区sxsx', '1');
INSERT INTO `receive_addr` VALUES ('101', '31', '阿萨', '13075246513', '山西省', '44', '晋城市', '4417', '泽州县', '441702', 'cdcdcdcdcd', '1');
INSERT INTO `receive_addr` VALUES ('102', '32', '范德', '13650883471', '山西省', '44', '晋城市', '4403', '阳城', '440304', 'bgbccdcdc', '1');
INSERT INTO `receive_addr` VALUES ('103', '12', 'God', '13650883471', '山西省', '44', '晋城市', '4402', '阳城', '440204', '枫木小区2号1单元1', '0');
INSERT INTO `receive_addr` VALUES ('104', '33', '班干部', '13650883471', '山西省', '44', '晋城市', '4404', '城区', '440403', '瓷堕村打场洞村', '1');
INSERT INTO `receive_addr` VALUES ('105', '12', 'qwqwq', '13423455432', '天津', '12', '天津市', '1201', '河东区', '120102', 'asdasds', '0');
INSERT INTO `receive_addr` VALUES ('106', '12', 'dasd', '13678943567', '河南省', '41', '信阳市', '4115', '固始县', '411525', '21212', '1');
INSERT INTO `receive_addr` VALUES ('108', '41', 'sasasas', '13663663454', '江西省', '36', '新余市', '3605', '分宜县', '360521', 'wewewew', '1');
INSERT INTO `receive_addr` VALUES ('111', '42', 'htz', '13434566543', '吉林省', '22', '吉林市', '2202', '船营区', '220204', 'aaaaaaaaaa', '1');
INSERT INTO `receive_addr` VALUES ('113', '41', 'AAAA', '13663665654', '安徽省', '34', '马鞍山市', '3405', '雨山区', '340504', '沃尔沃而我而我二恶烷', '0');

-- ----------------------------
-- Table structure for `shop_category`
-- ----------------------------
DROP TABLE IF EXISTS `shop_category`;
CREATE TABLE `shop_category` (
  `cid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '分类自增ID',
  `cname` char(15) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父ID',
  `sort` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '分类排序',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属类型ID',
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COMMENT='分类表';

-- ----------------------------
-- Records of shop_category
-- ----------------------------
INSERT INTO `shop_category` VALUES ('1', '手机', '0', '1', '1');
INSERT INTO `shop_category` VALUES ('36', '路由器 / 移动电源', '0', '4', '4');
INSERT INTO `shop_category` VALUES ('7', '耳机 / 音箱', '0', '3', '3');
INSERT INTO `shop_category` VALUES ('28', '智能硬件', '0', '2', '2');
INSERT INTO `shop_category` VALUES ('30', '保护套 / 后盖 / 贴膜', '0', '5', '5');
INSERT INTO `shop_category` VALUES ('37', '数据线 / 电源适配器', '0', '6', '6');
INSERT INTO `shop_category` VALUES ('38', '周边配件', '0', '7', '7');

-- ----------------------------
-- Table structure for `shop_goods`
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods`;
CREATE TABLE `shop_goods` (
  `good_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品自增ID',
  `good_name` char(70) NOT NULL DEFAULT '' COMMENT '商品名称',
  `good_number` char(45) NOT NULL DEFAULT '2016' COMMENT '商品货号',
  `good_unit` char(5) NOT NULL DEFAULT '台' COMMENT '计件单位',
  `good_marketprice` int(10) NOT NULL DEFAULT '0' COMMENT '市场价',
  `good_desc` varchar(50) NOT NULL DEFAULT '0' COMMENT '商城价',
  `good_pic` varchar(60) NOT NULL DEFAULT '' COMMENT '列表图地址',
  `create_time` datetime NOT NULL COMMENT '上架时间',
  `brand_id` int(10) unsigned NOT NULL COMMENT '所属品牌ID',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属分类ID',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属类型ID',
  `good_detail` text COMMENT '商品详情',
  `canshu` text COMMENT '参数',
  `ispublish` tinyint(1) DEFAULT '1' COMMENT '是否上架,1为上架,0为不上架',
  `isnew` int(1) DEFAULT '0' COMMENT '是否是新品 1为是 0为否',
  `ishot` int(1) DEFAULT '0' COMMENT '是否热品',
  PRIMARY KEY (`good_id`),
  KEY `fk_ccshop_goods_ccshop_brand1_idx` (`brand_id`),
  KEY `fk_ccshop_goods_ccshop_category1_idx` (`cate_id`),
  KEY `fk_ccshop_goods_ccshop_type1_idx` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COMMENT='商品表';

-- ----------------------------
-- Records of shop_goods
-- ----------------------------
INSERT INTO `shop_goods` VALUES ('31', '运动耳机', '201361012', '条', '323', '白色版全新上市 轻装上阵 乐享动听', 'Uploads/product_imgs/2016-08-02/57a07fe2cfa9e.png', '0000-00-00 00:00:00', '0', '7', '3', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0004.gif\"/></p>', '魅族,EP-51,入耳式,蓝牙运动耳机,带麦,无线,Android      ios,0.55米,充电线 x 1 耳机 x 1 S、L、XL硅胶套 x 1 耳机收纳包 x 1', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('27', '魅蓝note3', '23423423', '台', '232', '8月1日10点限量开售', 'Uploads/product_imgs/2016-08-01/579e9b381e99c.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>', '魅族,魅蓝note3 礼盒版,153.6×75.5×8.2mm,4100mAh,5.5英寸,1920×1080,2GB（仅限16G版本）、3GB（仅限32G版本）,Helio P10 处理器,ARM Mali-T860 图形处理器,4G双卡双待,163g,500万像素,1300万像素,Flyme 5.1,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 全贴合防爆膜 x 1 缤纷软胶保护壳 x 1', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('26', '魅族PRO 5', '201361012', '台', '312', '直降300元，最高享六期免息', 'Uploads/product_imgs/2016-07-31/579e03637083d.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/face/i_f26.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/></p>', '魅族,PRO 5,156.7×78×7.5mm,3050mAh,5.7英寸,1920×1080,3GB(仅限32G版本)、4GB(仅限64G版本),Exynos 7420 处理器,Mali T760 图形处理器,双卡多模,168g,500万像素,2116万像素,Flyme 4.5,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 EP31耳机x1（仅限64G版本）', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('24', '魅蓝 metal', '201360123', '台', '232', '购机最高可享6期免息，月供低至166.5元', 'Uploads/product_imgs/2016-07-31/579dfd47d6109.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/face/i_f28.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/></p><p><br/></p>', '魅族,魅蓝metal,150.7×75.3×8.2mm,3140mAh（公开版／移动定制版）、3100mAh（电信定制版）,5.5英寸,1920×1080,2GB,公开版／移动定制版：Helio X10 处理器；电信定制版：MT6753T 处理器,公开版／移动定制版：PowerVR G6200；电信定制版：ARM Mali-T720,双卡多模,162g,500万像素,1300万像素,Flyme 5 powered by YunOS,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('25', '魅蓝8', '201361012', '台', '332', '移动定制版 现货开售', 'Uploads/product_imgs/2016-07-31/579dfededc9eb.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/face/i_f28.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f28.gif\"/></p>', '魅族,魅蓝3,141.5*69.5* 8.3mm,2870mAh,5.0英寸,1280 x 720,2GB（仅限16G版本）、3GB（仅限32G版本）,MTK MT6750 处理器,ARM Mali T860 图形处理器,双卡多模,132g,500万像素,1300万像素,Flyme 5.1 powered by YunOS,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('33', '智能环境监测仪', '201361012', '台', '234', '本商品为BroadLink智能家居产品；已接入LifeKit', 'Uploads/product_imgs/2016-08-08/57a7ddd271fc2.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>', 'BroadLink,1智能环境监测仪,72* 67 *112mm,300g,感知环境指标；与BroadLink系列产品联动,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('34', '无线蓝牙XX', '201361012', '个', '100', '便携易带 防水防碰 待机80天 超长续航', 'Uploads/product_imgs/2016-08-08/57a7e08b31fbd.png', '0000-00-00 00:00:00', '0', '36', '4', '<p>aaaaaaaaaaaa<br/></p>', '先锋（Pioneer）,APS-BA202S,70x54x60mm,155g,蓝牙4.0版本,蓝牙连接,10-20米,约10小时,LED多彩灯光,内置锂电池,直流电,按键,音箱 x 1 挂绳 x 1', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('35', '魅族路由器 极速版', '201361012', '台', '234', '简单的上网 不简单的速度', 'Uploads/product_imgs/2016-08-08/57a7ea22bc087.png', '0000-00-00 00:00:00', '0', '36', '4', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0020.gif\"/></p><p><br/></p>', '魅族暖手宝移动电源,路由器极速版,152*110*20mm,207g,白色,2*2（IEEE 802.11b/g/n，最高速率300Mbps）,2*2（IEEE 802.11a/n/ac，最高速率867Mbps）,说明书 x 1 三包卡 x 1 路由器 x 1 Micro USB电源 x 1,asas,4500mAh,DC5V/1A,asas,asasas', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('36', '魅族移动电源 快充版', '201361012', '台', '123', '独特双层注塑 精密工艺打磨', 'Uploads/product_imgs/2016-08-08/57a7f4e06761f.png', '0000-00-00 00:00:00', '0', '37', '6', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-16/58a543ab8e1e7.jpg\" title=\"58a543ab8e1e7.jpg\" alt=\"1451976456-89930.jpg\"/></p><p><br/></p><p><br/></p>', '魅族,魅族移动电源 快充版,10000mAh,聚碳酸酯/磨砂半透明聚碳酸酯,5V-12V/2A(MAX),V/2A，9V/2A,143.5*75.6*17.4 mm,快充技术,235g', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('37', 'Loop Jacket环窗智能保护套（PRO 6）', '201361012', '台', '123', '个性表盘 随心搭配', 'Uploads/product_imgs/2016-08-08/57a7f6673eb29.png', '0000-00-00 00:00:00', '0', '38', '7', '<p>详情图片详情图片详情图片详情图片详情图片详情图片详情图片详情图片</p><p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>', '魅族,Loop Jacket环窗智能保护套（Pro 6）,PRO 6,保护套', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('38', '魅蓝3礼盒版', '201361012', '台', '99', '8月8日10点限量开售', 'Uploads/product_imgs/2016-08-09/57a927a8cb9a0.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/face/i_f32.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f32.gif\"/></p>', '魅族,魅蓝note3 礼盒版,153.6×75.5×8.2mm,4100mAh,5.5英寸,1920×1080,2GB（仅限16G版本）、3GB（仅限32G版本）,Helio P10 处理器,ARM Mali-T860 图形处理器,4GB,163g,500万像素,1300万像素,Flyme 5.1,	主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 全贴合防爆膜 x 1 缤纷软胶保护壳 x 1', '1', '1', '0');
INSERT INTO `shop_goods` VALUES ('39', '魅族 MX5', '201361012', '台', '123', '快充金属旗舰 指纹识别', 'Uploads/product_imgs/2016-08-09/57a92bebe0b27.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/face/i_f32.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f32.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f32.gif\"/></p>', '魅族,MX5,149.9×74.7×7.6mm,3150mAh,5.5英寸,1920×1080,3GB,Helio X10 Turbo,PowerVR G6200 图形处理器,双卡双模,149g,500万像素,2070万像素,Flyme 4.5,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('40', '魅族PRO 9', '201361012', '台', '3213', '标配EP-21HD耳机 支持花呗分期，购机赢免单', 'Uploads/product_imgs/2016-08-09/57a92cc0608f8.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><br/></p><p><br/></p><p><img src=\"http://img.baidu.com/hi/face/i_f01.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f15.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/></p>', '魅族,MX5e,149.9×74.7×7.6mm,3150mAh,5.5英寸,1920×1080,3GB,Helio X10,PowerVR G6200 图形处理器,双卡多模,149g,500万像素,1600万像素,Flyme 5,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 EP-21HD耳机 x 1', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('41', '魅蓝 note2', '20161021', '台', '213', 'sasdccdcd', 'Uploads/product_imgs/2016-08-09/57a92e224bde2.png', '0000-00-00 00:00:00', '0', '1', '1', '<p>产品详情图片</p>', '魅族,魅蓝 note2,150.9×75.2×8.7mm,3100mAh,5.5英寸,1920×1080,2GB,MTK MT6753 处理器,Mali T720 MP3/450MHz 图形处理器,双卡多模,149g,500万像素,1300万像素,Flyme 4.0,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('42', '魅族PRO 6', '201361012', '台', '232', 'asasasasasasa', 'Uploads/product_imgs/2016-08-09/57a9342dc1ab1.png', '0000-00-00 00:00:00', '0', '1', '1', '<p>千万千万千万我去问问千万千万千万千万千万弃</p>', '魅族,PRO 6,147.7×70.8×7.25mm,2560mAh,5.2英寸,1920×1080,4GB,Helio X25 处理器,ARM Mali-T880 图形处理器,双卡多模,160g,500万像素,2116万像素,Flyme 5,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 ME-10耳机 x 1（仅限64G版本）', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('43', '魅族NOTE1', '201361012', '台', '123', 'asasasasaaas', 'Uploads/product_imgs/2016-08-09/57a9368e737f8.png', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-12/58a00b6f097fa.jpg\" title=\"58a00b6f097fa.jpg\" alt=\"1.jpg\"/><img src=\"/mz/Uploads/product_imgs/2017-02-12/58a00b77a90b1.png\" title=\"58a00b77a90b1.png\" alt=\"2.png\"/><img src=\"/mz/Uploads/product_imgs/2017-02-12/58a00b7fef78b.png\" title=\"58a00b7fef78b.png\" alt=\"3.png\"/></p><p><br/></p>', '魅族,PRO 5金色套装,156.7×78×7.5mm ,3050mAh,5.7英寸,1920×1080,3GB(仅限32G版本)、4GB(仅限64G版本),Exynos 7420 处理器,Mali T760 图形处理器,双卡双模,168g,500万像素,2116万像素,Flyme 5,主机 x 1 电源适配器 x 1 保修证书 x 1 SIM卡顶针 x 1 数据线 x 1 金色EP-31S x 1 智能保护套（白色） x 1 PRO 5高透保护膜 x 1', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('44', '智能硬件008', '201361012', '个', '5', '国标小五孔，阻燃PC安全材质；已接入LifeKit', 'Uploads/product_imgs/2016-08-09/57a93f45ac0bb.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0004.gif\"/></p>', 'BroadLink,SP mini Wi-Fi 智能插座,75mm*44mm,150g,自由定时 远程遥控 智能定位,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('45', '智能硬件007', '201361012', '个', '123', '智能控制加湿器 手机远程控制', 'Uploads/product_imgs/2016-08-09/57a9429aa854f.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>', '奔腾,小k奔腾联合开发智能加湿器,1200g,手机APP,安卓/IOS,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('46', '智能硬件006', '201361012', '个', '123', 'SSSSS', 'Uploads/product_imgs/2016-08-09/57a94358aa40b.jpg', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3b0776196d.jpg\" title=\"58a3b0776196d.jpg\" alt=\"Cix_s1fg0OKAG7LZAAFrzaHb-5w865.jpg\"/></p><p><br/></p>', '魅族,ACD,222,0.95kg,320mAh,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('47', '智能硬件005', '201361012', '台', '123', '超级开关', 'Uploads/product_imgs/2016-08-09/57a946fb13aba.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3b034da7c9.jpg\" title=\"58a3b034da7c9.jpg\" alt=\"Cix_s1fg0OKAG7LZAAFrzaHb-5w865.jpg\"/></p>', '魅族,电源转换器,36英寸,50g,很多,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('48', '智能硬件004', '201361012', '台', '123', '便携迷你穴位按摩器', 'Uploads/product_imgs/2016-08-09/57a948995e8c3.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3afc662c79.jpg\" title=\"58a3afc662c79.jpg\" alt=\"1467619475-49187.jpg\"/></p>', '魅族,魅族,503ABC,150g,很好的,有的', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('49', '智能硬件003', '20136112', '个', '123', '很厉害0', 'Uploads/product_imgs/2016-08-09/57a9499ab8913.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/><img src=\"http://img.baidu.com/hi/face/i_f29.gif\"/></p><p><br/></p>', '魅族,超级电动,很好开的,150g,老司机,有', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('50', '智能硬件002', '201361012', '个', '123', 'VR虚拟现实智能眼镜', 'Uploads/product_imgs/2016-08-09/57a94a5e8e614.png', '0000-00-00 00:00:00', '0', '28', '2', '<p><br/></p><p><img src=\"http://img.baidu.com/hi/jx2/j_0001.gif\"/></p>', '魅族,魔镜,59,10g,遮光,有的', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('51', '智能硬件001', '201361012', '台', '33', '双色温双闪光灯 补光自然柔和', 'Uploads/product_imgs/2016-08-09/57a94b0310bf4.png', '0000-00-00 00:00:00', '0', '28', '2', '<p>WWWWWWWWWWWWWWWWWWWWW</p>', '魅族,很大,5959ads,150g,很多,有', '1', '1', '0');
INSERT INTO `shop_goods` VALUES ('54', '魅族HD50 头戴式耳机', '201361012', '个', '123', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-09/57a9fbda9c348.png', '0000-00-00 00:00:00', '0', '7', '3', '<p>aaaaa<br/></p>', '魅族,HD50,头戴式,HIFI耳机 手机线控耳机,带麦,有线,Android,1.2米,主机 x 1 耳机包 x 1 功放转接头 x 1 航空转接头 x 1 耳机线 x 1', '1', '1', '0');
INSERT INTO `shop_goods` VALUES ('55', '魅族EP-31耳机', '201361012', '个', '123', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-09/57a9fd75e694e.png', '0000-00-00 00:00:00', '0', '7', '3', '<p>DDDDDDDDDDDDDDDDDD<br/></p><p><br/></p>', '魅族,魅族,魅族,魅族,魅族,魅族,魅族,魅族,魅族', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('56', '魅族 EP-21HD耳机', '5', '个', '123', '好音腔 低失真 新旧LOGO更新中', 'Uploads/product_imgs/2016-08-10/57a9fe560ce62.png', '0000-00-00 00:00:00', '0', '7', '3', '<p>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</p>', '魅族,EP-21HD,耳塞式,手机线控耳机,带麦,有线,Android1.2米,有线,缆线  + 耳机', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('57', '乐心心率手环MAMBO2', '201361012', '个', '59', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-10/57aa84226a71a.png', '0000-00-00 00:00:00', '0', '36', '4', '<p></p><p><br/></p><p><br/></p><p>乐心心率手环MAMBO2</p><p><br/></p><p>图片。。。</p>', 'JAM,HX-P150,82x50x31mm,69g,4.0版本,蓝牙连接,10米,4小时,充电指示灯 蓝色指示灯,内置锂电池,直流电,按键,主机 x 1 说明书 x 1 充电线 x 1', '1', '1', '0');
INSERT INTO `shop_goods` VALUES ('58', '铁三角ASASAS', '32344234', '个', '222', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-10/57aa85776e793.png', '0000-00-00 00:00:00', '0', '36', '4', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3ad080ec0e.jpg\" title=\"58a3ad080ec0e.jpg\" alt=\"006.jpg\"/></p><p><br/></p>', 'JAM,HX-P120,5.5x6x6.5cm,91g,4.0版本,蓝牙连接,10米,4小时,充电指示灯 蓝色指示灯,内置锂电池,直流电,按键,主机 x 1 说明书 x 1 充电线 x 1', '1', '1', '0');
INSERT INTO `shop_goods` VALUES ('59', '音箱001', '123', '个', '23', '专业级防水', 'Uploads/product_imgs/2016-08-10/57aa8651d90a1.png', '0000-00-00 00:00:00', '0', '7', '3', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3b0bc62108.jpg\" title=\"58a3b0bc62108.jpg\" alt=\"Cix_s1fg0OKAG7LZAAFrzaHb-5w865.jpg\"/></p>', '品牌aaa,APS-BA501,84mmX40mmX84mm,220g,4.0版本,蓝牙连接 AUX连接,10米,约10小时,LED多彩灯光', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('60', '魅族移动电源标准版', '201361012', '个', '231', '随心所欲XX', 'Uploads/product_imgs/2016-08-10/57aa87438c949.png', '0000-00-00 00:00:00', '0', '36', '4', '<p>XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX<img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p>', '魅族,JAM,魅蓝,JAM,JAM,蓝牙连接 AUX连接,10米,约10小时,LED多彩灯光,内置锂电池,直流电,按键,保修证书 x 1 数据线 x 1 说明书 x 1 音箱 x 1 挂绳 x 1', '1', '1', '1');
INSERT INTO `shop_goods` VALUES ('65', '魅族 MX6', '201361012', '个', '222', '素雅百搭', 'Uploads/product_imgs/2016-08-10/57aa99a0c5320.png', '0000-00-00 00:00:00', '0', '38', '7', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-14/58a2b8a5da901.jpg\" title=\"58a2b8a5da901.jpg\" alt=\"CnQOjVg-kO-AJGKsAAXMdbFS9rQ021.jpg\"/></p>', '魅族,MX6轻薄保护壳,MX6,保护壳', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('70', '保护套001', 'sasas', '台', '300', 'asasas', 'Uploads/product_imgs/2017-02-15/58a3b4bb7bd36.jpg', '0000-00-00 00:00:00', '0', '30', '5', '<p>产品详情啊飒飒飒飒飒飒</p>', 'MM,aa ,3434,12k,白,111,12,asasasasaasas', '0', '0', '1');
INSERT INTO `shop_goods` VALUES ('62', '魅族音箱', '20136101212', '个', '222', '礼盒含防爆膜 缤纷保护壳', 'Uploads/product_imgs/2016-08-10/57aa8c8e59aca.png', '0000-00-00 00:00:00', '0', '7', '3', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0001.gif\"/></p>', '魅族,智能路由器 2.4G版,直径67mm 高23mm,2.4G版186g；5G版196g,白色,最高速率可达300Mbps,最高速率可达433Mbps,说明书 x 1 三包卡 x 1,asasasasasasasasas', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('71', '魅族 Type-C转接头', '1111111', '台', '19', '小巧便携 随心转换', 'Uploads/product_imgs/2017-02-15/58a3b74f89ecf.jpg', '0000-00-00 00:00:00', '0', '37', '6', '<p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3b72435948.jpg\" title=\"58a3b72435948.jpg\" alt=\"1.jpg\"/></p>', '魅族,PRO魅族,234,塑料,24V,24V,22,充电,23kg', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('72', 'pro1', '212', '台', '11', '1212', 'Uploads/product_imgs/2017-02-15/58a3c12174253.jpg', '0000-00-00 00:00:00', '0', '1', '1', '<p>飒飒是对撒打死打伤的速度撒阿斯的<br/></p><p><img src=\"/mz/Uploads/product_imgs/2017-02-15/58a3c11693f9d.jpg\" title=\"58a3c11693f9d.jpg\" alt=\"1.jpg\"/></p>', '212,121,121,212,212,1212,12G,12,1212,121,12k,1200W,800W,IOS7.0,数据线×1，折扣卡，会员卡', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('67', '魅蓝3s 轻薄保护壳', '123', '个', '222', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-10/57aa9b12f0735.png', '0000-00-00 00:00:00', '0', '30', '5', '<p><br/></p><p><img src=\"http://img.baidu.com/hi/ldw/w_0015.gif\"/></p>', '魅族,魅蓝3s 轻薄保护壳,魅蓝3S,保护壳,红色,qwqwqw,qwqw,魅蓝X智能保护壳', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('68', '保护壳001', '5032', '个', '49', '清新百搭 颜值典范', 'Uploads/product_imgs/2016-08-10/57aa9f87f1bc2.png', '0000-00-00 00:00:00', '0', '30', '5', '<p>啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊<br/></p><p><br/></p><p><img src=\"http://img.baidu.com/hi/jx2/j_0013.gif\"/><img src=\"http://img.baidu.com/hi/jx2/j_0003.gif\"/></p><p><br/></p>', '魅族,缤纷软胶保护壳,魅蓝3S,保护壳,白色,2.4g,121,asasas', '1', '0', '1');
INSERT INTO `shop_goods` VALUES ('69', 'ABC', '20161212121', '台', '222', '新加入耳机', 'Uploads/product_imgs/2017-02-11/589ef8a828b23.jpg', '0000-00-00 00:00:00', '0', '7', '3', '<p>sdasdasdasdasdasdsadasdadasd</p>', '魅族拍,AB,普通,tongy ,无,轻武器w,all,2,vdvsfsdfsdfdsf', '1', '0', '0');
INSERT INTO `shop_goods` VALUES ('73', 'dsdasda', '2016', '台', '333', '手机', 'Uploads/product_imgs/2017-02-17/58a6535ba55aa.jpg', '0000-00-00 00:00:00', '0', '1', '1', '<p><img src=\"http://img.baidu.com/hi/jx2/j_0002.gif\"/></p>', '魅族,APX00,800×600,4000mA,5.0,1920,16G,sas,adsd,全网通,16g,1200w,800w,343434,说明书×1 充电器×1', '1', '1', '0');

-- ----------------------------
-- Table structure for `shop_goods_attr`
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_attr`;
CREATE TABLE `shop_goods_attr` (
  `good_attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '商品属性自增ID',
  `good_attr_value` char(15) NOT NULL DEFAULT '' COMMENT '商品属性的值',
  `shop_type_attr_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属商品类型属性ID',
  `good_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属商品ID',
  PRIMARY KEY (`good_attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=209 DEFAULT CHARSET=utf8 COMMENT='商品属性表';

-- ----------------------------
-- Records of shop_goods_attr
-- ----------------------------
INSERT INTO `shop_goods_attr` VALUES ('2', '移动/联动双4G版', '2', '24');
INSERT INTO `shop_goods_attr` VALUES ('3', '联通4G版', '2', '24');
INSERT INTO `shop_goods_attr` VALUES ('4', '电信4G版', '2', '24');
INSERT INTO `shop_goods_attr` VALUES ('5', '16GB', '14', '24');
INSERT INTO `shop_goods_attr` VALUES ('6', '白色', '4', '24');
INSERT INTO `shop_goods_attr` VALUES ('7', '灰色', '4', '24');
INSERT INTO `shop_goods_attr` VALUES ('8', '粉色', '4', '24');
INSERT INTO `shop_goods_attr` VALUES ('9', '移动/联动双4G版', '2', '25');
INSERT INTO `shop_goods_attr` VALUES ('10', '16GB', '14', '25');
INSERT INTO `shop_goods_attr` VALUES ('11', '32GB', '14', '25');
INSERT INTO `shop_goods_attr` VALUES ('12', '白色', '4', '25');
INSERT INTO `shop_goods_attr` VALUES ('13', '灰色', '4', '25');
INSERT INTO `shop_goods_attr` VALUES ('14', '绿色', '4', '25');
INSERT INTO `shop_goods_attr` VALUES ('15', '全网通版', '2', '26');
INSERT INTO `shop_goods_attr` VALUES ('16', '32GB', '14', '26');
INSERT INTO `shop_goods_attr` VALUES ('17', '白色', '4', '26');
INSERT INTO `shop_goods_attr` VALUES ('18', '灰色', '4', '26');
INSERT INTO `shop_goods_attr` VALUES ('19', '全网通版', '2', '27');
INSERT INTO `shop_goods_attr` VALUES ('20', '16GB', '14', '27');
INSERT INTO `shop_goods_attr` VALUES ('21', '白色', '4', '27');
INSERT INTO `shop_goods_attr` VALUES ('22', '灰色', '4', '27');
INSERT INTO `shop_goods_attr` VALUES ('23', '土豪金', '4', '27');
INSERT INTO `shop_goods_attr` VALUES ('24', '白色', '17', '31');
INSERT INTO `shop_goods_attr` VALUES ('25', '红黑', '17', '31');
INSERT INTO `shop_goods_attr` VALUES ('26', '白色', '22', '33');
INSERT INTO `shop_goods_attr` VALUES ('27', '黄色', '24', '34');
INSERT INTO `shop_goods_attr` VALUES ('28', '白色', '24', '34');
INSERT INTO `shop_goods_attr` VALUES ('29', '蓝色', '24', '34');
INSERT INTO `shop_goods_attr` VALUES ('30', '红色', '24', '34');
INSERT INTO `shop_goods_attr` VALUES ('31', '2.4/5GHz', '25', '35');
INSERT INTO `shop_goods_attr` VALUES ('32', '5GHz', '25', '35');
INSERT INTO `shop_goods_attr` VALUES ('33', '灰色', '27', '36');
INSERT INTO `shop_goods_attr` VALUES ('34', '白色', '29', '37');
INSERT INTO `shop_goods_attr` VALUES ('35', '全网通版', '2', '38');
INSERT INTO `shop_goods_attr` VALUES ('36', '16GB', '14', '38');
INSERT INTO `shop_goods_attr` VALUES ('37', '32GB', '14', '38');
INSERT INTO `shop_goods_attr` VALUES ('38', '金色', '4', '38');
INSERT INTO `shop_goods_attr` VALUES ('39', '灰色', '4', '38');
INSERT INTO `shop_goods_attr` VALUES ('40', '移动/联动双4G版', '2', '39');
INSERT INTO `shop_goods_attr` VALUES ('41', '32GB', '14', '39');
INSERT INTO `shop_goods_attr` VALUES ('42', '白色', '4', '39');
INSERT INTO `shop_goods_attr` VALUES ('43', '金色', '4', '39');
INSERT INTO `shop_goods_attr` VALUES ('44', '灰色', '4', '39');
INSERT INTO `shop_goods_attr` VALUES ('45', '移动/联动双4G版', '2', '40');
INSERT INTO `shop_goods_attr` VALUES ('46', '32GB', '14', '40');
INSERT INTO `shop_goods_attr` VALUES ('47', '白色', '4', '40');
INSERT INTO `shop_goods_attr` VALUES ('48', '金色', '4', '40');
INSERT INTO `shop_goods_attr` VALUES ('49', '灰色', '4', '40');
INSERT INTO `shop_goods_attr` VALUES ('50', '全网通版', '2', '41');
INSERT INTO `shop_goods_attr` VALUES ('51', '移动4G版', '2', '41');
INSERT INTO `shop_goods_attr` VALUES ('52', '16GB', '14', '41');
INSERT INTO `shop_goods_attr` VALUES ('53', '白色', '4', '41');
INSERT INTO `shop_goods_attr` VALUES ('54', '灰色', '4', '41');
INSERT INTO `shop_goods_attr` VALUES ('55', '土豪金', '4', '41');
INSERT INTO `shop_goods_attr` VALUES ('56', '绿色', '4', '41');
INSERT INTO `shop_goods_attr` VALUES ('57', '全网通版', '2', '42');
INSERT INTO `shop_goods_attr` VALUES ('58', '移动4G版', '2', '42');
INSERT INTO `shop_goods_attr` VALUES ('59', '联通4G版', '2', '42');
INSERT INTO `shop_goods_attr` VALUES ('60', '16GB', '14', '42');
INSERT INTO `shop_goods_attr` VALUES ('61', '32GB', '14', '42');
INSERT INTO `shop_goods_attr` VALUES ('62', '金色', '4', '42');
INSERT INTO `shop_goods_attr` VALUES ('63', '移动/联动双4G版', '2', '43');
INSERT INTO `shop_goods_attr` VALUES ('64', '32GB', '14', '43');
INSERT INTO `shop_goods_attr` VALUES ('208', '2.4/5GHz', '25', '68');
INSERT INTO `shop_goods_attr` VALUES ('69', '黄色', '22', '44');
INSERT INTO `shop_goods_attr` VALUES ('70', '白色', '22', '44');
INSERT INTO `shop_goods_attr` VALUES ('71', '金色', '22', '44');
INSERT INTO `shop_goods_attr` VALUES ('72', '白色', '22', '45');
INSERT INTO `shop_goods_attr` VALUES ('73', '灰色', '22', '45');
INSERT INTO `shop_goods_attr` VALUES ('74', '土豪金', '22', '45');
INSERT INTO `shop_goods_attr` VALUES ('75', '灰色', '22', '46');
INSERT INTO `shop_goods_attr` VALUES ('76', '绿色', '22', '46');
INSERT INTO `shop_goods_attr` VALUES ('77', '黑色', '22', '46');
INSERT INTO `shop_goods_attr` VALUES ('78', '梧桐金', '22', '46');
INSERT INTO `shop_goods_attr` VALUES ('79', '白色', '22', '47');
INSERT INTO `shop_goods_attr` VALUES ('80', '金色', '22', '47');
INSERT INTO `shop_goods_attr` VALUES ('81', '灰色', '22', '47');
INSERT INTO `shop_goods_attr` VALUES ('82', '白色', '22', '48');
INSERT INTO `shop_goods_attr` VALUES ('83', '粉色', '22', '48');
INSERT INTO `shop_goods_attr` VALUES ('84', '梧桐金', '22', '48');
INSERT INTO `shop_goods_attr` VALUES ('85', '金色', '22', '49');
INSERT INTO `shop_goods_attr` VALUES ('86', '灰色', '22', '49');
INSERT INTO `shop_goods_attr` VALUES ('87', '土豪金', '22', '49');
INSERT INTO `shop_goods_attr` VALUES ('88', '绿色', '22', '49');
INSERT INTO `shop_goods_attr` VALUES ('89', '绿色', '22', '50');
INSERT INTO `shop_goods_attr` VALUES ('90', '粉色', '22', '50');
INSERT INTO `shop_goods_attr` VALUES ('91', '黑色', '22', '50');
INSERT INTO `shop_goods_attr` VALUES ('92', '金色', '22', '51');
INSERT INTO `shop_goods_attr` VALUES ('93', '灰色', '22', '51');
INSERT INTO `shop_goods_attr` VALUES ('94', '梧桐金', '22', '51');
INSERT INTO `shop_goods_attr` VALUES ('95', '黄色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('96', '白色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('97', '金色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('98', '灰色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('99', '绿色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('100', '黑色', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('101', '梧桐金', '22', '52');
INSERT INTO `shop_goods_attr` VALUES ('102', '黑色', '17', '53');
INSERT INTO `shop_goods_attr` VALUES ('103', '蓝色', '17', '53');
INSERT INTO `shop_goods_attr` VALUES ('104', '黑色', '17', '53');
INSERT INTO `shop_goods_attr` VALUES ('108', '白色', '17', '55');
INSERT INTO `shop_goods_attr` VALUES ('106', '天蓝色', '17', '54');
INSERT INTO `shop_goods_attr` VALUES ('109', '黑色', '17', '55');
INSERT INTO `shop_goods_attr` VALUES ('110', '红黑', '17', '56');
INSERT INTO `shop_goods_attr` VALUES ('111', '黑色', '17', '56');
INSERT INTO `shop_goods_attr` VALUES ('112', '蓝色', '17', '56');
INSERT INTO `shop_goods_attr` VALUES ('113', '天蓝色', '17', '56');
INSERT INTO `shop_goods_attr` VALUES ('114', '金色', '24', '57');
INSERT INTO `shop_goods_attr` VALUES ('115', '灰色', '24', '57');
INSERT INTO `shop_goods_attr` VALUES ('116', '土豪金', '24', '57');
INSERT INTO `shop_goods_attr` VALUES ('117', '蓝色', '24', '57');
INSERT INTO `shop_goods_attr` VALUES ('118', '金色', '24', '58');
INSERT INTO `shop_goods_attr` VALUES ('119', '灰色', '24', '58');
INSERT INTO `shop_goods_attr` VALUES ('120', '绿色', '24', '58');
INSERT INTO `shop_goods_attr` VALUES ('121', '绿色', '24', '59');
INSERT INTO `shop_goods_attr` VALUES ('122', '粉色', '24', '59');
INSERT INTO `shop_goods_attr` VALUES ('123', '蓝色', '24', '59');
INSERT INTO `shop_goods_attr` VALUES ('124', '红色', '24', '59');
INSERT INTO `shop_goods_attr` VALUES ('125', '绿色', '24', '60');
INSERT INTO `shop_goods_attr` VALUES ('126', '粉色', '24', '60');
INSERT INTO `shop_goods_attr` VALUES ('127', '蓝色', '24', '60');
INSERT INTO `shop_goods_attr` VALUES ('137', '土豪金', '29', '65');
INSERT INTO `shop_goods_attr` VALUES ('170', '金色', '27', '71');
INSERT INTO `shop_goods_attr` VALUES ('130', '2.4/5GHz', '25', '62');
INSERT INTO `shop_goods_attr` VALUES ('131', '5GHz', '25', '62');
INSERT INTO `shop_goods_attr` VALUES ('169', '白色', '27', '71');
INSERT INTO `shop_goods_attr` VALUES ('168', '黄色', '27', '71');
INSERT INTO `shop_goods_attr` VALUES ('138', '绿色', '29', '65');
INSERT INTO `shop_goods_attr` VALUES ('139', '蓝色', '29', '65');
INSERT INTO `shop_goods_attr` VALUES ('140', '红色', '29', '65');
INSERT INTO `shop_goods_attr` VALUES ('176', '32GB', '14', '72');
INSERT INTO `shop_goods_attr` VALUES ('175', '16GB', '14', '72');
INSERT INTO `shop_goods_attr` VALUES ('203', '移动/联动双4G版', '2', '43');
INSERT INTO `shop_goods_attr` VALUES ('202', '全网通版', '2', '43');
INSERT INTO `shop_goods_attr` VALUES ('172', '土豪金', '27', '71');
INSERT INTO `shop_goods_attr` VALUES ('171', '灰色', '27', '71');
INSERT INTO `shop_goods_attr` VALUES ('167', '5GHz', '25', '70');
INSERT INTO `shop_goods_attr` VALUES ('166', '2.4/5GHz', '25', '70');
INSERT INTO `shop_goods_attr` VALUES ('149', '粉色', '29', '67');
INSERT INTO `shop_goods_attr` VALUES ('150', '蓝色', '29', '67');
INSERT INTO `shop_goods_attr` VALUES ('151', '红色', '29', '67');
INSERT INTO `shop_goods_attr` VALUES ('152', '黄色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('153', '白色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('154', '灰色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('155', '土豪金', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('156', '绿色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('157', '粉色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('158', '蓝色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('159', '红色', '29', '68');
INSERT INTO `shop_goods_attr` VALUES ('160', '白色', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('161', '红黑', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('162', '黑色', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('163', '蓝色', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('164', '天蓝色', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('165', '黑色', '17', '69');
INSERT INTO `shop_goods_attr` VALUES ('207', '32G', '31', '43');
INSERT INTO `shop_goods_attr` VALUES ('206', '16G', '31', '43');
INSERT INTO `shop_goods_attr` VALUES ('204', '黄色', '4', '43');
INSERT INTO `shop_goods_attr` VALUES ('205', '白色', '4', '43');
INSERT INTO `shop_goods_attr` VALUES ('181', '全网通版', '2', '73');
INSERT INTO `shop_goods_attr` VALUES ('182', '移动/联动双4G版', '2', '73');
INSERT INTO `shop_goods_attr` VALUES ('183', '移动4G版', '2', '73');
INSERT INTO `shop_goods_attr` VALUES ('184', '联通4G版', '2', '73');
INSERT INTO `shop_goods_attr` VALUES ('185', '电信4G版', '2', '73');
INSERT INTO `shop_goods_attr` VALUES ('186', '白色', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('187', '金色', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('188', '灰色', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('189', '土豪金', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('190', '绿色', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('191', '粉色', '4', '73');
INSERT INTO `shop_goods_attr` VALUES ('192', '16G', '31', '73');
INSERT INTO `shop_goods_attr` VALUES ('193', '32G', '31', '73');
INSERT INTO `shop_goods_attr` VALUES ('194', '全网通版', '2', '72');
INSERT INTO `shop_goods_attr` VALUES ('195', '移动/联动双4G版', '2', '72');
INSERT INTO `shop_goods_attr` VALUES ('196', '移动4G版', '2', '72');
INSERT INTO `shop_goods_attr` VALUES ('197', '黄色', '4', '72');
INSERT INTO `shop_goods_attr` VALUES ('198', '白色', '4', '72');
INSERT INTO `shop_goods_attr` VALUES ('199', '金色', '4', '72');
INSERT INTO `shop_goods_attr` VALUES ('200', '16G', '31', '72');
INSERT INTO `shop_goods_attr` VALUES ('201', '32G', '31', '72');

-- ----------------------------
-- Table structure for `shop_goods_list`
-- ----------------------------
DROP TABLE IF EXISTS `shop_goods_list`;
CREATE TABLE `shop_goods_list` (
  `good_listid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attr_combine` char(50) NOT NULL DEFAULT '' COMMENT '组合属性ID',
  `good_number` char(30) NOT NULL DEFAULT '' COMMENT '货品货号',
  `good_price` int(6) unsigned NOT NULL DEFAULT '0' COMMENT '商品价格',
  `good_stock` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '库存量',
  `good_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属商品ID',
  `good_imgs` text COMMENT '对应的list的sku图片 多张',
  PRIMARY KEY (`good_listid`)
) ENGINE=MyISAM AUTO_INCREMENT=263 DEFAULT CHARSET=utf8 COMMENT='货品列表';

-- ----------------------------
-- Records of shop_goods_list
-- ----------------------------
INSERT INTO `shop_goods_list` VALUES ('1', '2,5,6', '', '78', '70', '24', './Uploads/product_imgs/2016-08-05/147035869672891.jpg,./Uploads/product_imgs/2016-08-05/147035869611238.jpg,./Uploads/product_imgs/2016-08-05/147035869616267.jpg,./Uploads/product_imgs/2016-08-05/147035869673457.jpg');
INSERT INTO `shop_goods_list` VALUES ('2', '2,5,7', '', '789789', '0', '24', './Uploads/product_imgs/2016-07-31/146997197269644.jpg,./Uploads/product_imgs/2016-07-31/146997197374585.jpg,./Uploads/product_imgs/2016-07-31/146997197382062.jpg,./Uploads/product_imgs/2016-07-31/146997197314548.jpg');
INSERT INTO `shop_goods_list` VALUES ('3', '2,5,8', '', '789', '34', '24', './Uploads/product_imgs/2016-07-31/146997199010925.jpg,./Uploads/product_imgs/2016-07-31/146997199084141.jpg,./Uploads/product_imgs/2016-07-31/146997199087140.jpg,./Uploads/product_imgs/2016-07-31/146997199073783.jpg');
INSERT INTO `shop_goods_list` VALUES ('4', '3,5,6', '', '7897', '0', '24', './Uploads/product_imgs/2016-07-31/146997195686522.jpg,./Uploads/product_imgs/2016-07-31/146997195786580.jpg,./Uploads/product_imgs/2016-07-31/146997195780944.jpg,./Uploads/product_imgs/2016-07-31/146997195750888.jpg');
INSERT INTO `shop_goods_list` VALUES ('5', '3,5,7', '', '897', '0', '24', './Uploads/product_imgs/2016-07-31/146997197269644.jpg,./Uploads/product_imgs/2016-07-31/146997197374585.jpg,./Uploads/product_imgs/2016-07-31/146997197382062.jpg,./Uploads/product_imgs/2016-07-31/146997197314548.jpg');
INSERT INTO `shop_goods_list` VALUES ('6', '3,5,8', '', '897', '0', '24', './Uploads/product_imgs/2016-07-31/146997199010925.jpg,./Uploads/product_imgs/2016-07-31/146997199084141.jpg,./Uploads/product_imgs/2016-07-31/146997199087140.jpg,./Uploads/product_imgs/2016-07-31/146997199073783.jpg');
INSERT INTO `shop_goods_list` VALUES ('7', '4,5,6', '', '78', '0', '24', './Uploads/product_imgs/2016-07-31/146997195686522.jpg,./Uploads/product_imgs/2016-07-31/146997195786580.jpg,./Uploads/product_imgs/2016-07-31/146997195780944.jpg,./Uploads/product_imgs/2016-07-31/146997195750888.jpg');
INSERT INTO `shop_goods_list` VALUES ('8', '4,5,7', '', '5', '20', '24', './Uploads/product_imgs/2016-07-31/146997197269644.jpg,./Uploads/product_imgs/2016-07-31/146997197374585.jpg,./Uploads/product_imgs/2016-07-31/146997197382062.jpg,./Uploads/product_imgs/2016-07-31/146997197314548.jpg');
INSERT INTO `shop_goods_list` VALUES ('9', '4,5,8', '', '4', '13', '24', './Uploads/product_imgs/2016-07-31/146997199010925.jpg,./Uploads/product_imgs/2016-07-31/146997199084141.jpg,./Uploads/product_imgs/2016-07-31/146997199087140.jpg,./Uploads/product_imgs/2016-07-31/146997199073783.jpg');
INSERT INTO `shop_goods_list` VALUES ('10', '9,10,12', '', '3', '21', '25', './Uploads/product_imgs/2016-07-31/146997224681441.jpg,./Uploads/product_imgs/2016-07-31/146997224641794.jpg,./Uploads/product_imgs/2016-07-31/146997224644812.jpg,./Uploads/product_imgs/2016-07-31/146997224643046.jpg');
INSERT INTO `shop_goods_list` VALUES ('11', '9,10,13', '', '72', '10', '25', './Uploads/product_imgs/2016-07-31/146997226246015.jpg,./Uploads/product_imgs/2016-07-31/146997226210749.jpg,./Uploads/product_imgs/2016-07-31/146997226267980.jpg,./Uploads/product_imgs/2016-07-31/146997226275736.jpg');
INSERT INTO `shop_goods_list` VALUES ('12', '9,10,14', '', '1', '0', '25', './Uploads/product_imgs/2016-07-31/146997227479518.jpg,./Uploads/product_imgs/2016-07-31/146997227455326.jpg,./Uploads/product_imgs/2016-07-31/146997227451605.jpg,./Uploads/product_imgs/2016-07-31/146997227462001.jpg');
INSERT INTO `shop_goods_list` VALUES ('13', '9,11,12', '', '6', '0', '25', './Uploads/product_imgs/2016-07-31/146997224681441.jpg,./Uploads/product_imgs/2016-07-31/146997224641794.jpg,./Uploads/product_imgs/2016-07-31/146997224644812.jpg,./Uploads/product_imgs/2016-07-31/146997224643046.jpg');
INSERT INTO `shop_goods_list` VALUES ('14', '9,11,13', '', '7', '23', '25', './Uploads/product_imgs/2016-07-31/146997226246015.jpg,./Uploads/product_imgs/2016-07-31/146997226210749.jpg,./Uploads/product_imgs/2016-07-31/146997226267980.jpg,./Uploads/product_imgs/2016-07-31/146997226275736.jpg');
INSERT INTO `shop_goods_list` VALUES ('15', '9,11,14', '', '8', '24', '25', './Uploads/product_imgs/2016-07-31/146997227479518.jpg,./Uploads/product_imgs/2016-07-31/146997227455326.jpg,./Uploads/product_imgs/2016-07-31/146997227451605.jpg,./Uploads/product_imgs/2016-07-31/146997227462001.jpg');
INSERT INTO `shop_goods_list` VALUES ('16', '15,16,17', '', '9', '33', '26', './Uploads/product_imgs/2016-07-31/146997345367488.jpg,./Uploads/product_imgs/2016-07-31/146997345322755.jpg,./Uploads/product_imgs/2016-07-31/146997345384707.jpg,./Uploads/product_imgs/2016-07-31/146997345386972.jpg');
INSERT INTO `shop_goods_list` VALUES ('17', '15,16,18', '', '10', '78', '26', './Uploads/product_imgs/2016-07-31/146997346240053.jpg,./Uploads/product_imgs/2016-07-31/146997346278590.jpg,./Uploads/product_imgs/2016-07-31/146997346260007.jpg,./Uploads/product_imgs/2016-07-31/146997346243228.jpg');
INSERT INTO `shop_goods_list` VALUES ('18', '19,20,21', '', '123', '6', '27', './Uploads/product_imgs/2016-08-04/147029223446436.jpg,./Uploads/product_imgs/2016-08-04/147029223485624.jpg,./Uploads/product_imgs/2016-08-04/147029223454777.jpg,./Uploads/product_imgs/2016-08-04/147029223452635.jpg');
INSERT INTO `shop_goods_list` VALUES ('19', '19,20,22', '', '123123', '75', '27', './Uploads/product_imgs/2016-08-01/147001227517377.jpg,./Uploads/product_imgs/2016-08-01/147001227536652.jpg,./Uploads/product_imgs/2016-08-01/147001227518346.jpg,./Uploads/product_imgs/2016-08-01/147001227543870.jpg');
INSERT INTO `shop_goods_list` VALUES ('20', '19,20,23', '', '1', '179', '27', './Uploads/product_imgs/2016-08-01/147001227517377.jpg,./Uploads/product_imgs/2016-08-01/147001227536652.jpg,./Uploads/product_imgs/2016-08-01/147001227518346.jpg,./Uploads/product_imgs/2016-08-01/147001227543870.jpg');
INSERT INTO `shop_goods_list` VALUES ('21', '24', '', '25', '3', '31', './Uploads/product_imgs/2016-08-05/147035861666137.jpg,./Uploads/product_imgs/2016-08-05/147035861644288.jpg,./Uploads/product_imgs/2016-08-05/147035861625812.jpg,./Uploads/product_imgs/2016-08-05/147035861640709.jpg');
INSERT INTO `shop_goods_list` VALUES ('22', '25', '', '123', '114', '31', './Uploads/product_imgs/2016-08-02/147013636585997.jpg,./Uploads/product_imgs/2016-08-02/147013636584242.jpg,./Uploads/product_imgs/2016-08-02/147013636537784.jpg,./Uploads/product_imgs/2016-08-02/147013636551783.jpg');
INSERT INTO `shop_goods_list` VALUES ('23', '26', '', '78', '76', '33', './Uploads/product_imgs/2016-08-08/147061911113023.jpg,./Uploads/product_imgs/2016-08-08/147061911196489.jpg,./Uploads/product_imgs/2016-08-08/147061911340989.jpg,./Uploads/product_imgs/2016-08-08/147061911394149.jpg');
INSERT INTO `shop_goods_list` VALUES ('24', '27', '', '12', '76', '34', './Uploads/product_imgs/2016-08-08/147061986278010.jpg,./Uploads/product_imgs/2016-08-08/147061986227075.jpg,./Uploads/product_imgs/2016-08-08/147061986218028.jpg,./Uploads/product_imgs/2016-08-08/147061986258729.jpg');
INSERT INTO `shop_goods_list` VALUES ('25', '28', '', '78', '2', '34', './Uploads/product_imgs/2016-08-08/147061986278010.jpg,./Uploads/product_imgs/2016-08-08/147061986227075.jpg,./Uploads/product_imgs/2016-08-08/147061986218028.jpg,./Uploads/product_imgs/2016-08-08/147061986258729.jpg');
INSERT INTO `shop_goods_list` VALUES ('26', '29', '', '12', '0', '34', './Uploads/product_imgs/2016-08-08/147061986278010.jpg,./Uploads/product_imgs/2016-08-08/147061986227075.jpg,./Uploads/product_imgs/2016-08-08/147061986218028.jpg,./Uploads/product_imgs/2016-08-08/147061986258729.jpg');
INSERT INTO `shop_goods_list` VALUES ('27', '30', '', '78', '788', '34', './Uploads/product_imgs/2016-08-08/147061986278010.jpg,./Uploads/product_imgs/2016-08-08/147061986227075.jpg,./Uploads/product_imgs/2016-08-08/147061986218028.jpg,./Uploads/product_imgs/2016-08-08/147061986258729.jpg');
INSERT INTO `shop_goods_list` VALUES ('28', '31', '', '123', '50', '35', './Uploads/product_imgs/2016-08-08/147062225937268.jpg,./Uploads/product_imgs/2016-08-08/147062225959053.jpg,./Uploads/product_imgs/2016-08-08/147062225934875.jpg,./Uploads/product_imgs/2016-08-08/147062225965211.jpg');
INSERT INTO `shop_goods_list` VALUES ('29', '32', '', '152', '0', '35', './Uploads/product_imgs/2016-08-08/147062225937268.jpg,./Uploads/product_imgs/2016-08-08/147062225959053.jpg,./Uploads/product_imgs/2016-08-08/147062225934875.jpg,./Uploads/product_imgs/2016-08-08/147062225965211.jpg');
INSERT INTO `shop_goods_list` VALUES ('30', '33', '', '78', '77', '36', './Uploads/product_imgs/2016-08-08/147062502025460.jpg,./Uploads/product_imgs/2016-08-08/147062502091054.jpg,./Uploads/product_imgs/2016-08-08/147062502082740.jpg,./Uploads/product_imgs/2016-08-08/147062502034570.jpg');
INSERT INTO `shop_goods_list` VALUES ('31', '34', '', '78', '78', '37', './Uploads/product_imgs/2016-08-08/147062540353261.jpg,./Uploads/product_imgs/2016-08-08/147062540359671.jpg,./Uploads/product_imgs/2016-08-08/147062540317366.jpg,./Uploads/product_imgs/2016-08-08/147062540313306.jpg');
INSERT INTO `shop_goods_list` VALUES ('32', '35,36,38', '', '789', '789', '38', './Uploads/product_imgs/2016-08-09/147070355292136.jpg,./Uploads/product_imgs/2016-08-09/147070355229132.jpg,./Uploads/product_imgs/2016-08-09/147070355240841.jpg,./Uploads/product_imgs/2016-08-09/147070355250932.jpg');
INSERT INTO `shop_goods_list` VALUES ('33', '35,36,39', '', '123', '456', '38', './Uploads/product_imgs/2016-08-09/147070355292136.jpg,./Uploads/product_imgs/2016-08-09/147070355229132.jpg,./Uploads/product_imgs/2016-08-09/147070355240841.jpg,./Uploads/product_imgs/2016-08-09/147070355250932.jpg');
INSERT INTO `shop_goods_list` VALUES ('34', '35,37,38', '', '12378', '10', '38', './Uploads/product_imgs/2016-08-09/147070355292136.jpg,./Uploads/product_imgs/2016-08-09/147070355229132.jpg,./Uploads/product_imgs/2016-08-09/147070355240841.jpg,./Uploads/product_imgs/2016-08-09/147070355250932.jpg');
INSERT INTO `shop_goods_list` VALUES ('35', '35,37,39', '', '199', '0', '38', './Uploads/product_imgs/2016-08-09/147070355292136.jpg,./Uploads/product_imgs/2016-08-09/147070355229132.jpg,./Uploads/product_imgs/2016-08-09/147070355240841.jpg,./Uploads/product_imgs/2016-08-09/147070355250932.jpg');
INSERT INTO `shop_goods_list` VALUES ('36', '40,41,42', '', '699', '789', '39', './Uploads/product_imgs/2016-08-09/147070582219434.jpg,./Uploads/product_imgs/2016-08-09/147070582239888.jpg,./Uploads/product_imgs/2016-08-09/147070582210549.jpg,./Uploads/product_imgs/2016-08-09/147070582292532.jpg');
INSERT INTO `shop_goods_list` VALUES ('37', '40,41,43', '', '1599', '798', '39', './Uploads/product_imgs/2016-08-09/147070582219434.jpg,./Uploads/product_imgs/2016-08-09/147070582239888.jpg,./Uploads/product_imgs/2016-08-09/147070582210549.jpg,./Uploads/product_imgs/2016-08-09/147070582292532.jpg');
INSERT INTO `shop_goods_list` VALUES ('38', '40,41,44', '', '1699', '456', '39', './Uploads/product_imgs/2016-08-09/147070582219434.jpg,./Uploads/product_imgs/2016-08-09/147070582239888.jpg,./Uploads/product_imgs/2016-08-09/147070582210549.jpg,./Uploads/product_imgs/2016-08-09/147070582292532.jpg');
INSERT INTO `shop_goods_list` VALUES ('39', '45,46,47', '', '799', '0', '40', './Uploads/product_imgs/2016-08-09/147070580263009.jpg,./Uploads/product_imgs/2016-08-09/147070580254925.jpg,./Uploads/product_imgs/2016-08-09/147070580256266.jpg,./Uploads/product_imgs/2016-08-09/147070580240042.jpg');
INSERT INTO `shop_goods_list` VALUES ('40', '45,46,48', '', '599', '123', '40', './Uploads/product_imgs/2016-08-09/147070580263009.jpg,./Uploads/product_imgs/2016-08-09/147070580254925.jpg,./Uploads/product_imgs/2016-08-09/147070580256266.jpg,./Uploads/product_imgs/2016-08-09/147070580240042.jpg');
INSERT INTO `shop_goods_list` VALUES ('41', '45,46,49', '', '699', '123', '40', './Uploads/product_imgs/2016-08-09/147070580263009.jpg,./Uploads/product_imgs/2016-08-09/147070580254925.jpg,./Uploads/product_imgs/2016-08-09/147070580256266.jpg,./Uploads/product_imgs/2016-08-09/147070580240042.jpg');
INSERT INTO `shop_goods_list` VALUES ('42', '50,52,53', '', '123', '121', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('43', '50,52,54', '', '123', '23', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('44', '50,52,55', '', '231', '343', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('45', '50,52,56', '', '23123', '0', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('46', '51,52,53', '', '123', '1229', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('47', '51,52,54', '', '324', '0', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('48', '51,52,55', '', '8789', '79', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('49', '51,52,56', '', '789', '0', '41', './Uploads/product_imgs/2016-08-09/147070578175788.jpg,./Uploads/product_imgs/2016-08-09/147070578147238.jpg,./Uploads/product_imgs/2016-08-09/147070578123260.jpg,./Uploads/product_imgs/2016-08-09/147070578244428.jpg');
INSERT INTO `shop_goods_list` VALUES ('50', '57,60,62', '', '123', '0', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('51', '57,61,62', '', '1231', '230', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('52', '58,60,62', '', '231', '321', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('53', '58,61,62', '', '231', '23123', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('54', '59,60,62', '', '13', '2', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('55', '59,61,62', '', '789', '0', '42', './Uploads/product_imgs/2016-08-09/147070675974022.jpg,./Uploads/product_imgs/2016-08-09/147070676083001.jpg,./Uploads/product_imgs/2016-08-09/147070676043090.jpg,./Uploads/product_imgs/2016-08-09/147070676028305.jpg');
INSERT INTO `shop_goods_list` VALUES ('253', '196,199,201', '', '4', '23423', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('249', '196,197,201', '', '234', '23', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('250', '196,198,200', '', '234', '42', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('251', '196,198,201', '', '2342', '3423', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('260', '203,205,206', '', '78', '45', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('189', '182,186,193', '', '2342', '34', '73', './Uploads/product_imgs/2017-02-17/148729656554189.jpg,./Uploads/product_imgs/2017-02-17/148729656521683.jpg,./Uploads/product_imgs/2017-02-17/148729656537084.jpg,./Uploads/product_imgs/2017-02-17/148729656582770.jpg');
INSERT INTO `shop_goods_list` VALUES ('185', '181,190,193', '', '4234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('186', '181,191,192', '', '234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('187', '181,191,193', '', '234', '2423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('255', '202,204,207', '', '2323', '345', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('256', '202,205,206', '', '234', '65', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('257', '202,205,207', '', '234', '6654', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('258', '203,204,206', '', '475', '6', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('259', '203,204,207', '', '878', '45', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('60', '69', '', '78', '76', '44', './Uploads/product_imgs/2016-08-09/147070958938721.jpg,./Uploads/product_imgs/2016-08-09/147070959145590.jpg,./Uploads/product_imgs/2016-08-09/147070959278551.jpg,./Uploads/product_imgs/2016-08-09/147070959481224.jpg');
INSERT INTO `shop_goods_list` VALUES ('61', '70', '', '787', '87', '44', './Uploads/product_imgs/2016-08-09/147070958938721.jpg,./Uploads/product_imgs/2016-08-09/147070959145590.jpg,./Uploads/product_imgs/2016-08-09/147070959278551.jpg,./Uploads/product_imgs/2016-08-09/147070959481224.jpg');
INSERT INTO `shop_goods_list` VALUES ('62', '71', '', '88', '0', '44', './Uploads/product_imgs/2016-08-09/147070958938721.jpg,./Uploads/product_imgs/2016-08-09/147070959145590.jpg,./Uploads/product_imgs/2016-08-09/147070959278551.jpg,./Uploads/product_imgs/2016-08-09/147070959481224.jpg');
INSERT INTO `shop_goods_list` VALUES ('63', '72', '', '78', '78', '45', './Uploads/product_imgs/2016-08-09/147071044481419.jpg,./Uploads/product_imgs/2016-08-09/147071044450649.jpg,./Uploads/product_imgs/2016-08-09/147071044424960.jpg,./Uploads/product_imgs/2016-08-09/147071044442192.jpg');
INSERT INTO `shop_goods_list` VALUES ('64', '73', '', '78', '78', '45', './Uploads/product_imgs/2016-08-09/147071044481419.jpg,./Uploads/product_imgs/2016-08-09/147071044450649.jpg,./Uploads/product_imgs/2016-08-09/147071044424960.jpg,./Uploads/product_imgs/2016-08-09/147071044442192.jpg');
INSERT INTO `shop_goods_list` VALUES ('65', '74', '', '78', '0', '45', './Uploads/product_imgs/2016-08-09/147071044481419.jpg,./Uploads/product_imgs/2016-08-09/147071044450649.jpg,./Uploads/product_imgs/2016-08-09/147071044424960.jpg,./Uploads/product_imgs/2016-08-09/147071044442192.jpg');
INSERT INTO `shop_goods_list` VALUES ('66', '75', '', '123', '4', '46', './Uploads/product_imgs/2016-08-09/147071063212850.jpg,./Uploads/product_imgs/2016-08-09/147071063291430.jpg,./Uploads/product_imgs/2016-08-09/147071063242472.jpg,./Uploads/product_imgs/2016-08-09/147071063277348.jpg');
INSERT INTO `shop_goods_list` VALUES ('67', '76', '', '456', '456', '46', './Uploads/product_imgs/2016-08-09/147071063212850.jpg,./Uploads/product_imgs/2016-08-09/147071063291430.jpg,./Uploads/product_imgs/2016-08-09/147071063242472.jpg,./Uploads/product_imgs/2016-08-09/147071063277348.jpg');
INSERT INTO `shop_goods_list` VALUES ('68', '77', '', '4564', '564', '46', './Uploads/product_imgs/2016-08-09/147071063212850.jpg,./Uploads/product_imgs/2016-08-09/147071063291430.jpg,./Uploads/product_imgs/2016-08-09/147071063242472.jpg,./Uploads/product_imgs/2016-08-09/147071063277348.jpg');
INSERT INTO `shop_goods_list` VALUES ('69', '78', '', '56', '0', '46', './Uploads/product_imgs/2016-08-09/147071063212850.jpg,./Uploads/product_imgs/2016-08-09/147071063291430.jpg,./Uploads/product_imgs/2016-08-09/147071063242472.jpg,./Uploads/product_imgs/2016-08-09/147071063277348.jpg');
INSERT INTO `shop_goods_list` VALUES ('70', '79', '', '123', '123', '47', './Uploads/product_imgs/2016-08-09/147071156148534.jpg,./Uploads/product_imgs/2016-08-09/147071156186503.jpg,./Uploads/product_imgs/2016-08-09/147071156161984.jpg,./Uploads/product_imgs/2016-08-09/147071156160578.jpg');
INSERT INTO `shop_goods_list` VALUES ('71', '80', '', '33', '1231', '47', './Uploads/product_imgs/2016-08-09/147071156148534.jpg,./Uploads/product_imgs/2016-08-09/147071156186503.jpg,./Uploads/product_imgs/2016-08-09/147071156161984.jpg,./Uploads/product_imgs/2016-08-09/147071156160578.jpg');
INSERT INTO `shop_goods_list` VALUES ('72', '81', '', '231', '32', '47', './Uploads/product_imgs/2016-08-09/147071156148534.jpg,./Uploads/product_imgs/2016-08-09/147071156186503.jpg,./Uploads/product_imgs/2016-08-09/147071156161984.jpg,./Uploads/product_imgs/2016-08-09/147071156160578.jpg');
INSERT INTO `shop_goods_list` VALUES ('73', '82', '', '123', '123', '48', './Uploads/product_imgs/2016-08-09/147071197678521.jpg,./Uploads/product_imgs/2016-08-09/147071197641102.jpg,./Uploads/product_imgs/2016-08-09/147071197614649.jpg,./Uploads/product_imgs/2016-08-09/147071197664681.jpg');
INSERT INTO `shop_goods_list` VALUES ('74', '83', '', '222', '123', '48', './Uploads/product_imgs/2016-08-09/147071197678521.jpg,./Uploads/product_imgs/2016-08-09/147071197641102.jpg,./Uploads/product_imgs/2016-08-09/147071197614649.jpg,./Uploads/product_imgs/2016-08-09/147071197664681.jpg');
INSERT INTO `shop_goods_list` VALUES ('75', '84', '', '132', '2', '48', './Uploads/product_imgs/2016-08-09/147071197678521.jpg,./Uploads/product_imgs/2016-08-09/147071197641102.jpg,./Uploads/product_imgs/2016-08-09/147071197614649.jpg,./Uploads/product_imgs/2016-08-09/147071197664681.jpg');
INSERT INTO `shop_goods_list` VALUES ('76', '85', '', '78', '78', '49', './Uploads/product_imgs/2016-08-09/147071223697879.jpg,./Uploads/product_imgs/2016-08-09/147071223628327.jpg,./Uploads/product_imgs/2016-08-09/147071223643412.jpg,./Uploads/product_imgs/2016-08-09/147071223693995.jpg');
INSERT INTO `shop_goods_list` VALUES ('77', '86', '', '78', '0', '49', './Uploads/product_imgs/2016-08-09/147071223697879.jpg,./Uploads/product_imgs/2016-08-09/147071223628327.jpg,./Uploads/product_imgs/2016-08-09/147071223643412.jpg,./Uploads/product_imgs/2016-08-09/147071223693995.jpg');
INSERT INTO `shop_goods_list` VALUES ('78', '87', '', '78', '78', '49', './Uploads/product_imgs/2016-08-09/147071223697879.jpg,./Uploads/product_imgs/2016-08-09/147071223628327.jpg,./Uploads/product_imgs/2016-08-09/147071223643412.jpg,./Uploads/product_imgs/2016-08-09/147071223693995.jpg');
INSERT INTO `shop_goods_list` VALUES ('79', '88', '', '56', '0', '49', './Uploads/product_imgs/2016-08-09/147071223697879.jpg,./Uploads/product_imgs/2016-08-09/147071223628327.jpg,./Uploads/product_imgs/2016-08-09/147071223643412.jpg,./Uploads/product_imgs/2016-08-09/147071223693995.jpg');
INSERT INTO `shop_goods_list` VALUES ('80', '89', '', '78', '0', '50', './Uploads/product_imgs/2016-08-09/147071243290051.jpg,./Uploads/product_imgs/2016-08-09/147071243225498.jpg,./Uploads/product_imgs/2016-08-09/147071243291592.jpg,./Uploads/product_imgs/2016-08-09/147071243286574.jpg');
INSERT INTO `shop_goods_list` VALUES ('81', '90', '', '78', '0', '50', './Uploads/product_imgs/2016-08-09/147071243290051.jpg,./Uploads/product_imgs/2016-08-09/147071243225498.jpg,./Uploads/product_imgs/2016-08-09/147071243291592.jpg,./Uploads/product_imgs/2016-08-09/147071243286574.jpg');
INSERT INTO `shop_goods_list` VALUES ('82', '91', '', '78', '56', '50', './Uploads/product_imgs/2016-08-09/147071243290051.jpg,./Uploads/product_imgs/2016-08-09/147071243225498.jpg,./Uploads/product_imgs/2016-08-09/147071243291592.jpg,./Uploads/product_imgs/2016-08-09/147071243286574.jpg');
INSERT INTO `shop_goods_list` VALUES ('83', '92', '', '34', '0', '51', './Uploads/product_imgs/2016-08-09/147071259568430.jpg,./Uploads/product_imgs/2016-08-09/147071259598799.jpg,./Uploads/product_imgs/2016-08-09/147071259511029.jpg,./Uploads/product_imgs/2016-08-09/147071259566359.jpg');
INSERT INTO `shop_goods_list` VALUES ('84', '93', '', '78', '250', '51', './Uploads/product_imgs/2016-08-09/147071259568430.jpg,./Uploads/product_imgs/2016-08-09/147071259598799.jpg,./Uploads/product_imgs/2016-08-09/147071259511029.jpg,./Uploads/product_imgs/2016-08-09/147071259566359.jpg');
INSERT INTO `shop_goods_list` VALUES ('85', '94', '', '48', '65', '51', './Uploads/product_imgs/2016-08-09/147071259568430.jpg,./Uploads/product_imgs/2016-08-09/147071259598799.jpg,./Uploads/product_imgs/2016-08-09/147071259511029.jpg,./Uploads/product_imgs/2016-08-09/147071259566359.jpg');
INSERT INTO `shop_goods_list` VALUES ('86', '95', '', '789', '0', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('87', '96', '', '789', '0', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('88', '97', '', '789', '0', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('89', '98', '', '555', '5555', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('90', '99', '', '21231', '21', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('91', '100', '', '231', '213', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('92', '101', '', '2456', '0', '52', './Uploads/product_imgs/2016-08-09/147071275771221.jpg,./Uploads/product_imgs/2016-08-09/147071275754217.jpg,./Uploads/product_imgs/2016-08-09/147071275750207.jpg,./Uploads/product_imgs/2016-08-09/147071275733115.jpg');
INSERT INTO `shop_goods_list` VALUES ('93', '102', '', '123', '123', '53', './Uploads/product_imgs/2016-08-09/147075768179395.jpg,./Uploads/product_imgs/2016-08-09/147075768194765.jpg,./Uploads/product_imgs/2016-08-09/147075768190164.jpg,./Uploads/product_imgs/2016-08-09/147075768136367.jpg');
INSERT INTO `shop_goods_list` VALUES ('94', '103', '', '123', '1231', '53', './Uploads/product_imgs/2016-08-09/147075768179395.jpg,./Uploads/product_imgs/2016-08-09/147075768194765.jpg,./Uploads/product_imgs/2016-08-09/147075768190164.jpg,./Uploads/product_imgs/2016-08-09/147075768136367.jpg');
INSERT INTO `shop_goods_list` VALUES ('95', '102', '', '321', '123', '53', './Uploads/product_imgs/2016-08-09/147075768179395.jpg,./Uploads/product_imgs/2016-08-09/147075768194765.jpg,./Uploads/product_imgs/2016-08-09/147075768190164.jpg,./Uploads/product_imgs/2016-08-09/147075768136367.jpg');
INSERT INTO `shop_goods_list` VALUES ('97', '106', '', '78', '77', '54', './Uploads/product_imgs/2016-08-09/147075786810118.jpg,./Uploads/product_imgs/2016-08-09/147075786875061.jpg,./Uploads/product_imgs/2016-08-09/147075786814309.jpg,./Uploads/product_imgs/2016-08-09/147075786830475.jpg');
INSERT INTO `shop_goods_list` VALUES ('99', '108', '', '434', '59', '55', './Uploads/product_imgs/2016-08-09/147075828658493.jpg,./Uploads/product_imgs/2016-08-09/147075828630964.jpg,./Uploads/product_imgs/2016-08-09/147075828673473.png,./Uploads/product_imgs/2016-08-09/147075828991581.jpg');
INSERT INTO `shop_goods_list` VALUES ('100', '109', '', '78', '50', '55', './Uploads/product_imgs/2016-08-09/147075828658493.jpg,./Uploads/product_imgs/2016-08-09/147075828630964.jpg,./Uploads/product_imgs/2016-08-09/147075828673473.png,./Uploads/product_imgs/2016-08-09/147075828991581.jpg');
INSERT INTO `shop_goods_list` VALUES ('101', '110', '', '59', '456', '56', './Uploads/product_imgs/2016-08-10/147075850537929.jpg,./Uploads/product_imgs/2016-08-10/147075850594369.jpg,./Uploads/product_imgs/2016-08-10/147075850550220.jpg,./Uploads/product_imgs/2016-08-10/147075850579864.png');
INSERT INTO `shop_goods_list` VALUES ('102', '111', '', '456', '456', '56', './Uploads/product_imgs/2016-08-10/147075850537929.jpg,./Uploads/product_imgs/2016-08-10/147075850594369.jpg,./Uploads/product_imgs/2016-08-10/147075850550220.jpg,./Uploads/product_imgs/2016-08-10/147075850579864.png');
INSERT INTO `shop_goods_list` VALUES ('103', '112', '', '456', '4564', '56', './Uploads/product_imgs/2016-08-10/147075850537929.jpg,./Uploads/product_imgs/2016-08-10/147075850594369.jpg,./Uploads/product_imgs/2016-08-10/147075850550220.jpg,./Uploads/product_imgs/2016-08-10/147075850579864.png');
INSERT INTO `shop_goods_list` VALUES ('104', '113', '', '564', '231', '56', './Uploads/product_imgs/2016-08-10/147075850537929.jpg,./Uploads/product_imgs/2016-08-10/147075850594369.jpg,./Uploads/product_imgs/2016-08-10/147075850550220.jpg,./Uploads/product_imgs/2016-08-10/147075850579864.png');
INSERT INTO `shop_goods_list` VALUES ('105', '114', '', '333', '7', '57', './Uploads/product_imgs/2017-02-12/148688321234125.jpg,./Uploads/product_imgs/2017-02-12/148688321241138.jpg,./Uploads/product_imgs/2017-02-12/148688321261542.jpg,./Uploads/product_imgs/2017-02-12/148688321238347.jpg');
INSERT INTO `shop_goods_list` VALUES ('106', '115', '', '222', '12', '57', './Uploads/product_imgs/2016-08-10/147079276027377.jpg,./Uploads/product_imgs/2016-08-10/147079276081553.jpg,./Uploads/product_imgs/2016-08-10/147079276052662.jpg,./Uploads/product_imgs/2016-08-10/147079276094473.jpg');
INSERT INTO `shop_goods_list` VALUES ('107', '116', '', '785', '56', '57', './Uploads/product_imgs/2016-08-10/147079276027377.jpg,./Uploads/product_imgs/2016-08-10/147079276081553.jpg,./Uploads/product_imgs/2016-08-10/147079276052662.jpg,./Uploads/product_imgs/2016-08-10/147079276094473.jpg');
INSERT INTO `shop_goods_list` VALUES ('108', '117', '', '456', '0', '57', './Uploads/product_imgs/2016-08-10/147079276027377.jpg,./Uploads/product_imgs/2016-08-10/147079276081553.jpg,./Uploads/product_imgs/2016-08-10/147079276052662.jpg,./Uploads/product_imgs/2016-08-10/147079276094473.jpg');
INSERT INTO `shop_goods_list` VALUES ('109', '118', '', '3434343', '789', '58', './Uploads/product_imgs/2016-08-10/147079309581790.jpg,./Uploads/product_imgs/2016-08-10/147079309524971.jpg,./Uploads/product_imgs/2016-08-10/147079309565848.jpg,./Uploads/product_imgs/2016-08-10/147079309529094.jpg');
INSERT INTO `shop_goods_list` VALUES ('110', '119', '', '222', '2', '58', './Uploads/product_imgs/2016-08-10/147079309581790.jpg,./Uploads/product_imgs/2016-08-10/147079309524971.jpg,./Uploads/product_imgs/2016-08-10/147079309565848.jpg,./Uploads/product_imgs/2016-08-10/147079309529094.jpg');
INSERT INTO `shop_goods_list` VALUES ('111', '120', '', '232323', '22', '58', './Uploads/product_imgs/2016-08-10/147079309581790.jpg,./Uploads/product_imgs/2016-08-10/147079309524971.jpg,./Uploads/product_imgs/2016-08-10/147079309565848.jpg,./Uploads/product_imgs/2016-08-10/147079309529094.jpg');
INSERT INTO `shop_goods_list` VALUES ('112', '121', '', '465', '456', '59', './Uploads/product_imgs/2016-08-10/147079331752105.jpg,./Uploads/product_imgs/2016-08-10/147079331718050.jpg,./Uploads/product_imgs/2016-08-10/147079331728413.jpg,./Uploads/product_imgs/2016-08-10/147079331793432.jpg');
INSERT INTO `shop_goods_list` VALUES ('113', '122', '', '4564', '564', '59', './Uploads/product_imgs/2016-08-10/147079331752105.jpg,./Uploads/product_imgs/2016-08-10/147079331718050.jpg,./Uploads/product_imgs/2016-08-10/147079331728413.jpg,./Uploads/product_imgs/2016-08-10/147079331793432.jpg');
INSERT INTO `shop_goods_list` VALUES ('114', '123', '', '564', '564', '59', './Uploads/product_imgs/2016-08-10/147079331752105.jpg,./Uploads/product_imgs/2016-08-10/147079331718050.jpg,./Uploads/product_imgs/2016-08-10/147079331728413.jpg,./Uploads/product_imgs/2016-08-10/147079331793432.jpg');
INSERT INTO `shop_goods_list` VALUES ('115', '124', '', '56', '0', '59', './Uploads/product_imgs/2016-08-10/147079331752105.jpg,./Uploads/product_imgs/2016-08-10/147079331718050.jpg,./Uploads/product_imgs/2016-08-10/147079331728413.jpg,./Uploads/product_imgs/2016-08-10/147079331793432.jpg');
INSERT INTO `shop_goods_list` VALUES ('116', '125', '', '789798879', '789', '60', './Uploads/product_imgs/2017-02-12/148687764743519.jpg,./Uploads/product_imgs/2017-02-12/148687764780633.jpg,./Uploads/product_imgs/2017-02-12/148687764754505.jpg,./Uploads/product_imgs/2017-02-12/148687764763143.jpg');
INSERT INTO `shop_goods_list` VALUES ('117', '126', '', '7897', '897', '60', './Uploads/product_imgs/2017-02-12/148687764743519.jpg,./Uploads/product_imgs/2017-02-12/148687764780633.jpg,./Uploads/product_imgs/2017-02-12/148687764754505.jpg,./Uploads/product_imgs/2017-02-12/148687764763143.jpg');
INSERT INTO `shop_goods_list` VALUES ('118', '127', '', '897', '2', '60', './Uploads/product_imgs/2017-02-12/148687764743519.jpg,./Uploads/product_imgs/2017-02-12/148687764780633.jpg,./Uploads/product_imgs/2017-02-12/148687764754505.jpg,./Uploads/product_imgs/2017-02-12/148687764763143.jpg');
INSERT INTO `shop_goods_list` VALUES ('131', '140', '', '231', '0', '65', './Uploads/product_imgs/2016-08-10/147079825790551.jpg,./Uploads/product_imgs/2016-08-10/147079825765398.jpg,./Uploads/product_imgs/2016-08-10/147079825760787.jpg,./Uploads/product_imgs/2016-08-10/147079825785476.jpg');
INSERT INTO `shop_goods_list` VALUES ('128', '137', '', '434', '123', '65', './Uploads/product_imgs/2016-08-10/147079825790551.jpg,./Uploads/product_imgs/2016-08-10/147079825765398.jpg,./Uploads/product_imgs/2016-08-10/147079825760787.jpg,./Uploads/product_imgs/2016-08-10/147079825785476.jpg');
INSERT INTO `shop_goods_list` VALUES ('129', '138', '', '123', '1231', '65', './Uploads/product_imgs/2016-08-10/147079825790551.jpg,./Uploads/product_imgs/2016-08-10/147079825765398.jpg,./Uploads/product_imgs/2016-08-10/147079825760787.jpg,./Uploads/product_imgs/2016-08-10/147079825785476.jpg');
INSERT INTO `shop_goods_list` VALUES ('130', '139', '', '231', '231', '65', './Uploads/product_imgs/2016-08-10/147079825790551.jpg,./Uploads/product_imgs/2016-08-10/147079825765398.jpg,./Uploads/product_imgs/2016-08-10/147079825760787.jpg,./Uploads/product_imgs/2016-08-10/147079825785476.jpg');
INSERT INTO `shop_goods_list` VALUES ('121', '130', '', '789', '12', '62', './Uploads/product_imgs/2016-08-10/147079491512716.jpg,./Uploads/product_imgs/2016-08-10/147079491540459.jpg,./Uploads/product_imgs/2016-08-10/147079491531189.jpg,./Uploads/product_imgs/2016-08-10/147079491643134.jpg');
INSERT INTO `shop_goods_list` VALUES ('122', '131', '', '456', '11', '62', './Uploads/product_imgs/2016-08-10/147079491512716.jpg,./Uploads/product_imgs/2016-08-10/147079491540459.jpg,./Uploads/product_imgs/2016-08-10/147079491531189.jpg,./Uploads/product_imgs/2016-08-10/147079491643134.jpg');
INSERT INTO `shop_goods_list` VALUES ('194', '182,189,192', '', '4324', '422', '73', null);
INSERT INTO `shop_goods_list` VALUES ('188', '182,186,192', '', '4', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('252', '196,199,200', '', '323', '234', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('182', '181,189,192', '', '234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('176', '181,186,192', '', '234', '432', '73', null);
INSERT INTO `shop_goods_list` VALUES ('246', '195,199,200', '', '4234', '23423', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('241', '194,199,201', '', '344', '65535', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('209', '183,190,193', '', '43', '324', '73', null);
INSERT INTO `shop_goods_list` VALUES ('210', '183,191,192', '', '423', '342', '73', null);
INSERT INTO `shop_goods_list` VALUES ('159', '168', '', '12', '0', '71', './Uploads/product_imgs/2017-02-15/148712444394034.jpg,./Uploads/product_imgs/2017-02-15/148712444392441.jpg,./Uploads/product_imgs/2017-02-15/148712444363033.jpg,./Uploads/product_imgs/2017-02-15/148712444330019.jpg');
INSERT INTO `shop_goods_list` VALUES ('160', '169', '', '11', '7', '71', './Uploads/product_imgs/2017-02-15/148712444394034.jpg,./Uploads/product_imgs/2017-02-15/148712444392441.jpg,./Uploads/product_imgs/2017-02-15/148712444363033.jpg,./Uploads/product_imgs/2017-02-15/148712444330019.jpg');
INSERT INTO `shop_goods_list` VALUES ('161', '170', '', '1', '5', '71', './Uploads/product_imgs/2017-02-15/148712444394034.jpg,./Uploads/product_imgs/2017-02-15/148712444392441.jpg,./Uploads/product_imgs/2017-02-15/148712444363033.jpg,./Uploads/product_imgs/2017-02-15/148712444330019.jpg');
INSERT INTO `shop_goods_list` VALUES ('162', '171', '', '2', '34', '71', './Uploads/product_imgs/2017-02-15/148712444394034.jpg,./Uploads/product_imgs/2017-02-15/148712444392441.jpg,./Uploads/product_imgs/2017-02-15/148712444363033.jpg,./Uploads/product_imgs/2017-02-15/148712444330019.jpg');
INSERT INTO `shop_goods_list` VALUES ('163', '172', '', '3', '2', '71', './Uploads/product_imgs/2017-02-15/148712444394034.jpg,./Uploads/product_imgs/2017-02-15/148712444392441.jpg,./Uploads/product_imgs/2017-02-15/148712444363033.jpg,./Uploads/product_imgs/2017-02-15/148712444330019.jpg');
INSERT INTO `shop_goods_list` VALUES ('211', '183,191,193', '', '42', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('212', '184,186,192', '', '4', '2342', '73', null);
INSERT INTO `shop_goods_list` VALUES ('190', '182,187,192', '', '234', '2423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('191', '182,187,193', '', '4234', '4', '73', null);
INSERT INTO `shop_goods_list` VALUES ('192', '182,188,192', '', '24', '32', '73', null);
INSERT INTO `shop_goods_list` VALUES ('193', '182,188,193', '', '234', '422', '73', null);
INSERT INTO `shop_goods_list` VALUES ('157', '166', '', '12', '22', '70', './Uploads/product_imgs/2017-02-15/148712373660429.jpg,./Uploads/product_imgs/2017-02-15/148712373699071.jpg,./Uploads/product_imgs/2017-02-15/148712373635529.jpg,./Uploads/product_imgs/2017-02-15/148712373649276.jpg');
INSERT INTO `shop_goods_list` VALUES ('158', '167', '', '11', '333', '70', './Uploads/product_imgs/2017-02-15/148712373660429.jpg,./Uploads/product_imgs/2017-02-15/148712373699071.jpg,./Uploads/product_imgs/2017-02-15/148712373635529.jpg,./Uploads/product_imgs/2017-02-15/148712373649276.jpg');
INSERT INTO `shop_goods_list` VALUES ('140', '149', '', '123', '4343', '67', './Uploads/product_imgs/2016-08-10/147079862779441.jpg,./Uploads/product_imgs/2016-08-10/147079862737597.jpg,./Uploads/product_imgs/2016-08-10/147079862782051.jpg,./Uploads/product_imgs/2016-08-10/147079862743568.jpg');
INSERT INTO `shop_goods_list` VALUES ('141', '150', '', '1234456', '789', '67', './Uploads/product_imgs/2016-08-10/147079862779441.jpg,./Uploads/product_imgs/2016-08-10/147079862737597.jpg,./Uploads/product_imgs/2016-08-10/147079862782051.jpg,./Uploads/product_imgs/2016-08-10/147079862743568.jpg');
INSERT INTO `shop_goods_list` VALUES ('142', '151', '', '123', '0', '67', './Uploads/product_imgs/2016-08-10/147079862779441.jpg,./Uploads/product_imgs/2016-08-10/147079862737597.jpg,./Uploads/product_imgs/2016-08-10/147079862782051.jpg,./Uploads/product_imgs/2016-08-10/147079862743568.jpg');
INSERT INTO `shop_goods_list` VALUES ('262', '208', '', '324', '434', '68', './Uploads/product_imgs/2017-02-17/148730615030286.jpg,./Uploads/product_imgs/2017-02-17/148730615081045.jpg,./Uploads/product_imgs/2017-02-17/148730615034697.jpg,./Uploads/product_imgs/2017-02-17/148730615021184.jpg');
INSERT INTO `shop_goods_list` VALUES ('151', '160', '', '1', '22', '69', './Uploads/product_imgs/2017-02-11/148681399423117.jpg,./Uploads/product_imgs/2017-02-11/148681403567483.jpg,./Uploads/product_imgs/2017-02-11/148681403520513.jpg,./Uploads/product_imgs/2017-02-11/148681403564420.jpg');
INSERT INTO `shop_goods_list` VALUES ('152', '161', '', '2', '32323', '69', './Uploads/product_imgs/2017-02-11/148681399423117.jpg,./Uploads/product_imgs/2017-02-11/148681403567483.jpg,./Uploads/product_imgs/2017-02-11/148681403520513.jpg,./Uploads/product_imgs/2017-02-11/148681403564420.jpg');
INSERT INTO `shop_goods_list` VALUES ('153', '162', '', '3', '23', '69', './Uploads/product_imgs/2017-02-11/148681399423117.jpg,./Uploads/product_imgs/2017-02-11/148681403567483.jpg,./Uploads/product_imgs/2017-02-11/148681403520513.jpg,./Uploads/product_imgs/2017-02-11/148681403564420.jpg');
INSERT INTO `shop_goods_list` VALUES ('154', '163', '', '4', '323', '69', './Uploads/product_imgs/2017-02-11/148681399423117.jpg,./Uploads/product_imgs/2017-02-11/148681403567483.jpg,./Uploads/product_imgs/2017-02-11/148681403520513.jpg,./Uploads/product_imgs/2017-02-11/148681403564420.jpg');
INSERT INTO `shop_goods_list` VALUES ('155', '164', '', '5', '2323', '69', '');
INSERT INTO `shop_goods_list` VALUES ('156', '162', '', '6', '23', '69', './Uploads/product_imgs/2017-02-11/148681399423117.jpg,./Uploads/product_imgs/2017-02-11/148681403567483.jpg,./Uploads/product_imgs/2017-02-11/148681403520513.jpg,./Uploads/product_imgs/2017-02-11/148681403564420.jpg');
INSERT INTO `shop_goods_list` VALUES ('183', '181,189,193', '', '234', '243', '73', null);
INSERT INTO `shop_goods_list` VALUES ('184', '181,190,192', '', '23423', '4', '73', null);
INSERT INTO `shop_goods_list` VALUES ('247', '195,199,201', '', '234', '23423', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('248', '196,197,200', '', '423', '4234', '72', './Uploads/product_imgs/2017-02-17/148729760566195.jpg,./Uploads/product_imgs/2017-02-17/148729760591068.jpg,./Uploads/product_imgs/2017-02-17/148729760532294.jpg,./Uploads/product_imgs/2017-02-17/148729760588456.jpg');
INSERT INTO `shop_goods_list` VALUES ('177', '181,186,193', '', '234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('178', '181,187,192', '', '234', '34234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('179', '181,187,193', '', '234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('180', '181,188,192', '', '3423', '4', '73', null);
INSERT INTO `shop_goods_list` VALUES ('181', '181,188,193', '', '234', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('254', '202,204,206', '', '213123', '35', '43', './Uploads/product_imgs/2017-02-17/148730052113183.jpg,./Uploads/product_imgs/2017-02-17/148730052154791.jpg,./Uploads/product_imgs/2017-02-17/148730052138028.jpg,./Uploads/product_imgs/2017-02-17/148730052199522.jpg');
INSERT INTO `shop_goods_list` VALUES ('242', '195,197,200', '', '34', '42', '72', './Uploads/product_imgs/2017-02-17/148729763427341.jpg,./Uploads/product_imgs/2017-02-17/148729763470671.jpg,./Uploads/product_imgs/2017-02-17/148729763497613.jpg,./Uploads/product_imgs/2017-02-17/148729763494528.jpg');
INSERT INTO `shop_goods_list` VALUES ('243', '195,197,201', '', '234', '2343', '72', './Uploads/product_imgs/2017-02-17/148729776530846.jpg,./Uploads/product_imgs/2017-02-17/148729776588796.jpg,./Uploads/product_imgs/2017-02-17/148729776525089.jpg,./Uploads/product_imgs/2017-02-17/148729776660248.jpg');
INSERT INTO `shop_goods_list` VALUES ('244', '195,198,200', '', '234', '234', '72', './Uploads/product_imgs/2017-02-17/148729778080243.jpg,./Uploads/product_imgs/2017-02-17/148729778088316.jpg,./Uploads/product_imgs/2017-02-17/148729778029390.jpg,./Uploads/product_imgs/2017-02-17/148729778095042.jpg');
INSERT INTO `shop_goods_list` VALUES ('245', '195,198,201', '', '342', '423', '72', './Uploads/product_imgs/2017-02-17/148729780250561.jpg,./Uploads/product_imgs/2017-02-17/148729780214386.jpg,./Uploads/product_imgs/2017-02-17/148729780287481.jpg,./Uploads/product_imgs/2017-02-17/148729780271531.jpg');
INSERT INTO `shop_goods_list` VALUES ('237', '194,197,201', '', '434', '43423', '72', './Uploads/product_imgs/2017-02-17/148729781875390.jpg,./Uploads/product_imgs/2017-02-17/148729781977612.jpg,./Uploads/product_imgs/2017-02-17/148729781961484.jpg,./Uploads/product_imgs/2017-02-17/148729781932274.jpg');
INSERT INTO `shop_goods_list` VALUES ('238', '194,198,200', '', '343', '4235', '72', './Uploads/product_imgs/2017-02-17/148729783044670.jpg,./Uploads/product_imgs/2017-02-17/148729783051830.jpg,./Uploads/product_imgs/2017-02-17/148729783083737.jpg,./Uploads/product_imgs/2017-02-17/148729783161448.jpg');
INSERT INTO `shop_goods_list` VALUES ('239', '194,198,201', '', '4343', '4234', '72', './Uploads/product_imgs/2017-02-17/148729784254969.jpg,./Uploads/product_imgs/2017-02-17/148729784277423.jpg,./Uploads/product_imgs/2017-02-17/148729784222332.jpg,./Uploads/product_imgs/2017-02-17/148729784297398.jpg');
INSERT INTO `shop_goods_list` VALUES ('240', '194,199,200', '', '34', '23423', '72', './Uploads/product_imgs/2017-02-17/148729785323364.jpg,./Uploads/product_imgs/2017-02-17/148729785446548.jpg,./Uploads/product_imgs/2017-02-17/148729785463503.jpg,./Uploads/product_imgs/2017-02-17/148729785482029.jpg');
INSERT INTO `shop_goods_list` VALUES ('195', '182,189,193', '', '423', '423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('196', '182,190,192', '', '42', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('197', '182,190,193', '', '4', '423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('198', '182,191,192', '', '423', '2434', '73', null);
INSERT INTO `shop_goods_list` VALUES ('199', '182,191,193', '', '4', '23423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('200', '183,186,192', '', '423', '324', '73', null);
INSERT INTO `shop_goods_list` VALUES ('201', '183,186,193', '', '42', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('202', '183,187,192', '', '234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('203', '183,187,193', '', '234', '2344', '73', null);
INSERT INTO `shop_goods_list` VALUES ('204', '183,188,192', '', '324', '23424', '73', null);
INSERT INTO `shop_goods_list` VALUES ('205', '183,188,193', '', '4', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('206', '183,189,192', '', '4234', '65535', '73', null);
INSERT INTO `shop_goods_list` VALUES ('207', '183,189,193', '', '234', '4', '73', null);
INSERT INTO `shop_goods_list` VALUES ('208', '183,190,192', '', '423', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('213', '184,186,193', '', '423', '2423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('214', '184,187,192', '', '423', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('215', '184,187,193', '', '234', '23423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('216', '184,188,192', '', '42', '34', '73', null);
INSERT INTO `shop_goods_list` VALUES ('217', '184,188,193', '', '4234', '234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('218', '184,189,192', '', '3242', '423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('219', '184,189,193', '', '423', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('220', '184,190,192', '', '234', '24', '73', null);
INSERT INTO `shop_goods_list` VALUES ('221', '184,190,193', '', '24', '23', '73', null);
INSERT INTO `shop_goods_list` VALUES ('222', '184,191,192', '', '4234', '3243', '73', null);
INSERT INTO `shop_goods_list` VALUES ('223', '184,191,193', '', '324', '23423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('224', '185,186,192', '', '234', '23423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('225', '185,186,193', '', '23423', '42', '73', null);
INSERT INTO `shop_goods_list` VALUES ('226', '185,187,192', '', '4234', '2342', '73', null);
INSERT INTO `shop_goods_list` VALUES ('227', '185,187,193', '', '23', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('228', '185,188,192', '', '423', '2423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('229', '185,188,193', '', '234', '23', '73', null);
INSERT INTO `shop_goods_list` VALUES ('230', '185,189,192', '', '23432', '324', '73', null);
INSERT INTO `shop_goods_list` VALUES ('231', '185,189,193', '', '4234', '4234', '73', null);
INSERT INTO `shop_goods_list` VALUES ('232', '185,190,192', '', '423', '423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('233', '185,190,193', '', '432', '2423', '73', null);
INSERT INTO `shop_goods_list` VALUES ('236', '194,197,200', '', '3423', '343', '72', './Uploads/product_imgs/2017-02-17/148729786552423.jpg,./Uploads/product_imgs/2017-02-17/148729786555604.jpg,./Uploads/product_imgs/2017-02-17/148729786570394.jpg,./Uploads/product_imgs/2017-02-17/148729786524653.jpg');

-- ----------------------------
-- Table structure for `shop_type`
-- ----------------------------
DROP TABLE IF EXISTS `shop_type`;
CREATE TABLE `shop_type` (
  `type_id` int(2) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `type_name` varchar(50) NOT NULL COMMENT '分类名称',
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COMMENT='商品分类表';

-- ----------------------------
-- Records of shop_type
-- ----------------------------
INSERT INTO `shop_type` VALUES ('1', '手机类型');
INSERT INTO `shop_type` VALUES ('2', '智能硬件类型');
INSERT INTO `shop_type` VALUES ('3', '耳机类型');
INSERT INTO `shop_type` VALUES ('4', '音箱类型');
INSERT INTO `shop_type` VALUES ('5', '路由器类型');
INSERT INTO `shop_type` VALUES ('6', '移动电源类型');
INSERT INTO `shop_type` VALUES ('7', '保护套 / 后盖 / 贴膜');
INSERT INTO `shop_type` VALUES ('16', '数据线类型');
INSERT INTO `shop_type` VALUES ('17', '电源适配器类型');
INSERT INTO `shop_type` VALUES ('18', '周边配件');

-- ----------------------------
-- Table structure for `shop_type_attr`
-- ----------------------------
DROP TABLE IF EXISTS `shop_type_attr`;
CREATE TABLE `shop_type_attr` (
  `attr_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `attr_name` char(20) NOT NULL DEFAULT '' COMMENT '类型属性的名称',
  `attr_value` char(255) NOT NULL DEFAULT '' COMMENT '类型属性的值',
  `attr_class` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类型属性的类别，0表示属性，1表示规格',
  `type_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '所属类型ID',
  `isbeselected` tinyint(1) DEFAULT '1' COMMENT '是否被筛选显示到前台网页上，0不显示，1显示 默认是1',
  PRIMARY KEY (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='商品类型属性表';

-- ----------------------------
-- Records of shop_type_attr
-- ----------------------------
INSERT INTO `shop_type_attr` VALUES ('17', '颜色分类', '绿色,白色,蓝色', '0', '3', '1');
INSERT INTO `shop_type_attr` VALUES ('2', '网络类型', '全网通版,移动/联动双4G版,移动4G版,联通4G版,电信4G版', '0', '1', '1');
INSERT INTO `shop_type_attr` VALUES ('4', '机身颜色', '黄色,白色,金色,灰色,土豪金,绿色,粉色', '0', '1', '1');
INSERT INTO `shop_type_attr` VALUES ('21', '规格参数', '品牌,品名,尺寸,重量,功能,是否有APP', '0', '2', '0');
INSERT INTO `shop_type_attr` VALUES ('6', '系列', 'PRO系列,魅蓝系列,MX系列', '0', '1', '0');
INSERT INTO `shop_type_attr` VALUES ('23', '规格参数', '品牌,型号,尺寸,重量,蓝牙版本,连接方式,有效距离,灯光,电源,供电方式,音箱调节方式,包装清单', '0', '3', '0');
INSERT INTO `shop_type_attr` VALUES ('16', '规格参数', '品牌,型号,佩戴方式,耳机类别,有无麦克风,耳机类型,兼容平台,缆线长度,包装清单', '0', '3', '0');
INSERT INTO `shop_type_attr` VALUES ('22', '颜色分类', '黄色,白色,金色,灰色,土豪金,绿色,粉色,黑色,梧桐金', '0', '2', '1');
INSERT INTO `shop_type_attr` VALUES ('13', '规格参数', '品牌,型号,尺寸,电池容量,屏幕尺寸,分辨率,运行内存(RAM),CPU,GPU,网络模式,重量,前置摄像头,后置摄像头,系统版本,包装清单', '0', '1', '0');
INSERT INTO `shop_type_attr` VALUES ('24', '颜色分类', '黄色,白色,金色,灰色,土豪金,绿色,粉色,蓝色,红色', '0', '4', '1');
INSERT INTO `shop_type_attr` VALUES ('25', '频段', '2.4/5GHz,5GHz', '0', '5', '1');
INSERT INTO `shop_type_attr` VALUES ('26', '规格参数', '品牌,品名,尺寸,重量,颜色分类,无线传输率2.4Gwifi,无线传输率5Gwifi,包装清单', '0', '5', '0');
INSERT INTO `shop_type_attr` VALUES ('27', '颜色分类', '黄色,白色,金色,灰色,土豪金,绿色,粉色,黑色,梧桐金', '0', '6', '1');
INSERT INTO `shop_type_attr` VALUES ('28', '规格参数', '品牌,品名,电池容量,材质,输入电压,输出电压,尺寸,功能,重量', '0', '6', '0');
INSERT INTO `shop_type_attr` VALUES ('29', '颜色分类', '黄色,白色,金色,灰色,土豪金,绿色,粉色,蓝色,红色', '0', '7', '1');
INSERT INTO `shop_type_attr` VALUES ('30', '规格参数', '品牌,品名,适用机型,分类', '0', '7', '0');
INSERT INTO `shop_type_attr` VALUES ('31', '内存容量', '16G,32G', '0', '1', '1');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `email` varchar(50) DEFAULT NULL COMMENT '邮箱',
  `password` char(50) DEFAULT NULL COMMENT '密码',
  `username` varchar(50) DEFAULT '' COMMENT '用户名',
  `status` int(2) DEFAULT '1' COMMENT '状态（1正常，-1禁止,-3是删除的）',
  `sex` int(11) DEFAULT '0' COMMENT '0保密 1男 2女',
  `face` varchar(100) DEFAULT NULL COMMENT '头像',
  `site` varchar(50) DEFAULT NULL COMMENT '个性网址',
  `birthday` date DEFAULT '1990-01-04' COMMENT '性别',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `addr` varchar(50) DEFAULT NULL COMMENT '通信地址',
  `introduce` varchar(300) DEFAULT NULL COMMENT '自我介绍 ',
  `rank` int(5) DEFAULT NULL COMMENT '声望',
  `reg_time` int(10) DEFAULT NULL COMMENT '注册时间',
  `reg_ip` varchar(15) DEFAULT NULL COMMENT '注册IP',
  `login_time` int(10) DEFAULT NULL COMMENT '最后登录时间',
  `login_ip` varchar(15) DEFAULT NULL COMMENT '最后登录IP',
  `signnature` varchar(50) DEFAULT '这个人很懒，什么也没留下' COMMENT '个人签名',
  `qq_open_id` varchar(32) DEFAULT NULL,
  `phone` char(50) DEFAULT NULL,
  `isadmin` int(1) DEFAULT '0' COMMENT '是否是管理员(0是普通会员,1是管理员)',
  `admin_login_time` int(10) unsigned DEFAULT NULL COMMENT '管理员最后一次登录的时间',
  `admin_login_ip` varchar(40) DEFAULT NULL COMMENT '管理员最后一次登录的ip',
  `admin_login_num` int(5) DEFAULT NULL COMMENT '管理员登录次数',
  `collect_id` char(100) DEFAULT NULL COMMENT '收藏商品ID',
  PRIMARY KEY (`uid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('9', '2089218967@qq.com', '789789789', 'asasasas', '-3', '0', null, null, '1993-01-01', null, null, '长风破烂会有时，直挂云帆济沧海', '789', '1486095132', '127.0.0.1', '1486098732', '::1', '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('11', '', 'b7c57272007826a94017e1b2895c2717', 'wewrwd', '-3', '0', 'Uploads/images/2016-07-27/5798d2811d2e4.jpg', null, '1993-01-01', null, null, '长风破烂会有时，直挂云帆济沧海1', '123', '1468414956', '127.0.0.1', '1471227468', '::1', '这个人很懒，什么也没留下', null, '4294967295', '0', null, null, null, null);
INSERT INTO `user` VALUES ('12', 'abcdefg@qq.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '1', '0', 'Uploads/images/2017-02-10/589d515f21a1a.jpg', null, '1993-01-01', null, null, '长风破烂会有时，直挂云帆济沧海3', '456', '1486088532', '127.0.0.1', '1499478150', '127.0.0.1', '这个人很懒，什么也没留下', null, null, '1', null, null, null, '39,59,');
INSERT INTO `user` VALUES ('23', 'asdsa123dasd@qq.com', '', '', '-3', '0', null, null, '1993-01-01', null, null, null, null, '1468415555', null, null, null, '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('24', 'asdsa23dasd@qq.com', '', '', '-3', '0', null, null, '1993-01-01', null, null, null, null, '1468411231', null, null, null, '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('22', 'asdsadas2d@qq.com', '', '', '-3', '0', null, null, '1993-01-01', null, null, null, null, '1468414226', null, null, null, '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('25', 'asdsa12312dasd@qq.com', '', '', '-3', '0', null, null, '1993-01-01', null, null, null, null, null, null, null, null, '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('26', '40913asd@qq.com', '21232f297a57a5a743894a0e4a801fc3', 'lisi', '1', '0', null, null, '1993-01-01', null, null, null, null, '1486099981', null, null, null, '这个人很懒，什么也没留下', null, null, '1', null, null, null, null);
INSERT INTO `user` VALUES ('27', '789789@qq.com', '21232f297a57a5a743894a0e4a801fc3', 'zhangsan', '-3', '0', null, null, '1993-01-01', null, null, null, null, '1468414956', null, null, null, '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('33', '2345@qq.com', '3424609fa4f1b358d0186a03d5c23a4e', 'qqqqqqq', '1', '0', null, null, '1993-01-01', null, null, null, null, '1486098732', '::1', '1486099152', '::1', '这个人很懒，什么也没留下', null, '4294967295', '0', null, null, null, null);
INSERT INTO `user` VALUES ('32', '123@qq.com', '0ca0f717b8434ca4a53945bb91ea75f7', 'wwwww', '1', '0', null, null, '1993-01-01', null, null, '啦啦啦', null, '1486161612', '::1', '1486170132', '::1', '这个人很懒，什么也没留下', null, '4294967295', '0', null, null, null, null);
INSERT INTO `user` VALUES ('35', null, '655bf5772808612fdb11e63f975c8f9d', 'mm', '1', '0', null, null, '1993-01-01', null, null, null, null, '1486296189', '127.0.0.1', null, null, '这个人很懒，什么也没留下', null, null, '1', null, null, null, null);
INSERT INTO `user` VALUES ('36', null, '94b8cea57c49a3007225a0c70c475450', 'qqqqqqqq', '1', '0', null, null, '1990-01-04', null, null, null, null, '1486903184', '127.0.0.1', '1486903208', '127.0.0.1', '这个人很懒，什么也没留下', null, null, '0', null, null, null, null);
INSERT INTO `user` VALUES ('41', null, '655bf5772808612fdb11e63f975c8f9d', '58a1a3a5253b2', '1', '0', 'Uploads/images/2017-02-16/58a50480e1e1a.jpg', null, '1990-01-04', null, null, null, null, '1486988197', '127.0.0.1', null, null, '这个人很懒，什么也没留下', null, '18803569538', '0', null, null, null, '43,62,38,42,');
INSERT INTO `user` VALUES ('42', null, '25d55ad283aa400af464c76d713c07ad', '58a2d9dad2515', '1', '0', null, null, '1990-01-04', null, null, null, null, '1487067610', '127.0.0.1', null, null, '这个人很懒，什么也没留下', null, '13430372763', '0', null, null, null, '34,');

-- ----------------------------
-- Table structure for `user_cars`
-- ----------------------------
DROP TABLE IF EXISTS `user_cars`;
CREATE TABLE `user_cars` (
  `carid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `uid` int(10) NOT NULL COMMENT '用户id',
  `goodid` int(10) NOT NULL COMMENT '商品id',
  `gdlistid` int(10) NOT NULL COMMENT 'skuid',
  `good_num` int(10) NOT NULL COMMENT '商品数量',
  PRIMARY KEY (`carid`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=utf8 COMMENT='购物车表';

-- ----------------------------
-- Records of user_cars
-- ----------------------------
INSERT INTO `user_cars` VALUES ('52', '32', '37', '31', '1');
INSERT INTO `user_cars` VALUES ('51', '32', '51', '84', '12');
INSERT INTO `user_cars` VALUES ('68', '41', '42', '51', '2');

-- ----------------------------
-- Table structure for `user_collect`
-- ----------------------------
DROP TABLE IF EXISTS `user_collect`;
CREATE TABLE `user_collect` (
  `uid` int(10) NOT NULL DEFAULT '0' COMMENT '用户ID',
  `good_id` char(100) DEFAULT NULL COMMENT '商品ID'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_collect
-- ----------------------------
INSERT INTO `user_collect` VALUES ('12', '67,57,');

-- ----------------------------
-- Table structure for `user_message`
-- ----------------------------
DROP TABLE IF EXISTS `user_message`;
CREATE TABLE `user_message` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '主建',
  `mid` int(10) DEFAULT NULL COMMENT '消息表的id',
  `status` int(1) DEFAULT '0' COMMENT '消息的处理状态（1已读，0未读）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='用户消息提醒表';

-- ----------------------------
-- Records of user_message
-- ----------------------------

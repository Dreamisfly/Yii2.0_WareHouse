# Host: 127.0.0.1  (Version 5.5.53)
# Date: 2019-06-05 15:09:04
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "auth_rule"
#

DROP TABLE IF EXISTS `auth_rule`;
CREATE TABLE `auth_rule` (
  `name` varchar(64) NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "auth_rule"
#


#
# Structure for table "auth_item"
#

DROP TABLE IF EXISTS `auth_item`;
CREATE TABLE `auth_item` (
  `name` varchar(64) NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text,
  `rule_name` varchar(64) DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`name`),
  KEY `rule_name` (`rule_name`),
  KEY `type` (`type`),
  CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "auth_item"
#

INSERT INTO `auth_item` VALUES ('/',2,NULL,NULL,NULL,1551265946,1551265946),('/*',2,NULL,NULL,NULL,1551178396,1551178396),('/admin/*',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/assignment/*',2,NULL,NULL,NULL,1551194196,1551194196),('/admin/assignment/assign',2,NULL,NULL,NULL,1551234735,1551234735),('/admin/assignment/index',2,NULL,NULL,NULL,1551234730,1551234730),('/admin/assignment/revoke',2,NULL,NULL,NULL,1551234738,1551234738),('/admin/assignment/view',2,NULL,NULL,NULL,1551234733,1551234733),('/admin/default/*',2,NULL,NULL,NULL,1551234743,1551234743),('/admin/default/index',2,NULL,NULL,NULL,1551234740,1551234740),('/admin/menu/*',2,NULL,NULL,NULL,1551194190,1551194190),('/admin/menu/create',2,NULL,NULL,NULL,1551234750,1551234750),('/admin/menu/delete',2,NULL,NULL,NULL,1551234755,1551234755),('/admin/menu/index',2,NULL,NULL,NULL,1551234745,1551234745),('/admin/menu/update',2,NULL,NULL,NULL,1551234752,1551234752),('/admin/menu/view',2,NULL,NULL,NULL,1551234747,1551234747),('/admin/permission/*',2,NULL,NULL,NULL,1551194188,1551194188),('/admin/permission/assign',2,NULL,NULL,NULL,1551234773,1551234773),('/admin/permission/create',2,NULL,NULL,NULL,1551234763,1551234763),('/admin/permission/delete',2,NULL,NULL,NULL,1551234768,1551234768),('/admin/permission/index',2,NULL,NULL,NULL,1551234758,1551234758),('/admin/permission/remove',2,NULL,NULL,NULL,1551234776,1551234776),('/admin/permission/update',2,NULL,NULL,NULL,1551234765,1551234765),('/admin/permission/view',2,NULL,NULL,NULL,1551234760,1551234760),('/admin/role/*',2,NULL,NULL,NULL,1551194146,1551194146),('/admin/role/assign',2,NULL,NULL,NULL,1551234791,1551234791),('/admin/role/create',2,NULL,NULL,NULL,1551234784,1551234784),('/admin/role/delete',2,NULL,NULL,NULL,1551234789,1551234789),('/admin/role/index',2,NULL,NULL,NULL,1551234778,1551234778),('/admin/role/remove',2,NULL,NULL,NULL,1551234794,1551234794),('/admin/role/update',2,NULL,NULL,NULL,1551234786,1551234786),('/admin/role/view',2,NULL,NULL,NULL,1551234781,1551234781),('/admin/route/*',2,NULL,NULL,NULL,1551194149,1551194149),('/admin/route/assign',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/route/create',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/route/index',2,NULL,NULL,NULL,1551234796,1551234796),('/admin/route/refresh',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/route/remove',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/rule/*',2,NULL,NULL,NULL,1551194154,1551194154),('/admin/rule/create',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/rule/delete',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/rule/index',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/rule/update',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/rule/view',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/*',2,NULL,NULL,NULL,1551194165,1551194165),('/admin/user/activate',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/change-password',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/delete',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/index',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/login',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/logout',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/request-password-reset',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/reset-password',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/signup',2,NULL,NULL,NULL,1551234804,1551234804),('/admin/user/view',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/*',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/*',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/db-explain',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/download-mail',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/index',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/toolbar',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/default/view',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/user/*',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/user/reset-identity',2,NULL,NULL,NULL,1551234804,1551234804),('/debug/user/set-identity',2,NULL,NULL,NULL,1551234804,1551234804),('/enterstock/*',2,NULL,NULL,NULL,1552807482,1552807482),('/enterstock/create',2,NULL,NULL,NULL,1552807482,1552807482),('/enterstock/delete',2,NULL,NULL,NULL,1552807482,1552807482),('/enterstock/index',2,NULL,NULL,NULL,1552807482,1552807482),('/enterstock/update',2,NULL,NULL,NULL,1552807482,1552807482),('/enterstock/view',2,NULL,NULL,NULL,1552807482,1552807482),('/gii/*',2,NULL,NULL,NULL,1551194176,1551194176),('/gii/default/*',2,NULL,NULL,NULL,1551234805,1551234805),('/gii/default/action',2,NULL,NULL,NULL,1551234805,1551234805),('/gii/default/diff',2,NULL,NULL,NULL,1551234805,1551234805),('/gii/default/index',2,NULL,NULL,NULL,1551234804,1551234804),('/gii/default/preview',2,NULL,NULL,NULL,1551234805,1551234805),('/gii/default/view',2,NULL,NULL,NULL,1551234805,1551234805),('/goods/*',2,NULL,NULL,NULL,1552446550,1552446550),('/goods/create',2,NULL,NULL,NULL,1552446550,1552446550),('/goods/delete',2,NULL,NULL,NULL,1552446550,1552446550),('/goods/index',2,NULL,NULL,NULL,1552446550,1552446550),('/goods/update',2,NULL,NULL,NULL,1552446550,1552446550),('/goods/view',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/*',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/create',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/delete',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/index',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/update',2,NULL,NULL,NULL,1552446550,1552446550),('/goodstype/view',2,NULL,NULL,NULL,1552446550,1552446550),('/inventory/*',2,NULL,NULL,NULL,1557410169,1557410169),('/inventory/create',2,NULL,NULL,NULL,1557410169,1557410169),('/inventory/delete',2,NULL,NULL,NULL,1557410169,1557410169),('/inventory/index',2,NULL,NULL,NULL,1557410169,1557410169),('/inventory/update',2,NULL,NULL,NULL,1557410169,1557410169),('/inventory/view',2,NULL,NULL,NULL,1557410169,1557410169),('/notice/*',2,NULL,NULL,NULL,1551257725,1551257725),('/notice/create',2,NULL,NULL,NULL,1551257725,1551257725),('/notice/delete',2,NULL,NULL,NULL,1551257725,1551257725),('/notice/index',2,NULL,NULL,NULL,1551257725,1551257725),('/notice/update',2,NULL,NULL,NULL,1551257725,1551257725),('/notice/view',2,NULL,NULL,NULL,1551257725,1551257725),('/outstock/*',2,NULL,NULL,NULL,1552808320,1552808320),('/outstock/create',2,NULL,NULL,NULL,1552808320,1552808320),('/outstock/delete',2,NULL,NULL,NULL,1552808320,1552808320),('/outstock/index',2,NULL,NULL,NULL,1552808320,1552808320),('/outstock/update',2,NULL,NULL,NULL,1552808320,1552808320),('/outstock/view',2,NULL,NULL,NULL,1552808320,1552808320),('/patrol/*',2,NULL,NULL,NULL,1556508678,1556508678),('/patrol/create',2,NULL,NULL,NULL,1556508678,1556508678),('/patrol/delete',2,NULL,NULL,NULL,1556508678,1556508678),('/patrol/index',2,NULL,NULL,NULL,1556508678,1556508678),('/patrol/update',2,NULL,NULL,NULL,1556508678,1556508678),('/patrol/view',2,NULL,NULL,NULL,1556508678,1556508678),('/site/*',2,NULL,NULL,NULL,1551194181,1551194181),('/site/error',2,NULL,NULL,NULL,1551234805,1551234805),('/site/index',2,NULL,NULL,NULL,1551234805,1551234805),('/site/login',2,NULL,NULL,NULL,1551234805,1551234805),('/site/logout',2,NULL,NULL,NULL,1551234805,1551234805),('/stock/*',2,NULL,NULL,NULL,1552446550,1552446550),('/stock/create',2,NULL,NULL,NULL,1552446550,1552446550),('/stock/delete',2,NULL,NULL,NULL,1552446550,1552446550),('/stock/index',2,NULL,NULL,NULL,1552446550,1552446550),('/stock/update',2,NULL,NULL,NULL,1552446550,1552446550),('/stock/view',2,NULL,NULL,NULL,1552446550,1552446550),('/upload/*',2,NULL,NULL,NULL,1558409745,1558409745),('/upload/upload',2,NULL,NULL,NULL,1558409745,1558409745),('/user-info/*',2,NULL,NULL,NULL,1551265602,1551265602),('/user-info/create',2,NULL,NULL,NULL,1551265601,1551265601),('/user-info/delete',2,NULL,NULL,NULL,1551265602,1551265602),('/user-info/index',2,NULL,NULL,NULL,1551265601,1551265601),('/user-info/update',2,NULL,NULL,NULL,1551265602,1551265602),('/user-info/view',2,NULL,NULL,NULL,1551265601,1551265601),('/user/*',2,NULL,NULL,NULL,1551196413,1551196413),('/user/create',2,NULL,NULL,NULL,1551234805,1551234805),('/user/delete',2,NULL,NULL,NULL,1551234805,1551234805),('/user/index',2,NULL,NULL,NULL,1551234805,1551234805),('/user/update',2,NULL,NULL,NULL,1551234805,1551234805),('/user/view',2,NULL,NULL,NULL,1551234805,1551234805),('/warehouse/*',2,NULL,NULL,NULL,1552446551,1552446551),('/warehouse/create',2,NULL,NULL,NULL,1552446550,1552446550),('/warehouse/delete',2,NULL,NULL,NULL,1552446551,1552446551),('/warehouse/index',2,NULL,NULL,NULL,1552446550,1552446550),('/warehouse/update',2,NULL,NULL,NULL,1552446550,1552446550),('/warehouse/view',2,NULL,NULL,NULL,1552446550,1552446550),('上传管理',2,NULL,NULL,NULL,1558409770,1558409770),('入库管理',2,NULL,NULL,NULL,1552807609,1552807609),('出库管理',2,NULL,NULL,NULL,1552808566,1552808566),('巡逻管理',2,NULL,NULL,NULL,1556508711,1556508711),('巡逻管理员',1,NULL,NULL,NULL,1556508863,1556508879),('库存管理',2,NULL,NULL,NULL,1552447437,1552447437),('持有仓库管理',2,NULL,NULL,NULL,1552446891,1552446891),('消息管理',2,NULL,NULL,NULL,1551257758,1551257758),('物品种类管理',2,NULL,NULL,NULL,1552447700,1552447700),('物品管理',2,NULL,NULL,NULL,1552447663,1552447663),('用户信息管理',2,NULL,NULL,NULL,1551265626,1551265626),('用户管理',2,NULL,NULL,NULL,1551196332,1551196332),('盘点管理',2,NULL,NULL,NULL,1557410189,1557410189),('盘点管理员',1,NULL,NULL,NULL,1557410225,1557410225),('管理员',1,NULL,NULL,NULL,1551248070,1551248070);

#
# Structure for table "auth_item_child"
#

DROP TABLE IF EXISTS `auth_item_child`;
CREATE TABLE `auth_item_child` (
  `parent` varchar(64) NOT NULL,
  `child` varchar(64) NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`),
  CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "auth_item_child"
#

INSERT INTO `auth_item_child` VALUES ('上传管理','/upload/upload'),('入库管理','/enterstock/*'),('出库管理','/outstock/*'),('巡逻管理','/patrol/*'),('巡逻管理员','巡逻管理'),('巡逻管理员','消息管理'),('巡逻管理员','用户信息管理'),('库存管理','/stock/*'),('持有仓库管理','/warehouse/*'),('消息管理','/notice/*'),('物品种类管理','/goodstype/*'),('物品管理','/goods/*'),('用户信息管理','/user-info/*'),('用户管理','/user/*'),('盘点管理','/inventory/*'),('盘点管理员','消息管理'),('盘点管理员','用户信息管理'),('盘点管理员','盘点管理'),('管理员','/*'),('管理员','上传管理'),('管理员','入库管理'),('管理员','出库管理'),('管理员','巡逻管理'),('管理员','库存管理'),('管理员','持有仓库管理'),('管理员','消息管理'),('管理员','物品种类管理'),('管理员','物品管理'),('管理员','用户信息管理'),('管理员','用户管理'),('管理员','盘点管理');

#
# Structure for table "auth_assignment"
#

DROP TABLE IF EXISTS `auth_assignment`;
CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) NOT NULL,
  `user_id` varchar(64) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`item_name`,`user_id`),
  KEY `auth_assignment_user_id_idx` (`user_id`),
  CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

#
# Data for table "auth_assignment"
#

INSERT INTO `auth_assignment` VALUES ('上传管理','1',1558412465),('巡逻管理员','20',1557407552),('巡逻管理员','22',1557412901),('盘点管理员','21',1557412892),('盘点管理员','23',1557446952),('管理员','1',1558409998),('管理员','16',1551338629),('管理员','2',1551338615);

#
# Structure for table "enterstock"
#

DROP TABLE IF EXISTS `enterstock`;
CREATE TABLE `enterstock` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `enter_order` varchar(30) NOT NULL DEFAULT '' COMMENT '移入单号',
  `wid` int(11) NOT NULL DEFAULT '0' COMMENT '仓库id',
  `gid` int(11) NOT NULL DEFAULT '0' COMMENT '物品id',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '入库数量',
  `type` smallint(1) NOT NULL DEFAULT '0' COMMENT '入库类型',
  `price` int(11) NOT NULL DEFAULT '0' COMMENT '买入价格',
  `enter_warehouse` int(11) DEFAULT NULL COMMENT '移入仓库',
  `create_at` int(11) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='入库管理';

#
# Data for table "enterstock"
#

INSERT INTO `enterstock` VALUES (1,'201904291714',1,1,100,1,5500,NULL,1556529359),(2,'201904291715',1,1,100,1,5500,NULL,1556529368),(3,'201904291716',1,1,100,2,5500,2,1556529405);

#
# Structure for table "goods"
#

DROP TABLE IF EXISTS `goods`;
CREATE TABLE `goods` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_name` varchar(10) NOT NULL DEFAULT '' COMMENT '物品名称',
  `gid` int(11) NOT NULL DEFAULT '0' COMMENT '物品类型id',
  `material_quality` varchar(20) DEFAULT NULL COMMENT '材质',
  `commodity_code` varchar(20) DEFAULT NULL COMMENT '商品编码',
  `manufacturer` varchar(20) DEFAULT NULL COMMENT '制造商',
  `batches` varchar(20) DEFAULT NULL COMMENT '商品批次',
  `quality_guarantee_period` varchar(20) DEFAULT NULL COMMENT '保质期',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='物品表';

#
# Data for table "goods"
#

INSERT INTO `goods` VALUES (1,'iphone8',5,'手机材质','0316182931','苹果公司','20190322001','永久'),(2,'橘子',3,'水果','1231698141','陕西','20190322019','三个月');

#
# Structure for table "goodstype"
#

DROP TABLE IF EXISTS `goodstype`;
CREATE TABLE `goodstype` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `goods_type_name` varchar(10) NOT NULL DEFAULT '' COMMENT '物品类型名',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='物品种类表';

#
# Data for table "goodstype"
#

INSERT INTO `goodstype` VALUES (1,'家居电器'),(2,'日常用品'),(3,'食品水果'),(4,'个人用品'),(5,'手机电脑');

#
# Structure for table "inventory"
#

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE `inventory` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '盘点信息id',
  `gid` int(11) NOT NULL DEFAULT '0' COMMENT '盘点物品id',
  `wid` int(11) NOT NULL DEFAULT '0' COMMENT '盘点仓库id',
  `inventory_free` varchar(20) NOT NULL DEFAULT '' COMMENT '盘点费用',
  `inventory_status` varchar(255) NOT NULL DEFAULT '' COMMENT '盘点状态',
  `inventory_date` date DEFAULT NULL COMMENT '盘点日期',
  `inventory_user` varchar(20) NOT NULL DEFAULT '' COMMENT '盘点人',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "inventory"
#

INSERT INTO `inventory` VALUES (1,1,1,'10','数量为200，正常','2019-05-09','shixi_mengfei3'),(2,1,1,'10','数量为200，正常','2019-05-10','pandian2');

#
# Structure for table "menu"
#

DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT '1',
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  KEY `parent` (`parent`),
  CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

#
# Data for table "menu"
#

INSERT INTO `menu` VALUES (1,'仓库管理',NULL,'/',0,NULL),(2,'用户管理',1,'/user/index',1,NULL),(3,'消息管理',1,'/notice/index',2,NULL),(4,'持有仓库管理',1,'/warehouse/index',3,NULL),(5,'库存管理',1,'/stock/index',4,NULL),(6,'物品管理',1,'/goods/index',5,NULL),(7,'物品类型管理',1,'/goodstype/index',6,NULL),(8,'入库管理',1,'/enterstock/index',7,NULL),(9,'出库管理',1,'/outstock/index',8,NULL),(10,'巡逻管理',1,'/patrol/index',9,NULL),(11,'盘点管理',1,'/inventory/index',10,NULL),(13,'上传管理',1,'/upload/upload',11,NULL);

#
# Structure for table "notice"
#

DROP TABLE IF EXISTS `notice`;
CREATE TABLE `notice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(20) NOT NULL DEFAULT '' COMMENT '发送者',
  `receiver` varchar(20) NOT NULL DEFAULT '' COMMENT '接收者',
  `information` varchar(40) NOT NULL DEFAULT '' COMMENT '信息',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '状态',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

#
# Data for table "notice"
#

INSERT INTO `notice` VALUES (1,'shixi_mengfei3','shixi_mengfei3','欢迎来到仓库管理系统',0,1551261327,1551261327),(2,'shixi_mengfei3','shixi_mengfei3','啦啦啦啦',0,1551264044,1551264044),(3,'shixi_mengfei3','shixi_mengfei3','第三条信息',0,1551264155,1551264155),(4,'shixi_mengfei3','shixi_mengfei3','第四条信息',0,1551264171,1551264171),(5,'shixi_mengfei3','all','通知1',0,1556533526,1556533526);

#
# Structure for table "outstock"
#

DROP TABLE IF EXISTS `outstock`;
CREATE TABLE `outstock` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `out_order` varchar(30) NOT NULL DEFAULT '' COMMENT '移出单号',
  `wid` int(11) NOT NULL DEFAULT '0' COMMENT '仓库名称',
  `gid` int(11) NOT NULL DEFAULT '0' COMMENT '物品名称',
  `type` varchar(20) NOT NULL DEFAULT '',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '卖出数量',
  `price` int(11) DEFAULT NULL COMMENT '卖出价格',
  `out_warehouse` varchar(30) NOT NULL DEFAULT '' COMMENT '移出仓库',
  `create_at` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT '创建时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Data for table "outstock"
#

INSERT INTO `outstock` VALUES (1,'201904291834',2,1,'2',100,5500,'1','0000-00-00 00:00:00');

#
# Structure for table "patrol"
#

DROP TABLE IF EXISTS `patrol`;
CREATE TABLE `patrol` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) DEFAULT NULL COMMENT '仓库id',
  `gid` int(11) DEFAULT NULL COMMENT '盘点物品id',
  `patrol_information` varchar(255) DEFAULT NULL COMMENT '巡逻详情',
  `hidden_danger` varchar(255) DEFAULT NULL COMMENT '安全隐患',
  `status` int(11) DEFAULT NULL COMMENT '状态',
  `patrol_user` varchar(20) DEFAULT NULL COMMENT '巡逻人',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

#
# Data for table "patrol"
#

INSERT INTO `patrol` VALUES (2,1,1,'正常','无',1,'shixi_mengfei3');

#
# Structure for table "stock"
#

DROP TABLE IF EXISTS `stock`;
CREATE TABLE `stock` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `wid` int(11) NOT NULL DEFAULT '0' COMMENT '仓库id',
  `gid` int(11) NOT NULL DEFAULT '0' COMMENT '物品id',
  `num` int(11) NOT NULL DEFAULT '0' COMMENT '物品总数',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='库存表';

#
# Data for table "stock"
#


#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `username` varchar(20) NOT NULL DEFAULT '' COMMENT '用户名',
  `auth_key` varchar(32) NOT NULL COMMENT '自动登录key',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  `password_reset_token` varchar(255) DEFAULT NULL COMMENT '重置密码token',
  `email` varchar(255) NOT NULL COMMENT '邮箱',
  `role` smallint(6) NOT NULL DEFAULT '10' COMMENT '角色等级',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '状态',
  `created_at` int(11) NOT NULL COMMENT '创建时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COMMENT='用户表';

#
# Data for table "user"
#

INSERT INTO `user` VALUES (1,'shixi_mengfei3','FbFwy7lT0iLarPXrzOHdENcJlgv-i7cw','$2y$13$ETUnSUv0C..iwWPPSdjFeeBg0RrM9mLI25p3AwSgh1Cckqu5Sj6VC',NULL,'805314698@qq.com',10,10,1551173033,1551173033),(2,'admin','D-JFsNseze3HHXcwxzDmgsvoeBDm2qoX','$2y$13$43XQBzPV79ZpgfAq/um7MeSlX/PtRHEaSOBk5jkdy0YGaXhzbbPba',NULL,'admin@qq.com',10,10,1551260086,1551261119),(19,'xiaobai','ZOGnOOV-mjB4fKYKelTY_jUNt-E4_uFI','$2y$13$zIz6iESh5Nc4Ai4SUtPEGufZl/B8SlU5ahEtkS562JGyIlbUGpJ2m',NULL,'xiaobai@qq.com',10,10,1551341195,1557404649),(20,'yangsiqi','uxNG79xGjG9-57pH_Xlh9EsfB4FVfhID','$2y$13$FbRfomGJTQaDh87MgRIiXei..60UTGHVHjmopg2gQAsHg8af52agC',NULL,'siqi@qq.com',1,10,1557128067,1557407593),(21,'pandian1','wFvlef-L9K9Ycwc8gCVuMUsmSHpgehd7','$2y$13$RzTeE7GNh83kHCM5tsOQvOAJwOqxMzYvezDnz5JWW/jVGsx40OCZ.',NULL,'pandian1@qq.com',3,10,1557412161,1557412161),(22,'xunluo1','_t4kNZdCt_yk-ATLty1aTn5g_BOcE_Ep','$2y$13$tCo5lPGEqtNlISnNVXJP3eWhpL.HlPDRLb1XmIYZS0oiHsS.4/w..',NULL,'xunluo1@qq.com',1,10,1557412506,1557412506),(23,'pandian2','1n5ULENneEVlkR0ah2V1y2QcKZtDT9Ty','$2y$13$clZ35qQLynOTcArtKrAIZezhKx13JPI8m5DnJwNROuArBPm.cs5tO',NULL,'pandian2@qq.com',3,10,1557446903,1557446903);

#
# Structure for table "userinfo"
#

DROP TABLE IF EXISTS `userinfo`;
CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL DEFAULT '0' COMMENT 'userid',
  `name` varchar(10) DEFAULT NULL COMMENT '真实姓名',
  `sex` int(1) DEFAULT '1' COMMENT '性别',
  `phone` varchar(11) DEFAULT NULL COMMENT '手机号',
  `birthday` date DEFAULT NULL COMMENT '生日',
  `address` varchar(50) DEFAULT NULL COMMENT '详细地址',
  `created_at` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updated_at` int(11) NOT NULL DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

#
# Data for table "userinfo"
#

INSERT INTO `userinfo` VALUES (1,1,'张梦飞',1,'18032404721','1997-05-30','河北师范大学',1551321872,1551321872),(4,16,NULL,1,NULL,NULL,NULL,0,0),(5,2,NULL,1,NULL,NULL,NULL,0,0),(6,18,NULL,1,NULL,NULL,NULL,0,0),(7,19,NULL,1,NULL,NULL,NULL,0,0),(8,20,NULL,1,NULL,NULL,NULL,0,0),(9,21,NULL,1,NULL,NULL,NULL,0,0),(10,23,NULL,1,NULL,NULL,NULL,0,0);

#
# Structure for table "warehouse"
#

DROP TABLE IF EXISTS `warehouse`;
CREATE TABLE `warehouse` (
  `Id` int(11) NOT NULL AUTO_INCREMENT COMMENT '仓库id',
  `warehouse_name` varchar(255) NOT NULL DEFAULT '' COMMENT '仓库名称',
  `warehouse_user` int(10) NOT NULL DEFAULT '0' COMMENT '仓库拥有者',
  `location` varchar(20) NOT NULL DEFAULT '' COMMENT '位置',
  `width` varchar(20) NOT NULL DEFAULT '' COMMENT '宽度',
  `length` varchar(20) NOT NULL DEFAULT '' COMMENT '长度',
  `hold_time` varchar(20) NOT NULL DEFAULT '' COMMENT '持有期',
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='仓库表';

#
# Data for table "warehouse"
#

INSERT INTO `warehouse` VALUES (1,'仓库一',1,'','','',''),(2,'仓库二',18,'','','','');

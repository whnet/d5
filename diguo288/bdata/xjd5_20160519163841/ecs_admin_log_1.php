<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `log_time` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `log_info` varchar(255) NOT NULL DEFAULT '',
  `ip_address` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1461550450','1','编辑广告: wap首页幻灯广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2','1461550476','1','编辑广告: wap首页幻灯广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('3','1461550494','1','编辑广告: 品牌街广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('4','1461550529','1','编辑广告: 手机端首页广告1-1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('5','1461550552','1','编辑广告: wap首页幻灯广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('6','1461550567','1','编辑广告: wap首页幻灯广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('7','1461550728','1','编辑广告: 静佳JPLUS全场疯抢，赶快下手！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('8','1461550812','1','编辑广告: 茵曼品牌店','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('9','1461550897','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('10','1461550902','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('11','1461550906','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('12','1461550907','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('13','1461550909','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('14','1461550911','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('15','1462529319','1','卸载支付方式: tenpay','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('16','1462529332','1','编辑支付方式: 支付宝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('17','1463441809','1','编辑支付方式: 微信支付','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('18','1463441831','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('19','1463441892','1','添加会员账号: 39035000','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('20','1463443113','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('21','1463443140','1','安装配送方式: 同城快递','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('22','1463443159','1','添加配送区域: 全国','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('23','1463443173','1','安装配送方式: 门店自提','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('24','1463443188','1','添加配送区域: 全国','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('25','1463443230','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('26','1463443236','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('27','1463443400','1','编辑商品: 微信支付测试','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('28','1463443435','1','商品: 283','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('29','1463443802','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('30','1463443842','1','编辑商店设置: ','139.205.54.80');");
E_D("replace into `ecs_admin_log` values('31','1463537923','1','编辑权限管理: admin','139.205.53.106');");
E_D("replace into `ecs_admin_log` values('32','1463537970','1','编辑权限管理: admin888','139.205.53.106');");
E_D("replace into `ecs_admin_log` values('33','1463647006','1','编辑商店设置: ','139.205.55.228');");

require("../../inc/footer.php");
?>
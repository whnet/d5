<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(60) NOT NULL DEFAULT '',
  `enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `attr_group` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('1','手机数码','1','');");
E_D("replace into `ecs_goods_type` values('2','服饰鞋帽','1','');");
E_D("replace into `ecs_goods_type` values('3','化妆品','1','');");
E_D("replace into `ecs_goods_type` values('4','人人','1','太热太热\r\n杨瑞');");

require("../../inc/footer.php");
?>
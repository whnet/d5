<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_corn`;");
E_C("CREATE TABLE `ecs_weixin_corn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `createtime` int(11) NOT NULL,
  `sendtime` int(11) NOT NULL,
  `issend` tinyint(4) NOT NULL COMMENT '0未发送1成功2失败',
  `ecuid` int(11) NOT NULL COMMENT '系统用户ID',
  `sendtype` tinyint(1) NOT NULL COMMENT '0单人1所有',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_corn` values('1','a:3:{s:6:\"touser\";s:28:\"oYTrKtxndrT2WnUUutzoJlYb3QsU\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463442794','1463442794','0','60','0');");
E_D("replace into `ecs_weixin_corn` values('2','a:3:{s:6:\"touser\";s:28:\"oYTrKtxndrT2WnUUutzoJlYb3QsU\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463443593','1463443593','0','60','0');");
E_D("replace into `ecs_weixin_corn` values('3','a:3:{s:6:\"touser\";s:28:\"oYTrKt3AXVaEXcHhrGriq9n2TykA\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463541516','1463541516','0','61','0');");
E_D("replace into `ecs_weixin_corn` values('4','a:3:{s:6:\"touser\";s:28:\"oYTrKtwX_mVL4r5Qo1hycf75h1LM\";s:7:\"msgtype\";s:4:\"text\";s:4:\"text\";a:1:{s:7:\"content\";s:30:\"恭喜你订单提交成功！\";}}','1463641618','1463641618','0','68','0');");

require("../../inc/footer.php");
?>
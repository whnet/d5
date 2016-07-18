<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_jflog`;");
E_C("CREATE TABLE `ecs_weixin_jflog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fake_id` varchar(32) NOT NULL,
  `jf_type` int(11) NOT NULL COMMENT '1 一次性赠送 2按日计算',
  `key_id` int(11) NOT NULL COMMENT '命令ID',
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `num` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fake_id` (`fake_id`),
  KEY `createymd` (`createymd`),
  KEY `key_id` (`key_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_jflog` values('1','oWeRDuCrUkgH3FkwhTO45twRnBNQ','1','3','1458286119','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('2','oWeRDuCrUkgH3FkwhTO45twRnBNQ','0','0','1458288806','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('3','oWeRDuJdvF3hl_lRD2Gf0EsQ35KU','2','2','1458306534','2016-03-18','10');");
E_D("replace into `ecs_weixin_jflog` values('4','ojeCwvxmevoXgwWje7bnSewbmudI','0','0','1458384947','2016-03-19','10');");
E_D("replace into `ecs_weixin_jflog` values('5','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1463442754','2016-05-16','10');");
E_D("replace into `ecs_weixin_jflog` values('6','oYTrKt3AXVaEXcHhrGriq9n2TykA','0','0','1463541376','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('7','oYTrKt3AXVaEXcHhrGriq9n2TykA','2','1','1463541391','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('8','oYTrKt3pTIjY8IZDjje17lyKgq-4','2','1','1463553348','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('9','oYTrKt11zG3U5AaKU4j2-XsCvbio','0','0','1463589749','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('10','oYTrKt11zG3U5AaKU4j2-XsCvbio','2','2','1463589754','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('11','oYTrKt68LMA8g9B9F-uTZFMRfLeY','0','0','1463615867','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('12','oYTrKt68LMA8g9B9F-uTZFMRfLeY','2','2','1463615914','2016-05-18','10');");
E_D("replace into `ecs_weixin_jflog` values('13','oYTrKtxndrT2WnUUutzoJlYb3QsU','2','2','1463634882','2016-05-19','10');");
E_D("replace into `ecs_weixin_jflog` values('14','oYTrKtwX_mVL4r5Qo1hycf75h1LM','2','2','1463635208','2016-05-19','10');");
E_D("replace into `ecs_weixin_jflog` values('15','oYTrKt9yQQQApKntCjOMdKsqANJw','2','2','1463644127','2016-05-19','10');");

require("../../inc/footer.php");
?>
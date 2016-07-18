<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_searchengine`;");
E_C("CREATE TABLE `ecs_searchengine` (
  `date` date NOT NULL DEFAULT '0000-00-00',
  `searchengine` varchar(20) NOT NULL DEFAULT '',
  `count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`date`,`searchengine`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_searchengine` values('2016-03-16','SOGOU','31');");
E_D("replace into `ecs_searchengine` values('2016-03-17','SOGOU','20');");
E_D("replace into `ecs_searchengine` values('2016-03-18','SOGOU','8');");
E_D("replace into `ecs_searchengine` values('2016-03-18','GOOGLE','3');");
E_D("replace into `ecs_searchengine` values('2016-03-19','SOGOU','21');");
E_D("replace into `ecs_searchengine` values('2016-03-19','GOOGLE','1');");
E_D("replace into `ecs_searchengine` values('2016-05-17','GOOGLE','8');");
E_D("replace into `ecs_searchengine` values('2016-05-18','GOOGLE','65');");
E_D("replace into `ecs_searchengine` values('2016-05-18','YAHOO','5');");
E_D("replace into `ecs_searchengine` values('2016-05-18','SOGOU','2727');");
E_D("replace into `ecs_searchengine` values('2016-05-19','SOGOU','611');");
E_D("replace into `ecs_searchengine` values('2016-05-19','GOOGLE','151');");
E_D("replace into `ecs_searchengine` values('2016-05-19','YAHOO','3');");

require("../../inc/footer.php");
?>
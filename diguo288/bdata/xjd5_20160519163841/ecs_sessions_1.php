<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `expiry` int(10) unsigned NOT NULL DEFAULT '0',
  `userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `adminid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ip` char(15) NOT NULL DEFAULT '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('4f6756dee83877a173ea919d13f087e4','1463646474','0','0','123.125.71.72','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('f80455514c497113c89d7f2aa79f0c88','1463646747','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e5ec09552a040f9cedd9728b0579fb24','1463647102','0','0','139.205.55.228','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('fdfd376783aed1533cba58c9cba78490','1463647116','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c4eb5eb6b685736d849ab9794f41e350','1463647107','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4366f3500d3b155b4696cc06891a5a27','1463645316','0','0','123.125.71.77','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b4bded8f6f99f23c96d6a0d5c806c347','1463645657','0','0','119.57.158.71','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7619b3e5d2417bdd6b6261195d5dc755','1463645552','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4b806245547b9bd890386d7fc5ef16d0','1463645560','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('be52d82b10c960d027e92fbe7de5d536','1463645562','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c1d35078b6709b658546e542e56fcc13','1463645604','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('bf4f851ee4c2853fe381316a21a23bbb','1463645611','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('13c00984fd649e17e3b44570dd4cca07','1463645625','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('418442abd0d9a58c311a221cfb449502','1463645665','0','0','220.181.108.94','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('15ffd2c1d3df0fc14dc63359747284d3','1463645776','0','0','211.89.227.49','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9a6400f0d815e95da1df711dd519114e','1463645865','0','0','119.57.158.74','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('80d63cef9d861a9835d7ab1b13c1fb80','1463645880','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a4144b8b3356a4324a5b9f9d699482b4','1463645888','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9e52c9e33d56bdea2991208293e83c13','1463645890','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('93d0d9a73b9c64d0306c3e3e9902175e','1463645930','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('9f78bc294d8d7118cad73fd453386ba2','1463645938','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b595e2338229fe6c2635013945656e16','1463645952','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('8e3ab0b294eeedfb6393db7a5e83ea06','1463646038','0','0','42.156.137.105','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d16ebc7ad4925f77140406a6423f44e0','1463646203','0','0','220.181.108.113','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('85157788e2f6aad6e27cf07df7e68e15','1463646205','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('685d24da83c142fd85bc494583e08dab','1463646214','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('283bacfcf9b500f21bcbd780f8a4f4f9','1463646215','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('37fdc624058f17be655bdacce6cf0175','1463646256','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7bde39b8ad2b75155e496e823e52f3d1','1463646264','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a4f1e756c3edeb506903b1560ef8cba5','1463646278','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ced0ffd77ae257ef5e9357420b7ddf8a','1463646472','70','0','101.226.233.148','wx_05198149','1','1.00','wx_05198149@163.com','a:4:{s:4:\"wxid\";N;s:9:\"last_time\";s:1:\"0\";s:7:\"last_ip\";s:0:\"\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('5c698d0cfe1a1f5a244e8c21abc4acad','1463646480','0','0','101.226.233.143','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('6ebfec9565f5ccb3e7296551092d0cc2','1463646494','0','0','220.181.108.94','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('5352beefbbd56dfbba2021c527a98fe4','1463646519','0','0','101.226.233.158','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7cefe35bdb67911d483967c4fd14d693','1463646523','0','0','101.226.233.148','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4a59d64ba0748d7adf5948c5cee8216f','1463646727','70','0','221.174.167.162','wx_05198149','1','1.00','wx_05198149@163.com','a:4:{s:4:\"wxid\";s:28:\"oYTrKt3tzO53ERBzbojXnDM6J7pI\";s:9:\"last_time\";s:10:\"1463646716\";s:7:\"last_ip\";s:15:\"221.174.167.162\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4a1f48faf8cba52955a78b1b67c7e178','1463646560','0','0','117.185.27.142','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e5c9b9e78faead26e83fb496696554c1','1463646557','0','0','117.185.27.142','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('26bc6248b696873e7d4427d98151d4c0','1463646566','0','0','140.207.54.158','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d387e42004c6a850c18ad93fbad743ee','1463646571','0','0','140.207.185.122','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b8ed3759f11e8fc7dc9ac4e73384c65f','1463646570','0','0','117.185.27.146','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('8027b151899d67226e5b460c7b69a04f','1463646567','0','0','117.185.24.243','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e8048080bb0907a4177081b4261c9ec3','1463646568','0','0','117.135.170.67','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3c07e373cc922de4d75214a4ba394895','1463646566','0','0','140.207.63.103','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('78aa3ec01274cec25dd64cb79fecf040','1463646568','0','0','140.207.54.199','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('c9956c4344cf643a6cdc48ecb1a65573','1463646567','0','0','140.207.185.125','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ff3432fa21dced9787d8622541099426','1463646567','0','0','117.185.27.147','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('61a9ecbcfbda3b6dac6ff7c70a74b44d','1463646571','0','0','140.207.185.124','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('df97754aac593ad594b27b5773925e43','1463646571','0','0','117.185.27.104','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d3f54ba8c01785b6b213e65552474c47','1463646561','0','0','140.207.185.122','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2744a2db2fc076ab8399a8616e8031ee','1463646566','0','0','140.207.63.103','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('ece919b969155d1b5f8dca4b375dad47','1463646567','0','0','117.185.27.147','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('4312a6dffbc79bc8162384c8c1d66d6d','1463646562','0','0','117.144.246.149','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('0a8ff3170a81cc9d0a5e1a3e878ae18b','1463646561','0','0','140.207.54.144','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('a9dde8794163447f1e79ee8ede2b4fc2','1463646600','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('666784ed8392218e547e175b3ba2f67e','1463646564','0','0','140.207.54.199','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('859f14cc1aef48751ea8c086612fa0fd','1463646570','0','0','117.144.246.77','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('22e0164a8056d11703577e37210a0ce4','1463646605','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7f2fb165db40d0146df074534c238fdf','1463646571','0','0','117.185.27.147','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('8ee96412e86ab638d0ac4368cecdd5df','1463646572','0','0','140.207.55.80','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('89573d7714fae55b730383e094d045c4','1463646592','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('e254806c5fa33376aed5b3aa6c33d783','1463646585','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('d265d603bc4d82c8e9e0e37301a8a00d','1463646593','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('7b4e0fd84ab02fad4023439cab4323c5','1463646606','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('2048dbca33d7a5b75c5e74cc10e398c9','1463646758','0','0','180.153.229.140','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('b73c76dfbf157e50798bb08fdf34fefa','1463646869','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('934c2883924c85175e08dfdd8fdffa96','1463646911','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('bbb8db3267ef324dd2b02c7ad5362596','1463646919','0','0','111.206.61.180','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('3368bd7755381279a5f56d6dd1d5f178','1463646933','0','0','125.88.219.96','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");
E_D("replace into `ecs_sessions` values('09f94560b24bd239a594ee460b0a7099','1463647041','0','1','139.205.55.228','0','0','0.00','0','a:4:{s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:10:\"last_check\";i:1463646991;s:12:\"suppliers_id\";s:1:\"0\";}');");
E_D("replace into `ecs_sessions` values('8a814448820a85ee2d7f4fb45bbc0036','1463647143','0','0','101.226.233.158','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>
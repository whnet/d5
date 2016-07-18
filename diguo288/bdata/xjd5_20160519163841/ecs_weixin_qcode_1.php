<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_qcode`;");
E_C("CREATE TABLE `ecs_weixin_qcode` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `content` varchar(100) NOT NULL,
  `qcode` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_qcode` values('1','4','60','gQG37zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL0dVeFVSVFBsa0UzcDVJVkFSV0NsAAIEX1s6VwMEAAAAAA==');");
E_D("replace into `ecs_weixin_qcode` values('2','4','0','gQGu7zoAAAAAAAAAASxodHRwOi8vd2VpeGluLnFxLmNvbS9xL3FFeWFxbWJsSkUxZDd6VFZpMkNsAAIEzns6VwMEAAAAAA==');");

require("../../inc/footer.php");
?>
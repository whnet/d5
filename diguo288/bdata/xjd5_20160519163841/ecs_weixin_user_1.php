<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_weixin_user`;");
E_C("CREATE TABLE `ecs_weixin_user` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `ecuid` int(11) NOT NULL COMMENT '绑定用户ID',
  `fake_id` varchar(32) NOT NULL,
  `createtime` int(11) NOT NULL,
  `createymd` date NOT NULL,
  `isfollow` tinyint(1) NOT NULL,
  `nickname` varchar(32) NOT NULL,
  `sex` tinyint(1) NOT NULL,
  `headimgurl` varchar(200) NOT NULL,
  `country` varchar(20) NOT NULL,
  `province` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `sign_num` int(11) NOT NULL COMMENT '连续签到次数',
  `access_token` varchar(40) NOT NULL COMMENT 'token',
  `expire_in` int(11) NOT NULL COMMENT 'token到期时间',
  `from_id` int(11) NOT NULL,
  `Latitude` varchar(32) NOT NULL,
  `Longitude` varchar(32) NOT NULL,
  `Precision` varchar(32) NOT NULL,
  PRIMARY KEY (`uid`),
  UNIQUE KEY `fake_id` (`fake_id`),
  KEY `ecuid` (`ecuid`),
  KEY `from_id` (`from_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_weixin_user` values('1','60','oYTrKtxndrT2WnUUutzoJlYb3QsU','1463442283','2016-05-16','1','OutMan','1','http://wx.qlogo.cn/mmopen/PiajxSqBRaEJgibR72A1QTIyWXNXVAPAhalT4qUq57gaxQOOpkuhSJ7AA4gsKksOZ0He7Gg3EEEOR9fpBZFHSAJw/0','中国','四川','德阳','0','yEWXeOGGnURSN8XvWiKxTX3kStHzp3DgQbASVT2B','1463807665','1','31.134960','104.164261','40.000000');");
E_D("replace into `ecs_weixin_user` values('2','61','oYTrKt3AXVaEXcHhrGriq9n2TykA','1463541137','2016-05-18','1','Boo✨','1','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnoibxzOL7KWibhYMNBD1xWUHlUj1R3SVmX5H7JBkKgqFYnPKyxibP9KAw2ZqMCODoJ0HOcfeeyoXgNdRy3SCB2VQYS/0','中国','陕西','咸阳','0','CJnhCRujxP7BAu3xPYIpLSR-UdM0jb0NxENoIYwl','1463713937','1','','','');");
E_D("replace into `ecs_weixin_user` values('3','0','oYTrKt2KvDqecPYC8htMhufjgPk0','1463548444','2016-05-18','1','大闸蟹','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicq12h3q0nnLPUgrAeV6AO35mxJIBY8sokDrhLgQYrYRPT6r0eYlr23tS8AgFoia0TVFQfuy41ibKNv8/0','中国','福建','福州','0','cxd2UHg7i_WpmTl8VXF-gUSLpnozpASd49pzUBwI','1463721244','1','25.988848','119.450867','70.000000');");
E_D("replace into `ecs_weixin_user` values('4','63','oYTrKt3pTIjY8IZDjje17lyKgq-4','1463551501','2016-05-18','1','vanfer','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGp7dD3r0zktwic8aE7Mn1zE2mSNBCmPgKsQQol8yu58zrgicRbPOlTUXEaNIZTeeG89OGpJJmRgcZZrQPqAIagSfr/0','中国','河北','石家庄','0','Ih2z0pBV9YgfP3SAhr3bUldRHLlu48R9UhVt0f0O','1463726147','1','','','');");
E_D("replace into `ecs_weixin_user` values('5','64','oYTrKt9vOSBhLhaUiize06KU1jnU','1463555297','2016-05-18','1','长空','1','http://wx.qlogo.cn/mmopen/ajNVdqHZLLCnXTS74No1fMSo9IazCclM60ppqMueCWWLtOdkE2ibLfCnrYgfTxfvwm81JTowhYOhNEibeBljicWbQ/0','中非共和国','','','0','XYUisjFv_EPbReIiNKHNjSENaffiWgjsK4bfo8Ya','1463814481','1','','','');");
E_D("replace into `ecs_weixin_user` values('6','0','oYTrKt61_f0-sMjUabsenUdik01M','1463580124','2016-05-18','1','优鲜配','1','http://wx.qlogo.cn/mmopen/2Y7nk5cfQno8RnAFug1NfPJ5lR0oJeJUoTUibhAGPH8e11Nmj5JNIUWg2mwH5ROG2gofd78WpCOPQribG2CME8SzfBoDUYNgUic/0','中国','四川','绵阳','0','nYQX7P8aM2s4sk-nUxfE5l83TRsLTeKogRvssf1a','1463752924','1','','','');");
E_D("replace into `ecs_weixin_user` values('7','65','oYTrKt11zG3U5AaKU4j2-XsCvbio','1463589696','2016-05-18','1','心似苍井空如水','1','http://wx.qlogo.cn/mmopen/ZUKDK3fbgGpzWKlAic8YrtsicCC3tWwg37GxwgGfgfSKjOn6CMCobJGy8HtkX6R57Ncus1yZs6YtYSGMlBpriciarE4rjcIcwu9j/0','中国','云南','红河','0','mJGKyNn_SWg4qzoCILunR1x_XWu8XfD1KKFRoncG','1463762496','1','','','');");
E_D("replace into `ecs_weixin_user` values('8','67','oYTrKt68LMA8g9B9F-uTZFMRfLeY','1463615799','2016-05-18','1','丁长老','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzovhXLrMsibicqxVZ4uboflqbmNDeV5pns2BvVuMAItRUzprCPWhpdSF9OyYcDzZXYld4dfg2oxkJk97nVj1pvgvB/0','中国','山西','运城','0','DmaZGLvMt4cuEe2uO7jIXMwlOS22jj-rQa_JbhSu','1463788599','1','35.048939','110.989143','60.000000');");
E_D("replace into `ecs_weixin_user` values('9','0','oYTrKtwX_mVL4r5Qo1hycf75h1LM','1463633084','2016-05-19','1','丁仕前','1','http://wx.qlogo.cn/mmopen/j8cooK2zCqrpjclzkHEW9zib0lqvoIYxZJr12kKcd39iaO4jQmkNzqicZe9qiaKcGBGHDeNVX93RBoxbUibxgRwNrsg/0','中国','浙江','杭州','0','1F_nstbUbLe9BbnKqa1LNg3l7aPTDXLZC7i5Ip4T','1463805884','1','','','');");
E_D("replace into `ecs_weixin_user` values('11','69','oYTrKt9yQQQApKntCjOMdKsqANJw','1463644113','2016-05-19','1',' U.Z °','1','http://wx.qlogo.cn/mmopen/9JgwCfuqZzoKwJnBrdeh6ecxzBvuEpwkhMU8TrzHWIrBibB0AVWBm0licZHMQvq2XCRkN1RJoYYgyrlS3farNghIBxE5rIibQwb/0','中国','安徽','池州','0','0OdTd_o86UIiKcJ1x2aAx-QfLVhpAFFvvwcbwD_P','1463816913','1','','','');");
E_D("replace into `ecs_weixin_user` values('10','0','oYTrKt7RaEymm5cnPaFSiwFZneI8','1463634150','2016-05-19','0','匠作坊','2','http://wx.qlogo.cn/mmopen/2Y7nk5cfQnrstfQzXZSEKRML1DIetxIbXFuRE5OU2z4UTnwBQOz6LqlI1CojeyQ34oKMCbicMr5MwQlP1iaQeWVBkIiatPDxyBic/0','中国','甘肃','定西','0','xTM8oaENBlK6f9nuHMePT0S3biViREMEbpr6qDBg','0','1','','','');");
E_D("replace into `ecs_weixin_user` values('12','70','oYTrKt3tzO53ERBzbojXnDM6J7pI','1463646472','2016-05-19','1','高邮巾帼居家养老','1','http://wx.qlogo.cn/mmopen/rsCbqnWoia3CP1sjEDP1Q9jS3evm09zngSKCOv01IWahVGgcknK4MpfnOwsQRWzPr2iaT394vfOg4ORSibkByeU5OibRuRk4xxicv/0','中国','江苏','扬州','0','NNhvZOM4ET_eBiUzCiT4GTeJqBDIlnSnj1aep8Ti','1463819272','1','32.792164','119.427567','60.000000');");

require("../../inc/footer.php");
?>
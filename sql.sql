/*
SQLyog Ultimate v8.55 
MySQL - 5.5.27 : Database - retailernew
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`retailernew` /*!40100 DEFAULT CHARACTER SET latin1 */;

/*Table structure for table `ret_files` */

DROP TABLE IF EXISTS `ret_files`;

CREATE TABLE `ret_files` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `filecolumns` text,
  `keyid` varchar(200) NOT NULL,
  `udate` datetime DEFAULT NULL,
  `gdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `ret_files` */

insert  into `ret_files`(`ID`,`user_id`,`title`,`filename`,`filecolumns`,`keyid`,`udate`,`gdate`) values (2,11,'INF3.csv','INF3.csv','gdfg','93f6c207c2ecaf7ed16c0006b43a80c8','2016-01-28 17:14:24',NULL),(3,11,'esdsae_List.csv','esdsae_List.csv','dsf','93f6c207c2ecaf7ed16c0006b43a80c8','2016-01-28 17:21:58',NULL),(4,11,'esdsae_List4.csv','esdsae_List4.csv','gd gdfg ','93f6c207c2ecaf7ed16c0006b43a80c8','2016-01-29 10:02:05',NULL),(5,11,'club360.sql.gz','club360.sql.gz',' hgfh','93f6c207c2ecaf7ed16c0006b43a80c8','2016-01-29 14:38:16',NULL),(6,11,'INF3.csv','INF3.csv','hgfhgfhgf','93f6c207c2ecaf7ed16c0006b43a80c8','2016-02-02 14:55:28',NULL),(7,11,'INF3.csv','INF3.csv','jhg','93f6c207c2ecaf7ed16c0006b43a80c8','2016-02-02 14:55:46',NULL);

/*Table structure for table `ret_usermeta` */

DROP TABLE IF EXISTS `ret_usermeta`;

CREATE TABLE `ret_usermeta` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `meta_key` varchar(300) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `ret_usermeta` */

insert  into `ret_usermeta`(`ID`,`user_id`,`meta_key`,`meta_value`) values (1,11,'admin_notification_web','Yes'),(2,11,'admin_notification_email','Yes'),(3,11,'feature_notification_web','No'),(4,11,'feature_notification_email','No'),(5,11,'system_status_web','Yes'),(6,11,'system_status_email','Yes'),(7,11,'configuration_web','Yes'),(8,11,'configuration_email','Yes');

/*Table structure for table `ret_users` */

DROP TABLE IF EXISTS `ret_users`;

CREATE TABLE `ret_users` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_pass` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_type` varchar(50) DEFAULT 'user',
  `company` varchar(200) DEFAULT NULL,
  `fname` varchar(200) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `tokenid` varchar(200) DEFAULT NULL,
  `keyid` varchar(200) DEFAULT NULL,
  `cdate` datetime NOT NULL,
  `udate` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activationkey` varchar(200) NOT NULL,
  `upload_limit` int(10) DEFAULT '1000000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

/*Data for the table `ret_users` */

insert  into `ret_users`(`ID`,`user_pass`,`user_email`,`user_type`,`company`,`fname`,`phoneno`,`lname`,`tokenid`,`keyid`,`cdate`,`udate`,`active`,`activationkey`,`upload_limit`) values (1,'a7b9cbb0a672c4d4fa00bcad38ce7064111e25f6','hggf@gmail.com','user','gfdg','gdf','ggfd','gfd',NULL,NULL,'2015-12-31 07:44:53','2015-12-31 07:44:53',0,'fa8ce34e7f5612c3a25951430104a3f6ffa0f0a4',1000000),(2,'961c4ebda327e720aa4e902142e8a0d1b77bd14d','hggf@gmail.com','user','gfdg','gdf','ggfd','gfd',NULL,NULL,'2015-12-31 07:47:30','2015-12-31 07:47:30',0,'fa8ce34e7f5612c3a25951430104a3f6ffa0f0a4',1000000),(4,'144db35762d4fea933a30f11c9546f000e038410','fffff@dsa.xom','user','gdfg','hgf','hgfhgf','hgf','f654934ab6f993de119fca24fe85c81c64376ae8','192a0d65b76d5315b5ebea17a436b4b141f1c9e8','2015-12-31 12:13:03','2015-12-31 12:13:03',1,'652c0a19b5a1fcc7e45865795de92fecbc9a2354',1000000),(5,'4ba9e5910cd3358d28c71ee5f3fc784563b33f70','fdfd@gmail.com','user','trete','hghg','464','6456','cef3b651c93021e868d7bd3c81c6d374','4ad82ac482ea25af3d9eb38a00b29700','2015-12-31 14:24:31','2015-12-31 14:24:31',0,'ccfad8680bba6ec966f5f4aa20e6ebcf1aafad2b',1000000),(6,'705672dadab30d5b9c5527bf8e7542a6f15e64e4','rinku.vantage2@gmail.com','admin','Vantage webtech','Rinku','5765756757','Kamboj','24119a41d0e88eddffe27c71192d0dfc','d4f622f8134cb3944f494b6f9fc88b5a','2015-12-31 15:32:11','2016-01-18 05:43:29',1,'20576f46fd5d363c88d2241b2bba1c2deee04b4b',1000000),(7,'bace9b0edded126b4977bbd092bb477c0d50df54','ajay@gmail.com','user','Vantage webtech','Ajay','5765756757','Rana','dba2f2fed7a2ef886857ce0080c4f70c','04de504595689088d3e5050f32ba8ff8','2015-12-31 15:34:26','2016-01-07 11:52:08',1,'a12e8912318ab875c74654558d8e34e467719f67',1000000),(8,'352b87e748e37d3cff142e9a3291034ebf9a9a0a','hgfhf@fcdsdf.com','user','hgfhgf','hgfh','hgfhfh','sadasds','a6b1cebb4199030c251fcaa0bd0ada3b','9251cc53344bc84233779e96ca9a6ddc','2016-01-07 10:11:24','2016-01-07 10:11:24',0,'caf23a2d2285e4b876c63f2ca9ab3d65687975d5',1000000),(9,'1798027ca9df4e1192af4acac6a19b7177d4a5ab','gfdgd@fd.com','user','gfd','vcbcvgdf','75765','gfd','79990b12cf3ccf3a5296444037cd0a3a','8d4f9332885da8aa6a5216b34cd765aa','2016-01-07 11:24:54','2016-01-07 11:50:40',0,'3fc3723b612d6d43c749f01f749c36a63a072d90',1000000),(10,'d617ef54500a72154c6bbc726f8df632ae45a80a','gdf@das.com','user','fdsd','fdsf','6464456465','hfhg','9e244850c0e9fbea353ce73b6b194840','f3721a1e42fcb4df6b9c5132ab014a7e','2016-01-07 13:11:20','2016-01-07 13:11:20',0,'8415a36bcb437ebe624f2caa1ae76d0d0b65c67a',1000000),(11,'e7a4659b7fbef6efbcc97bc4ed16b16bc78d6196','rinku.vantage@gmail.com','admin','gdfg','gdf','765757645645','hgj','ec1faa2dd4d2cc2ffc0429a8ba73883a','93f6c207c2ecaf7ed16c0006b43a80c8','2016-01-11 06:44:16','2016-02-08 17:30:28',1,'f5410089877339b350c332c3e19bc1797ee459c8',1000000),(12,'75fd799ef7f4bd0c2060ab4a68d0b3a99c221493','ajayhhh@gmail.com','user','gfhf','hgf','765757645645','hhgf','9eb1e5b34fa0ee0499f82dc80c2bbb60','eefcea6e40afac2a4ea3f2cec707bcc6','2016-01-13 08:29:35','2016-01-13 08:29:35',0,'e84d80c00541555a356d71a9f765f0c50049f07a',1000000),(13,'f934e359760fd2cb5c541a09ab574f79d7727c17','ajayhgff@gmail.com','user','gdfg','gdfg','765757645645','gdf','acb3d0ef449eec7e452b4c97187448a0','754134379a3a2dec8016cc8c053dde75','2016-01-13 12:02:03','2016-01-13 12:02:03',0,'01ff390c5ed270e54ee8d7b8512ec03021475d69',1000000),(14,'261ce904d9d048012b59431da51967edbde98a93','ajayhgffgfd@gmail.com','user','gdfg','gdfg','765757645645','gdf','5111518d140f6c97badfa4aa831f0258','2997848196def76372ed3ff9dbd221b9','2016-01-13 12:03:57','2016-01-13 12:03:57',0,'349aa96e12660b8c9321dc977039c6dee6795ebc',1000000),(15,'6b9e507966570789463bd81c1687c73562feaa66','jhgjhg@das.com','user','gfd','hgfh','765757645645','kj','d45fe0f7ccd4343b7e0b869472819aa3','069f11771b749f1ab65313b5f98ff63b','2016-01-13 12:17:07','2016-01-13 12:17:07',0,'cf0a8c1e2e523fbb8fd05056c5380743492d5784',1000000);

/*Table structure for table `ret_zone` */

DROP TABLE IF EXISTS `ret_zone`;

CREATE TABLE `ret_zone` (
  `zone_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) COLLATE utf8_bin NOT NULL,
  `zone_name` varchar(35) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`zone_id`),
  KEY `idx_zone_name` (`zone_name`)
) ENGINE=MyISAM AUTO_INCREMENT=417 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `ret_zone` */

insert  into `ret_zone`(`zone_id`,`country_code`,`zone_name`) values (1,'AD','Europe/Andorra'),(2,'AE','Asia/Dubai'),(3,'AF','Asia/Kabul'),(4,'AG','America/Antigua'),(5,'AI','America/Anguilla'),(6,'AL','Europe/Tirane'),(7,'AM','Asia/Yerevan'),(8,'AO','Africa/Luanda'),(9,'AQ','Antarctica/McMurdo'),(10,'AQ','Antarctica/Rothera'),(11,'AQ','Antarctica/Palmer'),(12,'AQ','Antarctica/Mawson'),(13,'AQ','Antarctica/Davis'),(14,'AQ','Antarctica/Casey'),(15,'AQ','Antarctica/Vostok'),(16,'AQ','Antarctica/DumontDUrville'),(17,'AQ','Antarctica/Syowa'),(18,'AQ','Antarctica/Troll'),(19,'AR','America/Argentina/Buenos_Aires'),(20,'AR','America/Argentina/Cordoba'),(21,'AR','America/Argentina/Salta'),(22,'AR','America/Argentina/Jujuy'),(23,'AR','America/Argentina/Tucuman'),(24,'AR','America/Argentina/Catamarca'),(25,'AR','America/Argentina/La_Rioja'),(26,'AR','America/Argentina/San_Juan'),(27,'AR','America/Argentina/Mendoza'),(28,'AR','America/Argentina/San_Luis'),(29,'AR','America/Argentina/Rio_Gallegos'),(30,'AR','America/Argentina/Ushuaia'),(31,'AS','Pacific/Pago_Pago'),(32,'AT','Europe/Vienna'),(33,'AU','Australia/Lord_Howe'),(34,'AU','Antarctica/Macquarie'),(35,'AU','Australia/Hobart'),(36,'AU','Australia/Currie'),(37,'AU','Australia/Melbourne'),(38,'AU','Australia/Sydney'),(39,'AU','Australia/Broken_Hill'),(40,'AU','Australia/Brisbane'),(41,'AU','Australia/Lindeman'),(42,'AU','Australia/Adelaide'),(43,'AU','Australia/Darwin'),(44,'AU','Australia/Perth'),(45,'AU','Australia/Eucla'),(46,'AW','America/Aruba'),(47,'AX','Europe/Mariehamn'),(48,'AZ','Asia/Baku'),(49,'BA','Europe/Sarajevo'),(50,'BB','America/Barbados'),(51,'BD','Asia/Dhaka'),(52,'BE','Europe/Brussels'),(53,'BF','Africa/Ouagadougou'),(54,'BG','Europe/Sofia'),(55,'BH','Asia/Bahrain'),(56,'BI','Africa/Bujumbura'),(57,'BJ','Africa/Porto-Novo'),(58,'BL','America/St_Barthelemy'),(59,'BM','Atlantic/Bermuda'),(60,'BN','Asia/Brunei'),(61,'BO','America/La_Paz'),(62,'BQ','America/Kralendijk'),(63,'BR','America/Noronha'),(64,'BR','America/Belem'),(65,'BR','America/Fortaleza'),(66,'BR','America/Recife'),(67,'BR','America/Araguaina'),(68,'BR','America/Maceio'),(69,'BR','America/Bahia'),(70,'BR','America/Sao_Paulo'),(71,'BR','America/Campo_Grande'),(72,'BR','America/Cuiaba'),(73,'BR','America/Santarem'),(74,'BR','America/Porto_Velho'),(75,'BR','America/Boa_Vista'),(76,'BR','America/Manaus'),(77,'BR','America/Eirunepe'),(78,'BR','America/Rio_Branco'),(79,'BS','America/Nassau'),(80,'BT','Asia/Thimphu'),(81,'BW','Africa/Gaborone'),(82,'BY','Europe/Minsk'),(83,'BZ','America/Belize'),(84,'CA','America/St_Johns'),(85,'CA','America/Halifax'),(86,'CA','America/Glace_Bay'),(87,'CA','America/Moncton'),(88,'CA','America/Goose_Bay'),(89,'CA','America/Blanc-Sablon'),(90,'CA','America/Toronto'),(91,'CA','America/Nipigon'),(92,'CA','America/Thunder_Bay'),(93,'CA','America/Iqaluit'),(94,'CA','America/Pangnirtung'),(95,'CA','America/Resolute'),(96,'CA','America/Atikokan'),(97,'CA','America/Rankin_Inlet'),(98,'CA','America/Winnipeg'),(99,'CA','America/Rainy_River'),(100,'CA','America/Regina'),(101,'CA','America/Swift_Current'),(102,'CA','America/Edmonton'),(103,'CA','America/Cambridge_Bay'),(104,'CA','America/Yellowknife'),(105,'CA','America/Inuvik'),(106,'CA','America/Creston'),(107,'CA','America/Dawson_Creek'),(108,'CA','America/Vancouver'),(109,'CA','America/Whitehorse'),(110,'CA','America/Dawson'),(111,'CC','Indian/Cocos'),(112,'CD','Africa/Kinshasa'),(113,'CD','Africa/Lubumbashi'),(114,'CF','Africa/Bangui'),(115,'CG','Africa/Brazzaville'),(116,'CH','Europe/Zurich'),(117,'CI','Africa/Abidjan'),(118,'CK','Pacific/Rarotonga'),(119,'CL','America/Santiago'),(120,'CL','Pacific/Easter'),(121,'CM','Africa/Douala'),(122,'CN','Asia/Shanghai'),(123,'CN','Asia/Urumqi'),(124,'CO','America/Bogota'),(125,'CR','America/Costa_Rica'),(126,'CU','America/Havana'),(127,'CV','Atlantic/Cape_Verde'),(128,'CW','America/Curacao'),(129,'CX','Indian/Christmas'),(130,'CY','Asia/Nicosia'),(131,'CZ','Europe/Prague'),(132,'DE','Europe/Berlin'),(133,'DE','Europe/Busingen'),(134,'DJ','Africa/Djibouti'),(135,'DK','Europe/Copenhagen'),(136,'DM','America/Dominica'),(137,'DO','America/Santo_Domingo'),(138,'DZ','Africa/Algiers'),(139,'EC','America/Guayaquil'),(140,'EC','Pacific/Galapagos'),(141,'EE','Europe/Tallinn'),(142,'EG','Africa/Cairo'),(143,'EH','Africa/El_Aaiun'),(144,'ER','Africa/Asmara'),(145,'ES','Europe/Madrid'),(146,'ES','Africa/Ceuta'),(147,'ES','Atlantic/Canary'),(148,'ET','Africa/Addis_Ababa'),(149,'FI','Europe/Helsinki'),(150,'FJ','Pacific/Fiji'),(151,'FK','Atlantic/Stanley'),(152,'FM','Pacific/Chuuk'),(153,'FM','Pacific/Pohnpei'),(154,'FM','Pacific/Kosrae'),(155,'FO','Atlantic/Faroe'),(156,'FR','Europe/Paris'),(157,'GA','Africa/Libreville'),(158,'GB','Europe/London'),(159,'GD','America/Grenada'),(160,'GE','Asia/Tbilisi'),(161,'GF','America/Cayenne'),(162,'GG','Europe/Guernsey'),(163,'GH','Africa/Accra'),(164,'GI','Europe/Gibraltar'),(165,'GL','America/Godthab'),(166,'GL','America/Danmarkshavn'),(167,'GL','America/Scoresbysund'),(168,'GL','America/Thule'),(169,'GM','Africa/Banjul'),(170,'GN','Africa/Conakry'),(171,'GP','America/Guadeloupe'),(172,'GQ','Africa/Malabo'),(173,'GR','Europe/Athens'),(174,'GS','Atlantic/South_Georgia'),(175,'GT','America/Guatemala'),(176,'GU','Pacific/Guam'),(177,'GW','Africa/Bissau'),(178,'GY','America/Guyana'),(179,'HK','Asia/Hong_Kong'),(180,'HN','America/Tegucigalpa'),(181,'HR','Europe/Zagreb'),(182,'HT','America/Port-au-Prince'),(183,'HU','Europe/Budapest'),(184,'ID','Asia/Jakarta'),(185,'ID','Asia/Pontianak'),(186,'ID','Asia/Makassar'),(187,'ID','Asia/Jayapura'),(188,'IE','Europe/Dublin'),(189,'IL','Asia/Jerusalem'),(190,'IM','Europe/Isle_of_Man'),(191,'IN','Asia/Kolkata'),(192,'IO','Indian/Chagos'),(193,'IQ','Asia/Baghdad'),(194,'IR','Asia/Tehran'),(195,'IS','Atlantic/Reykjavik'),(196,'IT','Europe/Rome'),(197,'JE','Europe/Jersey'),(198,'JM','America/Jamaica'),(199,'JO','Asia/Amman'),(200,'JP','Asia/Tokyo'),(201,'KE','Africa/Nairobi'),(202,'KG','Asia/Bishkek'),(203,'KH','Asia/Phnom_Penh'),(204,'KI','Pacific/Tarawa'),(205,'KI','Pacific/Enderbury'),(206,'KI','Pacific/Kiritimati'),(207,'KM','Indian/Comoro'),(208,'KN','America/St_Kitts'),(209,'KP','Asia/Pyongyang'),(210,'KR','Asia/Seoul'),(211,'KW','Asia/Kuwait'),(212,'KY','America/Cayman'),(213,'KZ','Asia/Almaty'),(214,'KZ','Asia/Qyzylorda'),(215,'KZ','Asia/Aqtobe'),(216,'KZ','Asia/Aqtau'),(217,'KZ','Asia/Oral'),(218,'LA','Asia/Vientiane'),(219,'LB','Asia/Beirut'),(220,'LC','America/St_Lucia'),(221,'LI','Europe/Vaduz'),(222,'LK','Asia/Colombo'),(223,'LR','Africa/Monrovia'),(224,'LS','Africa/Maseru'),(225,'LT','Europe/Vilnius'),(226,'LU','Europe/Luxembourg'),(227,'LV','Europe/Riga'),(228,'LY','Africa/Tripoli'),(229,'MA','Africa/Casablanca'),(230,'MC','Europe/Monaco'),(231,'MD','Europe/Chisinau'),(232,'ME','Europe/Podgorica'),(233,'MF','America/Marigot'),(234,'MG','Indian/Antananarivo'),(235,'MH','Pacific/Majuro'),(236,'MH','Pacific/Kwajalein'),(237,'MK','Europe/Skopje'),(238,'ML','Africa/Bamako'),(239,'MM','Asia/Rangoon'),(240,'MN','Asia/Ulaanbaatar'),(241,'MN','Asia/Hovd'),(242,'MN','Asia/Choibalsan'),(243,'MO','Asia/Macau'),(244,'MP','Pacific/Saipan'),(245,'MQ','America/Martinique'),(246,'MR','Africa/Nouakchott'),(247,'MS','America/Montserrat'),(248,'MT','Europe/Malta'),(249,'MU','Indian/Mauritius'),(250,'MV','Indian/Maldives'),(251,'MW','Africa/Blantyre'),(252,'MX','America/Mexico_City'),(253,'MX','America/Cancun'),(254,'MX','America/Merida'),(255,'MX','America/Monterrey'),(256,'MX','America/Matamoros'),(257,'MX','America/Mazatlan'),(258,'MX','America/Chihuahua'),(259,'MX','America/Ojinaga'),(260,'MX','America/Hermosillo'),(261,'MX','America/Tijuana'),(262,'MX','America/Santa_Isabel'),(263,'MX','America/Bahia_Banderas'),(264,'MY','Asia/Kuala_Lumpur'),(265,'MY','Asia/Kuching'),(266,'MZ','Africa/Maputo'),(267,'NA','Africa/Windhoek'),(268,'NC','Pacific/Noumea'),(269,'NE','Africa/Niamey'),(270,'NF','Pacific/Norfolk'),(271,'NG','Africa/Lagos'),(272,'NI','America/Managua'),(273,'NL','Europe/Amsterdam'),(274,'NO','Europe/Oslo'),(275,'NP','Asia/Kathmandu'),(276,'NR','Pacific/Nauru'),(277,'NU','Pacific/Niue'),(278,'NZ','Pacific/Auckland'),(279,'NZ','Pacific/Chatham'),(280,'OM','Asia/Muscat'),(281,'PA','America/Panama'),(282,'PE','America/Lima'),(283,'PF','Pacific/Tahiti'),(284,'PF','Pacific/Marquesas'),(285,'PF','Pacific/Gambier'),(286,'PG','Pacific/Port_Moresby'),(287,'PG','Pacific/Bougainville'),(288,'PH','Asia/Manila'),(289,'PK','Asia/Karachi'),(290,'PL','Europe/Warsaw'),(291,'PM','America/Miquelon'),(292,'PN','Pacific/Pitcairn'),(293,'PR','America/Puerto_Rico'),(294,'PS','Asia/Gaza'),(295,'PS','Asia/Hebron'),(296,'PT','Europe/Lisbon'),(297,'PT','Atlantic/Madeira'),(298,'PT','Atlantic/Azores'),(299,'PW','Pacific/Palau'),(300,'PY','America/Asuncion'),(301,'QA','Asia/Qatar'),(302,'RE','Indian/Reunion'),(303,'RO','Europe/Bucharest'),(304,'RS','Europe/Belgrade'),(305,'RU','Europe/Kaliningrad'),(306,'RU','Europe/Moscow'),(307,'RU','Europe/Simferopol'),(308,'RU','Europe/Volgograd'),(309,'RU','Europe/Samara'),(310,'RU','Asia/Yekaterinburg'),(311,'RU','Asia/Omsk'),(312,'RU','Asia/Novosibirsk'),(313,'RU','Asia/Novokuznetsk'),(314,'RU','Asia/Krasnoyarsk'),(315,'RU','Asia/Irkutsk'),(316,'RU','Asia/Chita'),(317,'RU','Asia/Yakutsk'),(318,'RU','Asia/Khandyga'),(319,'RU','Asia/Vladivostok'),(320,'RU','Asia/Sakhalin'),(321,'RU','Asia/Ust-Nera'),(322,'RU','Asia/Magadan'),(323,'RU','Asia/Srednekolymsk'),(324,'RU','Asia/Kamchatka'),(325,'RU','Asia/Anadyr'),(326,'RW','Africa/Kigali'),(327,'SA','Asia/Riyadh'),(328,'SB','Pacific/Guadalcanal'),(329,'SC','Indian/Mahe'),(330,'SD','Africa/Khartoum'),(331,'SE','Europe/Stockholm'),(332,'SG','Asia/Singapore'),(333,'SH','Atlantic/St_Helena'),(334,'SI','Europe/Ljubljana'),(335,'SJ','Arctic/Longyearbyen'),(336,'SK','Europe/Bratislava'),(337,'SL','Africa/Freetown'),(338,'SM','Europe/San_Marino'),(339,'SN','Africa/Dakar'),(340,'SO','Africa/Mogadishu'),(341,'SR','America/Paramaribo'),(342,'SS','Africa/Juba'),(343,'ST','Africa/Sao_Tome'),(344,'SV','America/El_Salvador'),(345,'SX','America/Lower_Princes'),(346,'SY','Asia/Damascus'),(347,'SZ','Africa/Mbabane'),(348,'TC','America/Grand_Turk'),(349,'TD','Africa/Ndjamena'),(350,'TF','Indian/Kerguelen'),(351,'TG','Africa/Lome'),(352,'TH','Asia/Bangkok'),(353,'TJ','Asia/Dushanbe'),(354,'TK','Pacific/Fakaofo'),(355,'TL','Asia/Dili'),(356,'TM','Asia/Ashgabat'),(357,'TN','Africa/Tunis'),(358,'TO','Pacific/Tongatapu'),(359,'TR','Europe/Istanbul'),(360,'TT','America/Port_of_Spain'),(361,'TV','Pacific/Funafuti'),(362,'TW','Asia/Taipei'),(363,'TZ','Africa/Dar_es_Salaam'),(364,'UA','Europe/Kiev'),(365,'UA','Europe/Uzhgorod'),(366,'UA','Europe/Zaporozhye'),(367,'UG','Africa/Kampala'),(368,'UM','Pacific/Johnston'),(369,'UM','Pacific/Midway'),(370,'UM','Pacific/Wake'),(371,'US','America/New_York'),(372,'US','America/Detroit'),(373,'US','America/Kentucky/Louisville'),(374,'US','America/Kentucky/Monticello'),(375,'US','America/Indiana/Indianapolis'),(376,'US','America/Indiana/Vincennes'),(377,'US','America/Indiana/Winamac'),(378,'US','America/Indiana/Marengo'),(379,'US','America/Indiana/Petersburg'),(380,'US','America/Indiana/Vevay'),(381,'US','America/Chicago'),(382,'US','America/Indiana/Tell_City'),(383,'US','America/Indiana/Knox'),(384,'US','America/Menominee'),(385,'US','America/North_Dakota/Center'),(386,'US','America/North_Dakota/New_Salem'),(387,'US','America/North_Dakota/Beulah'),(388,'US','America/Denver'),(389,'US','America/Boise'),(390,'US','America/Phoenix'),(391,'US','America/Los_Angeles'),(392,'US','America/Metlakatla'),(393,'US','America/Anchorage'),(394,'US','America/Juneau'),(395,'US','America/Sitka'),(396,'US','America/Yakutat'),(397,'US','America/Nome'),(398,'US','America/Adak'),(399,'US','Pacific/Honolulu'),(400,'UY','America/Montevideo'),(401,'UZ','Asia/Samarkand'),(402,'UZ','Asia/Tashkent'),(403,'VA','Europe/Vatican'),(404,'VC','America/St_Vincent'),(405,'VE','America/Caracas'),(406,'VG','America/Tortola'),(407,'VI','America/St_Thomas'),(408,'VN','Asia/Ho_Chi_Minh'),(409,'VU','Pacific/Efate'),(410,'WF','Pacific/Wallis'),(411,'WS','Pacific/Apia'),(412,'YE','Asia/Aden'),(413,'YT','Indian/Mayotte'),(414,'ZA','Africa/Johannesburg'),(415,'ZM','Africa/Lusaka'),(416,'ZW','Africa/Harare');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*
SQLyog Enterprise - MySQL GUI v8.1 

MySQL - 5.5.5-10.1.13-MariaDB : Database - opentrip_database

*********************************************************************
*/

/*!40101 SET NAMES utf8 */;
/*!40101 SET SQL_MODE=''*/;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`opentrip_database` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `opentrip_database`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(1000) DEFAULT NULL,
  `admin_username` varchar(1000) DEFAULT NULL,
  `admin_pass` varchar(1000) DEFAULT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `admin` */

insert  into `admin`(admin_id,admin_name,admin_username,admin_pass,last_login,updated) values (1,'Admin Bahagia','bahagia','202cb962ac59075b964b07152d234b70','2016-08-08 11:01:19','0000-00-00 00:00:00');

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` int(11) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `city_name` varchar(45) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `langitude` varchar(100) DEFAULT NULL,
  `zoom` varchar(100) DEFAULT NULL,
  `ads` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  UNIQUE KEY `id_UNIQUE` (`city_id`),
  UNIQUE KEY `country` (`city_name`,`region`) USING BTREE,
  KEY `fk_cities_1_idx` (`region`),
  KEY `fk_cities_2_idx` (`country`),
  CONSTRAINT `fk_cities_1` FOREIGN KEY (`region`) REFERENCES `regions` (`reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cities_2` FOREIGN KEY (`country`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=508 DEFAULT CHARSET=utf8;

/*Data for the table `cities` */

insert  into `cities`(city_id,country,region,city_name,latitude,langitude,zoom,ads) values (1,1,1,'Jakarta','-6.2297465','106.829518','11',NULL),(2,1,2,'Kota Bogor','-6.5951935','106.791892','12',NULL),(3,1,2,'Bandung','-7.0634725','107.5911715','10',NULL),(4,1,2,'Bandung Barat','-6.9052641','107.454234','10',NULL),(5,1,2,'Bekasi','-6.2845395','106.973377','12',NULL),(6,1,2,'Bogor','-6.5453636','106.8140985','10',NULL),(7,1,2,'Ciamis','-7.3113045','108.4466245','10',NULL),(8,1,2,'Cianjur','-6.814476','107.1246835','13',NULL),(9,1,2,'Cirebon','-6.7613035','108.5816461','11',NULL),(10,1,2,'Garut','-7.3433275','107.7781535','10',NULL),(11,1,2,'Indramayu','-6.4517829','108.194768','10',NULL),(12,1,2,'Karawang','-6.2648065','107.3637299','10',NULL),(13,1,2,'Kuningan','-6.979313','108.4934425','13',NULL),(14,1,2,'Majalengka','-6.850966','108.229809','13',NULL),(15,1,2,'Pangandaran','-7.6833329','108.65','15',NULL),(16,1,2,'Purwakarta','-6.5923975','107.4112739','11',NULL),(17,1,2,'Subang','-6.4952915','107.7345795','10',NULL),(18,1,2,'Sukabumi','-6.849407','106.955305','13',NULL),(19,1,2,'Sumedang','-6.8101905','107.9803999','11',NULL),(20,1,2,'Tasikmalaya','-7.427867','108.1734586','10',NULL),(21,1,2,'Bandung Kota','-6.91243','107.606903','12',NULL),(22,1,2,'Bekasi Kota','6.2845395','106.973377','12',NULL),(23,1,2,'Bogor Kota','-6.5951935','106.791892','12',NULL),(24,1,2,'Cimahi Kota','-6.8862575','107.5411216','14',NULL),(25,1,2,'Cirebon Kota','-6.7428626','108.554039','13',NULL),(26,1,2,'Depok Kota','-6.3878486','106.8177975','12',NULL),(27,1,2,'Sukabumi Kota','-6.9370139','106.9173099','13',NULL),(28,1,2,'Tasikmalaya Kota','-7.359982','108.232753','12',NULL),(29,1,3,'Lebak','-6.6433541','106.1945915','10',NULL),(30,1,3,'Pandeglang','-6.6189465','105.6379449','10',NULL),(31,1,3,'Serang','-6.106608','106.117796','10',NULL),(32,1,3,'Kota Serang','-6.1002534','106.1605904','11',NULL),(33,1,3,'Cilegon','-5.9686754','106.0038265','12',NULL),(34,1,3,'Tanggerang','-6.1818846','106.5325875','11',NULL),(35,1,3,'Kota Tanggerang','-6.1766876','106.650034','12',NULL),(36,1,3,'Kota Tanggerang Selatan','-6.295503','106.7083125','12',NULL),(37,1,4,'Yogyakarta','-7.8032504','110.3748449','3',NULL),(38,1,4,'Bantul','-7.8981899','110.3627566','11',NULL),(39,1,4,'Gunung Kidul','-7.993185','110.5819344','11',NULL),(40,1,4,'Kulon Progo','-7.8124939','110.1441391','11',NULL),(41,1,4,'Sleman','-7.689718','110.3812751','11',NULL),(42,1,5,'Kota Semarang','-7.023054','110.3872425','12',NULL),(43,1,5,'Magelang','-7.513566','110.24477','11',NULL),(44,1,5,'Banjarnegara','-7.415225','109.711745','13',NULL),(45,1,5,'Banyumas','-7.4550015','109.168573','11',NULL),(46,1,5,'Batang','-7.0320014','109.8633845','11',NULL),(47,1,5,'Blora','-6.9610895','111.436945','12',NULL),(48,1,5,'Boyolali','-7.5179649','110.591637','13',NULL),(49,1,5,'Brebes','-6.8651732','109.0439415','13',NULL),(50,1,5,'Cilacap','-7.7065141','109.0324948','13',NULL),(51,1,5,'Demak','-6.923049','110.6479535','11',NULL),(52,1,5,'Grobogan','-7.02362','110.918685','14',NULL),(53,1,5,'Jepara','-6.5810032','110.6755305','13',NULL),(54,1,5,'Karanganyar','-7.6041988','110.9740449','13',NULL),(55,1,5,'Kebumen','-7.643941','109.609325','11',NULL),(56,1,5,'Kendal','-7.0204065','110.1394004','11',NULL),(57,1,5,'Klaten','-7.7171062','110.6537602','12',NULL),(58,1,5,'Kudus','-6.8010026','110.840412','14',NULL),(59,1,5,'Kota Magelang','-7.4730539','110.2175245','13',NULL),(60,1,5,'Pati','-6.752494','111.0491776','14',NULL),(61,1,5,'Pekalongan','-6.895942','109.6745035','13',NULL),(62,1,5,'Pemalang','-6.9190685','109.3735975','12',NULL),(63,1,5,'Purbalingga','-7.32734','109.4040946','11',NULL),(64,1,5,'Purworejo','-7.7262614','110.0313545','13',NULL),(65,1,5,'Rembang','-6.718238','111.3692401','13',NULL),(66,1,5,'Semarang','-7.2877925','110.456609','11',NULL),(67,1,5,'Sragen','-7.3922765','110.9621404','11',NULL),(68,1,5,'Sukoharjo','-7.6828475','110.831434','11',NULL),(69,1,5,'Tegal','-6.8705707','109.1172396','13',NULL),(70,1,5,'Temanggung','-7.3183031','110.1815996','15',NULL),(71,1,5,'Wonogiri','-7.961908','111.0367375','10',NULL),(72,1,5,'Wonosobo','-7.3997966','109.90568','11',NULL),(73,1,5,'Salatiga','-7.3262536','110.4970855','13',NULL),(74,1,5,'Surakarta','-7.559209','110.8188121','13',NULL),(75,1,6,'Surabaya','-7.2742175','112.719087','12',NULL),(76,1,6,'Malang','-7.9812985','112.6319264','12',NULL),(77,1,6,'Mojokerto','-7.4707425','112.4373426','14',NULL),(78,1,6,'Lamongan','-7.127605','112.3937185','13',NULL),(79,1,6,'Sumenep','-7.0421531','114.1866795','10',NULL),(80,1,6,'Magetan','-7.6533515','111.3473921','11',NULL),(81,1,6,'Pasuruan','-7.7505644','112.837377','11',NULL),(82,1,6,'Sidoarjo','-7.4182349','112.7387191','13',NULL),(83,1,6,'Banyuwangi','-8.3326134','114.2215064','10',NULL),(84,1,6,'Bangkalan','-7.046227','112.909895','11',NULL),(85,1,6,'Kota Blitar','-8.0948253','112.1652559','13',NULL),(86,1,6,'Bojonegoro','-7.1560887','111.8960479','14',NULL),(87,1,6,'Bondowoso','-7.945285','113.9360271','11',NULL),(88,1,6,'Gresik','-7.1649214','112.6529375','14',NULL),(89,1,6,'Jember','-8.1768099','113.6909704','13',NULL),(90,1,6,'Jombang','-7.561479','112.2592315','11',NULL),(91,1,6,'Kediri','-7.8424221','112.0161875','12',NULL),(92,1,6,'Lumajang','-8.1303654','113.2322728','14',NULL),(93,1,6,'Madiun','-7.6300619','111.5280514','13',NULL),(94,1,6,'Nganjuk','-7.5952491','111.9040227','14',NULL),(95,1,6,'Ngawi','-7.4202101','111.4430072','12',NULL),(96,1,6,'Pacitan','-8.1854449','111.108551','13',NULL),(97,1,6,'Pamekasan','-7.1548016','113.4729835','13',NULL),(98,1,6,'Ponorogo','-7.8681204','111.4731673','14',NULL),(99,1,6,'Probolinggo','-7.7723119','113.2014757','13',NULL),(100,1,6,'Sampang','-7.058151','113.2618629','11',NULL),(101,1,6,'Situbondo','-7.7985945','114.019903','11',NULL),(102,1,6,'Trenggalek','-8.0849483','111.7450533','12',NULL),(103,1,6,'Tuban','-6.8921205','112.0403455','14',NULL),(104,1,6,'Tulungagung','-8.0942842','111.958827','12',NULL),(105,1,6,'Batu','-7.8806987','112.5223041','14',NULL),(106,1,6,'Blitar','-8.1312895','112.2172666','11',NULL),(107,1,7,'Aceh Selatan','3.070174','97.4249473','9',NULL),(108,1,7,'Aceh Tenggara','3.3380285','97.617301','10',NULL),(109,1,7,'Aceh Timur','4.7028014','97.6392325','9',NULL),(110,1,7,'Aceh Tengah','4.5625095','96.814866','10',NULL),(111,1,7,'Aceh Barat','4.4513732','96.1858005','10',NULL),(112,1,7,'Aceh Besar','5.404235','95.4254264','10',NULL),(113,1,7,'Pidie','5.1133685','96.0867806','9',NULL),(114,1,7,'Aceh Utara','4.9936454','97.1506885','10',NULL),(115,1,7,'Simeulue','2.6294415','96.1046861','10',NULL),(116,1,7,'Aceh Singkil','2.3737165','97.9269696','10',NULL),(117,1,7,'Bireuen','5.0830279','96.6244424','11',NULL),(118,1,7,'Aceh Barat Daya','3.8354985','96.867257','10',NULL),(119,1,7,'Gayo Lues','3.981049','97.323531','10',NULL),(120,1,7,'Aceh Jaya','4.811146','95.6663485','9',NULL),(121,1,7,'Nagan Raya','4.1765099','96.5057757','9',NULL),(123,1,7,'Aceh Tamiang','4.2184944','98.0014529','10',NULL),(124,1,7,'Bener Meriah','4.774794','96.9923934','11',NULL),(125,1,7,'Pidie Jaya','5.1047825','96.195215','11',NULL),(126,1,7,'Banda Aceh','5.5611019','95.3287025','13',NULL),(127,1,7,'Sabang','5.8395145','95.2962419','12',NULL),(128,1,7,'Lhokseumawe','5.17189','97.1076359','12',NULL),(129,1,7,'Langsa','4.4823999','97.9622753','14',NULL),(130,1,7,'Subulussalam','2.644924','98.015163','15',NULL),(131,1,8,'Tapanuli Tengah','1.8693345','98.59616','10',NULL),(132,1,8,'Tapanuli Utara','2.0150509','99.0694535','10',NULL),(133,1,8,'Tapanuli Selatan','1.5510685','99.1793125','9',NULL),(134,1,8,'nias','1.0843094','97.7250064','11',NULL),(135,1,8,'langkat','3.7601391','98.2317535','9',NULL),(136,1,8,'karo','3.0998311','98.2716834','10',NULL),(137,1,8,'deli Serdang','3.4799785','98.707102','9',NULL),(138,1,8,'simalungun','2.9506126','99.049255','10',NULL),(139,1,8,'asahan','2.846877','99.5333395','10',NULL),(140,1,8,'labuhanbatu','2.269904','100.0132304','9',NULL),(141,1,8,'dairi','2.8353839','98.2547108','10',NULL),(142,1,8,'toba Samosir','2.3855825','99.2483775','10',NULL),(143,1,8,'mandailing Natal','0.7796051','99.3887799','9',NULL),(144,1,8,'nias Selatan','0.7889945','97.7237155','10',NULL),(145,1,8,'pakpak Bharat','2.5305735','98.2685331','10',NULL),(146,1,8,'humbang Hasundutan','2.2478419','98.6071295','10',NULL),(147,1,8,'samosir','2.5562235','98.6961732','11',NULL),(148,1,8,'serdang Bedagai','3.3459435','99.0318804','10',NULL),(149,1,8,'batu Bara','3.2304581','99.4800035','10',NULL),(150,1,8,'padang Lawas Utara','1.636409','99.8455431','10',NULL),(151,1,8,'padang Lawas','1.156542','99.8014749','10',NULL),(152,1,8,'labuhanbatu Selatan','1.833775','100.060497','10',NULL),(153,1,8,'labuhanbatu Utara','2.425626','99.734229','9',NULL),(154,1,8,'nias Utara','1.3101674','97.2899217','10',NULL),(155,1,8,'nias Barat','0.9823165','97.457437','11',NULL),(156,1,8,'Medan','3.6422865','98.6694935','11',NULL),(157,1,8,'Pematang Siantar','2.9537935','99.063494','12',NULL),(158,1,8,'Sibolga','1.730822','98.7840604','14',NULL),(159,1,8,'Tanjung Balai','2.9672575','99.7880078','13',NULL),(160,1,8,'Binjai','3.6002175','98.4887229','12',NULL),(161,1,8,'Tebing Tinggi','3.328067','99.1541265','13',NULL),(162,1,8,'Padangsidimpuan','1.3869001','99.2858555','12',NULL),(163,1,8,'Gunungsitoli','1.2520345','97.580517','11',NULL),(164,1,9,'pesisir Selatan','-1.7177599','100.790496','9',NULL),(165,1,9,'solok','-0.927534','100.837884','10',NULL),(166,1,9,'sijunjung','-0.648736','101.1429174','10',NULL),(167,1,9,'tanah Datar','-0.4698185','100.5827935','11',NULL),(168,1,9,'padang Pariaman','-0.5660215','100.2099335','10',NULL),(169,1,9,'agam','-0.2531825','100.1537355','10',NULL),(170,1,9,'lima Puluh Kota','0.02907','100.5559274','10',NULL),(171,1,9,'pasaman','0.3998885','100.0474539','9',NULL),(172,1,9,'kepulauan Mentawai','-1.4181185','98.9587929','9',NULL),(173,1,9,'dharmasraya','-1.5793565','102.0495587','7.83',NULL),(174,1,9,'solok Selatan','-1.3644709','101.2735826','10',NULL),(175,1,9,'pasaman Barat','0.1879615','99.6077419','10',NULL),(176,1,9,'kota Padang','-0.9402105','100.3912699','11',NULL),(177,1,9,'kota Solok','-0.7788795','100.615123','13',NULL),(178,1,9,'Sawahlunto','-0.5935983','100.7371292','14',NULL),(179,1,9,'kota Padang Panjang','-0.469531','100.4013374','14',NULL),(180,1,9,'Bukittinggi','-0.299229','100.3690725','14',NULL),(181,1,9,'Payakumbuh','-0.2294954','100.6327529','13',NULL),(182,1,9,'kota Pariaman','-0.6121281','100.1362795','12',NULL),(183,1,10,'Batam','0.837166','104.0531311','10',NULL),(184,1,10,'kampar','0.320341','101.0613635','9',NULL),(185,1,10,'pelalawan','0.1585512','102.4356489','9',NULL),(186,1,10,'bengkalis','1.5252265','101.7205939','9',NULL),(187,1,10,'kab Indragiri Hulu','-0.492559','102.2478108','9',NULL),(188,1,10,'indragiri Hilir','-0.2932742','103.184153','9',NULL),(189,1,10,'rokan Hulu','0.8932599','100.4904995','9',NULL),(190,1,10,'rokan Hilir','1.88414','100.8053555','9',NULL),(191,1,10,'siak','0.828033','101.9048443','9',NULL),(192,1,10,'kuantan Singingi','-0.4938175','101.4765815','9',NULL),(193,1,10,'kepulauan Meranti','1.0562111','102.68304','10',NULL),(194,1,10,'Pekanbaru','0.5137912','101.441176','12',NULL),(195,1,10,'Dumai','1.850928','101.3687306','10',NULL),(196,1,11,'bintan','0.9632714','104.5704068','10',NULL),(197,1,11,'karimun','0.82109','103.6293579','10',NULL),(198,1,11,'kepulauan Anambas','2.9714735','105.718976','11',NULL),(199,1,11,'lingga','-0.1789114','104.509726','9',NULL),(200,1,11,'natuna','3.9987617','108.25','8',NULL),(201,1,11,'Tanjung Pinang','0.917062','104.4845974','13',NULL),(202,1,12,'kerinci','-2.0612335','101.4829539','10',NULL),(203,1,12,'merangin','-2.20706','102.0861751','9',NULL),(204,1,12,'batanghari','-1.853121','102.988379','9',NULL),(205,1,12,'muaro Jambi','-1.7049425','103.782604','9',NULL),(206,1,12,'tanjung Jabung Barat','-1.0939625','103.1101365','10',NULL),(207,1,12,'tanjung Jabung Timur','-1.2576711','103.9018501','10',NULL),(208,1,12,'bungo','-1.5157519','101.9783389','10',NULL),(209,1,12,'tebo','-1.3952375','102.3232096','9',NULL),(210,1,12,'Sorolangun','-1.6204279','103.603115','12',NULL),(211,1,12,'kota Jambi','-1.6204279','103.603115','12',NULL),(212,1,12,'Sungai Penuh','-2.1383069','101.3488891','11',NULL),(213,1,13,'bengkulu Selatan','-4.358941','103.0444379','11',NULL),(214,1,13,'bengkulu Tengah','-3.677797','102.4099105','11',NULL),(215,1,13,'bengkulu Utara','-3.1852395','101.9984294','10',NULL),(216,1,13,'kaur','-4.589298','103.4167585','10',NULL),(217,1,13,'kepahiang','-3.635531','102.5698814','13',NULL),(218,1,13,'lebong','-3.0525784','102.2137735','10',NULL),(219,1,13,'mukomuko','-2.7308445','101.4443209','10',NULL),(220,1,13,'rejang Lebong','-3.4381609','102.6831009','10',NULL),(221,1,13,'seluma','-4.0803225','102.6363259','10',NULL),(222,1,13,'kota Bengkulu','-3.8253459','102.3045788','12',NULL),(223,1,14,'banyuasin','-2.8910216','103.8567263','17',NULL),(224,1,14,'empat Lawang','-3.717045','102.9066479','10',NULL),(225,1,14,'lahat','-3.7890332','103.5396504','14',NULL),(226,1,14,'muara Enim','-3.6400375','103.778525','14',NULL),(227,1,14,'musi Banyuasin','-2.4958314','103.830431','9',NULL),(228,1,14,'musi Rawas','-3.175197','103.0678991','9',NULL),(229,1,14,'ogan Ilir','-3.419661','104.5600495','10',NULL),(230,1,14,'ogan Komering Ilir','-3.3277745','105.368645','9',NULL),(231,1,14,'ogan Komering Ulu','-4.1105135','104.0872659','10',NULL),(232,1,14,'ogan Komering Ulu Selatan','-4.5677009','103.884625','10',NULL),(233,1,14,'ogan Komering Ulu Timur','-4.1063355','104.541437','10',NULL),(234,1,14,'Lubuklinggau','-3.2996426','102.8779769','13',NULL),(235,1,14,'Pagar Alam','-4.0435652','103.2194006','12',NULL),(236,1,14,'Palembang','-2.9549685','104.7629646','12',NULL),(237,1,14,'Prabumulih','-3.4164714','104.2452666','14',NULL),(238,1,15,'bangka','-1.93427','105.9418504','10',NULL),(239,1,15,'bangka Barat','-1.8404802','105.4471295','10',NULL),(240,1,15,'bangka Selatan','-2.8071445','106.5094482','9',NULL),(241,1,15,'bangka Tengah','-2.4328315','106.298731','9',NULL),(242,1,15,'belitung','-2.9295255','107.551537','10',NULL),(243,1,15,'belitung Timur','-2.9547655','108.2993321','9',NULL),(244,1,15,'Pangkal Pinang','-2.1159947','106.1205269','13',NULL),(245,1,16,'lampung Barat','-5.3578855','104.116373','9',NULL),(246,1,16,'lampung Selatan','-5.669861','105.468599','10',NULL),(247,1,16,'lampung Tengah','-4.8741316','105.18228','9',NULL),(248,1,16,'lampung Timur','-5.1205159','105.5893951','10',NULL),(249,1,16,'lampung Utara','-4.8083889','104.8107841','10',NULL),(250,1,16,'mesuji','-3.882974','105.491813','12',NULL),(251,1,16,'pesawaran','-5.4821254','105.1385304','10',NULL),(252,1,16,'pringsewu','-5.3690984','104.9173706','11',NULL),(253,1,16,'tanggamus','-5.4763775','104.704666','10',NULL),(254,1,16,'tulang Bawang','-4.325362','104.6358635','14',NULL),(255,1,16,'tulang Bawang  Barat','-5.431581','105.261891','17',NULL),(256,1,16,'way Kanan','-4.5732975','104.6774294','10',NULL),(257,1,16,'Bandar Lampung','-5.4285795','105.270738','12',NULL),(258,1,16,'kota Metro','-5.1210842','105.3070667','13',NULL),(259,1,17,'Pontianak','-0.0301045','109.3281121','12',NULL),(260,1,17,'Bengkayang','1.0339099','109.4892683','9',NULL),(261,1,17,'Kapuas Hulu','0.834574','112.8656925','9',NULL),(262,1,17,'Kayong Utara','-1.4967366','110.7011355','13',NULL),(263,1,17,'Ketapang','-1.682375','110.5846575','8',NULL),(264,1,17,'Kubu Raya','-0.3785205','109.5105676','9',NULL),(265,1,17,'Landak','0.5108791','109.704688','9',NULL),(266,1,17,'Melawi','-0.7297399','111.787196','9',NULL),(267,1,17,'Mempawah','0.3834541','109.4845943','9',NULL),(268,1,17,'Sambas','1.4877335','109.3291315','9',NULL),(269,1,17,'Sanggau','0.351024','110.4442836','9',NULL),(270,1,17,'Sekadau','0.0537346','110.9252125','9',NULL),(271,1,17,'Sintang','0.1809585','112.111846','9',NULL),(273,1,17,'Singkawang','0.8835111','108.9623957','12',NULL),(274,1,18,'Banjarmasin','-3.3180619','114.6003276','13',NULL),(275,1,18,'Balangan','-2.2893155','115.5840765','10',NULL),(276,1,18,'Banjar','-3.2765735','115.054912','10',NULL),(277,1,18,'Barito Kuala','-3.2765735','115.054912','10',NULL),(278,1,18,'Hulu Sungai Selatan','-2.7182414','115.232921','11',NULL),(279,1,18,'Hulu Sungai Tengah','-2.611594','115.5251035','11',NULL),(280,1,18,'Hulu Sungai Utara','-2.4250319','115.132208','11',NULL),(281,1,18,'Kota Baru','-3.5285955','116.0298535','8',NULL),(282,1,18,'Tabalong','-1.837203','115.4406545','9',NULL),(283,1,18,'Tanah Bumbu','-3.4437636','115.6676005','10',NULL),(284,1,18,'Tanah Laut','-3.8423416','114.9453348','10',NULL),(285,1,18,'Tapin','-2.8668925','115.154903','10',NULL),(286,1,18,'Banjarbaru','-3.4593218','114.8002246','12',NULL),(287,1,19,'Barito Selatan','-1.964028','115.0149146','9',NULL),(288,1,19,'Barito Utara','-0.7244789','115.1520906','9',NULL),(289,1,19,'Barito Timur','-2.0148275','115.18036','10',NULL),(290,1,19,'Gunung MAS','-0.9869189','113.51306','9',NULL),(291,1,19,'Kapuas','-1.9164223','114.221872','8',NULL),(292,1,19,'Katingan','-1.8741949','112.9331665','8',NULL),(293,1,19,'Kotawaringin Barat','-2.5562378','111.6776535','8',NULL),(294,1,19,'Kotawaringin Timur','-2.230309','112.6776345','8',NULL),(295,1,19,'Lamandau','-1.807312','111.3390755','9',NULL),(296,1,19,'Murung Raya','-0.0366871','114.1715644','9',NULL),(297,1,19,'Pulang Pisau','-2.5043105','113.954907','8',NULL),(298,1,19,'Sukamara','-2.5609765','111.0669135','9',NULL),(299,1,19,'Seruyan','-2.1307805','112.1215799','8',NULL),(300,1,19,'Palangka Raya','-2.2097023','113.9016651','13',NULL),(301,1,19,'Sampit','-2.5394653','112.9586863','10',NULL),(302,1,20,'Samarinda','-0.509686','117.1755286','11',NULL),(303,1,20,'Tanjung Redeb','2.1271504','117.4643839','13',NULL),(304,1,20,'Kutai Kartanegara','0.1966221','116.5716885','8',NULL),(305,1,20,'Balikpapan','-1.244698','116.8795','13',NULL),(306,1,20,'Bontang','0.1184141','117.4747967','13',NULL),(307,1,20,'Mahakam Ulu','0.6646291','114.8285745','9',NULL),(308,1,20,'Penajam Paser Utara','-1.2001755','116.6452646','10',NULL),(309,1,20,'Paser','-1.689773','116.1125009','9',NULL),(310,1,20,'Kutai Timur','0.9305864','117.4987075','9',NULL),(311,1,20,'Kutai Barat','-0.471243','115.8743924','9',NULL),(312,1,21,'Tarakan','3.3348525','117.5932045','12',NULL),(313,1,21,'Bulungan','2.8447239','116.9878605','9',NULL),(314,1,21,'Malinau','2.582303','115.6859664','8',NULL),(315,1,21,'Nunukan','3.9052315','116.7444814','9',NULL),(316,1,21,'Tana Tidung','3.5493095','117.2620374','10',NULL),(317,1,22,'Makassar','-5.1308664','119.46127','12',NULL),(318,1,22,'Toraja','-2.8990815','119.8803455','10',NULL),(319,1,22,'Palopo','-3.0169954','120.1948942','14',NULL),(320,1,22,'Parepare','-4.0127941','119.6381477','13',NULL),(321,1,22,'Bone','-4.6800285','120.0771259','9',NULL),(322,1,22,'Sinjai','-5.2003069','120.1317035','11',NULL),(323,1,22,'Pinrang','-3.6487895','119.607684','10',NULL),(324,1,22,'Luwu','-3.1666385','120.1460475','9',NULL),(325,1,22,'Luwu Utara','-2.4065715','120.1421424','9',NULL),(326,1,22,'Luwu Timur','-2.532095','121.1310119','9',NULL),(327,1,22,'Maros','-4.965145','119.7196405','10',NULL),(328,1,22,'Gowa','-5.330119','119.6978965','10',NULL),(329,1,22,'Bantaeng','-5.503575','119.9659645','12',NULL),(330,1,22,'Barru','-4.4337161','119.6967075','10',NULL),(331,1,22,'Balukumba','-5.4841239','120.217275','11',NULL),(332,1,22,'Enrekang','-3.4782314','119.7890776','11',NULL),(333,1,22,'Jeneponto','-5.544701','119.712021','11',NULL),(334,1,22,'Kepulauan Selayar','-6.118587','120.4802495','10',NULL),(335,1,22,'Pangkajene dan Kepulauan','-4.7634134','119.5162885','11',NULL),(336,1,22,'Sidenreng Rappang','-3.8080935','119.9978918','10',NULL),(337,1,22,'Soppeng','-4.3185884','119.9011865','11',NULL),(338,1,22,'Takalar','-5.4111961','119.4184595','11',NULL),(339,1,22,'Tana Toraja','-3.056902','119.707132','10',NULL),(340,1,22,'Toraja Utara','-2.8990815','119.8803455','10',NULL),(341,1,22,'Wajo','-3.968236','120.1644474','10',NULL),(342,1,23,'Manado','1.539567','124.8074276','12',NULL),(343,1,23,'Bolaang Mongondow','0.7211095','124.0349449','10',NULL),(344,1,23,'Bolaang Mongondow Selatan','0.4544605','123.9792625','10',NULL),(345,1,23,'Bolaang Mongondow Timur','0.711536','124.5170419','10',NULL),(346,1,23,'Bolaang Mongondow Utara','0.760593','123.4257745','11',NULL),(347,1,23,'Kepulauan Sangihe','3.6476465','125.5264105','9',NULL),(348,1,23,'Kepulauan Siau Tagulandang Biaro','2.3354505','125.4048194','13',NULL),(349,1,23,'Kepulauan Talaud','4.1735486','126.826288','10',NULL),(350,1,23,'Kepulauan Minahasa','1.2411716','124.8137499','11',NULL),(351,1,23,'Kepulauan Minahasa Selatan','1.070976','124.5283609','10',NULL),(352,1,23,'Kepulauan Minahasa Tenggara','0.982509','124.750399','11',NULL),(353,1,23,'Kepulauan Minahasa Utara','1.5783895','124.9584185','10',NULL),(354,1,23,'Bitung','1.466629','125.1806404','12',NULL),(355,1,23,'Kotamobagu','0.7350466','124.3169899','13',NULL),(356,1,23,'Kota Manado','1.4827769','124.835662','13',NULL),(357,1,23,'Kota Tomohon','1.3305563','124.836345','13',NULL),(358,1,24,'Palu','-0.7895621','119.899274','11',NULL),(359,1,24,'Poso Kota','-1.397281','120.735079','14',NULL),(360,1,24,'Banggai','-1.1160909','122.651007','9',NULL),(361,1,24,'Banggai Kepulauan','-1.399779','123.147504','10',NULL),(362,1,24,'Buol','0.994581','121.5338792','10',NULL),(363,1,24,'Donggala','-0.3510735','119.8250565','8',NULL),(364,1,24,'Morowali','-2.7706226','122.0307231','9',NULL),(365,1,24,'Parigi Moutong','-0.240258','120.6257281','8',NULL),(366,1,24,'Poso','-1.3949976','120.753772','15',NULL),(367,1,24,'Tojo Una-Una','-1.1816257','121.4947879','10',NULL),(368,1,24,'Toli-Toli','0.9811505','120.656948','10',NULL),(369,1,24,'Sigi','-1.4615905','120.0027559','9',NULL),(370,1,24,'Kota Luwuk','-0.9151828','122.7770849','13',NULL),(371,1,25,'Kendari','-4.0002315','122.5454725','12',NULL),(372,1,25,'Bombana','-4.648462','121.8077804','10',NULL),(373,1,25,'Buton','-5.0346495','122.8901478','9',NULL),(374,1,25,'Buton Selatan','-5.0346495','122.8901478','9',NULL),(375,1,25,'Buton Utara','-4.7575495','123.0207695','10',NULL),(376,1,25,'Kolaka','-4.0438084','121.6657565','12',NULL),(377,1,25,'Kolaka Timur','-3.8204255','121.567278','9',NULL),(378,1,25,'Kolaka Utara','-3.2631124','121.1606069','9',NULL),(379,1,25,'Konawe','-3.5129105','122.0421635','9',NULL),(380,1,25,'Konawe Utara','-3.4196045','121.957189','9',NULL),(381,1,25,'Konawe Selatan','-4.2511975','122.4093685','10',NULL),(382,1,25,'Konawe Kepulauan','-4.1193524','123.0972945','11',NULL),(383,1,25,'Muna','-4.872199','122.5483941','10',NULL),(384,1,25,'Muna Barat','-5.025819','122.517514','10',NULL),(385,1,25,'Wakatobi','-5.424358','123.674063','11',NULL),(386,1,25,'Bau-bau','-5.4896879','122.6063884','13',NULL),(388,1,26,'Mamuju','-2.7060739','118.9482495','12',NULL),(389,1,26,'Majene','-3.2423271','118.9360231','10',NULL),(390,1,26,'Polewali Mandar','-3.3026449','119.1961135','10',NULL),(392,1,26,'Mamase','-2.9964105','119.3236704','10',NULL),(393,1,26,'Mamaju','-2.7060739','118.9482495','12',NULL),(394,1,26,'Mamaju Tengah','-2.0209639','119.5018385','10',NULL),(395,1,26,'Mamaju Utara','-1.3437139','119.5760856','9',NULL),(397,1,27,'Boalemo','0.6816125','122.3681385','10',NULL),(398,1,27,'Bone Bolango','0.5562341','123.2944371','10',NULL),(399,1,27,'Gorontalo','0.6737436','122.3567695','9',NULL),(400,1,27,'Gorontalo Utara','0.8650476','122.6284594','10',NULL),(401,1,27,'Gorontalo City','0.698919','122.6626601','10',NULL),(402,1,27,'Pohuwato','0.6665875','121.647892','10',NULL),(403,1,27,'Pohuwato Timur','0.4500065','121.953046','15',NULL),(404,1,28,'Denpasar','-8.672134','115.2243929','12',NULL),(405,1,28,'Badung','-8.5455855','115.1676201','10',NULL),(406,1,28,'Bangli','-8.333985','115.344994','11',NULL),(407,1,28,'Buleleng','-8.2224705','114.9446525','10',NULL),(408,1,28,'Gianyar','-8.481932','115.2982515','11',NULL),(409,1,28,'Jembrana','-8.3131784','114.6828585','11',NULL),(410,1,28,'Karangasem','-8.3586','115.5507596','11',NULL),(411,1,28,'Klungkung','-8.7413355','115.528733','12',NULL),(412,1,28,'Tabanan','-8.4392285','115.0660515','11',NULL),(413,1,29,'Bima','-8.4833659','118.5504525','10',NULL),(414,1,29,'Dompu','-8.4937125','118.1166865','10',NULL),(415,1,29,'Lombok Timur','-8.5915984','116.56594','10',NULL),(416,1,29,'Lombok Barat','-8.658366','116.080009','10',NULL),(417,1,29,'Lombok Tengah','-8.6822985','116.2690695','10',NULL),(418,1,29,'Lombok Utara','-8.34543','116.2610518','11',NULL),(419,1,29,'Sumbawa','-8.6167469','117.585475','9',NULL),(420,1,29,'Sumbawa Barat','-8.800226','116.9029435','10',NULL),(421,1,30,'Alor','-8.333405','124.4751755','10',NULL),(422,1,30,'Belu','-9.1758655','124.9924854','11',NULL),(423,1,30,'Ende','-8.6735235','121.7102853','10',NULL),(424,1,30,'Flores Timur','-8.350315','122.994027','10',NULL),(425,1,30,'Kota Kupang','-10.2114149','123.6051315','12',NULL),(426,1,30,'Kupang','-9.8124595','123.7486966','9',NULL),(427,1,30,'Lembata','-8.3780389','123.5649621','11',NULL),(428,1,30,'Malaka','-9.546622','124.8656249','10',NULL),(429,1,30,'Manggarai','-8.5783251','120.3872935','10',NULL),(430,1,30,'Manggarai Barat','-8.574164','119.8713535','10',NULL),(431,1,30,'Manggarai Timur','-8.5740509','120.6162925','10',NULL),(432,1,30,'Ngada','-8.650088','120.9973199','10',NULL),(433,1,30,'Nagekeo','-8.674479','121.301802','10',NULL),(434,1,30,'Rote Ndao','-10.7193055','123.0422646','10',NULL),(435,1,30,'Sabu Raijua','-10.530461','121.7644899','11',NULL),(436,1,30,'Sikka','-8.5759905','122.3069155','11',NULL),(437,1,30,'Sumba Barat','-9.585349','119.343298','11',NULL),(438,1,30,'Sumba Barat Daya','-9.544009','119.170324','11',NULL),(439,1,30,'Sumba Tengah','-9.5938025','119.6709764','10',NULL),(440,1,30,'Sumba Timur','-9.805338','120.2601125','9',NULL),(441,1,30,'Timor Tengah Selatan','-9.8230724','124.4374374','10',NULL),(442,1,30,'Timor Tengah Utara','-9.340553','124.4736826','10',NULL),(443,1,31,'Ambon','-3.6814111','128.1700089','12',NULL),(444,1,31,'Buru','-3.3447626','126.6907084','10',NULL),(445,1,31,'Buru Selatan','-3.5087335','126.619563','10',NULL),(446,1,31,'Kepulauan Aru','-6.2119065','134.4799664','9',NULL),(447,1,31,'Maluku Barat Daya','-7.8079675','126.2826785','10',NULL),(448,1,31,'Maluku Tengah','-3.2541375','129.0081705','9',NULL),(449,1,31,'Maluku Tenggara','-5.6556815','132.8097965','10',NULL),(450,1,31,'Maluku Tenggara Barat','-7.499401','131.382077','9',NULL),(451,1,31,'Seram Bagian Barat','-3.1637165','128.116853','10',NULL),(452,1,31,'Seram Bagian Timur','-3.574472','130.6518145','9',NULL),(453,1,31,'Tual','-5.5463158','132.7197194','12',NULL),(454,1,32,'Ternate','0.8334515','127.3415397','12',NULL),(455,1,32,'Tidore Kepulauan','0.663004','127.4299959','13',NULL),(456,1,32,'Halmahera Selatan','-0.7456371','127.8130305','8',NULL),(457,1,32,'Halmahera Utara','1.5595055','127.8348995','9',NULL),(458,1,32,'Halmahera Barat','1.3631035','127.5929885','9',NULL),(459,1,32,'Halmahera Timur','1.0029075','128.2247209','9',NULL),(460,1,32,'Kepulauan Sula','-2.1145585','125.907455','10',NULL),(461,1,32,'Pulau Morotai','2.303793','128.409527','10',NULL),(462,1,32,'Pulau Taliabu','-1.825744','124.8049621','10',NULL),(463,1,32,'Kepulauan Tidore','0.3900146','127.6793825','10',NULL),(464,1,33,'Asmat','-5.5823894','138.5973169','8',NULL),(465,1,33,'Biak Numfor','-1.0127914','136.208342','10',NULL),(466,1,33,'Boven Digoel','-6.1535839','140.3222164','8',NULL),(467,1,33,'Deiyai','-4.1557095','136.408159','11',NULL),(468,1,33,'Dogiyai','-3.9993975','135.63729','10',NULL),(469,1,33,'Intan Jaya','-3.408609','136.742529','9',NULL),(470,1,33,'Jayapura','-3.036266','140.0377394','9',NULL),(471,1,33,'Jayawijaya','-4.1225775','138.977565','10',NULL),(472,1,33,'Keerom','-3.3267459','140.6530038','9',NULL),(473,1,33,'Kepulauan Yapen','-1.78775','136.2333441','10',NULL),(474,1,33,'Lanny Jaya','-3.9572731','138.2032004','10',NULL),(475,1,33,'Mamberamo Tengah','-3.625626','139.0325231','10',NULL),(476,1,33,'mamberamo Raya','-2.4432194','137.9772305','8',NULL),(477,1,33,'Mappi','-6.247481','139.316628','8',NULL),(478,1,33,'Merauke','-7.8721972','139.3297601','8',NULL),(479,1,33,'Mimika','-4.6299475','136.342485','9',NULL),(480,1,33,'Nabire','-3.2064089','135.496468','9',NULL),(481,1,33,'Nduga','-4.436155','138.2187995','10',NULL),(482,1,33,'Paniai','-3.7577969','136.5823125','10',NULL),(483,1,33,'Pegunungan Bintang','-4.4948153','140.4784665','9',NULL),(484,1,33,'Puncak','-3.5926999','137.416773','9',NULL),(485,1,33,'Puncak Jaya','-3.4894425','137.8448929','10',NULL),(486,1,33,'Sarmi','-2.5326055','139.0665441','8',NULL),(487,1,33,'Supiori','-0.7536575','135.5821045','11',NULL),(488,1,33,'Tolikara','-3.488774','138.4034965','10',NULL),(489,1,33,'Waropen','-2.729533','136.696883','9',NULL),(490,1,33,'Yahukimo','-4.3891721','139.5433275','9',NULL),(491,1,33,'Yalimo','-3.785127','139.4353911','10',NULL),(492,1,34,'Kota Fakfak','-2.8816615','132.2758605','13',NULL),(493,1,34,'Fuckfuck','-3.2007173','132.81428','9',NULL),(494,1,34,'Kota Sorong','-0.866267','131.309354','12',NULL),(495,1,34,'Sorong','-1.0522686','131.392793','9',NULL),(496,1,34,'Sorong Selatan','-1.6675475','132.1186083','9',NULL),(497,1,34,'Kaimana','-3.5846625','134.029867','9',NULL),(498,1,34,'Manokwari','-0.891978','133.3442235','10',NULL),(499,1,34,'Kota Manokwari','-0.8643675','134.0740985','12',NULL),(500,1,34,'Manokwari Selatan','-0.9982515','134.0023265','11',NULL),(501,1,34,'Maybat','-1.424197','132.367989','10',NULL),(502,1,34,'Pegunungan Arfak','-1.1886216','133.720846','10',NULL),(503,1,34,'Raja Ampat','-0.98697','130.785093','10',NULL),(504,1,34,'Tambraw','-0.7207635','132.477018','10',NULL),(505,1,34,'Teluk Bintuni','-2.0870355','133.322403','9',NULL),(506,1,34,'Teluk Wondama','-2.636358','134.4826865','9',NULL),(507,1,2,'Banjar Kota','-7.3724825','108.5362043','13',NULL);

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) NOT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `langitude` varchar(100) DEFAULT NULL,
  `ads` varchar(100) DEFAULT NULL,
  `zoom` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `id_UNIQUE` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

insert  into `countries`(country_id,country_name,latitude,langitude,ads,zoom) values (1,'Indonesia','-2.548926','118.0148634',NULL,'5');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feedbackcol` tinytext,
  `user_id` int(11) DEFAULT NULL,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feed_id`),
  KEY `fk_feedback_1_idx` (`user_id`),
  CONSTRAINT `fk_feedback_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `feedback` */
/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(16) NOT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `website` varchar(45) DEFAULT NULL,
  `region` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `gender` int(11) DEFAULT '0',
  `lastlog` timestamp NULL DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  `alamat` varchar(200) DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `id_UNIQUE` (`user_id`),
  KEY `fk_user_1_idx` (`city_id`),
  KEY `fk_user_2_idx` (`region`),
  CONSTRAINT `fk_user_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_2` FOREIGN KEY (`region`) REFERENCES `regions` (`reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(user_id,uname,pass,fullname,join_date,phone,email,website,region,city_id,bio,born,gender,lastlog,flags) values (1,'ripas','202cb962ac59075b964b07152d234b70','ripas3','2016-07-29 20:32:30','ripas','rif2602@gmail.com',NULL,NULL,NULL,NULL,NULL,0,'2016-08-15 16:14:25',1),(4,'ripas','202cb962ac59075b964b07152d234b70','ripas','2016-08-03 22:34:22','ripas','ripas.filqadar@gmail.com',NULL,NULL,NULL,NULL,NULL,0,NULL,0),(5,'ripas','202cb962ac59075b964b07152d234b70','ripas','2016-08-03 22:57:14','ripas','ripas.filqadar@gmail.com',NULL,NULL,NULL,NULL,NULL,0,NULL,0),(40,'ripas,','cebfa4dedd41487b9770f46f91f878a6','ripas,','2016-08-05 22:42:19','ripas,','rif2602@gmail.com,','website,',NULL,NULL,'llLl,','0000-00-00',0,NULL,1),(41,'ripas','202cb962ac59075b964b07152d234b70','ripas','2016-08-05 22:42:48','ripas','rif2602@gmail.com','website',NULL,NULL,'llLl','0000-00-00',0,NULL,1),(42,'','202cb962ac59075b964b07152d234b70','ripas filqadar','2016-08-14 21:11:38',NULL,'rif2602@gmail.com1',NULL,NULL,NULL,NULL,NULL,0,NULL,1);

/*Table structure for table `partisipant` */

DROP TABLE IF EXISTS `partisipant`;

CREATE TABLE `partisipant` (
  `parti_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `phone` tinytext,
  `email` tinytext,
  `gender` int(11) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`parti_id`),
  UNIQUE KEY `id_UNIQUE` (`parti_id`),
  KEY `fk_parti_history_1_idx` (`user_id`),
  KEY `fk_parti_history_2_idx` (`trip_id`),
  KEY `fk_parti_1_idx` (`city_id`),
  CONSTRAINT `fk_parti_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_parti_history_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_parti_history_2` FOREIGN KEY (`trip_id`) REFERENCES `trip` (`trip_id`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

/*Data for the table `partisipant` */

insert  into `partisipant`(parti_id,trip_id,user_id,fullname,city_id,phone,email,gender,born,timesubmit,status,updated,updated_by,flags) values (11,4,1,'ripas3,',NULL,'ripas,','rif2602@gmail.com,',0,'2000-01-01','2016-08-06 07:43:24',NULL,NULL,NULL,NULL),(16,8,1,'ripas3',NULL,'ripas','rif2602@gmail.com',0,NULL,'2016-08-15 19:44:08',NULL,NULL,NULL,1);

/*Table structure for table `regions` */

DROP TABLE IF EXISTS `regions`;

CREATE TABLE `regions` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `country` int(11) DEFAULT NULL,
  `region_name` varchar(50) DEFAULT NULL,
  `latitude` varchar(100) DEFAULT NULL,
  `langitude` varchar(100) DEFAULT NULL,
  `zoom` varchar(100) DEFAULT NULL,
  `ads` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `id_UNIQUE` (`reg_id`),
  UNIQUE KEY `countryCode_2` (`country`,`region_name`),
  CONSTRAINT `fk_regions_1` FOREIGN KEY (`country`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `regions` */

insert  into `regions`(reg_id,country,region_name,latitude,langitude,zoom,ads) values (1,1,'DKI Jakarta','-6.2297465','106.829518','11',NULL),(2,1,'Jawa Barat','-7.0792466','107.7353104','11',NULL),(3,1,'Banten','-6.5882168','105.9281141','10',NULL),(4,1,'Daerah Istimewa Yogyakarta','-7.8730414','110.4242874','10',NULL),(5,1,'Jawa Tengah','-7.3071521','110.123745','8',NULL),(6,1,'Jawa Timur','-7.6308544','113.5832404','8',NULL),(7,1,'Nanggroe Aceh Darussalam','4.0408634','96.648933','7',NULL),(8,1,'Sumatera Utara','1.8312921','98.7421852','7',NULL),(9,1,'Sumatera Barat','-1.556351','100.24492','7',NULL),(10,1,'Riau','0.8804467','101.919073','7',NULL),(11,1,'Kepulauan Riau','3.8723101','108.1604455','10',NULL),(12,1,'Jambi','-1.752903','102.793018','8',NULL),(13,1,'Bengkulu','-3.8954875','102.393025','8',NULL),(14,1,'Sumatera Selatan','-3.2753964','104.082144','8',NULL),(15,1,'Bangka Belitung','-2.4592931','106.978194','8',NULL),(16,1,'Lampung','-4.9461904','104.7446686','8',NULL),(17,1,'Kalimantan Barat','-0.51386','111.1108055','7',NULL),(18,1,'Kalimantan Selatan','-3.029925','115.45091','8',NULL),(19,1,'Kalimantan Tengah','-1.3843149','113.2904425','7',NULL),(20,1,'Kalimantan Timur','0.996888','116.4310645','7',NULL),(21,1,'Kalimantan Utara','2.7234529','116.2760395','8',NULL),(22,1,'Sulawesi Selatan','-4.8270885','119.4393624','7',NULL),(23,1,'Sulawesi Utara','2.5201579','124.4236516','7',NULL),(24,1,'Sulawesi Tengah','-1.1327955','121.81473','7',NULL),(25,1,'Sulawesi Tenggara','-3.850164','121.8852039','8',NULL),(26,1,'Sulawesi Barat','-2.2102175','119.3151655','8',NULL),(27,1,'Gorontalo','0.6737435','122.36169','9',NULL),(28,1,'Bali','-8.4554715','115.071577','10',NULL),(29,1,'Nusa Tenggara Barat','-8.5949886','117.953844','9',NULL),(30,1,'Nusa Tenggara Timur','-9.5355325','122.0576059','8',NULL),(31,1,'Maluku','-3.755207','128.9492764','8',NULL),(32,1,'Maluku Utara','0.6537945','128.1502326','8',NULL),(33,1,'Papua','-4.7545318','137.799296','6',NULL),(34,1,'Papua Barat','-1.624323','132.2790229','7',NULL);

/*Table structure for table `report` */

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report` (
  `rept_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(45) DEFAULT NULL,
  `report_tb` varchar(20) DEFAULT NULL,
  `tb_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `desc` varchar(200) DEFAULT NULL,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rept_id`),
  KEY `fk_report_1_idx` (`user_id`),
  CONSTRAINT `fk_report_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `report` */

/*Table structure for table `testi` */

DROP TABLE IF EXISTS `testi`;

CREATE TABLE `testi` (
  `testi_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `testimoni` tinytext,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`testi_id`),
  KEY `fk_testi_1_idx` (`trip_id`),
  KEY `fk_testi_2_idx` (`user_id`),
  CONSTRAINT `fk_testi_1` FOREIGN KEY (`trip_id`) REFERENCES `trip` (`trip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_testi_2` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `testi` */
/*Table structure for table `trip` */

DROP TABLE IF EXISTS `trip`;

CREATE TABLE `trip` (
  `trip_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `organizer_id` int(11) DEFAULT NULL,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `start_city` int(11) DEFAULT NULL,
  `destinate` tinytext,
  `timeheld` datetime DEFAULT NULL,
  `timeend` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `desc` tinytext,
  `website` tinytext,
  `deadline` datetime DEFAULT NULL,
  `quota` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`trip_id`),
  UNIQUE KEY `id_UNIQUE` (`trip_id`),
  KEY `fk_opentrip_1_idx` (`organizer_id`),
  KEY `fk_opentrip_2_idx` (`start_city`),
  CONSTRAINT `fk_opentrip_1` FOREIGN KEY (`organizer_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_opentrip_2` FOREIGN KEY (`start_city`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `trip` */

insert  into `trip`(trip_id,name,organizer_id,timesubmit,start_city,destinate,timeheld,timeend,price,desc,website,deadline,quota,status,updated,updated_by,flags) values (8,'llalala',1,'2016-08-15 19:28:18',2,'1','1970-01-01 00:00:00','1970-01-01 00:00:00',NULL,NULL,'','0000-00-00 00:00:00',0,NULL,'0000-00-00 00:00:00',NULL,1),(9,'',1,'2016-08-15 21:14:43',1,'3','2016-08-15 00:00:00','2016-09-02 00:00:00',NULL,NULL,'lalala','0000-00-00 00:00:00',10,NULL,NULL,NULL,1),(10,'',1,'2016-08-15 21:15:17',1,'1','1970-01-01 00:00:00','1970-01-01 00:00:00',NULL,NULL,'','0000-00-00 00:00:00',0,NULL,NULL,NULL,1);

/* Function  structure for function  `city_name` */

/*!50003 DROP FUNCTION IF EXISTS `city_name` */;
DELIMITER $$
/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `city_name`(ID VARCHAR(100)) RETURNS varchar(100) CHARSET latin1
BEGIN
DECLARE NAMA VARCHAR(100);
SELECT city_name INTO NAMA FROM cities WHERE city_id=ID;
RETURN NAMA;
    END */$$
DELIMITER ;

/* Function  structure for function  `region_name` */
/*!50003 DROP FUNCTION IF EXISTS `region_name` */;
DELIMITER $$
/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `region_name`(ID VARCHAR(100)) RETURNS varchar(100) CHARSET latin1
BEGIN
DECLARE NAMA VARCHAR(100);
SELECT region_name INTO NAMA FROM regions WHERE reg_id=ID;
RETURN NAMA;
    END */$$
DELIMITER ;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
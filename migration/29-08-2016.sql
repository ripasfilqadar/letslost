/*
SQLyog Enterprise - MySQL GUI v8.1 
MySQL - 5.5.5-10.1.13-MariaDB : Database - triptroo_opentrip
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`triptroo_opentrip` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `triptroo_opentrip`;

/*Table structure for table `cities` */

DROP TABLE IF EXISTS `cities`;

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `reg_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `city_name` varchar(45) NOT NULL,
  PRIMARY KEY (`city_id`),
  UNIQUE KEY `id_UNIQUE` (`city_id`),
  KEY `fk_cities_1_idx` (`reg_id`),
  KEY `fk_cities_2_idx` (`country_id`),
  CONSTRAINT `fk_cities_1` FOREIGN KEY (`reg_id`) REFERENCES `regions` (`reg_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_cities_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=512 DEFAULT CHARSET=utf8;

/*Data for the table `cities` */

insert  into `cities`(city_id,reg_id,country_id,city_name) values (1,1,1,'Jakarta'),(2,1,1,'Jakarta Barat'),(3,1,1,'Jakarta Pusat'),(4,1,1,'Jakarta Selatan'),(5,1,1,'Jakarta Timur'),(6,1,1,'Jakarta Utara'),(7,1,1,'Kepulauan Seribu'),(8,2,1,'Bandung'),(9,2,1,'Bandung Barat'),(10,2,1,'Bandung Kota'),(11,2,1,'Banjar Kota'),(12,2,1,'Bekasi'),(13,2,1,'Bekasi Kota'),(14,2,1,'Bogor'),(15,2,1,'Bogor Kota'),(16,2,1,'Ciamis'),(17,2,1,'Cianjur'),(18,2,1,'Cimahi Kota'),(19,2,1,'Cirebon'),(20,2,1,'Cirebon Kota'),(21,2,1,'Depok Kota'),(22,2,1,'Garut'),(23,2,1,'Indramayu'),(24,2,1,'Karawang'),(25,2,1,'Kota Bogor'),(26,2,1,'Kuningan'),(27,2,1,'Majalengka'),(28,2,1,'Pangandaran'),(29,2,1,'Purwakarta'),(30,2,1,'Subang'),(31,2,1,'Sukabumi'),(32,2,1,'Sukabumi Kota'),(33,2,1,'Sumedang'),(34,2,1,'Tasikmalaya'),(35,2,1,'Tasikmalaya Kota'),(36,3,1,'Cilegon'),(37,3,1,'Kota Serang'),(38,3,1,'Kota Tanggerang'),(39,3,1,'Kota Tanggerang Selatan'),(40,3,1,'Lebak'),(41,3,1,'Pandeglang'),(42,3,1,'Serang'),(43,3,1,'Tanggerang'),(44,4,1,'Bantul'),(45,4,1,'Gunung Kidul'),(46,4,1,'Kulon Progo'),(47,4,1,'Sleman'),(48,4,1,'Yogyakarta'),(49,5,1,'Banjarnegara'),(50,5,1,'Banyumas'),(51,5,1,'Batang'),(52,5,1,'Blora'),(53,5,1,'Boyolali'),(54,5,1,'Brebes'),(55,5,1,'Cilacap'),(56,5,1,'Demak'),(57,5,1,'Grobogan'),(58,5,1,'Jepara'),(59,5,1,'Karanganyar'),(60,5,1,'Kebumen'),(61,5,1,'Kendal'),(62,5,1,'Klaten'),(63,5,1,'Kota Magelang'),(64,5,1,'Kota Semarang'),(65,5,1,'Kudus'),(66,5,1,'Magelang'),(67,5,1,'Pati'),(68,5,1,'Pekalongan'),(69,5,1,'Pemalang'),(70,5,1,'Purbalingga'),(71,5,1,'Purworejo'),(72,5,1,'Rembang'),(73,5,1,'Salatiga'),(74,5,1,'Semarang'),(75,5,1,'Sragen'),(76,5,1,'Sukoharjo'),(77,5,1,'Surakarta'),(78,5,1,'Tegal'),(79,5,1,'Temanggung'),(80,5,1,'Wonogiri'),(81,5,1,'Wonosobo'),(82,6,1,'Bangkalan'),(83,6,1,'Banyuwangi'),(84,6,1,'Batu'),(85,6,1,'Blitar'),(86,6,1,'Bojonegoro'),(87,6,1,'Bondowoso'),(88,6,1,'Gresik'),(89,6,1,'Jember'),(90,6,1,'Jombang'),(91,6,1,'Kediri'),(92,6,1,'Kota Blitar'),(93,6,1,'Lamongan'),(94,6,1,'Lumajang'),(95,6,1,'Madiun'),(96,6,1,'Magetan'),(97,6,1,'Malang'),(98,6,1,'Mojokerto'),(99,6,1,'Nganjuk'),(100,6,1,'Ngawi'),(101,6,1,'Pacitan'),(102,6,1,'Pamekasan'),(103,6,1,'Pasuruan'),(104,6,1,'Ponorogo'),(105,6,1,'Probolinggo'),(106,6,1,'Sampang'),(107,6,1,'Sidoarjo'),(108,6,1,'Situbondo'),(109,6,1,'Sumenep'),(110,6,1,'Surabaya'),(111,6,1,'Trenggalek'),(112,6,1,'Tuban'),(113,6,1,'Tulungagung'),(114,7,1,'Aceh Barat'),(115,7,1,'Aceh Barat Daya'),(116,7,1,'Aceh Besar'),(117,7,1,'Aceh Jaya'),(118,7,1,'Aceh Selatan'),(119,7,1,'Aceh Singkil'),(120,7,1,'Aceh Tamiang'),(121,7,1,'Aceh Tengah'),(122,7,1,'Aceh Tenggara'),(123,7,1,'Aceh Timur'),(124,7,1,'Aceh Utara'),(125,7,1,'Banda Aceh'),(126,7,1,'Bener Meriah'),(127,7,1,'Bireuen'),(128,7,1,'Gayo Lues'),(129,7,1,'Langsa'),(130,7,1,'Lhokseumawe'),(131,7,1,'Nagan Raya'),(132,7,1,'Pidie'),(133,7,1,'Pidie Jaya'),(134,7,1,'Sabang'),(135,7,1,'Simeulue'),(136,7,1,'Subulussalam'),(137,8,1,'Asahan'),(138,8,1,'Batu Bara'),(139,8,1,'Binjai'),(140,8,1,'Dairi'),(141,8,1,'Deli Serdang'),(142,8,1,'Gunungsitoli'),(143,8,1,'Humbang Hasundutan'),(144,8,1,'Karo'),(145,8,1,'Labuhanbatu'),(146,8,1,'Labuhanbatu Selatan'),(147,8,1,'Labuhanbatu Utara'),(148,8,1,'Langkat'),(149,8,1,'Mandailing Natal'),(150,8,1,'Medan'),(151,8,1,'Nias'),(152,8,1,'Nias Barat'),(153,8,1,'Nias Selatan'),(154,8,1,'Nias Utara'),(155,8,1,'Padang Lawas'),(156,8,1,'Padang Lawas Utara'),(157,8,1,'Padangsidimpuan'),(158,8,1,'Pakpak Bharat'),(159,8,1,'Pematang Siantar'),(160,8,1,'Samosir'),(161,8,1,'Serdang Bedagai'),(162,8,1,'Sibolga'),(163,8,1,'Simalungun'),(164,8,1,'Tanjung Balai'),(165,8,1,'Tapanuli Selatan'),(166,8,1,'Tapanuli Tengah'),(167,8,1,'Tapanuli Utara'),(168,8,1,'Tebing Tinggi'),(169,8,1,'Toba Samosir'),(170,9,1,'Agam'),(171,9,1,'Bukittinggi'),(172,9,1,'Dharmasraya'),(173,9,1,'Kepulauan Mentawai'),(174,9,1,'Kota Padang'),(175,9,1,'Kota Padang Panjang'),(176,9,1,'Kota Pariaman'),(177,9,1,'Kota Solok'),(178,9,1,'Lima Puluh Kota'),(179,9,1,'Padang Pariaman'),(180,9,1,'Pasaman'),(181,9,1,'Pasaman Barat'),(182,9,1,'Payakumbuh'),(183,9,1,'Pesisir Selatan'),(184,9,1,'Sawahlunto'),(185,9,1,'Sijunjung'),(186,9,1,'Solok'),(187,9,1,'Solok Selatan'),(188,9,1,'Tanah Datar'),(189,10,1,'Batam'),(190,10,1,'Bengkalis'),(191,10,1,'Dumai'),(192,10,1,'Indragiri Hilir'),(193,10,1,'Kab Indragiri Hulu'),(194,10,1,'Kampar'),(195,10,1,'Kepulauan Meranti'),(196,10,1,'Kuantan Singingi'),(197,10,1,'Pekanbaru'),(198,10,1,'Pelalawan'),(199,10,1,'Rokan Hilir'),(200,10,1,'Rokan Hulu'),(201,10,1,'Siak'),(202,11,1,'Bintan'),(203,11,1,'Karimun'),(204,11,1,'Kepulauan Anambas'),(205,11,1,'Lingga'),(206,11,1,'Natuna'),(207,11,1,'Tanjung Pinang'),(208,12,1,'Batanghari'),(209,12,1,'Bungo'),(210,12,1,'Kerinci'),(211,12,1,'Kota Jambi'),(212,12,1,'Merangin'),(213,12,1,'Muaro Jambi'),(214,12,1,'Sorolangun'),(215,12,1,'Sungai Penuh'),(216,12,1,'Tanjung Jabung Barat'),(217,12,1,'Tanjung Jabung Timur'),(218,12,1,'Tebo'),(219,13,1,'Bengkulu Selatan'),(220,13,1,'Bengkulu Tengah'),(221,13,1,'Bengkulu Utara'),(222,13,1,'Kaur'),(223,13,1,'Kepahiang'),(224,13,1,'Kota Bengkulu'),(225,13,1,'Lebong'),(226,13,1,'Mukomuko'),(227,13,1,'Rejang Lebong'),(228,13,1,'Seluma'),(229,14,1,'Banyuasin'),(230,14,1,'Empat Lawang'),(231,14,1,'Lahat'),(232,14,1,'Lubuklinggau'),(233,14,1,'Muara Enim'),(234,14,1,'Musi Banyuasin'),(235,14,1,'Musi Rawas'),(236,14,1,'Ogan Ilir'),(237,14,1,'Ogan Komering Ilir'),(238,14,1,'Ogan Komering Ulu'),(239,14,1,'Ogan Komering Ulu Selatan'),(240,14,1,'Ogan Komering Ulu Timur'),(241,14,1,'Pagar Alam'),(242,14,1,'Palembang'),(243,14,1,'Penukal Abab Pematang Ilir'),(244,14,1,'Prabumulih'),(245,15,1,'Bangka'),(246,15,1,'Bangka Barat'),(247,15,1,'Bangka Selatan'),(248,15,1,'Bangka Tengah'),(249,15,1,'Belitung'),(250,15,1,'Belitung Timur'),(251,15,1,'Pangkal Pinang'),(252,16,1,'Bandar Lampung'),(253,16,1,'Kota Metro'),(254,16,1,'Lampung Barat'),(255,16,1,'Lampung Selatan'),(256,16,1,'Lampung Tengah'),(257,16,1,'Lampung Timur'),(258,16,1,'Lampung Utara'),(259,16,1,'Mesuji'),(260,16,1,'Pesawaran'),(261,16,1,'Pesisir Barat'),(262,16,1,'Pringsewu'),(263,16,1,'Tanggamus'),(264,16,1,'Tulang Bawang'),(265,16,1,'Tulang Bawang  Barat'),(266,16,1,'Way Kanan'),(267,17,1,'Bengkayang'),(268,17,1,'Kapuas Hulu'),(269,17,1,'Kayong Utara'),(270,17,1,'Ketapang'),(271,17,1,'Kubu Raya'),(272,17,1,'Landak'),(273,17,1,'Melawi'),(274,17,1,'Mempawah'),(275,17,1,'Pontianak'),(276,17,1,'Sambas'),(277,17,1,'Sanggau'),(278,17,1,'Sekadau'),(279,17,1,'Singkawang'),(280,17,1,'Sintang'),(281,18,1,'Balangan'),(282,18,1,'Banjar'),(283,18,1,'Banjarbaru'),(284,18,1,'Banjarmasin'),(285,18,1,'Barito Kuala'),(286,18,1,'Hulu Sungai Selatan'),(287,18,1,'Hulu Sungai Tengah'),(288,18,1,'Hulu Sungai Utara'),(289,18,1,'Kota Baru'),(290,18,1,'Tabalong'),(291,18,1,'Tanah Bumbu'),(292,18,1,'Tanah Laut'),(293,18,1,'Tapin'),(294,19,1,'Barito Selatan'),(295,19,1,'Barito Timur'),(296,19,1,'Barito Utara'),(297,19,1,'Gunung Mas'),(298,19,1,'Kapuas'),(299,19,1,'Katingan'),(300,19,1,'Kotawaringin Barat'),(301,19,1,'Kotawaringin Timur'),(302,19,1,'Lamandau'),(303,19,1,'Murung Raya'),(304,19,1,'Palangka Raya'),(305,19,1,'Pulang Pisau'),(306,19,1,'Sampit'),(307,19,1,'Seruyan'),(308,19,1,'Sukamara'),(309,20,1,'Balikpapan'),(310,20,1,'Bontang'),(311,20,1,'Kutai Barat'),(312,20,1,'Kutai Kartanegara'),(313,20,1,'Kutai Timur'),(314,20,1,'Mahakam Ulu'),(315,20,1,'Paser'),(316,20,1,'Penajam Paser Utara'),(317,20,1,'Samarinda'),(318,20,1,'Tanjung Redeb'),(319,21,1,'Bulungan'),(320,21,1,'Malinau'),(321,21,1,'Nunukan'),(322,21,1,'Tana Tidung'),(323,21,1,'Tarakan'),(324,22,1,'Balukumba'),(325,22,1,'Bantaeng'),(326,22,1,'Barru'),(327,22,1,'Bone'),(328,22,1,'Enrekang'),(329,22,1,'Gowa'),(330,22,1,'Jeneponto'),(331,22,1,'Kepulauan Selayar'),(332,22,1,'Luwu'),(333,22,1,'Luwu Timur'),(334,22,1,'Luwu Utara'),(335,22,1,'Makassar'),(336,22,1,'Maros'),(337,22,1,'Palopo'),(338,22,1,'Pangkajene Dan Kepulauan'),(339,22,1,'Parepare'),(340,22,1,'Pinrang'),(341,22,1,'Sidenreng Rappang'),(342,22,1,'Sinjai'),(343,22,1,'Soppeng'),(344,22,1,'Takalar'),(345,22,1,'Tana Toraja'),(346,22,1,'Toraja'),(347,22,1,'Toraja Utara'),(348,22,1,'Wajo'),(349,23,1,'Bitung'),(350,23,1,'Bolaang Mongondow'),(351,23,1,'Bolaang Mongondow Selatan'),(352,23,1,'Bolaang Mongondow Timur'),(353,23,1,'Bolaang Mongondow Utara'),(354,23,1,'Kepulauan Minahasa'),(355,23,1,'Kepulauan Minahasa Selatan'),(356,23,1,'Kepulauan Minahasa Tenggara'),(357,23,1,'Kepulauan Minahasa Utara'),(358,23,1,'Kepulauan Sangihe'),(359,23,1,'Kepulauan Siau Tagulandang Biaro'),(360,23,1,'Kepulauan Talaud'),(361,23,1,'Kota Manado'),(362,23,1,'Kota Tomohon'),(363,23,1,'Kotamobagu'),(364,23,1,'Manado'),(365,24,1,'Banggai'),(366,24,1,'Banggai Kepulauan'),(367,24,1,'Banggai Laut'),(368,24,1,'Buol'),(369,24,1,'Donggala'),(370,24,1,'Kota Luwuk'),(371,24,1,'Morowali'),(372,24,1,'Palu'),(373,24,1,'Parigi Moutong'),(374,24,1,'Poso'),(375,24,1,'Poso Kota'),(376,24,1,'Sigi'),(377,24,1,'Tojo Una-Una'),(378,24,1,'Toli-Toli'),(379,25,1,'Bau-Bau'),(380,25,1,'Bombana'),(381,25,1,'Buton'),(382,25,1,'Buton Selatan'),(383,25,1,'Buton Utara'),(384,25,1,'Kendari'),(385,25,1,'Kolaka'),(386,25,1,'Kolaka Timur'),(387,25,1,'Kolaka Utara'),(388,25,1,'Konawe'),(389,25,1,'Konawe Kepulauan'),(390,25,1,'Konawe Selatan'),(391,25,1,'Konawe Utara'),(392,25,1,'Muna'),(393,25,1,'Muna Barat'),(394,25,1,'Wakatobi'),(395,26,1,'Majene'),(396,26,1,'Mamaju'),(397,26,1,'Mamaju Tengah'),(398,26,1,'Mamaju Utara'),(399,26,1,'Mamase'),(400,26,1,'Mamuju'),(401,26,1,'Polewali Mandar'),(402,27,1,'Boalemo'),(403,27,1,'Bone Bolango'),(404,27,1,'Gorontalo'),(405,27,1,'Gorontalo City'),(406,27,1,'Gorontalo Utara'),(407,27,1,'Pohuwato'),(408,27,1,'Pohuwato Timur'),(409,28,1,'Badung'),(410,28,1,'Bangli'),(411,28,1,'Buleleng'),(412,28,1,'Denpasar'),(413,28,1,'Gianyar'),(414,28,1,'Jembrana'),(415,28,1,'Karangasem'),(416,28,1,'Klungkung'),(417,28,1,'Tabanan'),(418,29,1,'Bima'),(419,29,1,'Dompu'),(420,29,1,'Lombok Barat'),(421,29,1,'Lombok Tengah'),(422,29,1,'Lombok Timur'),(423,29,1,'Lombok Utara'),(424,29,1,'Sumbawa'),(425,29,1,'Sumbawa Barat'),(426,30,1,'Alor'),(427,30,1,'Belu'),(428,30,1,'Ende'),(429,30,1,'Flores Timur'),(430,30,1,'Kota Kupang'),(431,30,1,'Kupang'),(432,30,1,'Lembata'),(433,30,1,'Malaka'),(434,30,1,'Manggarai'),(435,30,1,'Manggarai Barat'),(436,30,1,'Manggarai Timur'),(437,30,1,'Nagekeo'),(438,30,1,'Ngada'),(439,30,1,'Rote Ndao'),(440,30,1,'Sabu Raijua'),(441,30,1,'Sikka'),(442,30,1,'Sumba Barat'),(443,30,1,'Sumba Barat Daya'),(444,30,1,'Sumba Tengah'),(445,30,1,'Sumba Timur'),(446,30,1,'Timor Tengah Selatan'),(447,30,1,'Timor Tengah Utara'),(448,31,1,'Ambon'),(449,31,1,'Buru'),(450,31,1,'Buru Selatan'),(451,31,1,'Kepulauan Aru'),(452,31,1,'Maluku Barat Daya'),(453,31,1,'Maluku Tengah'),(454,31,1,'Maluku Tenggara'),(455,31,1,'Maluku Tenggara Barat'),(456,31,1,'Seram Bagian Barat'),(457,31,1,'Seram Bagian Timur'),(458,31,1,'Tual'),(459,32,1,'Halmahera Barat'),(460,32,1,'Halmahera Selatan'),(461,32,1,'Halmahera Timur'),(462,32,1,'Halmahera Utara'),(463,32,1,'Kepulauan Sula'),(464,32,1,'Kepulauan Tidore'),(465,32,1,'Pulau Morotai'),(466,32,1,'Pulau Taliabu'),(467,32,1,'Ternate'),(468,32,1,'Tidore Kepulauan'),(469,33,1,'Asmat'),(470,33,1,'Biak Numfor'),(471,33,1,'Boven Digoel'),(472,33,1,'Deiyai'),(473,33,1,'Dogiyai'),(474,33,1,'Intan Jaya'),(475,33,1,'Jayapura'),(476,33,1,'Jayawijaya'),(477,33,1,'Keerom'),(478,33,1,'Kepulauan Yapen'),(479,33,1,'Lanny Jaya'),(480,33,1,'Mamberamo Raya'),(481,33,1,'Mamberamo Tengah'),(482,33,1,'Mappi'),(483,33,1,'Merauke'),(484,33,1,'Mimika'),(485,33,1,'Nabire'),(486,33,1,'Nduga'),(487,33,1,'Paniai'),(488,33,1,'Pegunungan Bintang'),(489,33,1,'Puncak'),(490,33,1,'Puncak Jaya'),(491,33,1,'Sarmi'),(492,33,1,'Supiori'),(493,33,1,'Tolikara'),(494,33,1,'Waropen'),(495,33,1,'Yahukimo'),(496,33,1,'Yalimo'),(497,34,1,'Fuckfuck'),(498,34,1,'Kaimana'),(499,34,1,'Kota Fakfak'),(500,34,1,'Kota Manokwari'),(501,34,1,'Kota Sorong'),(502,34,1,'Manokwari'),(503,34,1,'Manokwari Selatan'),(504,34,1,'Maybat'),(505,34,1,'Pegunungan Arfak'),(506,34,1,'Raja Ampat'),(507,34,1,'Sorong'),(508,34,1,'Sorong Selatan'),(509,34,1,'Tambraw'),(510,34,1,'Teluk Bintuni'),(511,34,1,'Teluk Wondama');

/*Table structure for table `countries` */

DROP TABLE IF EXISTS `countries`;

CREATE TABLE `countries` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `cntry _name` varchar(50) NOT NULL,
  PRIMARY KEY (`country_id`),
  UNIQUE KEY `id_UNIQUE` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `countries` */

insert  into `countries`(country_id,cntry _name) values (1,'Indonesia');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `feedbackcol` text,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`feed_id`),
  UNIQUE KEY `feed_id_UNIQUE` (`feed_id`),
  KEY `fk_feedback_1_idx` (`user_id`),
  CONSTRAINT `fk_feedback_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `feedback` */

/*Table structure for table `member` */

DROP TABLE IF EXISTS `member`;

CREATE TABLE `member` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(16) NOT NULL,
  `email` tinytext NOT NULL,
  `pass` varchar(45) NOT NULL,
  `city_id` int(11) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '2',
  `fullname` varchar(50) NOT NULL,
  `join_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `phone` tinytext,
  `website` tinytext,
  `born` date DEFAULT NULL,
  `gender` int(11) DEFAULT '0',
  `lastlog` timestamp NULL DEFAULT NULL,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `id_UNIQUE` (`user_id`),
  UNIQUE KEY `uname_UNIQUE` (`uname`),
  KEY `fk_member_1_idx` (`city_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `member` */

insert  into `member`(user_id,uname,email,pass,city_id,role,fullname,join_date,phone,website,born,gender,lastlog,updated,updated_by,flags) values (2,'','rif2602@gmail.com','202cb962ac59075b964b07152d234b70',0,2,'ripas filqadar','2016-08-29 09:13:40','',NULL,NULL,0,NULL,NULL,NULL,1);

/*Table structure for table `partisipant` */

DROP TABLE IF EXISTS `partisipant`;

CREATE TABLE `partisipant` (
  `parti_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `city_id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `phone` tinytext,
  `email` tinytext,
  `gender` int(11) DEFAULT NULL,
  `born` date DEFAULT NULL,
  `timesubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '0',
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`parti_id`),
  UNIQUE KEY `id_UNIQUE` (`parti_id`),
  KEY `fk_parti_1_idx` (`user_id`),
  KEY `fk_parti_2_idx` (`trip_id`),
  KEY `fk_parti_3_idx` (`city_id`),
  CONSTRAINT `fk_parti_1` FOREIGN KEY (`city_id`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_parti_history_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_parti_history_2` FOREIGN KEY (`trip_id`) REFERENCES `trip` (`trip_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `partisipant` */

/*Table structure for table `regions` */

DROP TABLE IF EXISTS `regions`;

CREATE TABLE `regions` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `reg_name` varchar(50) NOT NULL,
  PRIMARY KEY (`reg_id`),
  UNIQUE KEY `id_UNIQUE` (`reg_id`),
  KEY `fk_regions_1_idx` (`reg_name`),
  KEY `fk_regions_1` (`country_id`),
  CONSTRAINT `fk_regions_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`country_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

/*Data for the table `regions` */

insert  into `regions`(reg_id,country_id,reg_name) values (1,1,'DKI Jakarta'),(2,1,'Jawa Barat'),(3,1,'Banten'),(4,1,'Daerah Istimewa Yogyakarta'),(5,1,'Jawa Tengah'),(6,1,'Jawa Timur'),(7,1,'Aceh'),(8,1,'Sumatera Utara'),(9,1,'Sumatera Barat'),(10,1,'Riau'),(11,1,'Kepulauan Riau'),(12,1,'Jambi'),(13,1,'Bengkulu'),(14,1,'Sumatera Selatan'),(15,1,'Kepulauan Bangka Belitung'),(16,1,'Lampung'),(17,1,'Kalimantan Barat'),(18,1,'Kalimantan Selatan'),(19,1,'Kalimantan Tengah'),(20,1,'Kalimantan Timur'),(21,1,'Kalimantan Utara'),(22,1,'Sulawesi Selatan'),(23,1,'Sulawesi Utara'),(24,1,'Sulawesi Tengah'),(25,1,'Sulawesi Tenggara'),(26,1,'Sulawesi Barat'),(27,1,'Gorontalo'),(28,1,'Bali'),(29,1,'Nusa Tenggara Barat'),(30,1,'Nusa Tenggara Timur'),(31,1,'Maluku'),(32,1,'Maluku Utara'),(33,1,'Papua'),(34,1,'Papua Barat');

/*Table structure for table `report` */

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report` (
  `rept_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `tb_id` int(11) DEFAULT NULL,
  `subject` varchar(45) DEFAULT NULL,
  `report_tb` varchar(20) DEFAULT NULL,
  `descript` text,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`rept_id`),
  UNIQUE KEY `rept_id_UNIQUE` (`rept_id`),
  KEY `fk_report_1_idx` (`user_id`),
  CONSTRAINT `fk_report_1` FOREIGN KEY (`user_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `report` */

/*Table structure for table `testi` */

DROP TABLE IF EXISTS `testi`;

CREATE TABLE `testi` (
  `testi_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rate` int(11) DEFAULT '0',
  `testimoni` tinytext,
  `timesubmit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`testi_id`),
  UNIQUE KEY `testi_id_UNIQUE` (`testi_id`),
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
  `start_city` int(11) NOT NULL,
  `dest_city` int(11) NOT NULL,
  `organizer_id` int(11) NOT NULL,
  `trip_name` varchar(100) NOT NULL,
  `timesubmit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `destinate` text,
  `timeheld` datetime DEFAULT NULL,
  `timeend` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `descript` text,
  `website` tinytext,
  `deadline` datetime DEFAULT NULL,
  `quota` int(11) DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `visit` int(11) DEFAULT '0',
  `updated` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `flags` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`trip_id`),
  UNIQUE KEY `id_UNIQUE` (`trip_id`),
  KEY `fk_trip_1_idx` (`organizer_id`),
  KEY `fk_trip_2_idx` (`start_city`),
  KEY `fk_trip_3_idx` (`dest_city`),
  CONSTRAINT `fk_trip_1` FOREIGN KEY (`organizer_id`) REFERENCES `member` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trip_2` FOREIGN KEY (`start_city`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_trip_3` FOREIGN KEY (`dest_city`) REFERENCES `cities` (`city_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `trip` */

insert  into `trip`(trip_id,start_city,dest_city,organizer_id,trip_name,timesubmit,destinate,timeheld,timeend,price,descript,website,deadline,quota,status,visit,updated,updated_by,flags) values (3,1,97,2,'Bromo','2016-08-29 09:30:59','bromo','1970-01-01 00:00:00','1970-01-01 00:00:00',NULL,NULL,NULL,'0000-00-00 00:00:00',0,1,0,NULL,NULL,1);

/*Table structure for table `trip_view` */

DROP TABLE IF EXISTS `trip_view`;

/*!50001 DROP VIEW IF EXISTS `trip_view` */;
/*!50001 DROP TABLE IF EXISTS `trip_view` */;

/*!50001 CREATE TABLE `trip_view` (
  `trip_id` int(11) NOT NULL,
  `trip_name` varchar(100) NOT NULL,
  `organizer` varchar(16) NOT NULL,
  `start_city` varchar(45) NOT NULL,
  `start_reg` varchar(50) NOT NULL,
  `start_country` varchar(50) NOT NULL,
  `dest_city` varchar(45) NOT NULL,
  `dest_reg` varchar(50) NOT NULL,
  `dest_country` varchar(50) NOT NULL,
  `destinate` text,
  `timeheld` datetime DEFAULT NULL,
  `timeend` datetime DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `descript` text,
  `website` tinytext,
  `deadline` datetime DEFAULT NULL,
  `quota` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `visit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 */;

/*View structure for view trip_view */

/*!50001 DROP TABLE IF EXISTS `trip_view` */;
/*!50001 DROP VIEW IF EXISTS `trip_view` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `trip_view` AS select `trip`.`trip_id` AS `trip_id`,`trip`.`trip_name` AS `trip_name`,`member`.`uname` AS `organizer`,`startcity`.`city_name` AS `start_city`,`startreg`.`reg_name` AS `start_reg`,`startcountry`.`cntry _name` AS `start_country`,`fincity`.`city_name` AS `dest_city`,`finreg`.`reg_name` AS `dest_reg`,`fincountry`.`cntry _name` AS `dest_country`,`trip`.`destinate` AS `destinate`,`trip`.`timeheld` AS `timeheld`,`trip`.`timeend` AS `timeend`,`trip`.`price` AS `price`,`trip`.`descript` AS `descript`,`trip`.`website` AS `website`,`trip`.`deadline` AS `deadline`,`trip`.`quota` AS `quota`,`trip`.`status` AS `status`,`trip`.`visit` AS `visit` from (((((((`trip` join `member` on((`trip`.`organizer_id` = `member`.`user_id`))) join `cities` `startcity` on((`trip`.`start_city` = `startcity`.`city_id`))) join `cities` `fincity` on((`trip`.`dest_city` = `fincity`.`city_id`))) join `regions` `startreg` on((`startcity`.`reg_id` = `startreg`.`reg_id`))) join `regions` `finreg` on((`fincity`.`reg_id` = `finreg`.`reg_id`))) join `countries` `startcountry` on((`startcity`.`country_id` = `startcountry`.`country_id`))) join `countries` `fincountry` on((`fincity`.`country_id` = `fincity`.`country_id`))) where (`trip`.`flags` = 1) WITH CASCADED CHECK OPTION */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;

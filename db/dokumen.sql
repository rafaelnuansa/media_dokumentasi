/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.22-MariaDB : Database - dokumen
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dokumen` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dokumen`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT 0,
  `data` blob DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`id`,`ip_address`,`timestamp`,`data`) values 
('ci_session:suvhdv9448uouedlsltm5pdm2ifiqenn','::1',4294967295,'__ci_last_regenerate|i:1705652885;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:okdhdrqsoirqrriiegqlm2en2uf844k8','::1',4294967295,'__ci_last_regenerate|i:1705632189;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:ffq1h2mv535auc76fi3voetpqabq98p6','::1',4294967295,'__ci_last_regenerate|i:1705474744;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:87fvq0icmt483fp8grl9e9q8quc1icco','::1',4294967295,'__ci_last_regenerate|i:1705387925;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:kh5ircuvd06u9npr6r8kibecfe4ocrbp','::1',4294967295,'__ci_last_regenerate|i:1705387925;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:3t2g6c3pibd5s90a88t7g46tih1o73vq','::1',4294967295,'__ci_last_regenerate|i:1705386501;'),
('ci_session:ifjv71u6b5ad4tsg15n9rhj0h1fkvpod','::1',4294967295,'__ci_last_regenerate|i:1705387012;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:can0jro77kjli4cm53cushk4puoi4tgm','::1',4294967295,'__ci_last_regenerate|i:1705273736;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:g0n5j3s10upod1mochf5ven26622utrc','::1',4294967295,'__ci_last_regenerate|i:1704964393;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:0ak8esi9utdjb8pitknd9jk2aglfg4ra','::1',4294967295,'__ci_last_regenerate|i:1704964393;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:p232bgnhu76qpos4n38rahbosfhq8vnd','::1',4294967295,'__ci_last_regenerate|i:1704963788;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:nkovd551co4te7qsv2qg390erqp5or1k','::1',4294967295,'__ci_last_regenerate|i:1704952033;'),
('ci_session:d1rbn9fvs97h8rgdafll3qbgsutvqlbb','::1',4294967295,'__ci_last_regenerate|i:1704952033;_ci_previous_url|s:110:\"http://localhost:8081/dokumentasi_new/files-mitra/komunikasi-public-talk-kopi-talk-edisi-ke-10-spcek-with-talk\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:iuoqjkpj9sp0apo3b7ike35sq09vf7jc','::1',4294967295,'__ci_last_regenerate|i:1704867083;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:oqj34q7tl552m28rb0vkvue71jnvnk7k','::1',4294967295,'__ci_last_regenerate|i:1704792694;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:24:\"Galeri berhasil dihapus.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:6shgng5nigo1lg9a9jqjou4fico6du5t','::1',4294967295,'__ci_last_regenerate|i:1704792694;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:sq488l55m0mhp81dv322gr1cth87kmm6','::1',4294967295,'__ci_last_regenerate|i:1704785950;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:26:\"Files berhasil diperbarui.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:g4v5qqvg5nrhl1pu93e1j9b3mdaect03','::1',4294967295,'__ci_last_regenerate|i:1704785604;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ksidm0qaavko46mevqj25qdih0gf4do3','::1',4294967295,'__ci_last_regenerate|i:1704772558;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:df25jjukrnpe23vsilrg2818ulpcjkhv','::1',4294967295,'__ci_last_regenerate|i:1704637369;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:qurf5ncp2mqa5moa68muluh1pvsuh5tm','::1',4294967295,'__ci_last_regenerate|i:1704637369;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:7edmnj6t082r21ikl0h586ni3fqsdk4u','::1',4294967295,'__ci_last_regenerate|i:1704637034;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:kji7jm9n8m14qe5vdvg8ns7e8pcm63cv','::1',4294967295,'__ci_last_regenerate|i:1704613272;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:uk509ltt6asa5qtj2hetl90f4lr78ran','::1',4294967295,'__ci_last_regenerate|i:1703838627;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:mit2rot41951u70u2h67b6uutp0dm1k0','::1',4294967295,'__ci_last_regenerate|i:1703838627;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:i67rsv5cv3o9c55mg7m65r8tg4akalg6','::1',4294967295,'__ci_last_regenerate|i:1703832950;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:a3l4e60o0tqo353plih60ev0i9c5hslu','::1',4294967295,'__ci_last_regenerate|i:1703824252;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:endeq12ikfedck9o1t75o0msu9t34mjg','::1',4294967295,'__ci_last_regenerate|i:1703824136;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:3qfshaira19beqibrc9geu3j4ubf1pg9','::1',4294967295,'__ci_last_regenerate|i:1703824136;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:2srb1te1jlt5pa4eeqqg1gm3hej0g5hv','::1',4294967295,'__ci_last_regenerate|i:1703823023;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:d8pp9f81rtlqfj541o04ema5iiivo55r','::1',4294967295,'__ci_last_regenerate|i:1703822285;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:f1mmng9itirjnuhr9lh0ers1idbccffo','::1',4294967295,'__ci_last_regenerate|i:1703820284;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:dp2mhe53vmmlb89m50odrn92ubc87ho5','::1',4294967295,'__ci_last_regenerate|i:1703761914;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:o0i6cvlh8lsbte0m4805b62o5bcvlm6o','::1',4294967295,'__ci_last_regenerate|i:1703702408;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:j1anqvcbtjpqebf8hrl5d2otdohb3gff','::1',4294967295,'__ci_last_regenerate|i:1703702035;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:5btko1u078rohrcfeu69r9q664qet0n5','::1',4294967295,'__ci_last_regenerate|i:1703702408;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:rooqn2177vu5di0i7295c2ivutdtms8u','::1',4294967295,'__ci_last_regenerate|i:1703701517;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:vlp29qvhlkhniikkh1vjr3prbf4mmlo1','::1',4294967295,'__ci_last_regenerate|i:1703701516;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:tncosnoie09g6f38e4i6vgavjajumjhk','::1',4294967295,'__ci_last_regenerate|i:1703673132;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:kedr9ntvl9c3v35qsl939pqgnjordbl7','::1',4294967295,'__ci_last_regenerate|i:1703673132;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7m2boi9o25tketl7hgsdd2v0hnn7goaa','::1',4294967295,'__ci_last_regenerate|i:1703671459;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:t3hfj19l9apnt54jtk63fgkalr8i81vh','::1',4294967295,'__ci_last_regenerate|i:1703671122;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:dbru7mp7q3qb0tcme04tpdvahb4c3rtg','::1',4294967295,'__ci_last_regenerate|i:1703670775;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:is0np0g4nqqggv9pa6n0fkcou11290g8','::1',4294967295,'__ci_last_regenerate|i:1703670448;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:uan5i2jnr3ciaervmi15aa5rnvqb2e1i','::1',4294967295,'__ci_last_regenerate|i:1703670135;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4tqor54163s7hmjaneat6vd92pjajcjp','::1',4294967295,'__ci_last_regenerate|i:1703669816;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:dptradhr79b4q8u34nh7p831g2sct730','::1',4294967295,'__ci_last_regenerate|i:1703669398;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:g9ucqv54it6ehusijui30j473vkigk1i','::1',4294967295,'__ci_last_regenerate|i:1703668720;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:a0nj73ejikkfgm3dolil6f0qu4ion101','::1',4294967295,'__ci_last_regenerate|i:1703668180;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-3\";'),
('ci_session:6nrh2a8e9j70jsknt6hhpa75qrflat54','::1',4294967295,'__ci_last_regenerate|i:1703664563;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:p607s104erau68b39slqildj7rg2eh5r','::1',4294967295,'__ci_last_regenerate|i:1703663703;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-3\";'),
('ci_session:qqqio8mrko1mrh410dgqgkme2i5ctgk1','::1',4294967295,'__ci_last_regenerate|i:1703663703;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:hs7jp49gr649fm2rgqv9ur1v3o5qhcqh','::1',4294967295,'__ci_last_regenerate|i:1703663360;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:4hd2gdvkln032r2mhhnigl13midretat','::1',4294967295,'__ci_last_regenerate|i:1703663360;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:79r40c6rohkta7lj4g7gssklqlk3n1j7','::1',4294967295,'__ci_last_regenerate|i:1703662114;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:7ksbn17d8j37jts1vmvr1b5vlq5qg75p','::1',4294967295,'__ci_last_regenerate|i:1703661670;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:3d78k9d0iloroln8m450rcma0bodsinb','::1',4294967295,'__ci_last_regenerate|i:1703661110;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/video\";'),
('ci_session:7qljs6b1klea06k8oak2ct0ii5i89b32','::1',4294967295,'__ci_last_regenerate|i:1703660724;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:k23p88rmc5kqg6qdauar7q8ihqmtd60r','::1',4294967295,'__ci_last_regenerate|i:1703660402;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:498fof5f4vdd8upnd6g9810l1ftjt476','::1',4294967295,'__ci_last_regenerate|i:1703656397;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:1gojpbm0l9bgmscq3kkonef0ttmlou58','::1',4294967295,'__ci_last_regenerate|i:1703655948;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:fu8tem4g922npj7ois6730if5r6rg8hl','::1',4294967295,'__ci_last_regenerate|i:1703654863;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:8sash3ip5fsrg1go9ai524b0r0f6ldif','::1',4294967295,'__ci_last_regenerate|i:1703654863;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:s6g8t4aqrm16917ot7l24qe9ukegigd8','::1',4294967295,'__ci_last_regenerate|i:1703654508;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:eqrcc1th5egun9d9ofhkrrtaaf2okafl','::1',4294967295,'__ci_last_regenerate|i:1703653967;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:kt6p9slu6tofne0htq86b3nbbluj1tdt','::1',4294967295,'__ci_last_regenerate|i:1703653967;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:ltidnq3raf7tije8go2mk7ch3q0o8ao5','::1',4294967295,'__ci_last_regenerate|i:1703653519;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:j68do5fv947cocdq4cuu32ue53kv5smt','::1',4294967295,'__ci_last_regenerate|i:1703649462;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/video\";'),
('ci_session:1som1bpbbcq15m4c7vnbare5gjdgqq2p','::1',4294967295,'__ci_last_regenerate|i:1703648077;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:8q1vjh9dqer9f0b9r4v7v2ftunu68d4h','::1',4294967295,'__ci_last_regenerate|i:1703648464;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:rj79pfuks7p82smruar72buc6qhfpg3i','::1',4294967295,'__ci_last_regenerate|i:1703647675;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:8vuv5cns1gttinfsi3bp5r9kjtk22k1p','::1',4294967295,'__ci_last_regenerate|i:1703647299;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:3r1vopba94jhk9u2urh5lmcf6aar9kck','::1',4294967295,'__ci_last_regenerate|i:1703647675;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:2req8j9qmd0air2pn8fr2hc2a9a2p73d','::1',4294967295,'__ci_last_regenerate|i:1703646939;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:a596jspv8v6v88g56h95h254n0t8ebac','::1',4294967295,'__ci_last_regenerate|i:1703646482;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:e5j4da6uuu5a2p3r683uheiuiie2fl68','::1',4294967295,'__ci_last_regenerate|i:1703645596;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:sdqmel9eobff6lgjgvsgghg5v45ao233','::1',4294967295,'__ci_last_regenerate|i:1703577186;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/settings-web\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";_ci_old_input|a:2:{s:3:\"get\";a:0:{}s:4:\"post\";a:6:{s:14:\"csrf_test_name\";s:32:\"ba634b183940a7134ad2dc243c40f751\";s:9:\"web_title\";s:53:\"Media Dokumentasi Dan Informasi - Pemprov DKI Jakarta\";s:10:\"web_author\";s:9:\"PusdokDKI\";s:12:\"web_keywords\";s:9:\"PusdokDKI\";s:15:\"web_description\";s:53:\"Media Dokumentasi Dan Informasi - Pemprov DKI Jakarta\";s:9:\"wa_apikey\";s:20:\"z3FD+31japY0Tw2iX3X8\";}}__ci_vars|a:3:{s:13:\"_ci_old_input\";s:3:\"old\";s:21:\"_ci_validation_errors\";s:3:\"old\";s:6:\"errors\";s:3:\"old\";}_ci_validation_errors|a:1:{s:8:\"wa_admin\";s:31:\"The wa_admin field is required.\";}errors|a:1:{s:8:\"wa_admin\";s:31:\"The wa_admin field is required.\";}'),
('ci_session:b261k16d4fuk61s4nk5omko28ll8pj04','::1',4294967295,'__ci_last_regenerate|i:1703577186;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/settings-web\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";_ci_old_input|a:2:{s:3:\"get\";a:0:{}s:4:\"post\";a:6:{s:14:\"csrf_test_name\";s:32:\"ba634b183940a7134ad2dc243c40f751\";s:9:\"web_title\";s:43:\"Pusat Media Pemerintah Provinsi DKI Jakarta\";s:10:\"web_author\";s:11:\"Pusat Media\";s:12:\"web_keywords\";s:11:\"Pusat Media\";s:15:\"web_description\";s:43:\"Pusat Media Pemerintah Provinsi DKI Jakarta\";s:9:\"wa_apikey\";s:20:\"z3FD+31japY0Tw2iX3X8\";}}__ci_vars|a:3:{s:13:\"_ci_old_input\";s:3:\"old\";s:21:\"_ci_validation_errors\";s:3:\"old\";s:6:\"errors\";s:3:\"old\";}_ci_validation_errors|a:1:{s:8:\"wa_admin\";s:31:\"The wa_admin field is required.\";}errors|a:1:{s:8:\"wa_admin\";s:31:\"The wa_admin field is required.\";}'),
('ci_session:6kc9rmt7vkbnma48h9bc4ehlcr85l9dv','::1',4294967295,'__ci_last_regenerate|i:1703576816;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:tqtlgaik2h2a3gn0aesud85el3j1r8q3','::1',4294967295,'__ci_last_regenerate|i:1703576435;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:cgahlbmbrujbor8e1pfmvolli9uhen5p','::1',4294967295,'__ci_last_regenerate|i:1703568380;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:uses7arofpc88e0hronvk79d7873klc6','::1',4294967295,'__ci_last_regenerate|i:1703568380;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:g05qjd454ohulm5da7biq95n7epokesv','::1',4294967295,'__ci_last_regenerate|i:1703564776;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:fe9uffgutj8crnvi6i54i94ouiabnuja','::1',4294967295,'__ci_last_regenerate|i:1703566713;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:p4vc7aco7cm5o52sjhu075fc8303un70','::1',4294967295,'__ci_last_regenerate|i:1703134929;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7pfsf2ga68a2lc64k2k3dfsnrl3p8qrg','::1',4294967295,'__ci_last_regenerate|i:1703132925;_ci_previous_url|s:63:\"http://localhost:8081/dokumentasi_new/files-mitra/kegiatan-sdkp\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4gkrtd7nvk61klol1jml3p6nu94pmc0i','::1',4294967295,'__ci_last_regenerate|i:1703134929;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:6nc8m3nlognf0lmc78tise0t1mepps28','::1',4294967295,'__ci_last_regenerate|i:1703131677;_ci_previous_url|s:52:\"http://localhost:8081/dokumentasi_new/admin/youtube/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:29:\"Youtube berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:3b2p461ksl2dlf7qdjm2ah0g6ac4obk0','::1',4294967295,'__ci_last_regenerate|i:1703131307;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:h15k3g3eiabkuev9u6ri65s1onpk5fu0','::1',4294967295,'__ci_last_regenerate|i:1703130776;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/video\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:63oqffn19n2ltqkm2j2p87e6230hgukq','::1',4294967295,'__ci_last_regenerate|i:1703129903;_ci_previous_url|s:63:\"http://localhost:8081/dokumentasi_new/files-mitra/kegiatan-sdkp\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:8v6bn6gtrtavl07fjqj3ut7urg9r6qbj','::1',4294967295,'__ci_last_regenerate|i:1703128938;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:qhag2gnp9khu3skvg13id22g2c9hg3k1','::1',4294967295,'__ci_last_regenerate|i:1703128356;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:lmkje11qf7d70tmft592j4k0orkatmv8','::1',4294967295,'__ci_last_regenerate|i:1703127995;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:q0ourim2u0alqgbjg079s7aa4pcl857t','::1',4294967295,'__ci_last_regenerate|i:1703126979;_ci_previous_url|s:88:\"http://localhost:8081/dokumentasi_new/files/download/1703060122_6fff792c2bdca599ee2c.jpg\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ltitjqv7lstosa03jibgk87thj0jrn5q','::1',4294967295,'__ci_last_regenerate|i:1703117272;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7bsnql8p529jbuf9uofdgf24pt9iv0o0','::1',4294967295,'__ci_last_regenerate|i:1703117272;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:jq66ebe1u4qajiehglsa8mv018mqkh2f','::1',4294967295,'__ci_last_regenerate|i:1703116958;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:u5ficko1pto22vrl7trsvnk303s0fq47','::1',4294967295,'__ci_last_regenerate|i:1703116657;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:s0hb1bhbqhsfv3romu3kot1thupmmd3q','::1',4294967295,'__ci_last_regenerate|i:1703091023;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:6ttp7te4ipuf59ig7159u8iclvjfqh09','::1',4294967295,'__ci_last_regenerate|i:1703091023;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7u1ni3725bn9dcpq2qjp52r9lbso7iri','::1',4294967295,'__ci_last_regenerate|i:1703089540;_ci_previous_url|s:34:\"http://localhost:8081/dokumentasi/\";'),
('ci_session:nlbl5hnjd7licdt7iq84dvuleuh7gpir','::1',4294967295,'__ci_last_regenerate|i:1703090568;_ci_previous_url|s:88:\"http://localhost:8081/dokumentasi_new/files/download/1703060122_6fff792c2bdca599ee2c.jpg\";'),
('ci_session:pph4udhf5ft5umkg33n9ce488am0rasd','::1',4294967295,'__ci_last_regenerate|i:1703061762;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";'),
('ci_session:fb07hjl7d73ktu78hma1dkhml9ddgtbr','::1',4294967295,'__ci_last_regenerate|i:1703061762;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";'),
('ci_session:la8in8s7d3oncbf5t56hkrq59u54i8bo','::1',4294967295,'__ci_last_regenerate|i:1703061349;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:gdipddoa07b4it8lmn14kae2n9ln52p2','::1',4294967295,'__ci_last_regenerate|i:1703061349;_ci_previous_url|s:94:\"http://localhost:8081/dokumentasi_new/files-mitra/download/1703061069_445b052d86d05b4aa982.jpg\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:617j9qku4n58knqcrk4u7jfkeau3homi','::1',4294967295,'__ci_last_regenerate|i:1703060976;_ci_previous_url|s:88:\"http://localhost:8081/dokumentasi_new/files/download/1703060122_29a9e562733271237cf1.jpg\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:t2gglhu6oru0qrcosp9cbttid38prv84','::1',4294967295,'__ci_last_regenerate|i:1703060199;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-2\";'),
('ci_session:jtseglc7d26ljgno80ajlco9jc9t65ku','::1',4294967295,'__ci_last_regenerate|i:1703060298;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-3\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:jbsf2b43j45pidv3l2gpdl37h5b7t4h5','::1',4294967295,'__ci_last_regenerate|i:1703060199;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-2\";'),
('ci_session:ua33a3nchbili7f4quu7t991j42caar5','::1',4294967295,'__ci_last_regenerate|i:1703059950;_ci_previous_url|s:88:\"http://localhost:8081/dokumentasi_new/files/download/1702435170_386a1289a9f47f812d72.jpg\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ci48l3be39du18b6ggqmvsvq3v4h6ln4','::1',4294967295,'__ci_last_regenerate|i:1703059337;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:pq6o014otocr0t427miabrg1pgm29hvj','::1',4294967295,'__ci_last_regenerate|i:1702979585;_ci_previous_url|s:88:\"http://localhost:8081/dokumentasi_new/files/download/1699879439_2fde178a73a2ab7847ec.PNG\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:lc9ihb2rejnee1vnl4r3lhehel7ambmn','::1',4294967295,'__ci_last_regenerate|i:1702979585;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-2\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:m5fo8r5ki7sv5b1poksbtd7ghk9deiic','::1',4294967295,'__ci_last_regenerate|i:1702978842;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-2\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:r4svku1pj1069cebrb623779v65i80i7','::1',4294967295,'__ci_last_regenerate|i:1702977978;_ci_previous_url|s:84:\"http://localhost:8081/dokumentasi_new/files/badan-pengembangan-sumber-daya-manusia-2\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:1cm39vogph2ic48aal40a9ke1hddiok1','::1',4294967295,'__ci_last_regenerate|i:1702977576;_ci_previous_url|s:63:\"http://localhost:8081/dokumentasi_new/admin/files/download/1232\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:rv2t6paq2okgi5kck8qcp12qie60i1ra','::1',4294967295,'__ci_last_regenerate|i:1702977246;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0rc2v9oedq89q7bmvmj5vovnms7fch9u','::1',4294967295,'__ci_last_regenerate|i:1702963694;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:9ggbmlv68pjh3q0g4ovcf5tjejd7e8t6','::1',4294967295,'__ci_last_regenerate|i:1702963694;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:fgpsmenvvamptd9cu9v973ok63rhlr7h','::1',4294967295,'__ci_last_regenerate|i:1702960356;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:n7mdlo9a9q0kputrpc5be633kg3001lj','::1',4294967295,'__ci_last_regenerate|i:1702959541;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:c7meqde55nid0dkasauclr3afbhohk7c','::1',4294967295,'__ci_last_regenerate|i:1702958589;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:26:\"Files berhasil diperbarui.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:buadq141faqgs2queuppkt0c7je8prm8','::1',4294967295,'__ci_last_regenerate|i:1702958039;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:pm7m59pk6ml42cirkd4dbj0omlvn3fnf','::1',4294967295,'__ci_last_regenerate|i:1702912355;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:ub17mlrevnds89cqconh9v0asf857sc9','::1',4294967295,'__ci_last_regenerate|i:1702596690;'),
('ci_session:0b0lhfiq75inv1d853tlfac3r8eo0v1c','::1',4294967295,'__ci_last_regenerate|i:1702823045;_ci_previous_url|s:34:\"http://localhost:8081/dokumentasi/\";'),
('ci_session:shnprdjrqiegea60gbk911ubnogd9jfk','::1',4294967295,'__ci_last_regenerate|i:1702446443;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:e0kkc4qmtlbhnn0emu1dvtrdimfeat0e','::1',4294967295,'__ci_last_regenerate|i:1702446443;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:b3hu3utcvs3ti75igdffc33ski58obhe','::1',4294967295,'__ci_last_regenerate|i:1702446125;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:tm0gs9q7rctrr0k51kdutv1668u5oo8h','::1',4294967295,'__ci_last_regenerate|i:1702445763;_ci_previous_url|s:59:\"http://localhost:8081/dokumentasi_new/files-mitra/mitra-dki\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ilqqo7iun5tcndcl718944mokoohj1jq','::1',4294967295,'__ci_last_regenerate|i:1702445356;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:99n18fe8370nmpe1ml0d18t51qgmjuml','::1',4294967295,'__ci_last_regenerate|i:1702445010;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:s2j7a793m5imko1p4onadnjsg2rd1qun','::1',4294967295,'__ci_last_regenerate|i:1702439298;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:nr7omtk13puoqb1836slcg7ibo1vrdme','::1',4294967295,'__ci_last_regenerate|i:1702439875;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:9brr8p654e28ciscaq8c73dmaqd9pjtb','::1',4294967295,'__ci_last_regenerate|i:1702440514;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:sh7qdn4lgcsblarugr57p1a5lv9cg09t','::1',4294967295,'__ci_last_regenerate|i:1702438771;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:risuqotq0d5uf2a9pq4be53icbeea030','::1',4294967295,'__ci_last_regenerate|i:1702436574;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4mbjfolflcativfn6gtf63ae51gjqrts','::1',4294967295,'__ci_last_regenerate|i:1702435757;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:8dfq68e4gj6n12v1nb5fa89dl3rn8omk','::1',4294967295,'__ci_last_regenerate|i:1702435415;_ci_previous_url|s:75:\"http://localhost:8081/dokumentasi_new/files/kota-administrasi-jakarta-timur\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:gk44b2ia48km0p7i4a4d079vhsiuvimv','::1',4294967295,'__ci_last_regenerate|i:1702435085;_ci_previous_url|s:39:\"http://localhost:8081/dokumentasi/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4285m2aqc9te80ha14nibq590lhcu0ab','::1',4294967295,'__ci_last_regenerate|i:1702433060;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:sac1mvcmkd4f5rn2tlgr1u4j41ls9p2t','::1',4294967295,'__ci_last_regenerate|i:1702430533;_ci_previous_url|s:39:\"http://localhost:8081/dokumentasi/files\";'),
('ci_session:g532e7vums6pe0oke6590noqp4vmcmo1','::1',4294967295,'__ci_last_regenerate|i:1702428838;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:j3q41f62q0lj9327jo9g77vesr40egk1','::1',4294967295,'__ci_last_regenerate|i:1702427925;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:jserl16r6t8fe549dqota08rmlksou74','::1',4294967295,'__ci_last_regenerate|i:1702383395;_ci_previous_url|s:39:\"http://localhost:8081/dokumentasi/files\";'),
('ci_session:pnpop8jhepmlu7c5j8q4qect3nsk3gkb','::1',4294967295,'__ci_last_regenerate|i:1702383395;_ci_previous_url|s:34:\"http://localhost:8081/dokumentasi/\";'),
('ci_session:cvr8lqou9003187so3no84kufote65o0','::1',4294967295,'__ci_last_regenerate|i:1702339339;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:j6isa239rij1plp2fugugv18mh7hl0ad','::1',4294967295,'__ci_last_regenerate|i:1702339339;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/admin\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:iivggjevpsfg2n1av4pc5824mtvbsr7u','::1',4294967295,'__ci_last_regenerate|i:1702338801;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:6s9r3303m56u02i827mih2cl94puv2om','::1',4294967295,'__ci_last_regenerate|i:1702338424;_ci_previous_url|s:52:\"http://localhost:8081/dokumentasi_new/admin/youtube/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:29:\"Youtube berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:4lf7q0thh1vigi1jgauvbrn48k9kgh4r','::1',4294967295,'__ci_last_regenerate|i:1702337995;_ci_previous_url|s:52:\"http://localhost:8081/dokumentasi_new/admin/youtube/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:29:\"Youtube berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:3vdob12uo85ojqo50rs8hegj9i1evbhk','::1',4294967295,'__ci_last_regenerate|i:1702337627;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:4f3eaa5v58c67l0nhup0j36ja4c38iou','::1',4294967295,'__ci_last_regenerate|i:1702336273;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:9jbnrkbqn3m5g8csn2ln23jfem6iqh67','::1',4294967295,'__ci_last_regenerate|i:1702309877;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:cavl0n6iguhbfab92uuor4lef62hcbhq','::1',4294967295,'__ci_last_regenerate|i:1702309877;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:md3r3d6kqhd2jufvjk3vn2e39oee26q9','::1',4294967295,'__ci_last_regenerate|i:1702308817;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:pjev57tc2p9qm0ndntha66u2e645e26j','::1',4294967295,'__ci_last_regenerate|i:1702251360;_ci_previous_url|s:51:\"http://localhost:8081/dokumentasi_new/admin/youtube\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:hcmdcuhpug68lsf43dafo2o65fb9ib97','::1',4294967295,'__ci_last_regenerate|i:1702251360;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:idvj1br1b0cmvquhovmt8g5u21p1hpd7','::1',4294967295,'__ci_last_regenerate|i:1702251039;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:lc6a0d898lq0akvdlh4ih13m460lvih3','::1',4294967295,'__ci_last_regenerate|i:1702250477;_ci_previous_url|s:41:\"http://localhost:8081/dokumentasi_new/coj\";'),
('ci_session:un8h3mhlcmnbjnfs2jcmpj7hbimnnvss','::1',4294967295,'__ci_last_regenerate|i:1702250164;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:1hl6e17db0hr8nb7jscou581iahjbs8a','::1',4294967295,'__ci_last_regenerate|i:1702248613;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/files-mitra\";'),
('ci_session:m3p1pqmtf0shi25tve2nblropthsobqm','::1',4294967295,'__ci_last_regenerate|i:1702248966;_ci_previous_url|s:81:\"http://localhost:8081/dokumentasi_new/files-mitra/kota-administrasi-jakarta-timur\";'),
('ci_session:vuc2cr304dimnv3q0ctg76d0bcs49u0j','::1',4294967295,'__ci_last_regenerate|i:1702247972;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0q0jcqv52m23f1vp6ag37fs8d8hqoltc','::1',4294967295,'__ci_last_regenerate|i:1702247608;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:sognf4rug0o4tiooaf2ci9rf7gvc98t0','::1',4294967295,'__ci_last_regenerate|i:1702247164;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:aival26h1cf2uu0i25tnepskg6g0e3rs','::1',4294967295,'__ci_last_regenerate|i:1702246793;_ci_previous_url|s:81:\"http://localhost:8081/dokumentasi_new/files-mitra/kota-administrasi-jakarta-timur\";'),
('ci_session:ch4a3udfmknpvs67pd71fij9lqr4s9c6','::1',4294967295,'__ci_last_regenerate|i:1702246156;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:aljrl452q0ljmgkb46fgui6h8tngo9t8','::1',4294967295,'__ci_last_regenerate|i:1702246154;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:ijbq8r1qvs9m92crlis7l6vj46eqm9o8','::1',4294967295,'__ci_last_regenerate|i:1702220875;_ci_previous_url|s:34:\"http://localhost:8081/appku/kontak\";'),
('ci_session:pdgttg9gkeej844k9t6hlp5lc76fj96u','::1',4294967295,'__ci_last_regenerate|i:1702246154;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:qdlk7va7a352eat7tn30vm3g7dsccgtd','::1',4294967295,'__ci_last_regenerate|i:1702220539;_ci_previous_url|s:27:\"https://appku.xosgames.com/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0apgrhus57lh8hs53dlv7s6c24bsq055','::1',4294967295,'__ci_last_regenerate|i:1702220167;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:512d5807ah63n9d4j5a6jj0qnfvi0vc4','::1',4294967295,'__ci_last_regenerate|i:1702218414;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:3p92rlmjlri8h4v2020grf031voehir5','::1',4294967295,'__ci_last_regenerate|i:1702218110;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:91t87j9i03n9praq55a7um9g883kcr1l','::1',4294967295,'__ci_last_regenerate|i:1702217809;_ci_previous_url|s:81:\"http://localhost:8081/dokumentasi_new/files-mitra/kota-administrasi-jakarta-timur\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:nfnfpr9spqgfvesavh9ltrbf5pqa21kr','::1',4294967295,'__ci_last_regenerate|i:1702217058;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:32:\"Files Mitra berhasil diperbarui.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:l163lng71i7ufk6bv89abhc96mjc8ier','::1',4294967295,'__ci_last_regenerate|i:1702215909;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:9mqo3ahjk68o0m7vrphrsiepahtnd11b','::1',4294967295,'__ci_last_regenerate|i:1702216228;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:77tj96urqlhkri7likc2bjs3dmhcdqp9','::1',4294967295,'__ci_last_regenerate|i:1702196055;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:27:\"Galeri berhasil diperbarui.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:7ht7qs23ulb6qhkcs8qmppi260n6mk2d','::1',4294967295,'__ci_last_regenerate|i:1702196055;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:f74csm59nc0eip70km5lo19ikj9jug84','::1',4294967295,'__ci_last_regenerate|i:1702195748;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:786tgoopr727po04vvlrq0ekmgkmcmeg','::1',4294967295,'__ci_last_regenerate|i:1702195399;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4mtll2kjarfa4t10ojtuhhp6nlrug7kq','::1',4294967295,'__ci_last_regenerate|i:1702195079;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:3stmc68ueqdra52f54h78mdp53oj67tj','::1',4294967295,'__ci_last_regenerate|i:1702194745;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:p3sil1miacj9esd7ditdhv4un9jgunbt','::1',4294967295,'__ci_last_regenerate|i:1702187630;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:daomv153elsct7nr1d1n59n6ktq3l7cv','::1',4294967295,'__ci_last_regenerate|i:1702187288;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:l60hckvqm5al51plcns2ct1ivhkd7k0k','::1',4294967295,'__ci_last_regenerate|i:1702186964;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7ebs6qosa0tmaa9159rcabjmdu9imbv4','::1',4294967295,'__ci_last_regenerate|i:1702186507;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:gd1kps4g3h8in9ia8ch70q9m8eflmflt','::1',4294967295,'__ci_last_regenerate|i:1702185257;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:01l5u47e1o1105la5b5kk64h03gis39n','::1',4294967295,'__ci_last_regenerate|i:1702184862;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:lvkebagqale1cba0o1aa30pmuturm42c','::1',4294967295,'__ci_last_regenerate|i:1702125724;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:6rcr2sf53r2sjbfj6nvie9f012iqaugo','::1',4294967295,'__ci_last_regenerate|i:1702125724;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:tc3rjfvvvsh132op8ua8ilmd9m6cta32','::1',4294967295,'__ci_last_regenerate|i:1702124587;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:0n06fltnd1oo9c96ra0hb6uc94sjao1n','::1',4294967295,'__ci_last_regenerate|i:1702125423;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0vrh35rdul7li47s5r0svv2j69fedich','::1',4294967295,'__ci_last_regenerate|i:1702124587;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";'),
('ci_session:v150t0qn03gvvgbh5a04i5q8hsaehrd8','::1',4294967295,'__ci_last_regenerate|i:1702123746;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";'),
('ci_session:1dhc4uq4s8uvgue2isc9tnqo3i1ravcf','::1',4294967295,'__ci_last_regenerate|i:1702123385;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:o4scpl88sgsvt2n477646agddqbdke8s','::1',4294967295,'__ci_last_regenerate|i:1702124763;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:r1caorh5214stcu7m047367bv1gnm0a6','::1',4294967295,'__ci_last_regenerate|i:1702123061;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:hf01as4ghmufc9i4va0tc3qd7734a69l','::1',4294967295,'__ci_last_regenerate|i:1702122967;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:a06usmu67qpg4k5i47scn3jq911ggfoi','::1',4294967295,'__ci_last_regenerate|i:1702117711;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:r3nuikijml4vfgcrhjmtf482abqfaf98','::1',4294967295,'__ci_last_regenerate|i:1702117407;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ph1e801r4veteutocm37503dp6lmm3oe','::1',4294967295,'__ci_last_regenerate|i:1701973711;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";'),
('ci_session:qhsm1elmun7takps68bjmntsnvlsm4i4','::1',4294967295,'__ci_last_regenerate|i:1701973711;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";'),
('ci_session:rac0cm069eb7lsu2dremha8m22jrbdvc','::1',4294967295,'__ci_last_regenerate|i:1701973404;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:ok15n7p8k9eh5hjtn25aa1obbpl8950a','::1',4294967295,'__ci_last_regenerate|i:1701965945;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:8gu95070m6aih4bulj7v6jv9q03rs76v','::1',4294967295,'__ci_last_regenerate|i:1701964969;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:phlen6u3c2tlcsl88c8qbvhnklkrgj4j','::1',4294967295,'__ci_last_regenerate|i:1701965945;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:lb6ot3477u7pj7q6vsht2n5t0jjj83mh','::1',4294967295,'__ci_last_regenerate|i:1701964969;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:8ko071iild0atvbjdkt49vj6sqasqr99','::1',4294967295,'__ci_last_regenerate|i:1701964629;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:cole57t6u8nleeqh0ehvdrvpdjgqr09p','::1',4294967295,'__ci_last_regenerate|i:1701964324;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:a1pa5aq52j1t2l0jffg7l9b1cfcqoupt','::1',4294967295,'__ci_last_regenerate|i:1701963979;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:897g9i7joi44594a8m6bnqdhr8trkmn6','::1',4294967295,'__ci_last_regenerate|i:1701963636;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:tgmjr8sgdfq94p7m02fo6e1gc23tsqs4','::1',4294967295,'__ci_last_regenerate|i:1701963111;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:hq1ldd6rijf6e2gckbo1p6gg244sijvj','::1',4294967295,'__ci_last_regenerate|i:1701964696;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:kh51uus8hqo7euunl39psk955sun1v0b','::1',4294967295,'__ci_last_regenerate|i:1701962420;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:s476l4a0emltk07firaeoft15ri1ebff','::1',4294967295,'__ci_last_regenerate|i:1701962025;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:40k2jdf3g28116unldqcsg51lajqqnsn','::1',4294967295,'__ci_last_regenerate|i:1701961536;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4imsolg83vsgmgfk7c5pt9k9rko7orbu','::1',4294967295,'__ci_last_regenerate|i:1701960914;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:d0mqv2pepkcgna3le1dfdf51uetmrhkr','::1',4294967295,'__ci_last_regenerate|i:1701960469;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:gb4krs5m0pssvd8uf9hj6mf5u6p22473','::1',4294967295,'__ci_last_regenerate|i:1701961117;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:t9l47ur6rc9pphmg937vl7poasissatf','::1',4294967295,'__ci_last_regenerate|i:1701960157;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:04duk9u00q8u8d28t21qfodakr2h5d88','::1',4294967295,'__ci_last_regenerate|i:1701959856;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:d6dfg91p94d3l2r4uojek0ipje2sptef','::1',4294967295,'__ci_last_regenerate|i:1701960032;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ivcb32c8pf18fiordj9ttisdsh7nv0vb','::1',4294967295,'__ci_last_regenerate|i:1701959253;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7st74v4naahff994cmdou0laspba5n3g','::1',4294967295,'__ci_last_regenerate|i:1701958731;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:f3bg71h5nnchceveh1vakckm9rh06bhf','::1',4294967295,'__ci_last_regenerate|i:1701958424;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:iqdsq4ab32aqhp4f3n86272d053jj4nl','::1',4294967295,'__ci_last_regenerate|i:1701957761;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:h8b182eu5pvhjctvqq3j8p4nusiapl1l','::1',4294967295,'__ci_last_regenerate|i:1701958111;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:r8juodauu72922n01at03mjs7var6k98','::1',4294967295,'__ci_last_regenerate|i:1701827780;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";'),
('ci_session:fg4k0fk0g7fp25j54cd66e6jup27hlpm','::1',4294967295,'__ci_last_regenerate|i:1701768980;_ci_previous_url|s:70:\"http://localhost:8081/dokumentasi_new/files/360-hari-membangun-jakarta\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:intr0pcum64itsdu0iuha7nv8bmgptci','::1',4294967295,'__ci_last_regenerate|i:1701768980;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ur8nl2102sj2m6ctd2bnd6lqj7ibihdj','::1',4294967295,'__ci_last_regenerate|i:1701767558;_ci_previous_url|s:34:\"http://localhost:8081/dokumentasi/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:2h7650ke4t0seo4s7e231urqut7pg3cq','::1',4294967295,'__ci_last_regenerate|i:1701766721;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:983n00hn6li47vrn875cgliat2p1vlf9','::1',4294967295,'__ci_last_regenerate|i:1701767991;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ohps954dhbrlfa3jorqiljeak74pd4ue','::1',4294967295,'__ci_last_regenerate|i:1701765804;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:7enamhj6mu02mkt01jvc6v6ltd822iop','::1',4294967295,'__ci_last_regenerate|i:1701766420;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:rbfjr801mk8mper356rohukkjkgo75tr','::1',4294967295,'__ci_last_regenerate|i:1701765001;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:h7d86190vnpn74jqbpe9rd043qb20qis','::1',4294967295,'__ci_last_regenerate|i:1701764122;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:544e4c35p9q3mdhl738aukfepjnsgpdj','::1',4294967295,'__ci_last_regenerate|i:1701764669;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:5nff05p916apdnurdvkrvbprdvgbnabi','::1',4294967295,'__ci_last_regenerate|i:1701752939;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:u31n4cptqlhulg8e5cii5fc193ha912k','::1',4294967295,'__ci_last_regenerate|i:1701752939;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:9bgnuj9nm0qn6oof60fs401pe5obb5lq','::1',4294967295,'__ci_last_regenerate|i:1701752164;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:an65nu1rul2vag87nq8nho8l7ub616u1','::1',4294967295,'__ci_last_regenerate|i:1701751117;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:lps1u0mrrsh0rsolnrunl1k7gsin94of','::1',4294967295,'__ci_last_regenerate|i:1701752567;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:t6nlkg97vj5i11jsmmo0vb1lef6hiogs','::1',4294967295,'__ci_last_regenerate|i:1701750770;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:2t17ib3co15s868js8aodv5n04tjcdgu','::1',4294967295,'__ci_last_regenerate|i:1701747868;_ci_previous_url|s:39:\"http://localhost:8081/dokumentasi/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:tgqocb2av6ak0c6eal34v7gkhknpkmrg','::1',4294967295,'__ci_last_regenerate|i:1701748303;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ive7i1mcb6utio9sskh24qsn7s0le39b','::1',4294967295,'__ci_last_regenerate|i:1701747563;_ci_previous_url|s:39:\"http://localhost:8081/dokumentasi/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:brcloae260pvleq19tpmfkv740omtrpo','::1',4294967295,'__ci_last_regenerate|i:1705907741;'),
('ci_session:sg1mv2vahq38c4qsv7psgi90jn3shu42','::1',4294967295,'__ci_last_regenerate|i:1705907741;'),
('ci_session:t0gbei128d2o1pe6ukck1tqjme3c7vad','::1',4294967295,'__ci_last_regenerate|i:1705907741;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:4s0ob2t4fhv3v0fcgdb0nv2b0259rad3','::1',4294967295,'__ci_last_regenerate|i:1705916387;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:v663bgg6fb35ko4jvikv64tnttccscbk','::1',4294967295,'__ci_last_regenerate|i:1705982075;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:itqk8kfjn5f76k7uk7d7smo23lpi37ad','::1',4294967295,'__ci_last_regenerate|i:1705994896;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:in7h0vcpl0aq24nu7ja7vhvm7407i75b','::1',4294967295,'__ci_last_regenerate|i:1705995216;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:m5k22ps19258uqhlomqdrqm8uteo3719','::1',4294967295,'__ci_last_regenerate|i:1705996423;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:us1cvf04cestl51v858tr0pcks3cp4qg','::1',4294967295,'__ci_last_regenerate|i:1705997016;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:drougio9ic0ovadtiblvmcaofdr4pkgv','::1',4294967295,'__ci_last_regenerate|i:1705997016;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:3ks4cvq0lf3547jn9f7j5asqsr8acq05','::1',4294967295,'__ci_last_regenerate|i:1706161487;'),
('ci_session:fvuk0dqckhs698g30j1p1ja0jvfejfse','::1',4294967295,'__ci_last_regenerate|i:1706161604;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:bcnkbh0lpavjm1obgfq446v47ubdiret','::1',4294967295,'__ci_last_regenerate|i:1706164618;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:fa65ceh76qc50p90ui8anb1dk4bjlbav','::1',4294967295,'__ci_last_regenerate|i:1706237241;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:gi66eqvnlscpbposi2moa5hstu8edh47','::1',4294967295,'__ci_last_regenerate|i:1706238151;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:k2k7cggnpprmm10scl3ibghb9rhi1ba8','::1',4294967295,'__ci_last_regenerate|i:1706238151;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:1ua3neoahvfi44k6lb2jtg36lkocvrn8','::1',4294967295,'__ci_last_regenerate|i:1706262836;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:rb2l3jpltk9g9bq30mncjbnnajg925vf','::1',4294967295,'__ci_last_regenerate|i:1706509129;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:jttabumuaalv1s0q5hdr5dtbdolo0rpn','::1',4294967295,'__ci_last_regenerate|i:1706583675;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0luko347ikbto7ohbejgj5hepapvb7ku','::1',4294967295,'__ci_last_regenerate|i:1706584206;_ci_previous_url|s:50:\"http://localhost:8081/dokumentasi_new/admin/files/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:d5c8jo5sncnqfn4j3v031ga7r3stslcg','::1',4294967295,'__ci_last_regenerate|i:1706584507;_ci_previous_url|s:55:\"http://localhost:8081/dokumentasi_new/admin/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4dlfncedob3kl93nabmrpa4gjf2mhsha','::1',4294967295,'__ci_last_regenerate|i:1706585326;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:f1c3mmbt5c9bp0v6r0sdtj1j3bqmb8tb','::1',4294967295,'__ci_last_regenerate|i:1706585810;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:9sqaebl9uu5a8mb6fq76uef800gfhkt8','::1',4294967295,'__ci_last_regenerate|i:1706590385;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:rpf3435qv0chh5r1bsp6nh2ev8tvm8rq','::1',4294967295,'__ci_last_regenerate|i:1706590771;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:qlb8to3q7j1av2rnc5drt1ukh7t5s6ek','::1',4294967295,'__ci_last_regenerate|i:1706593493;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:qrl2r1678feu71t6cldg61gf3nomabpc','::1',4294967295,'__ci_last_regenerate|i:1706596085;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:75oo16kq7qbcpl9mrlk83ffobicelhfp','::1',4294967295,'__ci_last_regenerate|i:1706596085;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ek31rba1d1jielmgjn1drqmvh9b8h4jf','::1',4294967295,'__ci_last_regenerate|i:1706604078;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:mms6jhbeqhq7k7grgl2ldfq59fapvqfe','::1',4294967295,'__ci_last_regenerate|i:1707023565;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:a32mb5nlukreq64o12s3th30gvt0mdvj','::1',4294967295,'__ci_last_regenerate|i:1707023717;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:2f8aflfrski47cu9tkl33h31batim73o','::1',4294967295,'__ci_last_regenerate|i:1707025589;_ci_previous_url|s:38:\"http://localhost:8081/dokumentasi_new/\";'),
('ci_session:gclsmjb5m853gtdjhiodibp2s7uba1h7','::1',4294967295,'__ci_last_regenerate|i:1707025820;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:vcbclcm53gonmfshsj23kio95hgvmp1f','::1',4294967295,'__ci_last_regenerate|i:1707042089;_ci_previous_url|s:34:\"http://localhost:8081/dokumentasi/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4ls6qetu16rknq4jnt1d7ue59pij2c9o','::1',4294967295,'__ci_last_regenerate|i:1707042544;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:jkclm6veqgvgddcfubda9jjktgrbltnn','::1',4294967295,'__ci_last_regenerate|i:1707042849;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ng8mpv69e41shs1vl1p82d65ij5oju1k','::1',4294967295,'__ci_last_regenerate|i:1707043163;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:32:\"Files Mitra berhasil diperbarui.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:fdnk3k7cjpgojioha2vudkfd5uokpa23','::1',4294967295,'__ci_last_regenerate|i:1707043163;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/admin/user\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:e81qj2dpigb51h9mibj16phgpo44g085','::1',4294967295,'__ci_last_regenerate|i:1707090910;_ci_previous_url|s:38:\"http://localhost:8081/appku/auth/login\";'),
('ci_session:t824rmtp6etg712feaap94kblvvmnu22','::1',4294967295,'__ci_last_regenerate|i:1707090911;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:i66ta50uc2jka1avthh4aqusqnpl49e7','::1',4294967295,'__ci_last_regenerate|i:1707186201;'),
('ci_session:e3tu76erifutgn3qtm5ej779ftsk6etm','::1',4294967295,'__ci_last_regenerate|i:1707187929;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:k364h1kq4tfreo9eu8fgnac6sk7mscu9','::1',4294967295,'__ci_last_regenerate|i:1707187929;_ci_previous_url|s:38:\"http://localhost:8081/appku/auth/login\";'),
('ci_session:me0ljqpbauoslgqkfg633bn4ofdilo4s','::1',4294967295,'__ci_last_regenerate|i:1707638370;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:pmrhpmtg7hn2iiqt9krl3vapucso5pds','::1',4294967295,'__ci_last_regenerate|i:1707655921;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:n51fl6fcgdampcbulq5m3bmo98ptsll9','::1',4294967295,'__ci_last_regenerate|i:1707655921;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:2f2k997n6nkn8udc03t2s0oc1v69mlja','::1',4294967295,'__ci_last_regenerate|i:1707666129;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:60gb6dm0e6aclo9o0mhe6ris6s3vl59s','::1',4294967295,'__ci_last_regenerate|i:1707666129;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:pv0ovq5gr8j2husubguhmtskrrtfcl9b','::1',4294967295,'__ci_last_regenerate|i:1707699507;'),
('ci_session:crp1ov7q7balcng6f89imc37i02v5h52','::1',4294967295,'__ci_last_regenerate|i:1707702272;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:l34cl3v07n9082i31jq5u0bqf1tebudm','::1',4294967295,'__ci_last_regenerate|i:1707700811;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:eii2r5l9jg3jkma6hr1m27ogvpt0848d','::1',4294967295,'__ci_last_regenerate|i:1707703258;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:sukiu0e7jplhs544g1aie0al3cl6c14m','::1',4294967295,'__ci_last_regenerate|i:1707703611;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ghuegr6l2cfbrclo01nb1muvec52ovf0','::1',4294967295,'__ci_last_regenerate|i:1707704119;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:6qnh6g6m90eunhjhjo75tsdn7b6e6mhs','::1',4294967295,'__ci_last_regenerate|i:1707704548;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:66qgmealei44riev9ft0ovjs709q42pe','::1',4294967295,'__ci_last_regenerate|i:1707705478;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:bpo3iifopclirl7bh2sgl1641uu62ata','::1',4294967295,'__ci_last_regenerate|i:1707704901;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:p6d6bfpk6irvijens1gjilj7pibhvo4q','::1',4294967295,'__ci_last_regenerate|i:1707705264;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:mpc8nn6beqt46br71lo94u380hi9e849','::1',4294967295,'__ci_last_regenerate|i:1707705264;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ekk45f9gguro8spgsiff9ppjh3o12qv0','::1',4294967295,'__ci_last_regenerate|i:1707705478;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:6gt6jrlke0md6hto8imhhkqe770veot8','::1',4294967295,'__ci_last_regenerate|i:1707718356;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:ea8psmm00bto7sl0tme55fct68q96ufi','::1',4294967295,'__ci_last_regenerate|i:1707718356;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:tvij7bcu66r7olniijdq5mrb7thh5he0','::1',4294967295,'__ci_last_regenerate|i:1707718610;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:ll9venghhj8is99rsd1knh4a24daufqr','::1',4294967295,'__ci_last_regenerate|i:1707744007;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:9cemou3cp22mnb4tfmqtuslip4lcebv9','::1',4294967295,'__ci_last_regenerate|i:1707757311;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";success|s:28:\"Galeri berhasil ditambahkan.\";__ci_vars|a:1:{s:7:\"success\";s:3:\"old\";}'),
('ci_session:cknb1s0dn0f06tqg061s5404p912gljq','::1',4294967295,'__ci_last_regenerate|i:1707757311;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:jv4htomdh0q4kmulpqa62tds614v4s0c','::1',4294967295,'__ci_last_regenerate|i:1707793967;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:us0mcqo3v8u951993t6rbcmt0dhc0hpr','::1',4294967295,'__ci_last_regenerate|i:1707803183;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files/create\";'),
('ci_session:qpn8gkgvkm56lka069ho7fkqj76gjsq1','::1',4294967295,'__ci_last_regenerate|i:1707803617;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:21r6cosmo7olcijvk3dfuc2qm5pk70b9','::1',4294967295,'__ci_last_regenerate|i:1707804099;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:t8a9bnsve2maplqrjbgdgb070d8cqg7v','::1',4294967295,'__ci_last_regenerate|i:1707804492;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ei1oija876gq0upjcqqi1ma2ejmv65rc','::1',4294967295,'__ci_last_regenerate|i:1707805116;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:0erjch4e2ceu9jonfo6spvpiuccq1vi7','::1',4294967295,'__ci_last_regenerate|i:1707805451;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ba2pkhlto0b5u0dd4s1ss7vnnndmgelf','::1',4294967295,'__ci_last_regenerate|i:1707809806;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:mbhk1bnvnn9rd15aa4b4c6ant1jrlgv5','::1',4294967295,'__ci_last_regenerate|i:1707810593;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:2iu45c13sq2prdvdjtb238eh7nm3eiuc','::1',4294967295,'__ci_last_regenerate|i:1707811334;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:eeqou0cvho80ka3cmn6k0qcd8vctsnt2','::1',4294967295,'__ci_last_regenerate|i:1707811714;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:9c9am6jbldhdbrnaea3i59oli9fkak92','::1',4294967295,'__ci_last_regenerate|i:1707815945;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:ciaghdjbf20svufeojkmvr218hup1u5h','::1',4294967295,'__ci_last_regenerate|i:1707816401;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:nd8lmdl9os26ig0mpnurj31nm62npo6l','::1',4294967295,'__ci_last_regenerate|i:1707816793;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:k3b8v7p3gf56du21pc71e9dfgkmukra4','::1',4294967295,'__ci_last_regenerate|i:1707818073;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:h7h5dnc79jrlktb47uufi8kfcge734c5','::1',4294967295,'__ci_last_regenerate|i:1707818073;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/admin/files\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:te4kaiub1nnvrpaqdm7bg0jh0l8bj2ub','::1',4294967295,'__ci_last_regenerate|i:1707926331;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:jtsr9bg523ms4acmnb7hhj7u8d9tbfat','::1',4294967295,'__ci_last_regenerate|i:1707926331;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:otborcvuk45efa1ecs1icn9kt40he9uj','::1',4294967295,'__ci_last_regenerate|i:1707966328;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/auth/login\";'),
('ci_session:5063aes2njad38ja1ae9u6lfkrac9qa0','::1',4294967295,'__ci_last_regenerate|i:1707966328;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";'),
('ci_session:qtsu9uql3i488nag4gk2hn5fm9dt2qan','::1',4294967295,'__ci_last_regenerate|i:1707966652;_ci_previous_url|s:44:\"http://localhost:8081/dokumentasi_new/admin/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:uan5hkm877aoa202oj5lrm48icfjf20t','::1',4294967295,'__ci_last_regenerate|i:1707966652;_ci_previous_url|s:52:\"http://localhost:8081/dokumentasi_new/admin/youtube/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:trju0mhuihqunlb83jke2pq3bjcsrt0s','::1',4294967295,'__ci_last_regenerate|i:1707968136;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/settings-web\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:lscu8atmc9k120pl4q6kg1id6d3ao7ov','::1',4294967295,'__ci_last_regenerate|i:1707968450;_ci_previous_url|s:62:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/create\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:4mgg4c0nfm63aml4kf0qkcg8ebrmclp6','::1',4294967295,'__ci_last_regenerate|i:1707968836;_ci_previous_url|s:56:\"http://localhost:8081/dokumentasi_new/admin/files-mitra/\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:s5abmjeojd77jfvpqhgele04jmfhpc88','::1',4294967295,'__ci_last_regenerate|i:1707969176;_ci_previous_url|s:49:\"http://localhost:8081/dokumentasi_new/files-mitra\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:upefmh8fm5lavtrqre13jkcjgah34u5n','::1',4294967295,'__ci_last_regenerate|i:1707969517;_ci_previous_url|s:43:\"http://localhost:8081/dokumentasi_new/video\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";'),
('ci_session:8pghmn916hl1aq0ff9ftd5oo2aqrge3s','::1',4294967295,'__ci_last_regenerate|i:1707969517;_ci_previous_url|s:48:\"http://localhost:8081/dokumentasi_new/admin/user\";isLogin|b:1;username|s:5:\"Admin\";role|s:1:\"1\";');

/*Table structure for table `files_gambar_mitra` */

DROP TABLE IF EXISTS `files_gambar_mitra`;

CREATE TABLE `files_gambar_mitra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `files_id` int(11) DEFAULT NULL,
  `url_gambar` varchar(255) DEFAULT NULL,
  `files_alias` varchar(100) DEFAULT NULL,
  `is_utama` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `produk_id` (`files_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `files_gambar_mitra` */

insert  into `files_gambar_mitra`(`id`,`files_id`,`url_gambar`,`files_alias`,`is_utama`) values 
(1,1,'public/img/files_mitra/1707968493_f91101dd3d45e320ea26.png','1707968493_f91101dd3d45e320ea26.png',NULL),
(2,1,'public/img/files_mitra/1707968493_61b74649dd9ffe245e50.png','1707968493_61b74649dd9ffe245e50.png',NULL);

/*Table structure for table `files_histori` */

DROP TABLE IF EXISTS `files_histori`;

CREATE TABLE `files_histori` (
  `files_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `keyword` varchar(250) DEFAULT NULL,
  `date_kegiatan` timestamp NULL DEFAULT NULL,
  `fotografer` varchar(25) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `slug` varchar(250) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`files_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `files_histori` */

/*Table structure for table `files_mitra` */

DROP TABLE IF EXISTS `files_mitra`;

CREATE TABLE `files_mitra` (
  `files_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(500) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `keyword` varchar(250) DEFAULT NULL,
  `date_kegiatan` timestamp NULL DEFAULT NULL,
  `lokasi` varchar(500) DEFAULT NULL,
  `fotografer` varchar(25) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `slug` varchar(500) NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`files_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `files_mitra` */

insert  into `files_mitra`(`files_id`,`nama`,`deskripsi`,`keyword`,`date_kegiatan`,`lokasi`,`fotografer`,`kategori`,`status`,`slug`,`date_create`) values 
(1,'Test 1','Test 1','keyword, test','2024-02-15 00:00:00','Jl. permata, Gedung Perdana','Om Bob','5','Aktif','test-1','2024-02-15 10:47:47');

/*Table structure for table `mst_kanal` */

DROP TABLE IF EXISTS `mst_kanal`;

CREATE TABLE `mst_kanal` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_kanal` */

insert  into `mst_kanal`(`id`,`nama`,`code`,`status`) values 
(1,'TV','KP/RM01',1),
(2,'Radio','KP/RM02',1),
(3,'Media Cetak','KP/RM03',1),
(4,'Instagram','KP/RM04',1),
(5,'Facebook','KP/RM05',1),
(6,'LinkedIn','KP/RM06',1),
(7,'Rapat/Audiensi/Workshop/Bintek','KP/RM07',1),
(8,'Website (Portal Berita, Forum Online, Website Organisasi)','KP/RM08',1),
(9,'Lainnya','KP/RM09',1),
(10,'Twitter','KP/RM10',1),
(11,'Youtube','KP/RM11',1);

/*Table structure for table `mst_kategori` */

DROP TABLE IF EXISTS `mst_kategori`;

CREATE TABLE `mst_kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_kategori` */

insert  into `mst_kategori`(`id`,`nama`,`code`,`status`) values 
(1,'File 1','FL',1),
(2,'File 2','FL',1),
(3,'File 3','FL',1),
(4,'File 4','FL',1),
(5,'File Mitra 1','FM',0),
(6,'File Mitra 2','FM',0),
(7,'File Mitra 3','FM',0);

/*Table structure for table `mst_konfirm` */

DROP TABLE IF EXISTS `mst_konfirm`;

CREATE TABLE `mst_konfirm` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `mst_konfirm` */

insert  into `mst_konfirm`(`role_id`,`role_name`,`status`) values 
(1,'PUBLISH',1),
(2,'UN-PUBLISH',1);

/*Table structure for table `settings_web` */

DROP TABLE IF EXISTS `settings_web`;

CREATE TABLE `settings_web` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `web_title` varchar(255) DEFAULT NULL,
  `web_icon` varchar(255) DEFAULT NULL,
  `web_logo` varchar(255) DEFAULT NULL,
  `web_author` varchar(255) DEFAULT NULL,
  `web_keywords` varchar(255) DEFAULT NULL,
  `web_description` text DEFAULT NULL,
  `wa_admin` varchar(50) DEFAULT NULL,
  `wa_apikey` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `settings_web` */

insert  into `settings_web`(`id`,`web_title`,`web_icon`,`web_logo`,`web_author`,`web_keywords`,`web_description`,`wa_admin`,`wa_apikey`) values 
(1,'Media Dokumentasi','1700002572_1da89311b43997c674e.png','1700002572_da63703ebc1c52935ad.jpeg','Pusdok','Pusdok','Media Dokumentasi','6282261295237','z3FD+31japY0Tw2iX3X8');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_whatsapp` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('1','2') NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`email`,`no_whatsapp`,`password`,`role`,`date_create`) values 
(9,'Admin','admin@admin.com',NULL,'$2y$10$5myi16r7hPCg2zqmnr.wme4p/I2lLteqkcBUgHumuZXoylBv.Q5fi','1','2023-10-25 11:34:14'),
(8,'Member','member1@gmail.com','08985239779','$2y$10$nEbplcxbXwokJ9puUAe2Uu9bC/BUfBHoasJ2qil3HyQX4fhmUzGE2','2','2023-10-25 11:19:22'),
(13,'user','admin@mail.com','0212222222','$2y$10$l/.Wjs//8WLzHAd9FcAbY.LFz00QvrpaC33hpECF1BP0BOXY.8UGq','2','2023-11-16 11:39:36');

/*Table structure for table `youtube` */

DROP TABLE IF EXISTS `youtube`;

CREATE TABLE `youtube` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gambar` varchar(255) DEFAULT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `date_create` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

/*Data for the table `youtube` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
